<?php

namespace cc\BatiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mission
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="cc\BatiBundle\Entity\MissionRepository")
 */
class Mission
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
     * @ORM\Column(name="intitule", type="string", length=50)
     */
    private $intitule;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut", type="date")
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin", type="date")
     */
    private $dateFin;

    /**
     * @var integer
     *
     * @ORM\Column(name="nb_artisans", type="integer")
     */
    private $nbArtisans;

    /**
     * @var string
     *
     * @ORM\Column(name="prix_jours", type="decimal")
     */
    private $prixJours;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu_mission", type="string", length=50)
     */
    private $lieuMission;

    /**
     * @ORM\ManyToOne(targetEntity="cc\BatiBundle\Entity\Chantier")
     */
    private $chantier;
    
    /**
     * @ORM\ManyToMany(targetEntity="cc\BatiBundle\Entity\CorpsMetier")
     */
    private $corpsMetiers;

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
     * Set intitule
     *
     * @param string $intitule
     * @return Mission
     */
    public function setIntitule($intitule)
    {
        $this->intitule = $intitule;

        return $this;
    }

    /**
     * Get intitule
     *
     * @return string 
     */
    public function getIntitule()
    {
        return $this->intitule;
    }

    /**
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     * @return Mission
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \DateTime 
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     * @return Mission
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \DateTime 
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set nbArtisans
     *
     * @param integer $nbArtisans
     * @return Mission
     */
    public function setNbArtisans($nbArtisans)
    {
        $this->nbArtisans = $nbArtisans;

        return $this;
    }

    /**
     * Get nbArtisans
     *
     * @return integer 
     */
    public function getNbArtisans()
    {
        return $this->nbArtisans;
    }

    /**
     * Set prixJours
     *
     * @param string $prixJours
     * @return Mission
     */
    public function setPrixJours($prixJours)
    {
        $this->prixJours = $prixJours;

        return $this;
    }

    /**
     * Get prixJours
     *
     * @return string 
     */
    public function getPrixJours()
    {
        return $this->prixJours;
    }

    /**
     * Set lieuMission
     *
     * @param string $lieuMission
     * @return Mission
     */
    public function setLieuMission($lieuMission)
    {
        $this->lieuMission = $lieuMission;

        return $this;
    }

    /**
     * Get lieuMission
     *
     * @return string 
     */
    public function getLieuMission()
    {
        return $this->lieuMission;
    }

    /**
     * Set chantier
     *
     * @param \cc\BatiBundle\Entity\Chantier $chantier
     * @return Mission
     */
    public function setChantier(\cc\BatiInterim\Entity\Chantier $chantier = null)
    {
        $this->chantier = $chantier;

        return $this;
    }

    /**
     * Get chantier
     *
     * @return \cc\BatiBundle\Entity\Chantier 
     */
    public function getChantier()
    {
        return $this->chantier;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->corpsMetiers = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add corpsMetiers
     *
     * @param \cc\BatiBundle\Entity\CorpsMetier $corpsMetiers
     * @return Mission
     */
    public function addCorpsMetier(\cc\BatiBundle\Entity\CorpsMetier $corpsMetiers)
    {
        $this->corpsMetiers[] = $corpsMetiers;

        return $this;
    }

    /**
     * Remove corpsMetiers
     *
     * @param \cc\BatiBundle\Entity\CorpsMetier $corpsMetiers
     */
    public function removeCorpsMetier(\cc\BatiBundle\Entity\CorpsMetier $corpsMetiers)
    {
        $this->corpsMetiers->removeElement($corpsMetiers);
    }

    /**
     * Get corpsMetiers
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCorpsMetiers()
    {
        return $this->corpsMetiers;
    }
}
