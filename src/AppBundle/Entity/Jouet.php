<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Jouet
 *
 * @ORM\Table(name="Jouet")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\JouetRepository")
 */
class Jouet
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
     * @ORM\Column(name="nom", type="string", length=128)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="vignette", type="string", length=255, nullable=true)
     */
    private $vignette;

    /**
     * @var string
     *
     * @ORM\Column(name="quantite_stock", type="integer", nullable=true)
     */
    private $quantite_stock;

    /**
     * @var string
     *
     * @ORM\Column(name="quantite_a_produire", type="integer", nullable=true)
     */
    private $quantite_a_produire;

    // /**
    // * @ORM\OneToMany(targetEntity="AppBundle\Entity\Categories", mappedBy="Jouet")
    // */
    // private $categorie;
    private $enfant;


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
     * @return Jouet
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
     * Set description
     *
     * @param string $description
     *
     * @return Jouet
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set vignette
     *
     * @param string $vignette
     *
     * @return Jouet
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
     * Set quantite
     *
     * @param integer $quantite
     *
     * @return Jouet
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return integer
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set quantiteStock
     *
     * @param integer $quantiteStock
     *
     * @return Jouet
     */
    public function setQuantiteStock($quantiteStock)
    {
        $this->quantite_stock = $quantiteStock;

        return $this;
    }

    /**
     * Get quantiteStock
     *
     * @return integer
     */
    public function getQuantiteStock()
    {
        return $this->quantite_stock;
    }

    /**
     * Set quantiteAProduire
     *
     * @param integer $quantiteAProduire
     *
     * @return Jouet
     */
    public function setQuantiteAProduire($quantiteAProduire)
    {
        $this->quantite_a_produire = $quantiteAProduire;

        return $this;
    }

    /**
     * Get quantiteAProduire
     *
     * @return integer
     */
    public function getQuantiteAProduire()
    {
        return $this->quantite_a_produire;
    }
}
