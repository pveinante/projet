<?php

// CLASSE DE TEST UNITAIRE DE LA CLASSE Utilisateur

namespace Tests\follow_the_rhythm\SymfonyBundle\Entity; 
 
use follow_the_rhythm\SymfonyBundle\Entity\Utilisateur; 
 
class UtilisateurTest extends \PHPUnit_Framework_TestCase 
{ 

	////////// TESTS DES SETTERS //////////

	// TEST DE LA METHODE setPseudo()
    public function testSetPseudo() 
    { 
        $utilisateur = new Utilisateur();
        $resultat = $utilisateur->setPseudo("agoncalve003"); 
        $this->assertEquals("agoncalve003", $resultat); 
    } 
    
    // TEST DE LA METHODE setMdp()
    public function testSetMdp() 
    { 
        $utilisateur = new Utilisateur();
        $resultat = $utilisateur->setMdp("a1b2c3d4e5"); 
        $this->assertEquals("a1b2c3d4e5", $resultat); 
    }
	
	// TEST DE LA METHODE setNbSignalement()
    public function testSetNbSignalement() 
    { 
        $utilisateur = new Utilisateur();
        $resultat = $utilisateur->setNbSignalement(14 + 6); 
        $this->assertEquals(20, $resultat); 
    } 
    
	// TEST DE LA METHODE addArtiste()
    public function testAddArtiste() 
    { 
        $utilisateur = new Utilisateur();
		$artiste = new Artiste();
		
		$artiste->setNom("Johnny");		
        $resultat = $utilisateur->addArtiste($artiste); 
 
        $this->assertEquals($artiste, $resultat); 
    } 
    
	// TEST DE LA METHODE removeArtiste()
    public function testRemoveArtiste() 
    { 
        $utilisateur = new Utilisateur();
		$artiste = new Artiste();
		
		$artiste->setNom("Johnny");		
        $resultat = $utilisateur->removeArtiste($artiste); 
 
        $this->assertEquals($artiste, $resultat); 
    } 
	
    // TEST DE LA METHODE addUsersIAdd()
    public function testAddUsersIAdd() 
    { 
        $utilisateur = new Utilisateur();
		$utilisateur2 = new Utilisateur();
		
		$utilisateur2->setNom("Johnny");		
        $resultat = $utilisateur->addUsersIAdd($utilisateur2); 
 
        $this->assertEquals($utilisateur2, $resultat); 
    } 
    
	// TEST DE LA METHODE removeUsersIAdd()
    public function testRemoveUsersIAdd() 
    { 
        $utilisateur = new Utilisateur();
		$utilisateur2 = new Utilisateur();
		
		$utilisateur2->setNom("Johnny");		
        $resultat = $utilisateur->removeUsersIAdd($utilisateur2); 
 
        $this->assertEquals($utilisateur2, $resultat); 
    }
	
	// TEST DE LA METHODE addMyFriend()
    public function testAddMyFriend() 
    { 
        $utilisateur = new Utilisateur();
		$utilisateur2 = new Utilisateur();
		
		$utilisateur2->setNom("Johnny");		
        $resultat = $utilisateur->addMyFriend($utilisateur2); 
 
        $this->assertEquals($utilisateur2, $resultat); 
    } 
    
	// TEST DE LA METHODE removeMyFriend()
    public function testRemoveMyFriend() 
    { 
        $utilisateur = new Utilisateur();
		$utilisateur2 = new Utilisateur();
		
		$utilisateur2->setNom("Johnny");		
        $resultat = $utilisateur->removeMyFriend($utilisateur2); 
 
        $this->assertEquals($utilisateur2, $resultat); 
    }
	
	// TEST DE LA METHODE setModerateur()
    public function testSetModerateur() 
    { 
        $utilisateur = new Utilisateur();
		$utilisateur2 = new Utilisateur(); 
		$moderateur = new Moderateur();
		
		$moderateur->setNom("Testeur");		
        $resultat = $utilisateur->setModerateur($moderateur);
 
        $this->assertEquals($moderateur, $resultat); 
    } 
	
	////////// TESTS DES GETTERS //////////
    
	// TEST DE LA METHODE getPseudo()
    public function testGetPseudo() 
    { 
        $utilisateur = new Utilisateur();
        $utilisateur->setPseudo("agoncalve003");
        $resultat = $utilisateur->getPseudo(); 
        $this->assertEquals("agoncalve003", $resultat); 
    } 
    
	// TEST DE LA METHODE getMdp()
    public function testGetMdp()
    { 
        $utilisateur = new Utilisateur();
        $utilisateur->setMdp("a1b2c3d4e5"); 
        $resultat = $utilisateur->getMdp();
        $this->assertEquals("a1b2c3d4e5", $resultat); 
    }
	
	// TEST DE LA METHODE getNbSignalement()
    public function testGetNbSignalement() 
    { 
        $utilisateur = new Utilisateur();
        $utilisateur->setNbSignalement(14 + 6); 
        $resultat = $utilisateur->getNbSignalement();
		$this->assertEquals(20, $resultat); 
    } 

	// TEST DE LA METHODE getArtiste()
    public function testGetArtiste() 
    { 
        $utilisateur = new Utilisateur(); 
		$artiste = new Artiste();
		
		$artiste->setNom("Johnny");		
        $utilisateur->setArtiste($artiste); 
		$resultat = $utilisateur->getArtiste()->getNom();
 
        $this->assertEquals("Johnny", $resultat);  
    }
	
	// TEST DE LA METHODE getUsersIAdd()
    public function testGetUsersIAdd() 
    { 
        $utilisateur = new Utilisateur();
		$utilisateur2 = new Utilisateur();
		
		$utilisateur2->setNom("Johnny");		
        $utilisateur->addUsersIAdd($utilisateur2); 
		$resultat = $utilisateur->getUsersIAdd();
 
        $this->assertEquals($utilisateur2, $resultat); 
    } 
	
	// TEST DE LA METHODE getMyFriends()
    public function testGetMyFriends() 
    { 
        $utilisateur = new Utilisateur();
		$utilisateur2 = new Utilisateur();
		
		$utilisateur2->setNom("Johnny");		
        $utilisateur->addMyFriend($utilisateur2); 
		$resultat = $utilisateur->getMyFriends();
 
        $this->assertEquals($utilisateur2, $resultat); 
    } 
	
	// TEST DE LA METHODE getModerateur()
    public function testGetModerateur() 
    { 
        $utilisateur = new Utilisateur();
		$moderateur = new Moderateur();
		
		$moderateur->setNom("Testeur");		
        $utilisateur->setModerateur($moderateur);
		$resultat = $utilisateur->getModerateur()->getNom();
 
        $this->assertEquals("Testeur", $resultat); 
    } 
	
?>