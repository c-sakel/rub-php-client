# Swagger\Client\VserverscheduledTaskApi

All URIs are relative to *https://api.reselling.services/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**vserverScheduledTaskCreate**](VserverscheduledTaskApi.md#vserverscheduledtaskcreate) | **POST** /vserver/scheduled_task/create | Geplante Aufgabe anlegen
[**vserverScheduledTaskDelete**](VserverscheduledTaskApi.md#vserverscheduledtaskdelete) | **DELETE** /vserver/scheduled_task/delete | Geplante Aufgabe löschen
[**vserverScheduledTaskIndex**](VserverscheduledTaskApi.md#vserverscheduledtaskindex) | **GET** /vserver/scheduled_task | vServer geplante Aufgabe abrufen

# **vserverScheduledTaskCreate**
> \Swagger\Client\Model\ScheduledTask[] vserverScheduledTaskCreate($server_id, $methode, $interval, $next_execution_at)

Geplante Aufgabe anlegen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\VserverscheduledTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | Server-ID
$methode = "methode_example"; // string | Aktion, welche ausgeführt werden soll. Mögliche Werte: start, stop, shutdown, restart, dump
$interval = "interval_example"; // string | Zeitintervall, wie die Aufgabe ausgeführt werden soll. Mögliche Werte: hourly, daily, 2-days, 3-days, 5-days, weekly, 2-weeks, monthly, yearly
$next_execution_at = "next_execution_at_example"; // string | Datum der ersten Ausführung. Dieses Datum muss in der Zukunft liegen.

try {
    $result = $apiInstance->vserverScheduledTaskCreate($server_id, $methode, $interval, $next_execution_at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserverscheduledTaskApi->vserverScheduledTaskCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_id** | **int**| Server-ID |
 **methode** | **string**| Aktion, welche ausgeführt werden soll. Mögliche Werte: start, stop, shutdown, restart, dump |
 **interval** | **string**| Zeitintervall, wie die Aufgabe ausgeführt werden soll. Mögliche Werte: hourly, daily, 2-days, 3-days, 5-days, weekly, 2-weeks, monthly, yearly |
 **next_execution_at** | **string**| Datum der ersten Ausführung. Dieses Datum muss in der Zukunft liegen. |

### Return type

[**\Swagger\Client\Model\ScheduledTask[]**](../Model/ScheduledTask.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vserverScheduledTaskDelete**
> \Swagger\Client\Model\ScheduledTask[] vserverScheduledTaskDelete($server_id, $task_id)

Geplante Aufgabe löschen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\VserverscheduledTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | Server-ID
$task_id = 56; // int | Geplante Aufgaben ID

try {
    $result = $apiInstance->vserverScheduledTaskDelete($server_id, $task_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserverscheduledTaskApi->vserverScheduledTaskDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_id** | **int**| Server-ID |
 **task_id** | **int**| Geplante Aufgaben ID |

### Return type

[**\Swagger\Client\Model\ScheduledTask[]**](../Model/ScheduledTask.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vserverScheduledTaskIndex**
> \Swagger\Client\Model\ScheduledTask[] vserverScheduledTaskIndex($server_id)

vServer geplante Aufgabe abrufen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\VserverscheduledTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | Server-ID

try {
    $result = $apiInstance->vserverScheduledTaskIndex($server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserverscheduledTaskApi->vserverScheduledTaskIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_id** | **int**| Server-ID |

### Return type

[**\Swagger\Client\Model\ScheduledTask[]**](../Model/ScheduledTask.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

