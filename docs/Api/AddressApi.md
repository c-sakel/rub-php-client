# c-sakel\RUBClient\AddressApi

All URIs are relative to *https://api.reselling.services/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addressIndex**](AddressApi.md#addressindex) | **GET** /address | Alle IP-Adressen abrufen
[**addressRdns**](AddressApi.md#addressrdns) | **POST** /address/rdns | rDNS Eintrag für IP-Adresse setzen
[**addressShow**](AddressApi.md#addressshow) | **GET** /address/show | Einzelne IP-Adresse abrufen
[**addressTraffic**](AddressApi.md#addresstraffic) | **GET** /address/traffic | Traffic für IP-Adresse abrufen

# **addressIndex**
> \c-sakel\RUBClient\Model\Address[] addressIndex()

Alle IP-Adressen abrufen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = c-sakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new c-sakel\RUBClient\Api\AddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->addressIndex();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressApi->addressIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\c-sakel\RUBClient\Model\Address[]**](../Model/Address.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addressRdns**
> \c-sakel\RUBClient\Model\Address[] addressRdns($address, $rdns)

rDNS Eintrag für IP-Adresse setzen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = c-sakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new c-sakel\RUBClient\Api\AddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address = "address_example"; // string | IP-Adresse, wofür der rDNS Eintrag gesetzt werden soll
$rdns = "rdns_example"; // string | rDNS Eintrag, welcher gesetzt werden soll

try {
    $result = $apiInstance->addressRdns($address, $rdns);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressApi->addressRdns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | **string**| IP-Adresse, wofür der rDNS Eintrag gesetzt werden soll |
 **rdns** | **string**| rDNS Eintrag, welcher gesetzt werden soll |

### Return type

[**\c-sakel\RUBClient\Model\Address[]**](../Model/Address.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addressShow**
> \c-sakel\RUBClient\Model\Address[] addressShow($address)

Einzelne IP-Adresse abrufen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = c-sakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new c-sakel\RUBClient\Api\AddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address = "address_example"; // string | IP-Adresse, welche abgerufen werden soll

try {
    $result = $apiInstance->addressShow($address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressApi->addressShow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | **string**| IP-Adresse, welche abgerufen werden soll |

### Return type

[**\c-sakel\RUBClient\Model\Address[]**](../Model/Address.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addressTraffic**
> \c-sakel\RUBClient\Model\AddressTraffic[] addressTraffic($address, $start_date, $end_date)

Traffic für IP-Adresse abrufen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = c-sakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new c-sakel\RUBClient\Api\AddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address = "address_example"; // string | IP-Adresse, wofür der Traffic abgerufen werden soll
$start_date = new \DateTime("2013-10-20"); // \DateTime | Startdatum für Traffic Zeitraum
$end_date = new \DateTime("2013-10-20"); // \DateTime | Enddatum für Traffic Zeitraum

try {
    $result = $apiInstance->addressTraffic($address, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressApi->addressTraffic: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | **string**| IP-Adresse, wofür der Traffic abgerufen werden soll |
 **start_date** | **\DateTime**| Startdatum für Traffic Zeitraum | [optional]
 **end_date** | **\DateTime**| Enddatum für Traffic Zeitraum | [optional]

### Return type

[**\c-sakel\RUBClient\Model\AddressTraffic[]**](../Model/AddressTraffic.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

