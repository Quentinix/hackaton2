<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categories
 *
 * @ORM\Table(name="categories")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CategoriesRepository")
 */
class Categories
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
     * @var bool
     *
     * @ORM\Column(name="Peluches", type="boolean")
     */
    private $peluches;

    /**
     * @var bool
     *
     * @ORM\Column(name="legoPlaymobil", type="boolean")
     */
    private $legoPlaymobil;

    /**
     * @var bool
     *
     * @ORM\Column(name="poupees", type="boolean")
     */
    private $poupees;

    /**
     * @var bool
     *
     * @ORM\Column(name="voitures", type="boolean")
     */
    private $voitures;

    /**
     * @var bool
     *
     * @ORM\Column(name="jeuxSociete", type="boolean")
     */
    private $jeuxSociete;

    /**
     * @var bool
     *
     * @ORM\Column(name="loisirsCreatifs", type="boolean")
     */
    private $loisirsCreatifs;

    /**
     * @var bool
     *
     * @ORM\Column(name="figurines", type="boolean")
     */
    private $figurines;

    /**
     * @var bool
     *
     * @ORM\Column(name="jeuxVideos", type="boolean")
     */
    private $jeuxVideos;

    /**
     * @var bool
     *
     * @ORM\Column(name="jeuxExterieur", type="boolean")
     */
    private $jeuxExterieur;

    /**
     * @var bool
     *
     * @ORM\Column(name="deguisement", type="boolean")
     */
    private $deguisement;

    /**
     * @var bool
     *
     * @ORM\Column(name="instrumentMusique", type="boolean")
     */
    private $instrumentMusique;

    /**
    * @var string
     *
     * @ORM\Column(name="model", type="string", length=64)
    * @ORM\OneToMany(targetEntity="AppBundle\Entity\Enfants", mappedBy="categorie")
    */
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
     * Set peluches
     *
     * @param string $peluches
     *
     * @return Categories
     */
    public function setPeluches($peluches)
    {
        $this->peluches = $peluches;

        return $this;
    }

    /**
     * Get peluches
     *
     * @return string
     */
    public function getPeluches()
    {
        return $this->peluches;
    }

    /**
     * Set legoPlaymobil
     *
     * @param string $legoPlaymobil
     *
     * @return Categories
     */
    public function setLegoPlaymobil($legoPlaymobil)
    {
        $this->legoPlaymobil = $legoPlaymobil;

        return $this;
    }

    /**
     * Get legoPlaymobil
     *
     * @return string
     */
    public function getLegoPlaymobil()
    {
        return $this->legoPlaymobil;
    }

    /**
     * Set poupees
     *
     * @param string $poupees
     *
     * @return Categories
     */
    public function setPoupees($poupees)
    {
        $this->poupees = $poupees;

        return $this;
    }

    /**
     * Get poupees
     *
     * @return string
     */
    public function getPoupees()
    {
        return $this->poupees;
    }

    /**
     * Set voitures
     *
     * @param string $voitures
     *
     * @return Categories
     */
    public function setVoitures($voitures)
    {
        $this->voitures = $voitures;

        return $this;
    }

    /**
     * Get voitures
     *
     * @return string
     */
    public function getVoitures()
    {
        return $this->voitures;
    }

    /**
     * Set jeuxSociete
     *
     * @param string $jeuxSociete
     *
     * @return Categories
     */
    public function setJeuxSociete($jeuxSociete)
    {
        $this->jeuxSociete = $jeuxSociete;

        return $this;
    }

    /**
     * Get jeuxSociete
     *
     * @return string
     */
    public function getJeuxSociete()
    {
        return $this->jeuxSociete;
    }

    /**
     * Set loisirsCreatifs
     *
     * @param string $loisirsCreatifs
     *
     * @return Categories
     */
    public function setLoisirsCreatifs($loisirsCreatifs)
    {
        $this->loisirsCreatifs = $loisirsCreatifs;

        return $this;
    }

    /**
     * Get loisirsCreatifs
     *
     * @return string
     */
    public function getLoisirsCreatifs()
    {
        return $this->loisirsCreatifs;
    }

    /**
     * Set figurines
     *
     * @param string $figurines
     *
     * @return Categories
     */
    public function setFigurines($figurines)
    {
        $this->figurines = $figurines;

        return $this;
    }

    /**
     * Get figurines
     *
     * @return string
     */
    public function getFigurines()
    {
        return $this->figurines;
    }

    /**
     * Set jeuxVideos
     *
     * @param string $jeuxVideos
     *
     * @return Categories
     */
    public function setJeuxVideos($jeuxVideos)
    {
        $this->jeuxVideos = $jeuxVideos;

        return $this;
    }

    /**
     * Get jeuxVideos
     *
     * @return string
     */
    public function getJeuxVideos()
    {
        return $this->jeuxVideos;
    }

    /**
     * Set jeuxExterieur
     *
     * @param string $jeuxExterieur
     *
     * @return Categories
     */
    public function setJeuxExterieur($jeuxExterieur)
    {
        $this->jeuxExterieur = $jeuxExterieur;

        return $this;
    }

    /**
     * Get jeuxExterieur
     *
     * @return string
     */
    public function getJeuxExterieur()
    {
        return $this->jeuxExterieur;
    }

    /**
     * Set deguisement
     *
     * @param string $deguisement
     *
     * @return Categories
     */
    public function setDeguisement($deguisement)
    {
        $this->deguisement = $deguisement;

        return $this;
    }

    /**
     * Get deguisement
     *
     * @return string
     */
    public function getDeguisement()
    {
        return $this->deguisement;
    }

    /**
     * Set instrumentMusique
     *
     * @param string $instrumentMusique
     *
     * @return Categories
     */
    public function setInstrumentMusique($instrumentMusique)
    {
        $this->instrumentMusique = $instrumentMusique;

        return $this;
    }

    /**
     * Get instrumentMusique
     *
     * @return string
     */
    public function getInstrumentMusique()
    {
        return $this->instrumentMusique;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->jouet = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add jouet
     *
     * @param \AppBundle\Entity\jouet $jouet
     *
     * @return Categories
     */
    public function addJouet(\AppBundle\Entity\jouet $jouet)
    {
        $this->jouet[] = $jouet;

        return $this;
    }

    /**
     * Remove jouet
     *
     * @param \AppBundle\Entity\jouet $jouet
     */
    public function removeJouet(\AppBundle\Entity\jouet $jouet)
    {
        $this->jouet->removeElement($jouet);
    }

    /**
     * Get jouet
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getjouet()
    {
        return $this->jouet;
    }

    /**
     * Set jouet
     *
     * @param \AppBundle\Entity\Jouet $jouet
     *
     * @return Categories
     */
    public function setJouet(\AppBundle\Entity\Jouet $jouet = null)
    {
        $this->jouet = $jouet;

        return $this;
    }

    /**
     * Set enfants
     *
     * @param \AppBundle\Entity\Enfants $enfants
     *
     * @return Categories
     */
    public function setEnfants(\AppBundle\Entity\Enfants $enfants = null)
    {
        $this->enfants = $enfants;

        return $this;
    }

    /**
     * Get enfants
     *
     * @return \AppBundle\Entity\Enfants
     */
    public function getEnfants()
    {
        return $this->enfants;
    }

    /**
     * Add enfant
     *
     * @param \AppBundle\Entity\Enfants $enfant
     *
     * @return Categories
     */
    public function addEnfant(\AppBundle\Entity\Enfants $enfant)
    {
        $this->enfant[] = $enfant;

        return $this;
    }

    /**
     * Remove enfant
     *
     * @param \AppBundle\Entity\Enfants $enfant
     */
    public function removeEnfant(\AppBundle\Entity\Enfants $enfant)
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

    /**
     * Set enfant
     *
     * @param string $enfant
     *
     * @return Categories
     */
    public function setEnfant($enfant)
    {
        $this->enfant = $enfant;

        return $this;
    }
}
