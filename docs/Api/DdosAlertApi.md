# c-sakel\RUBClient\DdosAlertApi

All URIs are relative to *https://api.reselling.services/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**ddosAlertIndex**](DdosAlertApi.md#ddosalertindex) | **GET** /ddos_alert | Alle DDoS Alerts abrufen
[**ddosAlertShow**](DdosAlertApi.md#ddosalertshow) | **GET** /ddos_alert/show | Einzelnen DDoS Alert abrufen

# **ddosAlertIndex**
> \c-sakel\RUBClient\Model\DdosAlert[] ddosAlertIndex()

Alle DDoS Alerts abrufen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = c-sakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new c-sakel\RUBClient\Api\DdosAlertApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->ddosAlertIndex();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DdosAlertApi->ddosAlertIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\c-sakel\RUBClient\Model\DdosAlert[]**](../Model/DdosAlert.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ddosAlertShow**
> \c-sakel\RUBClient\Model\DdosAlert[] ddosAlertShow($alert_id)

Einzelnen DDoS Alert abrufen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = c-sakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new c-sakel\RUBClient\Api\DdosAlertApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$alert_id = 56; // int | Alert-ID, welche abgerufen werden soll

try {
    $result = $apiInstance->ddosAlertShow($alert_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DdosAlertApi->ddosAlertShow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alert_id** | **int**| Alert-ID, welche abgerufen werden soll |

### Return type

[**\c-sakel\RUBClient\Model\DdosAlert[]**](../Model/DdosAlert.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

