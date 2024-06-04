# Swagger\Client\VservernetworkInterfaceApi

All URIs are relative to *https://api.reselling.services/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**vserverNetworkInterfaceDisable**](VservernetworkInterfaceApi.md#vservernetworkinterfacedisable) | **DELETE** /vserver/network_interface/disable | vServer Netzwerk Interface deaktivieren
[**vserverNetworkInterfaceEnable**](VservernetworkInterfaceApi.md#vservernetworkinterfaceenable) | **POST** /vserver/network_interface/enable | vServer Netzwerk Interface aktivieren
[**vserverNetworkInterfaceIndex**](VservernetworkInterfaceApi.md#vservernetworkinterfaceindex) | **GET** /vserver/network_interface | vServer Netzwerk Interfaces abrufen
[**vserverNetworkInterfaceLimit**](VservernetworkInterfaceApi.md#vservernetworkinterfacelimit) | **POST** /vserver/network_interface/limit | vServer Netzwerk Interface limitieren
[**vserverNetworkInterfaceShow**](VservernetworkInterfaceApi.md#vservernetworkinterfaceshow) | **GET** /vserver/network_interface/show | Einzelnes vServer Netzwerk Interface abrufen

# **vserverNetworkInterfaceDisable**
> \Swagger\Client\Model\VserverNetworkInterface[] vserverNetworkInterfaceDisable($server_id, $name)

vServer Netzwerk Interface deaktivieren

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\VservernetworkInterfaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | Server-ID
$name = "name_example"; // string | Interface Name. Wenn leer, dann werden alle Interfaces deaktiviert.

try {
    $result = $apiInstance->vserverNetworkInterfaceDisable($server_id, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VservernetworkInterfaceApi->vserverNetworkInterfaceDisable: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_id** | **int**| Server-ID |
 **name** | **string**| Interface Name. Wenn leer, dann werden alle Interfaces deaktiviert. | [optional]

### Return type

[**\Swagger\Client\Model\VserverNetworkInterface[]**](../Model/VserverNetworkInterface.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vserverNetworkInterfaceEnable**
> \Swagger\Client\Model\VserverNetworkInterface[] vserverNetworkInterfaceEnable($server_id, $name)

vServer Netzwerk Interface aktivieren

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\VservernetworkInterfaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | Server-ID
$name = "name_example"; // string | Interface Name. Wenn leer, dann werden alle Interfaces aktiviert.

try {
    $result = $apiInstance->vserverNetworkInterfaceEnable($server_id, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VservernetworkInterfaceApi->vserverNetworkInterfaceEnable: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_id** | **int**| Server-ID |
 **name** | **string**| Interface Name. Wenn leer, dann werden alle Interfaces aktiviert. | [optional]

### Return type

[**\Swagger\Client\Model\VserverNetworkInterface[]**](../Model/VserverNetworkInterface.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vserverNetworkInterfaceIndex**
> \Swagger\Client\Model\VserverNetworkInterface[] vserverNetworkInterfaceIndex($server_id)

vServer Netzwerk Interfaces abrufen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\VservernetworkInterfaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | Server-ID

try {
    $result = $apiInstance->vserverNetworkInterfaceIndex($server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VservernetworkInterfaceApi->vserverNetworkInterfaceIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_id** | **int**| Server-ID |

### Return type

[**\Swagger\Client\Model\VserverNetworkInterface[]**](../Model/VserverNetworkInterface.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vserverNetworkInterfaceLimit**
> \Swagger\Client\Model\VserverNetworkInterface[] vserverNetworkInterfaceLimit($server_id, $limit, $name)

vServer Netzwerk Interface limitieren

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\VservernetworkInterfaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | Server-ID
$limit = 56; // int | Limit in Mbit/s
$name = "name_example"; // string | Interface Name. Wenn leer, dann werden alle Interfaces limitiert.

try {
    $result = $apiInstance->vserverNetworkInterfaceLimit($server_id, $limit, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VservernetworkInterfaceApi->vserverNetworkInterfaceLimit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_id** | **int**| Server-ID |
 **limit** | **int**| Limit in Mbit/s |
 **name** | **string**| Interface Name. Wenn leer, dann werden alle Interfaces limitiert. | [optional]

### Return type

[**\Swagger\Client\Model\VserverNetworkInterface[]**](../Model/VserverNetworkInterface.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vserverNetworkInterfaceShow**
> \Swagger\Client\Model\VserverNetworkInterface[] vserverNetworkInterfaceShow($server_id, $name)

Einzelnes vServer Netzwerk Interface abrufen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\VservernetworkInterfaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | Server-ID
$name = "name_example"; // string | Interface Name

try {
    $result = $apiInstance->vserverNetworkInterfaceShow($server_id, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VservernetworkInterfaceApi->vserverNetworkInterfaceShow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_id** | **int**| Server-ID |
 **name** | **string**| Interface Name |

### Return type

[**\Swagger\Client\Model\VserverNetworkInterface[]**](../Model/VserverNetworkInterface.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

