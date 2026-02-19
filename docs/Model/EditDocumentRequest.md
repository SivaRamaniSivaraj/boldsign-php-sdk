# # EditDocumentRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**files** | [**\BoldSign\Model\EditDocumentFile[]**](EditDocumentFile.md) |  | [optional]
**title** | **string** |  | [optional]
**message** | **string** |  | [optional]
**signers** | [**\BoldSign\Model\EditDocumentSigner[]**](EditDocumentSigner.md) |  | [optional]
**cc** | [**\BoldSign\Model\DocumentCC[]**](DocumentCC.md) |  | [optional]
**enable_signing_order** | **bool** |  | [optional]
**enable_audit_trail_localization** | **bool** |  | [optional]
**expiry_date_type** | **string** |  | [optional]
**expiry_value** | **int** |  | [optional]
**reminder_settings** | [**\BoldSign\Model\ReminderSettings**](ReminderSettings.md) |  | [optional]
**disable_emails** | **bool** |  | [optional]
**disable_sms** | **bool** |  | [optional]
**brand_id** | **string** |  | [optional]
**hide_document_id** | **bool** |  | [optional]
**labels** | **string[]** |  | [optional]
**disable_expiry_alert** | **bool** |  | [optional]
**enable_print_and_sign** | **bool** |  | [optional]
**enable_reassign** | **bool** |  | [optional]
**use_text_tags** | **bool** |  | [optional]
**text_tag_definitions** | [**\BoldSign\Model\TextTagDefinition[]**](TextTagDefinition.md) |  | [optional]
**document_info** | [**\BoldSign\Model\DocumentInfo[]**](DocumentInfo.md) |  | [optional]
**on_behalf_of** | **string** |  | [optional]
**document_download_option** | **string** |  | [optional]
**meta_data** | **array<string,string>** |  | [optional]
**recipient_notification_settings** | [**\BoldSign\Model\RecipientNotificationSettings**](RecipientNotificationSettings.md) |  | [optional]
**form_groups** | [**\BoldSign\Model\FormGroup[]**](FormGroup.md) |  | [optional]
**download_file_name** | **string** |  | [optional]
**scheduled_send_time** | **int** |  | [optional]
**allowed_signature_types** | **string[]** |  | [optional]
**group_signer_settings** | [**\BoldSign\Model\GroupSignerSettings**](GroupSignerSettings.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
