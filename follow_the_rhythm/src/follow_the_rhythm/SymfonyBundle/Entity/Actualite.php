<?php

namespace follow_the_rhythm\SymfonyBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * Actualite
 *
 * @ORM\Table(name="actualite")
 * @ORM\Entity(repositoryClass="follow_the_rhythm\SymfonyBundle\Repository\ActualiteRepository")
 */
class Actualite
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
     * @ORM\Column(name="titre", type="string", length=255)
     * @Assert\Length(
     *              min="4",
     *              max="100",
     *              minMessage= "Le titre doit faire au moins 4 caractères.",
     *              maxMessage= "Le titre doit faire au plus 100 caractères.")
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     * @Assert\Length(
     *              min="10",
     *              max="2000",
     *              minMessage= "La description doit faire au moins {{ limit }} caractères.",
     *              maxMessage= "La description doit faire au plus {{ limit }} caractères.")
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="nbCoupDeCoeurs", type="integer")
     */
    private $nbCoupDeCoeurs;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateActualite", type="datetime")
     */
    private $dateActualite;

   /**
     *
     * @ORM\ManyToOne(targetEntity="follow_the_rhythm\SymfonyBundle\Entity\Artiste")
     * @ORM\JoinColumn(name="artiste_id", referencedColumnName="id")
     * @ORM\JoinColumn(nullable=true)
     */
    private $artiste;

   /**
     *
     * @ORM\ManyToOne(targetEntity="follow_the_rhythm\SymfonyBundle\Entity\Concert")
     * @ORM\JoinColumn(nullable=true)
     */
    private $concert;
    
       /**
     *
     * @ORM\ManyToOne(targetEntity="follow_the_rhythm\SymfonyBundle\Entity\Moderateur")
     * @ORM\JoinColumn(nullable=false)
     */
    private $moderateur;

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
     * Set titre
     *
     * @param string $titre
     *
     * @return Actualite
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Actualite
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
     * Set nbCoupDeCoeurs
     *
     * @param integer $nbCoupDeCoeurs
     *
     * @return Actualite
     */
    public function setNbCoupDeCoeurs($nbCoupDeCoeurs)
    {
        $this->nbCoupDeCoeurs = $nbCoupDeCoeurs;

        return $this;
    }

    /**
     * Get nbCoupDeCoeurs
     *
     * @return int
     */
    public function getNbCoupDeCoeurs()
    {
        return $this->nbCoupDeCoeurs;
    }

    /**
     * Set dateActualite
     *
     * @param \DateTime $dateActualite
     *
     * @return Actualite
     */
    public function setDateActualite($dateActualite)
    {
        $this->dateActualite = $dateActualite;

        return $this;
    }

    /**
     * Get dateActualite
     *
     * @return \DateTime
     */
    public function getDateActualite()
    {
        return $this->dateActualite;
    }

    /**
     * Set artiste
     *
     * @param \follow_the_rhythm\SymfonyBundle\Entity\Artiste $artiste
     *
     * @return Actualite
     */
    public function setArtiste(\follow_the_rhythm\SymfonyBundle\Entity\Artiste $artiste = null)
    {
        $this->artiste = $artiste;

        return $this;
    }

    /**
     * Get artiste
     *
     * @return \follow_the_rhythm\SymfonyBundle\Entity\Artiste
     */
    public function getArtiste()
    {
        return $this->artiste;
    }

    /**
     * Set moderateur
     *
     * @param \follow_the_rhythm\SymfonyBundle\Entity\Moderateur $moderateur
     *
     * @return Actualite
     */
    public function setModerateur(\follow_the_rhythm\SymfonyBundle\Entity\Moderateur $moderateur)
    {
        $this->moderateur = $moderateur;

        return $this;
    }

    /**
     * Get moderateur
     *
     * @return \follow_the_rhythm\SymfonyBundle\Entity\Moderateur
     */
    public function getModerateur()
    {
        return $this->moderateur;
    }

    /**
     * Set concert
     *
     * @param \follow_the_rhythm\SymfonyBundle\Entity\Concert $concert
     *
     * @return Actualite
     */
    public function setConcert(\follow_the_rhythm\SymfonyBundle\Entity\Concert $concert = null)
    {
        $this->concert = $concert;

        return $this;
    }

    /**
     * Get concert
     *
     * @return \follow_the_rhythm\SymfonyBundle\Entity\Concert
     */
    public function getConcert()
    {
        return $this->concert;
    }
}
