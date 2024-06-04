# csakel\RUBClient\VserverpxeActionApi

All URIs are relative to *https://api.reselling.services/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**vserverPxeActionAbort**](VserverpxeActionApi.md#vserverpxeactionabort) | **DELETE** /vserver/pxe_action/abort | vServer PXE Aktion abbrechen
[**vserverPxeActionIndex**](VserverpxeActionApi.md#vserverpxeactionindex) | **GET** /vserver/pxe_action | Alle vServer PXE Aktionen abrufen

# **vserverPxeActionAbort**
> \csakel\RUBClient\Model\PxeAction[] vserverPxeActionAbort($server_id, $action_id)

vServer PXE Aktion abbrechen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = csakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new csakel\RUBClient\Api\VserverpxeActionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | Server-ID
$action_id = 56; // int | PXE Aktion ID

try {
    $result = $apiInstance->vserverPxeActionAbort($server_id, $action_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserverpxeActionApi->vserverPxeActionAbort: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_id** | **int**| Server-ID |
 **action_id** | **int**| PXE Aktion ID |

### Return type

[**\csakel\RUBClient\Model\PxeAction[]**](../Model/PxeAction.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vserverPxeActionIndex**
> \csakel\RUBClient\Model\PxeAction[] vserverPxeActionIndex($server_id)

Alle vServer PXE Aktionen abrufen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = csakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new csakel\RUBClient\Api\VserverpxeActionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | Server-ID

try {
    $result = $apiInstance->vserverPxeActionIndex($server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserverpxeActionApi->vserverPxeActionIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_id** | **int**| Server-ID |

### Return type

[**\csakel\RUBClient\Model\PxeAction[]**](../Model/PxeAction.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

