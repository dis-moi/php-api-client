# dismoi/api-client

OpenAPI documentation and _sandbox_ for **DisMoi** (_Tell Me_ in french),
a FLOSS web annotations project to turn the tide of the opinion wars back in favor of the internauts.

- [Official Website](https://www.dismoi.io/)
- [Source Code](https://github.com/dis-moi)
- [Report Issues](https://github.com/dis-moi/backend/issues) (_please!_)



## Installation & Usage

### Requirements

PHP 7.3 and later.
Should also work with PHP 8.0 but has not been tested.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/dismoi/api-client/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to *http://localhost:8088*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AuthenticationApi* | [**postCredentialsItem**](docs/Api/AuthenticationApi.md#postcredentialsitem) | **POST** /v4/_jwt | Returns an authentication token (JWT) from login credentials.
*ContributorApi* | [**getContributorItem**](docs/Api/ContributorApi.md#getcontributoritem) | **GET** /v4/contributors/{id} | Retrieves a Contributor resource.
*MatchingContextApi* | [**apiNoticesMatchingContextsGetSubresourceNoticeSubresource**](docs/Api/MatchingContextApi.md#apinoticesmatchingcontextsgetsubresourcenoticesubresource) | **GET** /v4/notices/{id}/matching_contexts | Retrieves a Notice resource.
*MatchingContextApi* | [**getMatchingContextCollection**](docs/Api/MatchingContextApi.md#getmatchingcontextcollection) | **GET** /v4/matching_contexts | Retrieves the collection of MatchingContext resources.
*MatchingContextApi* | [**getMatchingContextItem**](docs/Api/MatchingContextApi.md#getmatchingcontextitem) | **GET** /v4/matching_contexts/{id} | Retrieves a MatchingContext resource.
*MatchingContextApi* | [**postMatchingContextCollection**](docs/Api/MatchingContextApi.md#postmatchingcontextcollection) | **POST** /v4/matching_contexts | Creates a MatchingContext resource.
*NoticeApi* | [**apiNoticesMatchingContextsGetSubresourceNoticeSubresource**](docs/Api/NoticeApi.md#apinoticesmatchingcontextsgetsubresourcenoticesubresource) | **GET** /v4/notices/{id}/matching_contexts | Retrieves a Notice resource.
*NoticeApi* | [**deleteNoticeItem**](docs/Api/NoticeApi.md#deletenoticeitem) | **DELETE** /v4/notices/{id} | Removes the Notice resource.
*NoticeApi* | [**getNoticeCollection**](docs/Api/NoticeApi.md#getnoticecollection) | **GET** /v4/notices | Retrieves the collection of Notice resources.
*NoticeApi* | [**getNoticeItem**](docs/Api/NoticeApi.md#getnoticeitem) | **GET** /v4/notices/{id} | Retrieves a Notice resource.
*NoticeApi* | [**postNoticeCollection**](docs/Api/NoticeApi.md#postnoticecollection) | **POST** /v4/notices | Creates a Notice resource.

## Models

- [ContributorJsonldRead](docs/Model/ContributorJsonldRead.md)
- [Credentials](docs/Model/Credentials.md)
- [InlineResponse200](docs/Model/InlineResponse200.md)
- [InlineResponse2001](docs/Model/InlineResponse2001.md)
- [InlineResponse200HydraSearch](docs/Model/InlineResponse200HydraSearch.md)
- [InlineResponse200HydraSearchHydraMapping](docs/Model/InlineResponse200HydraSearchHydraMapping.md)
- [InlineResponse200HydraView](docs/Model/InlineResponse200HydraView.md)
- [MatchingContextCreate](docs/Model/MatchingContextCreate.md)
- [MatchingContextJsonldCreate](docs/Model/MatchingContextJsonldCreate.md)
- [MatchingContextJsonldRead](docs/Model/MatchingContextJsonldRead.md)
- [MatchingContextRead](docs/Model/MatchingContextRead.md)
- [NoticeCreate](docs/Model/NoticeCreate.md)
- [NoticeJsonldCreate](docs/Model/NoticeJsonldCreate.md)
- [NoticeJsonldRead](docs/Model/NoticeJsonldRead.md)
- [NoticeRead](docs/Model/NoticeRead.md)
- [Token](docs/Model/Token.md)

## Authorization

### apiKey

- **Type**: API key
- **API key parameter name**: Authorization
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

- API version: `4.0.0`
    - Package version: `0.0.1`
- Build package: `io.dismoi.codegen.PhpClientCodegen`
