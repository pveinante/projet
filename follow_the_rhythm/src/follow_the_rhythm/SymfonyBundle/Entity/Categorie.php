<?php

namespace follow_the_rhythm\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categorie
 *
 * @ORM\Table(name="categorie")
 * @ORM\Entity(repositoryClass="follow_the_rhythm\SymfonyBundle\Repository\CategorieRepository")
 */
class Categorie
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
     * @var int
     *
     * @ORM\Column(name="nbTopic", type="integer")
     */
    private $nbTopic;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;


    /**
     * Get id
     *
     * @return intwget https://phar.phpunit.de/phpunit-6.5.phar
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nbTopic
     *
     * @param integer $nbTopic
     *
     * @return Categorie
     */
    public function setNbTopic($nbTopic)
    {
        $this->nbTopic = $nbTopic;

        return $this;
    }

    /**
     * Get nbTopic
     *
     * @return int
     */
    public function getNbTopic()
    {
        return $this->nbTopic;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Categorie
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
    
         public function _toString()
    {
            return $this->getNom();
    }
}