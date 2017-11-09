<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Jouets
 *
 * @ORM\Table(name="jouets")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\JouetsRepository")
 */
class Jouets
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="vignette", type="string", length=255)
     */
    private $vignette;

    /**
    * @ORM\OneToMany(targetEntity="AppBundle\Entity\Enfants", mappedBy="jouets")
    */
    private $enfant;

    // /**
    // * @ORM\OneToMany(targetEntity="AppBundle\Entity\Categories", mappedBy="jouets")
    // */
    // private $categorie;


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
     * Set nom
     *
     * @param string $nom
     *
     * @return Jouets
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set vignette
     *
     * @param string $vignette
     *
     * @return Jouets
     */
    public function setVignette($vignette)
    {
        $this->vignette = $vignette;

        return $this;
    }

    /**
     * Get vignette
     *
     * @return string
     */
    public function getVignette()
    {
        return $this->vignette;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->enfant = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add enfant
     *
     * @param \WCS\CoavBundle\Entity\Enfants $enfant
     *
     * @return Jouets
     */
    public function addEnfant(\WCS\CoavBundle\Entity\Enfants $enfant)
    {
        $this->enfant[] = $enfant;

        return $this;
    }

    /**
     * Remove enfant
     *
     * @param \WCS\CoavBundle\Entity\Enfants $enfant
     */
    public function removeEnfant(\WCS\CoavBundle\Entity\Enfants $enfant)
    {
        $this->enfant->removeElement($enfant);
    }

    /**
     * Get enfant
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEnfant()
    {
        return $this->enfant;
    }
}
