# csakel\RUBClient\ReselleraccountingApi

All URIs are relative to *https://api.reselling.services/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**resellerAccountingBalanceGet**](ReselleraccountingApi.md#reselleraccountingbalanceget) | **GET** /reseller/accounting/balance | 

# **resellerAccountingBalanceGet**
> \csakel\RUBClient\Model\AccountingBalance[] resellerAccountingBalanceGet($reseller_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = csakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new csakel\RUBClient\Api\ReselleraccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reseller_id = 56; // int | 

try {
    $result = $apiInstance->resellerAccountingBalanceGet($reseller_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReselleraccountingApi->resellerAccountingBalanceGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reseller_id** | **int**|  |

### Return type

[**\csakel\RUBClient\Model\AccountingBalance[]**](../Model/AccountingBalance.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

