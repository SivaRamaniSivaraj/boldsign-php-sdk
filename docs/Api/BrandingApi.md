# BoldSign\BrandingApi

All URIs are relative to https://api.boldsign.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**brandList()**](BrandingApi.md#brandList) | **GET** /v1/brand/list | List all the brands. |
| [**createBrand()**](BrandingApi.md#createBrand) | **POST** /v1/brand/create | Create the brand. |
| [**deleteBrand()**](BrandingApi.md#deleteBrand) | **DELETE** /v1/brand/delete | Delete the brand. |
| [**editBrand()**](BrandingApi.md#editBrand) | **POST** /v1/brand/edit | Edit the brand. |
| [**getBrand()**](BrandingApi.md#getBrand) | **GET** /v1/brand/get | Get the specific brand details. |
| [**resetDefaultBrand()**](BrandingApi.md#resetDefaultBrand) | **POST** /v1/brand/resetdefault | Reset default brand. |


## `brandList()`

```php
brandList(): \BoldSign\Model\BrandingRecords
```

List all the brands.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new BoldSign\Configuration();
$config->setApiKey('YOUR_API_KEY');

$apiInstance = new BoldSign\Api\BrandingApi($config);

try {
    $result = $apiInstance->brandList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandingApi->brandList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\BoldSign\Model\BrandingRecords**](../Model/BrandingRecords.md)

### Authorization

[X-API-KEY](../../README.md#X-API-KEY), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createBrand()`

```php
createBrand($brand_name, $brand_logo, $background_color, $button_color, $button_text_color, $email_display_name, $disclaimer_description, $disclaimer_title, $redirect_url, $is_default, $can_hide_tag_line, $combine_audit_trail, $combine_attachments, $exclude_audit_trail_from_email, $email_signed_document, $document_time_zone, $show_built_in_form_fields, $allow_custom_field_creation, $show_shared_custom_fields, $hide_decline, $hide_save, $document_expiry_settings_expiry_date_type, $document_expiry_settings_expiry_value, $document_expiry_settings_enable_default_expiry_alert, $document_expiry_settings_enable_auto_reminder, $document_expiry_settings_reminder_days, $document_expiry_settings_reminder_count, $custom_domain_settings_domain_name, $custom_domain_settings_from_name, $signature_frame_settings_enable_signature_frame, $signature_frame_settings_show_recipient_name, $signature_frame_settings_show_recipient_email, $signature_frame_settings_show_time_stamp): \BoldSign\Model\BrandCreated
```

Create the brand.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new BoldSign\Configuration();
$config->setApiKey('YOUR_API_KEY');

$apiInstance = new BoldSign\Api\BrandingApi($config);
$brand_name = 'brand_name_example'; // string
$brand_logo = "/path/to/file.txt"; // \SplFileObject
$background_color = 'background_color_example'; // string
$button_color = 'button_color_example'; // string
$button_text_color = 'button_text_color_example'; // string
$email_display_name = 'email_display_name_example'; // string
$disclaimer_description = 'disclaimer_description_example'; // string
$disclaimer_title = 'disclaimer_title_example'; // string
$redirect_url = 'redirect_url_example'; // string
$is_default = false; // bool
$can_hide_tag_line = false; // bool
$combine_audit_trail = false; // bool
$combine_attachments = false; // bool
$exclude_audit_trail_from_email = false; // bool
$email_signed_document = 'Attachment'; // string
$document_time_zone = 'document_time_zone_example'; // string
$show_built_in_form_fields = true; // bool
$allow_custom_field_creation = false; // bool
$show_shared_custom_fields = false; // bool
$hide_decline = True; // bool
$hide_save = True; // bool
$document_expiry_settings_expiry_date_type = 'document_expiry_settings_expiry_date_type_example'; // string
$document_expiry_settings_expiry_value = 56; // int
$document_expiry_settings_enable_default_expiry_alert = True; // bool
$document_expiry_settings_enable_auto_reminder = True; // bool
$document_expiry_settings_reminder_days = 56; // int
$document_expiry_settings_reminder_count = 56; // int
$custom_domain_settings_domain_name = 'custom_domain_settings_domain_name_example'; // string
$custom_domain_settings_from_name = 'custom_domain_settings_from_name_example'; // string
$signature_frame_settings_enable_signature_frame = false; // bool
$signature_frame_settings_show_recipient_name = false; // bool
$signature_frame_settings_show_recipient_email = false; // bool
$signature_frame_settings_show_time_stamp = false; // bool

try {
    $result = $apiInstance->createBrand($brand_name, $brand_logo, $background_color, $button_color, $button_text_color, $email_display_name, $disclaimer_description, $disclaimer_title, $redirect_url, $is_default, $can_hide_tag_line, $combine_audit_trail, $combine_attachments, $exclude_audit_trail_from_email, $email_signed_document, $document_time_zone, $show_built_in_form_fields, $allow_custom_field_creation, $show_shared_custom_fields, $hide_decline, $hide_save, $document_expiry_settings_expiry_date_type, $document_expiry_settings_expiry_value, $document_expiry_settings_enable_default_expiry_alert, $document_expiry_settings_enable_auto_reminder, $document_expiry_settings_reminder_days, $document_expiry_settings_reminder_count, $custom_domain_settings_domain_name, $custom_domain_settings_from_name, $signature_frame_settings_enable_signature_frame, $signature_frame_settings_show_recipient_name, $signature_frame_settings_show_recipient_email, $signature_frame_settings_show_time_stamp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandingApi->createBrand: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **brand_name** | **string**|  | |
| **brand_logo** | **\SplFileObject****\SplFileObject**|  | |
| **background_color** | **string**|  | [optional] |
| **button_color** | **string**|  | [optional] |
| **button_text_color** | **string**|  | [optional] |
| **email_display_name** | **string**|  | [optional] |
| **disclaimer_description** | **string**|  | [optional] |
| **disclaimer_title** | **string**|  | [optional] |
| **redirect_url** | **string**|  | [optional] |
| **is_default** | **bool**|  | [optional] [default to false] |
| **can_hide_tag_line** | **bool**|  | [optional] [default to false] |
| **combine_audit_trail** | **bool**|  | [optional] [default to false] |
| **combine_attachments** | **bool**|  | [optional] [default to false] |
| **exclude_audit_trail_from_email** | **bool**|  | [optional] [default to false] |
| **email_signed_document** | **string**|  | [optional] [default to &#39;Attachment&#39;] |
| **document_time_zone** | **string**|  | [optional] |
| **show_built_in_form_fields** | **bool**|  | [optional] [default to true] |
| **allow_custom_field_creation** | **bool**|  | [optional] [default to false] |
| **show_shared_custom_fields** | **bool**|  | [optional] [default to false] |
| **hide_decline** | **bool**|  | [optional] |
| **hide_save** | **bool**|  | [optional] |
| **document_expiry_settings_expiry_date_type** | **string**|  | [optional] |
| **document_expiry_settings_expiry_value** | **int**|  | [optional] |
| **document_expiry_settings_enable_default_expiry_alert** | **bool**|  | [optional] |
| **document_expiry_settings_enable_auto_reminder** | **bool**|  | [optional] |
| **document_expiry_settings_reminder_days** | **int**|  | [optional] |
| **document_expiry_settings_reminder_count** | **int**|  | [optional] |
| **custom_domain_settings_domain_name** | **string**|  | [optional] |
| **custom_domain_settings_from_name** | **string**|  | [optional] |
| **signature_frame_settings_enable_signature_frame** | **bool**|  | [optional] [default to false] |
| **signature_frame_settings_show_recipient_name** | **bool**|  | [optional] [default to false] |
| **signature_frame_settings_show_recipient_email** | **bool**|  | [optional] [default to false] |
| **signature_frame_settings_show_time_stamp** | **bool**|  | [optional] [default to false] |

### Return type

[**\BoldSign\Model\BrandCreated**](../Model/BrandCreated.md)

### Authorization

[X-API-KEY](../../README.md#X-API-KEY), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json;odata.metadata=minimal;odata.streaming=true`, `application/json;odata.metadata=minimal;odata.streaming=false`, `application/json;odata.metadata=minimal`, `application/json;odata.metadata=full;odata.streaming=true`, `application/json;odata.metadata=full;odata.streaming=false`, `application/json;odata.metadata=full`, `application/json;odata.metadata=none;odata.streaming=true`, `application/json;odata.metadata=none;odata.streaming=false`, `application/json;odata.metadata=none`, `application/json;odata.streaming=true`, `application/json;odata.streaming=false`, `application/json`, `application/json;odata.metadata=minimal;odata.streaming=true;IEEE754Compatible=false`, `application/json;odata.metadata=minimal;odata.streaming=true;IEEE754Compatible=true`, `application/json;odata.metadata=minimal;odata.streaming=false;IEEE754Compatible=false`, `application/json;odata.metadata=minimal;odata.streaming=false;IEEE754Compatible=true`, `application/json;odata.metadata=minimal;IEEE754Compatible=false`, `application/json;odata.metadata=minimal;IEEE754Compatible=true`, `application/json;odata.metadata=full;odata.streaming=true;IEEE754Compatible=false`, `application/json;odata.metadata=full;odata.streaming=true;IEEE754Compatible=true`, `application/json;odata.metadata=full;odata.streaming=false;IEEE754Compatible=false`, `application/json;odata.metadata=full;odata.streaming=false;IEEE754Compatible=true`, `application/json;odata.metadata=full;IEEE754Compatible=false`, `application/json;odata.metadata=full;IEEE754Compatible=true`, `application/json;odata.metadata=none;odata.streaming=true;IEEE754Compatible=false`, `application/json;odata.metadata=none;odata.streaming=true;IEEE754Compatible=true`, `application/json;odata.metadata=none;odata.streaming=false;IEEE754Compatible=true`, `application/json;odata.metadata=none;odata.streaming=false;IEEE754Compatible=false`, `application/json;odata.metadata=none;IEEE754Compatible=false`, `application/json;odata.metadata=none;IEEE754Compatible=true`, `application/json;odata.streaming=true;IEEE754Compatible=false`, `application/json;odata.streaming=true;IEEE754Compatible=true`, `application/json;odata.streaming=false;IEEE754Compatible=false`, `application/json;odata.streaming=false;IEEE754Compatible=true`, `application/json;IEEE754Compatible=false`, `application/json;IEEE754Compatible=true`, `application/xml`, `text/plain`, `application/octet-stream`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteBrand()`

```php
deleteBrand($brand_id): \BoldSign\Model\BrandingMessage
```

Delete the brand.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new BoldSign\Configuration();
$config->setApiKey('YOUR_API_KEY');

$apiInstance = new BoldSign\Api\BrandingApi($config);
$brand_id = 'brand_id_example'; // string | brand Id.

try {
    $result = $apiInstance->deleteBrand($brand_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandingApi->deleteBrand: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **brand_id** | **string**| brand Id. | |

### Return type

[**\BoldSign\Model\BrandingMessage**](../Model/BrandingMessage.md)

### Authorization

[X-API-KEY](../../README.md#X-API-KEY), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json;odata.metadata=minimal;odata.streaming=true`, `application/json;odata.metadata=minimal;odata.streaming=false`, `application/json;odata.metadata=minimal`, `application/json;odata.metadata=full;odata.streaming=true`, `application/json;odata.metadata=full;odata.streaming=false`, `application/json;odata.metadata=full`, `application/json;odata.metadata=none;odata.streaming=true`, `application/json;odata.metadata=none;odata.streaming=false`, `application/json;odata.metadata=none`, `application/json;odata.streaming=true`, `application/json;odata.streaming=false`, `application/json`, `application/json;odata.metadata=minimal;odata.streaming=true;IEEE754Compatible=false`, `application/json;odata.metadata=minimal;odata.streaming=true;IEEE754Compatible=true`, `application/json;odata.metadata=minimal;odata.streaming=false;IEEE754Compatible=false`, `application/json;odata.metadata=minimal;odata.streaming=false;IEEE754Compatible=true`, `application/json;odata.metadata=minimal;IEEE754Compatible=false`, `application/json;odata.metadata=minimal;IEEE754Compatible=true`, `application/json;odata.metadata=full;odata.streaming=true;IEEE754Compatible=false`, `application/json;odata.metadata=full;odata.streaming=true;IEEE754Compatible=true`, `application/json;odata.metadata=full;odata.streaming=false;IEEE754Compatible=false`, `application/json;odata.metadata=full;odata.streaming=false;IEEE754Compatible=true`, `application/json;odata.metadata=full;IEEE754Compatible=false`, `application/json;odata.metadata=full;IEEE754Compatible=true`, `application/json;odata.metadata=none;odata.streaming=true;IEEE754Compatible=false`, `application/json;odata.metadata=none;odata.streaming=true;IEEE754Compatible=true`, `application/json;odata.metadata=none;odata.streaming=false;IEEE754Compatible=true`, `application/json;odata.metadata=none;odata.streaming=false;IEEE754Compatible=false`, `application/json;odata.metadata=none;IEEE754Compatible=false`, `application/json;odata.metadata=none;IEEE754Compatible=true`, `application/json;odata.streaming=true;IEEE754Compatible=false`, `application/json;odata.streaming=true;IEEE754Compatible=true`, `application/json;odata.streaming=false;IEEE754Compatible=false`, `application/json;odata.streaming=false;IEEE754Compatible=true`, `application/json;IEEE754Compatible=false`, `application/json;IEEE754Compatible=true`, `application/xml`, `text/plain`, `application/octet-stream`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `editBrand()`

```php
editBrand($brand_id, $brand_name, $brand_logo, $background_color, $button_color, $button_text_color, $email_display_name, $disclaimer_description, $disclaimer_title, $redirect_url, $is_default, $can_hide_tag_line, $combine_audit_trail, $combine_attachments, $exclude_audit_trail_from_email, $email_signed_document, $document_time_zone, $show_built_in_form_fields, $allow_custom_field_creation, $show_shared_custom_fields, $hide_decline, $hide_save, $document_expiry_settings_expiry_date_type, $document_expiry_settings_expiry_value, $document_expiry_settings_enable_default_expiry_alert, $document_expiry_settings_enable_auto_reminder, $document_expiry_settings_reminder_days, $document_expiry_settings_reminder_count, $custom_domain_settings_domain_name, $custom_domain_settings_from_name, $signature_frame_settings_enable_signature_frame, $signature_frame_settings_show_recipient_name, $signature_frame_settings_show_recipient_email, $signature_frame_settings_show_time_stamp): \BoldSign\Model\BrandCreated
```

Edit the brand.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new BoldSign\Configuration();
$config->setApiKey('YOUR_API_KEY');

$apiInstance = new BoldSign\Api\BrandingApi($config);
$brand_id = 'brand_id_example'; // string | The brand id.
$brand_name = 'brand_name_example'; // string
$brand_logo = "/path/to/file.txt"; // \SplFileObject
$background_color = 'background_color_example'; // string
$button_color = 'button_color_example'; // string
$button_text_color = 'button_text_color_example'; // string
$email_display_name = 'email_display_name_example'; // string
$disclaimer_description = 'disclaimer_description_example'; // string
$disclaimer_title = 'disclaimer_title_example'; // string
$redirect_url = 'redirect_url_example'; // string
$is_default = false; // bool
$can_hide_tag_line = false; // bool
$combine_audit_trail = false; // bool
$combine_attachments = false; // bool
$exclude_audit_trail_from_email = false; // bool
$email_signed_document = 'Attachment'; // string
$document_time_zone = 'document_time_zone_example'; // string
$show_built_in_form_fields = true; // bool
$allow_custom_field_creation = false; // bool
$show_shared_custom_fields = false; // bool
$hide_decline = True; // bool
$hide_save = True; // bool
$document_expiry_settings_expiry_date_type = 'document_expiry_settings_expiry_date_type_example'; // string
$document_expiry_settings_expiry_value = 56; // int
$document_expiry_settings_enable_default_expiry_alert = True; // bool
$document_expiry_settings_enable_auto_reminder = True; // bool
$document_expiry_settings_reminder_days = 56; // int
$document_expiry_settings_reminder_count = 56; // int
$custom_domain_settings_domain_name = 'custom_domain_settings_domain_name_example'; // string
$custom_domain_settings_from_name = 'custom_domain_settings_from_name_example'; // string
$signature_frame_settings_enable_signature_frame = false; // bool
$signature_frame_settings_show_recipient_name = false; // bool
$signature_frame_settings_show_recipient_email = false; // bool
$signature_frame_settings_show_time_stamp = false; // bool

try {
    $result = $apiInstance->editBrand($brand_id, $brand_name, $brand_logo, $background_color, $button_color, $button_text_color, $email_display_name, $disclaimer_description, $disclaimer_title, $redirect_url, $is_default, $can_hide_tag_line, $combine_audit_trail, $combine_attachments, $exclude_audit_trail_from_email, $email_signed_document, $document_time_zone, $show_built_in_form_fields, $allow_custom_field_creation, $show_shared_custom_fields, $hide_decline, $hide_save, $document_expiry_settings_expiry_date_type, $document_expiry_settings_expiry_value, $document_expiry_settings_enable_default_expiry_alert, $document_expiry_settings_enable_auto_reminder, $document_expiry_settings_reminder_days, $document_expiry_settings_reminder_count, $custom_domain_settings_domain_name, $custom_domain_settings_from_name, $signature_frame_settings_enable_signature_frame, $signature_frame_settings_show_recipient_name, $signature_frame_settings_show_recipient_email, $signature_frame_settings_show_time_stamp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandingApi->editBrand: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **brand_id** | **string**| The brand id. | |
| **brand_name** | **string**|  | [optional] |
| **brand_logo** | **\SplFileObject****\SplFileObject**|  | [optional] |
| **background_color** | **string**|  | [optional] |
| **button_color** | **string**|  | [optional] |
| **button_text_color** | **string**|  | [optional] |
| **email_display_name** | **string**|  | [optional] |
| **disclaimer_description** | **string**|  | [optional] |
| **disclaimer_title** | **string**|  | [optional] |
| **redirect_url** | **string**|  | [optional] |
| **is_default** | **bool**|  | [optional] [default to false] |
| **can_hide_tag_line** | **bool**|  | [optional] [default to false] |
| **combine_audit_trail** | **bool**|  | [optional] [default to false] |
| **combine_attachments** | **bool**|  | [optional] [default to false] |
| **exclude_audit_trail_from_email** | **bool**|  | [optional] [default to false] |
| **email_signed_document** | **string**|  | [optional] [default to &#39;Attachment&#39;] |
| **document_time_zone** | **string**|  | [optional] |
| **show_built_in_form_fields** | **bool**|  | [optional] [default to true] |
| **allow_custom_field_creation** | **bool**|  | [optional] [default to false] |
| **show_shared_custom_fields** | **bool**|  | [optional] [default to false] |
| **hide_decline** | **bool**|  | [optional] |
| **hide_save** | **bool**|  | [optional] |
| **document_expiry_settings_expiry_date_type** | **string**|  | [optional] |
| **document_expiry_settings_expiry_value** | **int**|  | [optional] |
| **document_expiry_settings_enable_default_expiry_alert** | **bool**|  | [optional] |
| **document_expiry_settings_enable_auto_reminder** | **bool**|  | [optional] |
| **document_expiry_settings_reminder_days** | **int**|  | [optional] |
| **document_expiry_settings_reminder_count** | **int**|  | [optional] |
| **custom_domain_settings_domain_name** | **string**|  | [optional] |
| **custom_domain_settings_from_name** | **string**|  | [optional] |
| **signature_frame_settings_enable_signature_frame** | **bool**|  | [optional] [default to false] |
| **signature_frame_settings_show_recipient_name** | **bool**|  | [optional] [default to false] |
| **signature_frame_settings_show_recipient_email** | **bool**|  | [optional] [default to false] |
| **signature_frame_settings_show_time_stamp** | **bool**|  | [optional] [default to false] |

### Return type

[**\BoldSign\Model\BrandCreated**](../Model/BrandCreated.md)

### Authorization

[X-API-KEY](../../README.md#X-API-KEY), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json;odata.metadata=minimal;odata.streaming=true`, `application/json;odata.metadata=minimal;odata.streaming=false`, `application/json;odata.metadata=minimal`, `application/json;odata.metadata=full;odata.streaming=true`, `application/json;odata.metadata=full;odata.streaming=false`, `application/json;odata.metadata=full`, `application/json;odata.metadata=none;odata.streaming=true`, `application/json;odata.metadata=none;odata.streaming=false`, `application/json;odata.metadata=none`, `application/json;odata.streaming=true`, `application/json;odata.streaming=false`, `application/json`, `application/json;odata.metadata=minimal;odata.streaming=true;IEEE754Compatible=false`, `application/json;odata.metadata=minimal;odata.streaming=true;IEEE754Compatible=true`, `application/json;odata.metadata=minimal;odata.streaming=false;IEEE754Compatible=false`, `application/json;odata.metadata=minimal;odata.streaming=false;IEEE754Compatible=true`, `application/json;odata.metadata=minimal;IEEE754Compatible=false`, `application/json;odata.metadata=minimal;IEEE754Compatible=true`, `application/json;odata.metadata=full;odata.streaming=true;IEEE754Compatible=false`, `application/json;odata.metadata=full;odata.streaming=true;IEEE754Compatible=true`, `application/json;odata.metadata=full;odata.streaming=false;IEEE754Compatible=false`, `application/json;odata.metadata=full;odata.streaming=false;IEEE754Compatible=true`, `application/json;odata.metadata=full;IEEE754Compatible=false`, `application/json;odata.metadata=full;IEEE754Compatible=true`, `application/json;odata.metadata=none;odata.streaming=true;IEEE754Compatible=false`, `application/json;odata.metadata=none;odata.streaming=true;IEEE754Compatible=true`, `application/json;odata.metadata=none;odata.streaming=false;IEEE754Compatible=true`, `application/json;odata.metadata=none;odata.streaming=false;IEEE754Compatible=false`, `application/json;odata.metadata=none;IEEE754Compatible=false`, `application/json;odata.metadata=none;IEEE754Compatible=true`, `application/json;odata.streaming=true;IEEE754Compatible=false`, `application/json;odata.streaming=true;IEEE754Compatible=true`, `application/json;odata.streaming=false;IEEE754Compatible=false`, `application/json;odata.streaming=false;IEEE754Compatible=true`, `application/json;IEEE754Compatible=false`, `application/json;IEEE754Compatible=true`, `application/xml`, `text/plain`, `application/octet-stream`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBrand()`

```php
getBrand($brand_id): \BoldSign\Model\ViewBrandDetails
```

Get the specific brand details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new BoldSign\Configuration();
$config->setApiKey('YOUR_API_KEY');

$apiInstance = new BoldSign\Api\BrandingApi($config);
$brand_id = 'brand_id_example'; // string | The brand id.

try {
    $result = $apiInstance->getBrand($brand_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandingApi->getBrand: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **brand_id** | **string**| The brand id. | |

### Return type

[**\BoldSign\Model\ViewBrandDetails**](../Model/ViewBrandDetails.md)

### Authorization

[X-API-KEY](../../README.md#X-API-KEY), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `resetDefaultBrand()`

```php
resetDefaultBrand($brand_id): \BoldSign\Model\BrandingMessage
```

Reset default brand.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new BoldSign\Configuration();
$config->setApiKey('YOUR_API_KEY');

$apiInstance = new BoldSign\Api\BrandingApi($config);
$brand_id = 'brand_id_example'; // string | brand Id.

try {
    $result = $apiInstance->resetDefaultBrand($brand_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandingApi->resetDefaultBrand: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **brand_id** | **string**| brand Id. | |

### Return type

[**\BoldSign\Model\BrandingMessage**](../Model/BrandingMessage.md)

### Authorization

[X-API-KEY](../../README.md#X-API-KEY), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json;odata.metadata=minimal;odata.streaming=true`, `application/json;odata.metadata=minimal;odata.streaming=false`, `application/json;odata.metadata=minimal`, `application/json;odata.metadata=full;odata.streaming=true`, `application/json;odata.metadata=full;odata.streaming=false`, `application/json;odata.metadata=full`, `application/json;odata.metadata=none;odata.streaming=true`, `application/json;odata.metadata=none;odata.streaming=false`, `application/json;odata.metadata=none`, `application/json;odata.streaming=true`, `application/json;odata.streaming=false`, `application/json`, `application/json;odata.metadata=minimal;odata.streaming=true;IEEE754Compatible=false`, `application/json;odata.metadata=minimal;odata.streaming=true;IEEE754Compatible=true`, `application/json;odata.metadata=minimal;odata.streaming=false;IEEE754Compatible=false`, `application/json;odata.metadata=minimal;odata.streaming=false;IEEE754Compatible=true`, `application/json;odata.metadata=minimal;IEEE754Compatible=false`, `application/json;odata.metadata=minimal;IEEE754Compatible=true`, `application/json;odata.metadata=full;odata.streaming=true;IEEE754Compatible=false`, `application/json;odata.metadata=full;odata.streaming=true;IEEE754Compatible=true`, `application/json;odata.metadata=full;odata.streaming=false;IEEE754Compatible=false`, `application/json;odata.metadata=full;odata.streaming=false;IEEE754Compatible=true`, `application/json;odata.metadata=full;IEEE754Compatible=false`, `application/json;odata.metadata=full;IEEE754Compatible=true`, `application/json;odata.metadata=none;odata.streaming=true;IEEE754Compatible=false`, `application/json;odata.metadata=none;odata.streaming=true;IEEE754Compatible=true`, `application/json;odata.metadata=none;odata.streaming=false;IEEE754Compatible=true`, `application/json;odata.metadata=none;odata.streaming=false;IEEE754Compatible=false`, `application/json;odata.metadata=none;IEEE754Compatible=false`, `application/json;odata.metadata=none;IEEE754Compatible=true`, `application/json;odata.streaming=true;IEEE754Compatible=false`, `application/json;odata.streaming=true;IEEE754Compatible=true`, `application/json;odata.streaming=false;IEEE754Compatible=false`, `application/json;odata.streaming=false;IEEE754Compatible=true`, `application/json;IEEE754Compatible=false`, `application/json;IEEE754Compatible=true`, `application/xml`, `text/plain`, `application/octet-stream`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
