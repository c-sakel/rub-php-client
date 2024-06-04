# Swagger\Client\DomainpriceApi

All URIs are relative to *https://api.reselling.services/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**domainPrice**](DomainpriceApi.md#domainprice) | **GET** /domain/price | Domain Preise abrufen
[**domainPriceCsv**](DomainpriceApi.md#domainpricecsv) | **GET** /domain/price/csv | Domain Preise als CSV abrufen
[**domainPricePromotion**](DomainpriceApi.md#domainpricepromotion) | **GET** /domain/price/promotion | Domain-Aktionen Preise abrufen
[**domainPricePromotionCsv**](DomainpriceApi.md#domainpricepromotioncsv) | **GET** /domain/price/promotion/csv | Domain-Aktionen Preise als CSV abrufen

# **domainPrice**
> \Swagger\Client\Model\DomainPrice[] domainPrice()

Domain Preise abrufen

Domain Preise abrufen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DomainpriceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->domainPrice();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainpriceApi->domainPrice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\DomainPrice[]**](../Model/DomainPrice.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **domainPriceCsv**
> \Swagger\Client\Model\DomainPriceCsv[] domainPriceCsv()

Domain Preise als CSV abrufen

Domain Preise als CSV abrufen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DomainpriceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->domainPriceCsv();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainpriceApi->domainPriceCsv: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\DomainPriceCsv[]**](../Model/DomainPriceCsv.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **domainPricePromotion**
> \Swagger\Client\Model\DomainPricePromotion[] domainPricePromotion()

Domain-Aktionen Preise abrufen

Domain-Aktionen Preise abrufen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DomainpriceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->domainPricePromotion();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainpriceApi->domainPricePromotion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\DomainPricePromotion[]**](../Model/DomainPricePromotion.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **domainPricePromotionCsv**
> \Swagger\Client\Model\DomainPriceCsv[] domainPricePromotionCsv()

Domain-Aktionen Preise als CSV abrufen

Domain-Aktionen Preise als CSV abrufen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DomainpriceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->domainPricePromotionCsv();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainpriceApi->domainPricePromotionCsv: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\DomainPriceCsv[]**](../Model/DomainPriceCsv.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

