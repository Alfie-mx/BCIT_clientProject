<?php

namespace Earls\CorporateBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Corporations
 */
class Corporations
{
    /**
     * @var string
     */
    private $corporatename;

    /**
     * @var integer
     */
    private $filenumber;

    /**
     * @var string
     */
    private $respsolicitor;

    /**
     * @var string
     */
    private $usage;

    /**
     * @var string
     */
    private $fiscalyearend;

    /**
     * @var string
     */
    private $registrationnumber;

    /**
     * @var \DateTime
     */
    private $registrationdate;

    /**
     * @var boolean
     */
    private $seal;

    /**
     * @var string
     */
    private $locationseal;

    /**
     * @var string
     */
    private $capitalstructure;

    /**
     * @var string
     */
    private $namechanges;

    /**
     * @var boolean
     */
    private $corpstatus;

    /**
     * @var \DateTime
     */
    private $dissolutiondate;

    /**
     * @var integer
     */
    private $corporateid;

    /**
     * @var \Earls\CorporateBundle\Entity\Registeredoffices
     */
    private $registeredofficeid;

    /**
     * @var \Earls\CorporateBundle\Entity\Recordsoffices
     */
    private $recordsofficeid;

    /**
     * @var \Earls\CorporateBundle\Entity\Provincestate
     */
    private $provincestateid;


    /**
     * Set corporatename
     *
     * @param string $corporatename
     * @return Corporations
     */
    public function setCorporatename($corporatename)
    {
        $this->corporatename = $corporatename;
    
        return $this;
    }

    /**
     * Get corporatename
     *
     * @return string 
     */
    public function getCorporatename()
    {
        return $this->corporatename;
    }

    /**
     * Set filenumber
     *
     * @param integer $filenumber
     * @return Corporations
     */
    public function setFilenumber($filenumber)
    {
        $this->filenumber = $filenumber;
    
        return $this;
    }

    /**
     * Get filenumber
     *
     * @return integer 
     */
    public function getFilenumber()
    {
        return $this->filenumber;
    }

    /**
     * Set respsolicitor
     *
     * @param string $respsolicitor
     * @return Corporations
     */
    public function setRespsolicitor($respsolicitor)
    {
        $this->respsolicitor = $respsolicitor;
    
        return $this;
    }

    /**
     * Get respsolicitor
     *
     * @return string 
     */
    public function getRespsolicitor()
    {
        return $this->respsolicitor;
    }

    /**
     * Set usage
     *
     * @param string $usage
     * @return Corporations
     */
    public function setUsage($usage)
    {
        $this->usage = $usage;
    
        return $this;
    }

    /**
     * Get usage
     *
     * @return string 
     */
    public function getUsage()
    {
        return $this->usage;
    }

    /**
     * Set fiscalyearend
     *
     * @param string $fiscalyearend
     * @return Corporations
     */
    public function setFiscalyearend($fiscalyearend)
    {
        $this->fiscalyearend = $fiscalyearend;
    
        return $this;
    }

    /**
     * Get fiscalyearend
     *
     * @return string 
     */
    public function getFiscalyearend()
    {
        return $this->fiscalyearend;
    }

    /**
     * Set registrationnumber
     *
     * @param string $registrationnumber
     * @return Corporations
     */
    public function setRegistrationnumber($registrationnumber)
    {
        $this->registrationnumber = $registrationnumber;
    
        return $this;
    }

    /**
     * Get registrationnumber
     *
     * @return string 
     */
    public function getRegistrationnumber()
    {
        return $this->registrationnumber;
    }

    /**
     * Set registrationdate
     *
     * @param \DateTime $registrationdate
     * @return Corporations
     */
    public function setRegistrationdate($registrationdate)
    {
        $this->registrationdate = $registrationdate;
    
        return $this;
    }

    /**
     * Get registrationdate
     *
     * @return \DateTime 
     */
    public function getRegistrationdate()
    {
        return $this->registrationdate;
    }

    /**
     * Set seal
     *
     * @param boolean $seal
     * @return Corporations
     */
    public function setSeal($seal)
    {
        $this->seal = $seal;
    
        return $this;
    }

    /**
     * Get seal
     *
     * @return boolean 
     */
    public function getSeal()
    {
        return $this->seal;
    }

    /**
     * Set locationseal
     *
     * @param string $locationseal
     * @return Corporations
     */
    public function setLocationseal($locationseal)
    {
        $this->locationseal = $locationseal;
    
        return $this;
    }

    /**
     * Get locationseal
     *
     * @return string 
     */
    public function getLocationseal()
    {
        return $this->locationseal;
    }

    /**
     * Set capitalstructure
     *
     * @param string $capitalstructure
     * @return Corporations
     */
    public function setCapitalstructure($capitalstructure)
    {
        $this->capitalstructure = $capitalstructure;
    
        return $this;
    }

    /**
     * Get capitalstructure
     *
     * @return string 
     */
    public function getCapitalstructure()
    {
        return $this->capitalstructure;
    }

    /**
     * Set namechanges
     *
     * @param string $namechanges
     * @return Corporations
     */
    public function setNamechanges($namechanges)
    {
        $this->namechanges = $namechanges;
    
        return $this;
    }

    /**
     * Get namechanges
     *
     * @return string 
     */
    public function getNamechanges()
    {
        return $this->namechanges;
    }

    /**
     * Set corpstatus
     *
     * @param boolean $corpstatus
     * @return Corporations
     */
    public function setCorpstatus($corpstatus)
    {
        $this->corpstatus = $corpstatus;
    
        return $this;
    }

    /**
     * Get corpstatus
     *
     * @return boolean 
     */
    public function getCorpstatus()
    {
        return $this->corpstatus;
    }

    /**
     * Set dissolutiondate
     *
     * @param \DateTime $dissolutiondate
     * @return Corporations
     */
    public function setDissolutiondate($dissolutiondate)
    {
        $this->dissolutiondate = $dissolutiondate;
    
        return $this;
    }

    /**
     * Get dissolutiondate
     *
     * @return \DateTime 
     */
    public function getDissolutiondate()
    {
        return $this->dissolutiondate;
    }

    /**
     * Get corporateid
     *
     * @return integer 
     */
    public function getCorporateid()
    {
        return $this->corporateid;
    }

    /**
     * Set registeredofficeid
     *
     * @param \Earls\CorporateBundle\Entity\Registeredoffices $registeredofficeid
     * @return Corporations
     */
    public function setRegisteredofficeid(\Earls\CorporateBundle\Entity\Registeredoffices $registeredofficeid = null)
    {
        $this->registeredofficeid = $registeredofficeid;
    
        return $this;
    }

    /**
     * Get registeredofficeid
     *
     * @return \Earls\CorporateBundle\Entity\Registeredoffices 
     */
    public function getRegisteredofficeid()
    {
        return $this->registeredofficeid;
    }

    /**
     * Set recordsofficeid
     *
     * @param \Earls\CorporateBundle\Entity\Recordsoffices $recordsofficeid
     * @return Corporations
     */
    public function setRecordsofficeid(\Earls\CorporateBundle\Entity\Recordsoffices $recordsofficeid = null)
    {
        $this->recordsofficeid = $recordsofficeid;
    
        return $this;
    }

    /**
     * Get recordsofficeid
     *
     * @return \Earls\CorporateBundle\Entity\Recordsoffices 
     */
    public function getRecordsofficeid()
    {
        return $this->recordsofficeid;
    }

    /**
     * Set provincestateid
     *
     * @param \Earls\CorporateBundle\Entity\Provincestate $provincestateid
     * @return Corporations
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
}
