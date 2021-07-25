# DisMoi\Client\ContributorApi

All URIs are relative to http://localhost:8088.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getContributorItem()**](ContributorApi.md#getContributorItem) | **GET** /v4/contributors/{id} | Retrieves a Contributor resource.


## `getContributorItem()`

```php
getContributorItem($id): \DisMoi\Client\Model\ContributorJsonldRead
```

Retrieves a Contributor resource.

Retrieves a Contributor resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = DisMoi\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');


$apiInstance = new DisMoi\Client\Api\ContributorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Resource identifier

try {
    $result = $apiInstance->getContributorItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContributorApi->getContributorItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Resource identifier |

### Return type

[**\DisMoi\Client\Model\ContributorJsonldRead**](../Model/ContributorJsonldRead.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
