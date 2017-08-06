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
}

