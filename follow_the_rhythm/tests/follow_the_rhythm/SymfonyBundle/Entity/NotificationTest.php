<?php

// CLASSE DE TEST UNITAIRE DE LA CLASSE Notification

namespace Tests\follow_the_rhythm\SymfonyBundle\Entity; 
 
use follow_the_rhythm\SymfonyBundle\Entity\Notification; 
 
class NotificationTest extends \PHPUnit_Framework_TestCase 
{ 

	////////// TESTS DES SETTERS //////////

	// TEST DE LA METHODE setTexte()
    public function testSetTexte() 
    { 
        $notification = new Notification(); 
        $resultat = $notification->setTexte("Test OK avec PHPUnit !"); 
        $this->assertEquals("Test OK avec PHPUnit !", $resultat); 
    }
    
    // TEST DE LA METHODE setDate()
    public function testSetDate() 
    { 
        $notification = new Notification(); 
		$date = new DateTime('2018-03-26T08:30:00.000000Z');
		
        $resultat = $notification->setDate($date);
 
        $this->assertEquals($date, $resultat); 
    } 
	
	// TEST DE LA METHODE setUtilisateur()
    public function testSetUtilisateur() 
    { 
        $notification = new Notification(); 
		$utilisateur = new Utilisateur();
		
		$utilisateur->setPseudo("agoncalve003");		
        $resultat = $notification->setUtilisateur($utilisateur); 
 
        $this->assertEquals($utilisateur, $resultat); 
    }
	
	////////// TESTS DES GETTERS //////////
    
	// TEST DE LA METHODE getTexte()
    public function testGetTexte() 
    { 
        $notification = new Notification(); 
        $notification->setTexte("Test OK avec PHPUnit !");
		$resultat = $notification->getTexte();
		
        $this->assertEquals("Test OK avec PHPUnit !", $resultat); 
    }
    
    // TEST DE LA METHODE getDate()
    public function testGetDate() 
    { 
        $notification = new Notification(); 
		$date = new DateTime('2018-03-26T08:30:00.000000Z');
		
        $notification->setDate($date);
		$resultat = $notification->getDate();
 
        $this->assertEquals($date, $resultat); 
    } 
	
	// TEST DE LA METHODE getUtilisateur()
    public function testGetUtilisateur() 
    { 
        $notification = new Notification(); 
		$utilisateur = new Utilisateur();
		
		$utilisateur->setPseudo("agoncalve003");		
        $notification->setUtilisateur($utilisateur); 
		$resultat = $notification->getUtilisateur();
 
        $this->assertEquals($utilisateur, $resultat); 
    }
}

?>