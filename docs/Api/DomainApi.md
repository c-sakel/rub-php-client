# csakel\RUBClient\DomainApi

All URIs are relative to *https://api.reselling.services/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**domainAuthcode**](DomainApi.md#domainauthcode) | **POST** /domain/authcode | Domain Authinfo abrufen
[**domainAuthcodeEmail**](DomainApi.md#domainauthcodeemail) | **POST** /domain/authcode_email | Domain Authinfo per E-Mail an den Inhaber versenden
[**domainAuthinfo2**](DomainApi.md#domainauthinfo2) | **POST** /domain/authinfo2 | Domain Authinfo2 abrufen
[**domainCheck**](DomainApi.md#domaincheck) | **POST** /domain/check | Domain Verfügbarkeit prüfen
[**domainCreate**](DomainApi.md#domaincreate) | **POST** /domain/create | Domain bestellen
[**domainDelete**](DomainApi.md#domaindelete) | **DELETE** /domain/delete | Domain löschen
[**domainIndex**](DomainApi.md#domainindex) | **GET** /domain | Alle Domains abrufen
[**domainRegistryStatus**](DomainApi.md#domainregistrystatus) | **POST** /domain/registry_status | Domain Registry Status aktualisieren
[**domainResendVerificationEmail**](DomainApi.md#domainresendverificationemail) | **POST** /domain/resend_verification_email | Domain Verifizierungsemail erneut versenden
[**domainRestore**](DomainApi.md#domainrestore) | **POST** /domain/restore | Domain wiederherstellen
[**domainShow**](DomainApi.md#domainshow) | **GET** /domain/show | Einzelne Domain abrufen
[**domainUndelete**](DomainApi.md#domainundelete) | **POST** /domain/undelete | Domain Löschung zurückziehen
[**domainUpdate**](DomainApi.md#domainupdate) | **POST** /domain/update | Domain aktualisieren

# **domainAuthcode**
> domainAuthcode($domain_name)

Domain Authinfo abrufen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = csakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new csakel\RUBClient\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_name = "domain_name_example"; // string | Domain, wofür der Authcode abgerufen werden soll

try {
    $apiInstance->domainAuthcode($domain_name);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->domainAuthcode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **domain_name** | **string**| Domain, wofür der Authcode abgerufen werden soll |

### Return type

void (empty response body)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **domainAuthcodeEmail**
> domainAuthcodeEmail($domain_name)

Domain Authinfo per E-Mail an den Inhaber versenden

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = csakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new csakel\RUBClient\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_name = "domain_name_example"; // string | Domain, wofür der Authcode versendet werden soll

try {
    $apiInstance->domainAuthcodeEmail($domain_name);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->domainAuthcodeEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **domain_name** | **string**| Domain, wofür der Authcode versendet werden soll |

### Return type

void (empty response body)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **domainAuthinfo2**
> domainAuthinfo2($domain_name)

Domain Authinfo2 abrufen

Achtung: Diese Aktion ist kostenpflichtig!

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = csakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new csakel\RUBClient\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_name = "domain_name_example"; // string | Domain, wofür die Authinfo2 abgerufen werden soll

try {
    $apiInstance->domainAuthinfo2($domain_name);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->domainAuthinfo2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **domain_name** | **string**| Domain, wofür die Authinfo2 abgerufen werden soll |

### Return type

void (empty response body)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **domainCheck**
> domainCheck($domain_name)

Domain Verfügbarkeit prüfen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = csakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new csakel\RUBClient\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_name = "domain_name_example"; // string | Domain, welche geprüft werden soll

try {
    $apiInstance->domainCheck($domain_name);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->domainCheck: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **domain_name** | **string**| Domain, welche geprüft werden soll |

### Return type

void (empty response body)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **domainCreate**
> \csakel\RUBClient\Model\Domain[] domainCreate($domain_name, $owner_c, $admin_c, $tech_c, $zone_c, $ns1, $ns2, $ns3, $ns4, $ns5, $authinfo, $create_zone)

Domain bestellen

Registriere oder Transferiere eine Domain

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = csakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new csakel\RUBClient\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_name = "domain_name_example"; // string | Domain, welche bestellt werden soll
$owner_c = "owner_c_example"; // string | Inhaber Handle
$admin_c = "admin_c_example"; // string | Admin Handle
$tech_c = "tech_c_example"; // string | Tech Handle
$zone_c = "zone_c_example"; // string | Zone Handle
$ns1 = "ns1_example"; // string | Erster Nameserver
$ns2 = "ns2_example"; // string | Zweiter Nameserver
$ns3 = "ns3_example"; // string | Dritter Nameserver
$ns4 = "ns4_example"; // string | Vierter Nameserver
$ns5 = "ns5_example"; // string | Fünfter Nameserver
$authinfo = "authinfo_example"; // string | Authinfo, wird nur bei Transfer benötigt
$create_zone = true; // bool | Soll eine Zone auf unseren Nameservern erstellt werden? Dies gilt auch, wenn fremde Nameserver genutzt werden.

try {
    $result = $apiInstance->domainCreate($domain_name, $owner_c, $admin_c, $tech_c, $zone_c, $ns1, $ns2, $ns3, $ns4, $ns5, $authinfo, $create_zone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->domainCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **domain_name** | **string**| Domain, welche bestellt werden soll |
 **owner_c** | **string**| Inhaber Handle |
 **admin_c** | **string**| Admin Handle |
 **tech_c** | **string**| Tech Handle |
 **zone_c** | **string**| Zone Handle |
 **ns1** | **string**| Erster Nameserver |
 **ns2** | **string**| Zweiter Nameserver |
 **ns3** | **string**| Dritter Nameserver | [optional]
 **ns4** | **string**| Vierter Nameserver | [optional]
 **ns5** | **string**| Fünfter Nameserver | [optional]
 **authinfo** | **string**| Authinfo, wird nur bei Transfer benötigt | [optional]
 **create_zone** | **bool**| Soll eine Zone auf unseren Nameservern erstellt werden? Dies gilt auch, wenn fremde Nameserver genutzt werden. | [optional]

### Return type

[**\csakel\RUBClient\Model\Domain[]**](../Model/Domain.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **domainDelete**
> \csakel\RUBClient\Model\Domain[] domainDelete($domain_name, $date)

Domain löschen

Lösche eine Domain

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = csakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new csakel\RUBClient\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_name = "domain_name_example"; // string | Domain, welche gelöscht werden soll
$date = "date_example"; // string | Datum, falls nicht angegeben, dann wird die Domain sofort gelöscht.

try {
    $result = $apiInstance->domainDelete($domain_name, $date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->domainDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **domain_name** | **string**| Domain, welche gelöscht werden soll |
 **date** | **string**| Datum, falls nicht angegeben, dann wird die Domain sofort gelöscht. | [optional]

### Return type

[**\csakel\RUBClient\Model\Domain[]**](../Model/Domain.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **domainIndex**
> \csakel\RUBClient\Model\Domain[] domainIndex()

Alle Domains abrufen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = csakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new csakel\RUBClient\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->domainIndex();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->domainIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\csakel\RUBClient\Model\Domain[]**](../Model/Domain.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **domainRegistryStatus**
> \csakel\RUBClient\Model\Domain[] domainRegistryStatus($domain_name, $status)

Domain Registry Status aktualisieren

Aktualisieren Sie den Registry Status einer Domain. Diese Aktion ist nicht für alle Domainendungen möglich.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = csakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new csakel\RUBClient\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_name = "domain_name_example"; // string | Domain, welche aktualisiert werden soll
$status = "status_example"; // string | Registry Status für Domain.  Mögliche Werte: ACTIVE => Domain aktiv und konnektiert LOCK => Domain aktiv und transfergeschützt, konnektiert HOLD => Domain aktiv, nicht konnektiert HOLD_LOCK => Domain aktiv und transfergeschützt, nicht konnektiert

try {
    $result = $apiInstance->domainRegistryStatus($domain_name, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->domainRegistryStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **domain_name** | **string**| Domain, welche aktualisiert werden soll |
 **status** | **string**| Registry Status für Domain.  Mögliche Werte: ACTIVE &#x3D;&gt; Domain aktiv und konnektiert LOCK &#x3D;&gt; Domain aktiv und transfergeschützt, konnektiert HOLD &#x3D;&gt; Domain aktiv, nicht konnektiert HOLD_LOCK &#x3D;&gt; Domain aktiv und transfergeschützt, nicht konnektiert |

### Return type

[**\csakel\RUBClient\Model\Domain[]**](../Model/Domain.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **domainResendVerificationEmail**
> \csakel\RUBClient\Model\Domain[] domainResendVerificationEmail($domain_name)

Domain Verifizierungsemail erneut versenden

Versenden Sie die Verifizierungsemail erneut. Diese Aktion ist nicht für alle Domainendungen möglich.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = csakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new csakel\RUBClient\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_name = "domain_name_example"; // string | Domain, wofür die Verifizierungsemail erneut gesendet werden soll

try {
    $result = $apiInstance->domainResendVerificationEmail($domain_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->domainResendVerificationEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **domain_name** | **string**| Domain, wofür die Verifizierungsemail erneut gesendet werden soll |

### Return type

[**\csakel\RUBClient\Model\Domain[]**](../Model/Domain.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **domainRestore**
> \csakel\RUBClient\Model\Domain[] domainRestore($domain_name)

Domain wiederherstellen

Domain wiederherstellen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = csakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new csakel\RUBClient\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_name = "domain_name_example"; // string | Domain

try {
    $result = $apiInstance->domainRestore($domain_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->domainRestore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **domain_name** | **string**| Domain |

### Return type

[**\csakel\RUBClient\Model\Domain[]**](../Model/Domain.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **domainShow**
> \csakel\RUBClient\Model\Domain[] domainShow($domain_name)

Einzelne Domain abrufen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = csakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new csakel\RUBClient\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_name = "domain_name_example"; // string | Domain, welche abgerufen werden soll

try {
    $result = $apiInstance->domainShow($domain_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->domainShow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **domain_name** | **string**| Domain, welche abgerufen werden soll |

### Return type

[**\csakel\RUBClient\Model\Domain[]**](../Model/Domain.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **domainUndelete**
> \csakel\RUBClient\Model\Domain[] domainUndelete($domain_name)

Domain Löschung zurückziehen

Ziehe eine Löschung zurück

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = csakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new csakel\RUBClient\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_name = "domain_name_example"; // string | Domain

try {
    $result = $apiInstance->domainUndelete($domain_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->domainUndelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **domain_name** | **string**| Domain |

### Return type

[**\csakel\RUBClient\Model\Domain[]**](../Model/Domain.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **domainUpdate**
> \csakel\RUBClient\Model\Domain[] domainUpdate($domain_name, $owner_c, $admin_c, $tech_c, $zone_c, $ns1, $ns2, $ns3, $ns4, $ns5)

Domain aktualisieren

Aktualisieren Sie eine Domain

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = csakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new csakel\RUBClient\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_name = "domain_name_example"; // string | Domain, welche aktualisiert werden soll
$owner_c = "owner_c_example"; // string | Inhaber Handle
$admin_c = "admin_c_example"; // string | Admin Handle
$tech_c = "tech_c_example"; // string | Tech Handle
$zone_c = "zone_c_example"; // string | Zone Handle
$ns1 = "ns1_example"; // string | Erster Nameserver
$ns2 = "ns2_example"; // string | Zweiter Nameserver
$ns3 = "ns3_example"; // string | Dritter Nameserver
$ns4 = "ns4_example"; // string | Vierter Nameserver
$ns5 = "ns5_example"; // string | Fünfter Nameserver

try {
    $result = $apiInstance->domainUpdate($domain_name, $owner_c, $admin_c, $tech_c, $zone_c, $ns1, $ns2, $ns3, $ns4, $ns5);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->domainUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **domain_name** | **string**| Domain, welche aktualisiert werden soll |
 **owner_c** | **string**| Inhaber Handle |
 **admin_c** | **string**| Admin Handle |
 **tech_c** | **string**| Tech Handle |
 **zone_c** | **string**| Zone Handle |
 **ns1** | **string**| Erster Nameserver |
 **ns2** | **string**| Zweiter Nameserver |
 **ns3** | **string**| Dritter Nameserver | [optional]
 **ns4** | **string**| Vierter Nameserver | [optional]
 **ns5** | **string**| Fünfter Nameserver | [optional]

### Return type

[**\csakel\RUBClient\Model\Domain[]**](../Model/Domain.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

