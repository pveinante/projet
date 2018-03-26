<?php

// CLASSE DE TEST UNITAIRE DE LA CLASSE Actualite

namespace Tests\follow_the_rhythm\SymfonyBundle\Entity; 
 
use follow_the_rhythm\SymfonyBundle\Entity\Actualite; 
 
class ActualiteTest extends \PHPUnit_Framework_TestCase 
{ 

	////////// TESTS DES SETTERS //////////

	// TEST DE LA METHODE setTitre()
    public function testSetTitre() 
    { 
        $actu = new Actualite(); 
        $resultat = $actu->setTitre("Test OK avec PHPUnit !"); 
        $this->assertEquals("Test OK avec PHPUnit !", $resultat); 
    } 
    
    // TEST DE LA METHODE setDescription()
    public function testSetDescription() 
    { 
        $actu = new Actualite(); 
        $resultat = $actu->setDescription("Test 2 OK avec PHPUnit !"); 
        $this->assertEquals("Test 2 OK avec PHPUnit !", $resultat); 
    }
	
	// TEST DE LA METHODE setNbCoupDeCoeurs()
    public function testSetNbCoupDeCoeurs() 
    { 
        $actu = new Actualite(); 
        $resultat = $actu->setNbCoupDeCoeurs(22 + 8); 
        $this->assertEquals(30, $resultat); 
    } 
    
	// TEST DE LA METHODE setArtiste()
    public function testSetArtiste() 
    { 
        $actu = new Actualite(); 
		$artiste = new Artiste();
		
		$artiste->setNomComplet("Johnny");		
        $resultat = $actu->setArtiste($artiste); 
 
        $this->assertEquals($artiste, $resultat); 
    } 
    
	// TEST DE LA METHODE setModerateur()
    public function testSetModerateur() 
    { 
        $actu = new Actualite(); 
		$moderateur = new Moderateur();
		
		$moderateur->setNom("Testeur");		
        $resultat = $actu->setModerateur($moderateur);
 
        $this->assertEquals($moderateur, $resultat); 
    } 
	
    // TEST DE LA METHODE setConcert()
    public function testSetConcert() 
    { 
        $actu = new Actualite(); 
		$concert = new Concert();
		
		$concert->setNom("Musilac 2018");		
        $resultat = $actu->setConcert($concert); 
 
        $this->assertEquals($concert, $resultat); 
    }  
    
    // TEST DE LA METHODE setDateActualite()
    public function testSetDateActualite() 
    { 
        $actu = new Actualite(); 
		$date = new DateTime('2018-03-26T08:30:00.000000Z');
		
        $resultat = $actu->setDateActualite($date);
 
        $this->assertEquals($date, $resultat); 
    } 
	
	////////// TESTS DES GETTERS //////////
    
	// TEST DE LA METHODE getTitre()
    public function testGetTitre() 
    { 
        $actu = new Actualite();
        $actu->setTitre("Test titre 1");
        $resultat = $actu->getTitre(); 
        $this->assertEquals("Test titre 1", $resultat); 
    } 
    
	// TEST DE LA METHODE getDescription()
    public function testGetDescription() 
    { 
        $actu = new Actualite();
        $actu->setDescription("Test titre 1");
        $resultat = $actu->getDescription(); 
        $this->assertEquals("Test titre 1", $resultat); 
    }
    
	// TEST DE LA METHODE getNbCoupDeCoeurs()
    public function testGetNbCoupDeCoeurs() 
    { 
        $actu = new Actualite();
        $actu->setNbCoupDeCoeurs(24);
        $resultat = $actu->getNbCoupDeCoeurs();
        $this->assertEquals(24, $resultat); 
    }
    
	// TEST DE LA METHODE getArtiste()
    public function testGetArtiste() 
    { 
        $actu = new Actualite(); 
		$artiste = new Artiste();
		
		$artiste->setNomComplet("Johnny");		
        $actu->setArtiste($artiste); 
		$resultat = $actu->getArtiste()->getNomComplet();
 
        $this->assertEquals("Johnny", $resultat);  
    }
	
	// TEST DE LA METHODE getModerateur()
    public function testGetModerateur() 
    { 
        $actu = new Actualite(); 
		$moderateur = new Moderateur();
		
		$moderateur->setNom("Testeur");		
        $actu->setModerateur($moderateur);
		$resultat = $actu->getModerateur()->getNom();
 
        $this->assertEquals("Testeur", $resultat); 
    } 
	
    // TEST DE LA METHODE getConcert()
    public function testGetConcert() 
    { 
        $actu = new Actualite(); 
		$concert = new Concert();
		
		$concert->setNom("Musilac 2018");		
        $actu->setConcert($concert);
		$resultat = $actu->getConcert()->getNom();
 
        $this->assertEquals("Musilac 2018", $resultat); 
    }  
    
    // TEST DE LA METHODE getDateActualite()
    public function testGetDateActualite() 
    { 
        $actu = new Actualite(); 
		$date = new DateTime('2018-03-26T08:30:00.000000Z');
		
        $actu->setDateActualite($date);
		$resultat = $actu->getDateActualite();
 
        $this->assertEquals('2018-03-26T08:30:00.000000Z', $resultat); 
    } 

}

?>