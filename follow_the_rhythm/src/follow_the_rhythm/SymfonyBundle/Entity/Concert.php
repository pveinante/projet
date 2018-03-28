<?php

namespace follow_the_rhythm\SymfonyBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * Concert
 *
 * @ORM\Table(name="concert")
 * @ORM\Entity(repositoryClass="follow_the_rhythm\SymfonyBundle\Repository\ConcertRepository")
 */
class Concert
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu", type="string", length=255)
     */
    private $lieu;
    
    /**
     * @var \DateTime
     * 
     * @ORM\Column(name="dateConcert", type="datetime")
     */
    private $dateConcert;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

   /**
     *
     * @ORM\ManyToMany(targetEntity="follow_the_rhythm\SymfonyBundle\Entity\Artiste", mappedBy="concert",cascade={"persist"})
     * @ORM\JoinTable(name="artiste_concert")
     */
    private $artiste;

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
     * @return Concert
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
     * Set lieu
     *
     * @param string $lieu
     *
     * @return Concert
     */
    public function setLieu($lieu)
    {
        $this->lieu = $lieu;

        return $this;
    }

    /**
     * Get lieu
     *
     * @return string
     */
    public function getLieu()
    {
        return $this->lieu;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Concert
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
     * Constructor
     */
    public function __construct()
    {
        $this->actualite = new \Doctrine\Common\Collections\ArrayCollection();
        $this->artiste = new \Doctrine\Common\Collections\ArrayCollection();
        $this->utilisateur = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set artiste
     *
     * @param \follow_the_rhythm\SymfonyBundle\Entity\Artiste $artiste
     *
     * @return Concert
     */
    public function setArtiste(\follow_the_rhythm\SymfonyBundle\Entity\Artiste $artiste)
    {
        $this->artiste = $artiste;

        return $this;
    }

    /**
     * Add artiste
     *
     * @param \follow_the_rhythm\SymfonyBundle\Entity\Artiste $artiste
     *
     * @return Concert
     */
    public function addArtiste(\follow_the_rhythm\SymfonyBundle\Entity\Artiste $artiste)
    {
        $this->artiste[] = $artiste;
        $artiste->addConcert($this);

        return $this;
    }

    /**
     * Remove artiste
     *
     * @param \follow_the_rhythm\SymfonyBundle\Entity\Artiste $artiste
     */
    public function removeArtiste(\follow_the_rhythm\SymfonyBundle\Entity\Artiste $artiste)
    {
        $this->artiste->removeElement($artiste);
    }

    /**
     * Get artiste
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getArtiste()
    {
        return $this->artiste;
    }
    
    

    /**
     * Set dateConcert
     *
     * @param \DateTime $dateConcert
     *
     * @return Concert
     */
    public function setDateConcert($dateConcert)
    {
        $this->dateConcert = $dateConcert;

        return $this;
    }

    /**
     * Get dateConcert
     *
     * @return \DateTime
     */
    public function getDateConcert()
    {
        return $this->dateConcert;
    }
    
            public function _toString()
    {
            return $this->getNom();
    }
}