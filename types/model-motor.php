<?php


require_once ('types/model-types.php');

if(!defined('ns_model_motor')) {
    define("ns_model_motor", "http://i3s.inverso.de/mkb/sales/tool/model/motor");
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

if (!class_exists("calculationRequest")) {
/**
 * calculationRequest
 */
class calculationRequest {
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

if (!class_exists("calculationResponse")) {
/**
 * calculationResponse
 */
class calculationResponse {
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

if (!class_exists("detailedModelCodeIdentified")) {
/**
 * detailedModelCodeIdentified
 */
class detailedModelCodeIdentified extends string1x70 {
}}


?>