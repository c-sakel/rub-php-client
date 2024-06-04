# csakel\RUBClient\VserverfirewallApi

All URIs are relative to *https://api.reselling.services/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**vserverFirewallAssignPost**](VserverfirewallApi.md#vserverfirewallassignpost) | **POST** /vserver/firewall/assign | 
[**vserverFirewallGet**](VserverfirewallApi.md#vserverfirewallget) | **GET** /vserver/firewall | 
[**vserverFirewallUnassignDelete**](VserverfirewallApi.md#vserverfirewallunassigndelete) | **DELETE** /vserver/firewall/unassign | 

# **vserverFirewallAssignPost**
> string vserverFirewallAssignPost($server_id, $firewall_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = csakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new csakel\RUBClient\Api\VserverfirewallApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | 
$firewall_id = 56; // int | 

try {
    $result = $apiInstance->vserverFirewallAssignPost($server_id, $firewall_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserverfirewallApi->vserverFirewallAssignPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_id** | **int**|  |
 **firewall_id** | **int**|  |

### Return type

**string**

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vserverFirewallGet**
> \csakel\RUBClient\Model\NetworkFirewall[] vserverFirewallGet($server_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = csakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new csakel\RUBClient\Api\VserverfirewallApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | 

try {
    $result = $apiInstance->vserverFirewallGet($server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserverfirewallApi->vserverFirewallGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_id** | **int**|  |

### Return type

[**\csakel\RUBClient\Model\NetworkFirewall[]**](../Model/NetworkFirewall.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vserverFirewallUnassignDelete**
> string vserverFirewallUnassignDelete($server_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = csakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new csakel\RUBClient\Api\VserverfirewallApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | 

try {
    $result = $apiInstance->vserverFirewallUnassignDelete($server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserverfirewallApi->vserverFirewallUnassignDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_id** | **int**|  |

### Return type

**string**

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

