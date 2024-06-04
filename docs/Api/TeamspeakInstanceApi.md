# csakel\RUBClient\TeamspeakInstanceApi

All URIs are relative to *https://api.reselling.services/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**teamspeakInstanceDdosAlert**](TeamspeakInstanceApi.md#teamspeakinstanceddosalert) | **GET** /teamspeak_instance/ddos_alert | DDoS Alerts zur Teamspeak Instanz abrufen
[**teamspeakInstanceIndex**](TeamspeakInstanceApi.md#teamspeakinstanceindex) | **GET** /teamspeak_instance | Teamspeak Instanzen abrufen
[**teamspeakInstanceResetQueryPassword**](TeamspeakInstanceApi.md#teamspeakinstanceresetquerypassword) | **POST** /teamspeak_instance/reset_query_password | Query Passwort von Teamspeak Instanz zurücksetzen
[**teamspeakInstanceRestart**](TeamspeakInstanceApi.md#teamspeakinstancerestart) | **POST** /teamspeak_instance/restart | Teamspeak Instanzen neustarten
[**teamspeakInstanceSettings**](TeamspeakInstanceApi.md#teamspeakinstancesettings) | **POST** /teamspeak_instance/settings | Einstellungen von Teamspeak Instanz speichern
[**teamspeakInstanceShow**](TeamspeakInstanceApi.md#teamspeakinstanceshow) | **GET** /teamspeak_instance/show | Einzelne Teamspeak Instanz abrufen
[**teamspeakInstanceStart**](TeamspeakInstanceApi.md#teamspeakinstancestart) | **POST** /teamspeak_instance/start | Teamspeak Instanzen starten
[**teamspeakInstanceStop**](TeamspeakInstanceApi.md#teamspeakinstancestop) | **POST** /teamspeak_instance/stop | Teamspeak Instanzen stoppen
[**teamspeakInstanceWhitelistAdd**](TeamspeakInstanceApi.md#teamspeakinstancewhitelistadd) | **POST** /teamspeak_instance/whitelist/add | Teamspeak Instanz Whitelist Adresse hinzufügen
[**teamspeakInstanceWhitelistIndex**](TeamspeakInstanceApi.md#teamspeakinstancewhitelistindex) | **GET** /teamspeak_instance/whitelist | Teamspeak Instanz Whitelist Adressen abrufen
[**teamspeakInstanceWhitelistRemove**](TeamspeakInstanceApi.md#teamspeakinstancewhitelistremove) | **DELETE** /teamspeak_instance/whitelist/remove | Teamspeak Instanz Whitelist Adresse entfernen

# **teamspeakInstanceDdosAlert**
> \csakel\RUBClient\Model\DdosAlert[] teamspeakInstanceDdosAlert($instance)

DDoS Alerts zur Teamspeak Instanz abrufen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = csakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new csakel\RUBClient\Api\TeamspeakInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instance = 56; // int | Instanz-ID, wofür die DDoS Alerts abgerufen werden sollen

try {
    $result = $apiInstance->teamspeakInstanceDdosAlert($instance);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamspeakInstanceApi->teamspeakInstanceDdosAlert: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **instance** | **int**| Instanz-ID, wofür die DDoS Alerts abgerufen werden sollen |

### Return type

[**\csakel\RUBClient\Model\DdosAlert[]**](../Model/DdosAlert.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamspeakInstanceIndex**
> \csakel\RUBClient\Model\TeamspeakInstance[] teamspeakInstanceIndex()

Teamspeak Instanzen abrufen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = csakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new csakel\RUBClient\Api\TeamspeakInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->teamspeakInstanceIndex();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamspeakInstanceApi->teamspeakInstanceIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\csakel\RUBClient\Model\TeamspeakInstance[]**](../Model/TeamspeakInstance.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamspeakInstanceResetQueryPassword**
> \csakel\RUBClient\Model\TeamspeakInstance[] teamspeakInstanceResetQueryPassword($instance)

Query Passwort von Teamspeak Instanz zurücksetzen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = csakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new csakel\RUBClient\Api\TeamspeakInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instance = 56; // int | Instanz-ID, wofür das Query Passwort zurückgesetzt werden soll

try {
    $result = $apiInstance->teamspeakInstanceResetQueryPassword($instance);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamspeakInstanceApi->teamspeakInstanceResetQueryPassword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **instance** | **int**| Instanz-ID, wofür das Query Passwort zurückgesetzt werden soll |

### Return type

[**\csakel\RUBClient\Model\TeamspeakInstance[]**](../Model/TeamspeakInstance.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamspeakInstanceRestart**
> \csakel\RUBClient\Model\TeamspeakInstance[] teamspeakInstanceRestart($instance)

Teamspeak Instanzen neustarten

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = csakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new csakel\RUBClient\Api\TeamspeakInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instance = 56; // int | Instanz-ID, welche neugestartet werden soll

try {
    $result = $apiInstance->teamspeakInstanceRestart($instance);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamspeakInstanceApi->teamspeakInstanceRestart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **instance** | **int**| Instanz-ID, welche neugestartet werden soll |

### Return type

[**\csakel\RUBClient\Model\TeamspeakInstance[]**](../Model/TeamspeakInstance.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamspeakInstanceSettings**
> \csakel\RUBClient\Model\TeamspeakInstance[] teamspeakInstanceSettings($instance, $title)

Einstellungen von Teamspeak Instanz speichern

Einstellungen von Teamspeak Instanz speichern

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = csakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new csakel\RUBClient\Api\TeamspeakInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instance = 56; // int | Instanz-ID, wofür die Einstellungen speichert werden sollen
$title = "title_example"; // string | Titel der Teamspeak Instanz

try {
    $result = $apiInstance->teamspeakInstanceSettings($instance, $title);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamspeakInstanceApi->teamspeakInstanceSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **instance** | **int**| Instanz-ID, wofür die Einstellungen speichert werden sollen |
 **title** | **string**| Titel der Teamspeak Instanz | [optional]

### Return type

[**\csakel\RUBClient\Model\TeamspeakInstance[]**](../Model/TeamspeakInstance.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamspeakInstanceShow**
> \csakel\RUBClient\Model\TeamspeakInstance[] teamspeakInstanceShow($instance)

Einzelne Teamspeak Instanz abrufen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = csakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new csakel\RUBClient\Api\TeamspeakInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instance = 56; // int | Instanz-ID, welche abgerufen werden soll

try {
    $result = $apiInstance->teamspeakInstanceShow($instance);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamspeakInstanceApi->teamspeakInstanceShow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **instance** | **int**| Instanz-ID, welche abgerufen werden soll |

### Return type

[**\csakel\RUBClient\Model\TeamspeakInstance[]**](../Model/TeamspeakInstance.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamspeakInstanceStart**
> \csakel\RUBClient\Model\TeamspeakInstance[] teamspeakInstanceStart($instance)

Teamspeak Instanzen starten

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = csakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new csakel\RUBClient\Api\TeamspeakInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instance = 56; // int | Instanz-ID, welche gestartet werden soll

try {
    $result = $apiInstance->teamspeakInstanceStart($instance);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamspeakInstanceApi->teamspeakInstanceStart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **instance** | **int**| Instanz-ID, welche gestartet werden soll |

### Return type

[**\csakel\RUBClient\Model\TeamspeakInstance[]**](../Model/TeamspeakInstance.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamspeakInstanceStop**
> \csakel\RUBClient\Model\TeamspeakInstance[] teamspeakInstanceStop($instance)

Teamspeak Instanzen stoppen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = csakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new csakel\RUBClient\Api\TeamspeakInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instance = 56; // int | Instanz-ID, welche gestoppt werden soll

try {
    $result = $apiInstance->teamspeakInstanceStop($instance);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamspeakInstanceApi->teamspeakInstanceStop: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **instance** | **int**| Instanz-ID, welche gestoppt werden soll |

### Return type

[**\csakel\RUBClient\Model\TeamspeakInstance[]**](../Model/TeamspeakInstance.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamspeakInstanceWhitelistAdd**
> teamspeakInstanceWhitelistAdd($instance, $address)

Teamspeak Instanz Whitelist Adresse hinzufügen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = csakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new csakel\RUBClient\Api\TeamspeakInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instance = "instance_example"; // string | Teamspeak-Instanz
$address = "address_example"; // string | IP-Adresse, welche in die Whitelist hinzugefügt werden soll

try {
    $apiInstance->teamspeakInstanceWhitelistAdd($instance, $address);
} catch (Exception $e) {
    echo 'Exception when calling TeamspeakInstanceApi->teamspeakInstanceWhitelistAdd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **instance** | **string**| Teamspeak-Instanz |
 **address** | **string**| IP-Adresse, welche in die Whitelist hinzugefügt werden soll |

### Return type

void (empty response body)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamspeakInstanceWhitelistIndex**
> teamspeakInstanceWhitelistIndex($instance)

Teamspeak Instanz Whitelist Adressen abrufen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = csakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new csakel\RUBClient\Api\TeamspeakInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instance = "instance_example"; // string | Teamspeak-Instanz

try {
    $apiInstance->teamspeakInstanceWhitelistIndex($instance);
} catch (Exception $e) {
    echo 'Exception when calling TeamspeakInstanceApi->teamspeakInstanceWhitelistIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **instance** | **string**| Teamspeak-Instanz |

### Return type

void (empty response body)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamspeakInstanceWhitelistRemove**
> teamspeakInstanceWhitelistRemove($instance, $address)

Teamspeak Instanz Whitelist Adresse entfernen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = csakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new csakel\RUBClient\Api\TeamspeakInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instance = "instance_example"; // string | Teamspeak-Instanz
$address = "address_example"; // string | IP-Adresse, welche aus der Whitelist entfernt werden soll

try {
    $apiInstance->teamspeakInstanceWhitelistRemove($instance, $address);
} catch (Exception $e) {
    echo 'Exception when calling TeamspeakInstanceApi->teamspeakInstanceWhitelistRemove: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **instance** | **string**| Teamspeak-Instanz |
 **address** | **string**| IP-Adresse, welche aus der Whitelist entfernt werden soll |

### Return type

void (empty response body)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

