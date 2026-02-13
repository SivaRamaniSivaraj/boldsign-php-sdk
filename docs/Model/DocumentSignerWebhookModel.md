# # DocumentSignerWebhookModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**signer_name** | **string** |  | [optional]
**signer_role** | **string** |  | [optional]
**signer_email** | **string** |  | [optional]
**id** | **string** |  | [optional]
**group_signers** | [**\BoldSign\Model\DocumentGroupSignerWebhookModel[]**](DocumentGroupSignerWebhookModel.md) |  | [optional]
**phone_number** | [**\BoldSign\Model\PhoneNumberWebhookModel**](PhoneNumberWebhookModel.md) |  | [optional]
**status** | **string** |  | [optional]
**enable_access_code** | **bool** |  | [optional]
**is_authentication_failed** | **bool** |  | [optional]
**enable_email_otp** | **bool** |  | [optional]
**is_delivery_failed** | **bool** |  | [optional]
**is_viewed** | **bool** |  | [optional]
**order** | **int** |  | [optional]
**signer_type** | **string** |  | [optional]
**sign_type** | **string** |  | [optional]
**group_id** | **string** |  | [optional]
**is_reassigned** | **bool** |  | [optional]
**reassign_message** | **string** |  | [optional]
**decline_message** | **string** |  | [optional]
**last_activity_date** | **\DateTime** |  | [optional]
**authentication_type** | **string** |  | [optional]
**id_verification** | [**\BoldSign\Model\IdVerificationSignerWebhookModel**](IdVerificationSignerWebhookModel.md) |  | [optional]
**allow_field_configuration** | **bool** |  | [optional]
**last_reminder_sent_on** | **\DateTime** |  | [optional]
**authentication_retry_count** | **int** |  | [optional]
**authentication_settings** | [**\BoldSign\Model\SignerAuthenticationWebhookModel**](SignerAuthenticationWebhookModel.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
