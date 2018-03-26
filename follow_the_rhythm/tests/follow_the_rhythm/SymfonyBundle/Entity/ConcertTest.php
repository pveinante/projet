<?php

// CLASSE DE TEST UNITAIRE DE LA CLASSE Concert

namespace Tests\follow_the_rhythm\SymfonyBundle\Entity; 
 
use follow_the_rhythm\SymfonyBundle\Entity\Concert; 
 
class ConcertTest extends \PHPUnit_Framework_TestCase 
{ 

	////////// TESTS DES SETTERS //////////

	// TEST DE LA METHODE setNom()
    public function testSetNom() 
    { 
        $concert = new Concert(); 
        $resultat = $concert->setNom("Musilac 2018"); 
        $this->assertEquals("Musilac 2018", $resultat); 
    } 
    
    // TEST DE LA METHODE setLieu()
    public function testSetLieu() 
    { 
        $concert = new Concert(); 
        $resultat = $concert->setLieu("Anglet"); 
        $this->assertEquals("Anglet", $resultat); 
    }
	
	// TEST DE LA METHODE setDescription()
    public function testSetDescription() 
    { 
        $concert = new Concert(); 
        $resultat = $concert->setDescription("Test 2 OK avec PHPUnit !"); 
		$this->assertEquals("Test 2 OK avec PHPUnit !", $resultat); 
	}
    
	// TEST DE LA METHODE addArtiste()
    public function testAddArtiste() 
    { 
        $concert = new Concert();
		$artiste = new Artiste();
		
		$artiste->setNom("Johnny");		
        $resultat = $concert->addArtiste($artiste); 
 
        $this->assertEquals($artiste, $resultat); 
    } 
    
	// TEST DE LA METHODE removeArtiste()
    public function testRemoveArtiste() 
    { 
        $concert = new Concert();
		$artiste = new Artiste();
		
		$artiste->setNom("Johnny");		
        $resultat = $concert->removeArtiste($artiste); 
 
        $this->assertEquals($artiste, $resultat); 
    } 
	
    // TEST DE LA METHODE setDateConcert()
    public function testSetDateConcert() 
    { 
        $concert = new Concert(); 
		$date = new DateTime('2018-03-26T08:30:00.000000Z');
		
        $resultat = $concert->setDateConcert($date);
 
        $this->assertEquals($date, $resultat); 
    }
	
	////////// TESTS DES GETTERS //////////
    
	// TEST DE LA METHODE getNom()
    public function testGetNom() 
    { 
        $concert = new Concert(); 
        $concert->setNom("Musilac 2018"); 
		$resultat = $concert->getNom();
        $this->assertEquals("Musilac 2018", $resultat); 
    } 
    
    // TEST DE LA METHODE getLieu()
    public function testGetLieu() 
    { 
        $concert = new Concert(); 
        $concert->setLieu("Anglet"); 
		$resultat = $concert->getLieu();
        $this->assertEquals("Anglet", $resultat); 
    }
	
	// TEST DE LA METHODE getDescription()
    public function testGetDescription() 
    { 
        $concert = new Concert(); 
        $concert->setDescription("Test 2 OK avec PHPUnit !"); 
		$resultat = $concert->getDescription();
		$this->assertEquals("Test 2 OK avec PHPUnit !", $resultat); 
	}
    
	// TEST DE LA METHODE getArtiste()
    public function testGetArtiste() 
    { 
        $concert = new Concert();
		$artiste = new Artiste();
		
		$artiste->setNom("Johnny");		
        $concert->addArtiste($artiste); 
		$resultat = $concert->getArtiste();
 
        $this->assertEquals($artiste, $resultat); 
    } 
	
    // TEST DE LA METHODE getDateConcert()
    public function testGetDateConcert() 
    { 
        $concert = new Concert(); 
		$date = new DateTime('2018-03-26T08:30:00.000000Z');
		
        $concert->setDateConcert($date);
		$resultat = $concert->getDateConcert();
 
        $this->assertEquals($date, $resultat); 
    }
	
?>