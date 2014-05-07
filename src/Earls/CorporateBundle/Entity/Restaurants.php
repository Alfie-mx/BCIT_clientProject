<?php

namespace Earls\CorporateBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Restaurants
 */
class Restaurants
{
    /**
     * @var integer
     */
    private $storefilenumber;

    /**
     * @var string
     */
    private $tenant;

    /**
     * @var string
     */
    private $storenickname;

    /**
     * @var string
     */
    private $address;

    /**
     * @var string
     */
    private $postalzip;

    /**
     * @var string
     */
    private $openingdate;

    /**
     * @var string
     */
    private $legaldescription;

    /**
     * @var integer
     */
    private $diningroomseating;

    /**
     * @var integer
     */
    private $loungeseating;

    /**
     * @var integer
     */
    private $patioseating;

    /**
     * @var integer
     */
    private $diningroomtable;

    /**
     * @var integer
     */
    private $loungetable;

    /**
     * @var integer
     */
    private $patiotable;

    /**
     * @var integer
     */
    private $departmentnumber;

    /**
     * @var boolean
     */
    private $restaurantstate;

    /**
     * @var \DateTime
     */
    private $closedate;

    /**
     * @var string
     */
    private $royaltyfee;

    /**
     * @var string
     */
    private $advertisingfee;

    /**
     * @var string
     */
    private $regionalmngtfee;

    /**
     * @var string
     */
    private $yearbuilt;

    /**
     * @var string
     */
    private $comments;

    /**
     * @var integer
     */
    private $restaurantid;

    /**
     * @var \Earls\CorporateBundle\Entity\Licenses
     */
    private $licenseid;

    /**
     * @var \Earls\CorporateBundle\Entity\Landlords
     */
    private $landlordid;

    /**
     * @var \Earls\CorporateBundle\Entity\Propertymanagers
     */
    private $propertymanagerid;

    /**
     * @var \Earls\CorporateBundle\Entity\Regions
     */
    private $regionid;

    /**
     * @var \Earls\CorporateBundle\Entity\Storeclasses
     */
    private $storeclassid;

    /**
     * @var \Earls\CorporateBundle\Entity\Corporations
     */
    private $corporateid;

    /**
     * @var \Earls\CorporateBundle\Entity\Buildingtypes
     */
    private $buildingtype;

    /**
     * @var \Earls\CorporateBundle\Entity\Liquorlicenses
     */
    private $liquorlicenseid;

    /**
     * @var \Earls\CorporateBundle\Entity\Provincestate
     */
    private $provincestateid;

    /**
     * @var \Earls\CorporateBundle\Entity\Utilities
     */
    private $utilityid;

    /**
     * @var \Earls\CorporateBundle\Entity\Rentandmaintenances
     */
    private $rentandmaintenanceid;

    /**
     * @var \Earls\CorporateBundle\Entity\Riskinfo
     */
    private $riskid;

    /**
     * @var \Earls\CorporateBundle\Entity\Northamericancities
     */
    private $city;


    /**
     * Set storefilenumber
     *
     * @param integer $storefilenumber
     * @return Restaurants
     */
    public function setStorefilenumber($storefilenumber)
    {
        $this->storefilenumber = $storefilenumber;
    
        return $this;
    }

    /**
     * Get storefilenumber
     *
     * @return integer 
     */
    public function getStorefilenumber()
    {
        return $this->storefilenumber;
    }

    /**
     * Set tenant
     *
     * @param string $tenant
     * @return Restaurants
     */
    public function setTenant($tenant)
    {
        $this->tenant = $tenant;
    
        return $this;
    }

    /**
     * Get tenant
     *
     * @return string 
     */
    public function getTenant()
    {
        return $this->tenant;
    }

    /**
     * Set storenickname
     *
     * @param string $storenickname
     * @return Restaurants
     */
    public function setStorenickname($storenickname)
    {
        $this->storenickname = $storenickname;
    
        return $this;
    }

