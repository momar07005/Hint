<?php

namespace NK\HintBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 *
 * @ORM\Table(name="category")
 * @ORM\Entity(repositoryClass="NK\HintBundle\Repository\CategoryRepository")
 */
class Category
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
     * @ORM\Column(name="nomCategory", type="string", length=255, unique=true)
     */
    private $nomCategory;

    /** 
     * @ORM\OneToMany(targetEntity="Document", mappedBy="category")
    */
    private $documents;

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
     * Set nomCategory
     *
     * @param string $nomCategory
     *
     * @return Category
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
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->documents = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add document
     *
     * @param \NK\HintBundle\Entity\Document $document
     *
     * @return Category
     */
    public function addDocument(\NK\HintBundle\Entity\Document $document)
    {
        $this->documents[] = $document;

        return $this;
    }

    /**
     * Remove document
     *
     * @param \NK\HintBundle\Entity\Document $document
     */
    public function removeDocument(\NK\HintBundle\Entity\Document $document)
    {
        $this->documents->removeElement($document);
    }

    /**
     * Get documents
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDocuments()
    {
        return $this->documents;
    }
}
