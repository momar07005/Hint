<?php

namespace NK\HintBundle\Entity;

/**
 * Matiere
 */
class Matiere
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $intitule;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set intitule
     *
     * @param string $intitule
     *
     * @return Matiere
     */
    public function setIntitule($intitule)
    {
        $this->intitule = $intitule;
    
        return $this;
    }

    /**
     * Get intitule
     *
     * @return string
     */
    public function getIntitule()
    {
        return $this->intitule;
    }
}

