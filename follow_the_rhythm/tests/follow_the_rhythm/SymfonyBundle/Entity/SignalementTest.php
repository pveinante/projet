<?php

// CLASSE DE TEST UNITAIRE DE LA CLASSE Signalement

namespace Tests\follow_the_rhythm\SymfonyBundle\Entity; 
 
use follow_the_rhythm\SymfonyBundle\Entity\Signalement; 
 
class SignalementTest extends \PHPUnit_Framework_TestCase 
{ 

	////////// TESTS DES SETTERS //////////

	// TEST DE LA METHODE setCommentaire()
    public function testSetCommentaire() 
    { 
        $signalement = new Signalement(); 
        $resultat = $signalement->setCommentaire("Test OK avec PHPUnit !"); 
        $this->assertEquals("Test OK avec PHPUnit !", $resultat); 
    }
	
	// TEST DE LA METHODE setMessage()
    public function testSetMessage() 
    { 
		$message = new Message();
        $signalement = new Signalement(); 
        $resultat = $signalement->setMessage($message); 
        $this->assertEquals($message, $resultat); 
    }
    
	// TEST DE LA METHODE setTopic()
    public function testSetTopic() 
    { 
        $signalement = new Signalement(); 
		$topic = new Topic();
		
		$topic->setTitre("Musique de l'été 2018");		
        $resultat = $signalement->setTopic($topic); 
 
        $this->assertEquals($utilisateur, $resultat); 
    }  
    
    // TEST DE LA METHODE setDate()
    public function testSetDate() 
    { 
        $signalement = new Signalement(); 
		$date = new DateTime('2018-03-26T08:30:00.000000Z');
		
        $resultat = $signalement->setDate($date);
 
        $this->assertEquals($date, $resultat); 
    } 
	
	////////// TESTS DES GETTERS //////////
    
	// TEST DE LA METHODE getCommentaire()
    public function testGetCommentaire() 
    { 
        $signalement = new Signalement(); 
        $signalement->setCommentaire("Test OK avec PHPUnit !");
		$resultat = $signalement->getCommentaire();
		
        $this->assertEquals("Test OK avec PHPUnit !", $resultat); 
    } 
	
    // TEST DE LA METHODE getMessage()
    public function testGetMessage() 
    { 
		$message = new Message();
        $signalement = new Signalement(); 
        $signalement->setMessage($message); 
		$resultat = $signalement->getMessage();
		
        $this->assertEquals($message, $resultat); 
    }
	
	// TEST DE LA METHODE getTopic()
    public function testGetTopic() 
    { 
        $signalement = new Signalement(); 
		$topic = new Topic();
		
		$topic->setTitre("Musique de l'été 2018");		
        $signalement->setTopic($topic); 
		$resultat = $signalement->getTopic();
 
        $this->assertEquals($utilisateur, $resultat); 
    }  
    
    // TEST DE LA METHODE getDate()
    public function testGetDate() 
    { 
        $signalement = new Signalement(); 
		$date = new DateTime('2018-03-26T08:30:00.000000Z');
		
        $signalement->setDate($date);
		$resultat = $signalement->getDate();
 
        $this->assertEquals($date, $resultat); 
    } 
}

?>