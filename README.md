# Röth & Beck PHP Client
Auf folgender Seite finden Sie die Beschreibung der RESELLING.SERVICES Schnittstelle  <!--<a href=\"https://reselling.services/api-docs?lang=en\" title=\"Englische Dokumentation\">Dokumentation in Englisch</a>-->

- API version: 1.9.0


## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/git_user_id/git_repo_id.git"
    }
  ],
  "require": {
    "git_user_id/git_repo_id": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Swagger\Client\Api\AbuseManagementApi(
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


$apiInstance = new Swagger\Client\Api\AbuseManagementApi(
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


$apiInstance = new Swagger\Client\Api\AbuseManagementApi(
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


$apiInstance = new Swagger\Client\Api\AbuseManagementApi(
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


$apiInstance = new Swagger\Client\Api\AbuseManagementApi(
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


$apiInstance = new Swagger\Client\Api\AbuseManagementApi(
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


$apiInstance = new Swagger\Client\Api\AbuseManagementApi(
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

## Documentation for API Endpoints

All URIs are relative to *https://api.reselling.services/api/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AbuseManagementApi* | [**abuseManagementEvidenceAttachmentDownloadGet**](docs/Api/AbuseManagementApi.md#abusemanagementevidenceattachmentdownloadget) | **GET** /abuse_management/evidence/attachment/download | 
*AbuseManagementApi* | [**abuseManagementEvidenceGet**](docs/Api/AbuseManagementApi.md#abusemanagementevidenceget) | **GET** /abuse_management/evidence | 
*AbuseManagementApi* | [**abuseManagementEvidenceShowGet**](docs/Api/AbuseManagementApi.md#abusemanagementevidenceshowget) | **GET** /abuse_management/evidence/show | 
*AbuseManagementApi* | [**abuseManagementIncidentFalsePositivePost**](docs/Api/AbuseManagementApi.md#abusemanagementincidentfalsepositivepost) | **POST** /abuse_management/incident/false_positive | 
*AbuseManagementApi* | [**abuseManagementIncidentGet**](docs/Api/AbuseManagementApi.md#abusemanagementincidentget) | **GET** /abuse_management/incident | 
*AbuseManagementApi* | [**abuseManagementIncidentShowGet**](docs/Api/AbuseManagementApi.md#abusemanagementincidentshowget) | **GET** /abuse_management/incident/show | 
*AbuseManagementApi* | [**abuseManagementIncidentSolvePost**](docs/Api/AbuseManagementApi.md#abusemanagementincidentsolvepost) | **POST** /abuse_management/incident/solve | 
*AccountApi* | [**accountIndex**](docs/Api/AccountApi.md#accountindex) | **GET** /account | Account Daten abrufen
*AccountingApi* | [**accountingBalance**](docs/Api/AccountingApi.md#accountingbalance) | **GET** /accounting/balance | Accounting Daten abrufen
*AccountingApi* | [**accountingInvoiceIndex**](docs/Api/AccountingApi.md#accountinginvoiceindex) | **GET** /accounting/invoice | Alle Rechnungen abrufen
*AddressApi* | [**addressIndex**](docs/Api/AddressApi.md#addressindex) | **GET** /address | Alle IP-Adressen abrufen
*AddressApi* | [**addressRdns**](docs/Api/AddressApi.md#addressrdns) | **POST** /address/rdns | rDNS Eintrag für IP-Adresse setzen
*AddressApi* | [**addressShow**](docs/Api/AddressApi.md#addressshow) | **GET** /address/show | Einzelne IP-Adresse abrufen
*AddressApi* | [**addressTraffic**](docs/Api/AddressApi.md#addresstraffic) | **GET** /address/traffic | Traffic für IP-Adresse abrufen
*DdosAlertApi* | [**ddosAlertIndex**](docs/Api/DdosAlertApi.md#ddosalertindex) | **GET** /ddos_alert | Alle DDoS Alerts abrufen
*DdosAlertApi* | [**ddosAlertShow**](docs/Api/DdosAlertApi.md#ddosalertshow) | **GET** /ddos_alert/show | Einzelnen DDoS Alert abrufen
*DedicatedServerApi* | [**dedicatedServerIndex**](docs/Api/DedicatedServerApi.md#dedicatedserverindex) | **GET** /dedicated_server | Alle dedizierten Server abrufen
*DedicatedServerApi* | [**dedicatedServerKvmDownload**](docs/Api/DedicatedServerApi.md#dedicatedserverkvmdownload) | **GET** /dedicated_server/kvm/download | KVM Konsole herunterladen
*DedicatedServerApi* | [**dedicatedServerKvmReset**](docs/Api/DedicatedServerApi.md#dedicatedserverkvmreset) | **POST** /dedicated_server/kvm/reset | KVM Konsole zurücksetzen
*DedicatedServerApi* | [**dedicatedServerReinstall**](docs/Api/DedicatedServerApi.md#dedicatedserverreinstall) | **POST** /dedicated_server/reinstall | Dedizierten Server neuinstallieren
*DedicatedServerApi* | [**dedicatedServerReset**](docs/Api/DedicatedServerApi.md#dedicatedserverreset) | **POST** /dedicated_server/reset | Dedizierten Server neustarten
*DedicatedServerApi* | [**dedicatedServerShow**](docs/Api/DedicatedServerApi.md#dedicatedservershow) | **GET** /dedicated_server/show | Einzelnen dedizierten Server abrufen
*DedicatedServerApi* | [**dedicatedServerStart**](docs/Api/DedicatedServerApi.md#dedicatedserverstart) | **POST** /dedicated_server/start | Dedizierten Server starten
*DedicatedServerApi* | [**dedicatedServerStatus**](docs/Api/DedicatedServerApi.md#dedicatedserverstatus) | **GET** /dedicated_server/status | Status eines dedizierten Servers abrufen
*DedicatedServerApi* | [**dedicatedServerStop**](docs/Api/DedicatedServerApi.md#dedicatedserverstop) | **POST** /dedicated_server/stop | Dedizierten Server herunterfahren
*DedicatedServerApi* | [**dedicatedServerTemplates**](docs/Api/DedicatedServerApi.md#dedicatedservertemplates) | **GET** /dedicated_server/templates | Installations-Templates abrufen
*DnszoneApi* | [**dnsZoneGet**](docs/Api/DnszoneApi.md#dnszoneget) | **GET** /dns/zone | 
*DnszoneApi* | [**dnsZoneRecordCreatePost**](docs/Api/DnszoneApi.md#dnszonerecordcreatepost) | **POST** /dns/zone/record/create | 
*DnszoneApi* | [**dnsZoneRecordDeleteDelete**](docs/Api/DnszoneApi.md#dnszonerecorddeletedelete) | **DELETE** /dns/zone/record/delete | 
*DnszoneApi* | [**dnsZoneRecordGet**](docs/Api/DnszoneApi.md#dnszonerecordget) | **GET** /dns/zone/record | 
*DnszoneApi* | [**dnsZoneRecordShowGet**](docs/Api/DnszoneApi.md#dnszonerecordshowget) | **GET** /dns/zone/record/show | 
*DnszoneApi* | [**dnsZoneRecordUpdatePost**](docs/Api/DnszoneApi.md#dnszonerecordupdatepost) | **POST** /dns/zone/record/update | 
*DnszoneApi* | [**dnsZoneShowGet**](docs/Api/DnszoneApi.md#dnszoneshowget) | **GET** /dns/zone/show | 
*DomainApi* | [**domainAuthcode**](docs/Api/DomainApi.md#domainauthcode) | **POST** /domain/authcode | Domain Authinfo abrufen
*DomainApi* | [**domainAuthcodeEmail**](docs/Api/DomainApi.md#domainauthcodeemail) | **POST** /domain/authcode_email | Domain Authinfo per E-Mail an den Inhaber versenden
*DomainApi* | [**domainAuthinfo2**](docs/Api/DomainApi.md#domainauthinfo2) | **POST** /domain/authinfo2 | Domain Authinfo2 abrufen
*DomainApi* | [**domainCheck**](docs/Api/DomainApi.md#domaincheck) | **POST** /domain/check | Domain Verfügbarkeit prüfen
*DomainApi* | [**domainCreate**](docs/Api/DomainApi.md#domaincreate) | **POST** /domain/create | Domain bestellen
*DomainApi* | [**domainDelete**](docs/Api/DomainApi.md#domaindelete) | **DELETE** /domain/delete | Domain löschen
*DomainApi* | [**domainIndex**](docs/Api/DomainApi.md#domainindex) | **GET** /domain | Alle Domains abrufen
*DomainApi* | [**domainRegistryStatus**](docs/Api/DomainApi.md#domainregistrystatus) | **POST** /domain/registry_status | Domain Registry Status aktualisieren
*DomainApi* | [**domainResendVerificationEmail**](docs/Api/DomainApi.md#domainresendverificationemail) | **POST** /domain/resend_verification_email | Domain Verifizierungsemail erneut versenden
*DomainApi* | [**domainRestore**](docs/Api/DomainApi.md#domainrestore) | **POST** /domain/restore | Domain wiederherstellen
*DomainApi* | [**domainShow**](docs/Api/DomainApi.md#domainshow) | **GET** /domain/show | Einzelne Domain abrufen
*DomainApi* | [**domainUndelete**](docs/Api/DomainApi.md#domainundelete) | **POST** /domain/undelete | Domain Löschung zurückziehen
*DomainApi* | [**domainUpdate**](docs/Api/DomainApi.md#domainupdate) | **POST** /domain/update | Domain aktualisieren
*DomaindnsApi* | [**domainDns**](docs/Api/DomaindnsApi.md#domaindns) | **GET** /domain/dns | DNS Zone abrufen
*DomaindnsApi* | [**domainDnsUpdate**](docs/Api/DomaindnsApi.md#domaindnsupdate) | **POST** /domain/dns/update | DNS Zone speichern
*DomainhandleApi* | [**domainHandle**](docs/Api/DomainhandleApi.md#domainhandle) | **GET** /domain/handle | Alle Handles abrufen
*DomainhandleApi* | [**domainHandleCountries**](docs/Api/DomainhandleApi.md#domainhandlecountries) | **GET** /domain/handle/countries | Länder für Handles abrufen
*DomainhandleApi* | [**domainHandleCreate**](docs/Api/DomainhandleApi.md#domainhandlecreate) | **POST** /domain/handle/create | Handle erstellen
*DomainhandleApi* | [**domainHandleDelete**](docs/Api/DomainhandleApi.md#domainhandledelete) | **DELETE** /domain/handle/delete | Handle löschen
*DomainhandleApi* | [**domainHandleShow**](docs/Api/DomainhandleApi.md#domainhandleshow) | **GET** /domain/handle/show | Einzelnes Handle abrufen
*DomainhandleApi* | [**domainHandleUpdate**](docs/Api/DomainhandleApi.md#domainhandleupdate) | **POST** /domain/handle/update | Handle aktualisieren
*DomainknowledgebaseApi* | [**domainKnowledgebaseIndex**](docs/Api/DomainknowledgebaseApi.md#domainknowledgebaseindex) | **GET** /domain/knowledgebase | Alle TLDs aus der Wissensdatenbank abrufen
*DomainknowledgebaseApi* | [**domainKnowledgebaseShow**](docs/Api/DomainknowledgebaseApi.md#domainknowledgebaseshow) | **GET** /domain/knowledgebase/show | Einzelne TLD aus der Wissensdatenbank abrufen
*DomainnameserverApi* | [**domainNameserverCreate**](docs/Api/DomainnameserverApi.md#domainnameservercreate) | **POST** /domain/nameserver/create | Neuen Nameserver anlegen
*DomainnameserverApi* | [**domainNameserverDelete**](docs/Api/DomainnameserverApi.md#domainnameserverdelete) | **DELETE** /domain/nameserver/delete | Nameserver löschen
*DomainnameserverApi* | [**domainNameserverIndex**](docs/Api/DomainnameserverApi.md#domainnameserverindex) | **GET** /domain/nameserver | Alle Nameserver abrufen
*DomainnameserverApi* | [**domainNameserverRefresh**](docs/Api/DomainnameserverApi.md#domainnameserverrefresh) | **POST** /domain/nameserver/refresh | Nameserver IP-Adressen aktualisieren
*DomainnameserverApi* | [**domainNameserverShow**](docs/Api/DomainnameserverApi.md#domainnameservershow) | **GET** /domain/nameserver/show | Einzelnen Nameserver abrufen
*DomainpriceApi* | [**domainPrice**](docs/Api/DomainpriceApi.md#domainprice) | **GET** /domain/price | Domain Preise abrufen
*DomainpriceApi* | [**domainPriceCsv**](docs/Api/DomainpriceApi.md#domainpricecsv) | **GET** /domain/price/csv | Domain Preise als CSV abrufen
*DomainpriceApi* | [**domainPricePromotion**](docs/Api/DomainpriceApi.md#domainpricepromotion) | **GET** /domain/price/promotion | Domain-Aktionen Preise abrufen
*DomainpriceApi* | [**domainPricePromotionCsv**](docs/Api/DomainpriceApi.md#domainpricepromotioncsv) | **GET** /domain/price/promotion/csv | Domain-Aktionen Preise als CSV abrufen
*DomaintaskApi* | [**domainTaskIndex**](docs/Api/DomaintaskApi.md#domaintaskindex) | **GET** /domain/task | Alle Domain Tasks abrufen
*DomaintaskApi* | [**domainTaskShow**](docs/Api/DomaintaskApi.md#domaintaskshow) | **GET** /domain/task/show | Einzelnen Domain Tasks abrufen
*LicensepleskApi* | [**licensePlesk**](docs/Api/LicensepleskApi.md#licenseplesk) | **GET** /license/plesk | Alle Plesk Lizenzen abrufen
*LicensepleskApi* | [**licensePleskCreate**](docs/Api/LicensepleskApi.md#licensepleskcreate) | **POST** /license/plesk/create | Neue Plesk Lizenz bestellen
*LicensepleskApi* | [**licensePleskDelete**](docs/Api/LicensepleskApi.md#licensepleskdelete) | **DELETE** /license/plesk/delete | Plesk Lizenz kündigen
*LicensepleskApi* | [**licensePleskEdit**](docs/Api/LicensepleskApi.md#licensepleskedit) | **POST** /license/plesk/edit | Plesk Lizenz bearbeiten
*LicensepleskApi* | [**licensePleskGetBinding**](docs/Api/LicensepleskApi.md#licensepleskgetbinding) | **GET** /license/plesk/binding | Plesk Lizenz Binding abrufen
*LicensepleskApi* | [**licensePleskGetDownload**](docs/Api/LicensepleskApi.md#licensepleskgetdownload) | **GET** /license/plesk/download | Plesk Lizenz herunterladen
*LicensepleskApi* | [**licensePleskGetFrauds**](docs/Api/LicensepleskApi.md#licensepleskgetfrauds) | **GET** /license/plesk/frauds | Plesk Lizenz Multiuse Verstöße abrufen
*LicensepleskApi* | [**licensePleskGetStatistic**](docs/Api/LicensepleskApi.md#licensepleskgetstatistic) | **GET** /license/plesk/statistic | Plesk Lizenz Statistiken abrufen
*LicensepleskApi* | [**licensePleskGetTypes**](docs/Api/LicensepleskApi.md#licensepleskgettypes) | **GET** /license/plesk/types | Plesk Lizenz Typen abrufen
*LicensepleskApi* | [**licensePleskGetUpgrade**](docs/Api/LicensepleskApi.md#licensepleskgetupgrade) | **GET** /license/plesk/upgrade | Plesk Lizenz Upgrades und Addons abrufen
*LicensepleskApi* | [**licensePleskPostUpgrade**](docs/Api/LicensepleskApi.md#licensepleskpostupgrade) | **POST** /license/plesk/upgrade | Plesk Lizenz Upgrade durchführen
*LicensepleskApi* | [**licensePleskPrice**](docs/Api/LicensepleskApi.md#licensepleskprice) | **GET** /license/plesk/price | Plesk Lizenz Preise abrufen
*LicensepleskApi* | [**licensePleskPriceCsv**](docs/Api/LicensepleskApi.md#licensepleskpricecsv) | **GET** /license/plesk/price/csv | Plesk Lizenz Preise als CSV abrufen
*LicensepleskApi* | [**licensePleskSetBinding**](docs/Api/LicensepleskApi.md#licenseplesksetbinding) | **POST** /license/plesk/binding | Plesk Lizenz Binding setzen
*LicensepleskApi* | [**licensePleskShow**](docs/Api/LicensepleskApi.md#licensepleskshow) | **GET** /license/plesk/show | Einzelne Plesk Lizenz abrufen
*LicensepleskApi* | [**licensePleskUndelete**](docs/Api/LicensepleskApi.md#licensepleskundelete) | **POST** /license/plesk/undelete | Plesk Lizenz Kündigung zurückziehen
*NetworkfirewallApi* | [**networkFirewallAssignPost**](docs/Api/NetworkfirewallApi.md#networkfirewallassignpost) | **POST** /network/firewall/assign | 
*NetworkfirewallApi* | [**networkFirewallCopyPost**](docs/Api/NetworkfirewallApi.md#networkfirewallcopypost) | **POST** /network/firewall/copy | 
*NetworkfirewallApi* | [**networkFirewallCreatePost**](docs/Api/NetworkfirewallApi.md#networkfirewallcreatepost) | **POST** /network/firewall/create | 
*NetworkfirewallApi* | [**networkFirewallDeleteDelete**](docs/Api/NetworkfirewallApi.md#networkfirewalldeletedelete) | **DELETE** /network/firewall/delete | 
*NetworkfirewallApi* | [**networkFirewallGet**](docs/Api/NetworkfirewallApi.md#networkfirewallget) | **GET** /network/firewall | 
*NetworkfirewallApi* | [**networkFirewallRolloutPost**](docs/Api/NetworkfirewallApi.md#networkfirewallrolloutpost) | **POST** /network/firewall/rollout | 
*NetworkfirewallApi* | [**networkFirewallRuleCreatePost**](docs/Api/NetworkfirewallApi.md#networkfirewallrulecreatepost) | **POST** /network/firewall/rule/create | 
*NetworkfirewallApi* | [**networkFirewallRuleDeleteDelete**](docs/Api/NetworkfirewallApi.md#networkfirewallruledeletedelete) | **DELETE** /network/firewall/rule/delete | 
*NetworkfirewallApi* | [**networkFirewallRuleUpdatePost**](docs/Api/NetworkfirewallApi.md#networkfirewallruleupdatepost) | **POST** /network/firewall/rule/update | 
*NetworkfirewallApi* | [**networkFirewallShowGet**](docs/Api/NetworkfirewallApi.md#networkfirewallshowget) | **GET** /network/firewall/show | 
*NetworkfirewallApi* | [**networkFirewallUnassignDelete**](docs/Api/NetworkfirewallApi.md#networkfirewallunassigndelete) | **DELETE** /network/firewall/unassign | 
*NetworkfirewallApi* | [**networkFirewallUpdatePost**](docs/Api/NetworkfirewallApi.md#networkfirewallupdatepost) | **POST** /network/firewall/update | 
*NewsApi* | [**newsIndex**](docs/Api/NewsApi.md#newsindex) | **GET** /news | Alle News abrufen
*NewsApi* | [**newsShow**](docs/Api/NewsApi.md#newsshow) | **GET** /news/show | Einzelne News abrufen
*PduApi* | [**pduGet**](docs/Api/PduApi.md#pduget) | **GET** /pdu | 
*PduApi* | [**pduShowGet**](docs/Api/PduApi.md#pdushowget) | **GET** /pdu/show | 
*PduApi* | [**pduUsageGet**](docs/Api/PduApi.md#pduusageget) | **GET** /pdu/usage | 
*PxeApi* | [**pxeInstallationCreate**](docs/Api/PxeApi.md#pxeinstallationcreate) | **POST** /pxe/installation/create | Installation anlegen und starten
*PxeApi* | [**pxeInstallationIndex**](docs/Api/PxeApi.md#pxeinstallationindex) | **GET** /pxe/installation | Alle PXE Installationen abrufen
*PxeApi* | [**pxeInstallationShow**](docs/Api/PxeApi.md#pxeinstallationshow) | **GET** /pxe/installation/show | Eine einzelne PXE Installation abrufen
*PxeApi* | [**pxeInstallationTemplates**](docs/Api/PxeApi.md#pxeinstallationtemplates) | **GET** /pxe/installation/templates | Installations-Templates abrufen
*ReselleraccountingApi* | [**resellerAccountingBalanceGet**](docs/Api/ReselleraccountingApi.md#reselleraccountingbalanceget) | **GET** /reseller/accounting/balance | 
*ResellernewsApi* | [**resellerNewsCreate**](docs/Api/ResellernewsApi.md#resellernewscreate) | **POST** /reseller/news/create | Neue Reseller News anlegen
*ResellernewsApi* | [**resellerNewsDelete**](docs/Api/ResellernewsApi.md#resellernewsdelete) | **DELETE** /reseller/news/delete | Bestehende Reseller News löschen
*ResellernewsApi* | [**resellerNewsIndex**](docs/Api/ResellernewsApi.md#resellernewsindex) | **GET** /reseller/news | Alle Reseller News abrufen
*ResellernewsApi* | [**resellerNewsShow**](docs/Api/ResellernewsApi.md#resellernewsshow) | **GET** /reseller/news/show | Einzelne Reseller News abrufen
*ResellernewsApi* | [**resellerNewsUpdate**](docs/Api/ResellernewsApi.md#resellernewsupdate) | **POST** /reseller/news/update | Bestehende Reseller News aktualisieren
*SshKeyApi* | [**sshKeyCreate**](docs/Api/SshKeyApi.md#sshkeycreate) | **POST** /ssh_key/create | Neuen SSH Key anlegen
*SshKeyApi* | [**sshKeyDelete**](docs/Api/SshKeyApi.md#sshkeydelete) | **DELETE** /ssh_key/delete | SSH Key löschen
*SshKeyApi* | [**sshKeyIndex**](docs/Api/SshKeyApi.md#sshkeyindex) | **GET** /ssh_key | Alle SSH Keys abrufen
*SshKeyApi* | [**sshKeyShow**](docs/Api/SshKeyApi.md#sshkeyshow) | **GET** /ssh_key/show | Einzelnen SSH Key abrufen
*SsoApi* | [**ssoCreate**](docs/Api/SsoApi.md#ssocreate) | **POST** /sso/create | Neuen SSO Hash erzeugen
*TeamspeakInstanceApi* | [**teamspeakInstanceDdosAlert**](docs/Api/TeamspeakInstanceApi.md#teamspeakinstanceddosalert) | **GET** /teamspeak_instance/ddos_alert | DDoS Alerts zur Teamspeak Instanz abrufen
*TeamspeakInstanceApi* | [**teamspeakInstanceIndex**](docs/Api/TeamspeakInstanceApi.md#teamspeakinstanceindex) | **GET** /teamspeak_instance | Teamspeak Instanzen abrufen
*TeamspeakInstanceApi* | [**teamspeakInstanceResetQueryPassword**](docs/Api/TeamspeakInstanceApi.md#teamspeakinstanceresetquerypassword) | **POST** /teamspeak_instance/reset_query_password | Query Passwort von Teamspeak Instanz zurücksetzen
*TeamspeakInstanceApi* | [**teamspeakInstanceRestart**](docs/Api/TeamspeakInstanceApi.md#teamspeakinstancerestart) | **POST** /teamspeak_instance/restart | Teamspeak Instanzen neustarten
*TeamspeakInstanceApi* | [**teamspeakInstanceSettings**](docs/Api/TeamspeakInstanceApi.md#teamspeakinstancesettings) | **POST** /teamspeak_instance/settings | Einstellungen von Teamspeak Instanz speichern
*TeamspeakInstanceApi* | [**teamspeakInstanceShow**](docs/Api/TeamspeakInstanceApi.md#teamspeakinstanceshow) | **GET** /teamspeak_instance/show | Einzelne Teamspeak Instanz abrufen
*TeamspeakInstanceApi* | [**teamspeakInstanceStart**](docs/Api/TeamspeakInstanceApi.md#teamspeakinstancestart) | **POST** /teamspeak_instance/start | Teamspeak Instanzen starten
*TeamspeakInstanceApi* | [**teamspeakInstanceStop**](docs/Api/TeamspeakInstanceApi.md#teamspeakinstancestop) | **POST** /teamspeak_instance/stop | Teamspeak Instanzen stoppen
*TeamspeakInstanceApi* | [**teamspeakInstanceWhitelistAdd**](docs/Api/TeamspeakInstanceApi.md#teamspeakinstancewhitelistadd) | **POST** /teamspeak_instance/whitelist/add | Teamspeak Instanz Whitelist Adresse hinzufügen
*TeamspeakInstanceApi* | [**teamspeakInstanceWhitelistIndex**](docs/Api/TeamspeakInstanceApi.md#teamspeakinstancewhitelistindex) | **GET** /teamspeak_instance/whitelist | Teamspeak Instanz Whitelist Adressen abrufen
*TeamspeakInstanceApi* | [**teamspeakInstanceWhitelistRemove**](docs/Api/TeamspeakInstanceApi.md#teamspeakinstancewhitelistremove) | **DELETE** /teamspeak_instance/whitelist/remove | Teamspeak Instanz Whitelist Adresse entfernen
*VlanApi* | [**vlanGet**](docs/Api/VlanApi.md#vlanget) | **GET** /vlan | 
*VlanApi* | [**vlanShowGet**](docs/Api/VlanApi.md#vlanshowget) | **GET** /vlan/show | 
*VlanApi* | [**vlanTrafficTimeseriesGet**](docs/Api/VlanApi.md#vlantraffictimeseriesget) | **GET** /vlan/traffic/timeseries | 
*VlanApi* | [**vlanTrafficUsageGet**](docs/Api/VlanApi.md#vlantrafficusageget) | **GET** /vlan/traffic/usage | 
*VserverApi* | [**vserverAddress**](docs/Api/VserverApi.md#vserveraddress) | **GET** /vserver/address | vServer IP-Adressen abrufen
*VserverApi* | [**vserverCreate**](docs/Api/VserverApi.md#vservercreate) | **POST** /vserver/create | Neuen vServer bestellen
*VserverApi* | [**vserverDdosAlert**](docs/Api/VserverApi.md#vserverddosalert) | **GET** /vserver/ddos_alert | DDoS Alerts zum vServer abrufen
*VserverApi* | [**vserverDelete**](docs/Api/VserverApi.md#vserverdelete) | **DELETE** /vserver/delete | vServer löschen
*VserverApi* | [**vserverGraph**](docs/Api/VserverApi.md#vservergraph) | **GET** /vserver/graph | vServer Graphdaten abrufen
*VserverApi* | [**vserverGraphImage**](docs/Api/VserverApi.md#vservergraphimage) | **GET** /vserver/graph_image | vServer Graphdaten als PNG abrufen
*VserverApi* | [**vserverIndex**](docs/Api/VserverApi.md#vserverindex) | **GET** /vserver | Alle vServer abrufen
*VserverApi* | [**vserverInstallation**](docs/Api/VserverApi.md#vserverinstallation) | **GET** /vserver/installation | vServer Installationen abrufen
*VserverApi* | [**vserverNetworkReset**](docs/Api/VserverApi.md#vservernetworkreset) | **POST** /vserver/network_reset | Netzwerk zurücksetzen
*VserverApi* | [**vserverOperation**](docs/Api/VserverApi.md#vserveroperation) | **GET** /vserver/operation | vServer Operationen abrufen
*VserverApi* | [**vserverOperations**](docs/Api/VserverApi.md#vserveroperations) | **GET** /vserver/operations | Operation-Templates abrufen
*VserverApi* | [**vserverPasswordReset**](docs/Api/VserverApi.md#vserverpasswordreset) | **POST** /vserver/password_reset | Passwort zurücksetzen
*VserverApi* | [**vserverReinstall**](docs/Api/VserverApi.md#vserverreinstall) | **POST** /vserver/reinstall | vServer neuinstallieren
*VserverApi* | [**vserverRestart**](docs/Api/VserverApi.md#vserverrestart) | **POST** /vserver/restart | vServer neustarten
*VserverApi* | [**vserverSettings**](docs/Api/VserverApi.md#vserversettings) | **POST** /vserver/settings | Einstellungen von vServer speichern
*VserverApi* | [**vserverShow**](docs/Api/VserverApi.md#vservershow) | **GET** /vserver/show | Einzelnen vServer abrufen
*VserverApi* | [**vserverShutdown**](docs/Api/VserverApi.md#vservershutdown) | **POST** /vserver/shutdown | vServer herunterfahren
*VserverApi* | [**vserverStart**](docs/Api/VserverApi.md#vserverstart) | **POST** /vserver/start | vServer starten
*VserverApi* | [**vserverStatus**](docs/Api/VserverApi.md#vserverstatus) | **GET** /vserver/status | vServer Status abrufen
*VserverApi* | [**vserverStop**](docs/Api/VserverApi.md#vserverstop) | **POST** /vserver/stop | vServer stoppen
*VserverApi* | [**vserverTemplates**](docs/Api/VserverApi.md#vservertemplates) | **GET** /vserver/templates | Installations-Templates abrufen
*VserverApi* | [**vserverTraffic**](docs/Api/VserverApi.md#vservertraffic) | **GET** /vserver/traffic | vServer Traffic abrufen
*VserverApi* | [**vserverUpgrade**](docs/Api/VserverApi.md#vserverupgrade) | **POST** /vserver/upgrade | vServer Konfiguration ändern
*VserverApi* | [**vserverVnc**](docs/Api/VserverApi.md#vservervnc) | **GET** /vserver/vnc | VNC Konsole abrufen
*VserverbackupApi* | [**vserverBackup**](docs/Api/VserverbackupApi.md#vserverbackup) | **GET** /vserver/backup | vServer Backups abrufen
*VserverbackupApi* | [**vserverBackupAbort**](docs/Api/VserverbackupApi.md#vserverbackupabort) | **DELETE** /vserver/backup/abort | Laufendes vServer Backup abbrechen
*VserverbackupApi* | [**vserverBackupCreate**](docs/Api/VserverbackupApi.md#vserverbackupcreate) | **POST** /vserver/backup/create | vServer Backups anlegen
*VserverbackupApi* | [**vserverBackupDelete**](docs/Api/VserverbackupApi.md#vserverbackupdelete) | **DELETE** /vserver/backup/delete | vServer Backup löschen
*VserverbackupApi* | [**vserverBackupFileRestoreCheckPost**](docs/Api/VserverbackupApi.md#vserverbackupfilerestorecheckpost) | **POST** /vserver/backup/file_restore/check | 
*VserverbackupApi* | [**vserverBackupFileRestoreDownloadPost**](docs/Api/VserverbackupApi.md#vserverbackupfilerestoredownloadpost) | **POST** /vserver/backup/file_restore/download | 
*VserverbackupApi* | [**vserverBackupFileRestoreListGet**](docs/Api/VserverbackupApi.md#vserverbackupfilerestorelistget) | **GET** /vserver/backup/file_restore/list | 
*VserverbackupApi* | [**vserverBackupRestore**](docs/Api/VserverbackupApi.md#vserverbackuprestore) | **POST** /vserver/backup/restore | vServer Backup wiederherstellen
*VserverbootApi* | [**vserverBootGet**](docs/Api/VserverbootApi.md#vserverbootget) | **GET** /vserver/boot | 
*VserverbootApi* | [**vserverBootUpdatePost**](docs/Api/VserverbootApi.md#vserverbootupdatepost) | **POST** /vserver/boot/update | 
*VserverdriveApi* | [**vserverDriveCreatePost**](docs/Api/VserverdriveApi.md#vserverdrivecreatepost) | **POST** /vserver/drive/create | 
*VserverdriveApi* | [**vserverDriveDeleteDelete**](docs/Api/VserverdriveApi.md#vserverdrivedeletedelete) | **DELETE** /vserver/drive/delete | 
*VserverdriveApi* | [**vserverDriveGet**](docs/Api/VserverdriveApi.md#vserverdriveget) | **GET** /vserver/drive | 
*VserverdriveApi* | [**vserverDriveIsoDownloadPost**](docs/Api/VserverdriveApi.md#vserverdriveisodownloadpost) | **POST** /vserver/drive/iso/download | 
*VserverdriveApi* | [**vserverDriveIsoGet**](docs/Api/VserverdriveApi.md#vserverdriveisoget) | **GET** /vserver/drive/iso | 
*VserverdriveApi* | [**vserverDriveIsoMountPost**](docs/Api/VserverdriveApi.md#vserverdriveisomountpost) | **POST** /vserver/drive/iso/mount | 
*VserverdriveApi* | [**vserverDriveIsoQueryUrlGet**](docs/Api/VserverdriveApi.md#vserverdriveisoqueryurlget) | **GET** /vserver/drive/iso/query_url | 
*VserverdriveApi* | [**vserverDriveIsoShowGet**](docs/Api/VserverdriveApi.md#vserverdriveisoshowget) | **GET** /vserver/drive/iso/show | 
*VserverdriveApi* | [**vserverDriveIsoUnmountDelete**](docs/Api/VserverdriveApi.md#vserverdriveisounmountdelete) | **DELETE** /vserver/drive/iso/unmount | 
*VserverdriveApi* | [**vserverDriveShowGet**](docs/Api/VserverdriveApi.md#vserverdriveshowget) | **GET** /vserver/drive/show | 
*VserverfirewallApi* | [**vserverFirewallAssignPost**](docs/Api/VserverfirewallApi.md#vserverfirewallassignpost) | **POST** /vserver/firewall/assign | 
*VserverfirewallApi* | [**vserverFirewallGet**](docs/Api/VserverfirewallApi.md#vserverfirewallget) | **GET** /vserver/firewall | 
*VserverfirewallApi* | [**vserverFirewallUnassignDelete**](docs/Api/VserverfirewallApi.md#vserverfirewallunassigndelete) | **DELETE** /vserver/firewall/unassign | 
*VservernetworkInterfaceApi* | [**vserverNetworkInterfaceDisable**](docs/Api/VservernetworkInterfaceApi.md#vservernetworkinterfacedisable) | **DELETE** /vserver/network_interface/disable | vServer Netzwerk Interface deaktivieren
*VservernetworkInterfaceApi* | [**vserverNetworkInterfaceEnable**](docs/Api/VservernetworkInterfaceApi.md#vservernetworkinterfaceenable) | **POST** /vserver/network_interface/enable | vServer Netzwerk Interface aktivieren
*VservernetworkInterfaceApi* | [**vserverNetworkInterfaceIndex**](docs/Api/VservernetworkInterfaceApi.md#vservernetworkinterfaceindex) | **GET** /vserver/network_interface | vServer Netzwerk Interfaces abrufen
*VservernetworkInterfaceApi* | [**vserverNetworkInterfaceLimit**](docs/Api/VservernetworkInterfaceApi.md#vservernetworkinterfacelimit) | **POST** /vserver/network_interface/limit | vServer Netzwerk Interface limitieren
*VservernetworkInterfaceApi* | [**vserverNetworkInterfaceShow**](docs/Api/VservernetworkInterfaceApi.md#vservernetworkinterfaceshow) | **GET** /vserver/network_interface/show | Einzelnes vServer Netzwerk Interface abrufen
*VserverpxeActionApi* | [**vserverPxeActionAbort**](docs/Api/VserverpxeActionApi.md#vserverpxeactionabort) | **DELETE** /vserver/pxe_action/abort | vServer PXE Aktion abbrechen
*VserverpxeActionApi* | [**vserverPxeActionIndex**](docs/Api/VserverpxeActionApi.md#vserverpxeactionindex) | **GET** /vserver/pxe_action | Alle vServer PXE Aktionen abrufen
*VserverrescueApi* | [**vserverRescueDisableDelete**](docs/Api/VserverrescueApi.md#vserverrescuedisabledelete) | **DELETE** /vserver/rescue/disable | 
*VserverrescueApi* | [**vserverRescueEnablePost**](docs/Api/VserverrescueApi.md#vserverrescueenablepost) | **POST** /vserver/rescue/enable | 
*VserverrescueApi* | [**vserverRescueGet**](docs/Api/VserverrescueApi.md#vserverrescueget) | **GET** /vserver/rescue | 
*VserverrescueApi* | [**vserverRescueShowGet**](docs/Api/VserverrescueApi.md#vserverrescueshowget) | **GET** /vserver/rescue/show | 
*VserverscheduledTaskApi* | [**vserverScheduledTaskCreate**](docs/Api/VserverscheduledTaskApi.md#vserverscheduledtaskcreate) | **POST** /vserver/scheduled_task/create | Geplante Aufgabe anlegen
*VserverscheduledTaskApi* | [**vserverScheduledTaskDelete**](docs/Api/VserverscheduledTaskApi.md#vserverscheduledtaskdelete) | **DELETE** /vserver/scheduled_task/delete | Geplante Aufgabe löschen
*VserverscheduledTaskApi* | [**vserverScheduledTaskIndex**](docs/Api/VserverscheduledTaskApi.md#vserverscheduledtaskindex) | **GET** /vserver/scheduled_task | vServer geplante Aufgabe abrufen
*VservertaskApi* | [**vserverTaskAbort**](docs/Api/VservertaskApi.md#vservertaskabort) | **DELETE** /vserver/task/abort | Laufenden vServer Tasks abbrechen
*VservertaskApi* | [**vserverTaskIndex**](docs/Api/VservertaskApi.md#vservertaskindex) | **GET** /vserver/task | vServer Tasks abrufen
*VservertaskApi* | [**vserverTaskRunning**](docs/Api/VservertaskApi.md#vservertaskrunning) | **GET** /vserver/task/running | Laufende vServer Tasks abrufen
*VserverupdateManagementApi* | [**vserverUpdateManagementInstall**](docs/Api/VserverupdateManagementApi.md#vserverupdatemanagementinstall) | **POST** /vserver/update_management/install | vServer Updates installieren
*VserverupdateManagementApi* | [**vserverUpdateManagementPending**](docs/Api/VserverupdateManagementApi.md#vserverupdatemanagementpending) | **GET** /vserver/update_management/pending | vServer Updates abrufen
*WebspaceApi* | [**webspaceCreate**](docs/Api/WebspaceApi.md#webspacecreate) | **POST** /webspace/create | Neuen Webspace bestellen
*WebspaceApi* | [**webspaceIndex**](docs/Api/WebspaceApi.md#webspaceindex) | **GET** /webspace | Webspaces abrufen
*WebspaceApi* | [**webspacePackages**](docs/Api/WebspaceApi.md#webspacepackages) | **GET** /webspace/packages | Verfügbare Pakete für Webspacebestellung abrufen
*WebspaceApi* | [**webspaceSettings**](docs/Api/WebspaceApi.md#webspacesettings) | **POST** /webspace/settings | Einstellungen für Webspace ändern
*WebspaceApi* | [**webspaceShow**](docs/Api/WebspaceApi.md#webspaceshow) | **GET** /webspace/show | Einzelnen Webspace abrufen
*WebspaceApi* | [**webspaceSso**](docs/Api/WebspaceApi.md#webspacesso) | **POST** /webspace/sso | SSO Url für Webspace abrufen
*WebspaceApi* | [**webspaceUsage**](docs/Api/WebspaceApi.md#webspaceusage) | **GET** /webspace/usage | Webspace Statistiken abrufen

## Documentation For Models

 - [AbuseEvidence](docs/Model/AbuseEvidence.md)
 - [AbuseIncident](docs/Model/AbuseIncident.md)
 - [Account](docs/Model/Account.md)
 - [AccountingBalance](docs/Model/AccountingBalance.md)
 - [AccountingBalanceReservedPositions](docs/Model/AccountingBalanceReservedPositions.md)
 - [Address](docs/Model/Address.md)
 - [AddressTraffic](docs/Model/AddressTraffic.md)
 - [AddressTrafficTraffic](docs/Model/AddressTrafficTraffic.md)
 - [ApiResponse](docs/Model/ApiResponse.md)
 - [DdosAlert](docs/Model/DdosAlert.md)
 - [DedicatedServer](docs/Model/DedicatedServer.md)
 - [DnsRecord](docs/Model/DnsRecord.md)
 - [DnsZone](docs/Model/DnsZone.md)
 - [DnsZoneRecord](docs/Model/DnsZoneRecord.md)
 - [Domain](docs/Model/Domain.md)
 - [DomainDnsZone](docs/Model/DomainDnsZone.md)
 - [DomainHandle](docs/Model/DomainHandle.md)
 - [DomainKnowledgebase](docs/Model/DomainKnowledgebase.md)
 - [DomainNameserver](docs/Model/DomainNameserver.md)
 - [DomainPrice](docs/Model/DomainPrice.md)
 - [DomainPriceCsv](docs/Model/DomainPriceCsv.md)
 - [DomainPricePromotion](docs/Model/DomainPricePromotion.md)
 - [DomainTask](docs/Model/DomainTask.md)
 - [Invoice](docs/Model/Invoice.md)
 - [NetworkFirewall](docs/Model/NetworkFirewall.md)
 - [NetworkFirewallRule](docs/Model/NetworkFirewallRule.md)
 - [News](docs/Model/News.md)
 - [Pdu](docs/Model/Pdu.md)
 - [PduCurrentUsage](docs/Model/PduCurrentUsage.md)
 - [PduUsage](docs/Model/PduUsage.md)
 - [PleskLicense](docs/Model/PleskLicense.md)
 - [PleskLicenseAdditionalKey](docs/Model/PleskLicenseAdditionalKey.md)
 - [PleskLicenseAddon](docs/Model/PleskLicenseAddon.md)
 - [PleskLicenseFrauds](docs/Model/PleskLicenseFrauds.md)
 - [PleskLicensePrice](docs/Model/PleskLicensePrice.md)
 - [PleskLicensePriceCsv](docs/Model/PleskLicensePriceCsv.md)
 - [PleskLicenseStatistic](docs/Model/PleskLicenseStatistic.md)
 - [PleskLicenseType](docs/Model/PleskLicenseType.md)
 - [PleskLicenseUpgrade](docs/Model/PleskLicenseUpgrade.md)
 - [PxeAction](docs/Model/PxeAction.md)
 - [PxeTemplate](docs/Model/PxeTemplate.md)
 - [QueryUrlMetadata](docs/Model/QueryUrlMetadata.md)
 - [ScheduledTask](docs/Model/ScheduledTask.md)
 - [SshKey](docs/Model/SshKey.md)
 - [SsoHash](docs/Model/SsoHash.md)
 - [TeamspeakInstance](docs/Model/TeamspeakInstance.md)
 - [Transaction](docs/Model/Transaction.md)
 - [Vlan](docs/Model/Vlan.md)
 - [VlanTrafficTimeseries](docs/Model/VlanTrafficTimeseries.md)
 - [VlanTrafficTimeseriesIn](docs/Model/VlanTrafficTimeseriesIn.md)
 - [VlanTrafficUsage](docs/Model/VlanTrafficUsage.md)
 - [VlanTrafficUsage95Percentage](docs/Model/VlanTrafficUsage95Percentage.md)
 - [Vserver](docs/Model/Vserver.md)
 - [VserverBackup](docs/Model/VserverBackup.md)
 - [VserverBackupFileRestore](docs/Model/VserverBackupFileRestore.md)
 - [VserverBackupFileRestoreList](docs/Model/VserverBackupFileRestoreList.md)
 - [VserverBoot](docs/Model/VserverBoot.md)
 - [VserverBootAvailableOptions](docs/Model/VserverBootAvailableOptions.md)
 - [VserverDrive](docs/Model/VserverDrive.md)
 - [VserverDriveIso](docs/Model/VserverDriveIso.md)
 - [VserverNetworkInterface](docs/Model/VserverNetworkInterface.md)
 - [VserverRescueImage](docs/Model/VserverRescueImage.md)
 - [VserverStatus](docs/Model/VserverStatus.md)
 - [VserverTask](docs/Model/VserverTask.md)
 - [VserverTraffic](docs/Model/VserverTraffic.md)
 - [Webspace](docs/Model/Webspace.md)
 - [WebspacePackage](docs/Model/WebspacePackage.md)
 - [WebspaceSso](docs/Model/WebspaceSso.md)
 - [WebspaceUsage](docs/Model/WebspaceUsage.md)
 - [WebspaceUsageLimits](docs/Model/WebspaceUsageLimits.md)
 - [WebspaceUsageUsage](docs/Model/WebspaceUsageUsage.md)

## Documentation For Authorization


## api_token

- **Type**: HTTP bearer authentication


## Author



