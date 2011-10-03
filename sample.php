<?php

function buildData() {
	return $tData;
}

require('WSSoapClient.php');
require('types/motor.php');
require('types/home.php');

try {
        $oWS = new WSSoapClient('wsdl/home.wsdl',array(
            'trace'=>TRUE
            ,'cache_wsdl'=>0
            ,'location' => 'http://localhost:25902/SalesML/home'
	));
        
        $header = new Model\Types\header();
        $header->version = '1.0';
        $header->language = 'HU';
        $header->agentNumber = '0';
        $header->messageNumber = '0001';

        $general = new Model\Types\generalIdentified();

        $partnerList = new Model\Types\partnerListIdentified();
        $partner_1 = new Model\Types\partnerIdentified();
        $partner_1->firstname = 'Kovács';

        $partner_2 = new Model\Types\partnerIdentified();
        $partner_2->firstname = 'Tóth';
        
        $partnerList->partners[] = $partner_1;
        $partnerList->partners[] = $partner_2;

        $homeList = new Model\Home\homeListIdentified();
        
        $calculationRequest = new Model\Home\calculationRequest();

        $calculationRequest->header=$header;
        $calculationRequest->general=$general;
        $calculationRequest->partnerList=$partnerList;
        $calculationRequest->homeList=$homeList;
        
       
        // WS-SEC SOAP hivas
        $request = $calculationRequest->getAsSOAP();
        //print_r($request);

        $out = $oWS->__soapCall('calculation',array('parameters'=>$request));

        print_r($out);
} catch (SoapFault $fault) {
	// valami gond van
	print_r($fault);
}

?>