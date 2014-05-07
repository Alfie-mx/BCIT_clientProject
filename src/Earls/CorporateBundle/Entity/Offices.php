<?php

namespace Earls\CorporateBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Offices
 */
class Offices
{
    /**
     * @var string
     */
    private $officename;

    /**
     * @var string
     */
    private $address;

    /**
     * @var string
     */
    private $postalzip;

    /**
     * @var integer
     */
    private $officeid;

    /**
     * @var \Earls\CorporateBundle\Entity\Provincestate
     */
    private $provincestateid;

    /**
     * @var \Earls\CorporateBundle\Entity\Northamericancities
     */
    private $city;


    /**
     * Set officename
     *
     * @param string $officename
     * @return Offices
     */
    public function setOfficename($officename)
    {
        $this->officename = $officename;
    
        return $this;
    }

    /**
     * Get officename
     *
     * @return string 
     */
    public function getOfficename()
    {
        return $this->officename;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return Offices
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
     * @return Offices
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
     * Get officeid
     *
     * @return integer 
     */
    public function getOfficeid()
    {
        return $this->officeid;
    }

    /**
     * Set provincestateid
     *
     * @param \Earls\CorporateBundle\Entity\Provincestate $provincestateid
     * @return Offices
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
     * Set city
     *
     * @param \Earls\CorporateBundle\Entity\Northamericancities $city
     * @return Offices
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
