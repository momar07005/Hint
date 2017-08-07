<?php

namespace NK\HintBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Document
 *
 * @ORM\Table(name="document")
 * @ORM\Entity(repositoryClass="NK\HintBundle\Repository\DocumentRepository")
 */
class Document
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nomDocument", type="string", length=255)
     */
    private $nomDocument;

    /** 
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="documents")
    */
    private $category;

    /** 
     * @ORM\ManyToOne(targetEntity="Matiere", inversedBy="documents")
    */
    private $matiere;


    /**
     * Get id
     *
     * @return int
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

   

    /**
     * Set category
     *
     * @param \NK\HintBundle\Entity\Category $category
     *
     * @return Document
     */
    public function setCategory(\NK\HintBundle\Entity\Category $category = null)
    {
        $this->category = $category;
    
        return $this;
    }

    /**
     * Get category
     *
     * @return \NK\HintBundle\Entity\Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set matiere
     *
     * @param \NK\HintBundle\Entity\Matiere $matiere
     *
     * @return Document
     */
    public function setMatiere(\NK\HintBundle\Entity\Matiere $matiere = null)
    {
        $this->matiere = $matiere;
    
        return $this;
    }

    /**
     * Get matiere
     *
     * @return \NK\HintBundle\Entity\Matiere
     */
    public function getMatiere()
    {
        return $this->matiere;
    }
}
