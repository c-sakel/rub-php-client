# c-sakel\RUBClient\AbuseManagementApi

All URIs are relative to *https://api.reselling.services/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**abuseManagementEvidenceAttachmentDownloadGet**](AbuseManagementApi.md#abusemanagementevidenceattachmentdownloadget) | **GET** /abuse_management/evidence/attachment/download | 
[**abuseManagementEvidenceGet**](AbuseManagementApi.md#abusemanagementevidenceget) | **GET** /abuse_management/evidence | 
[**abuseManagementEvidenceShowGet**](AbuseManagementApi.md#abusemanagementevidenceshowget) | **GET** /abuse_management/evidence/show | 
[**abuseManagementIncidentFalsePositivePost**](AbuseManagementApi.md#abusemanagementincidentfalsepositivepost) | **POST** /abuse_management/incident/false_positive | 
[**abuseManagementIncidentGet**](AbuseManagementApi.md#abusemanagementincidentget) | **GET** /abuse_management/incident | 
[**abuseManagementIncidentShowGet**](AbuseManagementApi.md#abusemanagementincidentshowget) | **GET** /abuse_management/incident/show | 
[**abuseManagementIncidentSolvePost**](AbuseManagementApi.md#abusemanagementincidentsolvepost) | **POST** /abuse_management/incident/solve | 

# **abuseManagementEvidenceAttachmentDownloadGet**
> string abuseManagementEvidenceAttachmentDownloadGet($incident_id, $evidence_id, $attachment_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = c-sakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new c-sakel\RUBClient\Api\AbuseManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$incident_id = 56; // int | 
$evidence_id = 56; // int | 
$attachment_id = 56; // int | 

try {
    $result = $apiInstance->abuseManagementEvidenceAttachmentDownloadGet($incident_id, $evidence_id, $attachment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AbuseManagementApi->abuseManagementEvidenceAttachmentDownloadGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **incident_id** | **int**|  |
 **evidence_id** | **int**|  |
 **attachment_id** | **int**|  |

### Return type

**string**

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **abuseManagementEvidenceGet**
> \c-sakel\RUBClient\Model\AbuseEvidence[] abuseManagementEvidenceGet($incident_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = c-sakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new c-sakel\RUBClient\Api\AbuseManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$incident_id = 56; // int | 

try {
    $result = $apiInstance->abuseManagementEvidenceGet($incident_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AbuseManagementApi->abuseManagementEvidenceGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **incident_id** | **int**|  |

### Return type

[**\c-sakel\RUBClient\Model\AbuseEvidence[]**](../Model/AbuseEvidence.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **abuseManagementEvidenceShowGet**
> \c-sakel\RUBClient\Model\AbuseEvidence[] abuseManagementEvidenceShowGet($incident_id, $evidence_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = c-sakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new c-sakel\RUBClient\Api\AbuseManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$incident_id = 56; // int | 
$evidence_id = 56; // int | 

try {
    $result = $apiInstance->abuseManagementEvidenceShowGet($incident_id, $evidence_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AbuseManagementApi->abuseManagementEvidenceShowGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **incident_id** | **int**|  |
 **evidence_id** | **int**|  |

### Return type

[**\c-sakel\RUBClient\Model\AbuseEvidence[]**](../Model/AbuseEvidence.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **abuseManagementIncidentFalsePositivePost**
> string abuseManagementIncidentFalsePositivePost($incident_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = c-sakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new c-sakel\RUBClient\Api\AbuseManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$incident_id = 56; // int | 

try {
    $result = $apiInstance->abuseManagementIncidentFalsePositivePost($incident_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AbuseManagementApi->abuseManagementIncidentFalsePositivePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **incident_id** | **int**|  |

### Return type

**string**

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **abuseManagementIncidentGet**
> \c-sakel\RUBClient\Model\AbuseIncident[] abuseManagementIncidentGet()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = c-sakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new c-sakel\RUBClient\Api\AbuseManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->abuseManagementIncidentGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AbuseManagementApi->abuseManagementIncidentGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\c-sakel\RUBClient\Model\AbuseIncident[]**](../Model/AbuseIncident.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **abuseManagementIncidentShowGet**
> \c-sakel\RUBClient\Model\AbuseIncident[] abuseManagementIncidentShowGet($incident_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = c-sakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new c-sakel\RUBClient\Api\AbuseManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$incident_id = 56; // int | 

try {
    $result = $apiInstance->abuseManagementIncidentShowGet($incident_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AbuseManagementApi->abuseManagementIncidentShowGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **incident_id** | **int**|  |

### Return type

[**\c-sakel\RUBClient\Model\AbuseIncident[]**](../Model/AbuseIncident.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **abuseManagementIncidentSolvePost**
> string abuseManagementIncidentSolvePost($incident_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = c-sakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new c-sakel\RUBClient\Api\AbuseManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$incident_id = 56; // int | 

try {
    $result = $apiInstance->abuseManagementIncidentSolvePost($incident_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AbuseManagementApi->abuseManagementIncidentSolvePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **incident_id** | **int**|  |

### Return type

**string**

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

