<?php
$config = array(
'autenticador_miIdp' => array(
'saml:SP',
'idp' => 'http://192.168.56.201/simplesaml/saml2/idp/metadata.php',
'certificate' => 'server.crt',
'privatekey' => 'server.key',
'discoURL' => null,
'entityID' => 'miSP',
// All communications are encrypted and signed
/*
'redirect.sign' => TRUE,
'redirect.validate' => TRUE,
'assertion.encryption' => TRUE,
*/
'OgnizationName' => array (
'en' => 'Example organization',
'es' => 'Organizacion de ejemplo',
),
'OrganizationDisplayName' => array (
'en' => 'Example organization',
'es' => 'Organizacion de ejemplo',
),
/*
'OrganizationURL' => array (
'en' => 'http://sp.example.com',
'es' => 'http://sp.example.com',
),*/
),
);
?>
