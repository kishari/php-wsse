<?php

require_once('types/model-types.php');

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

        public function getAsSOAP() {
            $r = array();

            if (isset ($this->buildingSpecification))
               $r['buildingSpecification'] = new SoapVar($this->buildingSpecification, XSD_TOKEN, null, null, null, ns_model_home);

            if (isset ($this->streetHouse))
               $r['streetHouse'] = new SoapVar($this->streetHouse, XSD_NORMALIZEDSTRING, null, null, null, ns_type);

            if (isset ($this->zip))
               $r['zip'] = new SoapVar($this->zip, XSD_TOKEN, null, null, null, ns_type);

            if (isset ($this->city))
               $r['city'] = new SoapVar($this->city, XSD_NORMALIZEDSTRING, null, null, null, ns_type);

            if (isset ($this->buildingType))
               $r['buildingType'] = new SoapVar($this->buildingType, XSD_TOKEN, null, null, null, ns_model_home);

            if (isset ($this->buildingConstruction))
               $r['buildingConstruction'] = new SoapVar($this->buildingConstruction, XSD_TOKEN, null, null, null, ns_model_home);

            if (isset ($this->buildingHabitableSurface))
               $r['buildingHabitableSurface'] = new SoapVar($this->buildingHabitableSurface, XSD_TOKEN, null, null, null, ns_model_home);

            if (isset ($this->buildingOccupied))
               $r['buildingOccupied'] = new SoapVar($this->buildingOccupied, XSD_TOKEN, null, null, null, ns_model_home);

            if (isset ($this->buildingExploitationMethod))
               $r['buildingExploitationMethod'] = new SoapVar($this->buildingExploitationMethod, XSD_TOKEN, null, null, null, ns_model_home);

            if (isset ($this->buildingUnderConstruction))
               $r['buildingUnderConstruction'] = new SoapVar($this->buildingUnderConstruction, XSD_TOKEN, null, null, null, ns_model_home);

            if (isset ($this->loanCreditor))
               $r['loanCreditor'] = new SoapVar($this->loanCreditor, XSD_TOKEN, null, null, null, ns_type);

            if (isset ($this->loanNumber))
               $r['loanNumber'] = new SoapVar($this->loanNumber, XSD_TOKEN, null, null, null, ns_type);
            
            if (isset ($this->loanAmount))
               $r['loanAmount'] = new SoapVar($this->loanAmount, XSD_TOKEN, null, null, null, ns_type);

            if (isset ($this->loanEndDate))
               $r['loanEndDate'] = new SoapVar($this->loanEndDate, XSD_STRING, null, null, null, ns_type);

            if (isset ($this->clause))
               $r['clause'] = new SoapVar($this->clause, XSD_TOKEN, null, null, null, ns_type);

            if (isset ($this->coverageList))
                $r['coverageList'] = $this->coverageList->getAsSOAP ();


            return $r;
        }
}}

if (!class_exists("buildingListIdentified")) {
/**
 * buildingListIdentified
 */
class buildingListIdentified {
	/**
	 * @access public
	 * @var list of buildingIdentified
	 */
	public $buildingList;

        public function getAsSOAP() {
            $r = array();
            if (sizeof($this->buildingList) == 0) {
                $r[] = new SoapVar("", SOAP_ENC_OBJECT, null, null, 'building', ns_model_home);
            }

            foreach($this->buildingList as $b) {
                $r[] = new SoapVar($b->getAsSOAP(), SOAP_ENC_OBJECT, null, null, 'building', ns_model_home);
            }

            return new SoapVar($r, SOAP_ENC_OBJECT, null, null, 'buildingList', ns_model_home);
        }
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

        public function getAsSOAP() {
             $r = array();

            if (isset ($this->coverageType))
               $r['coverageType'] = new SoapVar($this->coverageType, XSD_TOKEN, null, null, null, ns_type);

            if (isset ($this->performanceLimit))
               $r['performanceLimit'] = new SoapVar($this->performanceLimit, XSD_TOKEN, null, null, null, ns_model_home);

            if (isset ($this->insuranceSum))
               $r['insuranceSum'] = new SoapVar($this->insuranceSum, XSD_TOKEN, null, null, null, ns_model_home);

            if (isset ($this->capacity))
               $r['capacity'] = new SoapVar($this->capacity, XSD_TOKEN, null, null, null, ns_model_home);

            if (isset ($this->occupation))
                $r['occupation'] = new SoapVar($this->occupation, XSD_TOKEN, null, null, null, ns_model_home);

            return $r;
        }
}}

if (!class_exists("coverageListIdentified")) {
/**
 * coverageListIdentified
 */
class coverageListIdentified {
	/**
	 * @access public
	 * @var list of coverageIdentified
	 */
	public $coverageList;

        public function getAsSOAP() {
            $r = array();
            if (sizeof($this->coverageList) == 0) {
                $r[] = new SoapVar("", SOAP_ENC_OBJECT, null, null, 'coverage', ns_model_home);
            }

            foreach($this->coverageList as $c) {
                $r[] = new SoapVar($c->getAsSOAP(), SOAP_ENC_OBJECT, null, null, 'coverage', ns_model_home);
            }

            return new SoapVar($r, SOAP_ENC_OBJECT, null, null, 'coverageList', ns_model_home);
        }
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

        public function getAsSOAP() {
            $r = array();

            if (isset ($this->productHome))
               $r['productHome'] = new SoapVar($this->productHome, XSD_TOKEN, null, null, null, ns_model_home);

            if (isset ($this->contractCondition))
               $r['contractCondition'] = new SoapVar($this->contractCondition, XSD_TOKEN, null, null, null, ns_model_home);

            if (isset ($this->bundleAllowance))
               $r['bundleAllowance'] = new SoapVar($this->bundleAllowance, XSD_TOKEN, null, null, null, ns_model_home);

            if (isset ($this->specialAllowance))
               $r['specialAllowance'] = new SoapVar($this->specialAllowance, XSD_TOKEN, null, null, null, ns_model_home);

            if (isset ($this->buildingList))
                $r['buildingList'] = $this->buildingList->getAsSOAP();

            if (isset ($this->coverageList))
                $r['coverageList'] = $this->coverageList->getAsSOAP();

            return $r;
        }
        
}}

if (!class_exists("homeListIdentified")) {
/**
 * homeListIdentified
 */
class homeListIdentified {
	/**
	 * @access public
	 * @var list of homeIdentified
	 */
	public $homeList;

        public function getAsSOAP() {
            $r = array();

            if (sizeof($this->homeList) == 0) {
                $r[] = new SoapVar("", SOAP_ENC_OBJECT, null, null, 'home', ns_model_home);
            }

            foreach($this->homeList as $h) {

                $r[] = new SoapVar($h->getAsSOAP(), SOAP_ENC_OBJECT, null, null, 'home', ns_model_home);
            }

            return new SoapVar($r, SOAP_ENC_OBJECT, null, null, 'homeList', ns_model_home);
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