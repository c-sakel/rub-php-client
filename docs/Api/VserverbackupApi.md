# csakel\RUBClient\VserverbackupApi

All URIs are relative to *https://api.reselling.services/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**vserverBackup**](VserverbackupApi.md#vserverbackup) | **GET** /vserver/backup | vServer Backups abrufen
[**vserverBackupAbort**](VserverbackupApi.md#vserverbackupabort) | **DELETE** /vserver/backup/abort | Laufendes vServer Backup abbrechen
[**vserverBackupCreate**](VserverbackupApi.md#vserverbackupcreate) | **POST** /vserver/backup/create | vServer Backups anlegen
[**vserverBackupDelete**](VserverbackupApi.md#vserverbackupdelete) | **DELETE** /vserver/backup/delete | vServer Backup löschen
[**vserverBackupFileRestoreCheckPost**](VserverbackupApi.md#vserverbackupfilerestorecheckpost) | **POST** /vserver/backup/file_restore/check | 
[**vserverBackupFileRestoreDownloadPost**](VserverbackupApi.md#vserverbackupfilerestoredownloadpost) | **POST** /vserver/backup/file_restore/download | 
[**vserverBackupFileRestoreListGet**](VserverbackupApi.md#vserverbackupfilerestorelistget) | **GET** /vserver/backup/file_restore/list | 
[**vserverBackupRestore**](VserverbackupApi.md#vserverbackuprestore) | **POST** /vserver/backup/restore | vServer Backup wiederherstellen

# **vserverBackup**
> \csakel\RUBClient\Model\VserverBackup[] vserverBackup($server_id)

vServer Backups abrufen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = csakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new csakel\RUBClient\Api\VserverbackupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | Server-ID

try {
    $result = $apiInstance->vserverBackup($server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserverbackupApi->vserverBackup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_id** | **int**| Server-ID |

### Return type

[**\csakel\RUBClient\Model\VserverBackup[]**](../Model/VserverBackup.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vserverBackupAbort**
> \csakel\RUBClient\Model\VserverBackup[] vserverBackupAbort($server_id, $backup_id)

Laufendes vServer Backup abbrechen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = csakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new csakel\RUBClient\Api\VserverbackupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | Server-ID
$backup_id = 56; // int | Backup-ID, welches abgebrochen werden soll.

try {
    $result = $apiInstance->vserverBackupAbort($server_id, $backup_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserverbackupApi->vserverBackupAbort: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_id** | **int**| Server-ID |
 **backup_id** | **int**| Backup-ID, welches abgebrochen werden soll. |

### Return type

[**\csakel\RUBClient\Model\VserverBackup[]**](../Model/VserverBackup.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vserverBackupCreate**
> \csakel\RUBClient\Model\VserverBackup[] vserverBackupCreate($server_id, $title)

vServer Backups anlegen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = csakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new csakel\RUBClient\Api\VserverbackupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | Server-ID
$title = "title_example"; // string | Titel des Backups

try {
    $result = $apiInstance->vserverBackupCreate($server_id, $title);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserverbackupApi->vserverBackupCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_id** | **int**| Server-ID |
 **title** | **string**| Titel des Backups | [optional]

### Return type

[**\csakel\RUBClient\Model\VserverBackup[]**](../Model/VserverBackup.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vserverBackupDelete**
> \csakel\RUBClient\Model\VserverBackup[] vserverBackupDelete($server_id, $backup_id)

vServer Backup löschen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = csakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new csakel\RUBClient\Api\VserverbackupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | Server-ID
$backup_id = 56; // int | Backup-ID, welches gelöscht werden soll.

try {
    $result = $apiInstance->vserverBackupDelete($server_id, $backup_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserverbackupApi->vserverBackupDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_id** | **int**| Server-ID |
 **backup_id** | **int**| Backup-ID, welches gelöscht werden soll. |

### Return type

[**\csakel\RUBClient\Model\VserverBackup[]**](../Model/VserverBackup.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vserverBackupFileRestoreCheckPost**
> \csakel\RUBClient\Model\VserverBackupFileRestore[] vserverBackupFileRestoreCheckPost($server_id, $backup_id, $file_restore_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = csakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new csakel\RUBClient\Api\VserverbackupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | 
$backup_id = 56; // int | 
$file_restore_id = 56; // int | 

try {
    $result = $apiInstance->vserverBackupFileRestoreCheckPost($server_id, $backup_id, $file_restore_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserverbackupApi->vserverBackupFileRestoreCheckPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_id** | **int**|  |
 **backup_id** | **int**|  |
 **file_restore_id** | **int**|  |

### Return type

[**\csakel\RUBClient\Model\VserverBackupFileRestore[]**](../Model/VserverBackupFileRestore.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vserverBackupFileRestoreDownloadPost**
> \csakel\RUBClient\Model\VserverBackupFileRestore[] vserverBackupFileRestoreDownloadPost($server_id, $backup_id, $file_path)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = csakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new csakel\RUBClient\Api\VserverbackupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | 
$backup_id = 56; // int | 
$file_path = "file_path_example"; // string | 

try {
    $result = $apiInstance->vserverBackupFileRestoreDownloadPost($server_id, $backup_id, $file_path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserverbackupApi->vserverBackupFileRestoreDownloadPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_id** | **int**|  |
 **backup_id** | **int**|  |
 **file_path** | **string**|  |

### Return type

[**\csakel\RUBClient\Model\VserverBackupFileRestore[]**](../Model/VserverBackupFileRestore.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vserverBackupFileRestoreListGet**
> \csakel\RUBClient\Model\VserverBackupFileRestoreList[] vserverBackupFileRestoreListGet($server_id, $backup_id, $file_path)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = csakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new csakel\RUBClient\Api\VserverbackupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | 
$backup_id = 56; // int | 
$file_path = "file_path_example"; // string | 

try {
    $result = $apiInstance->vserverBackupFileRestoreListGet($server_id, $backup_id, $file_path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserverbackupApi->vserverBackupFileRestoreListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_id** | **int**|  |
 **backup_id** | **int**|  |
 **file_path** | **string**|  | [optional]

### Return type

[**\csakel\RUBClient\Model\VserverBackupFileRestoreList[]**](../Model/VserverBackupFileRestoreList.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vserverBackupRestore**
> \csakel\RUBClient\Model\VserverBackup[] vserverBackupRestore($server_id, $backup_id)

vServer Backup wiederherstellen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: api_token
    $config = csakel\RUBClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new csakel\RUBClient\Api\VserverbackupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | Server-ID
$backup_id = 56; // int | Backup-ID, welches wiederhergestellt werden soll.

try {
    $result = $apiInstance->vserverBackupRestore($server_id, $backup_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserverbackupApi->vserverBackupRestore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_id** | **int**| Server-ID |
 **backup_id** | **int**| Backup-ID, welches wiederhergestellt werden soll. |

### Return type

[**\csakel\RUBClient\Model\VserverBackup[]**](../Model/VserverBackup.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

