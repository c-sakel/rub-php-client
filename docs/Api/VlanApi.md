# Swagger\Client\VlanApi

All URIs are relative to *https://api.reselling.services/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**vlanGet**](VlanApi.md#vlanget) | **GET** /vlan | 
[**vlanShowGet**](VlanApi.md#vlanshowget) | **GET** /vlan/show | 
[**vlanTrafficTimeseriesGet**](VlanApi.md#vlantraffictimeseriesget) | **GET** /vlan/traffic/timeseries | 
[**vlanTrafficUsageGet**](VlanApi.md#vlantrafficusageget) | **GET** /vlan/traffic/usage | 

# **vlanGet**
> \Swagger\Client\Model\Vlan[] vlanGet()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\VlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->vlanGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VlanApi->vlanGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Vlan[]**](../Model/Vlan.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vlanShowGet**
> \Swagger\Client\Model\Vlan[] vlanShowGet($vlan)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\VlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vlan = 56; // int | 

try {
    $result = $apiInstance->vlanShowGet($vlan);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VlanApi->vlanShowGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vlan** | **int**|  |

### Return type

[**\Swagger\Client\Model\Vlan[]**](../Model/Vlan.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vlanTrafficTimeseriesGet**
> \Swagger\Client\Model\VlanTrafficTimeseries[] vlanTrafficTimeseriesGet($vlan, $start_date, $end_date)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\VlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vlan = 56; // int | 
$start_date = new \DateTime("2013-10-20"); // \DateTime | Startdatum für Traffic Zeitraum
$end_date = new \DateTime("2013-10-20"); // \DateTime | Enddatum für Traffic Zeitraum

try {
    $result = $apiInstance->vlanTrafficTimeseriesGet($vlan, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VlanApi->vlanTrafficTimeseriesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vlan** | **int**|  |
 **start_date** | **\DateTime**| Startdatum für Traffic Zeitraum | [optional]
 **end_date** | **\DateTime**| Enddatum für Traffic Zeitraum | [optional]

### Return type

[**\Swagger\Client\Model\VlanTrafficTimeseries[]**](../Model/VlanTrafficTimeseries.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vlanTrafficUsageGet**
> \Swagger\Client\Model\VlanTrafficUsage[] vlanTrafficUsageGet($vlan, $start_date, $end_date)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\VlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vlan = 56; // int | 
$start_date = new \DateTime("2013-10-20"); // \DateTime | Startdatum für Traffic Zeitraum
$end_date = new \DateTime("2013-10-20"); // \DateTime | Enddatum für Traffic Zeitraum

try {
    $result = $apiInstance->vlanTrafficUsageGet($vlan, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VlanApi->vlanTrafficUsageGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vlan** | **int**|  |
 **start_date** | **\DateTime**| Startdatum für Traffic Zeitraum | [optional]
 **end_date** | **\DateTime**| Enddatum für Traffic Zeitraum | [optional]

### Return type

[**\Swagger\Client\Model\VlanTrafficUsage[]**](../Model/VlanTrafficUsage.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

