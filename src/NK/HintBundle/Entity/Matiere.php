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
     * @ORM\ManyToMany(targetEntity="Niveau", inversedBy="matieres")
     * @ORM\JoinTable(name="matieres_niveaux")
    */
    private $niveaux;

    /** 
     * @ORM\OneToMany(targetEntity="SousNiveau", mappedBy="matiere")
    */
    private $sousNiveaux;

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
     * Add sousNiveaux
     *
     * @param \NK\HintBundle\Entity\SousNiveau $sousNiveaux
     *
     * @return Matiere
     */
    public function addSousNiveaux(\NK\HintBundle\Entity\SousNiveau $sousNiveaux)
    {
        $this->sousNiveaux[] = $sousNiveaux;
    
        return $this;
    }

    /**
     * Remove sousNiveaux
     *
     * @param \NK\HintBundle\Entity\SousNiveau $sousNiveaux
     */
    public function removeSousNiveaux(\NK\HintBundle\Entity\SousNiveau $sousNiveaux)
    {
        $this->sousNiveaux->removeElement($sousNiveaux);
    }

    /**
     * Get sousNiveaux
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSousNiveaux()
    {
        return $this->sousNiveaux;
    }
}
