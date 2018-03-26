<?php

namespace follow_the_rhythm\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Artiste
 *
 * @ORM\Table(name="artiste")
 * @ORM\Entity(repositoryClass="follow_the_rhythm\SymfonyBundle\Repository\ArtisteRepository")
 */
class Artiste
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
     * @ORM\Column(name="nomComplet", type="string", length=255)
     */
    private $nomComplet;

    /**
     * @var string
     *
     * @ORM\Column(name="nomDeScene", type="string", length=255, nullable=true)
     */
    private $nomDeScene;

    /**
     * @var int
     *
     * @ORM\Column(name="nbFollower", type="integer")
     */
    private $nbFollower;

    /**
     *
     * @ORM\ManyToMany(targetEntity="follow_the_rhythm\SymfonyBundle\Entity\Actualite", inversedBy="artiste",cascade={"persist"})
     * @ORM\JoinTable(name="artiste_actualite")
     * @ORM\JoinColumn(nullable=true)
     */
    private $actualite;    

   /**
     *
     * @ORM\ManyToMany(targetEntity="follow_the_rhythm\SymfonyBundle\Entity\Concert", inversedBy="artiste")
     * @ORM\JoinColumn(nullable=true)
     */
    private $concert;

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
     * Set nomComplet
     *
     * @param string $nomComplet
     *
     * @return Artiste
     */
    public function setNomComplet($nomComplet)
    {
        $this->nomComplet = $nomComplet;

        return $this;
    }

    /**
     * Get nomComplet
     *
     * @return string
     */
    public function getNomComplet()
    {
        return $this->nomComplet;
    }

    /**
     * Set nomDeScene
     *
     * @param string $nomDeScene
     *
     * @return Artiste
     */
    public function setNomDeScene($nomDeScene)
    {
        $this->nomDeScene = $nomDeScene;

        return $this;
    }

    /**
     * Get nomDeScene
     *
     * @return string
     */
    public function getNomDeScene()
    {
        return $this->nomDeScene;
    }

    /**
     * Set nbFollower
     *
     * @param integer $nbFollower
     *
     * @return Artiste
     */
    public function setNbFollower($nbFollower)
    {
        $this->nbFollower = $nbFollower;

        return $this;
    }

    /**
     * Get nbFollower
     *
     * @return int
     */
    public function getNbFollower()
    {
        return $this->nbFollower;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->concert = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add concert
     *
     * @param \follow_the_rhythm\SymfonyBundle\Entity\Concert $concert
     *
     * @return Artiste
     */
    public function addConcert(\follow_the_rhythm\SymfonyBundle\Entity\Concert $concert)
    {
        $this->concert[] = $concert;

        return $this;
    }

    /**
     * Remove concert
     *
     * @param \follow_the_rhythm\SymfonyBundle\Entity\Concert $concert
     */
    public function removeConcert(\follow_the_rhythm\SymfonyBundle\Entity\Concert $concert)
    {
        $this->concert->removeElement($concert);
    }

    /**
     * Get concert
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getConcert()
    {
        return $this->concert;
    }
    

    /**
     * Remove actualite
     *
     * @param \follow_the_rhythm\SymfonyBundle\Entity\Actualite $actualite
     */
    public function removeActualite(\follow_the_rhythm\SymfonyBundle\Entity\Actualite $actualite)
    {
        $this->actualite->removeElement($actualite);
    }


    /**
     * Get actualite
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getActualite()
    {
        return $this->actualite;
    }

    /**
     * Add actualite
     *
     * @param \follow_the_rhythm\SymfonyBundle\Entity\Actualite $actualite
     *
     * @return Artiste
     */
    public function addActualite(\follow_the_rhythm\SymfonyBundle\Entity\Actualite $actualite)
    {
            $this->actualite[]=$actualite;
    }
    
 
}
