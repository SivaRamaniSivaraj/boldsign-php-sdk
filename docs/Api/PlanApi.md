# BoldSign\PlanApi

All URIs are relative to https://api.boldsign.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiCreditsCount()**](PlanApi.md#apiCreditsCount) | **GET** /v1/plan/apiCreditsCount | Gets the Api credits details. |


## `apiCreditsCount()`

```php
apiCreditsCount(): \BoldSign\Model\BillingViewModel
```

Gets the Api credits details.

Deprecated: use /v1-beta/plan/credits instead. The response and behaviour of this operation are unchanged and will be removed in a future version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new BoldSign\Configuration();
$config->setApiKey('YOUR_API_KEY');

$apiInstance = new BoldSign\Api\PlanApi($config);

try {
    $result = $apiInstance->apiCreditsCount();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlanApi->apiCreditsCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\BoldSign\Model\BillingViewModel**](../Model/BillingViewModel.md)

### Authorization

[X-API-KEY](../../README.md#X-API-KEY), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
