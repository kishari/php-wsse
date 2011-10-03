<?php

namespace Model\Types;

use \SoapVar;

if(!defined('ns_type')) {
    define("ns_type", "http://i3s.inverso.de/mkb/sales/tool/model/type");
}

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

if (!class_exists("dateString")) {
/**
 * dateString
 */
class dateString {
}}

if (!class_exists("dateIdentified")) {
/**
 * dateIdentified
 */
class dateIdentified extends dateString {
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

if (!class_exists("NCName")) {
/**
 * NCName
 */
class NCName {
}}

if (!class_exists("elementReference")) {
/**
 * elementReference
 */
class elementReference extends NCName {
}}

if (!class_exists("falseTrueIdentified")) {
/**
 * falseTrueIdentified
 */
class falseTrueIdentified extends falseTrue {
}}

if (!class_exists("generalIdentified")) {
/**
 * generalIdentified
 */
class generalIdentified {
	/**
	 * @access public
	 * @var productIdentified
	 */
	public $product;
	/**
	 * @access public
	 * @var dateIdentified
	 */
	public $beginDate;
	/**
	 * @access public
	 * @var dateIdentified
	 */
	public $mainDue;
	/**
	 * @access public
	 * @var bookingFrequencyIdentified
	 */
	public $bookingFrequency;
	/**
	 * @access public
	 * @var paymentMethodIdentified
	 */
	public $paymentMethod;
	/**
	 * @access public
	 * @var valutaIdentified
	 */
	public $valuta;
	/**
	 * @access public
	 * @var changeReasonIdentified
	 */
	public $changeReason;
	/**
	 * @access public
	 * @var natural7x9Identified
	 */
	public $proposalNumber;
	/**
	 * @access public
	 * @var dateIdentified
	 */
	public $duration;
	/**
	 * @access public
	 * @var natural1x11Identified
	 */
	public $prepayment;
	/**
	 * @access public
	 * @var string1x70Identified
	 */
	public $dataRealityDecl;
	/**
	 * @access public
	 * @var string1x70Identified
	 */
	public $conditionAprovalDecl;
	/**
	 * @access public
	 * @var string1x70Identified
	 */
	public $dataHandlingDecl;
	/**
	 * @access public
	 * @var string1x70Identified
	 */
	public $eMailDecl;

        public function getAsSOAP() {
            
        }
}}

if (!class_exists("header")) {
/**
 * header
 */
class header {
	/**
	 * @access public
	 * @var version
	 */
	public $version;
	/**
	 * @access public
	 * @var language
	 */
	public $language;
	/**
	 * @access public
	 * @var natural1x11
	 */
	public $agentNumber;
	/**
	 * @access public
	 * @var natural1x11
	 */
	public $subAgentNumber;
	/**
	 * @access public
	 * @var string1x30
	 */
	public $signature;
	/**
	 * @access public
	 * @var messageNumber
	 */
	public $messageNumber;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $timestamp;

        public function getAsSOAP() {
            $r = array();
            if (isset ($this->version))
                $r['version'] = new SoapVar($this->version, XSD_TOKEN, null, null, null, ns_type);

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
	
        public $partners = array();
        /**
	 * @access public
	 * @var partnerIdentified
	 */
	public $partner;

        public function getAsSOAP() {
            $r = array();

            foreach($partners as $p) {
                print_r($p->firstname);
            }

            return $r;
        }
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

if (!class_exists("signContainerIdentified")) {
/**
 * signContainerIdentified
 */
class signContainerIdentified {
	/**
	 * @access public
	 * @var natural7x9Identified
	 */
	public $proposalNumber;
	/**
	 * @access public
	 * @var contractNumber
	 */
	public $contractNumber;

        public function getAsSOAP() {
            $r = array();

            if (isset ($this->proposalNumber))
                $r['proposalNumber'] = new SoapVar($this->proposalNumber, XSD_TOKEN, null, null, null, ns_type);

            if (isset ($this->contractNumber))
                $r['contractNumber'] = new SoapVar($this->contractNumber, XSD_TOKEN, null, null, null, ns_type);

            return $r;
        }
}}

if (!class_exists("signRequest")) {
/**
 * signRequest
 */
class signRequest {
	/**
	 * @access public
	 * @var header
	 */
	public $header;
	/**
	 * @access public
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
}}

if (!class_exists("signResponse")) {
/**
 * signResponse
 */
class signResponse {
	/**
	 * @access public
	 * @var header
	 */
	public $header;
	/**
	 * @access public
	 * @var signContainerIdentified
	 */
	public $sign;
	/**
	 * @access public
	 * @var errorList
	 */
	public $errorList;
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

?>