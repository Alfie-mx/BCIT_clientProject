<?php

namespace Earls\CorporateBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Directors
 */
class Directors
{
    /**
     * @var string
     */
    private $directorname;

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
    private $directorid;

    /**
     * @var \Earls\CorporateBundle\Entity\Provincestate
     */
    private $provincestateid;

    /**
     * @var \Earls\CorporateBundle\Entity\Northamericancities
     */
    private $city;


    /**
     * Set directorname
     *
     * @param string $directorname
     * @return Directors
     */
    public function setDirectorname($directorname)
    {
        $this->directorname = $directorname;
    
        return $this;
    }

    /**
     * Get directorname
     *
     * @return string 
     */
    public function getDirectorname()
    {
        return $this->directorname;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return Directors
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
     * @return Directors
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
     * Get directorid
     *
     * @return integer 
     */
    public function getDirectorid()
    {
        return $this->directorid;
    }

    /**
     * Set provincestateid
     *
     * @param \Earls\CorporateBundle\Entity\Provincestate $provincestateid
     * @return Directors
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
     * @return Directors
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
