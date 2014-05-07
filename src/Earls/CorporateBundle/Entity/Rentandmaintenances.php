<?php

namespace Earls\CorporateBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rentandmaintenances
 */
class Rentandmaintenances
{
    /**
     * @var integer
     */
    private $rentandmaintenanceid;

    /**
     * @var \Earls\CorporateBundle\Entity\Owners
     */
    private $roofreplace;

    /**
     * @var \Earls\CorporateBundle\Entity\Owners
     */
    private $roofrepair;

    /**
     * @var \Earls\CorporateBundle\Entity\Restaurants
     */
    private $restaurantid;

    /**
     * @var \Earls\CorporateBundle\Entity\Owners
     */
    private $hvacreplace;

    /**
     * @var \Earls\CorporateBundle\Entity\Owners
     */
    private $hvacrepair;


    /**
     * Get rentandmaintenanceid
     *
     * @return integer 
     */
    public function getRentandmaintenanceid()
    {
        return $this->rentandmaintenanceid;
    }

    /**
     * Set roofreplace
     *
     * @param \Earls\CorporateBundle\Entity\Owners $roofreplace
     * @return Rentandmaintenances
     */
    public function setRoofreplace(\Earls\CorporateBundle\Entity\Owners $roofreplace = null)
    {
        $this->roofreplace = $roofreplace;
    
        return $this;
    }

    /**
     * Get roofreplace
     *
     * @return \Earls\CorporateBundle\Entity\Owners 
     */
    public function getRoofreplace()
    {
        return $this->roofreplace;
    }

    /**
     * Set roofrepair
     *
     * @param \Earls\CorporateBundle\Entity\Owners $roofrepair
     * @return Rentandmaintenances
     */
    public function setRoofrepair(\Earls\CorporateBundle\Entity\Owners $roofrepair = null)
    {
        $this->roofrepair = $roofrepair;
    
        return $this;
    }

    /**
     * Get roofrepair
     *
     * @return \Earls\CorporateBundle\Entity\Owners 
     */
    public function getRoofrepair()
    {
        return $this->roofrepair;
    }

    /**
     * Set restaurantid
     *
     * @param \Earls\CorporateBundle\Entity\Restaurants $restaurantid
     * @return Rentandmaintenances
     */
    public function setRestaurantid(\Earls\CorporateBundle\Entity\Restaurants $restaurantid = null)
    {
        $this->restaurantid = $restaurantid;
    
        return $this;
    }

    /**
     * Get restaurantid
     *
     * @return \Earls\CorporateBundle\Entity\Restaurants 
     */
    public function getRestaurantid()
    {
        return $this->restaurantid;
    }

    /**
     * Set hvacreplace
     *
     * @param \Earls\CorporateBundle\Entity\Owners $hvacreplace
     * @return Rentandmaintenances
     */
    public function setHvacreplace(\Earls\CorporateBundle\Entity\Owners $hvacreplace = null)
    {
        $this->hvacreplace = $hvacreplace;
    
        return $this;
    }

    /**
     * Get hvacreplace
     *
     * @return \Earls\CorporateBundle\Entity\Owners 
     */
    public function getHvacreplace()
    {
        return $this->hvacreplace;
    }

    /**
     * Set hvacrepair
     *
     * @param \Earls\CorporateBundle\Entity\Owners $hvacrepair
     * @return Rentandmaintenances
     */
    public function setHvacrepair(\Earls\CorporateBundle\Entity\Owners $hvacrepair = null)
    {
        $this->hvacrepair = $hvacrepair;
    
        return $this;
    }

    /**
     * Get hvacrepair
     *
     * @return \Earls\CorporateBundle\Entity\Owners 
     */
    public function getHvacrepair()
    {
        return $this->hvacrepair;
    }
}
