# # CreditBalance

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**feature** | **string** | Known values: WebApp, API, BulkDocument, SMS, IdVerification, KBA, QES, WhatsApp, Template, SelfSign. New values may be added; ignore values you do not recognise. | [optional]
**source** | **string** | Known values: Plan, Prepaid, OneTime, PayAsYouGo. New values may be added; ignore values you do not recognise. | [optional]
**is_unlimited** | **bool** |  | [optional]
**limit** | **int** |  | [optional]
**used** | **int** |  | [optional]
**period** | [**\BoldSign\Model\CreditPeriod**](CreditPeriod.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
