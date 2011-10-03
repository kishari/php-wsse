<?php

define("ns_type", "http://i3s.inverso.de/mkb/sales/tool/model/type");
define("ns_model", "http://i3s.inverso.de/mkb/sales/tool/model/model");

if (!class_exists("header")) {
    
    class header {
        /**
	 * @var version
	 */
	public $version;
	/**
	 * @var language
	 */
	public $language;
	/**
	 * @var natural1x11
	 */
	public $agentNumber;
	/**
	 * @var natural1x11
	 */
	public $subAgentNumber;
	/**
	 * @var string1x30
	 */
	public $signature;
	/**
	 * @var messageNumber
	 */
	public $messageNumber;
	/**
	 * @var dateTime
	 */
	public $timestamp;

        public function getAsSOAP() {
            $r = array();
            $s = array('_' => 'x', 'id' => '001');
            if (!is_null($this->version))
                $r['version'] = $this->version->getAsSOAP();

            if (isset ($this->language))
                $r['language'] = new SoapVar($this->language, XSD_TOKEN, null, null, null, ns_type);

            if (isset ($this->agentNumber))
                $r['agentNumber'] = new SoapVar($this->agentNumber, XSD_TOKEN, null, null, null, ns_type);

            if (isset ($this->subAgentNumber))
                $r['subAgentNumber'] = new SoapVar($this->subAgentNumber, XSD_TOKEN, null, null, null, ns_type);

            if (isset ($this->signature))
                $r['signature'] = new SoapVar($this->signature, XSD_NORMALIZEDSTRING, null, null, null, ns_type);

            if (isset ($this->messageNumber))
                $r['messageNumber'] = new SoapVar($this->messageNumber, XSD_TOKEN, null, null, null, ns_type);

            $r['timestamp'] = new SoapVar($this->timestamp, XSD_DATETIME, null, null, null, ns_type);

            return $r;
        }
    }
}

if (!class_exists("calculationRequest")) {

    class calculationRequest {
	/**
	 * @var header
	 */
	public $header;
	/**
	 * @var generalIdentified
	 */
	public $general;
	/**
	 * @var partnerListIdentified
	 */
	public $partnerList;
	/**
	 * @var motorIdentified
	 */
	public $motor;

        public function getAsSOAP() {
            $r = array (
                'header' => new SoapVar($this->header->getAsSOAP(), SOAP_ENC_OBJECT, null, null, null, ns_type)
                ,'general' => new SoapVar($this->general->getAsSOAP(), SOAP_ENC_OBJECT, null, null, null, ns_type)
                ,'partnerList' => new SoapVar($this->partnerList->getAsSOAP(), SOAP_ENC_OBJECT, null, null, null, ns_type)
                ,'motor' => new SoapVar($this->motor->getAsSOAP(), SOAP_ENC_OBJECT, null, null, null, ns_type)
            );

            return $r;
        }
    }
}
if (!class_exists("calculationResponse")) {

    class calculationResponse {
	/**
	 * @var header
	 */
	public $header;
	/**
	 * @var generalIdentified
	 */
	public $general;
	/**
	 * @var partnerListIdentified
	 */
	public $partnerList;
	/**
	 * @var motorIdentified
	 */
	public $motor;
	/**
	 * @var result
	 */
	public $result;
	/**
	 * @var errorList
	 */
	public $errorList;
    }
}

if (!class_exists("signContainerIdentified")) {

    class signContainerIdentified {

	public $proposalNumber;
	public $contractNumber;

        public function getAsSOAP() {
            $r = array();

            if (isset ($this->proposalNumber))
                $r['proposalNumber'] = new SoapVar($this->proposalNumber, XSD_TOKEN, null, null, null, ns_type);

            if (isset ($this->contractNumber))
                $r['contractNumber'] = new SoapVar($this->contractNumber, XSD_TOKEN, null, null, null, ns_type);

            return $r;
        }
    }
}

if (!class_exists("signRequest")) {

    class signRequest {
	/**
	 * @var header
	 */
	public $header;
	/**
	 * @var signContainerIdentified
	 */
	public $sign;

        public function getAsSOAP() {
            $r = array (
                'header' => new SoapVar($this->header->getAsSOAP(), SOAP_ENC_OBJECT, null, null, null, ns_type)
                ,'sign' => new SoapVar($this->sign->getAsSOAP(), SOAP_ENC_OBJECT, null, null, null, ns_type)
            );

            return $r;
        }

    }
}

