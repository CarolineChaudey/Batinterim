<?php

namespace cc\BatiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ChefChantier
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="cc\BatiBundle\Entity\ChefChantierRepository")
 */
class ChefChantier
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
     * @ORM\Column(name="prenom", type="string", length=50)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=10)
     */
    private $telephone;

    /**
     * @ORM\Column(name="login", type="string", length=30)
     */
    private $login;
    
    /**
     * @ORM\Column(name="mdp", type="string", length=30)
     */
    private $mdp;

    /**
     * @ORM\ManyToOne(targetEntity="cc\BatiBundle\Entity\Entrepreneur")
     */
    private $entreprise;
    
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
     * @return ChefChantier
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
     * @return ChefChantier
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
     * Set telephone
     *
     * @param string $telephone
     * @return ChefChantier
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
     * Set login
     *
     * @param string $login
     * @return ChefChantier
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string 
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set mdp
     *
     * @param string $mdp
     * @return ChefChantier
     */
    public function setMdp($mdp)
    {
        $this->mdp = $mdp;

        return $this;
    }

    /**
     * Get mdp
     *
     * @return string 
     */
    public function getMdp()
    {
        return $this->mdp;
    }

    /**
     * Set entreprise
     *
     * @param \cc\BatiBundle\Entity\Entrepreneur $entreprise
     * @return ChefChantier
     */
    public function setEntreprise(\cc\BatiBundle\Entity\Entrepreneur $entreprise = null)
    {
        $this->entreprise = $entreprise;

        return $this;
    }

    /**
     * Get entreprise
     *
     * @return \cc\BatiBundle\Entity\Entrepreneur 
     */
    public function getEntreprise()
    {
        return $this->entreprise;
    }
}
