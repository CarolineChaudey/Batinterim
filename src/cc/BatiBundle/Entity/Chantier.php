<?php

namespace cc\BatiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Chantier
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="cc\BatiBundle\Entity\ChantierRepository")
 */
class Chantier
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
     * @ORM\ManyToOne(targetEntity="cc\BatiBundle\Entity\Entrepreneur")
     */
    private $entrepreneur;

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
     * @return Chantier
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
     * Set entrepreneur
     *
     * @param \cc\BatiBundle\Entity\Entrepreneur $entrepreneur
     * @return Chantier
     */
    public function setEntrepreneur(\cc\BatiBundle\Entity\Entrepreneur $entrepreneur = null)
    {
        $this->entrepreneur = $entrepreneur;

        return $this;
    }

    /**
     * Get entrepreneur
     *
     * @return \cc\BatiBundle\Entity\Entrepreneur 
     */
    public function getEntrepreneur()
    {
        return $this->entrepreneur;
    }
}