if (!class_exists("signResponse")) {

    class signResponse {
	/**
	 * @var header
	 */
	public $header;
	/**
	 * @var signContainerIdentified
	 */
	public $sign;
	/**
	 * @var errorList
	 */
	public $errorList;
    }
}

if (!class_exists("generalIdentified")) {

    class generalIdentified {
	/**
	 * @var productIdentified
	 */
	public $product;
	/**
	 * @var dateIdentified
	 */
	public $beginDate;
	/**
	 * @var dateIdentified
	 */
	public $mainDue;
	/**
	 * @var bookingFrequencyIdentified
	 */
	public $bookingFrequency;
	/**
	 * @var paymentMethodIdentified
	 */
	public $paymentMethod;
	/**
	 * @var valutaIdentified
	 */
	public $valuta;
	/**
	 * @var changeReasonIdentified
	 */
	public $changeReason;
	/**
	 * @var natural7x9Identified
	 */
	public $proposalNumber;
	/**
	 * @var dateIdentified
	 */
	public $duration;
	/**
	 * @var natural1x11Identified
	 */
	public $prepayment;
	/**
	 * @var string1x70Identified
	 */
	public $dataRealityDecl;
	/**
	 * @var string1x70Identified
	 */
	public $conditionAprovalDecl;
	/**	 
	 * @var string1x70Identified
	 */
	public $dataHandlingDecl;
	/**
	 * @var string1x70Identified
	 */
	public $eMailDecl;
    }
}






if (!class_exists("allowance")) {
/**
 * allowance
 */
class allowance {
}}

if (!class_exists("bonusMalus")) {
/**
 * bonusMalus
 */
class bonusMalus {
}}

if (!class_exists("deductibleCode")) {
/**
 * deductibleCode
 */
class deductibleCode {
}}

if (!class_exists("engine")) {
/**
 * engine
 */
class engine {
}}

if (!class_exists("eurotax")) {
/**
 * eurotax
 */
class eurotax {
}}

if (!class_exists("extraEquipment")) {
/**
 * extraEquipment
 */
class extraEquipment {
}}

if (!class_exists("financing")) {
/**
 * financing
 */
class financing {
}}

if (!class_exists("protectionDevice")) {
/**
 * protectionDevice
 */
class protectionDevice {
}}

if (!class_exists("registrationNumber")) {
/**
 * registrationNumber
 */
class registrationNumber {
}}

if (!class_exists("vehicleType")) {
/**
 * vehicleType
 */
class vehicleType {
}}

if (!class_exists("vehicleUsage")) {
/**
 * vehicleUsage
 */
class vehicleUsage {
}}

if (!class_exists("vehicleVendor")) {
/**
 * vehicleVendor
 */
class vehicleVendor {
}}

if (!class_exists("vin")) {
/**
 * vin
 */
class vin {
}}

if (!class_exists("allowanceIdentified")) {
/**
 * allowanceIdentified
 */
class allowanceIdentified extends allowance {
}}

if (!class_exists("bmCheckMsgListIdentified")) {
/**
 * bmCheckMsgListIdentified
 */
class bmCheckMsgListIdentified {
	/**
	 * @access public
	 * @var string1x70Identified
	 */
	public $bmCheckMsg;
}}

if (!class_exists("bmMessageList")) {
/**
 * bmMessageList
 */
class bmMessageList {
	/**
	 * @access public
	 * @var bmMessage[]
	 */
	public $bmMessage;
}}

if (!class_exists("bmMessage")) {
/**
 * bmMessage
 */
class bmMessage {
	/**
	 * @access public
	 * @var nstseverity
	 */
	public $severity;
	/**
	 * @access public
	 * @var nststring1x200
	 */
	public $description;
	/**
	 * @access public
	 * @var nststring1x200
	 */
	public $oldValue;
	/**
	 * @access public
	 * @var nststring1x200
	 */
	public $newValue;
	/**
	 * @access public
	 * @var nststring1x70
	 */
	public $fieldCode;
}}

if (!class_exists("bonusMalusIdentified")) {
/**
 * bonusMalusIdentified
 */
class bonusMalusIdentified extends bonusMalus {
}}





