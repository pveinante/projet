<?php

namespace follow_the_rhythm\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Topic
 *
 * @ORM\Table(name="topic")
 * @ORM\Entity(repositoryClass="follow_the_rhythm\SymfonyBundle\Repository\TopicRepository")
 */
class Topic
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
     */
    private $titre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var int
     *
     * @ORM\Column(name="nbSignalement", type="integer")
     */
    private $nbSignalement;

   /**
     *
     * @ORM\ManyToOne(targetEntity="follow_the_rhythm\SymfonyBundle\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $utilisateur;
    
       /**
     *
     * @ORM\ManyToOne(targetEntity="follow_the_rhythm\SymfonyBundle\Entity\Categorie")
     * @ORM\JoinColumn(nullable=true)
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
     * Set titre
     *
     * @param string $titre
     *
     * @return Topic
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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Topic
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set nbSignalement
     *
     * @param integer $nbSignalement
     *
     * @return Topic
     */
    public function setNbSignalement($nbSignalement)
    {
        $this->nbSignalement = $nbSignalement;

        return $this;
    }

    /**
     * Get nbSignalement
     *
     * @return int
     */
    public function getNbSignalement()
    {
        return $this->nbSignalement;
    }

    /**
     * Set utilisateur
     *
     * @param \follow_the_rhythm\SymfonyBundle\Entity\User $utilisateur
     *
     * @return Topic
     */
    public function setUtilisateur(\follow_the_rhythm\SymfonyBundle\Entity\User $utilisateur)
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    /**
     * Get utilisateur
     *
     * @return \follow_the_rhythm\SymfonyBundle\Entity\User
     */
    public function getUtilisateur()
    {
        return $this->utilisateur;
    }

    /**
     * Set categorie
     *
     * @param \follow_the_rhythm\SymfonyBundle\Entity\Categorie $categorie
     *
     * @return Topic
     */
    public function setCategorie(\follow_the_rhythm\SymfonyBundle\Entity\Categorie $categorie = null)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return \follow_the_rhythm\SymfonyBundle\Entity\Categorie
     */
    public function getCategorie()
    {
        return $this->categorie;
    }
    
            public function _toString()
    {
            return $this->getTitre();
    }
}