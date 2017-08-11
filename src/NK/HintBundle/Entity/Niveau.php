<?php

namespace NK\HintBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Niveau
 *
 * @ORM\Table(name="niveau")
 * @ORM\Entity(repositoryClass="NK\HintBundle\Repository\NiveauRepository")
 */
class Niveau
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
     * @ORM\Column(name="nomNiveau", type="string", length=255)
     */
    private $nomNiveau;

    /**
     * @var string
     *
     * @ORM\Column(name="couleurNiveau", type="string", length=255)
     */
    private $couleurNiveau;

    /** 
     * @ORM\ManyToOne(targetEntity="Cycle", inversedBy="niveaux")
    */
    private $cycle;

    /** 
     * @ORM\OneToMany(targetEntity="Matiere", mappedBy="niveau")
    */
    private $matieres;

    /** 
     * @ORM\OneToMany(targetEntity="SousNiveau", mappedBy="niveau")
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
     * Set nomNiveau
     *
     * @param string $nomNiveau
     *
     * @return Niveau
     */
    public function setNomNiveau($nomNiveau)
    {
        $this->nomNiveau = $nomNiveau;

        return $this;
    }

    /**
     * Get nomNiveau
     *
     * @return string
     */
    public function getNomNiveau()
    {
        return $this->nomNiveau;
    }

    /**
     * Set couleurNiveau
     *
     * @param string $couleurNiveau
     *
     * @return Niveau
     */
    public function setCouleurNiveau($couleurNiveau)
    {
        $this->couleurNiveau = $couleurNiveau;

        return $this;
    }

    /**
     * Get couleurNiveau
     *
     * @return string
     */
    public function getCouleurNiveau()
    {
        return $this->couleurNiveau;
    }
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->matieres = new \Doctrine\Common\Collections\ArrayCollection();
        $this->sousNiveaux = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set cycle
     *
     * @param \NK\HintBundle\Entity\Cycle $cycle
     *
     * @return Niveau
     */
    public function setCycle(\NK\HintBundle\Entity\Cycle $cycle = null)
    {
        $this->cycle = $cycle;
    
        return $this;
    }

    /**
     * Get cycle
     *
     * @return \NK\HintBundle\Entity\Cycle
     */
    public function getcycle()
    {
        return $this->cycle;
    }

    /**
     * Add matiere
     *
     * @param \NK\HintBundle\Entity\Matiere $matiere
     *
     * @return Niveau
     */
    public function addMatiere(\NK\HintBundle\Entity\Matiere $matiere)
    {
        $this->matieres[] = $matiere;
    
        return $this;
    }

    /**
     * Remove matiere
     *
     * @param \NK\HintBundle\Entity\Matiere $matiere
     */
    public function removeMatiere(\NK\HintBundle\Entity\Matiere $matiere)
    {
        $this->matieres->removeElement($matiere);
    }

    /**
     * Get matieres
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMatieres()
    {
        return $this->matieres;
    }

    /**
     * Add sousNiveaux
     *
     * @param \NK\HintBundle\Entity\SousNiveau $sousNiveaux
     *
     * @return Niveau
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
