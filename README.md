# boldsign/boldsign-php

Easily integrate BoldSign's e-signature features into your PHP applications. This SDK simplifies sending documents for signature, embedding signing ceremonies, tracking document status, downloading signed documents, and managing e-signature workflows.


## Installation & Usage

### Requirements

PHP 7.4 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
    "require": {
        "boldsign/boldsign-php": "3.1.0-beta.1"
    },
    "minimum-stability": "dev"
}
```

Then run `composer install`

Alternatively, install directly with

```
composer require boldsign/boldsign-php:3.1.0-beta.1
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php

require_once __DIR__ . "/vendor/autoload.php";

// Configure API key authorization: X-API-KEY
$config = new BoldSign\Configuration();
$config->setApiKey('YOUR_API_KEY');

$documentApi = new BoldSign\Api\DocumentApi($config);

$bounds = new BoldSign\Model\Rectangle([100, 100, 100, 50]);

$signatureField = new BoldSign\Model\FormField();
$signatureField->setFieldType('Signature');
$signatureField->setPageNumber(1);
$signatureField->setBounds($bounds);

// Set the signers
$signer = new BoldSign\Model\DocumentSigner();
$signer->setName("David");
$signer->setEmailAddress("david@example.com");
$signer->setSignerType("Signer");
$signer->setFormFields([$signatureField]);

$send_for_sign = new BoldSign\Model\SendForSign();
$send_for_sign->setTitle('Agreement');
$send_for_sign->setSigners([$signer]);
$send_for_sign->setFiles(['\tests\data\agreement.pdf']);

