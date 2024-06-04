# c-sakel\RUBClient\DedicatedServerApi

All URIs are relative to *https://api.reselling.services/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**dedicatedServerIndex**](DedicatedServerApi.md#dedicatedserverindex) | **GET** /dedicated_server | Alle dedizierten Server abrufen
[**dedicatedServerKvmDownload**](DedicatedServerApi.md#dedicatedserverkvmdownload) | **GET** /dedicated_server/kvm/download | KVM Konsole herunterladen
[**dedicatedServerKvmReset**](DedicatedServerApi.md#dedicatedserverkvmreset) | **POST** /dedicated_server/kvm/reset | KVM Konsole zurücksetzen
[**dedicatedServerReinstall**](DedicatedServerApi.md#dedicatedserverreinstall) | **POST** /dedicated_server/reinstall | Dedizierten Server neuinstallieren
[**dedicatedServerReset**](DedicatedServerApi.md#dedicatedserverreset) | **POST** /dedicated_server/reset | Dedizierten Server neustarten
[**dedicatedServerShow**](DedicatedServerApi.md#dedicatedservershow) | **GET** /dedicated_server/show | Einzelnen dedizierten Server abrufen
[**dedicatedServerStart**](DedicatedServerApi.md#dedicatedserverstart) | **POST** /dedicated_server/start | Dedizierten Server starten
[**dedicatedServerStatus**](DedicatedServerApi.md#dedicatedserverstatus) | **GET** /dedicated_server/status | Status eines dedizierten Servers abrufen
[**dedicatedServerStop**](DedicatedServerApi.md#dedicatedserverstop) | **POST** /dedicated_server/stop | Dedizierten Server herunterfahren
[**dedicatedServerTemplates**](DedicatedServerApi.md#dedicatedservertemplates) | **GET** /dedicated_server/templates | Installations-Templates abrufen

# **dedicatedServerIndex**
> \c-sakel\RUBClient\Model\DedicatedServer[] dedicatedServerIndex()

Alle dedizierten Server abrufen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = c-sakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new c-sakel\RUBClient\Api\DedicatedServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->dedicatedServerIndex();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DedicatedServerApi->dedicatedServerIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\c-sakel\RUBClient\Model\DedicatedServer[]**](../Model/DedicatedServer.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dedicatedServerKvmDownload**
> string dedicatedServerKvmDownload($server_id)

KVM Konsole herunterladen

Lädt eine Java-KVM Konsole herunter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = c-sakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new c-sakel\RUBClient\Api\DedicatedServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | Server-ID

try {
    $result = $apiInstance->dedicatedServerKvmDownload($server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DedicatedServerApi->dedicatedServerKvmDownload: ', $e->getMessage(), PHP_EOL;
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

# **dedicatedServerKvmReset**
> dedicatedServerKvmReset($server_id)

KVM Konsole zurücksetzen

Wird benötigt, wenn ein Login über die KVM Konsole nicht möglich ist.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = c-sakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new c-sakel\RUBClient\Api\DedicatedServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | Server-ID

try {
    $apiInstance->dedicatedServerKvmReset($server_id);
} catch (Exception $e) {
    echo 'Exception when calling DedicatedServerApi->dedicatedServerKvmReset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_id** | **int**| Server-ID |

### Return type

void (empty response body)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dedicatedServerReinstall**
> \c-sakel\RUBClient\Model\Vserver[] dedicatedServerReinstall($server_id, $template, $password, $ssh_keys, $commands, $raid_level)

Dedizierten Server neuinstallieren

Alle Daten werden hierbei unwiderruflich gelöscht.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = c-sakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new c-sakel\RUBClient\Api\DedicatedServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | Server-ID
$template = 56; // int | Template-ID aus /dedicated_server/templates
$password = "password_example"; // string | Rootpasswort des Servers
$ssh_keys = array("ssh_keys_example"); // string[] | Public-Keys, welche auf dem Server eingerichtet werden sollen.
$commands = array("commands_example"); // string[] | Benutzerdefinierte Befehle, welche nach der Installation auf dem Server ausgeführt werden sollen.
$raid_level = 56; // int | Raid Level zur Einrichtung direkt bei der Installation. Mögliche Werte: 0, 1, 5, 6, 10

try {
    $result = $apiInstance->dedicatedServerReinstall($server_id, $template, $password, $ssh_keys, $commands, $raid_level);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DedicatedServerApi->dedicatedServerReinstall: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_id** | **int**| Server-ID |
 **template** | **int**| Template-ID aus /dedicated_server/templates |
 **password** | **string**| Rootpasswort des Servers | [optional]
 **ssh_keys** | [**string[]**](../Model/string.md)| Public-Keys, welche auf dem Server eingerichtet werden sollen. | [optional]
 **commands** | [**string[]**](../Model/string.md)| Benutzerdefinierte Befehle, welche nach der Installation auf dem Server ausgeführt werden sollen. | [optional]
 **raid_level** | **int**| Raid Level zur Einrichtung direkt bei der Installation. Mögliche Werte: 0, 1, 5, 6, 10 | [optional]

### Return type

[**\c-sakel\RUBClient\Model\Vserver[]**](../Model/Vserver.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dedicatedServerReset**
> \c-sakel\RUBClient\Model\DedicatedServer[] dedicatedServerReset($server_id)

Dedizierten Server neustarten

Bitte beachten Sie, dass dieser Befehl einen Hardreset durchführt und der Server sofort neustartet.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = c-sakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new c-sakel\RUBClient\Api\DedicatedServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | Server-ID, welche neugestartet werden soll

try {
    $result = $apiInstance->dedicatedServerReset($server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DedicatedServerApi->dedicatedServerReset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_id** | **int**| Server-ID, welche neugestartet werden soll |

### Return type

[**\c-sakel\RUBClient\Model\DedicatedServer[]**](../Model/DedicatedServer.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dedicatedServerShow**
> \c-sakel\RUBClient\Model\DedicatedServer[] dedicatedServerShow($server_id)

Einzelnen dedizierten Server abrufen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = c-sakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new c-sakel\RUBClient\Api\DedicatedServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | Server-ID, welche abgerufen werden soll

try {
    $result = $apiInstance->dedicatedServerShow($server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DedicatedServerApi->dedicatedServerShow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_id** | **int**| Server-ID, welche abgerufen werden soll |

### Return type

[**\c-sakel\RUBClient\Model\DedicatedServer[]**](../Model/DedicatedServer.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dedicatedServerStart**
> \c-sakel\RUBClient\Model\DedicatedServer[] dedicatedServerStart($server_id)

Dedizierten Server starten

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = c-sakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new c-sakel\RUBClient\Api\DedicatedServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | Server-ID, welche gestartet werden soll

try {
    $result = $apiInstance->dedicatedServerStart($server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DedicatedServerApi->dedicatedServerStart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_id** | **int**| Server-ID, welche gestartet werden soll |

### Return type

[**\c-sakel\RUBClient\Model\DedicatedServer[]**](../Model/DedicatedServer.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dedicatedServerStatus**
> \c-sakel\RUBClient\Model\DedicatedServer[] dedicatedServerStatus($server_id)

Status eines dedizierten Servers abrufen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = c-sakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new c-sakel\RUBClient\Api\DedicatedServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | Server-ID, welche abgerufen werden soll

try {
    $result = $apiInstance->dedicatedServerStatus($server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DedicatedServerApi->dedicatedServerStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_id** | **int**| Server-ID, welche abgerufen werden soll |

### Return type

[**\c-sakel\RUBClient\Model\DedicatedServer[]**](../Model/DedicatedServer.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dedicatedServerStop**
> \c-sakel\RUBClient\Model\DedicatedServer[] dedicatedServerStop($server_id)

Dedizierten Server herunterfahren

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = c-sakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new c-sakel\RUBClient\Api\DedicatedServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | Server-ID, welche heruntergefahren werden soll

try {
    $result = $apiInstance->dedicatedServerStop($server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DedicatedServerApi->dedicatedServerStop: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_id** | **int**| Server-ID, welche heruntergefahren werden soll |

### Return type

[**\c-sakel\RUBClient\Model\DedicatedServer[]**](../Model/DedicatedServer.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dedicatedServerTemplates**
> \c-sakel\RUBClient\Model\PxeTemplate[] dedicatedServerTemplates()

Installations-Templates abrufen

Diese Funktion gibt verfügbare Templates zur Installation zurück.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = c-sakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new c-sakel\RUBClient\Api\DedicatedServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->dedicatedServerTemplates();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DedicatedServerApi->dedicatedServerTemplates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\c-sakel\RUBClient\Model\PxeTemplate[]**](../Model/PxeTemplate.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

