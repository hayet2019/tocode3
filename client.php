<?php
require_once('C:\Program Files\Ampps\www\nusoap\lib\nusoap.php');
$wsdl = "http://webservices.oorsprong.org/websamples.countryinfo/CountryInfoService.wso?WSDL";


$client = new nusoap_client($wsdl, 'wsdl');
$err = $client->getError();
if ($err) {
   echo '<h2>L\'erreur est :</h2>' . $err;
   exit();
}

$result=$client->call('CapitalCity', array('sCountryISOCode'=>'TN'));

print_r($result).'\n';
?>
