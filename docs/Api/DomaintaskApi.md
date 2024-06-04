# csakel\RUBClient\DomaintaskApi

All URIs are relative to *https://api.reselling.services/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**domainTaskIndex**](DomaintaskApi.md#domaintaskindex) | **GET** /domain/task | Alle Domain Tasks abrufen
[**domainTaskShow**](DomaintaskApi.md#domaintaskshow) | **GET** /domain/task/show | Einzelnen Domain Tasks abrufen

# **domainTaskIndex**
> \csakel\RUBClient\Model\DomainTask[] domainTaskIndex()

Alle Domain Tasks abrufen

Alle Domain Tasks abrufen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = csakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new csakel\RUBClient\Api\DomaintaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->domainTaskIndex();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomaintaskApi->domainTaskIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\csakel\RUBClient\Model\DomainTask[]**](../Model/DomainTask.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **domainTaskShow**
> \csakel\RUBClient\Model\DomainTask[] domainTaskShow($task_id)

Einzelnen Domain Tasks abrufen

Einzelnen Domain Tasks abrufen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = csakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new csakel\RUBClient\Api\DomaintaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 56; // int | ID des Domain Tasks, welcher abgerufen werden soll.

try {
    $result = $apiInstance->domainTaskShow($task_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomaintaskApi->domainTaskShow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **int**| ID des Domain Tasks, welcher abgerufen werden soll. |

### Return type

[**\csakel\RUBClient\Model\DomainTask[]**](../Model/DomainTask.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