if (!class_exists("mtplExtIdentified")) {
/**
 * mtplExtIdentified
 */
class mtplExtIdentified {
	/**
	 * @access public
	 * @var string1x70Identified
	 */
	public $bonusMalusDecl;
	/**
	 * @access public
	 * @var string1x70Identified
	 */
	public $prevInsCode;
	/**
	 * @access public
	 * @var string1x70Identified
	 */
	public $prevInsNummer;
	/**
	 * @access public
	 * @var dateIdentified
	 */
	public $prevInsBeginDate;
	/**
	 * @access public
	 * @var dateIdentified
	 */
	public $prevMainAnniversaryHfDate;
	/**
	 * @access public
	 * @var dateIdentified
	 */
	public $prevInsEndDate;
	/**
	 * @access public
	 * @var string1x70Identified
	 */
	public $prevInsPlateNumber;
	/**
	 * @access public
	 * @var string1x70Identified
	 */
	public $prevInsTermReason;
	/**
	 * @access public
	 * @var string1x70Identified
	 */
	public $prevInsBmClass;
	/**
	 * @access public
	 * @var natural1x11Identified
	 */
	public $mabiszFee;
	/**
	 * @access public
	 * @var natural1x11Identified
	 */
	public $mabiszFeeBrutto;
	/**
	 * @access public
	 * @var dateIdentified
	 */
	public $mabiszFeeStartDate;
	/**
	 * @access public
	 * @var dateIdentified
	 */
	public $mabiszFeeEndDate;
}}

if (!class_exists("coverageIdentified")) {
/**
 * coverageIdentified
 */
class coverageIdentified {
	/**
	 * @access public
	 * @var coverageTypeIdentified
	 */
	public $coverageType;
	/**
	 * @access public
	 * @var deductibleCodeIdentified
	 */
	public $deductibleCode;
	/**
	 * @access public
	 * @var allowanceIdentified
	 */
	public $allowance;
	/**
	 * @access public
	 * @var bonusMalusIdentified
	 */
	public $bonusMalus;
}}

if (!class_exists("coverageListIdentified")) {
/**
 * coverageListIdentified
 */
class coverageListIdentified {
	/**
	 * @access public
	 * @var coverageIdentified[]
	 */
	public $coverage;
	/**
	 * @access public
	 * @var mtplExtIdentified
	 */
	public $mtplExt;
}}

if (!class_exists("deductibleCodeIdentified")) {
/**
 * deductibleCodeIdentified
 */
class deductibleCodeIdentified extends deductibleCode {
}}

if (!class_exists("engineIdentified")) {
/**
 * engineIdentified
 */
class engineIdentified extends engine {
}}

if (!class_exists("eurotaxIdentified")) {
/**
 * eurotaxIdentified
 */
class eurotaxIdentified extends eurotax {
}}

if (!class_exists("extraEquipmentIdentified")) {
/**
 * extraEquipmentIdentified
 */
class extraEquipmentIdentified extends extraEquipment {
}}

if (!class_exists("extraEquipmentListIdentified")) {
/**
 * extraEquipmentListIdentified
 */
class extraEquipmentListIdentified {
	/**
	 * @access public
	 * @var extraEquipmentIdentified
	 */
	public $extraEquipment;
}}

if (!class_exists("financingIdentified")) {
/**
 * financingIdentified
 */
class financingIdentified extends financing {
}}

