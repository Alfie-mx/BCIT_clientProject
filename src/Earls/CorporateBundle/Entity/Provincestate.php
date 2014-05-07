<?php

namespace Earls\CorporateBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Provincestate
 */
class Provincestate
{
    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $provincestateid;


    /**
     * Set description
     *
     * @param string $description
     * @return Provincestate
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Get provincestateid
     *
     * @return string 
     */
    public function getProvincestateid()
    {
        return $this->provincestateid;
    }
}
