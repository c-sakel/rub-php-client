# c-sakel\RUBClient\DnszoneApi

All URIs are relative to *https://api.reselling.services/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**dnsZoneGet**](DnszoneApi.md#dnszoneget) | **GET** /dns/zone | 
[**dnsZoneRecordCreatePost**](DnszoneApi.md#dnszonerecordcreatepost) | **POST** /dns/zone/record/create | 
[**dnsZoneRecordDeleteDelete**](DnszoneApi.md#dnszonerecorddeletedelete) | **DELETE** /dns/zone/record/delete | 
[**dnsZoneRecordGet**](DnszoneApi.md#dnszonerecordget) | **GET** /dns/zone/record | 
[**dnsZoneRecordShowGet**](DnszoneApi.md#dnszonerecordshowget) | **GET** /dns/zone/record/show | 
[**dnsZoneRecordUpdatePost**](DnszoneApi.md#dnszonerecordupdatepost) | **POST** /dns/zone/record/update | 
[**dnsZoneShowGet**](DnszoneApi.md#dnszoneshowget) | **GET** /dns/zone/show | 

# **dnsZoneGet**
> \c-sakel\RUBClient\Model\DnsZone[] dnsZoneGet()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = c-sakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new c-sakel\RUBClient\Api\DnszoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->dnsZoneGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DnszoneApi->dnsZoneGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\c-sakel\RUBClient\Model\DnsZone[]**](../Model/DnsZone.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dnsZoneRecordCreatePost**
> \c-sakel\RUBClient\Model\DnsZoneRecord[] dnsZoneRecordCreatePost($zone_name, $type, $content, $name, $priority, $ttl)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = c-sakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new c-sakel\RUBClient\Api\DnszoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$zone_name = "zone_name_example"; // string | 
$type = "type_example"; // string | 
$content = "content_example"; // string | 
$name = "name_example"; // string | 
$priority = 56; // int | 
$ttl = 56; // int | 

try {
    $result = $apiInstance->dnsZoneRecordCreatePost($zone_name, $type, $content, $name, $priority, $ttl);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DnszoneApi->dnsZoneRecordCreatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **zone_name** | **string**|  |
 **type** | **string**|  |
 **content** | **string**|  |
 **name** | **string**|  | [optional]
 **priority** | **int**|  | [optional]
 **ttl** | **int**|  | [optional]

### Return type

[**\c-sakel\RUBClient\Model\DnsZoneRecord[]**](../Model/DnsZoneRecord.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dnsZoneRecordDeleteDelete**
> string dnsZoneRecordDeleteDelete($zone_name, $record_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = c-sakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new c-sakel\RUBClient\Api\DnszoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$zone_name = "zone_name_example"; // string | 
$record_id = "record_id_example"; // string | 

try {
    $result = $apiInstance->dnsZoneRecordDeleteDelete($zone_name, $record_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DnszoneApi->dnsZoneRecordDeleteDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **zone_name** | **string**|  |
 **record_id** | **string**|  |

### Return type

**string**

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dnsZoneRecordGet**
> \c-sakel\RUBClient\Model\DnsZoneRecord[] dnsZoneRecordGet($zone_name)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = c-sakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new c-sakel\RUBClient\Api\DnszoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$zone_name = "zone_name_example"; // string | 

try {
    $result = $apiInstance->dnsZoneRecordGet($zone_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DnszoneApi->dnsZoneRecordGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **zone_name** | **string**|  |

### Return type

[**\c-sakel\RUBClient\Model\DnsZoneRecord[]**](../Model/DnsZoneRecord.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dnsZoneRecordShowGet**
> \c-sakel\RUBClient\Model\DnsZoneRecord[] dnsZoneRecordShowGet($zone_name, $record_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = c-sakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new c-sakel\RUBClient\Api\DnszoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$zone_name = "zone_name_example"; // string | 
$record_id = "record_id_example"; // string | 

try {
    $result = $apiInstance->dnsZoneRecordShowGet($zone_name, $record_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DnszoneApi->dnsZoneRecordShowGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **zone_name** | **string**|  |
 **record_id** | **string**|  |

### Return type

[**\c-sakel\RUBClient\Model\DnsZoneRecord[]**](../Model/DnsZoneRecord.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dnsZoneRecordUpdatePost**
> \c-sakel\RUBClient\Model\DnsZoneRecord[] dnsZoneRecordUpdatePost($zone_name, $record_id, $type, $content, $name, $priority, $ttl)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = c-sakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new c-sakel\RUBClient\Api\DnszoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$zone_name = "zone_name_example"; // string | 
$record_id = "record_id_example"; // string | 
$type = "type_example"; // string | 
$content = "content_example"; // string | 
$name = "name_example"; // string | 
$priority = 56; // int | 
$ttl = 56; // int | 

try {
    $result = $apiInstance->dnsZoneRecordUpdatePost($zone_name, $record_id, $type, $content, $name, $priority, $ttl);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DnszoneApi->dnsZoneRecordUpdatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **zone_name** | **string**|  |
 **record_id** | **string**|  |
 **type** | **string**|  |
 **content** | **string**|  |
 **name** | **string**|  | [optional]
 **priority** | **int**|  | [optional]
 **ttl** | **int**|  | [optional]

### Return type

[**\c-sakel\RUBClient\Model\DnsZoneRecord[]**](../Model/DnsZoneRecord.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dnsZoneShowGet**
> \c-sakel\RUBClient\Model\DnsZone[] dnsZoneShowGet($zone_name)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = c-sakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new c-sakel\RUBClient\Api\DnszoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$zone_name = "zone_name_example"; // string | 

try {
    $result = $apiInstance->dnsZoneShowGet($zone_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DnszoneApi->dnsZoneShowGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **zone_name** | **string**|  |

### Return type

[**\c-sakel\RUBClient\Model\DnsZone[]**](../Model/DnsZone.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

