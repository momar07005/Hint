<?php

namespace NK\HintBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SousNiveau
 *
 * @ORM\Table(name="sous_niveau")
 * @ORM\Entity(repositoryClass="NK\HintBundle\Repository\SousNiveauRepository")
 */
class SousNiveau
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
     * @ORM\Column(name="nomSousNiveau", type="string", length=255, unique=true)
     */
    private $nomSousNiveau;

    /** 
     * @ORM\ManyToOne(targetEntity="Niveau", inversedBy="sousNiveaux")
    */
    private $niveau;

    /** 
     * @ORM\ManyToOne(targetEntity="Matiere", inversedBy="sousNiveaux")
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
     * Set nomSousNiveau
     *
     * @param string $nomSousNiveau
     *
     * @return SousNiveau
     */
    public function setNomSousNiveau($nomSousNiveau)
    {
        $this->nomSousNiveau = $nomSousNiveau;

        return $this;
    }

    /**
     * Get nomSousNiveau
     *
     * @return string
     */
    public function getNomSousNiveau()
    {
        return $this->nomSousNiveau;
    }

    /**
     * Set niveau
     *
     * @param \NK\HintBundle\Entity\Niveau $niveau
     *
     * @return SousNiveau
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

    /**
     * Set matiere
     *
     * @param \NK\HintBundle\Entity\Matiere $matiere
     *
     * @return SousNiveau
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
