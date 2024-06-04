# csakel\RUBClient\VserverupdateManagementApi

All URIs are relative to *https://api.reselling.services/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**vserverUpdateManagementInstall**](VserverupdateManagementApi.md#vserverupdatemanagementinstall) | **POST** /vserver/update_management/install | vServer Updates installieren
[**vserverUpdateManagementPending**](VserverupdateManagementApi.md#vserverupdatemanagementpending) | **GET** /vserver/update_management/pending | vServer Updates abrufen

# **vserverUpdateManagementInstall**
> string vserverUpdateManagementInstall($server_id)

vServer Updates installieren

Dieser Endpunkt führt einen asynchronen Task aus. Die Updates werden somit im Hintergrund installiert.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = csakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new csakel\RUBClient\Api\VserverupdateManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | Server-ID

try {
    $result = $apiInstance->vserverUpdateManagementInstall($server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserverupdateManagementApi->vserverUpdateManagementInstall: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_id** | **int**| Server-ID |

### Return type

**string**

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vserverUpdateManagementPending**
> string[] vserverUpdateManagementPending($server_id)

vServer Updates abrufen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = csakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new csakel\RUBClient\Api\VserverupdateManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | Server-ID

try {
    $result = $apiInstance->vserverUpdateManagementPending($server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserverupdateManagementApi->vserverUpdateManagementPending: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_id** | **int**| Server-ID |

### Return type

**string[]**

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

