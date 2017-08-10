<?php

namespace NK\HintBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\File;

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
     * @ORM\Column(name="nom", type="string", length=255, nullable=true)
     */
    private $nomDocument;

    /**
     * @Vich\UploadableField(mapping="document_pdf", fileNameProperty="nom")
     * @var File
     */
    private $pdf;

    /**
     * @ORM\Column(type="datetime")
     * @var \DateTime
     */
    private $updatedAt;

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

     public function setPdf(File $pdf = null)
    {
        $this->pdf = $pdf;
        // VERY IMPORTANT:
        // It is required that at least one field changes if you are using Doctrine,
        // otherwise the event listeners won't be called and the file is lost
        if ($pdf) {
            // if 'updatedAt' is not defined in your entity, use another property
            $this->updatedAt = new \DateTime('now');
        }
    }
    public function getPdf()
    {
        return $this->pdf;
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

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Document
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
}
