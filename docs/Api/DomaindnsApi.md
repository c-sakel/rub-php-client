# csakel\RUBClient\DomaindnsApi

All URIs are relative to *https://api.reselling.services/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**domainDns**](DomaindnsApi.md#domaindns) | **GET** /domain/dns | DNS Zone abrufen
[**domainDnsUpdate**](DomaindnsApi.md#domaindnsupdate) | **POST** /domain/dns/update | DNS Zone speichern

# **domainDns**
> \csakel\RUBClient\Model\DomainDnsZone[] domainDns($domain_name)

DNS Zone abrufen

DNS Zone abrufen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = csakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new csakel\RUBClient\Api\DomaindnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_name = "domain_name_example"; // string | Domain, wofür die DNS Zone abgerufen werden soll.

try {
    $result = $apiInstance->domainDns($domain_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomaindnsApi->domainDns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **domain_name** | **string**| Domain, wofür die DNS Zone abgerufen werden soll. |

### Return type

[**\csakel\RUBClient\Model\DomainDnsZone[]**](../Model/DomainDnsZone.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **domainDnsUpdate**
> \csakel\RUBClient\Model\DomainDnsZone[] domainDnsUpdate($domain_name, $records)

DNS Zone speichern

DNS Zone speichern

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = csakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new csakel\RUBClient\Api\DomaindnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_name = "domain_name_example"; // string | Domain, wofür die DNS Zone abgerufen werden soll.
$records = array("records_example"); // string[] | DNS Einträge für die Zone.

try {
    $result = $apiInstance->domainDnsUpdate($domain_name, $records);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomaindnsApi->domainDnsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **domain_name** | **string**| Domain, wofür die DNS Zone abgerufen werden soll. |
 **records** | [**string[]**](../Model/string.md)| DNS Einträge für die Zone. |

### Return type

[**\csakel\RUBClient\Model\DomainDnsZone[]**](../Model/DomainDnsZone.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

