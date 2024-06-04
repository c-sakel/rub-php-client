# Domain

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**sld** | **string** |  | [optional] 
**tld** | **string** |  | [optional] 
**name** | **string** |  | [optional] 
**name_unicode** | **string** |  | [optional] 
**owner_c** | **string** | Inhaber Handle | [optional] 
**admin_c** | **string** | Admin Handle | [optional] 
**tech_c** | **string** | Tech Handle | [optional] 
**zone_c** | **string** | Zone Handle | [optional] 
**create** | [**\DateTime**](\DateTime.md) | Erstellungsdatum der Domain | [optional] 
**expire** | [**\DateTime**](\DateTime.md) | Ablaufdatum der Domain | [optional] 
**delete** | [**\DateTime**](\DateTime.md) | Eingetragenes/Geplantes Kündigungsdatum der Domain | [optional] 
**suspended_at** | [**\DateTime**](\DateTime.md) | RGP (Redemption Grace Period) Startzeit der Domain, kann auch null sein. | [optional] 
**suspended_until** | [**\DateTime**](\DateTime.md) | RGP (Redemption Grace Period) Endzeit der Domain, kann auch null sein. | [optional] 
**authinfo** | **string** |  | [optional] 
**status** | **string** | Aktueller Status der Domain | [optional] 
**zone_id** | **int** | ID der verknüpften Domain-Zone. Dieser Wert ist veraltet und wird in Zukunft immer 0 zurückgeben! | [optional] 
**ns1** | **string** | 1. Nameserver der Domain | [optional] 
**ns2** | **string** | 2. Nameserver der Domain | [optional] 
**ns3** | **string** | 3. Nameserver der Domain | [optional] 
**ns4** | **string** | 4. Nameserver der Domain | [optional] 
**ns5** | **string** | 5. Nameserver der Domain | [optional] 
**premium_price_class** | **string** | Dieser Wert gibt die Preisklasse der Domain zurück und ist ausschließlich für Premium Domains hinterlegt. | [optional] 
**verification_until** | [**\DateTime**](\DateTime.md) | Dieser Wert gibt an, wann die Inhaber Handle Verifizierung abläuft und die Domain daraufhin von der Registry gesperrt wird. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

