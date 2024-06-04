# Invoice

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**invoice_number** | **string** |  | [optional] 
**invoice_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**due_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**state** | **string** | Mögliche Werte: UNPAID &#x3D;&gt; Unbezahlt PAID &#x3D;&gt; Bezahlt STORNO &#x3D;&gt; Storniert DRAFT &#x3D;&gt; Entwurf | [optional] 
**type** | **string** | Mögliche Werte: INVOICE &#x3D;&gt; Rechnung CREDIT &#x3D;&gt; Gutschrift STORNO &#x3D;&gt; Stornorechnung | [optional] 
**net_amount** | **double** |  | [optional] 
**vat_amount** | **double** |  | [optional] 
**total_amount** | **double** |  | [optional] 
**paid_amount** | **double** |  | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) |  | [optional] 
**updated_at** | [**\DateTime**](\DateTime.md) |  | [optional] 
**transactions** | [**\Swagger\Client\Model\Transaction[]**](Transaction.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

