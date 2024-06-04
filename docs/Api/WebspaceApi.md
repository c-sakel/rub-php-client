# csakel\RUBClient\WebspaceApi

All URIs are relative to *https://api.reselling.services/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**webspaceCreate**](WebspaceApi.md#webspacecreate) | **POST** /webspace/create | Neuen Webspace bestellen
[**webspaceIndex**](WebspaceApi.md#webspaceindex) | **GET** /webspace | Webspaces abrufen
[**webspacePackages**](WebspaceApi.md#webspacepackages) | **GET** /webspace/packages | Verfügbare Pakete für Webspacebestellung abrufen
[**webspaceSettings**](WebspaceApi.md#webspacesettings) | **POST** /webspace/settings | Einstellungen für Webspace ändern
[**webspaceShow**](WebspaceApi.md#webspaceshow) | **GET** /webspace/show | Einzelnen Webspace abrufen
[**webspaceSso**](WebspaceApi.md#webspacesso) | **POST** /webspace/sso | SSO Url für Webspace abrufen
[**webspaceUsage**](WebspaceApi.md#webspaceusage) | **GET** /webspace/usage | Webspace Statistiken abrufen

# **webspaceCreate**
> \csakel\RUBClient\Model\Webspace[] webspaceCreate($package)

Neuen Webspace bestellen

Diese Funktion führt eine kostenpflichtige Bestellung aus.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = csakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new csakel\RUBClient\Api\WebspaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$package = 56; // int | Paket-ID aus /webspace/packages

try {
    $result = $apiInstance->webspaceCreate($package);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebspaceApi->webspaceCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **package** | **int**| Paket-ID aus /webspace/packages |

### Return type

[**\csakel\RUBClient\Model\Webspace[]**](../Model/Webspace.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webspaceIndex**
> \csakel\RUBClient\Model\Webspace[] webspaceIndex()

Webspaces abrufen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = csakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new csakel\RUBClient\Api\WebspaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->webspaceIndex();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebspaceApi->webspaceIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\csakel\RUBClient\Model\Webspace[]**](../Model/Webspace.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webspacePackages**
> \csakel\RUBClient\Model\WebspacePackage[] webspacePackages()

Verfügbare Pakete für Webspacebestellung abrufen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = csakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new csakel\RUBClient\Api\WebspaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->webspacePackages();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebspaceApi->webspacePackages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\csakel\RUBClient\Model\WebspacePackage[]**](../Model/WebspacePackage.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webspaceSettings**
> \csakel\RUBClient\Model\Webspace[] webspaceSettings($webspace_id, $description)

Einstellungen für Webspace ändern

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = csakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new csakel\RUBClient\Api\WebspaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webspace_id = 56; // int | Webspace-ID
$description = "description_example"; // string | Beschreibung für Webspace

try {
    $result = $apiInstance->webspaceSettings($webspace_id, $description);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebspaceApi->webspaceSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webspace_id** | **int**| Webspace-ID |
 **description** | **string**| Beschreibung für Webspace | [optional]

### Return type

[**\csakel\RUBClient\Model\Webspace[]**](../Model/Webspace.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webspaceShow**
> \csakel\RUBClient\Model\Webspace[] webspaceShow($webspace_id)

Einzelnen Webspace abrufen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = csakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new csakel\RUBClient\Api\WebspaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webspace_id = 56; // int | Webspace-ID

try {
    $result = $apiInstance->webspaceShow($webspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebspaceApi->webspaceShow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webspace_id** | **int**| Webspace-ID |

### Return type

[**\csakel\RUBClient\Model\Webspace[]**](../Model/Webspace.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webspaceSso**
> \csakel\RUBClient\Model\WebspaceSso[] webspaceSso($webspace_id, $client_ip)

SSO Url für Webspace abrufen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = csakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new csakel\RUBClient\Api\WebspaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webspace_id = 56; // int | Webspace-ID
$client_ip = "client_ip_example"; // string | Client IP-Adresse

try {
    $result = $apiInstance->webspaceSso($webspace_id, $client_ip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebspaceApi->webspaceSso: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webspace_id** | **int**| Webspace-ID |
 **client_ip** | **string**| Client IP-Adresse |

### Return type

[**\csakel\RUBClient\Model\WebspaceSso[]**](../Model/WebspaceSso.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webspaceUsage**
> \csakel\RUBClient\Model\WebspaceUsage[] webspaceUsage($webspace_id)

Webspace Statistiken abrufen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = csakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new csakel\RUBClient\Api\WebspaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webspace_id = 56; // int | Webspace-ID

try {
    $result = $apiInstance->webspaceUsage($webspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebspaceApi->webspaceUsage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webspace_id** | **int**| Webspace-ID |

### Return type

[**\csakel\RUBClient\Model\WebspaceUsage[]**](../Model/WebspaceUsage.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

