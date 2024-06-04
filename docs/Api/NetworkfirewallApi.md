# c-sakel\RUBClient\NetworkfirewallApi

All URIs are relative to *https://api.reselling.services/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**networkFirewallAssignPost**](NetworkfirewallApi.md#networkfirewallassignpost) | **POST** /network/firewall/assign | 
[**networkFirewallCopyPost**](NetworkfirewallApi.md#networkfirewallcopypost) | **POST** /network/firewall/copy | 
[**networkFirewallCreatePost**](NetworkfirewallApi.md#networkfirewallcreatepost) | **POST** /network/firewall/create | 
[**networkFirewallDeleteDelete**](NetworkfirewallApi.md#networkfirewalldeletedelete) | **DELETE** /network/firewall/delete | 
[**networkFirewallGet**](NetworkfirewallApi.md#networkfirewallget) | **GET** /network/firewall | 
[**networkFirewallRolloutPost**](NetworkfirewallApi.md#networkfirewallrolloutpost) | **POST** /network/firewall/rollout | 
[**networkFirewallRuleCreatePost**](NetworkfirewallApi.md#networkfirewallrulecreatepost) | **POST** /network/firewall/rule/create | 
[**networkFirewallRuleDeleteDelete**](NetworkfirewallApi.md#networkfirewallruledeletedelete) | **DELETE** /network/firewall/rule/delete | 
[**networkFirewallRuleUpdatePost**](NetworkfirewallApi.md#networkfirewallruleupdatepost) | **POST** /network/firewall/rule/update | 
[**networkFirewallShowGet**](NetworkfirewallApi.md#networkfirewallshowget) | **GET** /network/firewall/show | 
[**networkFirewallUnassignDelete**](NetworkfirewallApi.md#networkfirewallunassigndelete) | **DELETE** /network/firewall/unassign | 
[**networkFirewallUpdatePost**](NetworkfirewallApi.md#networkfirewallupdatepost) | **POST** /network/firewall/update | 

# **networkFirewallAssignPost**
> \c-sakel\RUBClient\Model\NetworkFirewall[] networkFirewallAssignPost($firewall_id, $vserver_id, $override)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = c-sakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new c-sakel\RUBClient\Api\NetworkfirewallApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$firewall_id = 56; // int | 
$vserver_id = "vserver_id_example"; // string | 
$override = true; // bool | 

try {
    $result = $apiInstance->networkFirewallAssignPost($firewall_id, $vserver_id, $override);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkfirewallApi->networkFirewallAssignPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **firewall_id** | **int**|  |
 **vserver_id** | **string**|  | [optional]
 **override** | **bool**|  | [optional]

### Return type

[**\c-sakel\RUBClient\Model\NetworkFirewall[]**](../Model/NetworkFirewall.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **networkFirewallCopyPost**
> \c-sakel\RUBClient\Model\NetworkFirewall[] networkFirewallCopyPost($firewall_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = c-sakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new c-sakel\RUBClient\Api\NetworkfirewallApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$firewall_id = 56; // int | 

try {
    $result = $apiInstance->networkFirewallCopyPost($firewall_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkfirewallApi->networkFirewallCopyPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **firewall_id** | **int**|  |

### Return type

[**\c-sakel\RUBClient\Model\NetworkFirewall[]**](../Model/NetworkFirewall.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **networkFirewallCreatePost**
> \c-sakel\RUBClient\Model\NetworkFirewall[] networkFirewallCreatePost($title, $policy_in, $policy_out)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = c-sakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new c-sakel\RUBClient\Api\NetworkfirewallApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$title = "title_example"; // string | 
$policy_in = "policy_in_example"; // string | Der Standardwert für eingehende Pakete
$policy_out = "policy_out_example"; // string | Der Standardwert für ausgehende Pakete

try {
    $result = $apiInstance->networkFirewallCreatePost($title, $policy_in, $policy_out);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkfirewallApi->networkFirewallCreatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **title** | **string**|  |
 **policy_in** | **string**| Der Standardwert für eingehende Pakete | [optional]
 **policy_out** | **string**| Der Standardwert für ausgehende Pakete | [optional]

### Return type

[**\c-sakel\RUBClient\Model\NetworkFirewall[]**](../Model/NetworkFirewall.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **networkFirewallDeleteDelete**
> string networkFirewallDeleteDelete($firewall_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = c-sakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new c-sakel\RUBClient\Api\NetworkfirewallApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$firewall_id = 56; // int | 

try {
    $result = $apiInstance->networkFirewallDeleteDelete($firewall_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkfirewallApi->networkFirewallDeleteDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **firewall_id** | **int**|  |

### Return type

**string**

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **networkFirewallGet**
> \c-sakel\RUBClient\Model\NetworkFirewall[] networkFirewallGet()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = c-sakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new c-sakel\RUBClient\Api\NetworkfirewallApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->networkFirewallGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkfirewallApi->networkFirewallGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\c-sakel\RUBClient\Model\NetworkFirewall[]**](../Model/NetworkFirewall.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **networkFirewallRolloutPost**
> string networkFirewallRolloutPost($firewall_id, $vserver_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = c-sakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new c-sakel\RUBClient\Api\NetworkfirewallApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$firewall_id = 56; // int | 
$vserver_id = 56; // int | 

try {
    $result = $apiInstance->networkFirewallRolloutPost($firewall_id, $vserver_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkfirewallApi->networkFirewallRolloutPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **firewall_id** | **int**|  |
 **vserver_id** | **int**|  | [optional]

### Return type

**string**

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **networkFirewallRuleCreatePost**
> \c-sakel\RUBClient\Model\NetworkFirewallRule[] networkFirewallRuleCreatePost($firewall_id, $direction, $active, $description, $protocol, $port, $source_addresses, $destination_addresses)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = c-sakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new c-sakel\RUBClient\Api\NetworkfirewallApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$firewall_id = 56; // int | 
$direction = "direction_example"; // string | 
$active = true; // bool | 
$description = "description_example"; // string | 
$protocol = "protocol_example"; // string | 
$port = "port_example"; // string | Port oder Port-Range für diese Regel. Eine Port-Range kann mit einem Bindestrich oder mit einem Doppelpunkt gekennzeichnet werden. Beispiele: 80, 80-100, 80:100.
$source_addresses = array("source_addresses_example"); // string[] | Hiermit können Quell-IP-Adressen bei eingehenden Regeln angegeben werden.
$destination_addresses = array("destination_addresses_example"); // string[] | Hiermit können Ziel-IP-Adressen bei ausgehenden Regeln angegeben werden.

try {
    $result = $apiInstance->networkFirewallRuleCreatePost($firewall_id, $direction, $active, $description, $protocol, $port, $source_addresses, $destination_addresses);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkfirewallApi->networkFirewallRuleCreatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **firewall_id** | **int**|  |
 **direction** | **string**|  |
 **active** | **bool**|  | [optional]
 **description** | **string**|  | [optional]
 **protocol** | **string**|  | [optional]
 **port** | **string**| Port oder Port-Range für diese Regel. Eine Port-Range kann mit einem Bindestrich oder mit einem Doppelpunkt gekennzeichnet werden. Beispiele: 80, 80-100, 80:100. | [optional]
 **source_addresses** | [**string[]**](../Model/string.md)| Hiermit können Quell-IP-Adressen bei eingehenden Regeln angegeben werden. | [optional]
 **destination_addresses** | [**string[]**](../Model/string.md)| Hiermit können Ziel-IP-Adressen bei ausgehenden Regeln angegeben werden. | [optional]

### Return type

[**\c-sakel\RUBClient\Model\NetworkFirewallRule[]**](../Model/NetworkFirewallRule.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **networkFirewallRuleDeleteDelete**
> string networkFirewallRuleDeleteDelete($firewall_id, $rule_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = c-sakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new c-sakel\RUBClient\Api\NetworkfirewallApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$firewall_id = 56; // int | 
$rule_id = 56; // int | 

try {
    $result = $apiInstance->networkFirewallRuleDeleteDelete($firewall_id, $rule_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkfirewallApi->networkFirewallRuleDeleteDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **firewall_id** | **int**|  |
 **rule_id** | **int**|  |

### Return type

**string**

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **networkFirewallRuleUpdatePost**
> \c-sakel\RUBClient\Model\NetworkFirewallRule[] networkFirewallRuleUpdatePost($firewall_id, $rule_id, $active, $description, $protocol, $port, $source_addresses, $destination_addresses)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = c-sakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new c-sakel\RUBClient\Api\NetworkfirewallApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$firewall_id = 56; // int | 
$rule_id = 56; // int | 
$active = true; // bool | 
$description = "description_example"; // string | 
$protocol = "protocol_example"; // string | 
$port = "port_example"; // string | Port oder Port-Range für diese Regel. Eine Port-Range kann mit einem Bindestrich oder mit einem Doppelpunkt gekennzeichnet werden. Beispiele: 80, 80-100, 80:100.
$source_addresses = array("source_addresses_example"); // string[] | Hiermit können Quell-IP-Adressen bei eingehenden Regeln angegeben werden.
$destination_addresses = array("destination_addresses_example"); // string[] | Hiermit können Ziel-IP-Adressen bei ausgehenden Regeln angegeben werden.

try {
    $result = $apiInstance->networkFirewallRuleUpdatePost($firewall_id, $rule_id, $active, $description, $protocol, $port, $source_addresses, $destination_addresses);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkfirewallApi->networkFirewallRuleUpdatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **firewall_id** | **int**|  |
 **rule_id** | **int**|  |
 **active** | **bool**|  | [optional]
 **description** | **string**|  | [optional]
 **protocol** | **string**|  | [optional]
 **port** | **string**| Port oder Port-Range für diese Regel. Eine Port-Range kann mit einem Bindestrich oder mit einem Doppelpunkt gekennzeichnet werden. Beispiele: 80, 80-100, 80:100. | [optional]
 **source_addresses** | [**string[]**](../Model/string.md)| Hiermit können Quell-IP-Adressen bei eingehenden Regeln angegeben werden. | [optional]
 **destination_addresses** | [**string[]**](../Model/string.md)| Hiermit können Ziel-IP-Adressen bei ausgehenden Regeln angegeben werden. | [optional]

### Return type

[**\c-sakel\RUBClient\Model\NetworkFirewallRule[]**](../Model/NetworkFirewallRule.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **networkFirewallShowGet**
> \c-sakel\RUBClient\Model\NetworkFirewall[] networkFirewallShowGet($firewall_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = c-sakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new c-sakel\RUBClient\Api\NetworkfirewallApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$firewall_id = 56; // int | 

try {
    $result = $apiInstance->networkFirewallShowGet($firewall_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkfirewallApi->networkFirewallShowGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **firewall_id** | **int**|  |

### Return type

[**\c-sakel\RUBClient\Model\NetworkFirewall[]**](../Model/NetworkFirewall.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **networkFirewallUnassignDelete**
> \c-sakel\RUBClient\Model\NetworkFirewall[] networkFirewallUnassignDelete($firewall_id, $vserver_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = c-sakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new c-sakel\RUBClient\Api\NetworkfirewallApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$firewall_id = 56; // int | 
$vserver_id = "vserver_id_example"; // string | 

try {
    $result = $apiInstance->networkFirewallUnassignDelete($firewall_id, $vserver_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkfirewallApi->networkFirewallUnassignDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **firewall_id** | **int**|  |
 **vserver_id** | **string**|  | [optional]

### Return type

[**\c-sakel\RUBClient\Model\NetworkFirewall[]**](../Model/NetworkFirewall.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **networkFirewallUpdatePost**
> \c-sakel\RUBClient\Model\NetworkFirewall[] networkFirewallUpdatePost($firewall_id, $title, $policy_in, $policy_out)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = c-sakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new c-sakel\RUBClient\Api\NetworkfirewallApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$firewall_id = 56; // int | 
$title = "title_example"; // string | 
$policy_in = "policy_in_example"; // string | Der Standardwert für eingehende Pakete
$policy_out = "policy_out_example"; // string | Der Standardwert für ausgehende Pakete

try {
    $result = $apiInstance->networkFirewallUpdatePost($firewall_id, $title, $policy_in, $policy_out);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkfirewallApi->networkFirewallUpdatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **firewall_id** | **int**|  |
 **title** | **string**|  |
 **policy_in** | **string**| Der Standardwert für eingehende Pakete | [optional]
 **policy_out** | **string**| Der Standardwert für ausgehende Pakete | [optional]

### Return type

[**\c-sakel\RUBClient\Model\NetworkFirewall[]**](../Model/NetworkFirewall.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

