# csakel\RUBClient\DomainknowledgebaseApi

All URIs are relative to *https://api.reselling.services/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**domainKnowledgebaseIndex**](DomainknowledgebaseApi.md#domainknowledgebaseindex) | **GET** /domain/knowledgebase | Alle TLDs aus der Wissensdatenbank abrufen
[**domainKnowledgebaseShow**](DomainknowledgebaseApi.md#domainknowledgebaseshow) | **GET** /domain/knowledgebase/show | Einzelne TLD aus der Wissensdatenbank abrufen

# **domainKnowledgebaseIndex**
> \csakel\RUBClient\Model\DomainKnowledgebase[] domainKnowledgebaseIndex()

Alle TLDs aus der Wissensdatenbank abrufen

Alle TLDs aus der Wissensdatenbank abrufen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = csakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new csakel\RUBClient\Api\DomainknowledgebaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->domainKnowledgebaseIndex();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainknowledgebaseApi->domainKnowledgebaseIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\csakel\RUBClient\Model\DomainKnowledgebase[]**](../Model/DomainKnowledgebase.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **domainKnowledgebaseShow**
> \csakel\RUBClient\Model\DomainKnowledgebase[] domainKnowledgebaseShow($tld)

Einzelne TLD aus der Wissensdatenbank abrufen

Einzelne TLD aus der Wissensdatenbank abrufen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = csakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new csakel\RUBClient\Api\DomainknowledgebaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tld = "tld_example"; // string | TLD, welche abgerufen werden soll.

try {
    $result = $apiInstance->domainKnowledgebaseShow($tld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainknowledgebaseApi->domainKnowledgebaseShow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tld** | **string**| TLD, welche abgerufen werden soll. |

### Return type

[**\csakel\RUBClient\Model\DomainKnowledgebase[]**](../Model/DomainKnowledgebase.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

