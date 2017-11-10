<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Jouet
 *
 * @ORM\Table(name="jouet")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\JouetRepository")
 */
class Jouet
{

	/**
	 *
	 * @var int @ORM\Column(name="id", type="integer")
	 *      @ORM\Id
	 *      @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;

	/**
	 *
	 * @var string @ORM\Column(name="nom", type="string", length=128)
	 */
	private $nom;

	/**
	 *
	 * @var string @ORM\Column(name="description", type="text", nullable=true)
	 */
	private $description;

	/**
	 *
	 * @var string @ORM\Column(name="vignette", type="string", length=255, nullable=true)
	 */
	private $vignette;

	/**
	 *
	 * @var string @ORM\Column(name="quantite_stock", type="integer", nullable=true)
	 */
	private $quantite_stock;

	/**
	 *
	 * @var string @ORM\Column(name="quantite_commandee", type="integer", nullable=true)
	 */
	private $quantite_commandee;

	/**
	 * @ORM\OneToMany(targetEntity="AppBundle\Entity\Enfants", mappedBy="jouet")
	 */
	private $enfant;

	/**
	 * @ORM\OneToMany(targetEntity="AppBundle\Entity\Categories", mappedBy="categorie")
	 */
	private $categorie;

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
	 * Set quantiteCommandee
	 *
	 * @param integer $quantiteCommandee
	 *
	 * @return Jouet
	 */
	public function setquantiteCommandee($quantiteCommandee)
	{
		$this->quantite_commandee = $quantiteCommandee;
		
		return $this;
	}

	/**
	 * Get quantiteCommandee
	 *
	 * @return integer
	 */
	public function getquantiteCommandee()
	{
		return $this->quantite_commandee;
	}

	//
	// /**
	// * Set quantiteCommandee
	// *
	// * @param integer $quantiteCommandee
	// *
	// * @return Jouet
	// */
	// public function setquantiteCommandee($quantiteCommandee)
	// {
	// $this->quantite_commandee = $quantiteCommandee;
	//
	// return $this;
	// }
	//
	// /**
	// * Get quantiteCommandee
	// *
	// * @return integer
	// */
	// public function getquantiteCommandee()
	// {
	// return $this->quantite_commandee;
	// }
	/**
	 * Constructor
	 */
	public function __construct()
	{
		$this->categorie = new \Doctrine\Common\Collections\ArrayCollection();
		$this->enfant = new \Doctrine\Common\Collections\ArrayCollection();
	}

	/**
	 * Add categorie
	 *
	 * @param \AppBundle\Entity\Categories $categorie
	 *
	 * @return Jouet
	 */
	public function addCategorie(\AppBundle\Entity\Categories $categorie)
	{
		$this->categorie[] = $categorie;
		
		return $this;
	}

	/**
	 * Remove categorie
	 *
	 * @param \AppBundle\Entity\Categories $categorie
	 */
	public function removeCategorie(\AppBundle\Entity\Categories $categorie)
	{
		$this->categorie->removeElement($categorie);
	}

	/**
	 * Get categorie
	 *
	 * @return \Doctrine\Common\Collections\Collection
	 */
	public function getCategorie()
	{
		return $this->categorie;
	}

	/**
	 * Add enfant
	 *
	 * @param \AppBundle\Entity\Enfants $enfant
	 *
	 * @return Jouet
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
}
