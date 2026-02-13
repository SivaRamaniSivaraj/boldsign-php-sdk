# # DocumentEvent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** |  | [optional]
**document_id** | **string** |  | [optional]
**message_title** | **string** |  | [optional]
**document_description** | **string** |  | [optional]
**status** | **string** |  | [optional]
**sender_detail** | [**\BoldSign\Model\DocumentSender**](DocumentSender.md) |  | [optional]
**signer_details** | [**\BoldSign\Model\DocumentSignerWebhookModel[]**](DocumentSignerWebhookModel.md) |  | [optional]
**cc_details** | [**\BoldSign\Model\DocumentCcWebhookModel[]**](DocumentCcWebhookModel.md) |  | [optional]
**on_behalf_of** | **string** |  | [optional]
**created_date** | **\DateTime** |  | [optional]
**expiry_date** | **\DateTime** |  | [optional]
**enable_signing_order** | **bool** |  | [optional]
**disable_emails** | **bool** |  | [optional]
**revoke_message** | **string** |  | [optional]
**error_message** | **string** |  | [optional]
**labels** | **string[]** |  | [optional]
**is_combined_audit** | **bool** |  | [optional]
**is_combined_attachment** | **bool** |  | [optional]
**brand_id** | **string** |  | [optional]
**document_download_option** | **string** |  | [optional]
**meta_data** | **array<string,string>** |  | [optional]
**failed_delivery_mode** | **string** |  | [optional]
**behalf_of** | [**\BoldSign\Model\BehalfOfWebhookModel**](BehalfOfWebhookModel.md) |  | [optional]
**allowed_signature_types** | **string[]** |  | [optional]
**group_signer_settings** | [**\BoldSign\Model\GroupSignerSettingsWebhookModel**](GroupSignerSettingsWebhookModel.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