$documentCreated = $documentApi->sendDocument($send_for_sign);
```

## Documentation for API Endpoints

All URIs are relative to *https://api.boldsign.com*

| Class      | Method        | HTTP request  | Description   |
| ---------- | ------------- | ------------- | ------------- |
| *BrandingApi* | [**brandList**](docs/Api/BrandingApi.md#brandlist) | **GET** /v1/brand/list | List all the brands. |
| *BrandingApi* | [**createBrand**](docs/Api/BrandingApi.md#createbrand) | **POST** /v1/brand/create | Create the brand. |
| *BrandingApi* | [**deleteBrand**](docs/Api/BrandingApi.md#deletebrand) | **DELETE** /v1/brand/delete | Delete the brand. |
| *BrandingApi* | [**editBrand**](docs/Api/BrandingApi.md#editbrand) | **POST** /v1/brand/edit | Edit the brand. |
| *BrandingApi* | [**getBrand**](docs/Api/BrandingApi.md#getbrand) | **GET** /v1/brand/get | Get the specific brand details. |
| *BrandingApi* | [**resetDefaultBrand**](docs/Api/BrandingApi.md#resetdefaultbrand) | **POST** /v1/brand/resetdefault | Reset default brand. |
| *ContactsApi* | [**contactUserList**](docs/Api/ContactsApi.md#contactuserlist) | **GET** /v1/contacts/list | List Contact document. |
| *ContactsApi* | [**createContact**](docs/Api/ContactsApi.md#createcontact) | **POST** /v1/contacts/create | Create the new Contact. |
| *ContactsApi* | [**deleteContacts**](docs/Api/ContactsApi.md#deletecontacts) | **DELETE** /v1/contacts/delete | Deletes a contact. |
| *ContactsApi* | [**getContact**](docs/Api/ContactsApi.md#getcontact) | **GET** /v1/contacts/get | Get summary of the contact. |
| *ContactsApi* | [**updateContact**](docs/Api/ContactsApi.md#updatecontact) | **PUT** /v1/contacts/update | Update the contact. |
| *CustomFieldApi* | [**createCustomField**](docs/Api/CustomFieldApi.md#createcustomfield) | **POST** /v1/customField/create | Create the custom field. |
| *CustomFieldApi* | [**customFieldsList**](docs/Api/CustomFieldApi.md#customfieldslist) | **GET** /v1/customField/list | List the custom fields respective to the brand id. |
| *CustomFieldApi* | [**deleteCustomField**](docs/Api/CustomFieldApi.md#deletecustomfield) | **DELETE** /v1/customField/delete | Delete the custom field. |
| *CustomFieldApi* | [**editCustomField**](docs/Api/CustomFieldApi.md#editcustomfield) | **POST** /v1/customField/edit | Edit the custom field. |
| *CustomFieldApi* | [**embedCustomField**](docs/Api/CustomFieldApi.md#embedcustomfield) | **POST** /v1/customField/createEmbeddedCustomFieldUrl | Generates a URL for creating or modifying custom fields within your application&#39;s embedded Designer. |
| *DocumentApi* | [**addAuthentication**](docs/Api/DocumentApi.md#addauthentication) | **PATCH** /v1/document/addAuthentication | The add authentication to recipient. |
| *DocumentApi* | [**addTag**](docs/Api/DocumentApi.md#addtag) | **PATCH** /v1/document/addTags | Add the Tags in Documents. |
| *DocumentApi* | [**behalfDocuments**](docs/Api/DocumentApi.md#behalfdocuments) | **GET** /v1/document/behalfList | Gets the behalf documents. |
| *DocumentApi* | [**cancelEditing**](docs/Api/DocumentApi.md#cancelediting) | **POST** /v1-beta/document/cancelEditing | Cancels editing for a document that is currently in edit-mode. |
| *DocumentApi* | [**changeAccessCode**](docs/Api/DocumentApi.md#changeaccesscode) | **PATCH** /v1/document/changeAccessCode | Changes the access code for the given document signer. |
| *DocumentApi* | [**changeRecipient**](docs/Api/DocumentApi.md#changerecipient) | **PATCH** /v1/document/changeRecipient | Change recipient details of a document. |
| *DocumentApi* | [**createEmbeddedEditUrl**](docs/Api/DocumentApi.md#createembeddedediturl) | **POST** /v1-beta/document/createEmbeddedEditUrl | Generates an embedded edit URL that allows the document editing process to be integrated into your application. |
| *DocumentApi* | [**createEmbeddedRequestUrlDocument**](docs/Api/DocumentApi.md#createembeddedrequesturldocument) | **POST** /v1/document/createEmbeddedRequestUrl | Generates a send URL which embeds document sending process into your application. |
| *DocumentApi* | [**deleteDocument**](docs/Api/DocumentApi.md#deletedocument) | **DELETE** /v1/document/delete | Delete the document. |
| *DocumentApi* | [**deleteTag**](docs/Api/DocumentApi.md#deletetag) | **DELETE** /v1/document/deleteTags | Delete the Tags in Documents. |
| *DocumentApi* | [**downloadAttachment**](docs/Api/DocumentApi.md#downloadattachment) | **GET** /v1/document/downloadAttachment | Download the Attachment. |
| *DocumentApi* | [**downloadAuditLog**](docs/Api/DocumentApi.md#downloadauditlog) | **GET** /v1/document/downloadAuditLog | Download the audit trail document. |
| *DocumentApi* | [**downloadDocument**](docs/Api/DocumentApi.md#downloaddocument) | **GET** /v1/document/download | Download the document. |
| *DocumentApi* | [**draftSend**](docs/Api/DocumentApi.md#draftsend) | **POST** /v1-beta/document/draftSend | Sends a draft-status document out for signature. |
| *DocumentApi* | [**editDocument**](docs/Api/DocumentApi.md#editdocument) | **PUT** /v1-beta/document/edit | Edit and updates an existing document. |
| *DocumentApi* | [**extendExpiry**](docs/Api/DocumentApi.md#extendexpiry) | **PATCH** /v1/document/extendExpiry | Extends the expiration date of the document. |
| *DocumentApi* | [**getProperties**](docs/Api/DocumentApi.md#getproperties) | **GET** /v1/document/properties | Get summary of the document. |
| *DocumentApi* | [**getEmbeddedSignLink**](docs/Api/DocumentApi.md#getembeddedsignlink) | **GET** /v1/document/getEmbeddedSignLink | Get sign link for Embedded Sign. |
| *DocumentApi* | [**listDocuments**](docs/Api/DocumentApi.md#listdocuments) | **GET** /v1/document/list | List user documents. |
| *DocumentApi* | [**prefillFields**](docs/Api/DocumentApi.md#prefillfields) | **PATCH** /v1/document/prefillFields | Updates the value (prefill) of the fields in the document. |
| *DocumentApi* | [**remindDocument**](docs/Api/DocumentApi.md#reminddocument) | **POST** /v1/document/remind | Send reminder to pending signers. |
| *DocumentApi* | [**removeAuthentication**](docs/Api/DocumentApi.md#removeauthentication) | **PATCH** /v1/document/RemoveAuthentication | Remove the access code for the given document signer. |
| *DocumentApi* | [**revokeDocument**](docs/Api/DocumentApi.md#revokedocument) | **POST** /v1/document/revoke | Revoke the document. |
| *DocumentApi* | [**sendDocument**](docs/Api/DocumentApi.md#senddocument) | **POST** /v1/document/send | Sends the document for sign. |
| *DocumentApi* | [**teamDocuments**](docs/Api/DocumentApi.md#teamdocuments) | **GET** /v1/document/teamlist | Get user Team documents. |
| *GroupContactsApi* | [**createGroupContact**](docs/Api/GroupContactsApi.md#creategroupcontact) | **POST** /v1-beta/contactGroups/create | Create a new Group Contact. |
| *GroupContactsApi* | [**deleteGroupContact**](docs/Api/GroupContactsApi.md#deletegroupcontact) | **DELETE** /v1-beta/contactGroups/delete | Deletes a Group Contact. |
| *GroupContactsApi* | [**getGroupContact**](docs/Api/GroupContactsApi.md#getgroupcontact) | **GET** /v1-beta/contactGroups/get | Get Summary of the Group Contact. |
| *GroupContactsApi* | [**groupContactList**](docs/Api/GroupContactsApi.md#groupcontactlist) | **GET** /v1-beta/contactGroups/list | List Group Contacts. |
| *GroupContactsApi* | [**updateGroupContact**](docs/Api/GroupContactsApi.md#updategroupcontact) | **PUT** /v1-beta/contactGroups/update | Update the Group Contact. |
| *IdentityVerificationApi* | [**createEmbeddedVerificationUrl**](docs/Api/IdentityVerificationApi.md#createembeddedverificationurl) | **POST** /v1/identityVerification/createEmbeddedVerificationUrl | Generate a URL that embeds manual ID verification for the specified document signer into your application. |
| *IdentityVerificationApi* | [**image**](docs/Api/IdentityVerificationApi.md#image) | **POST** /v1/identityVerification/image | Retrieve the uploaded ID verification document or selfie image for the specified document signer using the file ID. |
| *IdentityVerificationApi* | [**report**](docs/Api/IdentityVerificationApi.md#report) | **POST** /v1/identityVerification/report | Retrieve the ID verification report for the specified document signer. |
| *PlanApi* | [**apiCreditsCount**](docs/Api/PlanApi.md#apicreditscount) | **GET** /v1/plan/apiCreditsCount | Gets the Api credits details. |
| *SenderIdentitiesApi* | [**createSenderIdentities**](docs/Api/SenderIdentitiesApi.md#createsenderidentities) | **POST** /v1/senderIdentities/create | Creates sender identity. |
| *SenderIdentitiesApi* | [**deleteSenderIdentities**](docs/Api/SenderIdentitiesApi.md#deletesenderidentities) | **DELETE** /v1/senderIdentities/delete | Deletes sender identity. |
| *SenderIdentitiesApi* | [**getSenderIdentityProperties**](docs/Api/SenderIdentitiesApi.md#getsenderidentityproperties) | **GET** /v1/senderIdentities/properties | Gets sender identity by ID or email. |
| *SenderIdentitiesApi* | [**listSenderIdentities**](docs/Api/SenderIdentitiesApi.md#listsenderidentities) | **GET** /v1/senderIdentities/list | Lists sender identity. |
| *SenderIdentitiesApi* | [**reRequestSenderIdentities**](docs/Api/SenderIdentitiesApi.md#rerequestsenderidentities) | **POST** /v1/senderIdentities/rerequest | Rerequests denied sender identity. |
| *SenderIdentitiesApi* | [**resendInvitationSenderIdentities**](docs/Api/SenderIdentitiesApi.md#resendinvitationsenderidentities) | **POST** /v1/senderIdentities/resendInvitation | Resends sender identity invitation. |
| *SenderIdentitiesApi* | [**updateSenderIdentities**](docs/Api/SenderIdentitiesApi.md#updatesenderidentities) | **POST** /v1/senderIdentities/update | Updates sender identity. |
| *TeamsApi* | [**createTeam**](docs/Api/TeamsApi.md#createteam) | **POST** /v1/teams/create | Create Team. |
| *TeamsApi* | [**getTeam**](docs/Api/TeamsApi.md#getteam) | **GET** /v1/teams/get | Get Team details. |
| *TeamsApi* | [**listTeams**](docs/Api/TeamsApi.md#listteams) | **GET** /v1/teams/list | List Teams. |
| *TeamsApi* | [**updateTeam**](docs/Api/TeamsApi.md#updateteam) | **PUT** /v1/teams/update | Update Team. |
| *TemplateApi* | [**addTag**](docs/Api/TemplateApi.md#addtag) | **PATCH** /v1/template/addTags | Add the Tags in Templates. |
| *TemplateApi* | [**createEmbeddedPreviewUrl**](docs/Api/TemplateApi.md#createembeddedpreviewurl) | **POST** /v1/template/createEmbeddedPreviewUrl | Generates a preview URL for a template to view it. |
| *TemplateApi* | [**createEmbeddedRequestUrlTemplate**](docs/Api/TemplateApi.md#createembeddedrequesturltemplate) | **POST** /v1/template/createEmbeddedRequestUrl | Generates a send URL using a template which embeds document sending process into your application. |
| *TemplateApi* | [**createEmbeddedTemplateUrl**](docs/Api/TemplateApi.md#createembeddedtemplateurl) | **POST** /v1/template/createEmbeddedTemplateUrl | Generates a create URL to embeds template create process into your application. |
| *TemplateApi* | [**createTemplate**](docs/Api/TemplateApi.md#createtemplate) | **POST** /v1/template/create | Creates a new template. |
| *TemplateApi* | [**deleteTemplate**](docs/Api/TemplateApi.md#deletetemplate) | **DELETE** /v1/template/delete | Deletes a template. |
| *TemplateApi* | [**deleteTag**](docs/Api/TemplateApi.md#deletetag) | **DELETE** /v1/template/deleteTags | Delete the Tags in Templates. |
| *TemplateApi* | [**download**](docs/Api/TemplateApi.md#download) | **GET** /v1/template/download | Download the template. |
| *TemplateApi* | [**editTemplate**](docs/Api/TemplateApi.md#edittemplate) | **PUT** /v1/template/edit | Edit and updates an existing template. |
| *TemplateApi* | [**getEmbeddedTemplateEditUrl**](docs/Api/TemplateApi.md#getembeddedtemplateediturl) | **POST** /v1/template/getEmbeddedTemplateEditUrl | Generates a edit URL to embeds template edit process into your application. |
| *TemplateApi* | [**getProperties**](docs/Api/TemplateApi.md#getproperties) | **GET** /v1/template/properties | Get summary of the template. |
| *TemplateApi* | [**listTemplates**](docs/Api/TemplateApi.md#listtemplates) | **GET** /v1/template/list | List all the templates. |
| *TemplateApi* | [**mergeAndSend**](docs/Api/TemplateApi.md#mergeandsend) | **POST** /v1/template/mergeAndSend | Send the document by merging multiple templates. |
| *TemplateApi* | [**mergeCreateEmbeddedRequestUrlTemplate**](docs/Api/TemplateApi.md#mergecreateembeddedrequesturltemplate) | **POST** /v1/template/mergeCreateEmbeddedRequestUrl | Generates a merge request URL using a template that combines document merging and sending processes into your application. |
| *TemplateApi* | [**sendUsingTemplate**](docs/Api/TemplateApi.md#sendusingtemplate) | **POST** /v1/template/send | Send a document for signature using a Template. |
| *TemplateApi* | [**shareTemplate**](docs/Api/TemplateApi.md#sharetemplate) | **PATCH** /v1-beta/template/share | Share a template with teams and manage permissions. |
| *UserApi* | [**cancelInvitation**](docs/Api/UserApi.md#cancelinvitation) | **POST** /v1/users/cancelInvitation | Cancel the users invitation. |
| *UserApi* | [**changeTeam**](docs/Api/UserApi.md#changeteam) | **PUT** /v1-beta/users/changeTeam | Change users to other team. |
| *UserApi* | [**createUser**](docs/Api/UserApi.md#createuser) | **POST** /v1/users/create | Create the user. |
| *UserApi* | [**getUser**](docs/Api/UserApi.md#getuser) | **GET** /v1/users/get | Get summary of the user. |
| *UserApi* | [**listUsers**](docs/Api/UserApi.md#listusers) | **GET** /v1/users/list | List user documents. |
| *UserApi* | [**resendInvitation**](docs/Api/UserApi.md#resendinvitation) | **POST** /v1/users/resendInvitation | Resend the users invitation. |
| *UserApi* | [**updateMetaData**](docs/Api/UserApi.md#updatemetadata) | **PUT** /v1/users/updateMetaData | Update new User meta data details. |
| *UserApi* | [**updateUser**](docs/Api/UserApi.md#updateuser) | **PUT** /v1/users/update | Update new User role. |


## Models

- [AccessCodeDetail](docs/Model/AccessCodeDetail.md)
- [AccessCodeDetails](docs/Model/AccessCodeDetails.md)
- [Added](docs/Model/Added.md)
- [Address](docs/Model/Address.md)
- [AttachmentInfo](docs/Model/AttachmentInfo.md)
- [AuditTrail](docs/Model/AuditTrail.md)
- [AuthenticationSettings](docs/Model/AuthenticationSettings.md)
- [Base64File](docs/Model/Base64File.md)
- [BehalfDocument](docs/Model/BehalfDocument.md)
- [BehalfDocumentRecords](docs/Model/BehalfDocumentRecords.md)
- [BehalfOf](docs/Model/BehalfOf.md)
- [BillingViewModel](docs/Model/BillingViewModel.md)
- [BrandCreated](docs/Model/BrandCreated.md)
- [BrandCustomFieldDetails](docs/Model/BrandCustomFieldDetails.md)
- [BrandingMessage](docs/Model/BrandingMessage.md)
- [BrandingRecords](docs/Model/BrandingRecords.md)
- [ChangeRecipient](docs/Model/ChangeRecipient.md)
- [ChangeTeamRequest](docs/Model/ChangeTeamRequest.md)
- [CollaborationSettings](docs/Model/CollaborationSettings.md)
- [ConditionalRule](docs/Model/ConditionalRule.md)
- [ContactCreated](docs/Model/ContactCreated.md)
- [ContactDetails](docs/Model/ContactDetails.md)
- [ContactPageDetails](docs/Model/ContactPageDetails.md)
- [ContactsDetails](docs/Model/ContactsDetails.md)
- [ContactsList](docs/Model/ContactsList.md)
- [CreateContactResponse](docs/Model/CreateContactResponse.md)
- [CreateGroupContactResponse](docs/Model/CreateGroupContactResponse.md)
- [CreateSenderIdentityRequest](docs/Model/CreateSenderIdentityRequest.md)
- [CreateTeamRequest](docs/Model/CreateTeamRequest.md)
- [CreateTemplateRequest](docs/Model/CreateTemplateRequest.md)
- [CreateUser](docs/Model/CreateUser.md)
- [Creators](docs/Model/Creators.md)
- [CustomDomainSettings](docs/Model/CustomDomainSettings.md)
- [CustomFieldCollection](docs/Model/CustomFieldCollection.md)
- [CustomFieldMessage](docs/Model/CustomFieldMessage.md)
- [CustomFormField](docs/Model/CustomFormField.md)
- [Date](docs/Model/Date.md)
- [DeleteCustomFieldReply](docs/Model/DeleteCustomFieldReply.md)
- [Document](docs/Model/Document.md)
- [DocumentCC](docs/Model/DocumentCC.md)
- [DocumentCcDetails](docs/Model/DocumentCcDetails.md)
- [DocumentCcWebhookModel](docs/Model/DocumentCcWebhookModel.md)
- [DocumentCreated](docs/Model/DocumentCreated.md)
- [DocumentEdited](docs/Model/DocumentEdited.md)
- [DocumentEvent](docs/Model/DocumentEvent.md)
- [DocumentExpirySettings](docs/Model/DocumentExpirySettings.md)
- [DocumentFiles](docs/Model/DocumentFiles.md)
- [DocumentFormFields](docs/Model/DocumentFormFields.md)
- [DocumentGroupSignerWebhookModel](docs/Model/DocumentGroupSignerWebhookModel.md)
- [DocumentInfo](docs/Model/DocumentInfo.md)
- [DocumentProperties](docs/Model/DocumentProperties.md)
- [DocumentReassign](docs/Model/DocumentReassign.md)
- [DocumentRecords](docs/Model/DocumentRecords.md)
- [DocumentSender](docs/Model/DocumentSender.md)
- [DocumentSenderDetail](docs/Model/DocumentSenderDetail.md)
- [DocumentSigner](docs/Model/DocumentSigner.md)
- [DocumentSignerDetails](docs/Model/DocumentSignerDetails.md)
- [DocumentSignerWebhookModel](docs/Model/DocumentSignerWebhookModel.md)
- [DocumentTags](docs/Model/DocumentTags.md)
- [DownloadImageRequest](docs/Model/DownloadImageRequest.md)
- [EditDocumentFile](docs/Model/EditDocumentFile.md)
- [EditDocumentRequest](docs/Model/EditDocumentRequest.md)
- [EditDocumentSigner](docs/Model/EditDocumentSigner.md)
- [EditFormField](docs/Model/EditFormField.md)
- [EditSenderIdentityRequest](docs/Model/EditSenderIdentityRequest.md)
- [EditTemplateRequest](docs/Model/EditTemplateRequest.md)
- [EditableDateFieldSettings](docs/Model/EditableDateFieldSettings.md)
- [EmbeddedCreateTemplateRequest](docs/Model/EmbeddedCreateTemplateRequest.md)
- [EmbeddedCustomFieldCreated](docs/Model/EmbeddedCustomFieldCreated.md)
- [EmbeddedDocumentEditJsonRequest](docs/Model/EmbeddedDocumentEditJsonRequest.md)
- [EmbeddedDocumentEdited](docs/Model/EmbeddedDocumentEdited.md)
- [EmbeddedDocumentRequest](docs/Model/EmbeddedDocumentRequest.md)
- [EmbeddedFileDetails](docs/Model/EmbeddedFileDetails.md)
- [EmbeddedFileLink](docs/Model/EmbeddedFileLink.md)
- [EmbeddedMergeTemplateFormRequest](docs/Model/EmbeddedMergeTemplateFormRequest.md)
- [EmbeddedSendCreated](docs/Model/EmbeddedSendCreated.md)
- [EmbeddedSendTemplateFormRequest](docs/Model/EmbeddedSendTemplateFormRequest.md)
- [EmbeddedSigningLink](docs/Model/EmbeddedSigningLink.md)
- [EmbeddedTemplateCreated](docs/Model/EmbeddedTemplateCreated.md)
- [EmbeddedTemplateEditRequest](docs/Model/EmbeddedTemplateEditRequest.md)
- [EmbeddedTemplateEdited](docs/Model/EmbeddedTemplateEdited.md)
- [EmbeddedTemplatePreview](docs/Model/EmbeddedTemplatePreview.md)
- [EmbeddedTemplatePreviewJsonRequest](docs/Model/EmbeddedTemplatePreviewJsonRequest.md)
- [Error](docs/Model/Error.md)
- [ErrorResponse](docs/Model/ErrorResponse.md)
- [ErrorResult](docs/Model/ErrorResult.md)
- [ExistingFormField](docs/Model/ExistingFormField.md)
- [ExtendExpiry](docs/Model/ExtendExpiry.md)
- [FileInfo](docs/Model/FileInfo.md)
- [Font](docs/Model/Font.md)
- [FormField](docs/Model/FormField.md)
- [FormFieldPermission](docs/Model/FormFieldPermission.md)
- [FormFieldPermissionWebhookModel](docs/Model/FormFieldPermissionWebhookModel.md)
- [FormGroup](docs/Model/FormGroup.md)
- [FormulaFieldSettings](docs/Model/FormulaFieldSettings.md)
- [GetGroupContactDetails](docs/Model/GetGroupContactDetails.md)
- [GroupContact](docs/Model/GroupContact.md)
- [GroupContactDetails](docs/Model/GroupContactDetails.md)
- [GroupContactsList](docs/Model/GroupContactsList.md)
- [GroupSigner](docs/Model/GroupSigner.md)
- [GroupSignerSettings](docs/Model/GroupSignerSettings.md)
- [GroupSignerSettingsWebhookModel](docs/Model/GroupSignerSettingsWebhookModel.md)
- [GroupUser](docs/Model/GroupUser.md)
- [IWebhookData](docs/Model/IWebhookData.md)
- [IdDocument](docs/Model/IdDocument.md)
- [IdReport](docs/Model/IdReport.md)
- [IdVerificationDetails](docs/Model/IdVerificationDetails.md)
- [IdVerificationSignerWebhookModel](docs/Model/IdVerificationSignerWebhookModel.md)
- [IdentityVerificationEvent](docs/Model/IdentityVerificationEvent.md)
- [IdentityVerificationSettings](docs/Model/IdentityVerificationSettings.md)
- [ImageInfo](docs/Model/ImageInfo.md)
- [MergeAndSendForSignForm](docs/Model/MergeAndSendForSignForm.md)
- [ModificationDetails](docs/Model/ModificationDetails.md)
- [NotificationSettings](docs/Model/NotificationSettings.md)
- [PageDetails](docs/Model/PageDetails.md)
- [PhoneNumber](docs/Model/PhoneNumber.md)
- [PhoneNumberWebhookModel](docs/Model/PhoneNumberWebhookModel.md)
- [PrefillField](docs/Model/PrefillField.md)
- [PrefillFieldRequest](docs/Model/PrefillFieldRequest.md)
- [RecipientChangeLog](docs/Model/RecipientChangeLog.md)
- [RecipientNotificationSettings](docs/Model/RecipientNotificationSettings.md)
- [Rectangle](docs/Model/Rectangle.md)
- [ReminderMessage](docs/Model/ReminderMessage.md)
- [ReminderSettings](docs/Model/ReminderSettings.md)
- [RemoveAuthentication](docs/Model/RemoveAuthentication.md)
- [Removed](docs/Model/Removed.md)
- [RevokeDocument](docs/Model/RevokeDocument.md)
- [Role](docs/Model/Role.md)
- [Roles](docs/Model/Roles.md)
- [SendForSign](docs/Model/SendForSign.md)
- [SendForSignFromTemplateForm](docs/Model/SendForSignFromTemplateForm.md)
- [SenderIdentityCreated](docs/Model/SenderIdentityCreated.md)
- [SenderIdentityCreator](docs/Model/SenderIdentityCreator.md)
- [SenderIdentityEvent](docs/Model/SenderIdentityEvent.md)
- [SenderIdentityList](docs/Model/SenderIdentityList.md)
- [SenderIdentityViewModel](docs/Model/SenderIdentityViewModel.md)
- [SignerAuthenticationSettings](docs/Model/SignerAuthenticationSettings.md)
- [SignerAuthenticationWebhookModel](docs/Model/SignerAuthenticationWebhookModel.md)
- [Size](docs/Model/Size.md)
- [TeamCreated](docs/Model/TeamCreated.md)
- [TeamDocumentRecords](docs/Model/TeamDocumentRecords.md)
- [TeamListResponse](docs/Model/TeamListResponse.md)
- [TeamPageDetails](docs/Model/TeamPageDetails.md)
- [TeamResponse](docs/Model/TeamResponse.md)
- [TeamUpdateRequest](docs/Model/TeamUpdateRequest.md)
- [TeamUsers](docs/Model/TeamUsers.md)
- [Teams](docs/Model/Teams.md)
- [Template](docs/Model/Template.md)
- [TemplateCC](docs/Model/TemplateCC.md)
- [TemplateCcWebhookModel](docs/Model/TemplateCcWebhookModel.md)
- [TemplateCreated](docs/Model/TemplateCreated.md)
- [TemplateEvent](docs/Model/TemplateEvent.md)
- [TemplateFiles](docs/Model/TemplateFiles.md)
- [TemplateFormFields](docs/Model/TemplateFormFields.md)
- [TemplateGroupSigner](docs/Model/TemplateGroupSigner.md)
- [TemplateGroupSignerWebhookModel](docs/Model/TemplateGroupSignerWebhookModel.md)
- [TemplateProperties](docs/Model/TemplateProperties.md)
- [TemplateRecords](docs/Model/TemplateRecords.md)
- [TemplateRole](docs/Model/TemplateRole.md)
- [TemplateSender](docs/Model/TemplateSender.md)
- [TemplateSenderDetail](docs/Model/TemplateSenderDetail.md)
- [TemplateSenderDetails](docs/Model/TemplateSenderDetails.md)
- [TemplateShareErrorResponse](docs/Model/TemplateShareErrorResponse.md)
- [TemplateShareRequest](docs/Model/TemplateShareRequest.md)
- [TemplateSharedTemplateDetail](docs/Model/TemplateSharedTemplateDetail.md)
- [TemplateSharing](docs/Model/TemplateSharing.md)
- [TemplateSigner](docs/Model/TemplateSigner.md)
- [TemplateSignerDetails](docs/Model/TemplateSignerDetails.md)
- [TemplateTag](docs/Model/TemplateTag.md)
- [TemplateTeamShare](docs/Model/TemplateTeamShare.md)
- [TemplateTeamShareRequest](docs/Model/TemplateTeamShareRequest.md)
- [TextTagDefinition](docs/Model/TextTagDefinition.md)
- [TextTagOffset](docs/Model/TextTagOffset.md)
- [UpdateGroupContact](docs/Model/UpdateGroupContact.md)
- [UpdateUser](docs/Model/UpdateUser.md)
- [UpdateUserMetaData](docs/Model/UpdateUserMetaData.md)
- [UserPageDetails](docs/Model/UserPageDetails.md)
- [UserProperties](docs/Model/UserProperties.md)
- [UserRecords](docs/Model/UserRecords.md)
- [UsersDetails](docs/Model/UsersDetails.md)
- [Validation](docs/Model/Validation.md)
- [VerificationDataRequest](docs/Model/VerificationDataRequest.md)
- [ViewBrandDetails](docs/Model/ViewBrandDetails.md)
- [ViewCustomFieldDetails](docs/Model/ViewCustomFieldDetails.md)
- [WebhookContext](docs/Model/WebhookContext.md)
- [WebhookEvent](docs/Model/WebhookEvent.md)
- [WebhookEventData](docs/Model/WebhookEventData.md)
- [WebhookEventMetadata](docs/Model/WebhookEventMetadata.md)

## Authorization


### Bearer

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header



### X-API-KEY

- **Type**: API key
- **API key parameter name**: X-API-KEY
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1`
    - Package version: `3.1.0-beta.1`
    - Generator version: `7.8.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
