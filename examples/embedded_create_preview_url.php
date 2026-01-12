<?php
require_once(__DIR__ . '/../vendor/autoload.php');

// Configure API key authorization: X-API-KEY
$config = new BoldSign\Configuration();
$config->setApiKey('YOUR_API_KEY');

$apiInstance = new BoldSign\Api\TemplateApi($config);
try {
    $embedded_request = new BoldSign\Model\EmbeddedTemplatePreviewJsonRequest();
    $embedded_request->setShowToolbar(true);
    $result = $apiInstance->createEmbeddedPreviewUrl("TEMPLATE_ID", $embedded_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateApi->createEmbeddedPreviewUrl: ', $e->getMessage(), PHP_EOL;
}
