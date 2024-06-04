# Swagger\Client\PxeApi

All URIs are relative to *https://api.reselling.services/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**pxeInstallationCreate**](PxeApi.md#pxeinstallationcreate) | **POST** /pxe/installation/create | Installation anlegen und starten
[**pxeInstallationIndex**](PxeApi.md#pxeinstallationindex) | **GET** /pxe/installation | Alle PXE Installationen abrufen
[**pxeInstallationShow**](PxeApi.md#pxeinstallationshow) | **GET** /pxe/installation/show | Eine einzelne PXE Installation abrufen
[**pxeInstallationTemplates**](PxeApi.md#pxeinstallationtemplates) | **GET** /pxe/installation/templates | Installations-Templates abrufen

# **pxeInstallationCreate**
> \Swagger\Client\Model\PxeAction[] pxeInstallationCreate($mac_address, $template, $hostname, $password, $ssh_keys, $commands, $ip_addresses, $ip6_addresses)

Installation anlegen und starten

Diese Funktion legt eine PXE Installation an und startet die Aktion. Bitte starten Sie nun den Server separat neu.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\PxeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mac_address = "mac_address_example"; // string | MAC Adresse des Servers
$template = 56; // int | Template-ID aus /pxe/installation/templates
$hostname = "hostname_example"; // string | Hostname des Servers
$password = "password_example"; // string | Rootpasswort des Servers
$ssh_keys = array("ssh_keys_example"); // string[] | Public-Keys, welche auf dem Server eingerichtet werden sollen.
$commands = array("commands_example"); // string[] | Benutzerdefinierte Befehle, welche nach der Installation auf dem Server ausgeführt werden sollen.
$ip_addresses = array("ip_addresses_example"); // string[] | Array von IPv4-Adressen, welche automatisch eingerichtet werden sollen. Es muss mindestens 1 IPv4 oder 1 IPv6-Adresse angegeben werden.
$ip6_addresses = array("ip6_addresses_example"); // string[] | Array von IPv6-Adressen bzw. IPv6-Netzen, welche automatisch eingerichtet werden sollen.  Es muss mindestens 1 IPv4 oder 1 IPv6-Adresse angegeben werden.

try {
    $result = $apiInstance->pxeInstallationCreate($mac_address, $template, $hostname, $password, $ssh_keys, $commands, $ip_addresses, $ip6_addresses);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PxeApi->pxeInstallationCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mac_address** | **string**| MAC Adresse des Servers |
 **template** | **int**| Template-ID aus /pxe/installation/templates |
 **hostname** | **string**| Hostname des Servers |
 **password** | **string**| Rootpasswort des Servers |
 **ssh_keys** | [**string[]**](../Model/string.md)| Public-Keys, welche auf dem Server eingerichtet werden sollen. | [optional]
 **commands** | [**string[]**](../Model/string.md)| Benutzerdefinierte Befehle, welche nach der Installation auf dem Server ausgeführt werden sollen. | [optional]
 **ip_addresses** | [**string[]**](../Model/string.md)| Array von IPv4-Adressen, welche automatisch eingerichtet werden sollen. Es muss mindestens 1 IPv4 oder 1 IPv6-Adresse angegeben werden. | [optional]
 **ip6_addresses** | [**string[]**](../Model/string.md)| Array von IPv6-Adressen bzw. IPv6-Netzen, welche automatisch eingerichtet werden sollen.  Es muss mindestens 1 IPv4 oder 1 IPv6-Adresse angegeben werden. | [optional]

### Return type

[**\Swagger\Client\Model\PxeAction[]**](../Model/PxeAction.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pxeInstallationIndex**
> \Swagger\Client\Model\PxeAction[] pxeInstallationIndex()

Alle PXE Installationen abrufen

Diese Funktion gibt alle PXE Installationen zurück.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\PxeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->pxeInstallationIndex();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PxeApi->pxeInstallationIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\PxeAction[]**](../Model/PxeAction.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pxeInstallationShow**
> \Swagger\Client\Model\PxeAction[] pxeInstallationShow($installation)

Eine einzelne PXE Installation abrufen

Diese Funktion gibt eine einzelne PXE Installation zurück.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\PxeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$installation = 56; // int | Installation-ID

try {
    $result = $apiInstance->pxeInstallationShow($installation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PxeApi->pxeInstallationShow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **installation** | **int**| Installation-ID |

### Return type

[**\Swagger\Client\Model\PxeAction[]**](../Model/PxeAction.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pxeInstallationTemplates**
> \Swagger\Client\Model\PxeTemplate[] pxeInstallationTemplates()

Installations-Templates abrufen

Diese Funktion gibt verfügbare Templates zur Installation zurück.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\PxeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->pxeInstallationTemplates();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PxeApi->pxeInstallationTemplates: ', $e->getMessage(), PHP_EOL;
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

