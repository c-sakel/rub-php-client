# c-sakel\RUBClient\LicensepleskApi

All URIs are relative to *https://api.reselling.services/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**licensePlesk**](LicensepleskApi.md#licenseplesk) | **GET** /license/plesk | Alle Plesk Lizenzen abrufen
[**licensePleskCreate**](LicensepleskApi.md#licensepleskcreate) | **POST** /license/plesk/create | Neue Plesk Lizenz bestellen
[**licensePleskDelete**](LicensepleskApi.md#licensepleskdelete) | **DELETE** /license/plesk/delete | Plesk Lizenz kündigen
[**licensePleskEdit**](LicensepleskApi.md#licensepleskedit) | **POST** /license/plesk/edit | Plesk Lizenz bearbeiten
[**licensePleskGetBinding**](LicensepleskApi.md#licensepleskgetbinding) | **GET** /license/plesk/binding | Plesk Lizenz Binding abrufen
[**licensePleskGetDownload**](LicensepleskApi.md#licensepleskgetdownload) | **GET** /license/plesk/download | Plesk Lizenz herunterladen
[**licensePleskGetFrauds**](LicensepleskApi.md#licensepleskgetfrauds) | **GET** /license/plesk/frauds | Plesk Lizenz Multiuse Verstöße abrufen
[**licensePleskGetStatistic**](LicensepleskApi.md#licensepleskgetstatistic) | **GET** /license/plesk/statistic | Plesk Lizenz Statistiken abrufen
[**licensePleskGetTypes**](LicensepleskApi.md#licensepleskgettypes) | **GET** /license/plesk/types | Plesk Lizenz Typen abrufen
[**licensePleskGetUpgrade**](LicensepleskApi.md#licensepleskgetupgrade) | **GET** /license/plesk/upgrade | Plesk Lizenz Upgrades und Addons abrufen
[**licensePleskPostUpgrade**](LicensepleskApi.md#licensepleskpostupgrade) | **POST** /license/plesk/upgrade | Plesk Lizenz Upgrade durchführen
[**licensePleskPrice**](LicensepleskApi.md#licensepleskprice) | **GET** /license/plesk/price | Plesk Lizenz Preise abrufen
[**licensePleskPriceCsv**](LicensepleskApi.md#licensepleskpricecsv) | **GET** /license/plesk/price/csv | Plesk Lizenz Preise als CSV abrufen
[**licensePleskSetBinding**](LicensepleskApi.md#licenseplesksetbinding) | **POST** /license/plesk/binding | Plesk Lizenz Binding setzen
[**licensePleskShow**](LicensepleskApi.md#licensepleskshow) | **GET** /license/plesk/show | Einzelne Plesk Lizenz abrufen
[**licensePleskUndelete**](LicensepleskApi.md#licensepleskundelete) | **POST** /license/plesk/undelete | Plesk Lizenz Kündigung zurückziehen

# **licensePlesk**
> \c-sakel\RUBClient\Model\PleskLicense[] licensePlesk()

Alle Plesk Lizenzen abrufen

Alle Plesk Lizenzen abrufen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = c-sakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new c-sakel\RUBClient\Api\LicensepleskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->licensePlesk();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicensepleskApi->licensePlesk: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\c-sakel\RUBClient\Model\PleskLicense[]**](../Model/PleskLicense.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **licensePleskCreate**
> \c-sakel\RUBClient\Model\PleskLicense[] licensePleskCreate($type)

Neue Plesk Lizenz bestellen

Neue Plesk Lizenz bestellen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = c-sakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new c-sakel\RUBClient\Api\LicensepleskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = "type_example"; // string | Lizenz-Typ. Mögliche Werte: PLSK_12_ADMIN_VPS, PLSK_12_PRO_VPS, PLSK_12_HOST_VPS, PLSK_12_ADMIN, PLSK_12_PRO, PLSK_12_HOST

try {
    $result = $apiInstance->licensePleskCreate($type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicensepleskApi->licensePleskCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| Lizenz-Typ. Mögliche Werte: PLSK_12_ADMIN_VPS, PLSK_12_PRO_VPS, PLSK_12_HOST_VPS, PLSK_12_ADMIN, PLSK_12_PRO, PLSK_12_HOST |

### Return type

[**\c-sakel\RUBClient\Model\PleskLicense[]**](../Model/PleskLicense.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **licensePleskDelete**
> \c-sakel\RUBClient\Model\PleskLicense[] licensePleskDelete($license, $date)

Plesk Lizenz kündigen

Plesk Lizenz kündigen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = c-sakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new c-sakel\RUBClient\Api\LicensepleskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$license = "license_example"; // string | Lizenz
$date = "date_example"; // string | Datum, wann die Lizenz gelöscht werden soll.

try {
    $result = $apiInstance->licensePleskDelete($license, $date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicensepleskApi->licensePleskDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **license** | **string**| Lizenz |
 **date** | **string**| Datum, wann die Lizenz gelöscht werden soll. |

### Return type

[**\c-sakel\RUBClient\Model\PleskLicense[]**](../Model/PleskLicense.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **licensePleskEdit**
> \c-sakel\RUBClient\Model\PleskLicense[] licensePleskEdit($license, $comment)

Plesk Lizenz bearbeiten

Plesk Lizenz bearbeiten

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = c-sakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new c-sakel\RUBClient\Api\LicensepleskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$license = "license_example"; // string | Lizenz
$comment = "comment_example"; // string | Beschreibung

try {
    $result = $apiInstance->licensePleskEdit($license, $comment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicensepleskApi->licensePleskEdit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **license** | **string**| Lizenz |
 **comment** | **string**| Beschreibung |

### Return type

[**\c-sakel\RUBClient\Model\PleskLicense[]**](../Model/PleskLicense.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **licensePleskGetBinding**
> \c-sakel\RUBClient\Model\PleskLicense[] licensePleskGetBinding($license)

Plesk Lizenz Binding abrufen

Plesk Lizenz Binding abrufen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = c-sakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new c-sakel\RUBClient\Api\LicensepleskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$license = "license_example"; // string | Lizenz

try {
    $result = $apiInstance->licensePleskGetBinding($license);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicensepleskApi->licensePleskGetBinding: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **license** | **string**| Lizenz |

### Return type

[**\c-sakel\RUBClient\Model\PleskLicense[]**](../Model/PleskLicense.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **licensePleskGetDownload**
> \c-sakel\RUBClient\Model\PleskLicense[] licensePleskGetDownload($license)

Plesk Lizenz herunterladen

Plesk Lizenz-Datei herunterladen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = c-sakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new c-sakel\RUBClient\Api\LicensepleskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$license = "license_example"; // string | Lizenz

try {
    $result = $apiInstance->licensePleskGetDownload($license);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicensepleskApi->licensePleskGetDownload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **license** | **string**| Lizenz |

### Return type

[**\c-sakel\RUBClient\Model\PleskLicense[]**](../Model/PleskLicense.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **licensePleskGetFrauds**
> \c-sakel\RUBClient\Model\PleskLicenseFrauds[] licensePleskGetFrauds($license)

Plesk Lizenz Multiuse Verstöße abrufen

Plesk Lizenz Multiuse Verstöße abrufen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = c-sakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new c-sakel\RUBClient\Api\LicensepleskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$license = "license_example"; // string | Lizenz

try {
    $result = $apiInstance->licensePleskGetFrauds($license);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicensepleskApi->licensePleskGetFrauds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **license** | **string**| Lizenz |

### Return type

[**\c-sakel\RUBClient\Model\PleskLicenseFrauds[]**](../Model/PleskLicenseFrauds.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **licensePleskGetStatistic**
> \c-sakel\RUBClient\Model\PleskLicenseStatistic[] licensePleskGetStatistic()

Plesk Lizenz Statistiken abrufen

Plesk Lizenz Statistiken abrufen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = c-sakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new c-sakel\RUBClient\Api\LicensepleskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->licensePleskGetStatistic();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicensepleskApi->licensePleskGetStatistic: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\c-sakel\RUBClient\Model\PleskLicenseStatistic[]**](../Model/PleskLicenseStatistic.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **licensePleskGetTypes**
> \c-sakel\RUBClient\Model\PleskLicenseType[] licensePleskGetTypes()

Plesk Lizenz Typen abrufen

Verfügbare Plesk Lizenz zur Bestellung abrufen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = c-sakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new c-sakel\RUBClient\Api\LicensepleskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->licensePleskGetTypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicensepleskApi->licensePleskGetTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\c-sakel\RUBClient\Model\PleskLicenseType[]**](../Model/PleskLicenseType.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **licensePleskGetUpgrade**
> \c-sakel\RUBClient\Model\PleskLicenseUpgrade[] licensePleskGetUpgrade($license)

Plesk Lizenz Upgrades und Addons abrufen

Verfügbare Plesk Lizenz Upgrades und Addons abrufen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = c-sakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new c-sakel\RUBClient\Api\LicensepleskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$license = "license_example"; // string | Lizenz

try {
    $result = $apiInstance->licensePleskGetUpgrade($license);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicensepleskApi->licensePleskGetUpgrade: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **license** | **string**| Lizenz |

### Return type

[**\c-sakel\RUBClient\Model\PleskLicenseUpgrade[]**](../Model/PleskLicenseUpgrade.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **licensePleskPostUpgrade**
> \c-sakel\RUBClient\Model\PleskLicense[] licensePleskPostUpgrade($license, $type)

Plesk Lizenz Upgrade durchführen

Führen Sie ein Upgrade auf eine höhere Lizenz durch. Zusätzlich kann über diesen Endpunkt auch ein verfügbares Addon zur Lizenz hinzugefügt werden.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = c-sakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new c-sakel\RUBClient\Api\LicensepleskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$license = "license_example"; // string | Lizenz
$type = "type_example"; // string | Upgrade oder Addon

try {
    $result = $apiInstance->licensePleskPostUpgrade($license, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicensepleskApi->licensePleskPostUpgrade: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **license** | **string**| Lizenz |
 **type** | **string**| Upgrade oder Addon |

### Return type

[**\c-sakel\RUBClient\Model\PleskLicense[]**](../Model/PleskLicense.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **licensePleskPrice**
> \c-sakel\RUBClient\Model\PleskLicensePrice[] licensePleskPrice()

Plesk Lizenz Preise abrufen

Plesk Lizenz Preise abrufen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = c-sakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new c-sakel\RUBClient\Api\LicensepleskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->licensePleskPrice();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicensepleskApi->licensePleskPrice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\c-sakel\RUBClient\Model\PleskLicensePrice[]**](../Model/PleskLicensePrice.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **licensePleskPriceCsv**
> \c-sakel\RUBClient\Model\PleskLicensePriceCsv[] licensePleskPriceCsv()

Plesk Lizenz Preise als CSV abrufen

Plesk Lizenz Preise als CSV abrufen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = c-sakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new c-sakel\RUBClient\Api\LicensepleskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->licensePleskPriceCsv();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicensepleskApi->licensePleskPriceCsv: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\c-sakel\RUBClient\Model\PleskLicensePriceCsv[]**](../Model/PleskLicensePriceCsv.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **licensePleskSetBinding**
> \c-sakel\RUBClient\Model\PleskLicense[] licensePleskSetBinding($license, $address)

Plesk Lizenz Binding setzen

Plesk Lizenz Binding setzen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = c-sakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new c-sakel\RUBClient\Api\LicensepleskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$license = "license_example"; // string | Lizenz
$address = "address_example"; // string | IP-Adresse

try {
    $result = $apiInstance->licensePleskSetBinding($license, $address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicensepleskApi->licensePleskSetBinding: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **license** | **string**| Lizenz |
 **address** | **string**| IP-Adresse |

### Return type

[**\c-sakel\RUBClient\Model\PleskLicense[]**](../Model/PleskLicense.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **licensePleskShow**
> \c-sakel\RUBClient\Model\PleskLicense[] licensePleskShow($license)

Einzelne Plesk Lizenz abrufen

Einzelne Plesk Lizenz abrufen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = c-sakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new c-sakel\RUBClient\Api\LicensepleskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$license = "license_example"; // string | Lizenz

try {
    $result = $apiInstance->licensePleskShow($license);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicensepleskApi->licensePleskShow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **license** | **string**| Lizenz |

### Return type

[**\c-sakel\RUBClient\Model\PleskLicense[]**](../Model/PleskLicense.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **licensePleskUndelete**
> \c-sakel\RUBClient\Model\PleskLicense[] licensePleskUndelete($license)

Plesk Lizenz Kündigung zurückziehen

Plesk Lizenz Kündigung zurückziehen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = c-sakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new c-sakel\RUBClient\Api\LicensepleskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$license = "license_example"; // string | Lizenz

try {
    $result = $apiInstance->licensePleskUndelete($license);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicensepleskApi->licensePleskUndelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **license** | **string**| Lizenz |

### Return type

[**\c-sakel\RUBClient\Model\PleskLicense[]**](../Model/PleskLicense.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