if (!class_exists("motorIdentified")) {
/**
 * motorIdentified
 */
class motorIdentified {
	/**
	 * @access public
	 * @var natural4Identified
	 */
	public $licenceYear;
	/**
	 * @access public
	 * @var vehicleTypeIdentified
	 */
	public $vehicleType;
	/**
	 * @access public
	 * @var vehicleVendorIdentified
	 */
	public $vehicleVendor;
	/**
	 * @access public
	 * @var eurotaxIdentified
	 */
	public $eurotax;
	/**
	 * @access public
	 * @var detailedModelCodeIdentified
	 */
	public $detailedModelCode;
	/**
	 * @access public
	 * @var engineIdentified
	 */
	public $engine;
	/**
	 * @access public
	 * @var natural1x5Identified
	 */
	public $power;
	/**
	 * @access public
	 * @var natural1x5Identified
	 */
	public $cubicCapacity;
	/**
	 * @access public
	 * @var natural1x5Identified
	 */
	public $totalWeight;
	/**
	 * @access public
	 * @var natural1x5Identified
	 */
	public $payload;
	/**
	 * @access public
	 * @var vehicleUsageIdentified
	 */
	public $vehicleUsage;
	/**
	 * @access public
	 * @var natural4Identified
	 */
	public $zip;
	/**
	 * @access public
	 * @var dateIdentified
	 */
	public $productionDate;
	/**
	 * @access public
	 * @var falseTrueIdentified
	 */
	public $driverGroup;
	/**
	 * @access public
	 * @var natural1x15Identified
	 */
	public $vehicleValueNew;
	/**
	 * @access public
	 * @var natural1x3Identified
	 */
	public $seats;
	/**
	 * @access public
	 * @var registrationNumberIdentified
	 */
	public $registrationNumber;
	/**
	 * @access public
	 * @var dateIdentified
	 */
	public $dateOfOwnership;
	/**
	 * @access public
	 * @var dateIdentified
	 */
	public $insuredRegistration;
	/**
	 * @access public
	 * @var vinIdentified
	 */
	public $vin;
	/**
	 * @access public
	 * @var financingIdentified
	 */
	public $financing;
	/**
	 * @access public
	 * @var loanCreditorIdentified
	 */
	public $loanCreditor;
	/**
	 * @access public
	 * @var loanNumberIdentified
	 */
	public $loanNumber;
	/**
	 * @access public
	 * @var natural1x11Identified
	 */
	public $loanAmount;
	/**
	 * @access public
	 * @var dateIdentified
	 */
	public $loanStartDate;
	/**
	 * @access public
	 * @var dateIdentified
	 */
	public $loanEndDate;
	/**
	 * @access public
	 * @var natural1x11Identified
	 */
	public $loanInitialRate;
	/**
	 * @access public
	 * @var string1x70Identified
	 */
	public $bmCheckFlag;
	/**
	 * @access public
	 * @var bmMessageList
	 */
	public $bmMessageList;
	/**
	 * @access public
	 * @var bmCheckMsgListIdentified
	 */
	public $bmCheckMsgList;
	/**
	 * @access public
	 * @var extraEquipmentListIdentified
	 */
	public $extraEquipmentList;
	/**
	 * @access public
	 * @var protectionKeysCardsListIdentified
	 */
	public $protectionKeysCardsList;
	/**
	 * @access public
	 * @var protectionDeviceListIdentified
	 */
	public $protectionDeviceList;
	/**
	 * @access public
	 * @var string1x70Identified
	 */
	public $preDamages;
	/**
	 * @access public
	 * @var coverageListIdentified
	 */
	public $coverageList;
}}

if (!class_exists("proposalRequest")) {
/**
 * proposalRequest
 */
class proposalRequest {
	/**
	 * @access public
	 * @var header
	 */
	public $header;
	/**
	 * @access public
	 * @var generalIdentified
	 */
	public $general;
	/**
	 * @access public
	 * @var partnerListIdentified
	 */
	public $partnerList;
	/**
	 * @access public
	 * @var motorIdentified
	 */
	public $motor;
}}

if (!class_exists("proposalResponse")) {
/**
 * proposalResponse
 */
class proposalResponse {
	/**
	 * @access public
	 * @var header
	 */
	public $header;
	/**
	 * @access public
	 * @var generalIdentified
	 */
	public $general;
	/**
	 * @access public
	 * @var partnerListIdentified
	 */
	public $partnerList;
	/**
	 * @access public
	 * @var motorIdentified
	 */
	public $motor;
	/**
	 * @access public
	 * @var result
	 */
	public $result;
	/**
	 * @access public
	 * @var errorList
	 */
	public $errorList;
}}

if (!class_exists("protectionDeviceIdentified")) {
/**
 * protectionDeviceIdentified
 */
class protectionDeviceIdentified extends protectionDevice {
}}

if (!class_exists("protectionDeviceListIdentified")) {
/**
 * protectionDeviceListIdentified
 */
class protectionDeviceListIdentified {
	/**
	 * @access public
	 * @var protectionDeviceIdentified
	 */
	public $protectionDevice;
}}

if (!class_exists("protectionKeysCardsListIdentified")) {
/**
 * protectionKeysCardsListIdentified
 */
class protectionKeysCardsListIdentified {
	/**
	 * @access public
	 * @var string1x10Identified
	 */
	public $protectionKeysCards;
}}

if (!class_exists("registrationNumberIdentified")) {
/**
 * registrationNumberIdentified
 */
class registrationNumberIdentified extends registrationNumber {
}}

