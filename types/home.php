<?php

require('types/model-home.php');

if (!class_exists("home")) {
/**
 * home
 * @author WSDLInterpreter
 */
class home extends SoapClient {
	/**
	 * Default class map for wsdl=>php
	 * @access private
	 * @var array
	 */
	private static $classmap = array(
		"buildingConstruction" => "buildingConstruction",
		"buildingExploitationMethod" => "buildingExploitationMethod",
		"buildingHabitableSurface" => "buildingHabitableSurface",
		"buildingOccupied" => "buildingOccupied",
		"buildingSpecification" => "buildingSpecification",
		"buildingType" => "buildingType",
		"buildingUnderConstruction" => "buildingUnderConstruction",
		"bundleAllowance" => "bundleAllowance",
		"capacity" => "capacity",
		"contractCondition" => "contractCondition",
		"insuranceSum" => "insuranceSum",
		"occupation" => "occupation",
		"performanceLimit" => "performanceLimit",
		"productHome" => "productHome",
		"buildingConstructionIdentified" => "buildingConstructionIdentified",
		"buildingExploitationMethodIdentified" => "buildingExploitationMethodIdentified",
		"buildingHabitableSurfaceIdentified" => "buildingHabitableSurfaceIdentified",
		"buildingIdentified" => "buildingIdentified",
		"buildingListIdentified" => "buildingListIdentified",
		"buildingOccupiedIdentified" => "buildingOccupiedIdentified",
		"buildingSpecificationIdentified" => "buildingSpecificationIdentified",
		"buildingTypeIdentified" => "buildingTypeIdentified",
		"buildingUnderConstructionIdentified" => "buildingUnderConstructionIdentified",
		"calculationRequest" => "calculationRequest",
		"calculationResponse" => "calculationResponse",
		"capacityIdentified" => "capacityIdentified",
		"contractConditionIdentified" => "contractConditionIdentified",
		"coverageIdentified" => "coverageIdentified",
		"coverageListIdentified" => "coverageListIdentified",
		"homeIdentified" => "homeIdentified",
		"homeListIdentified" => "homeListIdentified",
		"insuranceSumIdentified" => "insuranceSumIdentified",
		"occupationIdentified" => "occupationIdentified",
		"performanceLimitIdentified" => "performanceLimitIdentified",
		"productHomeIdentified" => "productHomeIdentified",
		"proposalRequest" => "proposalRequest",
		"proposalResponse" => "proposalResponse",
		"addressType" => "addressType",
		"bankAccount" => "bankAccount",
		"bookingFrequency" => "bookingFrequency",
		"boolean" => "boolean",
		"changeReason" => "changeReason",
		"clause" => "clause",
		"contractNumber" => "contractNumber",
		"countryCode" => "countryCode",
		"coverageType" => "coverageType",
		"email" => "email",
		"errorCode" => "errorCode",
		"falseTrue" => "falseTrue",
		"gender" => "gender",
		"language" => "language",
		"severity" => "severity",
		"loanCreditor" => "loanCreditor",
		"loanNumber" => "loanNumber",
		"messageNumber" => "messageNumber",
		"natural1x11" => "natural1x11",
		"natural1x15" => "natural1x15",
		"natural1x3" => "natural1x3",
		"natural1x5" => "natural1x5",
		"natural4" => "natural4",
		"natural7x9" => "natural7x9",
		"partnerEntity" => "partnerEntity",
		"partnerLiability" => "partnerLiability",
		"paymentMethod" => "paymentMethod",
		"phone" => "phone",
		"postRecipientAddressId" => "postRecipientAddressId",
		"printContainerIdentified" => "printContainerIdentified",
		"printRequest" => "printRequest",
		"printResponse" => "printResponse",
		"product" => "product",
		"reportNumber" => "reportNumber",
		"string1x10" => "string1x10",
		"string1x20" => "string1x20",
		"string1x200" => "string1x200",
		"string1x30" => "string1x30",
		"string1x4" => "string1x4",
		"string1x70" => "string1x70",
		"taxNumber" => "taxNumber",
		"title" => "title",
		"valuta" => "valuta",
		"version" => "version",
		"addressIdentified" => "addressIdentified",
		"addressListIdentified" => "addressListIdentified",
		"addressTypeIdentified" => "addressTypeIdentified",
		"bankAccountIdentified" => "bankAccountIdentified",
		"bookingFrequencyIdentified" => "bookingFrequencyIdentified",
		"booleanIdentified" => "booleanIdentified",
		"changeReasonIdentified" => "changeReasonIdentified",
		"clauseIdentified" => "clauseIdentified",
		"countryCodeIdentified" => "countryCodeIdentified",
		"coverageTypeIdentified" => "coverageTypeIdentified",
		"dateIdentified" => "dateIdentified",
		"string" => "dateString",
		"elementReference" => "elementReference",
		"NCName" => "NCName",
		"emailIdentified" => "emailIdentified",
		"error" => "error",
		"errorCodeIdentified" => "errorCodeIdentified",
		"errorList" => "errorList",
		"falseTrueIdentified" => "falseTrueIdentified",
		"generalIdentified" => "generalIdentified",
		"header" => "header",
		"genderIdentified" => "genderIdentified",
		"languageIdentified" => "languageIdentified",
		"loanCreditorIdentified" => "loanCreditorIdentified",
		"loanNumberIdentified" => "loanNumberIdentified",
		"messageNumberIdentified" => "messageNumberIdentified",
		"natural1x11Identified" => "natural1x11Identified",
		"natural1x15Identified" => "natural1x15Identified",
		"natural1x3Identified" => "natural1x3Identified",
		"natural1x5Identified" => "natural1x5Identified",
		"natural4Identified" => "natural4Identified",
		"natural7x9Identified" => "natural7x9Identified",
		"partnerEntityIdentified" => "partnerEntityIdentified",
		"partnerIdentified" => "partnerIdentified",
		"partnerLiabilityIdentified" => "partnerLiabilityIdentified",
		"partnerListIdentified" => "partnerListIdentified",
		"paymentMethodIdentified" => "paymentMethodIdentified",
		"phoneIdentified" => "phoneIdentified",
		"postRecipientAddressIdIdentified" => "postRecipientAddressIdIdentified",
		"productIdentified" => "productIdentified",
		"reportNumberIdentified" => "reportNumberIdentified",
		"result" => "result",
		"resultCoverage" => "resultCoverage",
		"resultCoverageList" => "resultCoverageList",
		"signContainerIdentified" => "signContainerIdentified",
		"signRequest" => "signRequest",
		"signResponse" => "signResponse",
		"string1x10Identified" => "string1x10Identified",
		"string1x20Identified" => "string1x20Identified",
		"string1x200Identified" => "string1x200Identified",
		"string1x30Identified" => "string1x30Identified",
		"string1x4Identified" => "string1x4Identified",
		"string1x70Identified" => "string1x70Identified",
		"taxNumberIdentified" => "taxNumberIdentified",
		"titleIdentified" => "titleIdentified",
		"valutaIdentified" => "valutaIdentified",
		"versionIdentified" => "versionIdentified",
	);

	/**
	 * Constructor using wsdl location and options array
	 * @param string $wsdl WSDL location for this service
	 * @param array $options Options for the SoapClient
	 */
	public function __construct($wsdl="../wsdl/home.wsdl", $options=array()) {
		foreach(self::$classmap as $wsdlClassName => $phpClassName) {
		    if(!isset($options['classmap'][$wsdlClassName])) {
		        $options['classmap'][$wsdlClassName] = $phpClassName;
		    }
		}
		parent::__construct($wsdl, $options);
	}

	/**
	 * Checks if an argument list matches against a valid argument type list
	 * @param array $arguments The argument list to check
	 * @param array $validParameters A list of valid argument types
	 * @return boolean true if arguments match against validParameters
	 * @throws Exception invalid function signature message
	 */
	public function _checkArguments($arguments, $validParameters) {
		$variables = "";
		foreach ($arguments as $arg) {
		    $type = gettype($arg);
		    if ($type == "object") {
		        $type = get_class($arg);
		    }
		    $variables .= "(".$type.")";
		}
		if (!in_array($variables, $validParameters)) {
		    throw new Exception("Invalid parameter types: ".str_replace(")(", ", ", $variables));
		}
		return true;
	}

	/**
	 * Service Call: calculation
	 * Parameter options:
	 * (calculationRequest) request
	 * @param mixed,... See function description for parameter options
	 * @return calculationResponse
	 * @throws Exception invalid function signature message
	 */
	public function calculation($mixed = null) {
		$validParameters = array(
			"(calculationRequest)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("calculation", $args);
	}


	/**
	 * Service Call: proposal
	 * Parameter options:
	 * (proposalRequest) request
	 * @param mixed,... See function description for parameter options
	 * @return proposalResponse
	 * @throws Exception invalid function signature message
	 */
	public function proposal($mixed = null) {
		$validParameters = array(
			"(proposalRequest)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("proposal", $args);
	}


	/**
	 * Service Call: print
	 * Parameter options:
	 * (printRequest) request
	 * @param mixed,... See function description for parameter options
	 * @return printResponse
	 * @throws Exception invalid function signature message
	 */
	public function _print($mixed = null) {
		$validParameters = array(
			"(printRequest)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("print", $args);
	}


	/**
	 * Service Call: sign
	 * Parameter options:
	 * (signRequest) request
	 * @param mixed,... See function description for parameter options
	 * @return signResponse
	 * @throws Exception invalid function signature message
	 */
	public function sign($mixed = null) {
		$validParameters = array(
			"(signRequest)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("sign", $args);
	}


}}

?>
