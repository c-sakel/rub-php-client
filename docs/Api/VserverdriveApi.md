# c-sakel\RUBClient\VserverdriveApi

All URIs are relative to *https://api.reselling.services/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**vserverDriveCreatePost**](VserverdriveApi.md#vserverdrivecreatepost) | **POST** /vserver/drive/create | 
[**vserverDriveDeleteDelete**](VserverdriveApi.md#vserverdrivedeletedelete) | **DELETE** /vserver/drive/delete | 
[**vserverDriveGet**](VserverdriveApi.md#vserverdriveget) | **GET** /vserver/drive | 
[**vserverDriveIsoDownloadPost**](VserverdriveApi.md#vserverdriveisodownloadpost) | **POST** /vserver/drive/iso/download | 
[**vserverDriveIsoGet**](VserverdriveApi.md#vserverdriveisoget) | **GET** /vserver/drive/iso | 
[**vserverDriveIsoMountPost**](VserverdriveApi.md#vserverdriveisomountpost) | **POST** /vserver/drive/iso/mount | 
[**vserverDriveIsoQueryUrlGet**](VserverdriveApi.md#vserverdriveisoqueryurlget) | **GET** /vserver/drive/iso/query_url | 
[**vserverDriveIsoShowGet**](VserverdriveApi.md#vserverdriveisoshowget) | **GET** /vserver/drive/iso/show | 
[**vserverDriveIsoUnmountDelete**](VserverdriveApi.md#vserverdriveisounmountdelete) | **DELETE** /vserver/drive/iso/unmount | 
[**vserverDriveShowGet**](VserverdriveApi.md#vserverdriveshowget) | **GET** /vserver/drive/show | 

# **vserverDriveCreatePost**
> \c-sakel\RUBClient\Model\VserverDrive[] vserverDriveCreatePost($server_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = c-sakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new c-sakel\RUBClient\Api\VserverdriveApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | 

try {
    $result = $apiInstance->vserverDriveCreatePost($server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserverdriveApi->vserverDriveCreatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_id** | **int**|  |

### Return type

[**\c-sakel\RUBClient\Model\VserverDrive[]**](../Model/VserverDrive.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vserverDriveDeleteDelete**
> string vserverDriveDeleteDelete($server_id, $drive_name)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = c-sakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new c-sakel\RUBClient\Api\VserverdriveApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | 
$drive_name = "drive_name_example"; // string | 

try {
    $result = $apiInstance->vserverDriveDeleteDelete($server_id, $drive_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserverdriveApi->vserverDriveDeleteDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_id** | **int**|  |
 **drive_name** | **string**|  |

### Return type

**string**

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vserverDriveGet**
> \c-sakel\RUBClient\Model\VserverDrive[] vserverDriveGet($server_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = c-sakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new c-sakel\RUBClient\Api\VserverdriveApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | 

try {
    $result = $apiInstance->vserverDriveGet($server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserverdriveApi->vserverDriveGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_id** | **int**|  |

### Return type

[**\c-sakel\RUBClient\Model\VserverDrive[]**](../Model/VserverDrive.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vserverDriveIsoDownloadPost**
> \c-sakel\RUBClient\Model\VserverDriveIso[] vserverDriveIsoDownloadPost($title, $url)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = c-sakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new c-sakel\RUBClient\Api\VserverdriveApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$title = "title_example"; // string | 
$url = "url_example"; // string | 

try {
    $result = $apiInstance->vserverDriveIsoDownloadPost($title, $url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserverdriveApi->vserverDriveIsoDownloadPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **title** | **string**|  |
 **url** | **string**|  |

### Return type

[**\c-sakel\RUBClient\Model\VserverDriveIso[]**](../Model/VserverDriveIso.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vserverDriveIsoGet**
> \c-sakel\RUBClient\Model\VserverDriveIso[] vserverDriveIsoGet()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = c-sakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new c-sakel\RUBClient\Api\VserverdriveApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->vserverDriveIsoGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserverdriveApi->vserverDriveIsoGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\c-sakel\RUBClient\Model\VserverDriveIso[]**](../Model/VserverDriveIso.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vserverDriveIsoMountPost**
> \c-sakel\RUBClient\Model\VserverDrive[] vserverDriveIsoMountPost($server_id, $drive_name, $iso_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = c-sakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new c-sakel\RUBClient\Api\VserverdriveApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | 
$drive_name = "drive_name_example"; // string | 
$iso_id = 56; // int | 

try {
    $result = $apiInstance->vserverDriveIsoMountPost($server_id, $drive_name, $iso_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserverdriveApi->vserverDriveIsoMountPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_id** | **int**|  |
 **drive_name** | **string**|  |
 **iso_id** | **int**|  |

### Return type

[**\c-sakel\RUBClient\Model\VserverDrive[]**](../Model/VserverDrive.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vserverDriveIsoQueryUrlGet**
> \c-sakel\RUBClient\Model\QueryUrlMetadata[] vserverDriveIsoQueryUrlGet($url)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = c-sakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new c-sakel\RUBClient\Api\VserverdriveApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$url = "url_example"; // string | 

try {
    $result = $apiInstance->vserverDriveIsoQueryUrlGet($url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserverdriveApi->vserverDriveIsoQueryUrlGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **url** | **string**|  |

### Return type

[**\c-sakel\RUBClient\Model\QueryUrlMetadata[]**](../Model/QueryUrlMetadata.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vserverDriveIsoShowGet**
> \c-sakel\RUBClient\Model\VserverDriveIso[] vserverDriveIsoShowGet($iso_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = c-sakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new c-sakel\RUBClient\Api\VserverdriveApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$iso_id = 56; // int | 

try {
    $result = $apiInstance->vserverDriveIsoShowGet($iso_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserverdriveApi->vserverDriveIsoShowGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **iso_id** | **int**|  |

### Return type

[**\c-sakel\RUBClient\Model\VserverDriveIso[]**](../Model/VserverDriveIso.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vserverDriveIsoUnmountDelete**
> \c-sakel\RUBClient\Model\VserverDrive[] vserverDriveIsoUnmountDelete($server_id, $drive_name)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = c-sakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new c-sakel\RUBClient\Api\VserverdriveApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | 
$drive_name = "drive_name_example"; // string | 

try {
    $result = $apiInstance->vserverDriveIsoUnmountDelete($server_id, $drive_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserverdriveApi->vserverDriveIsoUnmountDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_id** | **int**|  |
 **drive_name** | **string**|  |

### Return type

[**\c-sakel\RUBClient\Model\VserverDrive[]**](../Model/VserverDrive.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vserverDriveShowGet**
> \c-sakel\RUBClient\Model\VserverDrive[] vserverDriveShowGet($server_id, $drive_name)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = c-sakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new c-sakel\RUBClient\Api\VserverdriveApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | 
$drive_name = "drive_name_example"; // string | 

try {
    $result = $apiInstance->vserverDriveShowGet($server_id, $drive_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserverdriveApi->vserverDriveShowGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_id** | **int**|  |
 **drive_name** | **string**|  |

### Return type

[**\c-sakel\RUBClient\Model\VserverDrive[]**](../Model/VserverDrive.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