if (!class_exists("vehicleTypeIdentified")) {
/**
 * vehicleTypeIdentified
 */
class vehicleTypeIdentified extends vehicleType {
}}

if (!class_exists("vehicleUsageIdentified")) {
/**
 * vehicleUsageIdentified
 */
class vehicleUsageIdentified extends vehicleUsage {
}}

if (!class_exists("vehicleVendorIdentified")) {
/**
 * vehicleVendorIdentified
 */
class vehicleVendorIdentified extends vehicleVendor {
}}

if (!class_exists("vinIdentified")) {
/**
 * vinIdentified
 */
class vinIdentified extends vin {
}}

if (!class_exists("addressType")) {
/**
 * addressType
 */
class addressType {
}}

if (!class_exists("bankAccount")) {
/**
 * bankAccount
 */
class bankAccount {
}}

if (!class_exists("bookingFrequency")) {
/**
 * bookingFrequency
 */
class bookingFrequency {
}}

if (!class_exists("boolean")) {
/**
 * boolean
 */
class boolean {
}}

if (!class_exists("changeReason")) {
/**
 * changeReason
 */
class changeReason {
}}

if (!class_exists("clause")) {
/**
 * clause
 */
class clause {
}}

if (!class_exists("contractNumber")) {
/**
 * contractNumber
 */
class contractNumber {
}}

if (!class_exists("countryCode")) {
/**
 * countryCode
 */
class countryCode {
}}

if (!class_exists("coverageType")) {
/**
 * coverageType
 */
class coverageType {
}}

if (!class_exists("email")) {
/**
 * email
 */
class email {
}}

if (!class_exists("errorCode")) {
/**
 * errorCode
 */
class errorCode {
}}

if (!class_exists("falseTrue")) {
/**
 * falseTrue
 */
class falseTrue {
}}

if (!class_exists("gender")) {
/**
 * gender
 */
class gender {
}}

if (!class_exists("language")) {
/**
 * language
 */
class language {
}}

if (!class_exists("severity")) {
/**
 * severity
 */
class severity {
}}

if (!class_exists("loanCreditor")) {
/**
 * loanCreditor
 */
class loanCreditor {
}}

if (!class_exists("loanNumber")) {
/**
 * loanNumber
 */
class loanNumber {
}}

if (!class_exists("messageNumber")) {
/**
 * messageNumber
 */
class messageNumber {
}}

if (!class_exists("natural1x11")) {
/**
 * natural1x11
 */
class natural1x11 {
}}

if (!class_exists("natural1x15")) {
/**
 * natural1x15
 */
class natural1x15 {
}}

if (!class_exists("natural1x3")) {
/**
 * natural1x3
 */
class natural1x3 {
}}

if (!class_exists("natural1x5")) {
/**
 * natural1x5
 */
class natural1x5 {
}}

if (!class_exists("natural4")) {
/**
 * natural4
 */
class natural4 {
}}

if (!class_exists("natural7x9")) {
/**
 * natural7x9
 */
class natural7x9 {
}}

if (!class_exists("partnerEntity")) {
/**
 * partnerEntity
 */
class partnerEntity {
}}

if (!class_exists("partnerLiability")) {
/**
 * partnerLiability
 */
class partnerLiability {
}}

if (!class_exists("paymentMethod")) {
/**
 * paymentMethod
 */
class paymentMethod {
}}

if (!class_exists("phone")) {
/**
 * phone
 */
class phone {
}}

if (!class_exists("postRecipientAddressId")) {
/**
 * postRecipientAddressId
 */
class postRecipientAddressId {
}}

if (!class_exists("printContainerIdentified")) {
/**
 * printContainerIdentified
 */
class printContainerIdentified {
	/**
	 * @access public
	 * @var natural7x9Identified
	 */
	public $proposalNumber;
	/**
	 * @access public
	 * @var reportNumberIdentified
	 */
	public $reportNumber;
	/**
	 * @access public
	 * @var base64Binary
	 */
	public $printData;
}}

if (!class_exists("printRequest")) {
/**
 * printRequest
 */
class printRequest {
	/**
	 * @access public
	 * @var header
	 */
	public $header;
	/**
	 * @access public
	 * @var printContainerIdentified
	 */
	public $print;
}}

if (!class_exists("printResponse")) {
/**
 * printResponse
 */
class printResponse {
	/**
	 * @access public
	 * @var header
	 */
	public $header;
	/**
	 * @access public
	 * @var printContainerIdentified
	 */
	public $print;
	/**
	 * @access public
	 * @var errorList
	 */
	public $errorList;
}}

