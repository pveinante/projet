<?php

namespace follow_the_rhythm\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Signalement
 *
 * @ORM\Table(name="signalement")
 * @ORM\Entity(repositoryClass="follow_the_rhythm\SymfonyBundle\Repository\SignalementRepository")
 */
class Signalement
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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="string", length=255)
     */
    private $commentaire;

   /**
     *
     * @ORM\ManyToOne(targetEntity="follow_the_rhythm\SymfonyBundle\Entity\Message")
     * @ORM\JoinColumn(nullable=true)
     */
    private $message;
    
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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Signalement
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
     * Set commentaire
     *
     * @param string $commentaire
     *
     * @return Signalement
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Set message
     *
     * @param \follow_the_rhythm\SymfonyBundle\Entity\Message $message
     *
     * @return Signalement
     */
    public function setMessage(\follow_the_rhythm\SymfonyBundle\Entity\Message $message = null)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return \follow_the_rhythm\SymfonyBundle\Entity\Message
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set topic
     *
     * @param \follow_the_rhythm\SymfonyBundle\Entity\Topic $topic
     *
     * @return Signalement
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
    
        public function __toString()
    {
            return $this->message;
    }
}