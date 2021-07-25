# DisMoi\Client\NoticeApi

All URIs are relative to http://localhost:8088.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiNoticesMatchingContextsGetSubresourceNoticeSubresource()**](NoticeApi.md#apiNoticesMatchingContextsGetSubresourceNoticeSubresource) | **GET** /v4/notices/{id}/matching_contexts | Retrieves a Notice resource.
[**deleteNoticeItem()**](NoticeApi.md#deleteNoticeItem) | **DELETE** /v4/notices/{id} | Removes the Notice resource.
[**getNoticeCollection()**](NoticeApi.md#getNoticeCollection) | **GET** /v4/notices | Retrieves the collection of Notice resources.
[**getNoticeItem()**](NoticeApi.md#getNoticeItem) | **GET** /v4/notices/{id} | Retrieves a Notice resource.
[**postNoticeCollection()**](NoticeApi.md#postNoticeCollection) | **POST** /v4/notices | Creates a Notice resource.


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


$apiInstance = new DisMoi\Client\Api\NoticeApi(
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
    echo 'Exception when calling NoticeApi->apiNoticesMatchingContextsGetSubresourceNoticeSubresource: ', $e->getMessage(), PHP_EOL;
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

## `deleteNoticeItem()`

```php
deleteNoticeItem($id)
```

Removes the Notice resource.

Removes the Notice resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = DisMoi\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');


$apiInstance = new DisMoi\Client\Api\NoticeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Resource identifier

try {
    $apiInstance->deleteNoticeItem($id);
} catch (Exception $e) {
    echo 'Exception when calling NoticeApi->deleteNoticeItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Resource identifier |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNoticeCollection()`

```php
getNoticeCollection($page): \DisMoi\Client\Model\InlineResponse2001
```

Retrieves the collection of Notice resources.

Retrieves the collection of Notice resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = DisMoi\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');


$apiInstance = new DisMoi\Client\Api\NoticeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number

try {
    $result = $apiInstance->getNoticeCollection($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoticeApi->getNoticeCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The collection page number | [optional] [default to 1]

### Return type

[**\DisMoi\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNoticeItem()`

```php
getNoticeItem($id): \DisMoi\Client\Model\NoticeJsonldRead
```

Retrieves a Notice resource.

Retrieves a Notice resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = DisMoi\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');


$apiInstance = new DisMoi\Client\Api\NoticeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Resource identifier

try {
    $result = $apiInstance->getNoticeItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoticeApi->getNoticeItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Resource identifier |

### Return type

[**\DisMoi\Client\Model\NoticeJsonldRead**](../Model/NoticeJsonldRead.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postNoticeCollection()`

```php
postNoticeCollection($noticeJsonldCreate): \DisMoi\Client\Model\NoticeJsonldRead
```

Creates a Notice resource.

Creates a Notice resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = DisMoi\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');


$apiInstance = new DisMoi\Client\Api\NoticeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$noticeJsonldCreate = new \DisMoi\Client\Model\NoticeJsonldCreate(); // \DisMoi\Client\Model\NoticeJsonldCreate | The new Notice resource

try {
    $result = $apiInstance->postNoticeCollection($noticeJsonldCreate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoticeApi->postNoticeCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **noticeJsonldCreate** | [**\DisMoi\Client\Model\NoticeJsonldCreate**](../Model/NoticeJsonldCreate.md)| The new Notice resource |

### Return type

[**\DisMoi\Client\Model\NoticeJsonldRead**](../Model/NoticeJsonldRead.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/json`, `text/html`
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
