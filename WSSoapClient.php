<?php

require('types/soap-wsa.php');
require('types/soap-wsse.php');
require('types/IdGenerator.php');
//require('types/model-types.php');

define('PRIVATE_KEY', 'private.pem');
define('PRIVATE_KEY_PASSWORD', 'passwordToPrivateKey');

class WSSoapClient extends SoapClient {
	
   function __doRequest($request, $location, $saction, $version) {
    $doc = new DOMDocument('1.0');
    $doc->loadXML($request);
    print_r($request);

    $objIdGenerator = new IdGenerator($doc);
    $objIdGenerator->generate();

    $objWSSE = new WSSESoap($doc);

    /* add Timestamp with no expiration timestamp */
     //$objWSSE->addTimestamp();

    /* create new XMLSec Key using RSA SHA-1 and type is private key */
    $objKey = new XMLSecurityKey(XMLSecurityKey::RSA_SHA1, array('type'=>'private'));
    $objKey->passphrase = PRIVATE_KEY_PASSWORD;
    
    /* load the private key from file - last arg is bool if key in file (TRUE) or is string (FALSE) */
    $objKey->loadKey(PRIVATE_KEY, TRUE);
    

    /* Sign the message - also signs appropraite WS-Security items */
    $objWSSE->signSoapDoc($objKey);

    /* Add certificate (BinarySecurityToken) to the message and attach pointer to Signature */   

    $pem_file_content = file_get_contents(PRIVATE_KEY);
    $token = $objWSSE->addBinaryToken($pem_file_content);

    $objWSSE->attachTokentoSig($token);
    
    $request = $objWSSE->saveXML();

    print_r("---------------------request after sign------------------------------------------\n\n\n");
    print_r($request);
    print_r("\n\n------------------------------------------------------\n");
    return parent::__doRequest($request, $location, $saction, $version);
   }

}


?>