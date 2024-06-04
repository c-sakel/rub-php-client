# Swagger\Client\VserverApi

All URIs are relative to *https://api.reselling.services/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**vserverAddress**](VserverApi.md#vserveraddress) | **GET** /vserver/address | vServer IP-Adressen abrufen
[**vserverCreate**](VserverApi.md#vservercreate) | **POST** /vserver/create | Neuen vServer bestellen
[**vserverDdosAlert**](VserverApi.md#vserverddosalert) | **GET** /vserver/ddos_alert | DDoS Alerts zum vServer abrufen
[**vserverDelete**](VserverApi.md#vserverdelete) | **DELETE** /vserver/delete | vServer löschen
[**vserverGraph**](VserverApi.md#vservergraph) | **GET** /vserver/graph | vServer Graphdaten abrufen
[**vserverGraphImage**](VserverApi.md#vservergraphimage) | **GET** /vserver/graph_image | vServer Graphdaten als PNG abrufen
[**vserverIndex**](VserverApi.md#vserverindex) | **GET** /vserver | Alle vServer abrufen
[**vserverInstallation**](VserverApi.md#vserverinstallation) | **GET** /vserver/installation | vServer Installationen abrufen
[**vserverNetworkReset**](VserverApi.md#vservernetworkreset) | **POST** /vserver/network_reset | Netzwerk zurücksetzen
[**vserverOperation**](VserverApi.md#vserveroperation) | **GET** /vserver/operation | vServer Operationen abrufen
[**vserverOperations**](VserverApi.md#vserveroperations) | **GET** /vserver/operations | Operation-Templates abrufen
[**vserverPasswordReset**](VserverApi.md#vserverpasswordreset) | **POST** /vserver/password_reset | Passwort zurücksetzen
[**vserverReinstall**](VserverApi.md#vserverreinstall) | **POST** /vserver/reinstall | vServer neuinstallieren
[**vserverRestart**](VserverApi.md#vserverrestart) | **POST** /vserver/restart | vServer neustarten
[**vserverSettings**](VserverApi.md#vserversettings) | **POST** /vserver/settings | Einstellungen von vServer speichern
[**vserverShow**](VserverApi.md#vservershow) | **GET** /vserver/show | Einzelnen vServer abrufen
[**vserverShutdown**](VserverApi.md#vservershutdown) | **POST** /vserver/shutdown | vServer herunterfahren
[**vserverStart**](VserverApi.md#vserverstart) | **POST** /vserver/start | vServer starten
[**vserverStatus**](VserverApi.md#vserverstatus) | **GET** /vserver/status | vServer Status abrufen
[**vserverStop**](VserverApi.md#vserverstop) | **POST** /vserver/stop | vServer stoppen
[**vserverTemplates**](VserverApi.md#vservertemplates) | **GET** /vserver/templates | Installations-Templates abrufen
[**vserverTraffic**](VserverApi.md#vservertraffic) | **GET** /vserver/traffic | vServer Traffic abrufen
[**vserverUpgrade**](VserverApi.md#vserverupgrade) | **POST** /vserver/upgrade | vServer Konfiguration ändern
[**vserverVnc**](VserverApi.md#vservervnc) | **GET** /vserver/vnc | VNC Konsole abrufen

# **vserverAddress**
> \Swagger\Client\Model\Address[] vserverAddress($server_id)

vServer IP-Adressen abrufen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\VserverApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | Server-ID

try {
    $result = $apiInstance->vserverAddress($server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserverApi->vserverAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_id** | **int**| Server-ID |

### Return type

[**\Swagger\Client\Model\Address[]**](../Model/Address.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vserverCreate**
> \Swagger\Client\Model\Vserver[] vserverCreate($cores, $memory, $disk, $ip_addresses, $ip6_addresses, $backups, $template, $hostname, $password, $ssh_keys, $commands)

Neuen vServer bestellen

Diese Funktion führt eine kostenpflichtige Bestellung aus.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\VserverApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cores = 56; // int | Anzahl der Kerne
$memory = 56; // int | Arbeitsspeicher in MB
$disk = 56; // int | SSD Speicher in GB
$ip_addresses = 56; // int | Anzahl der IPv4-Adressen
$ip6_addresses = 56; // int | Anzahl der IPv6 Adressen
$backups = 56; // int | Anzahl der Backup-Slots
$template = 56; // int | Template-ID aus /vserver/templates
$hostname = "hostname_example"; // string | Hostname des Servers
$password = "password_example"; // string | Rootpasswort des Servers
$ssh_keys = array("ssh_keys_example"); // string[] | Public-Keys, welche auf dem Server eingerichtet werden sollen.
$commands = array("commands_example"); // string[] | Benutzerdefinierte Befehle, welche nach der Installation auf dem Server ausgeführt werden sollen.

try {
    $result = $apiInstance->vserverCreate($cores, $memory, $disk, $ip_addresses, $ip6_addresses, $backups, $template, $hostname, $password, $ssh_keys, $commands);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserverApi->vserverCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cores** | **int**| Anzahl der Kerne |
 **memory** | **int**| Arbeitsspeicher in MB |
 **disk** | **int**| SSD Speicher in GB |
 **ip_addresses** | **int**| Anzahl der IPv4-Adressen |
 **ip6_addresses** | **int**| Anzahl der IPv6 Adressen |
 **backups** | **int**| Anzahl der Backup-Slots |
 **template** | **int**| Template-ID aus /vserver/templates |
 **hostname** | **string**| Hostname des Servers | [optional]
 **password** | **string**| Rootpasswort des Servers | [optional]
 **ssh_keys** | [**string[]**](../Model/string.md)| Public-Keys, welche auf dem Server eingerichtet werden sollen. | [optional]
 **commands** | [**string[]**](../Model/string.md)| Benutzerdefinierte Befehle, welche nach der Installation auf dem Server ausgeführt werden sollen. | [optional]

### Return type

[**\Swagger\Client\Model\Vserver[]**](../Model/Vserver.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vserverDdosAlert**
> \Swagger\Client\Model\DdosAlert[] vserverDdosAlert($server_id)

DDoS Alerts zum vServer abrufen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\VserverApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | Server-ID

try {
    $result = $apiInstance->vserverDdosAlert($server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserverApi->vserverDdosAlert: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_id** | **int**| Server-ID |

### Return type

[**\Swagger\Client\Model\DdosAlert[]**](../Model/DdosAlert.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vserverDelete**
> \Swagger\Client\Model\Vserver[] vserverDelete($server_id)

vServer löschen

Diese Funktion löscht den Server inkl. Backups unwiderruflich.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\VserverApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | Server-ID

try {
    $result = $apiInstance->vserverDelete($server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserverApi->vserverDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_id** | **int**| Server-ID |

### Return type

[**\Swagger\Client\Model\Vserver[]**](../Model/Vserver.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vserverGraph**
> vserverGraph($server_id, $timeframe, $cf)

vServer Graphdaten abrufen

Diese Funktion gibt die RRD Statistik-Daten zurück.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\VserverApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | Server-ID
$timeframe = "timeframe_example"; // string | Zeitraum (hour, day, week, month, year)
$cf = "cf_example"; // string | Werte-Typ (AVERAGE, MAX)

try {
    $apiInstance->vserverGraph($server_id, $timeframe, $cf);
} catch (Exception $e) {
    echo 'Exception when calling VserverApi->vserverGraph: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_id** | **int**| Server-ID |
 **timeframe** | **string**| Zeitraum (hour, day, week, month, year) | [optional]
 **cf** | **string**| Werte-Typ (AVERAGE, MAX) | [optional]

### Return type

void (empty response body)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vserverGraphImage**
> vserverGraphImage($server_id, $timeframe, $cf, $ds)

vServer Graphdaten als PNG abrufen

Diese Funktion gibt die RRD Statistik-Daten als PNG zurück.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\VserverApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | Server-ID
$timeframe = "timeframe_example"; // string | Zeitraum (hour, day, week, month, year)
$cf = "cf_example"; // string | Werte-Typ (AVERAGE, MAX)
$ds = array("ds_example"); // string[] | Werte (maxcpu, cpu, maxmem, mem, maxdisk, disk, netin, netout, diskread, diskwrite)

try {
    $apiInstance->vserverGraphImage($server_id, $timeframe, $cf, $ds);
} catch (Exception $e) {
    echo 'Exception when calling VserverApi->vserverGraphImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_id** | **int**| Server-ID |
 **timeframe** | **string**| Zeitraum (hour, day, week, month, year) | [optional]
 **cf** | **string**| Werte-Typ (AVERAGE, MAX) | [optional]
 **ds** | [**string[]**](../Model/string.md)| Werte (maxcpu, cpu, maxmem, mem, maxdisk, disk, netin, netout, diskread, diskwrite) | [optional]

### Return type

void (empty response body)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vserverIndex**
> \Swagger\Client\Model\Vserver[] vserverIndex()

Alle vServer abrufen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\VserverApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->vserverIndex();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserverApi->vserverIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Vserver[]**](../Model/Vserver.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vserverInstallation**
> \Swagger\Client\Model\PxeAction[] vserverInstallation($server_id)

vServer Installationen abrufen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\VserverApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | Server-ID

try {
    $result = $apiInstance->vserverInstallation($server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserverApi->vserverInstallation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_id** | **int**| Server-ID |

### Return type

[**\Swagger\Client\Model\PxeAction[]**](../Model/PxeAction.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vserverNetworkReset**
> vserverNetworkReset($server_id)

Netzwerk zurücksetzen

Diese Funktion startet den Server automatisch neu.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\VserverApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | Server-ID

try {
    $apiInstance->vserverNetworkReset($server_id);
} catch (Exception $e) {
    echo 'Exception when calling VserverApi->vserverNetworkReset: ', $e->getMessage(), PHP_EOL;
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

# **vserverOperation**
> \Swagger\Client\Model\PxeAction[] vserverOperation($server_id)

vServer Operationen abrufen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\VserverApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | Server-ID

try {
    $result = $apiInstance->vserverOperation($server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserverApi->vserverOperation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_id** | **int**| Server-ID |

### Return type

[**\Swagger\Client\Model\PxeAction[]**](../Model/PxeAction.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vserverOperations**
> \Swagger\Client\Model\PxeTemplate[] vserverOperations($server_id)

Operation-Templates abrufen

Diese Funktion gibt verfügbare Templates zu PXE Operationen zurück.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\VserverApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | Server-ID

try {
    $result = $apiInstance->vserverOperations($server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserverApi->vserverOperations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_id** | **int**| Server-ID |

### Return type

[**\Swagger\Client\Model\PxeTemplate[]**](../Model/PxeTemplate.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vserverPasswordReset**
> vserverPasswordReset($server_id, $password)

Passwort zurücksetzen

Diese Funktion startet den Server automatisch neu.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\VserverApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | Server-ID
$password = "password_example"; // string | Neues Rootpasswort des Servers

try {
    $apiInstance->vserverPasswordReset($server_id, $password);
} catch (Exception $e) {
    echo 'Exception when calling VserverApi->vserverPasswordReset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_id** | **int**| Server-ID |
 **password** | **string**| Neues Rootpasswort des Servers | [optional]

### Return type

void (empty response body)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vserverReinstall**
> \Swagger\Client\Model\Vserver[] vserverReinstall($server_id, $template, $hostname, $password, $ssh_keys, $commands, $ip_addresses, $ip6_addresses)

vServer neuinstallieren

Alle Daten werden hierbei unwiderruflich gelöscht.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\VserverApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | Server-ID
$template = 56; // int | Template-ID aus /vserver/templates
$hostname = "hostname_example"; // string | Hostname des Servers
$password = "password_example"; // string | Rootpasswort des Servers
$ssh_keys = array("ssh_keys_example"); // string[] | Public-Keys, welche auf dem Server eingerichtet werden sollen.
$commands = array("commands_example"); // string[] | Benutzerdefinierte Befehle, welche nach der Installation auf dem Server ausgeführt werden sollen.
$ip_addresses = array("ip_addresses_example"); // string[] | Array von IPv4-Adressen, welche automatisch eingerichtet werden sollen. Standardmäßig werden sämtliche IPv4-Adressen eingerichtet.
$ip6_addresses = array("ip6_addresses_example"); // string[] | Array von IPv6-Adressen, welche automatisch eingerichtet werden sollen. Standardmäßig werden sämtliche IPv6-Adressen eingerichtet.

try {
    $result = $apiInstance->vserverReinstall($server_id, $template, $hostname, $password, $ssh_keys, $commands, $ip_addresses, $ip6_addresses);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserverApi->vserverReinstall: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_id** | **int**| Server-ID |
 **template** | **int**| Template-ID aus /vserver/templates |
 **hostname** | **string**| Hostname des Servers | [optional]
 **password** | **string**| Rootpasswort des Servers | [optional]
 **ssh_keys** | [**string[]**](../Model/string.md)| Public-Keys, welche auf dem Server eingerichtet werden sollen. | [optional]
 **commands** | [**string[]**](../Model/string.md)| Benutzerdefinierte Befehle, welche nach der Installation auf dem Server ausgeführt werden sollen. | [optional]
 **ip_addresses** | [**string[]**](../Model/string.md)| Array von IPv4-Adressen, welche automatisch eingerichtet werden sollen. Standardmäßig werden sämtliche IPv4-Adressen eingerichtet. | [optional]
 **ip6_addresses** | [**string[]**](../Model/string.md)| Array von IPv6-Adressen, welche automatisch eingerichtet werden sollen. Standardmäßig werden sämtliche IPv6-Adressen eingerichtet. | [optional]

### Return type

[**\Swagger\Client\Model\Vserver[]**](../Model/Vserver.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vserverRestart**
> \Swagger\Client\Model\Vserver[] vserverRestart($server_id)

vServer neustarten

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\VserverApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | Server-ID

try {
    $result = $apiInstance->vserverRestart($server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserverApi->vserverRestart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_id** | **int**| Server-ID |

### Return type

[**\Swagger\Client\Model\Vserver[]**](../Model/Vserver.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vserverSettings**
> \Swagger\Client\Model\Vserver[] vserverSettings($server_id, $title, $hostname)

Einstellungen von vServer speichern

Einstellungen von vServer speichern

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\VserverApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | Server-ID, wofür die Einstellungen speichert werden sollen
$title = "title_example"; // string | Titel des vServers
$hostname = "hostname_example"; // string | Hostname des vServers

try {
    $result = $apiInstance->vserverSettings($server_id, $title, $hostname);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserverApi->vserverSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_id** | **int**| Server-ID, wofür die Einstellungen speichert werden sollen |
 **title** | **string**| Titel des vServers | [optional]
 **hostname** | **string**| Hostname des vServers | [optional]

### Return type

[**\Swagger\Client\Model\Vserver[]**](../Model/Vserver.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vserverShow**
> \Swagger\Client\Model\Vserver[] vserverShow($server_id)

Einzelnen vServer abrufen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\VserverApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | Server-ID

try {
    $result = $apiInstance->vserverShow($server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserverApi->vserverShow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_id** | **int**| Server-ID |

### Return type

[**\Swagger\Client\Model\Vserver[]**](../Model/Vserver.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vserverShutdown**
> \Swagger\Client\Model\Vserver[] vserverShutdown($server_id)

vServer herunterfahren

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\VserverApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | Server-ID

try {
    $result = $apiInstance->vserverShutdown($server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserverApi->vserverShutdown: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_id** | **int**| Server-ID |

### Return type

[**\Swagger\Client\Model\Vserver[]**](../Model/Vserver.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vserverStart**
> \Swagger\Client\Model\Vserver[] vserverStart($server_id)

vServer starten

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\VserverApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | Server-ID

try {
    $result = $apiInstance->vserverStart($server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserverApi->vserverStart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_id** | **int**| Server-ID |

### Return type

[**\Swagger\Client\Model\Vserver[]**](../Model/Vserver.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vserverStatus**
> \Swagger\Client\Model\VserverStatus[] vserverStatus($server_id)

vServer Status abrufen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\VserverApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | Server-ID

try {
    $result = $apiInstance->vserverStatus($server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserverApi->vserverStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_id** | **int**| Server-ID |

### Return type

[**\Swagger\Client\Model\VserverStatus[]**](../Model/VserverStatus.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vserverStop**
> \Swagger\Client\Model\Vserver[] vserverStop($server_id)

vServer stoppen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\VserverApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | Server-ID

try {
    $result = $apiInstance->vserverStop($server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserverApi->vserverStop: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_id** | **int**| Server-ID |

### Return type

[**\Swagger\Client\Model\Vserver[]**](../Model/Vserver.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vserverTemplates**
> \Swagger\Client\Model\PxeTemplate[] vserverTemplates()

Installations-Templates abrufen

Diese Funktion gibt verfügbare Templates zur Installation zurück.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\VserverApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->vserverTemplates();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserverApi->vserverTemplates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\PxeTemplate[]**](../Model/PxeTemplate.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vserverTraffic**
> \Swagger\Client\Model\VserverTraffic[] vserverTraffic($server_id, $start_date, $end_date, $group_by)

vServer Traffic abrufen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\VserverApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | Server-ID
$start_date = new \DateTime("2013-10-20"); // \DateTime | Startdatum für Traffic Zeitraum
$end_date = new \DateTime("2013-10-20"); // \DateTime | Enddatum für Traffic Zeitraum
$group_by = "group_by_example"; // string | Gruppierung von Traffic Werten für den angefragten Zeitraum.  Mögliche Werte: MONTH => monatliche Gruppierung

try {
    $result = $apiInstance->vserverTraffic($server_id, $start_date, $end_date, $group_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserverApi->vserverTraffic: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_id** | **int**| Server-ID |
 **start_date** | **\DateTime**| Startdatum für Traffic Zeitraum |
 **end_date** | **\DateTime**| Enddatum für Traffic Zeitraum |
 **group_by** | **string**| Gruppierung von Traffic Werten für den angefragten Zeitraum.  Mögliche Werte: MONTH &#x3D;&gt; monatliche Gruppierung | [optional]

### Return type

[**\Swagger\Client\Model\VserverTraffic[]**](../Model/VserverTraffic.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vserverUpgrade**
> \Swagger\Client\Model\Vserver[] vserverUpgrade($server_id, $cores, $memory, $disk, $ip_addresses, $ip6_addresses, $backups)

vServer Konfiguration ändern

Diese Funktion startet den Server automatisch neu.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\VserverApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | Server-ID
$cores = 56; // int | Anzahl der Kerne
$memory = 56; // int | Arbeitsspeicher in MB
$disk = 56; // int | SSD Speicher in GB
$ip_addresses = 56; // int | Anzahl der IPv4-Adressen
$ip6_addresses = 56; // int | Anzahl der IPv6 Adressen
$backups = 56; // int | Anzahl der Backup-Slots

try {
    $result = $apiInstance->vserverUpgrade($server_id, $cores, $memory, $disk, $ip_addresses, $ip6_addresses, $backups);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserverApi->vserverUpgrade: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_id** | **int**| Server-ID |
 **cores** | **int**| Anzahl der Kerne |
 **memory** | **int**| Arbeitsspeicher in MB |
 **disk** | **int**| SSD Speicher in GB |
 **ip_addresses** | **int**| Anzahl der IPv4-Adressen |
 **ip6_addresses** | **int**| Anzahl der IPv6 Adressen |
 **backups** | **int**| Anzahl der Backup-Slots |

### Return type

[**\Swagger\Client\Model\Vserver[]**](../Model/Vserver.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vserverVnc**
> vserverVnc($server_id)

VNC Konsole abrufen

Diese Funktion gibt eine HTML5 noVNC Konsole zurück.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\VserverApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | Server-ID

try {
    $apiInstance->vserverVnc($server_id);
} catch (Exception $e) {
    echo 'Exception when calling VserverApi->vserverVnc: ', $e->getMessage(), PHP_EOL;
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

