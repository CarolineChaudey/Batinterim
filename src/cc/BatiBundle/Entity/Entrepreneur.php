<?php

namespace cc\BatiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entrepreneur
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="cc\BatiBundle\Entity\EntrepreneurRepository")
 */
class Entrepreneur
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=50)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=10)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=50)
     */
    private $adresse;
    
    /**
     * @ORM\Column(name="cp", type="string", length=6)
     */
    private $cp;
    
    /**
     * @ORM\ManyToMany(targetEntity="cc\BatiBundle\Entity\Secteur")
     */
    private $lesSecteurs;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Entrepreneur
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
     * Set telephone
     *
     * @param string $telephone
     * @return Entrepreneur
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string 
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Entrepreneur
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }


    /**
     * Set cp
     *
     * @param string $cp
     * @return Entrepreneur
     */
    public function setCp($cp)
    {
        $this->cp = $cp;

        return $this;
    }

    /**
     * Get cp
     *
     * @return string 
     */
    public function getCp()
    {
        return $this->cp;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->lesSecteurs = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add lesSecteurs
     *
     * @param \cc\BatiBundle\Entity\Secteur $lesSecteurs
     * @return Entrepreneur
     */
    public function addLesSecteur(\cc\BatiBundle\Entity\Secteur $lesSecteurs)
    {
        $this->lesSecteurs[] = $lesSecteurs;

        return $this;
    }

    /**
     * Remove lesSecteurs
     *
     * @param \cc\BatiBundle\Entity\Secteur $lesSecteurs
     */
    public function removeLesSecteur(\cc\BatiBundle\Entity\Secteur $lesSecteurs)
    {
        $this->lesSecteurs->removeElement($lesSecteurs);
    }

    /**
     * Get lesSecteurs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLesSecteurs()
    {
        return $this->lesSecteurs;
    }
}
