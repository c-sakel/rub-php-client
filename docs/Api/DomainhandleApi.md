# c-sakel\RUBClient\DomainhandleApi

All URIs are relative to *https://api.reselling.services/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**domainHandle**](DomainhandleApi.md#domainhandle) | **GET** /domain/handle | Alle Handles abrufen
[**domainHandleCountries**](DomainhandleApi.md#domainhandlecountries) | **GET** /domain/handle/countries | Länder für Handles abrufen
[**domainHandleCreate**](DomainhandleApi.md#domainhandlecreate) | **POST** /domain/handle/create | Handle erstellen
[**domainHandleDelete**](DomainhandleApi.md#domainhandledelete) | **DELETE** /domain/handle/delete | Handle löschen
[**domainHandleShow**](DomainhandleApi.md#domainhandleshow) | **GET** /domain/handle/show | Einzelnes Handle abrufen
[**domainHandleUpdate**](DomainhandleApi.md#domainhandleupdate) | **POST** /domain/handle/update | Handle aktualisieren

# **domainHandle**
> \c-sakel\RUBClient\Model\DomainHandle[] domainHandle()

Alle Handles abrufen

Alle Handles abrufen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = c-sakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new c-sakel\RUBClient\Api\DomainhandleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->domainHandle();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainhandleApi->domainHandle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\c-sakel\RUBClient\Model\DomainHandle[]**](../Model/DomainHandle.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **domainHandleCountries**
> string[] domainHandleCountries()

Länder für Handles abrufen

Liefert alle möglichen Länder für Handles zurück

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = c-sakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new c-sakel\RUBClient\Api\DomainhandleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->domainHandleCountries();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainhandleApi->domainHandleCountries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**string[]**

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **domainHandleCreate**
> \c-sakel\RUBClient\Model\DomainHandle[] domainHandleCreate($type, $sex, $first_name, $last_name, $street, $number, $postcode, $city, $region, $country, $email, $organisation, $phone, $fax)

Handle erstellen

Neues Handle erstellen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = c-sakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new c-sakel\RUBClient\Api\DomainhandleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = "type_example"; // string | Handle-Typ, mögliche Werte: PERS, ORG
$sex = "sex_example"; // string | Geschlecht, mögliche Werte: MALE, FEMALE
$first_name = "first_name_example"; // string | Vorname
$last_name = "last_name_example"; // string | Nachname
$street = "street_example"; // string | Strasse
$number = "number_example"; // string | Hausnummer
$postcode = "postcode_example"; // string | Postleitzahl
$city = "city_example"; // string | Stadt
$region = "region_example"; // string | Bundesland
$country = "country_example"; // string | Ländercode, abrufbar unter /domain/handle/countries
$email = "email_example"; // string | E-Mail Adresse
$organisation = "organisation_example"; // string | Firma / Organisation
$phone = "phone_example"; // string | Telefon Nummer
$fax = "fax_example"; // string | Fax Nummer

try {
    $result = $apiInstance->domainHandleCreate($type, $sex, $first_name, $last_name, $street, $number, $postcode, $city, $region, $country, $email, $organisation, $phone, $fax);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainhandleApi->domainHandleCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| Handle-Typ, mögliche Werte: PERS, ORG |
 **sex** | **string**| Geschlecht, mögliche Werte: MALE, FEMALE |
 **first_name** | **string**| Vorname |
 **last_name** | **string**| Nachname |
 **street** | **string**| Strasse |
 **number** | **string**| Hausnummer |
 **postcode** | **string**| Postleitzahl |
 **city** | **string**| Stadt |
 **region** | **string**| Bundesland |
 **country** | **string**| Ländercode, abrufbar unter /domain/handle/countries |
 **email** | **string**| E-Mail Adresse |
 **organisation** | **string**| Firma / Organisation | [optional]
 **phone** | **string**| Telefon Nummer | [optional]
 **fax** | **string**| Fax Nummer | [optional]

### Return type

[**\c-sakel\RUBClient\Model\DomainHandle[]**](../Model/DomainHandle.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **domainHandleDelete**
> \c-sakel\RUBClient\Model\DomainHandle[] domainHandleDelete($handle)

Handle löschen

Einzelnes Handle löschen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = c-sakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new c-sakel\RUBClient\Api\DomainhandleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$handle = "handle_example"; // string | Handle, welches gelöscht werden soll

try {
    $result = $apiInstance->domainHandleDelete($handle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainhandleApi->domainHandleDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Handle, welches gelöscht werden soll |

### Return type

[**\c-sakel\RUBClient\Model\DomainHandle[]**](../Model/DomainHandle.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **domainHandleShow**
> \c-sakel\RUBClient\Model\DomainHandle[] domainHandleShow($handle)

Einzelnes Handle abrufen

Einzelnes Handle abrufen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = c-sakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new c-sakel\RUBClient\Api\DomainhandleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$handle = "handle_example"; // string | Handle, welches abgerufen werden soll

try {
    $result = $apiInstance->domainHandleShow($handle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainhandleApi->domainHandleShow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Handle, welches abgerufen werden soll |

### Return type

[**\c-sakel\RUBClient\Model\DomainHandle[]**](../Model/DomainHandle.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **domainHandleUpdate**
> \c-sakel\RUBClient\Model\DomainHandle[] domainHandleUpdate($handle, $street, $number, $postcode, $city, $region, $country, $email, $organisation, $phone, $fax)

Handle aktualisieren

Einzelnes Handle aktualisieren

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = c-sakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new c-sakel\RUBClient\Api\DomainhandleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$handle = "handle_example"; // string | Handle, welches aktualisiert werden soll
$street = "street_example"; // string | Strasse
$number = "number_example"; // string | Hausnummer
$postcode = "postcode_example"; // string | Postleitzahl
$city = "city_example"; // string | Stadt
$region = "region_example"; // string | Bundesland
$country = "country_example"; // string | Ländercode, abrufbar unter /domain/handle/countries
$email = "email_example"; // string | E-Mail Adresse
$organisation = "organisation_example"; // string | Firma / Organisation
$phone = "phone_example"; // string | Telefon Nummer
$fax = "fax_example"; // string | Fax Nummer

try {
    $result = $apiInstance->domainHandleUpdate($handle, $street, $number, $postcode, $city, $region, $country, $email, $organisation, $phone, $fax);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainhandleApi->domainHandleUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Handle, welches aktualisiert werden soll |
 **street** | **string**| Strasse |
 **number** | **string**| Hausnummer |
 **postcode** | **string**| Postleitzahl |
 **city** | **string**| Stadt |
 **region** | **string**| Bundesland |
 **country** | **string**| Ländercode, abrufbar unter /domain/handle/countries |
 **email** | **string**| E-Mail Adresse |
 **organisation** | **string**| Firma / Organisation | [optional]
 **phone** | **string**| Telefon Nummer | [optional]
 **fax** | **string**| Fax Nummer | [optional]

### Return type

[**\c-sakel\RUBClient\Model\DomainHandle[]**](../Model/DomainHandle.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

