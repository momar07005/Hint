<?php

namespace NK\HintBundle\Entity;

/**
 * Niveau
 */
class Niveau
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nomNiv;


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
     * Set nomNiv
     *
     * @param string $nomNiv
     *
     * @return Niveau
     */
    public function setNomNiv($nomNiv)
    {
        $this->nomNiv = $nomNiv;
    
        return $this;
    }

    /**
     * Get nomNiv
     *
     * @return string
     */
    public function getNomNiv()
    {
        return $this->nomNiv;
    }

}

