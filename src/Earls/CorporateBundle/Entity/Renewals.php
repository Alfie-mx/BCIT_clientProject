<?php

namespace Earls\CorporateBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Renewals
 */
class Renewals
{
    /**
     * @var string
     */
    private $term;

    /**
     * @var boolean
     */
    private $exercised;

    /**
     * @var boolean
     */
    private $showinleasereport;

    /**
     * @var integer
     */
    private $renewalid;

    /**
     * @var \Earls\CorporateBundle\Entity\Leases
     */
    private $leaseid;


    /**
     * Set term
     *
     * @param string $term
     * @return Renewals
     */
    public function setTerm($term)
    {
        $this->term = $term;
    
        return $this;
    }

    /**
     * Get term
     *
     * @return string 
     */
    public function getTerm()
    {
        return $this->term;
    }

    /**
     * Set exercised
     *
     * @param boolean $exercised
     * @return Renewals
     */
    public function setExercised($exercised)
    {
        $this->exercised = $exercised;
    
        return $this;
    }

    /**
     * Get exercised
     *
     * @return boolean 
     */
    public function getExercised()
    {
        return $this->exercised;
    }

    /**
     * Set showinleasereport
     *
     * @param boolean $showinleasereport
     * @return Renewals
     */
    public function setShowinleasereport($showinleasereport)
    {
        $this->showinleasereport = $showinleasereport;
    
        return $this;
    }

    /**
     * Get showinleasereport
     *
     * @return boolean 
     */
    public function getShowinleasereport()
    {
        return $this->showinleasereport;
    }

    /**
     * Get renewalid
     *
     * @return integer 
     */
    public function getRenewalid()
    {
        return $this->renewalid;
    }

    /**
     * Set leaseid
     *
     * @param \Earls\CorporateBundle\Entity\Leases $leaseid
     * @return Renewals
     */
    public function setLeaseid(\Earls\CorporateBundle\Entity\Leases $leaseid = null)
    {
        $this->leaseid = $leaseid;
    
        return $this;
    }

    /**
     * Get leaseid
     *
     * @return \Earls\CorporateBundle\Entity\Leases 
     */
    public function getLeaseid()
    {
        return $this->leaseid;
    }
}
