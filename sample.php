<?php

function buildData() {
	return $tData;
}

require('WSSoapClient.php');
require('types/motor.php');
require('types/home.php');

try {
        $oWS = new WSSoapClient('wsdl/motor.wsdl',array(
            'trace'=>TRUE
            ,'cache_wsdl'=>0
            ,'location' => 'http://localhost:25902/SalesML/motor'
	));
        
        $header = new header();          
        $header->version = '1.0';
        $header->language = 'HU';
        $header->agentNumber = '0';
        $header->messageNumber = '0001';

        $sign = new signContainerIdentified();
        $sign->proposalNumber = '100';

        $signRequest = new signRequest();
        $signRequest->header=$header;
        $signRequest->sign=$sign;
        
       
        // WS-SEC SOAP hivas
        $request = $signRequest->getAsSOAP();       
        //print_r($request);

        $out = $oWS->__soapCall('sign',array('parameters'=>$request));

        print_r($out);
} catch (SoapFault $fault) {
	// valami gond van
	print_r($fault);
}

?>