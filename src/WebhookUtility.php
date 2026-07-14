<?php
/**
 * WebhookUtility
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  BoldSign
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
 
namespace BoldSign;
 
use BoldSign\Model\WebhookEvent;
use BoldSign\Model\WebhookEventData;
use BoldSign\Model\DocumentEvent;
use BoldSign\Model\TemplateEvent;
use BoldSign\Model\SenderIdentityEvent;
use BoldSign\Model\IdentityVerificationEvent;
use BoldSign\Model\WebhookEventMetadata;

/**
 * WebhookUtility Class Doc Comment
 *
 * @category Class
 * @package  BoldSign
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class WebhookUtility
{
    const BOLD_SIGN_EVENT_HEADER = "X-BoldSign-Event";
    const BOLD_SIGN_SIGNATURE_HEADER = "X-BoldSign-Signature";
    const DEFAULT_TIME_TOLERANCE = 300;
 
    /**
     * Retrieves the BoldSign event header from the current request.
     *
     * @return string|null
     */
    public static function getEventHeader(): ?string
    {
        return $_SERVER['HTTP_X_BOLDSIGN_EVENT'] ?? null;
    }
 
    /**
     * Retrieves the BoldSign signature header from the current request.
     *
     * @return string|null
     */
    public static function getSignatureHeader(): ?string
    {
        return $_SERVER['HTTP_X_BOLDSIGN_SIGNATURE'] ?? null;
    }
 
    /**
     * Parses a JSON string from a BoldSign webhook into a WebhookEvent object.
     *
     * @param string $jsonStr The JSON string payload.
     * @return WebhookEvent A WebhookEvent object with the appropriate typed data model populated.
     */
    public static function parseEvent(string $jsonStr)
    {   
        $data = json_decode($jsonStr, true);
        $data = self::convertUnixTimestamps($data);
    
        // Determine the object type BEFORE deserialization
        $objectType = $data['data']['object'] ?? null;
    
        $webhookEvent = new WebhookEvent();
    
        // Deserialize event metadata
        if (isset($data['event'])) {
            $event = ObjectSerializer::deserialize($data['event'], WebhookEventMetadata::class);
            $webhookEvent->setEvent($event);
        }
    
        // Deserialize data payload to the appropriate event type
        if ($objectType && isset($data['data'])) {
            switch ($objectType) {
                case 'document':
                    $webhookEvent->setData(
                        ObjectSerializer::deserialize($data['data'], DocumentEvent::class)
                    );
                    break;
                
                case 'template':
                    $webhookEvent->setData(
                        ObjectSerializer::deserialize($data['data'], TemplateEvent::class)
                    );
                    break;
                
                case 'senderIdentity':
                    $webhookEvent->setData(
                        ObjectSerializer::deserialize($data['data'], SenderIdentityEvent::class)
                    );
                    break;
                
                case 'identityVerification':
                    $webhookEvent->setData(
                        ObjectSerializer::deserialize($data['data'], IdentityVerificationEvent::class)
                    );
                    break;
                
                default:
                    $webhookEvent->setData(
                        ObjectSerializer::deserialize($data['data'], WebhookEventData::class)
                    );
            }
        }
    
        if (isset($data['context'])) {
            $webhookEvent->setContext($data['context']);
        }
        if (isset($data['document'])) {
            $webhookEvent->setDocument($data['document']);
        }
    
        return $webhookEvent;
    }
 
    /**
     * Recursively converts Unix timestamp integers in the data array to ISO 8601
     * date strings, so that ObjectSerializer can parse them as \DateTime without error.
     *
     * @param array $data The decoded JSON data array.
     * @return array The data array with Unix timestamps converted to ISO 8601 strings.
     */
   
    protected static function convertUnixTimestamps(array $data): array
    {
        foreach ($data as $key => $value) {
            if (is_int($value)) {
                    if ($value > 0) {
                        $dt = new \DateTimeImmutable('@' . $value);
                        $data[$key] = $dt->setTimezone(new \DateTimeZone('UTC'))->format(\DateTime::ATOM);
                    }
            }
            elseif (is_array($value)) {
                $data[$key] = self::convertUnixTimestamps($value);
            }
        }
        return $data;
    }
 
 
    /**
     * Validates the signature header.
     *
     * @param string $jsonPayload The raw JSON payload.
     * @param string $signatureHeader The signature header (X-BoldSign-Signature).
     * @param string $secretKey The signing secret.
     * @param int $tolerance Time tolerance in seconds.
     * @throws \Exception
     */
    public static function validateSignature(string $jsonPayload, string $signatureHeader, string $secretKey, int $tolerance = self::DEFAULT_TIME_TOLERANCE)
    {
        self::_validateSignature($jsonPayload, $signatureHeader, $secretKey, $tolerance, time());
    }
 
    /**
     * Internal signature validation.
     */
    protected static function _validateSignature(string $jsonPayload, string $signatureHeader, string $secretKey, int $tolerance, int $utcNow)
    {
        if (empty($jsonPayload)) {
            throw new \InvalidArgumentException("jsonPayload cannot be null or empty");
        }
        if (empty($signatureHeader)) {
            throw new \InvalidArgumentException("signatureHeader cannot be null or empty");
        }
        if (empty($secretKey)) {
            throw new \InvalidArgumentException("secretKey cannot be null or empty");
        }
 
        $hmacSignatures = self::_parseBoldSignSignature($signatureHeader);
       
        if (!isset($hmacSignatures['t']) || empty($hmacSignatures['t'])) {
            throw new \Exception("Timestamp 't' not found in signature header");
        }
       
        $timestamp = $hmacSignatures['t'][0];
        $generatedSignature = self::_generateHmacSignature($secretKey, $jsonPayload, $timestamp);
 
        $s0Values = isset($hmacSignatures['s0']) ? $hmacSignatures['s0'] : [];
        $s1Values = isset($hmacSignatures['s1']) ? $hmacSignatures['s1'] : [];
       
        if (!self::_isSignatureMatched($generatedSignature, $s0Values) &&
            !self::_isSignatureMatched($generatedSignature, $s1Values)) {
            throw new \Exception("Signature mismatch");
        }
 
        $tsInt = (int)$timestamp;
        if (abs($utcNow - $tsInt) > $tolerance) {
            throw new \Exception("Timestamp not in allowed tolerance");
        }
    }
 
    /**
     * Parses the signature header into a key-value array.
     */
    protected static function _parseBoldSignSignature(string $signatureHeader): array
    {
        $pairs = explode(',', $signatureHeader);
        $result = [];
        foreach ($pairs as $pairStr) {
            $parts = explode('=', trim($pairStr), 2);
            if (count($parts) != 2) {
                throw new \Exception("Unexpected characters found while parsing signature header");
            }
            $key = trim($parts[0]);
            $value = trim($parts[1]);
            if (!isset($result[$key])) {
                $result[$key] = [];
            }
            $result[$key][] = $value;
        }
        return $result;
    }
 
    /**
     * Generates the HMAC SHA256 signature.
     */
    protected static function _generateHmacSignature(string $secretKey, string $payload, string $timestamp): string
    {
        $message = $timestamp . "." . $payload;
        return hash_hmac('sha256', $message, $secretKey);
    }
 
    /**
     * Compares the generated signature with the header signatures.
     */
    protected static function _isSignatureMatched(string $signature, array $signatures): bool
    {
        foreach ($signatures as $s) {
            if (hash_equals($s, $signature)) {
                return true;
            }
        }
        return false;
    }
}