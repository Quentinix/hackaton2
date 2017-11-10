<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Enfants
 *
 * @ORM\Table(name="enfants")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EnfantsRepository")
 */
class Enfants
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
	 * @var string @ORM\Column(name="nom", type="string", length=255)
	 */
	private $nom;

	/**
	 *
	 * @var string @ORM\Column(name="prenom", type="string", length=255)
	 */
	private $prenom;

	/**
	 *
	 * @var int @ORM\Column(name="age", type="integer")
	 */
	private $age;

	/**
	 *
	 * @var int @ORM\Column(name="numero_voie", type="integer")
	 */
	private $numeroVoie;

	/**
	 *
	 * @var string @ORM\Column(name="rue", type="string", length=255)
	 */
	private $rue;

	/**
	 *
	 * @var string @ORM\Column(name="code_postal", type="string", length=255)
	 */
	private $codePostal;

	/**
	 *
	 * @var string @ORM\Column(name="ville", type="string", length=255)
	 */
	private $ville;

	/**
	 *
	 * @var string @ORM\Column(name="lettre", type="string", length=255)
	 */
	private $lettre;

	/**
	 * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Jouet")
	 * @ORM\JoinColumn(nullable=true)
	 */
	private $jouets;

	/**
	 * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Categories")
	 * @ORM\JoinColumn(nullable=true)
	 */
	private $categories;

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
	 * @return Enfants
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
	 * Set prenom
	 *
	 * @param string $prenom
	 *
	 * @return Enfants
	 */
	public function setPrenom($prenom)
	{
		$this->prenom = $prenom;
		
		return $this;
	}

	/**
	 * Get prenom
	 *
	 * @return string
	 */
	public function getPrenom()
	{
		return $this->prenom;
	}

	/**
	 * Set age
	 *
	 * @param integer $age
	 *
	 * @return Enfants
	 */
	public function setAge($age)
	{
		$this->age = $age;
		
		return $this;
	}

	/**
	 * Get age
	 *
	 * @return int
	 */
	public function getAge()
	{
		return $this->age;
	}

	/**
	 * Set numeroVoie
	 *
	 * @param integer $numeroVoie
	 *
	 * @return Enfants
	 */
	public function setNumeroVoie($numeroVoie)
	{
		$this->numeroVoie = $numeroVoie;
		
		return $this;
	}

	/**
	 * Get numeroVoie
	 *
	 * @return int
	 */
	public function getNumeroVoie()
	{
		return $this->numeroVoie;
	}

	/**
	 * Set rue
	 *
	 * @param string $rue
	 *
	 * @return Enfants
	 */
	public function setRue($rue)
	{
		$this->rue = $rue;
		
		return $this;
	}

	/**
	 * Get rue
	 *
	 * @return string
	 */
	public function getRue()
	{
		return $this->rue;
	}

	/**
	 * Set codePostal
	 *
	 * @param string $codePostal
	 *
	 * @return Enfants
	 */
	public function setCodePostal($codePostal)
	{
		$this->codePostal = $codePostal;
		
		return $this;
	}

	/**
	 * Get codePostal
	 *
	 * @return string
	 */
	public function getCodePostal()
	{
		return $this->codePostal;
	}

	/**
	 * Set ville
	 *
	 * @param string $ville
	 *
	 * @return Enfants
	 */
	public function setVille($ville)
	{
		$this->ville = $ville;
		
		return $this;
	}

	/**
	 * Get ville
	 *
	 * @return string
	 */
	public function getVille()
	{
		return $this->ville;
	}

	/**
	 * Set lettre
	 *
	 * @param string $lettre
	 *
	 * @return Enfants
	 */
	public function setLettre($lettre)
	{
		$this->lettre = $lettre;
		
		return $this;
	}

	/**
	 * Get lettre
	 *
	 * @return string
	 */
	public function getLettre()
	{
		return $this->lettre;
	}

	/**
	 * Set jouet
	 *
	 * @param \AppBundle\Entity\jouet $jouet
	 *
	 * @return Enfants
	 */
	public function setjouet(\AppBundle\Entity\jouet $jouet)
	{
		$this->jouet = $jouet;
		
		return $this;
	}

	/**
	 * Get jouet
	 *
	 * @return \AppBundle\Entity\jouet
	 */
	public function getjouet()
	{
		return $this->jouet;
	}

	/**
	 * Set jouets
	 *
	 * @param \AppBundle\Entity\Jouet $jouets
	 *
	 * @return Enfants
	 */
	public function setJouets(\AppBundle\Entity\Jouet $jouets = null)
	{
		$this->jouets = $jouets;
		
		return $this;
	}

	/**
	 * Get jouets
	 *
	 * @return \AppBundle\Entity\Jouet
	 */
	public function getJouets()
	{
		return $this->jouets;
	}

	/**
	 * Constructor
	 */
	public function __construct()
	{
		$this->categories = new \Doctrine\Common\Collections\ArrayCollection();
	}

	/**
	 * Add category
	 *
	 * @param \AppBundle\Entity\Categories $category
	 *
	 * @return Enfants
	 */
	public function addCategory(\AppBundle\Entity\Categories $category)
	{
		$this->categories[] = $category;
		
		return $this;
	}

	/**
	 * Remove category
	 *
	 * @param \AppBundle\Entity\Categories $category
	 */
	public function removeCategory(\AppBundle\Entity\Categories $category)
	{
		$this->categories->removeElement($category);
	}

	/**
	 * Get categories
	 *
	 * @return \Doctrine\Common\Collections\Collection
	 */
	public function getCategories()
	{
		return $this->categories;
	}

	/**
	 * Set categories
	 *
	 * @param \AppBundle\Entity\Categories $categories
	 *
	 * @return Enfants
	 */
	public function setCategories(\AppBundle\Entity\Categories $categories)
	{
		$this->categories = $categories;
		
		return $this;
	}
}
