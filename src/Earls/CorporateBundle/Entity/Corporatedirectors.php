<?php

namespace Earls\CorporateBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Corporatedirectors
 */
class Corporatedirectors
{
    /**
     * @var string
     */
    private $position;

    /**
     * @var integer
     */
    private $corporatedirectorid;

    /**
     * @var \Earls\CorporateBundle\Entity\Corporations
     */
    private $corporateid;

    /**
     * @var \Earls\CorporateBundle\Entity\Directors
     */
    private $directorid;


    /**
     * Set position
     *
     * @param string $position
     * @return Corporatedirectors
     */
    public function setPosition($position)
    {
        $this->position = $position;
    
        return $this;
    }

    /**
     * Get position
     *
     * @return string 
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Get corporatedirectorid
     *
     * @return integer 
     */
    public function getCorporatedirectorid()
    {
        return $this->corporatedirectorid;
    }

    /**
     * Set corporateid
     *
     * @param \Earls\CorporateBundle\Entity\Corporations $corporateid
     * @return Corporatedirectors
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
     * Set directorid
     *
     * @param \Earls\CorporateBundle\Entity\Directors $directorid
     * @return Corporatedirectors
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
}
