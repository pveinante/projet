<?php
// src/AppBundle/Entity/User.php

namespace follow_the_rhythm\SymfonyBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var int
     *
     * @ORM\Column(name="nbSignalement", type="integer")
     */
    private $nbSignalement;

    /**
     * @ORM\ManyToMany(targetEntity="follow_the_rhythm\SymfonyBundle\Entity\Artiste")
     * @ORM\JoinTable(name="user_artistes",
     *      joinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="artiste_id", referencedColumnName="id")}
     *      )
     */
    private $artiste;

    /**
     * @ORM\ManyToMany(targetEntity="follow_the_rhythm\SymfonyBundle\Entity\Concert")
     * @ORM\JoinTable(name="user_concerts",
     *      joinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="concert_id", referencedColumnName="id")}
     *      )
     */
    private $concert;

      /**
     *
     * @ORM\OneToOne(targetEntity="follow_the_rhythm\SymfonyBundle\Entity\Moderateur")
     * @ORM\JoinColumn(name="moderateur_id", referencedColumnName="id", nullable=true)
     */
    private $moderateur;



    /**
     * @ORM\ManyToMany(targetEntity="follow_the_rhythm\SymfonyBundle\Entity\User", mappedBy="myFriends")
     */
    private $UsersIAdd;

    /**
     * @ORM\ManyToMany(targetEntity="follow_the_rhythm\SymfonyBundle\Entity\User", inversedBy="UsersIAdd")
     * @ORM\JoinTable(name="amisUser",
     *      joinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="amis_user_id", referencedColumnName="id")}
     *      )
     */
    private $myFriends;

    /**
     * Get id
     *
     * @return int
     */

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    /**
     * Set nbSignalement
     *
     * @param integer $nbSignalement
     *
     * @return User
     */
    public function setNbSignalement($nbSignalement)
    {
        $this->nbSignalement = $nbSignalement;

        return $this;
    }

    /**
     * Get nbSignalement
     *
     * @return integer
     */
    public function getNbSignalement()
    {
        return $this->nbSignalement;
    }

    /**
     * Add artiste
     *
     * @param \follow_the_rhythm\SymfonyBundle\Entity\Artiste $artiste
     *
     * @return User
     */
    public function addArtiste(\follow_the_rhythm\SymfonyBundle\Entity\Artiste $artiste)
    {
        $this->artiste[] = $artiste;

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
     * Add concert
     *
     * @param \follow_the_rhythm\SymfonyBundle\Entity\Concert $concert
     *
     * @return User
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
     * Set moderateur
     *
     * @param \follow_the_rhythm\SymfonyBundle\Entity\Moderateur $moderateur
     *
     * @return User
     */
    public function setModerateur(\follow_the_rhythm\SymfonyBundle\Entity\Moderateur $moderateur = null)
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
     * Add usersIAdd
     *
     * @param \follow_the_rhythm\SymfonyBundle\Entity\User $usersIAdd
     *
     * @return User
     */
    public function addUsersIAdd(\follow_the_rhythm\SymfonyBundle\Entity\User $usersIAdd)
    {
        $this->UsersIAdd[] = $usersIAdd;

        return $this;
    }

    /**
     * Remove usersIAdd
     *
     * @param \follow_the_rhythm\SymfonyBundle\Entity\User $usersIAdd
     */
    public function removeUsersIAdd(\follow_the_rhythm\SymfonyBundle\Entity\User $usersIAdd)
    {
        $this->UsersIAdd->removeElement($usersIAdd);
    }

    /**
     * Get usersIAdd
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUsersIAdd()
    {
        return $this->UsersIAdd;
    }

    /**
     * Add myFriend
     *
     * @param \follow_the_rhythm\SymfonyBundle\Entity\User $myFriend
     *
     * @return User
     */
    public function addMyFriend(\follow_the_rhythm\SymfonyBundle\Entity\User $myFriend)
    {
        $this->myFriends[] = $myFriend;

        return $this;
    }

    /**
     * Remove myFriend
     *
     * @param \follow_the_rhythm\SymfonyBundle\Entity\User $myFriend
     */
    public function removeMyFriend(\follow_the_rhythm\SymfonyBundle\Entity\User $myFriend)
    {
        $this->myFriends->removeElement($myFriend);
    }

    /**
     * Get myFriends
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMyFriends()
    {
        return $this->myFriends;
    }
}
