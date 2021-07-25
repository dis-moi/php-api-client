# DisMoi\Client\MatchingContextApi

All URIs are relative to http://localhost:8088.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiNoticesMatchingContextsGetSubresourceNoticeSubresource()**](MatchingContextApi.md#apiNoticesMatchingContextsGetSubresourceNoticeSubresource) | **GET** /v4/notices/{id}/matching_contexts | Retrieves a Notice resource.
[**getMatchingContextCollection()**](MatchingContextApi.md#getMatchingContextCollection) | **GET** /v4/matching_contexts | Retrieves the collection of MatchingContext resources.
[**getMatchingContextItem()**](MatchingContextApi.md#getMatchingContextItem) | **GET** /v4/matching_contexts/{id} | Retrieves a MatchingContext resource.
[**postMatchingContextCollection()**](MatchingContextApi.md#postMatchingContextCollection) | **POST** /v4/matching_contexts | Creates a MatchingContext resource.


## `apiNoticesMatchingContextsGetSubresourceNoticeSubresource()`

```php
apiNoticesMatchingContextsGetSubresourceNoticeSubresource($id, $page): \DisMoi\Client\Model\InlineResponse200
```

Retrieves a Notice resource.

Retrieves a Notice resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = DisMoi\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');


$apiInstance = new DisMoi\Client\Api\MatchingContextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Notice identifier
$page = 1; // int | The collection page number

try {
    $result = $apiInstance->apiNoticesMatchingContextsGetSubresourceNoticeSubresource($id, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MatchingContextApi->apiNoticesMatchingContextsGetSubresourceNoticeSubresource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Notice identifier |
 **page** | **int**| The collection page number | [optional] [default to 1]

### Return type

[**\DisMoi\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMatchingContextCollection()`

```php
getMatchingContextCollection($page): \DisMoi\Client\Model\InlineResponse200
```

Retrieves the collection of MatchingContext resources.

Retrieves the collection of MatchingContext resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = DisMoi\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');


$apiInstance = new DisMoi\Client\Api\MatchingContextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number

try {
    $result = $apiInstance->getMatchingContextCollection($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MatchingContextApi->getMatchingContextCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The collection page number | [optional] [default to 1]

### Return type

[**\DisMoi\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMatchingContextItem()`

```php
getMatchingContextItem($id): \DisMoi\Client\Model\MatchingContextJsonldRead
```

Retrieves a MatchingContext resource.

Retrieves a MatchingContext resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = DisMoi\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');


$apiInstance = new DisMoi\Client\Api\MatchingContextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Resource identifier

try {
    $result = $apiInstance->getMatchingContextItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MatchingContextApi->getMatchingContextItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Resource identifier |

### Return type

[**\DisMoi\Client\Model\MatchingContextJsonldRead**](../Model/MatchingContextJsonldRead.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postMatchingContextCollection()`

```php
postMatchingContextCollection($matchingContextJsonldCreate): \DisMoi\Client\Model\MatchingContextJsonldRead
```

Creates a MatchingContext resource.

Creates a MatchingContext resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = DisMoi\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');


$apiInstance = new DisMoi\Client\Api\MatchingContextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$matchingContextJsonldCreate = new \DisMoi\Client\Model\MatchingContextJsonldCreate(); // \DisMoi\Client\Model\MatchingContextJsonldCreate | The new MatchingContext resource

try {
    $result = $apiInstance->postMatchingContextCollection($matchingContextJsonldCreate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MatchingContextApi->postMatchingContextCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **matchingContextJsonldCreate** | [**\DisMoi\Client\Model\MatchingContextJsonldCreate**](../Model/MatchingContextJsonldCreate.md)| The new MatchingContext resource |

### Return type

[**\DisMoi\Client\Model\MatchingContextJsonldRead**](../Model/MatchingContextJsonldRead.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/json`, `text/html`
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
