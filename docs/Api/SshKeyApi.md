# c-sakel\RUBClient\SshKeyApi

All URIs are relative to *https://api.reselling.services/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**sshKeyCreate**](SshKeyApi.md#sshkeycreate) | **POST** /ssh_key/create | Neuen SSH Key anlegen
[**sshKeyDelete**](SshKeyApi.md#sshkeydelete) | **DELETE** /ssh_key/delete | SSH Key löschen
[**sshKeyIndex**](SshKeyApi.md#sshkeyindex) | **GET** /ssh_key | Alle SSH Keys abrufen
[**sshKeyShow**](SshKeyApi.md#sshkeyshow) | **GET** /ssh_key/show | Einzelnen SSH Key abrufen

# **sshKeyCreate**
> \c-sakel\RUBClient\Model\SshKey[] sshKeyCreate($name, $ssh_public_key)

Neuen SSH Key anlegen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = c-sakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new c-sakel\RUBClient\Api\SshKeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = "name_example"; // string | Name des SSH Keys
$ssh_public_key = "ssh_public_key_example"; // string | SSH Public Keys

try {
    $result = $apiInstance->sshKeyCreate($name, $ssh_public_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SshKeyApi->sshKeyCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name des SSH Keys |
 **ssh_public_key** | **string**| SSH Public Keys |

### Return type

[**\c-sakel\RUBClient\Model\SshKey[]**](../Model/SshKey.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sshKeyDelete**
> \c-sakel\RUBClient\Model\SshKey[] sshKeyDelete($ssh_key_id)

SSH Key löschen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = c-sakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new c-sakel\RUBClient\Api\SshKeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ssh_key_id = 56; // int | SSH-KEY-ID, welche gelöscht werden soll

try {
    $result = $apiInstance->sshKeyDelete($ssh_key_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SshKeyApi->sshKeyDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ssh_key_id** | **int**| SSH-KEY-ID, welche gelöscht werden soll |

### Return type

[**\c-sakel\RUBClient\Model\SshKey[]**](../Model/SshKey.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sshKeyIndex**
> \c-sakel\RUBClient\Model\SshKey[] sshKeyIndex()

Alle SSH Keys abrufen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = c-sakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new c-sakel\RUBClient\Api\SshKeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->sshKeyIndex();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SshKeyApi->sshKeyIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\c-sakel\RUBClient\Model\SshKey[]**](../Model/SshKey.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sshKeyShow**
> \c-sakel\RUBClient\Model\SshKey[] sshKeyShow($ssh_key_id)

Einzelnen SSH Key abrufen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = c-sakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new c-sakel\RUBClient\Api\SshKeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ssh_key_id = 56; // int | SSH-KEY-ID, welche abgerufen werden soll

try {
    $result = $apiInstance->sshKeyShow($ssh_key_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SshKeyApi->sshKeyShow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ssh_key_id** | **int**| SSH-KEY-ID, welche abgerufen werden soll |

### Return type

[**\c-sakel\RUBClient\Model\SshKey[]**](../Model/SshKey.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

