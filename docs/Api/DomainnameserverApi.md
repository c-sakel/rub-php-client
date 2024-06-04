# csakel\RUBClient\DomainnameserverApi

All URIs are relative to *https://api.reselling.services/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**domainNameserverCreate**](DomainnameserverApi.md#domainnameservercreate) | **POST** /domain/nameserver/create | Neuen Nameserver anlegen
[**domainNameserverDelete**](DomainnameserverApi.md#domainnameserverdelete) | **DELETE** /domain/nameserver/delete | Nameserver löschen
[**domainNameserverIndex**](DomainnameserverApi.md#domainnameserverindex) | **GET** /domain/nameserver | Alle Nameserver abrufen
[**domainNameserverRefresh**](DomainnameserverApi.md#domainnameserverrefresh) | **POST** /domain/nameserver/refresh | Nameserver IP-Adressen aktualisieren
[**domainNameserverShow**](DomainnameserverApi.md#domainnameservershow) | **GET** /domain/nameserver/show | Einzelnen Nameserver abrufen

# **domainNameserverCreate**
> \csakel\RUBClient\Model\DomainNameserver[] domainNameserverCreate($hostname)

Neuen Nameserver anlegen

Neuen Nameserver anlegen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = csakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new csakel\RUBClient\Api\DomainnameserverApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hostname = "hostname_example"; // string | Hostname des Nameservers, welcher angelegt werden soll.

try {
    $result = $apiInstance->domainNameserverCreate($hostname);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainnameserverApi->domainNameserverCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hostname** | **string**| Hostname des Nameservers, welcher angelegt werden soll. |

### Return type

[**\csakel\RUBClient\Model\DomainNameserver[]**](../Model/DomainNameserver.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **domainNameserverDelete**
> string domainNameserverDelete($hostname)

Nameserver löschen

Nameserver löschen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = csakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new csakel\RUBClient\Api\DomainnameserverApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hostname = "hostname_example"; // string | Hostname des Nameservers, welcher gelöscht werden soll.

try {
    $result = $apiInstance->domainNameserverDelete($hostname);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainnameserverApi->domainNameserverDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hostname** | **string**| Hostname des Nameservers, welcher gelöscht werden soll. |

### Return type

**string**

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **domainNameserverIndex**
> \csakel\RUBClient\Model\DomainNameserver[] domainNameserverIndex()

Alle Nameserver abrufen

Alle Nameserver abrufen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = csakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new csakel\RUBClient\Api\DomainnameserverApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->domainNameserverIndex();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainnameserverApi->domainNameserverIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\csakel\RUBClient\Model\DomainNameserver[]**](../Model/DomainNameserver.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **domainNameserverRefresh**
> \csakel\RUBClient\Model\DomainNameserver[] domainNameserverRefresh($hostname)

Nameserver IP-Adressen aktualisieren

Nameserver IP-Adressen aktualisieren

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = csakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new csakel\RUBClient\Api\DomainnameserverApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hostname = "hostname_example"; // string | Hostname des Nameservers, welcher aktualisiert werden soll.

try {
    $result = $apiInstance->domainNameserverRefresh($hostname);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainnameserverApi->domainNameserverRefresh: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hostname** | **string**| Hostname des Nameservers, welcher aktualisiert werden soll. |

### Return type

[**\csakel\RUBClient\Model\DomainNameserver[]**](../Model/DomainNameserver.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **domainNameserverShow**
> \csakel\RUBClient\Model\DomainNameserver[] domainNameserverShow($hostname)

Einzelnen Nameserver abrufen

Einzelnen Nameserver abrufen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = csakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new csakel\RUBClient\Api\DomainnameserverApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hostname = "hostname_example"; // string | Hostname des Nameservers, welcher abgerufen werden soll.

try {
    $result = $apiInstance->domainNameserverShow($hostname);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainnameserverApi->domainNameserverShow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hostname** | **string**| Hostname des Nameservers, welcher abgerufen werden soll. |

### Return type

[**\csakel\RUBClient\Model\DomainNameserver[]**](../Model/DomainNameserver.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

