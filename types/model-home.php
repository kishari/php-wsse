<?php

namespace Model\Home;

require_once('types/model-types.php');

use \SoapVar;

if(!defined('ns_model_home')) {
    define("ns_model_home", "http://i3s.inverso.de/mkb/sales/tool/model/home");
}

if (!class_exists("buildingConstruction")) {
/**
 * buildingConstruction
 */
class buildingConstruction {
}}

if (!class_exists("buildingExploitationMethod")) {
/**
 * buildingExploitationMethod
 */
class buildingExploitationMethod {
}}

if (!class_exists("buildingHabitableSurface")) {
/**
 * buildingHabitableSurface
 */
class buildingHabitableSurface {
}}

if (!class_exists("buildingOccupied")) {
/**
 * buildingOccupied
 */
class buildingOccupied {
}}

if (!class_exists("buildingSpecification")) {
/**
 * buildingSpecification
 */
class buildingSpecification {
}}

if (!class_exists("buildingType")) {
/**
 * buildingType
 */
class buildingType {
}}

if (!class_exists("buildingUnderConstruction")) {
/**
 * buildingUnderConstruction
 */
class buildingUnderConstruction {
}}

if (!class_exists("bundleAllowance")) {
/**
 * bundleAllowance
 */
class bundleAllowance {
}}

if (!class_exists("capacity")) {
/**
 * capacity
 */
class capacity {
}}

if (!class_exists("contractCondition")) {
/**
 * contractCondition
 */
class contractCondition {
}}

if (!class_exists("insuranceSum")) {
/**
 * insuranceSum
 */
class insuranceSum {
}}

if (!class_exists("occupation")) {
/**
 * occupation
 */
class occupation {
}}

if (!class_exists("performanceLimit")) {
/**
 * performanceLimit
 */
class performanceLimit {
}}

if (!class_exists("productHome")) {
/**
 * productHome
 */
class productHome {
}}

if (!class_exists("buildingConstructionIdentified")) {
/**
 * buildingConstructionIdentified
 */
class buildingConstructionIdentified extends buildingConstruction {
}}

if (!class_exists("buildingExploitationMethodIdentified")) {
/**
 * buildingExploitationMethodIdentified
 */
class buildingExploitationMethodIdentified extends buildingExploitationMethod {
}}

if (!class_exists("buildingHabitableSurfaceIdentified")) {
/**
 * buildingHabitableSurfaceIdentified
 */
class buildingHabitableSurfaceIdentified extends buildingHabitableSurface {
}}

if (!class_exists("buildingIdentified")) {
/**
 * buildingIdentified
 */
class buildingIdentified {
	/**
	 * @access public
	 * @var buildingSpecificationIdentified
	 */
	public $buildingSpecification;
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
	 * @var string1x70Identified
	 */
	public $streetHouse;
	/**
	 * @access public
	 * @var buildingTypeIdentified
	 */
	public $buildingType;
	/**
	 * @access public
	 * @var buildingConstructionIdentified
	 */
	public $buildingConstruction;
	/**
	 * @access public
	 * @var buildingHabitableSurfaceIdentified
	 */
	public $buildingHabitableSurface;
	/**
	 * @access public
	 * @var buildingOccupiedIdentified
	 */
	public $buildingOccupied;
	/**
	 * @access public
	 * @var buildingExploitationMethodIdentified
	 */
	public $buildingExploitationMethod;
	/**
	 * @access public
	 * @var buildingUnderConstructionIdentified
	 */
	public $buildingUnderConstruction;
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
	public $loanEndDate;
	/**
	 * @access public
	 * @var clauseIdentified
	 */
	public $clause;
	/**
	 * @access public
	 * @var coverageListIdentified
	 */
	public $coverageList;
}}

if (!class_exists("buildingListIdentified")) {
/**
 * buildingListIdentified
 */
class buildingListIdentified {
	/**
	 * @access public
	 * @var buildingIdentified
	 */
	public $building;
}}

if (!class_exists("buildingOccupiedIdentified")) {
/**
 * buildingOccupiedIdentified
 */
class buildingOccupiedIdentified extends buildingOccupied {
}}

if (!class_exists("buildingSpecificationIdentified")) {
/**
 * buildingSpecificationIdentified
 */
class buildingSpecificationIdentified extends buildingSpecification {
}}

