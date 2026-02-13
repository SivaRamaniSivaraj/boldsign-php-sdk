# BoldSign\GroupContactsApi

All URIs are relative to https://api.boldsign.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createGroupContact()**](GroupContactsApi.md#createGroupContact) | **POST** /v1-beta/contactGroups/create | Create a new Group Contact. |
| [**deleteGroupContact()**](GroupContactsApi.md#deleteGroupContact) | **DELETE** /v1-beta/contactGroups/delete | Deletes a Group Contact. |
| [**getGroupContact()**](GroupContactsApi.md#getGroupContact) | **GET** /v1-beta/contactGroups/get | Get Summary of the Group Contact. |
| [**groupContactList()**](GroupContactsApi.md#groupContactList) | **GET** /v1-beta/contactGroups/list | List Group Contacts. |
| [**updateGroupContact()**](GroupContactsApi.md#updateGroupContact) | **PUT** /v1-beta/contactGroups/update | Update the Group Contact. |


## `createGroupContact()`

```php
createGroupContact($group_contact_details): \BoldSign\Model\CreateGroupContactResponse
```

Create a new Group Contact.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new BoldSign\Configuration();
$config->setApiKey('YOUR_API_KEY');

$apiInstance = new BoldSign\Api\GroupContactsApi($config);
$group_contact_details = new \BoldSign\Model\GroupContactDetails(); // \BoldSign\Model\GroupContactDetails | The group contact details.

try {
    $result = $apiInstance->createGroupContact($group_contact_details);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupContactsApi->createGroupContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_contact_details** | [**\BoldSign\Model\GroupContactDetails**](../Model/GroupContactDetails.md)| The group contact details. | [optional] |

### Return type

[**\BoldSign\Model\CreateGroupContactResponse**](../Model/CreateGroupContactResponse.md)

### Authorization

[X-API-KEY](../../README.md#X-API-KEY), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json;odata.metadata=minimal;odata.streaming=true`, `application/json;odata.metadata=minimal;odata.streaming=false`, `application/json;odata.metadata=minimal`, `application/json;odata.metadata=full;odata.streaming=true`, `application/json;odata.metadata=full;odata.streaming=false`, `application/json;odata.metadata=full`, `application/json;odata.metadata=none;odata.streaming=true`, `application/json;odata.metadata=none;odata.streaming=false`, `application/json;odata.metadata=none`, `application/json;odata.streaming=true`, `application/json;odata.streaming=false`, `application/json`, `application/json;odata.metadata=minimal;odata.streaming=true;IEEE754Compatible=false`, `application/json;odata.metadata=minimal;odata.streaming=true;IEEE754Compatible=true`, `application/json;odata.metadata=minimal;odata.streaming=false;IEEE754Compatible=false`, `application/json;odata.metadata=minimal;odata.streaming=false;IEEE754Compatible=true`, `application/json;odata.metadata=minimal;IEEE754Compatible=false`, `application/json;odata.metadata=minimal;IEEE754Compatible=true`, `application/json;odata.metadata=full;odata.streaming=true;IEEE754Compatible=false`, `application/json;odata.metadata=full;odata.streaming=true;IEEE754Compatible=true`, `application/json;odata.metadata=full;odata.streaming=false;IEEE754Compatible=false`, `application/json;odata.metadata=full;odata.streaming=false;IEEE754Compatible=true`, `application/json;odata.metadata=full;IEEE754Compatible=false`, `application/json;odata.metadata=full;IEEE754Compatible=true`, `application/json;odata.metadata=none;odata.streaming=true;IEEE754Compatible=false`, `application/json;odata.metadata=none;odata.streaming=true;IEEE754Compatible=true`, `application/json;odata.metadata=none;odata.streaming=false;IEEE754Compatible=true`, `application/json;odata.metadata=none;odata.streaming=false;IEEE754Compatible=false`, `application/json;odata.metadata=none;IEEE754Compatible=false`, `application/json;odata.metadata=none;IEEE754Compatible=true`, `application/json;odata.streaming=true;IEEE754Compatible=false`, `application/json;odata.streaming=true;IEEE754Compatible=true`, `application/json;odata.streaming=false;IEEE754Compatible=false`, `application/json;odata.streaming=false;IEEE754Compatible=true`, `application/json;IEEE754Compatible=false`, `application/json;IEEE754Compatible=true`, `application/xml`, `text/plain`, `application/json-patch+json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteGroupContact()`

```php
deleteGroupContact($group_id)
```

Deletes a Group Contact.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new BoldSign\Configuration();
$config->setApiKey('YOUR_API_KEY');

$apiInstance = new BoldSign\Api\GroupContactsApi($config);
$group_id = 'group_id_example'; // string | The group contact id.

try {
    $apiInstance->deleteGroupContact($group_id);
} catch (Exception $e) {
    echo 'Exception when calling GroupContactsApi->deleteGroupContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **string**| The group contact id. | |

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

## `getGroupContact()`

```php
getGroupContact($group_id): \BoldSign\Model\GetGroupContactDetails
```

Get Summary of the Group Contact.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new BoldSign\Configuration();
$config->setApiKey('YOUR_API_KEY');

$apiInstance = new BoldSign\Api\GroupContactsApi($config);
$group_id = 'group_id_example'; // string | Group Contact Id.

try {
    $result = $apiInstance->getGroupContact($group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupContactsApi->getGroupContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **string**| Group Contact Id. | |

### Return type

[**\BoldSign\Model\GetGroupContactDetails**](../Model/GetGroupContactDetails.md)

### Authorization

[X-API-KEY](../../README.md#X-API-KEY), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `groupContactList()`

```php
groupContactList($page, $page_size, $search_key, $contact_type, $directories): \BoldSign\Model\GroupContactsList
```

List Group Contacts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new BoldSign\Configuration();
$config->setApiKey('YOUR_API_KEY');

$apiInstance = new BoldSign\Api\GroupContactsApi($config);
$page = 1; // int | Page index specified in get user group contact list request. Default value is 1.
$page_size = 10; // int | Page size specified in get user group contact list request. Default value is 10.
$search_key = 'search_key_example'; // string | Group Contacts can be listed by the search  based on the Name or Email
$contact_type = 'contact_type_example'; // string | Group Contact type whether the contact is my contacts or all contacts. Default value is AllContacts.
$directories = array('directories_example'); // string[] | Group Contacts can be listed by the search  based on the directories

try {
    $result = $apiInstance->groupContactList($page, $page_size, $search_key, $contact_type, $directories);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupContactsApi->groupContactList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Page index specified in get user group contact list request. Default value is 1. | [default to 1] |
| **page_size** | **int**| Page size specified in get user group contact list request. Default value is 10. | [optional] [default to 10] |
| **search_key** | **string**| Group Contacts can be listed by the search  based on the Name or Email | [optional] |
| **contact_type** | **string**| Group Contact type whether the contact is my contacts or all contacts. Default value is AllContacts. | [optional] |
| **directories** | [**string[]**](../Model/string.md)| Group Contacts can be listed by the search  based on the directories | [optional] |

### Return type

[**\BoldSign\Model\GroupContactsList**](../Model/GroupContactsList.md)

### Authorization

[X-API-KEY](../../README.md#X-API-KEY), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateGroupContact()`

```php
updateGroupContact($group_id, $update_group_contact)
```

Update the Group Contact.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new BoldSign\Configuration();
$config->setApiKey('YOUR_API_KEY');

$apiInstance = new BoldSign\Api\GroupContactsApi($config);
$group_id = 'group_id_example'; // string | The group contact ID.
$update_group_contact = new \BoldSign\Model\UpdateGroupContact(); // \BoldSign\Model\UpdateGroupContact | The group contact details.

try {
    $apiInstance->updateGroupContact($group_id, $update_group_contact);
} catch (Exception $e) {
    echo 'Exception when calling GroupContactsApi->updateGroupContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **string**| The group contact ID. | |
| **update_group_contact** | [**\BoldSign\Model\UpdateGroupContact**](../Model/UpdateGroupContact.md)| The group contact details. | |

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
