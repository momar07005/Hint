<?php

namespace NK\HintBundle\Entity;

/**
 * Cycle
 */
class Cycle
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nomCycle;


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
     * Set nomCycle
     *
     * @param string $nomCycle
     *
     * @return Cycle
     */
    public function setNomCycle($nomCycle)
    {
        $this->nomCycle = $nomCycle;
    
        return $this;
    }

    /**
     * Get nomCycle
     *
     * @return string
     */
    public function getNomCycle()
    {
        return $this->nomCycle;
    }
}

