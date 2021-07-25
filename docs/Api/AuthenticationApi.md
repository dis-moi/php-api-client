# DisMoi\Client\AuthenticationApi

All URIs are relative to http://localhost:8088.

Method | HTTP request | Description
------------- | ------------- | -------------
[**postCredentialsItem()**](AuthenticationApi.md#postCredentialsItem) | **POST** /v4/_jwt | Returns an authentication token (JWT) from login credentials.


## `postCredentialsItem()`

```php
postCredentialsItem($credentials): \DisMoi\Client\Model\Token
```

Returns an authentication token (JWT) from login credentials.

Usage of this API require authentication. The Token returned is a [JWT](https://jwt.io/) valid for ten hours.  Use this token in the `Authorization` header, prefixed by `Bearer `, like so: `Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9…`. You may use the `Authorize 🔒` button in the sandbox to do this, if you're using the sandbox.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = DisMoi\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');


$apiInstance = new DisMoi\Client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credentials = new \DisMoi\Client\Model\Credentials(); // \DisMoi\Client\Model\Credentials | Generate a new Json Web Token (JWT)

try {
    $result = $apiInstance->postCredentialsItem($credentials);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->postCredentialsItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **credentials** | [**\DisMoi\Client\Model\Credentials**](../Model/Credentials.md)| Generate a new Json Web Token (JWT) |

### Return type

[**\DisMoi\Client\Model\Token**](../Model/Token.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
