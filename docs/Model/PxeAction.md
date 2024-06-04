# PxeAction

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**template_id** | **int** |  | [optional] 
**template_title** | **string** |  | [optional] 
**mac_address** | **string** |  | [optional] 
**hostname** | **string** |  | [optional] 
**state** | **string** | Mögliche Werte: READY &#x3D;&gt; Bereit zur Installation INSTALLING &#x3D;&gt; Installation läuft gerade FINISH &#x3D;&gt; Installation abgeschlossen ERROR &#x3D;&gt; Installation fehlgeschlagen CANCELLED &#x3D;&gt; Installation abgebrochen EXPIRED &#x3D;&gt; Installation abgelaufen TIMEOUT &#x3D;&gt; Timeout | [optional] 
**state_percent** | **int** |  | [optional] 
**state_action** | **string** |  | [optional] 
**ip_addresses** | **string[]** | Array mit IPv4-Adressen | [optional] 
**ip6_addresses** | **string[]** | Array mit IPv6-Adressen | [optional] 
**start_at** | [**\DateTime**](\DateTime.md) |  | [optional] 
**end_at** | [**\DateTime**](\DateTime.md) |  | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

