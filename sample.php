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

        $general->product = 'SACH';
        $general->beginDate = '2011-10-30';
        $general->bookingFrequency = '50';
        $general->paymentMethod = '0';
        $general->changeReason = '01';
        $general->valuta = 'HUF';

        $partnerList = new Model\Types\partnerListIdentified();
        $partner_1 = new Model\Types\partnerIdentified();
        $partner_1->partnerEntity = '61';
        $partner_1->partnerLiability = 'VN';
        $partner_1->firstname = 'Elek';
        $partner_1->lastname = 'Teszt';
        $partner_1->gender = 'M';
        $partner_1->birthDate = '1980-01-01';
        $partner_1->birthname = 'Született Mihály';
        $partner_1->mothersname = 'Anyám neve';
        $partner_1->birthplace = 'Nagyvároly';
        $partner_1->citizenship = 'H';
        $partner_1->phoneMobil = '06201234567';
        $partner_1->zip = '1111';

        $addressList = new Model\Types\addressListIdentified();
        $address = new Model\Types\addressIdentified();

        $address->addressType = 'H';
        $address->streetHouse = 'Tár utca 12';
        $address->zip = '1111';
        $address->city = 'Budapest';
        $address->country = 'H';
        $addressList->addresses[] = $address;

        $partner_1->addressList=$addressList;

        $partner_2 = new Model\Types\partnerIdentified();
        $partner_2->partnerEntity = '61';
        $partner_2->partnerLiability = 'VP';
        $partner_2->firstname = 'Bálint';
        $partner_2->lastname = 'Biztosított';
        $partner_2->gender = 'M';
        $partner_2->birthDate = '1967-01-01';
        $partner_2->birthname = 'Kisgyerek Gergő';
        $partner_2->mothersname = 'Anyám neve 2';
        $partner_2->birthplace = 'Kisvárda';
        $partner_2->citizenship = 'H';
        $partner_2->phoneMobil = '06201232233';
        $partner_2->zip = '2626';

        $addressList_2 = new Model\Types\addressListIdentified();
        $address_2 = new Model\Types\addressIdentified();

        $address_2->addressType = 'H';
        $address_2->streetHouse = 'Imre kör 123';
        $address_2->zip = '1111';
        $address_2->city = 'Budapest';
        $address_2->country = 'H';
        $addressList_2->addresses[] = $address_2;

        $partner_2->addressList=$addressList_2;
        
        $partnerList->partners[] = $partner_1;
        $partnerList->partners[] = $partner_2;

        $homeList = new Model\Home\homeListIdentified();
        
        $propRequest = new Model\Home\proposalRequest();

        $propRequest->header=$header;
        $propRequest->general=$general;
        $propRequest->partnerList=$partnerList;
        $propRequest->homeList=$homeList;
        
       
        $request = $propRequest->getAsSOAP();
        //print_r($request);

        $out = $oWS->__soapCall('proposal',array('parameters'=>$request));

        print_r($out);
} catch (SoapFault $fault) {
	// valami gond van
	print_r($fault);
}

?>