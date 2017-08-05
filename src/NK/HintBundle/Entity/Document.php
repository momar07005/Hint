<?php

namespace NK\HintBundle\Entity;

/**
 * Document
 */
class Document
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nomDocument;


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
     * Set nomDocument
     *
     * @param string $nomDocument
     *
     * @return Document
     */
    public function setNomDocument($nomDocument)
    {
        $this->nomDocument = $nomDocument;
    
        return $this;
    }

    /**
     * Get nomDocument
     *
     * @return string
     */
    public function getNomDocument()
    {
        return $this->nomDocument;
    }
}

