# c-sakel\RUBClient\SsoApi

All URIs are relative to *https://api.reselling.services/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**ssoCreate**](SsoApi.md#ssocreate) | **POST** /sso/create | Neuen SSO Hash erzeugen

# **ssoCreate**
> \c-sakel\RUBClient\Model\SsoHash[] ssoCreate($username, $ip_address, $url)

Neuen SSO Hash erzeugen

Die Login-URL lautet /sso-login?hash=&lt;hash&gt;  &lt;hash&gt; muss durch den generierten Hash aus der API Rückgabe ersetzt werden

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = c-sakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new c-sakel\RUBClient\Api\SsoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$username = "username_example"; // string | Benutzername des Resellers, Kunden oder Mitarbeiters
$ip_address = "ip_address_example"; // string | Client-IP, welche sich einloggen soll
$url = "url_example"; // string | URL, wohin der Nutzer nach dem Login weitergeleitet werden soll

try {
    $result = $apiInstance->ssoCreate($username, $ip_address, $url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsoApi->ssoCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**| Benutzername des Resellers, Kunden oder Mitarbeiters |
 **ip_address** | **string**| Client-IP, welche sich einloggen soll |
 **url** | **string**| URL, wohin der Nutzer nach dem Login weitergeleitet werden soll | [optional]

### Return type

[**\c-sakel\RUBClient\Model\SsoHash[]**](../Model/SsoHash.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

