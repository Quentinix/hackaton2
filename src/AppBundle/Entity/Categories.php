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
     * @var string
     *
     * @ORM\Column(name="Peluches", type="string", length=255)
     */
    private $peluches;

    /**
     * @var string
     *
     * @ORM\Column(name="Lego_Playmobil", type="string", length=255)
     */
    private $legoPlaymobil;

    /**
     * @var string
     *
     * @ORM\Column(name="Poupees", type="string", length=255)
     */
    private $poupees;

    /**
     * @var string
     *
     * @ORM\Column(name="Voitures", type="string", length=255)
     */
    private $voitures;

    /**
     * @var string
     *
     * @ORM\Column(name="Jeux_societe", type="string", length=255)
     */
    private $jeuxSociete;

    /**
     * @var string
     *
     * @ORM\Column(name="Loisirs_creatifs", type="string", length=255)
     */
    private $loisirsCreatifs;

    /**
     * @var string
     *
     * @ORM\Column(name="Figurines", type="string", length=255)
     */
    private $figurines;

    /**
     * @var string
     *
     * @ORM\Column(name="Jeux_videos", type="string", length=255)
     */
    private $jeuxVideos;

    /**
     * @var string
     *
     * @ORM\Column(name="Jeux_exterieur", type="string", length=255)
     */
    private $jeuxExterieur;

    /**
     * @var string
     *
     * @ORM\Column(name="Deguisement", type="string", length=255)
     */
    private $deguisement;

    /**
     * @var string
     *
     * @ORM\Column(name="Instrument_musique", type="string", length=255)
     */
    private $instrumentMusique;


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
}