if (!class_exists("product")) {
/**
 * product
 */
class product {
}}

if (!class_exists("reportNumber")) {
/**
 * reportNumber
 */
class reportNumber {
}}

if (!class_exists("string1x10")) {
/**
 * string1x10
 */
class string1x10 {
}}

if (!class_exists("string1x20")) {
/**
 * string1x20
 */
class string1x20 {
}}

if (!class_exists("string1x200")) {
/**
 * string1x200
 */
class string1x200 {
}}

if (!class_exists("string1x30")) {
/**
 * string1x30
 */
class string1x30 {
}}

if (!class_exists("string1x4")) {
/**
 * string1x4
 */
class string1x4 {
}}

if (!class_exists("string1x70")) {
/**
 * string1x70
 */
class string1x70 {
    public function getAsSOAP() {
        return new SoapVar($this, XSD_NORMALIZEDSTRING, null, null, null, ns_type);
    }
}}

if (!class_exists("taxNumber")) {
/**
 * taxNumber
 */
class taxNumber {
}}

if (!class_exists("title")) {
/**
 * title
 */
class title {
}}

if (!class_exists("valuta")) {
/**
 * valuta
 */
class valuta {
}}

if (!class_exists("version")) {
/**
 * version
 */
class version {
    private $value = null;
    public function __construct($version) {
        $this->value = $version;
    }
    
    public function getAsSOAP() {
        if (isset ($this->value))  {
            return new SoapVar($this->value, XSD_TOKEN, null, null, null, ns_type);
        }
        return null;
        
    }
}}

if (!class_exists("addressIdentified")) {
/**
 * addressIdentified
 */
class addressIdentified {
	/**
	 * @access public
	 * @var addressTypeIdentified
	 */
	public $addressType;
	/**
	 * @access public
	 * @var string1x70Identified
	 */
	public $streetHouse;
	/**
	 * @access public
	 * @var natural4Identified
	 */
	public $zip;
	/**
	 * @access public
	 * @var string1x70Identified
	 */
	public $city;
	/**
	 * @access public
	 * @var countryCodeIdentified
	 */
	public $country;
}}

if (!class_exists("addressListIdentified")) {
/**
 * addressListIdentified
 */
class addressListIdentified {
	/**
	 * @access public
	 * @var addressIdentified
	 */
	public $address;
}}

if (!class_exists("addressTypeIdentified")) {
/**
 * addressTypeIdentified
 */
class addressTypeIdentified extends addressType {
}}

if (!class_exists("bankAccountIdentified")) {
/**
 * bankAccountIdentified
 */
class bankAccountIdentified extends bankAccount {
}}

if (!class_exists("bookingFrequencyIdentified")) {
/**
 * bookingFrequencyIdentified
 */
class bookingFrequencyIdentified extends bookingFrequency {
}}

if (!class_exists("booleanIdentified")) {
/**
 * booleanIdentified
 */
class booleanIdentified extends boolean {
}}

if (!class_exists("changeReasonIdentified")) {
/**
 * changeReasonIdentified
 */
class changeReasonIdentified extends changeReason {
}}

if (!class_exists("clauseIdentified")) {
/**
 * clauseIdentified
 */
class clauseIdentified extends clause {
}}

if (!class_exists("countryCodeIdentified")) {
/**
 * countryCodeIdentified
 */
class countryCodeIdentified extends countryCode {
}}

if (!class_exists("coverageTypeIdentified")) {
/**
 * coverageTypeIdentified
 */
class coverageTypeIdentified extends coverageType {
}}

if (!class_exists("emailIdentified")) {
/**
 * emailIdentified
 */
class emailIdentified extends email {
}}

if (!class_exists("error")) {
/**
 * error
 */
class error {
	/**
	 * @access public
	 * @var tnserrorCode
	 */
	public $errorCode;
	/**
	 * @access public
	 * @var tnsstring1x200
	 */
	public $errorMessage;
	/**
	 * @access public
	 * @var elementReference
	 */
	public $errorElement;
	/**
	 * @access public
	 * @var NCName
	 */
	public $missingElement;
}}

if (!class_exists("errorCodeIdentified")) {
/**
 * errorCodeIdentified
 */
class errorCodeIdentified extends errorCode {
}}

