<?php

namespace Earls\CorporateBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Memberships
 */
class Memberships
{
    /**
     * @var integer
     */
    private $numberofshares;

    /**
     * @var integer
     */
    private $membershipid;

    /**
     * @var \Earls\CorporateBundle\Entity\Sharetypes
     */
    private $sharetypeid;

    /**
     * @var \Earls\CorporateBundle\Entity\Directors
     */
    private $directorid;

    /**
     * @var \Earls\CorporateBundle\Entity\Corporations
     */
    private $corporateid;


    /**
     * Set numberofshares
     *
     * @param integer $numberofshares
     * @return Memberships
     */
    public function setNumberofshares($numberofshares)
    {
        $this->numberofshares = $numberofshares;
    
        return $this;
    }

    /**
     * Get numberofshares
     *
     * @return integer 
     */
    public function getNumberofshares()
    {
        return $this->numberofshares;
    }

    /**
     * Get membershipid
     *
     * @return integer 
     */
    public function getMembershipid()
    {
        return $this->membershipid;
    }

    /**
     * Set sharetypeid
     *
     * @param \Earls\CorporateBundle\Entity\Sharetypes $sharetypeid
     * @return Memberships
     */
    public function setSharetypeid(\Earls\CorporateBundle\Entity\Sharetypes $sharetypeid = null)
    {
        $this->sharetypeid = $sharetypeid;
    
        return $this;
    }

    /**
     * Get sharetypeid
     *
     * @return \Earls\CorporateBundle\Entity\Sharetypes 
     */
    public function getSharetypeid()
    {
        return $this->sharetypeid;
    }

    /**
     * Set directorid
     *
     * @param \Earls\CorporateBundle\Entity\Directors $directorid
     * @return Memberships
     */
    public function setDirectorid(\Earls\CorporateBundle\Entity\Directors $directorid = null)
    {
        $this->directorid = $directorid;
    
        return $this;
    }

    /**
     * Get directorid
     *
     * @return \Earls\CorporateBundle\Entity\Directors 
     */
    public function getDirectorid()
    {
        return $this->directorid;
    }

    /**
     * Set corporateid
     *
     * @param \Earls\CorporateBundle\Entity\Corporations $corporateid
     * @return Memberships
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
}