if (!class_exists("buildingTypeIdentified")) {
/**
 * buildingTypeIdentified
 */
class buildingTypeIdentified extends buildingType {
}}

if (!class_exists("buildingUnderConstructionIdentified")) {
/**
 * buildingUnderConstructionIdentified
 */
class buildingUnderConstructionIdentified extends buildingUnderConstruction {
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
	 * @var homeListIdentified
	 */
	public $homeList;

        public function getAsSOAP() {
            $r = array (
                'header' => new SoapVar($this->header->getAsSOAP(), SOAP_ENC_OBJECT, null, null, null, ns_type)
                ,'general' => new SoapVar($this->general->getAsSOAP(), SOAP_ENC_OBJECT, null, null, null, ns_type)
                ,'partnerList' => new SoapVar($this->partnerList->getAsSOAP(), SOAP_ENC_OBJECT, null, null, null, ns_type)
                ,'homeList' => new SoapVar($this->homeList->getAsSOAP(), SOAP_ENC_OBJECT, null, null, null, ns_type)
            );

            return $r;
        }
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
	 * @var homeListIdentified
	 */
	public $homeList;
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

if (!class_exists("capacityIdentified")) {
/**
 * capacityIdentified
 */
class capacityIdentified extends capacity {
}}

if (!class_exists("contractConditionIdentified")) {
/**
 * contractConditionIdentified
 */
class contractConditionIdentified extends contractCondition {
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
	 * @var performanceLimitIdentified
	 */
	public $performanceLimit;
	/**
	 * @access public
	 * @var insuranceSumIdentified
	 */
	public $insuranceSum;
	/**
	 * @access public
	 * @var capacityIdentified
	 */
	public $capacity;
	/**
	 * @access public
	 * @var occupationIdentified
	 */
	public $occupation;
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
}}

if (!class_exists("homeIdentified")) {
/**
 * homeIdentified
 */
class homeIdentified {
	/**
	 * @access public
	 * @var productHomeIdentified
	 */
	public $productHome;
	/**
	 * @access public
	 * @var contractConditionIdentified
	 */
	public $contractCondition;
	/**
	 * @access public
	 * @var tnsbundleAllowance
	 */
	public $bundleAllowance;
	/**
	 * @access public
	 * @var nstnatural1x11
	 */
	public $specialAllowance;
	/**
	 * @access public
	 * @var buildingListIdentified
	 */
	public $buildingList;
	/**
	 * @access public
	 * @var coverageListIdentified
	 */
	public $coverageList;
}}

if (!class_exists("homeListIdentified")) {
/**
 * homeListIdentified
 */
class homeListIdentified {
	/**
	 * @access public
	 * @var homeIdentified
	 */
	public $home;

        public function getAsSOAP() {
            $r = array();

            return $r;
        }
}}

if (!class_exists("insuranceSumIdentified")) {
/**
 * insuranceSumIdentified
 */
class insuranceSumIdentified extends insuranceSum {
}}

if (!class_exists("occupationIdentified")) {
/**
 * occupationIdentified
 */
class occupationIdentified extends occupation {
}}

if (!class_exists("performanceLimitIdentified")) {
/**
 * performanceLimitIdentified
 */
class performanceLimitIdentified extends performanceLimit {
}}

if (!class_exists("productHomeIdentified")) {
/**
 * productHomeIdentified
 */
class productHomeIdentified extends productHome {
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
	 * @var homeListIdentified
	 */
	public $homeList;

        public function getAsSOAP() {
            $r = array (
                'header' => new SoapVar($this->header->getAsSOAP(), SOAP_ENC_OBJECT, null, null, null, ns_type)
                ,'general' => new SoapVar($this->general->getAsSOAP(), SOAP_ENC_OBJECT, null, null, null, ns_type)
                ,'partnerList' => new SoapVar($this->partnerList->getAsSOAP(), SOAP_ENC_OBJECT, null, null, null, ns_type)
                ,'homeList' => new SoapVar($this->homeList->getAsSOAP(), SOAP_ENC_OBJECT, null, null, null, ns_type)
            );

            return $r;
        }
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
	 * @var homeListIdentified
	 */
	public $homeList;
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

?>