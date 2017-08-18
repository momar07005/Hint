<?php

namespace NK\HintBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Matiere
 *
 * @ORM\Table(name="matiere")
 * @ORM\Entity(repositoryClass="NK\HintBundle\Repository\MatiereRepository")
 */
class Matiere
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
     * @ORM\Column(name="nomMatiere", type="string", length=255)
     */
    private $nomMatiere;

    /** 
     * @ORM\OneToMany(targetEntity="Document", mappedBy="matiere")
    */
    private $documents;

    /** 
     * @ORM\ManyToOne(targetEntity="Niveau", inversedBy="matieres")
     * @ORM\JoinColumn(referencedColumnName="id", onDelete="CASCADE")
    */
    private $niveau;


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
     * Set nomMatiere
     *
     * @param string $nomMatiere
     *
     * @return Matiere
     */
    public function setNomMatiere($nomMatiere)
    {
        $this->nomMatiere = $nomMatiere;

        return $this;
    }

    /**
     * Get nomMatiere
     *
     * @return string
     */
    public function getNomMatiere()
    {
        return $this->nomMatiere;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->documents = new \Doctrine\Common\Collections\ArrayCollection();
        $this->niveaux = new \Doctrine\Common\Collections\ArrayCollection();
        $this->sousNiveaux = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add document
     *
     * @param \NK\HintBundle\Entity\Document $document
     *
     * @return Matiere
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

    /**
     * Add niveaux
     *
     * @param \NK\HintBundle\Entity\Niveau $niveaux
     *
     * @return Matiere
     */
    public function addNiveaux(\NK\HintBundle\Entity\Niveau $niveaux)
    {
        $this->niveaux[] = $niveaux;
    
        return $this;
    }

    /**
     * Remove niveaux
     *
     * @param \NK\HintBundle\Entity\Niveau $niveaux
     */
    public function removeNiveaux(\NK\HintBundle\Entity\Niveau $niveaux)
    {
        $this->niveaux->removeElement($niveaux);
    }

    /**
     * Get niveaux
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getNiveaux()
    {
        return $this->niveaux;
    }

    
    /**
     * Set niveau
     *
     * @param \NK\HintBundle\Entity\Niveau $niveau
     *
     * @return Matiere
     */
    public function setNiveau(\NK\HintBundle\Entity\Niveau $niveau = null)
    {
        $this->niveau = $niveau;

        return $this;
    }

    /**
     * Get niveau
     *
     * @return \NK\HintBundle\Entity\Niveau
     */
    public function getNiveau()
    {
        return $this->niveau;
    }
}
