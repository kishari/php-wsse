<?php

function buildData() {
		
	// PARTNERS
	$tSzerzodo = array(//{{{
		'roleType'=>2,
		'partnerType'=>'',
		'beforeTitle'=>'',
		'name'=>'',
		'firstName'=>'',
		'middleName'=>'',
		'afterTitle'=>'',
		'birthName'=>'',
		'birthFirstName'=>'',
		'mothersName'=>'',
		'mothersFirstName'=>'',
		'shortName'=>'',
		'placeOfBirth'=>'',
		'dateOfBirth'=>'',
		'gender'=>'',
		'vatNumber'=>'',
		'taxId'=>'',
		'bankAccountNumber'=>'',
		'contactName'=>'',
		'addresses'=>array('WsTypoAddress'=>array(
				array(
					'addressType'=>1,
					'postcode'=>'',
					'town'=>'',
					'street'=>'',
					'housenumber'=>''
				),
				array(
					'addressType'=>3,
					'postcode'=>'',
					'town'=>'',
					'street'=>'',
					'housenumber'=>''
				)
		)),
		'phones'=>array('WsTypoPhone'=>
			array(
				'phoneType'=>'',
				'phoneNumber'=>'',
				'defaultPhone'=>'1',
				'defaultSms'=>'1'
				
			)
		),
		'emails'=>array('WsTypoEmail'=>
			array(
				'emailType'=>'O',
				'emailAddress'=>'',
				'defaultEmail'=>'1'
				
			)
		)
	);//}}}
	$tTulajdonos = $tSzerzodo;
	$tTulajdonos['roleType']=25;
	$tUzembentarto = $tSzerzodo;
	$tUzembentarto['roleType']=26;;
	$tBiztositott = $tSzerzodo;
	$tBiztositott['roleType'] = 3;
	$tDijfizeto = $tSzerzodo;
	$tDijfizeto['roleType'] = 5;

	$tPartners = array($tSzerzodo,$tBiztositott,$tTulajdonos,$tUzembentarto,$tDijfizeto);

	$tVehicle = array(
		'registrationNumber'=>'',
		'carriageNo'=>'',
		'carDocumentNumber'=>'',
		'vehicleKind'=>'',
		'vehicleProduct'=>'',
		'vehicleType'=>'',
		'mass'=>'',
		'power'=>'',
		'vehicleCharacter'=>'',
		'trafficFromDate'=>'',
		'yearOfProduction'=>'',
		'numberOfPersons'=>'',
		'cubicCapacity'=>'',
		'capacity'=>'',
		'fuel'=>'',
		'colour'=>'',
	);
	
	$tExtCovers = array();
	
	$tData = array(
		'policyRef'=>'',
		'carBusinessType'=>'',
		'termStartDate'=>'',
		'bonusMalus'=>'',
		'methodOfPayment'=>'',
		'bookingFrequency'=>'',
		'greenCard'=>'',
		'expertResult'=>'',
		'agentRole'=>'',
		'producerRole'=>'',
		'partners'=>array('WsTypoPartner'=>$tPartners),
		'vehicle'=>$tVehicle,
		'extCovers'=>$tExtCovers,
		'modFactors'=>array('WsTypoModFactor'=>$tModFactors),
		'previousInsType'=>'',
		'previousInsurer'=>'',
		'previousRegNr'=>'',
		'previousCarriageNo'=>'',
		'previousPolRef'=>'',
		'previousDelReason'=>'',
		'previousDelDate'=>'',
		'previousBonusFrom'=>'',
		'previousBonusMalus'=>'',
		'dateOfSale'=>'',
		'dnfDeclaration'=>''
		
	);
	return $tData;
}

require('WSSoapClient.php');

try {
	$oWS = new WSSoapClient('DETValidAddQuoteAutoGFB.wsdl',array(
		'trace'=>1,
		'cache_wsdl'=>0
	));
	$tData = buildData();
	$sDate = date("Y-m-d\TH:i:s");
	$sPlace = "Budapest";
	$sTransaction = "ONLY_VALID"; // vagy ADD_NEW_QUOTE
	// WS-SEC SOAP hívás
	$out = $oWS->__soapCall('service',array('parameters'=>array('broker'=>$tData,'signatureDate'=>$sDate,'signaturePlace'=>$sPlace,'transaction'=>$sTransaction)));
	print_r($out);
} catch (SoapFault $fault) {
	// valami gond van
	print_r($fault);
}

?>