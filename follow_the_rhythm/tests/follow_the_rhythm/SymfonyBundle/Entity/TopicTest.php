<?php

// CLASSE DE TEST UNITAIRE DE LA CLASSE Topic

namespace Tests\follow_the_rhythm\SymfonyBundle\Entity; 
 
use follow_the_rhythm\SymfonyBundle\Entity\Topic; 
 
class TopicTest extends \PHPUnit_Framework_TestCase 
{ 

	////////// TESTS DES SETTERS //////////

	// TEST DE LA METHODE setTitre()
    public function testSetTitre() 
    { 
        $topic = new Topic(); 
        $resultat = $topic->setTitre("Test OK avec PHPUnit !"); 
        $this->assertEquals("Test OK avec PHPUnit !", $resultat); 
    } 
	
	// TEST DE LA METHODE setNbSignalement()
    public function testSetNbSignalement() 
    { 
        $topic = new Topic(); 
        $resultat = $topic->setNbSignalement(22 + 8); 
        $this->assertEquals(30, $resultat); 
    } 
    
	// TEST DE LA METHODE setUtilisateur()
    public function testSetUtilisateur() 
    { 
        $topic = new Topic(); 
		$utilisateur = new Utilisateur();
		
		$utilisateur->setPseudo("agoncalve003");		
        $resultat = $topic->setUtilisateur($utilisateur); 
 
        $this->assertEquals($utilisateur, $resultat); 
    } 
    
	// TEST DE LA METHODE setCategorie()
    public function testSetCategorie() 
    { 
        $topic = new Topic(); 
		$categorie = new Categorie();
		
		$categorie->setNom("Musique");		
        $resultat = $topic->setCategorie($categorie); 
 
        $this->assertEquals($utilisateur, $resultat); 
    }  
    
    // TEST DE LA METHODE setDate()
    public function testSetDate() 
    { 
        $topic = new Topic(); 
		$date = new DateTime('2018-03-26T08:30:00.000000Z');
		
        $resultat = $topic->setDate($date);
 
        $this->assertEquals($date, $resultat); 
    } 
	
	////////// TESTS DES GETTERS //////////
    
	// TEST DE LA METHODE getTitre()
    public function testGetTitre() 
    { 
        $topic = new Topic(); 
        $topic->setTitre("Test OK avec PHPUnit !"); 
		$resultat = $topic->getTitre();
        $this->assertEquals("Test OK avec PHPUnit !", $resultat); 
    } 
	
	// TEST DE LA METHODE getNbSignalement()
    public function testGetNbSignalement() 
    { 
        $topic = new Topic(); 
        $topic->setNbSignalement(22 + 8); 
		$resultat = $topic->getTitre();
        $this->assertEquals(30, $resultat); 
    } 
    
	// TEST DE LA METHODE getUtilisateur()
    public function testGetUtilisateur() 
    { 
        $topic = new Topic(); 
		$utilisateur = new Utilisateur();
		
		$utilisateur->setPseudo("agoncalve003");		
        $topic->setUtilisateur($utilisateur); 
		$resultat = $topic->getUtilisateur();
 
        $this->assertEquals($utilisateur, $resultat); 
    } 
    
	// TEST DE LA METHODE getCategorie()
    public function testGetCategorie() 
    { 
        $topic = new Topic(); 
		$categorie = new Categorie();
		
		$categorie->setNom("Musique");		
        $topic->setCategorie($categorie); 
		$resultat = $topic->getCategorie();
 
        $this->assertEquals($utilisateur, $resultat); 
    }  
    
    // TEST DE LA METHODE getDate()
    public function testGetDate() 
    { 
		$topic = new Topic(); 
		$date = new DateTime('2018-03-26T08:30:00.000000Z');
		
        $topic->setDate($date);
		$resultat = $topic->getDate();
		
        $this->assertEquals($date, $resultat); 
    }
}

?>