if (!class_exists("errorList")) {
/**
 * errorList
 */
class errorList {
	/**
	 * @access public
	 * @var error[]
	 */
	public $error;
}}

if (!class_exists("falseTrueIdentified")) {
/**
 * falseTrueIdentified
 */
class falseTrueIdentified extends falseTrue {
}}



if (!class_exists("genderIdentified")) {
/**
 * genderIdentified
 */
class genderIdentified extends gender {
}}

if (!class_exists("languageIdentified")) {
/**
 * languageIdentified
 */
class languageIdentified extends language {
}}

if (!class_exists("loanCreditorIdentified")) {
/**
 * loanCreditorIdentified
 */
class loanCreditorIdentified extends loanCreditor {
}}

if (!class_exists("loanNumberIdentified")) {
/**
 * loanNumberIdentified
 */
class loanNumberIdentified extends loanNumber {
}}

if (!class_exists("messageNumberIdentified")) {
/**
 * messageNumberIdentified
 */
class messageNumberIdentified extends messageNumber {
}}

if (!class_exists("natural1x11Identified")) {
/**
 * natural1x11Identified
 */
class natural1x11Identified extends natural1x11 {
}}

if (!class_exists("natural1x15Identified")) {
/**
 * natural1x15Identified
 */
class natural1x15Identified extends natural1x15 {
}}

if (!class_exists("natural1x3Identified")) {
/**
 * natural1x3Identified
 */
class natural1x3Identified extends natural1x3 {
}}

if (!class_exists("natural1x5Identified")) {
/**
 * natural1x5Identified
 */
class natural1x5Identified extends natural1x5 {
}}

if (!class_exists("natural4Identified")) {
/**
 * natural4Identified
 */
class natural4Identified extends natural4 {
}}

if (!class_exists("natural7x9Identified")) {
/**
 * natural7x9Identified
 */
class natural7x9Identified extends natural7x9 {
}}

if (!class_exists("partnerEntityIdentified")) {
/**
 * partnerEntityIdentified
 */
class partnerEntityIdentified extends partnerEntity {
}}

if (!class_exists("partnerIdentified")) {
/**
 * partnerIdentified
 */
class partnerIdentified {
	/**
	 * @access public
	 * @var partnerEntityIdentified
	 */
	public $partnerEntity;
	/**
	 * @access public
	 * @var partnerLiabilityIdentified
	 */
	public $partnerLiability;
	/**
	 * @access public
	 * @var genderIdentified
	 */
	public $gender;
	/**
	 * @access public
	 * @var titleIdentified
	 */
	public $title;
	/**
	 * @access public
	 * @var string1x70Identified
	 */
	public $firstname;
	/**
	 * @access public
	 * @var string1x70Identified
	 */
	public $lastname;
	/**
	 * @access public
	 * @var string1x70Identified
	 */
	public $birthname;
	/**
	 * @access public
	 * @var string1x70Identified
	 */
	public $mothersname;
	/**
	 * @access public
	 * @var dateIdentified
	 */
	public $birthDate;
	/**
	 * @access public
	 * @var string1x70Identified
	 */
	public $birthplace;
	/**
	 * @access public
	 * @var natural4Identified
	 */
	public $zip;
	/**
	 * @access public
	 * @var countryCodeIdentified
	 */
	public $citizenship;
	/**
	 * @access public
	 * @var string1x70Identified
	 */
	public $residency;
	/**
	 * @access public
	 * @var phoneIdentified
	 */
	public $phone;
	/**
	 * @access public
	 * @var phoneIdentified
	 */
	public $phoneBusiness;
	/**
	 * @access public
	 * @var phoneIdentified
	 */
	public $phoneMobil;
	/**
	 * @access public
	 * @var emailIdentified
	 */
	public $email;
	/**
	 * @access public
	 * @var bankAccountIdentified
	 */
	public $bankAccount;
	/**
	 * @access public
	 * @var string1x70Identified
	 */
	public $bankName;
	/**
	 * @access public
	 * @var taxNumberIdentified
	 */
	public $taxNumber;
	/**
	 * @access public
	 * @var string1x70Identified
	 */
	public $profession;
	/**
	 * @access public
	 * @var string1x70Identified
	 */
	public $tradeRegister;
	/**
	 * @access public
	 * @var string1x70Identified
	 */
	public $dmDecl;
	/**
	 * @access public
	 * @var postRecipientAddressIdIdentified
	 */
	public $postRecipientAddressId;
	/**
	 * @access public
	 * @var addressListIdentified
	 */
	public $addressList;
}}

