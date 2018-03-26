<?php

// CLASSE DE TEST UNITAIRE DE LA CLASSE Message

namespace Tests\follow_the_rhythm\SymfonyBundle\Entity; 
 
use follow_the_rhythm\SymfonyBundle\Entity\Message; 
 
class MessageTest extends \PHPUnit_Framework_TestCase 
{ 

	////////// TESTS DES SETTERS //////////

	// TEST DE LA METHODE setContenu()
    public function testSetContenu() 
    { 
        $message = new Message(); 
        $resultat = $message->setContenu("Test OK avec PHPUnit !"); 
        $this->assertEquals("Test OK avec PHPUnit !", $resultat); 
    } 
	
	// TEST DE LA METHODE setNbSignalement()
    public function testSetNbSignalement() 
    { 
        $message = new Message(); 
        $resultat = $message->setNbSignalement(22 + 8); 
        $this->assertEquals(30, $resultat); 
    } 
    
	// TEST DE LA METHODE setUtilisateur()
    public function testSetUtilisateur() 
    { 
        $message = new Message(); 
		$utilisateur = new Utilisateur();
		
		$utilisateur->setPseudo("agoncalve003");		
        $resultat = $message->setUtilisateur($utilisateur); 
 
        $this->assertEquals($utilisateur, $resultat); 
    } 
    
	// TEST DE LA METHODE setTopic()
    public function testSetTopic() 
    { 
        $message = new Message(); 
		$topic = new Topic();
		
		$topic->setTitre("Musique de l'été 2018");		
        $resultat = $message->setTopic($topic); 
 
        $this->assertEquals($utilisateur, $resultat); 
    }  
    
    // TEST DE LA METHODE setDate()
    public function testSetDate() 
    { 
        $message = new Message(); 
		$date = new DateTime('2018-03-26T08:30:00.000000Z');
		
        $resultat = $message->setDate($date);
 
        $this->assertEquals($date, $resultat); 
    } 
	
	////////// TESTS DES GETTERS //////////
    
	// TEST DE LA METHODE getContenu()
    public function testGetContenu() 
    { 
        $message = new Message(); 
        $message->setContenu("Test OK avec PHPUnit !");
		$resultat = $message->getContenu();
		
        $this->assertEquals("Test OK avec PHPUnit !", $resultat); 
    } 
	
	// TEST DE LA METHODE getNbSignalement()
    public function testGetNbSignalement() 
    { 
        $message = new Message(); 
        $message->setNbSignalement(22 + 8); 
		$resultat = $message->getNbSignalement();
		
        $this->assertEquals(30, $resultat); 
    } 
    
	// TEST DE LA METHODE getUtilisateur()
    public function testGetUtilisateur() 
    { 
        $message = new Message(); 
		$utilisateur = new Utilisateur();
		
		$utilisateur->setPseudo("agoncalve003");		
        $message->setUtilisateur($utilisateur); 
		$resultat = $message->getUtilisateur();
 
        $this->assertEquals($utilisateur, $resultat); 
    } 
    
	// TEST DE LA METHODE getTopic()
    public function testGetTopic() 
    { 
        $message = new Message(); 
		$topic = new Topic();
		
		$topic->setTitre("Musique de l'été 2018");		
        $message->setTopic($topic); 
		$resultat = $message->getTopic();
 
        $this->assertEquals($utilisateur, $resultat); 
    }  
    
    // TEST DE LA METHODE getDate()
    public function testGetDate() 
    { 
        $message = new Message(); 
		$date = new DateTime('2018-03-26T08:30:00.000000Z');
		
        $message->setDate($date);
		$resultat = $message->getDate();
 
        $this->assertEquals($date, $resultat); 
    } 
}

?>