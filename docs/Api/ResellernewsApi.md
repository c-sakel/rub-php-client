# csakel\RUBClient\ResellernewsApi

All URIs are relative to *https://api.reselling.services/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**resellerNewsCreate**](ResellernewsApi.md#resellernewscreate) | **POST** /reseller/news/create | Neue Reseller News anlegen
[**resellerNewsDelete**](ResellernewsApi.md#resellernewsdelete) | **DELETE** /reseller/news/delete | Bestehende Reseller News löschen
[**resellerNewsIndex**](ResellernewsApi.md#resellernewsindex) | **GET** /reseller/news | Alle Reseller News abrufen
[**resellerNewsShow**](ResellernewsApi.md#resellernewsshow) | **GET** /reseller/news/show | Einzelne Reseller News abrufen
[**resellerNewsUpdate**](ResellernewsApi.md#resellernewsupdate) | **POST** /reseller/news/update | Bestehende Reseller News aktualisieren

# **resellerNewsCreate**
> \csakel\RUBClient\Model\News[] resellerNewsCreate($subject, $text, $tag)

Neue Reseller News anlegen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = csakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new csakel\RUBClient\Api\ResellernewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subject = "subject_example"; // string | Betreff der News
$text = "text_example"; // string | Text der News
$tag = "tag_example"; // string | Schlagwort vor der News

try {
    $result = $apiInstance->resellerNewsCreate($subject, $text, $tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResellernewsApi->resellerNewsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subject** | **string**| Betreff der News |
 **text** | **string**| Text der News |
 **tag** | **string**| Schlagwort vor der News | [optional]

### Return type

[**\csakel\RUBClient\Model\News[]**](../Model/News.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resellerNewsDelete**
> \csakel\RUBClient\Model\News[] resellerNewsDelete($news_id)

Bestehende Reseller News löschen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = csakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new csakel\RUBClient\Api\ResellernewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$news_id = 56; // int | News-ID, welche gelöscht werden soll

try {
    $result = $apiInstance->resellerNewsDelete($news_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResellernewsApi->resellerNewsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **news_id** | **int**| News-ID, welche gelöscht werden soll |

### Return type

[**\csakel\RUBClient\Model\News[]**](../Model/News.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resellerNewsIndex**
> \csakel\RUBClient\Model\News[] resellerNewsIndex()

Alle Reseller News abrufen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = csakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new csakel\RUBClient\Api\ResellernewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->resellerNewsIndex();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResellernewsApi->resellerNewsIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\csakel\RUBClient\Model\News[]**](../Model/News.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resellerNewsShow**
> \csakel\RUBClient\Model\News[] resellerNewsShow($news_id)

Einzelne Reseller News abrufen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = csakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new csakel\RUBClient\Api\ResellernewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$news_id = 56; // int | News-ID, welche abgerufen werden soll

try {
    $result = $apiInstance->resellerNewsShow($news_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResellernewsApi->resellerNewsShow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **news_id** | **int**| News-ID, welche abgerufen werden soll |

### Return type

[**\csakel\RUBClient\Model\News[]**](../Model/News.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resellerNewsUpdate**
> \csakel\RUBClient\Model\News[] resellerNewsUpdate($news_id, $subject, $text, $tag)

Bestehende Reseller News aktualisieren

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = csakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new csakel\RUBClient\Api\ResellernewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$news_id = 56; // int | News-ID, welche aktualisiert werden soll
$subject = "subject_example"; // string | Betreff der News
$text = "text_example"; // string | Text der News
$tag = "tag_example"; // string | Schlagwort vor der News

try {
    $result = $apiInstance->resellerNewsUpdate($news_id, $subject, $text, $tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResellernewsApi->resellerNewsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **news_id** | **int**| News-ID, welche aktualisiert werden soll |
 **subject** | **string**| Betreff der News |
 **text** | **string**| Text der News |
 **tag** | **string**| Schlagwort vor der News | [optional]

### Return type

[**\csakel\RUBClient\Model\News[]**](../Model/News.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

