<?php

// CLASSE DE TEST UNITAIRE DE LA CLASSE User

namespace Tests\follow_the_rhythm\SymfonyBundle\Entity; 
 
use follow_the_rhythm\SymfonyBundle\Entity\User; 
 
class UserTest extends \PHPUnit_Framework_TestCase 
{ 

	////////// TESTS DES SETTERS //////////

	// TEST DE LA METHODE setPseudo()
    public function testSetPseudo() 
    { 
        $User = new User();
        $resultat = $User->setPseudo("agoncalve003"); 
        $this->assertEquals("agoncalve003", $resultat); 
    } 
    
    // TEST DE LA METHODE setMdp()
    public function testSetMdp() 
    { 
        $User = new User();
        $resultat = $User->setMdp("a1b2c3d4e5"); 
        $this->assertEquals("a1b2c3d4e5", $resultat); 
    }
	
	// TEST DE LA METHODE setNbSignalement()
    public function testSetNbSignalement() 
    { 
        $User = new User();
        $resultat = $User->setNbSignalement(14 + 6); 
        $this->assertEquals(20, $resultat); 
    } 
    
	// TEST DE LA METHODE addArtiste()
    public function testAddArtiste() 
    { 
        $User = new User();
		$artiste = new Artiste();
		
		$artiste->setNom("Johnny");		
        $resultat = $User->addArtiste($artiste); 
 
        $this->assertEquals($artiste, $resultat); 
    } 
    
	// TEST DE LA METHODE removeArtiste()
    public function testRemoveArtiste() 
    { 
        $User = new User();
		$artiste = new Artiste();
		
		$artiste->setNom("Johnny");		
        $resultat = $User->removeArtiste($artiste); 
 
        $this->assertEquals($artiste, $resultat); 
    } 
	
    // TEST DE LA METHODE addUsersIAdd()
    public function testAddUsersIAdd() 
    { 
        $User = new User();
		$User2 = new User();
		
		$User2->setNom("Johnny");		
        $resultat = $User->addUsersIAdd($User2); 
 
        $this->assertEquals($User2, $resultat); 
    } 
    
	// TEST DE LA METHODE removeUsersIAdd()
    public function testRemoveUsersIAdd() 
    { 
        $User = new User();
		$User2 = new User();
		
		$User2->setNom("Johnny");		
        $resultat = $User->removeUsersIAdd($User2); 
 
        $this->assertEquals($User2, $resultat); 
    }
	
	// TEST DE LA METHODE addMyFriend()
    public function testAddMyFriend() 
    { 
        $User = new User();
		$User2 = new User();
		
		$User2->setNom("Johnny");		
        $resultat = $User->addMyFriend($User2); 
 
        $this->assertEquals($User2, $resultat); 
    } 
    
	// TEST DE LA METHODE removeMyFriend()
    public function testRemoveMyFriend() 
    { 
        $User = new User();
		$User2 = new User();
		
		$User2->setNom("Johnny");		
        $resultat = $User->removeMyFriend($User2); 
 
        $this->assertEquals($User2, $resultat); 
    }
	
	// TEST DE LA METHODE setModerateur()
    public function testSetModerateur() 
    { 
        $User = new User();
		$User2 = new User(); 
		$moderateur = new Moderateur();
		
		$moderateur->setNom("Testeur");		
        $resultat = $User->setModerateur($moderateur);
 
        $this->assertEquals($moderateur, $resultat); 
    } 
	
	////////// TESTS DES GETTERS //////////
    
	// TEST DE LA METHODE getPseudo()
    public function testGetPseudo() 
    { 
        $User = new User();
        $User->setPseudo("agoncalve003");
        $resultat = $User->getPseudo(); 
        $this->assertEquals("agoncalve003", $resultat); 
    } 
    
	// TEST DE LA METHODE getMdp()
    public function testGetMdp()
    { 
        $User = new User();
        $User->setMdp("a1b2c3d4e5"); 
        $resultat = $User->getMdp();
        $this->assertEquals("a1b2c3d4e5", $resultat); 
    }
	
	// TEST DE LA METHODE getNbSignalement()
    public function testGetNbSignalement() 
    { 
        $User = new User();
        $User->setNbSignalement(14 + 6); 
        $resultat = $User->getNbSignalement();
		$this->assertEquals(20, $resultat); 
    } 

	// TEST DE LA METHODE getArtiste()
    public function testGetArtiste() 
    { 
        $User = new User(); 
		$artiste = new Artiste();
		
		$artiste->setNom("Johnny");		
        $User->setArtiste($artiste); 
		$resultat = $User->getArtiste()->getNom();
 
        $this->assertEquals("Johnny", $resultat);  
    }
	
	// TEST DE LA METHODE getUsersIAdd()
    public function testGetUsersIAdd() 
    { 
        $User = new User();
		$User2 = new User();
		
		$User2->setNom("Johnny");		
        $User->addUsersIAdd($User2); 
		$resultat = $User->getUsersIAdd();
 
        $this->assertEquals($User2, $resultat); 
    } 
	
	// TEST DE LA METHODE getMyFriends()
    public function testGetMyFriends() 
    { 
        $User = new User();
		$User2 = new User();
		
		$User2->setNom("Johnny");		
        $User->addMyFriend($User2); 
		$resultat = $User->getMyFriends();
 
        $this->assertEquals($User2, $resultat); 
    } 
	
	// TEST DE LA METHODE getModerateur()
    public function testGetModerateur() 
    { 
        $User = new User();
		$moderateur = new Moderateur();
		
		$moderateur->setNom("Testeur");		
        $User->setModerateur($moderateur);
		$resultat = $User->getModerateur()->getNom();
 
        $this->assertEquals("Testeur", $resultat); 
    } 
	
?>