<?php

// CLASSE DE TEST UNITAIRE DE LA CLASSE Artiste

namespace Tests\follow_the_rhythm\SymfonyBundle\Entity; 
 
use follow_the_rhythm\SymfonyBundle\Entity\Artiste; 
 
class ArtisteTest extends \PHPUnit_Framework_TestCase 
{ 

	////////// TESTS DES SETTERS //////////

	// TEST DE LA METHODE setNomComplet()
    public function testSetNomComplet() 
    { 
        $artiste = new Artiste(); 
        $resultat = $artiste->setNomComplet("Jean-Philippe Smet"); 
        $this->assertEquals("Jean-Philippe Smet", $resultat); 
    } 
    
    // TEST DE LA METHODE setNomDeScene()
    public function testSetNomDeScene() 
    { 
        $artiste = new Artiste(); 
        $resultat = $artiste->setNomDeScene("Johnny Hallyday"); 
        $this->assertEquals("Johnny Hallyday", $resultat); 
    }
	
	// TEST DE LA METHODE setNbFollower()
    public function testSetNbFollower() 
    { 
        $artiste = new Artiste(); 
        $resultat = $artiste->setNbFollower(65536 * 16); 
        $this->assertEquals(1048576, $resultat); 
    } 
    
    // TEST DE LA METHODE addConcert()
    public function testAddConcert() 
    { 
        $artiste = new Artiste();  
		$concert = new Concert();
		
		$concert->setNom("Musilac 2018");		
        $resultat = $artiste->addConcert($concert); 
 
        $this->assertEquals($concert, $resultat); 
    }  
    
    //TEST DE LA METHODE removeConcert()
    public function testRemoveConcert() 
    { 
        $artiste = new Artiste();  
		$concert = new Concert();
		
		$concert->setNom("Musilac 2018");		
        $resultat = $artiste->removeConcert($concert); 
 
        $this->assertEquals($concert, $resultat); 
    }
	
	////////// TESTS DES GETTERS //////////
    
	// TEST DE LA METHODE getNomComplet()
    public function testGetNomComplet() 
    { 
        $artiste = new Artiste(); 
        $artiste->setNomComplet("Jean-Philippe Smet"); 
		$resultat = $artiste->getNomComplet();
        $this->assertEquals("Jean-Philippe Smet", $resultat); 
    } 
    
    // TEST DE LA METHODE getNomDeScene()
    public function testGetNomDeScene() 
    { 
        $artiste = new Artiste(); 
        $artiste->setNomDeScene("Johnny Hallyday"); 
		$resultat = $artiste->getNomDeScene();
        $this->assertEquals("Johnny Hallyday", $resultat); 
    
	
	// TEST DE LA METHODE getNbFollower()
    public function testGetNbFollower() 
    { 
        $artiste = new Artiste(); 
        $resultat = $artiste->setNbFollower(65536 * 16);
		$resultat = $artiste->getNbFollower();		
        $this->assertEquals(1048576, $resultat); 
    }

	// TEST DE LA METHODE getConcert()
    public function testGetConcert() 
    { 
        $artiste = new Artiste();  
		$concert = new Concert();
		
		$concert->setNom("Musilac 2018");		
        $artiste->addConcert($concert); 
		$resultat = $artiste->getConcert();
 
        $this->assertEquals($concert, $resultat); 
    } 
	
}

?>