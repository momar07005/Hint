<?php

namespace NK\HintBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cycle
 *
 * @ORM\Table(name="cycle")
 * @ORM\Entity(repositoryClass="NK\HintBundle\Repository\CycleRepository")
 */
class Cycle
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
     * @ORM\Column(name="nomCycle", type="string", length=255, unique=true)
     */
    private $nomCycle;

    /** 
     * @ORM\OneToMany(targetEntity="Niveau", mappedBy="cycle")
    */
    private $niveaux;


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
     * Set nomCycle
     *
     * @param string $nomCycle
     *
     * @return Cycle
     */
    public function setNomCycle($nomCycle)
    {
        $this->nomCycle = $nomCycle;

        return $this;
    }

    /**
     * Get nomCycle
     *
     * @return string
     */
    public function getNomCycle()
    {
        return $this->nomCycle;
    }
}