    /**
     * Get storenickname
     *
     * @return string 
     */
    public function getStorenickname()
    {
        return $this->storenickname;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return Restaurants
     */
    public function setAddress($address)
    {
        $this->address = $address;
    
        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set postalzip
     *
     * @param string $postalzip
     * @return Restaurants
     */
    public function setPostalzip($postalzip)
    {
        $this->postalzip = $postalzip;
    
        return $this;
    }

    /**
     * Get postalzip
     *
     * @return string 
     */
    public function getPostalzip()
    {
        return $this->postalzip;
    }

    /**
     * Set openingdate
     *
     * @param string $openingdate
     * @return Restaurants
     */
    public function setOpeningdate($openingdate)
    {
        $this->openingdate = $openingdate;
    
        return $this;
    }

    /**
     * Get openingdate
     *
     * @return string 
     */
    public function getOpeningdate()
    {
        return $this->openingdate;
    }

    /**
     * Set legaldescription
     *
     * @param string $legaldescription
     * @return Restaurants
     */
    public function setLegaldescription($legaldescription)
    {
        $this->legaldescription = $legaldescription;
    
        return $this;
    }

    /**
     * Get legaldescription
     *
     * @return string 
     */
    public function getLegaldescription()
    {
        return $this->legaldescription;
    }

    /**
     * Set diningroomseating
     *
     * @param integer $diningroomseating
     * @return Restaurants
     */
    public function setDiningroomseating($diningroomseating)
    {
        $this->diningroomseating = $diningroomseating;
    
        return $this;
    }

    /**
     * Get diningroomseating
     *
     * @return integer 
     */
    public function getDiningroomseating()
    {
        return $this->diningroomseating;
    }

    /**
     * Set loungeseating
     *
     * @param integer $loungeseating
     * @return Restaurants
     */
    public function setLoungeseating($loungeseating)
    {
        $this->loungeseating = $loungeseating;
    
        return $this;
    }

    /**
     * Get loungeseating
     *
     * @return integer 
     */
    public function getLoungeseating()
    {
        return $this->loungeseating;
    }

    /**
     * Set patioseating
     *
     * @param integer $patioseating
     * @return Restaurants
     */
    public function setPatioseating($patioseating)
    {
        $this->patioseating = $patioseating;
    
        return $this;
    }

    /**
     * Get patioseating
     *
     * @return integer 
     */
    public function getPatioseating()
    {
        return $this->patioseating;
    }

    /**
     * Set diningroomtable
     *
     * @param integer $diningroomtable
     * @return Restaurants
     */
    public function setDiningroomtable($diningroomtable)
    {
        $this->diningroomtable = $diningroomtable;
    
        return $this;
    }

    /**
     * Get diningroomtable
     *
     * @return integer 
     */
    public function getDiningroomtable()
    {
        return $this->diningroomtable;
    }

    /**
     * Set loungetable
     *
     * @param integer $loungetable
     * @return Restaurants
     */
    public function setLoungetable($loungetable)
    {
        $this->loungetable = $loungetable;
    
        return $this;
    }

    /**
     * Get loungetable
     *
     * @return integer 
     */
    public function getLoungetable()
    {
        return $this->loungetable;
    }

    /**
     * Set patiotable
     *
     * @param integer $patiotable
     * @return Restaurants
     */
    public function setPatiotable($patiotable)
    {
        $this->patiotable = $patiotable;
    
        return $this;
    }

    /**
     * Get patiotable
     *
     * @return integer 
     */
    public function getPatiotable()
    {
        return $this->patiotable;
    }

    /**
     * Set departmentnumber
     *
     * @param integer $departmentnumber
     * @return Restaurants
     */
    public function setDepartmentnumber($departmentnumber)
    {
        $this->departmentnumber = $departmentnumber;
    
        return $this;
    }

    /**
     * Get departmentnumber
     *
     * @return integer 
     */
    public function getDepartmentnumber()
    {
        return $this->departmentnumber;
    }

    /**
     * Set restaurantstate
     *
     * @param boolean $restaurantstate
     * @return Restaurants
     */
    public function setRestaurantstate($restaurantstate)
    {
        $this->restaurantstate = $restaurantstate;
    
        return $this;
    }

    /**
     * Get restaurantstate
     *
     * @return boolean 
     */
    public function getRestaurantstate()
    {
        return $this->restaurantstate;
    }

    /**
     * Set closedate
     *
     * @param \DateTime $closedate
     * @return Restaurants
     */
    public function setClosedate($closedate)
    {
        $this->closedate = $closedate;
    
        return $this;
    }

    /**
     * Get closedate
     *
     * @return \DateTime 
     */
    public function getClosedate()
    {
        return $this->closedate;
    }

    /**
     * Set royaltyfee
     *
     * @param string $royaltyfee
     * @return Restaurants
     */
    public function setRoyaltyfee($royaltyfee)
    {
        $this->royaltyfee = $royaltyfee;
    
        return $this;
    }

    /**
     * Get royaltyfee
     *
     * @return string 
     */
    public function getRoyaltyfee()
    {
        return $this->royaltyfee;
    }

    /**
     * Set advertisingfee
     *
     * @param string $advertisingfee
     * @return Restaurants
     */
    public function setAdvertisingfee($advertisingfee)
    {
        $this->advertisingfee = $advertisingfee;
    
        return $this;
    }

    /**
     * Get advertisingfee
     *
     * @return string 
     */
    public function getAdvertisingfee()
    {
        return $this->advertisingfee;
    }

    /**
     * Set regionalmngtfee
     *
     * @param string $regionalmngtfee
     * @return Restaurants
     */
    public function setRegionalmngtfee($regionalmngtfee)
    {
        $this->regionalmngtfee = $regionalmngtfee;
    
        return $this;
    }

    /**
     * Get regionalmngtfee
     *
     * @return string 
     */
    public function getRegionalmngtfee()
    {
        return $this->regionalmngtfee;
    }

    /**
     * Set yearbuilt
     *
     * @param string $yearbuilt
     * @return Restaurants
     */
    public function setYearbuilt($yearbuilt)
    {
        $this->yearbuilt = $yearbuilt;
    
        return $this;
    }

    /**
     * Get yearbuilt
     *
     * @return string 
     */
    public function getYearbuilt()
    {
        return $this->yearbuilt;
    }

    /**
     * Set comments
     *
     * @param string $comments
     * @return Restaurants
     */
    public function setComments($comments)
    {
        $this->comments = $comments;
    
        return $this;
    }

    /**
     * Get comments
     *
     * @return string 
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Get restaurantid
     *
     * @return integer 
     */
    public function getRestaurantid()
    {
        return $this->restaurantid;
    }

    /**
     * Set licenseid
     *
     * @param \Earls\CorporateBundle\Entity\Licenses $licenseid
     * @return Restaurants
     */
    public function setLicenseid(\Earls\CorporateBundle\Entity\Licenses $licenseid = null)
    {
        $this->licenseid = $licenseid;
    
        return $this;
    }

    /**
     * Get licenseid
     *
     * @return \Earls\CorporateBundle\Entity\Licenses 
     */
    public function getLicenseid()
    {
        return $this->licenseid;
    }

    /**
     * Set landlordid
     *
     * @param \Earls\CorporateBundle\Entity\Landlords $landlordid
     * @return Restaurants
     */
    public function setLandlordid(\Earls\CorporateBundle\Entity\Landlords $landlordid = null)
    {
        $this->landlordid = $landlordid;
    
        return $this;
    }

    /**
     * Get landlordid
     *
     * @return \Earls\CorporateBundle\Entity\Landlords 
     */
    public function getLandlordid()
    {
        return $this->landlordid;
    }

    /**
     * Set propertymanagerid
     *
     * @param \Earls\CorporateBundle\Entity\Propertymanagers $propertymanagerid
     * @return Restaurants
     */
    public function setPropertymanagerid(\Earls\CorporateBundle\Entity\Propertymanagers $propertymanagerid = null)
    {
        $this->propertymanagerid = $propertymanagerid;
    
        return $this;
    }

    /**
     * Get propertymanagerid
     *
     * @return \Earls\CorporateBundle\Entity\Propertymanagers 
     */
    public function getPropertymanagerid()
    {
        return $this->propertymanagerid;
    }

    /**
     * Set regionid
     *
     * @param \Earls\CorporateBundle\Entity\Regions $regionid
     * @return Restaurants
     */
    public function setRegionid(\Earls\CorporateBundle\Entity\Regions $regionid = null)
    {
        $this->regionid = $regionid;
    
        return $this;
    }

    /**
     * Get regionid
     *
     * @return \Earls\CorporateBundle\Entity\Regions 
     */
    public function getRegionid()
    {
        return $this->regionid;
    }

    /**
     * Set storeclassid
     *
     * @param \Earls\CorporateBundle\Entity\Storeclasses $storeclassid
     * @return Restaurants
     */
    public function setStoreclassid(\Earls\CorporateBundle\Entity\Storeclasses $storeclassid = null)
    {
        $this->storeclassid = $storeclassid;
    
        return $this;
    }

    /**
     * Get storeclassid
     *
     * @return \Earls\CorporateBundle\Entity\Storeclasses 
     */
    public function getStoreclassid()
    {
        return $this->storeclassid;
    }

    /**
     * Set corporateid
     *
     * @param \Earls\CorporateBundle\Entity\Corporations $corporateid
     * @return Restaurants
     */
    public function setCorporateid(\Earls\CorporateBundle\Entity\Corporations $corporateid = null)
    {
        $this->corporateid = $corporateid;
    
        return $this;
    }

    /**
     * Get corporateid
     *
     * @return \Earls\CorporateBundle\Entity\Corporations 
     */
    public function getCorporateid()
    {
        return $this->corporateid;
    }

    /**
     * Set buildingtype
     *
     * @param \Earls\CorporateBundle\Entity\Buildingtypes $buildingtype
     * @return Restaurants
     */
    public function setBuildingtype(\Earls\CorporateBundle\Entity\Buildingtypes $buildingtype = null)
    {
        $this->buildingtype = $buildingtype;
    
        return $this;
    }

    /**
     * Get buildingtype
     *
     * @return \Earls\CorporateBundle\Entity\Buildingtypes 
     */
    public function getBuildingtype()
    {
        return $this->buildingtype;
    }

    /**
     * Set liquorlicenseid
     *
     * @param \Earls\CorporateBundle\Entity\Liquorlicenses $liquorlicenseid
     * @return Restaurants
     */
    public function setLiquorlicenseid(\Earls\CorporateBundle\Entity\Liquorlicenses $liquorlicenseid = null)
    {
        $this->liquorlicenseid = $liquorlicenseid;
    
        return $this;
    }

    /**
     * Get liquorlicenseid
     *
     * @return \Earls\CorporateBundle\Entity\Liquorlicenses 
     */
    public function getLiquorlicenseid()
    {
        return $this->liquorlicenseid;
    }

    /**
     * Set provincestateid
     *
     * @param \Earls\CorporateBundle\Entity\Provincestate $provincestateid
     * @return Restaurants
     */
    public function setProvincestateid(\Earls\CorporateBundle\Entity\Provincestate $provincestateid = null)
    {
        $this->provincestateid = $provincestateid;
    
        return $this;
    }

    /**
     * Get provincestateid
     *
     * @return \Earls\CorporateBundle\Entity\Provincestate 
     */
    public function getProvincestateid()
    {
        return $this->provincestateid;
    }

    /**
     * Set utilityid
     *
     * @param \Earls\CorporateBundle\Entity\Utilities $utilityid
     * @return Restaurants
     */
    public function setUtilityid(\Earls\CorporateBundle\Entity\Utilities $utilityid = null)
    {
        $this->utilityid = $utilityid;
    
        return $this;
    }

    /**
     * Get utilityid
     *
     * @return \Earls\CorporateBundle\Entity\Utilities 
     */
    public function getUtilityid()
    {
        return $this->utilityid;
    }

    /**
     * Set rentandmaintenanceid
     *
     * @param \Earls\CorporateBundle\Entity\Rentandmaintenances $rentandmaintenanceid
     * @return Restaurants
     */
    public function setRentandmaintenanceid(\Earls\CorporateBundle\Entity\Rentandmaintenances $rentandmaintenanceid = null)
    {
        $this->rentandmaintenanceid = $rentandmaintenanceid;
    
        return $this;
    }

    /**
     * Get rentandmaintenanceid
     *
     * @return \Earls\CorporateBundle\Entity\Rentandmaintenances 
     */
    public function getRentandmaintenanceid()
    {
        return $this->rentandmaintenanceid;
    }

    /**
     * Set riskid
     *
     * @param \Earls\CorporateBundle\Entity\Riskinfo $riskid
     * @return Restaurants
     */
    public function setRiskid(\Earls\CorporateBundle\Entity\Riskinfo $riskid = null)
    {
        $this->riskid = $riskid;
    
        return $this;
    }

    /**
     * Get riskid
     *
     * @return \Earls\CorporateBundle\Entity\Riskinfo 
     */
    public function getRiskid()
    {
        return $this->riskid;
    }

    /**
     * Set city
     *
     * @param \Earls\CorporateBundle\Entity\Northamericancities $city
     * @return Restaurants
     */
    public function setCity(\Earls\CorporateBundle\Entity\Northamericancities $city = null)
    {
        $this->city = $city;
    
        return $this;
    }

    /**
     * Get city
     *
     * @return \Earls\CorporateBundle\Entity\Northamericancities 
     */
    public function getCity()
    {
        return $this->city;
    }
}
