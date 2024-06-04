# Swagger\Client\VservertaskApi

All URIs are relative to *https://api.reselling.services/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**vserverTaskAbort**](VservertaskApi.md#vservertaskabort) | **DELETE** /vserver/task/abort | Laufenden vServer Tasks abbrechen
[**vserverTaskIndex**](VservertaskApi.md#vservertaskindex) | **GET** /vserver/task | vServer Tasks abrufen
[**vserverTaskRunning**](VservertaskApi.md#vservertaskrunning) | **GET** /vserver/task/running | Laufende vServer Tasks abrufen

# **vserverTaskAbort**
> \Swagger\Client\Model\VserverTask[] vserverTaskAbort($server_id, $task_id)

Laufenden vServer Tasks abbrechen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\VservertaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | Server-ID
$task_id = 56; // int | Task-ID

try {
    $result = $apiInstance->vserverTaskAbort($server_id, $task_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VservertaskApi->vserverTaskAbort: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_id** | **int**| Server-ID |
 **task_id** | **int**| Task-ID |

### Return type

[**\Swagger\Client\Model\VserverTask[]**](../Model/VserverTask.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vserverTaskIndex**
> \Swagger\Client\Model\VserverTask[] vserverTaskIndex($server_id)

vServer Tasks abrufen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\VservertaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | Server-ID

try {
    $result = $apiInstance->vserverTaskIndex($server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VservertaskApi->vserverTaskIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_id** | **int**| Server-ID |

### Return type

[**\Swagger\Client\Model\VserverTask[]**](../Model/VserverTask.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vserverTaskRunning**
> \Swagger\Client\Model\VserverTask[] vserverTaskRunning($server_id)

Laufende vServer Tasks abrufen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\VservertaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | Server-ID

try {
    $result = $apiInstance->vserverTaskRunning($server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VservertaskApi->vserverTaskRunning: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_id** | **int**| Server-ID |

### Return type

[**\Swagger\Client\Model\VserverTask[]**](../Model/VserverTask.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

