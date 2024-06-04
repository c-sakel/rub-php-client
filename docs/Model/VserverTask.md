# VserverTask

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**vserver_id** | **int** |  | [optional] 
**start_at** | **string** |  | [optional] 
**end_at** | **string** |  | [optional] 
**type** | **string** | Mögliche Werte: START &#x3D;&gt; Starten RESTART &#x3D;&gt; Neustarten STOP &#x3D;&gt; Stoppen SHUTDOWN &#x3D;&gt; Herunterfahren DUMP &#x3D;&gt; Backup erstellen DUMP_DELETE &#x3D;&gt; Backup löschen DUMP_RESTORE &#x3D;&gt; Backup wiederherstellen UNINSTALL &#x3D;&gt; Rootserver löschen INSTALL &#x3D;&gt; Rootserver installieren CHANGE_SERVER &#x3D;&gt; Server prüfen RESET &#x3D;&gt; Neustarten | [optional] 
**state** | **string** | Mögliche Werte: running &#x3D;&gt; Läuft gerade OK &#x3D;&gt; Abgeschlossen unexpected status &#x3D;&gt; Unbekannt job errors &#x3D;&gt; Fehlerhaft CT is locked (backup) &#x3D;&gt; Fehlerhaft - Backup läuft noch migration aborted &#x3D;&gt; Migration abgebrochen cancelled &#x3D;&gt; Abgebrochen received interrupt &#x3D;&gt; Abgebrochen VM quit/powerdown failed - got timeout &#x3D;&gt; Timeout VM quit/powerdown failed &#x3D;&gt; Herunterfahren fehlerhaft timeout &#x3D;&gt; Timeout | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

