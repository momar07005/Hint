<?php

namespace NK\HintBundle\Entity;

/**
 * Categorie
 */
class Categorie
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nomCategory;


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
     * Set nomCategory
     *
     * @param string $nomCategory
     *
     * @return Categorie
     */
    public function setNomCategory($nomCategory)
    {
        $this->nomCategory = $nomCategory;
    
        return $this;
    }

    /**
     * Get nomCategory
     *
     * @return string
     */
    public function getNomCategory()
    {
        return $this->nomCategory;
    }
}