if (!class_exists("partnerLiabilityIdentified")) {
/**
 * partnerLiabilityIdentified
 */
class partnerLiabilityIdentified extends partnerLiability {
}}

if (!class_exists("partnerListIdentified")) {
/**
 * partnerListIdentified
 */
class partnerListIdentified {
	/**
	 * @access public
	 * @var partnerIdentified
	 */
	public $partner;
}}

if (!class_exists("paymentMethodIdentified")) {
/**
 * paymentMethodIdentified
 */
class paymentMethodIdentified extends paymentMethod {
}}

if (!class_exists("phoneIdentified")) {
/**
 * phoneIdentified
 */
class phoneIdentified extends phone {
}}

if (!class_exists("postRecipientAddressIdIdentified")) {
/**
 * postRecipientAddressIdIdentified
 */
class postRecipientAddressIdIdentified extends postRecipientAddressId {
}}

if (!class_exists("productIdentified")) {
/**
 * productIdentified
 */
class productIdentified extends product {
}}

if (!class_exists("reportNumberIdentified")) {
/**
 * reportNumberIdentified
 */
class reportNumberIdentified extends reportNumber {
}}

if (!class_exists("result")) {
/**
 * result
 */
class result {
	/**
	 * @access public
	 * @var resultCoverageList
	 */
	public $resultCoverageList;
	/**
	 * @access public
	 * @var natural1x11
	 */
	public $discountSum;
	/**
	 * @access public
	 * @var natural1x11
	 */
	public $discountPercent;
	/**
	 * @access public
	 * @var natural1x11
	 */
	public $surchargeSum;
	/**
	 * @access public
	 * @var natural1x11
	 */
	public $surchargePercent;
	/**
	 * @access public
	 * @var natural1x11
	 */
	public $installmentPremium;
	/**
	 * @access public
	 * @var natural1x11
	 */
	public $yearlyPremium;
}}

if (!class_exists("resultCoverage")) {
/**
 * resultCoverage
 */
class resultCoverage {
	/**
	 * @access public
	 * @var natural1x11
	 */
	public $coverageProductId;
	/**
	 * @access public
	 * @var natural1x11
	 */
	public $coverageBuildingId;
	/**
	 * @access public
	 * @var coverageTypeIdentified
	 */
	public $coverageType;
	/**
	 * @access public
	 * @var natural1x11
	 */
	public $coveragePremium;
}}

if (!class_exists("resultCoverageList")) {
/**
 * resultCoverageList
 */
class resultCoverageList {
	/**
	 * @access public
	 * @var resultCoverage[]
	 */
	public $resultCoverage;
}}







if (!class_exists("string1x10Identified")) {
/**
 * string1x10Identified
 */
class string1x10Identified extends string1x10 {
}}

if (!class_exists("string1x20Identified")) {
/**
 * string1x20Identified
 */
class string1x20Identified extends string1x20 {
}}

if (!class_exists("string1x200Identified")) {
/**
 * string1x200Identified
 */
class string1x200Identified extends string1x200 {
}}

if (!class_exists("string1x30Identified")) {
/**
 * string1x30Identified
 */
class string1x30Identified extends string1x30 {
}}

if (!class_exists("string1x4Identified")) {
/**
 * string1x4Identified
 */
class string1x4Identified extends string1x4 {
}}

if (!class_exists("string1x70Identified")) {
/**
 * string1x70Identified
 */
class string1x70Identified extends string1x70 {
    public function getAsSOAP() {
        return new SoapVar($this, XSD_NORMALIZEDSTRING, null, null, null, ns_type);
    }
}}

if (!class_exists("taxNumberIdentified")) {
/**
 * taxNumberIdentified
 */
class taxNumberIdentified extends taxNumber {
}}

if (!class_exists("titleIdentified")) {
/**
 * titleIdentified
 */
class titleIdentified extends title {
}}

if (!class_exists("valutaIdentified")) {
/**
 * valutaIdentified
 */
class valutaIdentified extends valuta {
}}

if (!class_exists("versionIdentified")) {
/**
 * versionIdentified
 */
class versionIdentified extends version {
}}

if (!class_exists("detailedModelCodeIdentified")) {
/**
 * detailedModelCodeIdentified
 */
class detailedModelCodeIdentified extends string1x70 {
}}

?>