# Swagger\Client\PduApi

All URIs are relative to *https://api.reselling.services/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**pduGet**](PduApi.md#pduget) | **GET** /pdu | 
[**pduShowGet**](PduApi.md#pdushowget) | **GET** /pdu/show | 
[**pduUsageGet**](PduApi.md#pduusageget) | **GET** /pdu/usage | 

# **pduGet**
> \Swagger\Client\Model\Pdu[] pduGet()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\PduApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->pduGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PduApi->pduGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Pdu[]**](../Model/Pdu.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pduShowGet**
> \Swagger\Client\Model\Pdu[] pduShowGet()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\PduApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->pduShowGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PduApi->pduShowGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Pdu[]**](../Model/Pdu.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pduUsageGet**
> \Swagger\Client\Model\PduUsage[] pduUsageGet($pdu_id, $start_date, $end_date)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\PduApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pdu_id = 56; // int | 
$start_date = new \DateTime("2013-10-20"); // \DateTime | 
$end_date = new \DateTime("2013-10-20"); // \DateTime | 

try {
    $result = $apiInstance->pduUsageGet($pdu_id, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PduApi->pduUsageGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pdu_id** | **int**|  |
 **start_date** | **\DateTime**|  | [optional]
 **end_date** | **\DateTime**|  | [optional]

### Return type

[**\Swagger\Client\Model\PduUsage[]**](../Model/PduUsage.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

