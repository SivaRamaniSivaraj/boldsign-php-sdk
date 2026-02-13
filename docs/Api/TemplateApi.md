# BoldSign\TemplateApi

All URIs are relative to https://api.boldsign.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addTag()**](TemplateApi.md#addTag) | **PATCH** /v1/template/addTags | Add the Tags in Templates. |
| [**createEmbeddedPreviewUrl()**](TemplateApi.md#createEmbeddedPreviewUrl) | **POST** /v1/template/createEmbeddedPreviewUrl | Generates a preview URL for a template to view it. |
| [**createEmbeddedRequestUrlTemplate()**](TemplateApi.md#createEmbeddedRequestUrlTemplate) | **POST** /v1/template/createEmbeddedRequestUrl | Generates a send URL using a template which embeds document sending process into your application. |
| [**createEmbeddedTemplateUrl()**](TemplateApi.md#createEmbeddedTemplateUrl) | **POST** /v1/template/createEmbeddedTemplateUrl | Generates a create URL to embeds template create process into your application. |
| [**createTemplate()**](TemplateApi.md#createTemplate) | **POST** /v1/template/create | Creates a new template. |
| [**deleteTemplate()**](TemplateApi.md#deleteTemplate) | **DELETE** /v1/template/delete | Deletes a template. |
| [**deleteTag()**](TemplateApi.md#deleteTag) | **DELETE** /v1/template/deleteTags | Delete the Tags in Templates. |
| [**download()**](TemplateApi.md#download) | **GET** /v1/template/download | Download the template. |
| [**editTemplate()**](TemplateApi.md#editTemplate) | **PUT** /v1/template/edit | Edit and updates an existing template. |
| [**getEmbeddedTemplateEditUrl()**](TemplateApi.md#getEmbeddedTemplateEditUrl) | **POST** /v1/template/getEmbeddedTemplateEditUrl | Generates a edit URL to embeds template edit process into your application. |
| [**getProperties()**](TemplateApi.md#getProperties) | **GET** /v1/template/properties | Get summary of the template. |
| [**listTemplates()**](TemplateApi.md#listTemplates) | **GET** /v1/template/list | List all the templates. |
| [**mergeAndSend()**](TemplateApi.md#mergeAndSend) | **POST** /v1/template/mergeAndSend | Send the document by merging multiple templates. |
| [**mergeCreateEmbeddedRequestUrlTemplate()**](TemplateApi.md#mergeCreateEmbeddedRequestUrlTemplate) | **POST** /v1/template/mergeCreateEmbeddedRequestUrl | Generates a merge request URL using a template that combines document merging and sending processes into your application. |
| [**sendUsingTemplate()**](TemplateApi.md#sendUsingTemplate) | **POST** /v1/template/send | Send a document for signature using a Template. |
| [**shareTemplate()**](TemplateApi.md#shareTemplate) | **PATCH** /v1-beta/template/share | Share a template with teams and manage permissions. |


## `addTag()`

```php
addTag($template_tag)
```

Add the Tags in Templates.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new BoldSign\Configuration();
$config->setApiKey('YOUR_API_KEY');

$apiInstance = new BoldSign\Api\TemplateApi($config);
$template_tag = new \BoldSign\Model\TemplateTag(); // \BoldSign\Model\TemplateTag | ContainsTemplateId and Label Names for AddingTags.

try {
    $apiInstance->addTag($template_tag);
} catch (Exception $e) {
    echo 'Exception when calling TemplateApi->addTag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_tag** | [**\BoldSign\Model\TemplateTag**](../Model/TemplateTag.md)| ContainsTemplateId and Label Names for AddingTags. | [optional] |

### Return type

void (empty response body)

### Authorization

[X-API-KEY](../../README.md#X-API-KEY), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json;odata.metadata=minimal;odata.streaming=true`, `application/json;odata.metadata=minimal;odata.streaming=false`, `application/json;odata.metadata=minimal`, `application/json;odata.metadata=full;odata.streaming=true`, `application/json;odata.metadata=full;odata.streaming=false`, `application/json;odata.metadata=full`, `application/json;odata.metadata=none;odata.streaming=true`, `application/json;odata.metadata=none;odata.streaming=false`, `application/json;odata.metadata=none`, `application/json;odata.streaming=true`, `application/json;odata.streaming=false`, `application/json`, `application/json;odata.metadata=minimal;odata.streaming=true;IEEE754Compatible=false`, `application/json;odata.metadata=minimal;odata.streaming=true;IEEE754Compatible=true`, `application/json;odata.metadata=minimal;odata.streaming=false;IEEE754Compatible=false`, `application/json;odata.metadata=minimal;odata.streaming=false;IEEE754Compatible=true`, `application/json;odata.metadata=minimal;IEEE754Compatible=false`, `application/json;odata.metadata=minimal;IEEE754Compatible=true`, `application/json;odata.metadata=full;odata.streaming=true;IEEE754Compatible=false`, `application/json;odata.metadata=full;odata.streaming=true;IEEE754Compatible=true`, `application/json;odata.metadata=full;odata.streaming=false;IEEE754Compatible=false`, `application/json;odata.metadata=full;odata.streaming=false;IEEE754Compatible=true`, `application/json;odata.metadata=full;IEEE754Compatible=false`, `application/json;odata.metadata=full;IEEE754Compatible=true`, `application/json;odata.metadata=none;odata.streaming=true;IEEE754Compatible=false`, `application/json;odata.metadata=none;odata.streaming=true;IEEE754Compatible=true`, `application/json;odata.metadata=none;odata.streaming=false;IEEE754Compatible=true`, `application/json;odata.metadata=none;odata.streaming=false;IEEE754Compatible=false`, `application/json;odata.metadata=none;IEEE754Compatible=false`, `application/json;odata.metadata=none;IEEE754Compatible=true`, `application/json;odata.streaming=true;IEEE754Compatible=false`, `application/json;odata.streaming=true;IEEE754Compatible=true`, `application/json;odata.streaming=false;IEEE754Compatible=false`, `application/json;odata.streaming=false;IEEE754Compatible=true`, `application/json;IEEE754Compatible=false`, `application/json;IEEE754Compatible=true`, `application/xml`, `text/plain`, `application/json-patch+json`, `text/json`, `application/*+json`
- **Accept**: `application/json;odata.metadata=minimal;odata.streaming=true`, `application/json;odata.metadata=minimal;odata.streaming=false`, `application/json;odata.metadata=minimal`, `application/json;odata.metadata=full;odata.streaming=true`, `application/json;odata.metadata=full;odata.streaming=false`, `application/json;odata.metadata=full`, `application/json;odata.metadata=none;odata.streaming=true`, `application/json;odata.metadata=none;odata.streaming=false`, `application/json;odata.metadata=none`, `application/json;odata.streaming=true`, `application/json;odata.streaming=false`, `application/json`, `application/json;odata.metadata=minimal;odata.streaming=true;IEEE754Compatible=false`, `application/json;odata.metadata=minimal;odata.streaming=true;IEEE754Compatible=true`, `application/json;odata.metadata=minimal;odata.streaming=false;IEEE754Compatible=false`, `application/json;odata.metadata=minimal;odata.streaming=false;IEEE754Compatible=true`, `application/json;odata.metadata=minimal;IEEE754Compatible=false`, `application/json;odata.metadata=minimal;IEEE754Compatible=true`, `application/json;odata.metadata=full;odata.streaming=true;IEEE754Compatible=false`, `application/json;odata.metadata=full;odata.streaming=true;IEEE754Compatible=true`, `application/json;odata.metadata=full;odata.streaming=false;IEEE754Compatible=false`, `application/json;odata.metadata=full;odata.streaming=false;IEEE754Compatible=true`, `application/json;odata.metadata=full;IEEE754Compatible=false`, `application/json;odata.metadata=full;IEEE754Compatible=true`, `application/json;odata.metadata=none;odata.streaming=true;IEEE754Compatible=false`, `application/json;odata.metadata=none;odata.streaming=true;IEEE754Compatible=true`, `application/json;odata.metadata=none;odata.streaming=false;IEEE754Compatible=true`, `application/json;odata.metadata=none;odata.streaming=false;IEEE754Compatible=false`, `application/json;odata.metadata=none;IEEE754Compatible=false`, `application/json;odata.metadata=none;IEEE754Compatible=true`, `application/json;odata.streaming=true;IEEE754Compatible=false`, `application/json;odata.streaming=true;IEEE754Compatible=true`, `application/json;odata.streaming=false;IEEE754Compatible=false`, `application/json;odata.streaming=false;IEEE754Compatible=true`, `application/json;IEEE754Compatible=false`, `application/json;IEEE754Compatible=true`, `application/xml`, `text/plain`, `application/octet-stream`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createEmbeddedPreviewUrl()`

```php
createEmbeddedPreviewUrl($template_id, $embedded_template_preview_json_request): \BoldSign\Model\EmbeddedTemplatePreview
```

Generates a preview URL for a template to view it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new BoldSign\Configuration();
$config->setApiKey('YOUR_API_KEY');

$apiInstance = new BoldSign\Api\TemplateApi($config);
$template_id = 'template_id_example'; // string | The template id.
$embedded_template_preview_json_request = new \BoldSign\Model\EmbeddedTemplatePreviewJsonRequest(); // \BoldSign\Model\EmbeddedTemplatePreviewJsonRequest | The embedded template preview request body.

try {
    $result = $apiInstance->createEmbeddedPreviewUrl($template_id, $embedded_template_preview_json_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateApi->createEmbeddedPreviewUrl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**| The template id. | |
| **embedded_template_preview_json_request** | [**\BoldSign\Model\EmbeddedTemplatePreviewJsonRequest**](../Model/EmbeddedTemplatePreviewJsonRequest.md)| The embedded template preview request body. | [optional] |

### Return type

[**\BoldSign\Model\EmbeddedTemplatePreview**](../Model/EmbeddedTemplatePreview.md)

### Authorization

[X-API-KEY](../../README.md#X-API-KEY), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createEmbeddedRequestUrlTemplate()`

```php
createEmbeddedRequestUrlTemplate($template_id, $embedded_send_template_form_request): \BoldSign\Model\EmbeddedSendCreated
```

Generates a send URL using a template which embeds document sending process into your application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new BoldSign\Configuration();
$config->setApiKey('YOUR_API_KEY');

$apiInstance = new BoldSign\Api\TemplateApi($config);
$template_id = 'template_id_example'; // string | The template id.
$embedded_send_template_form_request = new \BoldSign\Model\EmbeddedSendTemplateFormRequest(); // \BoldSign\Model\EmbeddedSendTemplateFormRequest | Embedded send template json request.

try {
    $result = $apiInstance->createEmbeddedRequestUrlTemplate($template_id, $embedded_send_template_form_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateApi->createEmbeddedRequestUrlTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**| The template id. | |
| **embedded_send_template_form_request** | [**\BoldSign\Model\EmbeddedSendTemplateFormRequest**](../Model/EmbeddedSendTemplateFormRequest.md)| Embedded send template json request. | [optional] |

### Return type

[**\BoldSign\Model\EmbeddedSendCreated**](../Model/EmbeddedSendCreated.md)

### Authorization

[X-API-KEY](../../README.md#X-API-KEY), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createEmbeddedTemplateUrl()`

```php
createEmbeddedTemplateUrl($embedded_create_template_request): \BoldSign\Model\EmbeddedTemplateCreated
```

Generates a create URL to embeds template create process into your application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new BoldSign\Configuration();
$config->setApiKey('YOUR_API_KEY');

$apiInstance = new BoldSign\Api\TemplateApi($config);
$embedded_create_template_request = new \BoldSign\Model\EmbeddedCreateTemplateRequest(); // \BoldSign\Model\EmbeddedCreateTemplateRequest | The create embedded template request body.

try {
    $result = $apiInstance->createEmbeddedTemplateUrl($embedded_create_template_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateApi->createEmbeddedTemplateUrl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **embedded_create_template_request** | [**\BoldSign\Model\EmbeddedCreateTemplateRequest**](../Model/EmbeddedCreateTemplateRequest.md)| The create embedded template request body. | [optional] |

### Return type

[**\BoldSign\Model\EmbeddedTemplateCreated**](../Model/EmbeddedTemplateCreated.md)

### Authorization

[X-API-KEY](../../README.md#X-API-KEY), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createTemplate()`

```php
createTemplate($create_template_request): \BoldSign\Model\TemplateCreated
```

Creates a new template.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new BoldSign\Configuration();
$config->setApiKey('YOUR_API_KEY');

$apiInstance = new BoldSign\Api\TemplateApi($config);
$create_template_request = new \BoldSign\Model\CreateTemplateRequest(); // \BoldSign\Model\CreateTemplateRequest | The create template request body.

try {
    $result = $apiInstance->createTemplate($create_template_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateApi->createTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_template_request** | [**\BoldSign\Model\CreateTemplateRequest**](../Model/CreateTemplateRequest.md)| The create template request body. | [optional] |

### Return type

[**\BoldSign\Model\TemplateCreated**](../Model/TemplateCreated.md)

### Authorization

[X-API-KEY](../../README.md#X-API-KEY), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteTemplate()`

```php
deleteTemplate($template_id, $on_behalf_of)
```

Deletes a template.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new BoldSign\Configuration();
$config->setApiKey('YOUR_API_KEY');

$apiInstance = new BoldSign\Api\TemplateApi($config);
$template_id = 'template_id_example'; // string | The template id.
$on_behalf_of = 'on_behalf_of_example'; // string | The on behalfof email address.

try {
    $apiInstance->deleteTemplate($template_id, $on_behalf_of);
} catch (Exception $e) {
    echo 'Exception when calling TemplateApi->deleteTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**| The template id. | |
| **on_behalf_of** | **string**| The on behalfof email address. | [optional] |

### Return type

void (empty response body)

### Authorization

[X-API-KEY](../../README.md#X-API-KEY), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteTag()`

```php
deleteTag($template_tag)
```

Delete the Tags in Templates.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new BoldSign\Configuration();
$config->setApiKey('YOUR_API_KEY');

$apiInstance = new BoldSign\Api\TemplateApi($config);
$template_tag = new \BoldSign\Model\TemplateTag(); // \BoldSign\Model\TemplateTag | Contains TemplateId and LabelNames for Adding Tags.

try {
    $apiInstance->deleteTag($template_tag);
} catch (Exception $e) {
    echo 'Exception when calling TemplateApi->deleteTag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_tag** | [**\BoldSign\Model\TemplateTag**](../Model/TemplateTag.md)| Contains TemplateId and LabelNames for Adding Tags. | [optional] |

### Return type

void (empty response body)

### Authorization

[X-API-KEY](../../README.md#X-API-KEY), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json;odata.metadata=minimal;odata.streaming=true`, `application/json;odata.metadata=minimal;odata.streaming=false`, `application/json;odata.metadata=minimal`, `application/json;odata.metadata=full;odata.streaming=true`, `application/json;odata.metadata=full;odata.streaming=false`, `application/json;odata.metadata=full`, `application/json;odata.metadata=none;odata.streaming=true`, `application/json;odata.metadata=none;odata.streaming=false`, `application/json;odata.metadata=none`, `application/json;odata.streaming=true`, `application/json;odata.streaming=false`, `application/json`, `application/json;odata.metadata=minimal;odata.streaming=true;IEEE754Compatible=false`, `application/json;odata.metadata=minimal;odata.streaming=true;IEEE754Compatible=true`, `application/json;odata.metadata=minimal;odata.streaming=false;IEEE754Compatible=false`, `application/json;odata.metadata=minimal;odata.streaming=false;IEEE754Compatible=true`, `application/json;odata.metadata=minimal;IEEE754Compatible=false`, `application/json;odata.metadata=minimal;IEEE754Compatible=true`, `application/json;odata.metadata=full;odata.streaming=true;IEEE754Compatible=false`, `application/json;odata.metadata=full;odata.streaming=true;IEEE754Compatible=true`, `application/json;odata.metadata=full;odata.streaming=false;IEEE754Compatible=false`, `application/json;odata.metadata=full;odata.streaming=false;IEEE754Compatible=true`, `application/json;odata.metadata=full;IEEE754Compatible=false`, `application/json;odata.metadata=full;IEEE754Compatible=true`, `application/json;odata.metadata=none;odata.streaming=true;IEEE754Compatible=false`, `application/json;odata.metadata=none;odata.streaming=true;IEEE754Compatible=true`, `application/json;odata.metadata=none;odata.streaming=false;IEEE754Compatible=true`, `application/json;odata.metadata=none;odata.streaming=false;IEEE754Compatible=false`, `application/json;odata.metadata=none;IEEE754Compatible=false`, `application/json;odata.metadata=none;IEEE754Compatible=true`, `application/json;odata.streaming=true;IEEE754Compatible=false`, `application/json;odata.streaming=true;IEEE754Compatible=true`, `application/json;odata.streaming=false;IEEE754Compatible=false`, `application/json;odata.streaming=false;IEEE754Compatible=true`, `application/json;IEEE754Compatible=false`, `application/json;IEEE754Compatible=true`, `application/xml`, `text/plain`, `application/json-patch+json`, `text/json`, `application/*+json`
- **Accept**: `application/json;odata.metadata=minimal;odata.streaming=true`, `application/json;odata.metadata=minimal;odata.streaming=false`, `application/json;odata.metadata=minimal`, `application/json;odata.metadata=full;odata.streaming=true`, `application/json;odata.metadata=full;odata.streaming=false`, `application/json;odata.metadata=full`, `application/json;odata.metadata=none;odata.streaming=true`, `application/json;odata.metadata=none;odata.streaming=false`, `application/json;odata.metadata=none`, `application/json;odata.streaming=true`, `application/json;odata.streaming=false`, `application/json`, `application/json;odata.metadata=minimal;odata.streaming=true;IEEE754Compatible=false`, `application/json;odata.metadata=minimal;odata.streaming=true;IEEE754Compatible=true`, `application/json;odata.metadata=minimal;odata.streaming=false;IEEE754Compatible=false`, `application/json;odata.metadata=minimal;odata.streaming=false;IEEE754Compatible=true`, `application/json;odata.metadata=minimal;IEEE754Compatible=false`, `application/json;odata.metadata=minimal;IEEE754Compatible=true`, `application/json;odata.metadata=full;odata.streaming=true;IEEE754Compatible=false`, `application/json;odata.metadata=full;odata.streaming=true;IEEE754Compatible=true`, `application/json;odata.metadata=full;odata.streaming=false;IEEE754Compatible=false`, `application/json;odata.metadata=full;odata.streaming=false;IEEE754Compatible=true`, `application/json;odata.metadata=full;IEEE754Compatible=false`, `application/json;odata.metadata=full;IEEE754Compatible=true`, `application/json;odata.metadata=none;odata.streaming=true;IEEE754Compatible=false`, `application/json;odata.metadata=none;odata.streaming=true;IEEE754Compatible=true`, `application/json;odata.metadata=none;odata.streaming=false;IEEE754Compatible=true`, `application/json;odata.metadata=none;odata.streaming=false;IEEE754Compatible=false`, `application/json;odata.metadata=none;IEEE754Compatible=false`, `application/json;odata.metadata=none;IEEE754Compatible=true`, `application/json;odata.streaming=true;IEEE754Compatible=false`, `application/json;odata.streaming=true;IEEE754Compatible=true`, `application/json;odata.streaming=false;IEEE754Compatible=false`, `application/json;odata.streaming=false;IEEE754Compatible=true`, `application/json;IEEE754Compatible=false`, `application/json;IEEE754Compatible=true`, `application/xml`, `text/plain`, `application/octet-stream`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `download()`

```php
download($template_id, $on_behalf_of, $include_form_field_values): \SplFileObject
```

Download the template.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new BoldSign\Configuration();
$config->setApiKey('YOUR_API_KEY');

$apiInstance = new BoldSign\Api\TemplateApi($config);
$template_id = 'template_id_example'; // string | Template Id.
$on_behalf_of = 'on_behalf_of_example'; // string | The on behalfof email address.
$include_form_field_values = false; // bool | Include form field data.

try {
    $result = $apiInstance->download($template_id, $on_behalf_of, $include_form_field_values);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateApi->download: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**| Template Id. | |
| **on_behalf_of** | **string**| The on behalfof email address. | [optional] |
| **include_form_field_values** | **bool**| Include form field data. | [optional] [default to false] |

### Return type

**\SplFileObject**

### Authorization

[X-API-KEY](../../README.md#X-API-KEY), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `editTemplate()`

```php
editTemplate($template_id, $edit_template_request)
```

Edit and updates an existing template.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new BoldSign\Configuration();
$config->setApiKey('YOUR_API_KEY');

$apiInstance = new BoldSign\Api\TemplateApi($config);
$template_id = 'template_id_example'; // string | The template id.
$edit_template_request = new \BoldSign\Model\EditTemplateRequest(); // \BoldSign\Model\EditTemplateRequest | The edit template request body.

try {
    $apiInstance->editTemplate($template_id, $edit_template_request);
} catch (Exception $e) {
    echo 'Exception when calling TemplateApi->editTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**| The template id. | |
| **edit_template_request** | [**\BoldSign\Model\EditTemplateRequest**](../Model/EditTemplateRequest.md)| The edit template request body. | |

### Return type

void (empty response body)

### Authorization

[X-API-KEY](../../README.md#X-API-KEY), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json;odata.metadata=minimal;odata.streaming=true`, `application/json;odata.metadata=minimal;odata.streaming=false`, `application/json;odata.metadata=minimal`, `application/json;odata.metadata=full;odata.streaming=true`, `application/json;odata.metadata=full;odata.streaming=false`, `application/json;odata.metadata=full`, `application/json;odata.metadata=none;odata.streaming=true`, `application/json;odata.metadata=none;odata.streaming=false`, `application/json;odata.metadata=none`, `application/json;odata.streaming=true`, `application/json;odata.streaming=false`, `application/json`, `application/json;odata.metadata=minimal;odata.streaming=true;IEEE754Compatible=false`, `application/json;odata.metadata=minimal;odata.streaming=true;IEEE754Compatible=true`, `application/json;odata.metadata=minimal;odata.streaming=false;IEEE754Compatible=false`, `application/json;odata.metadata=minimal;odata.streaming=false;IEEE754Compatible=true`, `application/json;odata.metadata=minimal;IEEE754Compatible=false`, `application/json;odata.metadata=minimal;IEEE754Compatible=true`, `application/json;odata.metadata=full;odata.streaming=true;IEEE754Compatible=false`, `application/json;odata.metadata=full;odata.streaming=true;IEEE754Compatible=true`, `application/json;odata.metadata=full;odata.streaming=false;IEEE754Compatible=false`, `application/json;odata.metadata=full;odata.streaming=false;IEEE754Compatible=true`, `application/json;odata.metadata=full;IEEE754Compatible=false`, `application/json;odata.metadata=full;IEEE754Compatible=true`, `application/json;odata.metadata=none;odata.streaming=true;IEEE754Compatible=false`, `application/json;odata.metadata=none;odata.streaming=true;IEEE754Compatible=true`, `application/json;odata.metadata=none;odata.streaming=false;IEEE754Compatible=true`, `application/json;odata.metadata=none;odata.streaming=false;IEEE754Compatible=false`, `application/json;odata.metadata=none;IEEE754Compatible=false`, `application/json;odata.metadata=none;IEEE754Compatible=true`, `application/json;odata.streaming=true;IEEE754Compatible=false`, `application/json;odata.streaming=true;IEEE754Compatible=true`, `application/json;odata.streaming=false;IEEE754Compatible=false`, `application/json;odata.streaming=false;IEEE754Compatible=true`, `application/json;IEEE754Compatible=false`, `application/json;IEEE754Compatible=true`, `application/xml`, `text/plain`, `application/json-patch+json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmbeddedTemplateEditUrl()`

```php
getEmbeddedTemplateEditUrl($template_id, $embedded_template_edit_request): \BoldSign\Model\EmbeddedTemplateEdited
```

Generates a edit URL to embeds template edit process into your application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new BoldSign\Configuration();
$config->setApiKey('YOUR_API_KEY');

$apiInstance = new BoldSign\Api\TemplateApi($config);
$template_id = 'template_id_example'; // string | The template id.
$embedded_template_edit_request = new \BoldSign\Model\EmbeddedTemplateEditRequest(); // \BoldSign\Model\EmbeddedTemplateEditRequest | The embedded edit template request body.

try {
    $result = $apiInstance->getEmbeddedTemplateEditUrl($template_id, $embedded_template_edit_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateApi->getEmbeddedTemplateEditUrl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**| The template id. | |
| **embedded_template_edit_request** | [**\BoldSign\Model\EmbeddedTemplateEditRequest**](../Model/EmbeddedTemplateEditRequest.md)| The embedded edit template request body. | [optional] |

### Return type

[**\BoldSign\Model\EmbeddedTemplateEdited**](../Model/EmbeddedTemplateEdited.md)

### Authorization

[X-API-KEY](../../README.md#X-API-KEY), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProperties()`

```php
getProperties($template_id): \BoldSign\Model\TemplateProperties
```

Get summary of the template.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new BoldSign\Configuration();
$config->setApiKey('YOUR_API_KEY');

$apiInstance = new BoldSign\Api\TemplateApi($config);
$template_id = 'template_id_example'; // string | Template Id.

try {
    $result = $apiInstance->getProperties($template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateApi->getProperties: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**| Template Id. | |

### Return type

[**\BoldSign\Model\TemplateProperties**](../Model/TemplateProperties.md)

### Authorization

[X-API-KEY](../../README.md#X-API-KEY), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTemplates()`

```php
listTemplates($page, $template_type, $page_size, $search_key, $on_behalf_of, $created_by, $template_labels, $start_date, $end_date, $brand_ids, $shared_with_team_id): \BoldSign\Model\TemplateRecords
```

List all the templates.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new BoldSign\Configuration();
$config->setApiKey('YOUR_API_KEY');

$apiInstance = new BoldSign\Api\TemplateApi($config);
$page = 1; // int
$template_type = 'template_type_example'; // string
$page_size = 10; // int
$search_key = 'search_key_example'; // string
$on_behalf_of = array('on_behalf_of_example'); // string[] | The sender identity's email used to filter the templates returned in the API. The API will return templates that were sent on behalf of the specified email address.
$created_by = array('created_by_example'); // string[] | The templates can be listed by the creator of the template.
$template_labels = array('template_labels_example'); // string[] | Labels of the template.
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start date of the template
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | End date of the template
$brand_ids = array('brand_ids_example'); // string[] | BrandId(s) of the template.
$shared_with_team_id = array('shared_with_team_id_example'); // string[] | The templates can be listed by the shared teams.

try {
    $result = $apiInstance->listTemplates($page, $template_type, $page_size, $search_key, $on_behalf_of, $created_by, $template_labels, $start_date, $end_date, $brand_ids, $shared_with_team_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateApi->listTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**|  | [default to 1] |
| **template_type** | **string**|  | [optional] |
| **page_size** | **int**|  | [optional] [default to 10] |
| **search_key** | **string**|  | [optional] |
| **on_behalf_of** | [**string[]**](../Model/string.md)| The sender identity&#39;s email used to filter the templates returned in the API. The API will return templates that were sent on behalf of the specified email address. | [optional] |
| **created_by** | [**string[]**](../Model/string.md)| The templates can be listed by the creator of the template. | [optional] |
| **template_labels** | [**string[]**](../Model/string.md)| Labels of the template. | [optional] |
| **start_date** | **\DateTime**| Start date of the template | [optional] |
| **end_date** | **\DateTime**| End date of the template | [optional] |
| **brand_ids** | [**string[]**](../Model/string.md)| BrandId(s) of the template. | [optional] |
| **shared_with_team_id** | [**string[]**](../Model/string.md)| The templates can be listed by the shared teams. | [optional] |

### Return type

[**\BoldSign\Model\TemplateRecords**](../Model/TemplateRecords.md)

### Authorization

[X-API-KEY](../../README.md#X-API-KEY), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `mergeAndSend()`

```php
mergeAndSend($merge_and_send_for_sign_form): \BoldSign\Model\DocumentCreated
```

Send the document by merging multiple templates.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new BoldSign\Configuration();
$config->setApiKey('YOUR_API_KEY');

$apiInstance = new BoldSign\Api\TemplateApi($config);
$merge_and_send_for_sign_form = new \BoldSign\Model\MergeAndSendForSignForm(); // \BoldSign\Model\MergeAndSendForSignForm | The merge and send details as JSON.

try {
    $result = $apiInstance->mergeAndSend($merge_and_send_for_sign_form);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateApi->mergeAndSend: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merge_and_send_for_sign_form** | [**\BoldSign\Model\MergeAndSendForSignForm**](../Model/MergeAndSendForSignForm.md)| The merge and send details as JSON. | [optional] |

### Return type

[**\BoldSign\Model\DocumentCreated**](../Model/DocumentCreated.md)

### Authorization

[X-API-KEY](../../README.md#X-API-KEY), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `mergeCreateEmbeddedRequestUrlTemplate()`

```php
mergeCreateEmbeddedRequestUrlTemplate($embedded_merge_template_form_request): \BoldSign\Model\EmbeddedSendCreated
```

Generates a merge request URL using a template that combines document merging and sending processes into your application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new BoldSign\Configuration();
$config->setApiKey('YOUR_API_KEY');

$apiInstance = new BoldSign\Api\TemplateApi($config);
$embedded_merge_template_form_request = new \BoldSign\Model\EmbeddedMergeTemplateFormRequest(); // \BoldSign\Model\EmbeddedMergeTemplateFormRequest | Embedded merge and send template json request.

try {
    $result = $apiInstance->mergeCreateEmbeddedRequestUrlTemplate($embedded_merge_template_form_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateApi->mergeCreateEmbeddedRequestUrlTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **embedded_merge_template_form_request** | [**\BoldSign\Model\EmbeddedMergeTemplateFormRequest**](../Model/EmbeddedMergeTemplateFormRequest.md)| Embedded merge and send template json request. | [optional] |

### Return type

[**\BoldSign\Model\EmbeddedSendCreated**](../Model/EmbeddedSendCreated.md)

### Authorization

[X-API-KEY](../../README.md#X-API-KEY), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendUsingTemplate()`

```php
sendUsingTemplate($template_id, $send_for_sign_from_template_form): \BoldSign\Model\DocumentCreated
```

Send a document for signature using a Template.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new BoldSign\Configuration();
$config->setApiKey('YOUR_API_KEY');

$apiInstance = new BoldSign\Api\TemplateApi($config);
$template_id = 'template_id_example'; // string | The template id.
$send_for_sign_from_template_form = new \BoldSign\Model\SendForSignFromTemplateForm(); // \BoldSign\Model\SendForSignFromTemplateForm | The send template details as JSON.

try {
    $result = $apiInstance->sendUsingTemplate($template_id, $send_for_sign_from_template_form);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateApi->sendUsingTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**| The template id. | |
| **send_for_sign_from_template_form** | [**\BoldSign\Model\SendForSignFromTemplateForm**](../Model/SendForSignFromTemplateForm.md)| The send template details as JSON. | [optional] |

### Return type

[**\BoldSign\Model\DocumentCreated**](../Model/DocumentCreated.md)

### Authorization

[X-API-KEY](../../README.md#X-API-KEY), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `shareTemplate()`

```php
shareTemplate($template_id, $template_share_request)
```

Share a template with teams and manage permissions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new BoldSign\Configuration();
$config->setApiKey('YOUR_API_KEY');

$apiInstance = new BoldSign\Api\TemplateApi($config);
$template_id = 'template_id_example'; // string | Template Id.
$template_share_request = new \BoldSign\Model\TemplateShareRequest(); // \BoldSign\Model\TemplateShareRequest | Permissions request.

try {
    $apiInstance->shareTemplate($template_id, $template_share_request);
} catch (Exception $e) {
    echo 'Exception when calling TemplateApi->shareTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**| Template Id. | |
| **template_share_request** | [**\BoldSign\Model\TemplateShareRequest**](../Model/TemplateShareRequest.md)| Permissions request. | |

### Return type

void (empty response body)

### Authorization

[X-API-KEY](../../README.md#X-API-KEY), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json;odata.metadata=minimal;odata.streaming=true`, `application/json;odata.metadata=minimal;odata.streaming=false`, `application/json;odata.metadata=minimal`, `application/json;odata.metadata=full;odata.streaming=true`, `application/json;odata.metadata=full;odata.streaming=false`, `application/json;odata.metadata=full`, `application/json;odata.metadata=none;odata.streaming=true`, `application/json;odata.metadata=none;odata.streaming=false`, `application/json;odata.metadata=none`, `application/json;odata.streaming=true`, `application/json;odata.streaming=false`, `application/json`, `application/json;odata.metadata=minimal;odata.streaming=true;IEEE754Compatible=false`, `application/json;odata.metadata=minimal;odata.streaming=true;IEEE754Compatible=true`, `application/json;odata.metadata=minimal;odata.streaming=false;IEEE754Compatible=false`, `application/json;odata.metadata=minimal;odata.streaming=false;IEEE754Compatible=true`, `application/json;odata.metadata=minimal;IEEE754Compatible=false`, `application/json;odata.metadata=minimal;IEEE754Compatible=true`, `application/json;odata.metadata=full;odata.streaming=true;IEEE754Compatible=false`, `application/json;odata.metadata=full;odata.streaming=true;IEEE754Compatible=true`, `application/json;odata.metadata=full;odata.streaming=false;IEEE754Compatible=false`, `application/json;odata.metadata=full;odata.streaming=false;IEEE754Compatible=true`, `application/json;odata.metadata=full;IEEE754Compatible=false`, `application/json;odata.metadata=full;IEEE754Compatible=true`, `application/json;odata.metadata=none;odata.streaming=true;IEEE754Compatible=false`, `application/json;odata.metadata=none;odata.streaming=true;IEEE754Compatible=true`, `application/json;odata.metadata=none;odata.streaming=false;IEEE754Compatible=true`, `application/json;odata.metadata=none;odata.streaming=false;IEEE754Compatible=false`, `application/json;odata.metadata=none;IEEE754Compatible=false`, `application/json;odata.metadata=none;IEEE754Compatible=true`, `application/json;odata.streaming=true;IEEE754Compatible=false`, `application/json;odata.streaming=true;IEEE754Compatible=true`, `application/json;odata.streaming=false;IEEE754Compatible=false`, `application/json;odata.streaming=false;IEEE754Compatible=true`, `application/json;IEEE754Compatible=false`, `application/json;IEEE754Compatible=true`, `application/xml`, `text/plain`, `application/json-patch+json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
