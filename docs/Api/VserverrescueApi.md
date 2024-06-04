# Swagger\Client\VserverrescueApi

All URIs are relative to *https://api.reselling.services/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**vserverRescueDisableDelete**](VserverrescueApi.md#vserverrescuedisabledelete) | **DELETE** /vserver/rescue/disable | 
[**vserverRescueEnablePost**](VserverrescueApi.md#vserverrescueenablepost) | **POST** /vserver/rescue/enable | 
[**vserverRescueGet**](VserverrescueApi.md#vserverrescueget) | **GET** /vserver/rescue | 
[**vserverRescueShowGet**](VserverrescueApi.md#vserverrescueshowget) | **GET** /vserver/rescue/show | 

# **vserverRescueDisableDelete**
> string vserverRescueDisableDelete($server_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\VserverrescueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | 

try {
    $result = $apiInstance->vserverRescueDisableDelete($server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserverrescueApi->vserverRescueDisableDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_id** | **int**|  |

### Return type

**string**

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vserverRescueEnablePost**
> string vserverRescueEnablePost($server_id, $image_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\VserverrescueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | 
$image_id = 56; // int | 

try {
    $result = $apiInstance->vserverRescueEnablePost($server_id, $image_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserverrescueApi->vserverRescueEnablePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_id** | **int**|  |
 **image_id** | **int**|  |

### Return type

**string**

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vserverRescueGet**
> \Swagger\Client\Model\VserverRescueImage[] vserverRescueGet()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\VserverrescueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->vserverRescueGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserverrescueApi->vserverRescueGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\VserverRescueImage[]**](../Model/VserverRescueImage.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vserverRescueShowGet**
> \Swagger\Client\Model\VserverRescueImage[] vserverRescueShowGet($image_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\VserverrescueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$image_id = 56; // int | 

try {
    $result = $apiInstance->vserverRescueShowGet($image_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserverrescueApi->vserverRescueShowGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image_id** | **int**|  |

### Return type

[**\Swagger\Client\Model\VserverRescueImage[]**](../Model/VserverRescueImage.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

