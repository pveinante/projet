<?php

// CLASSE DE TEST UNITAIRE DE LA CLASSE Categorie

namespace Tests\follow_the_rhythm\SymfonyBundle\Entity; 
 
use follow_the_rhythm\SymfonyBundle\Entity\Categorie; 
 
class CategorieTest extends \PHPUnit_Framework_TestCase 
{ 

	////////// TESTS DES SETTERS //////////

	// TEST DE LA METHODE setNom()
    public function testSetNom() 
    { 
        $categorie = new Categorie(); 
        $resultat = $categorie->setNom("Test OK avec PHPUnit !"); 
        $this->assertEquals("Test OK avec PHPUnit !", $resultat); 
    }
    
	// TEST DE LA METHODE setNbTopic()
    public function testSetNbTopic() 
    { 
        $categorie = new Categorie();
        $resultat = $categorie->setNbTopic(3 + 9); 
        $this->assertEquals(12, $resultat); 
    } 
	
	////////// TESTS DES GETTERS //////////
    
	// TEST DE LA METHODE getNom()
    public function testGetNom() 
    { 
        $categorie = new Categorie(); 
        $categorie->setNom("Test OK avec PHPUnit !");
		$resultat = $categorie->getNom();
		
        $this->assertEquals("Test OK avec PHPUnit !", $resultat); 
    }
    
    // TEST DE LA METHODE getNbTopic()
    public function testGetNbTopic() 
    { 
        $categorie = new Categorie();
        $categorie->setNbTopic(3 + 9); 
		$resultat = $categorie->getNbTopic();
		
        $this->assertEquals(12, $resultat); 
    }
	
}

?>