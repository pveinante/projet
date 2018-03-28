<?php

namespace follow_the_rhythm\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Message
 *
 * @ORM\Table(name="message")
 * @ORM\Entity(repositoryClass="follow_the_rhythm\SymfonyBundle\Repository\MessageRepository")
 */
class Message
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
     * @ORM\Column(name="contenu", type="string", length=255)
     */
    private $contenu;

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
    private $nbSignalement = 0;

   /**
     *
     * @ORM\ManyToOne(targetEntity="follow_the_rhythm\SymfonyBundle\Entity\User")
     * @ORM\JoinColumn(nullable=true)
     */
    private $utilisateur;
    
       /**
     *
     * @ORM\ManyToOne(targetEntity="follow_the_rhythm\SymfonyBundle\Entity\Topic")
     * @ORM\JoinColumn(nullable=true)
     */
    private $topic;

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
     * Set contenu
     *
     * @param string $contenu
     *
     * @return Message
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Message
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
     * @return Message
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
     * @return Message
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
     * Set topic
     *
     * @param \follow_the_rhythm\SymfonyBundle\Entity\Topic $topic
     *
     * @return Message
     */
    public function setTopic(\follow_the_rhythm\SymfonyBundle\Entity\Topic $topic = null)
    {
        $this->topic = $topic;

        return $this;
    }

    /**
     * Get topic
     *
     * @return \follow_the_rhythm\SymfonyBundle\Entity\Topic
     */
    public function getTopic()
    {
        return $this->topic;
    }
    
    public function getMessage()
    {
        return $this->contenu;
    }

    public function setMessage($message)
    {
        $this->contenu = $message;
        
        return $this;
    }
    
}
