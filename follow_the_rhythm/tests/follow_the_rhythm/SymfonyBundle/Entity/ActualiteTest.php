namespace Tests\follow_the_rhythm\SymfonyBundle\Entity; 
 
use follow_the_rhythm\SymfonyBundle\Entity\Actualite; 
 
class ActualiteTest extends \PHPUnit_Framework_TestCase 
{ 
    public function testSetTitre() 
    { 
        $actu = new Actualite(); 
        $resultat = $actu->setTitre("Test OK avec PHPUnit !"); 
 
        // assert that your calculator added the numbers correctly! 
        $this->assertEquals("Test OK avec PHPUnit !", $resultat); 
    } 
    
    public function testSetDescription() 
    { 
        $actu = new Actualite(); 
        $resultat = $actu->setDescription("Description OK avec PHPUnit !"); 
 
        // assert that your calculator added the numbers correctly! 
        $this->assertEquals("Description OK avec PHPUnit !", $resultat); 
    } 
    
    public function testSetNbCoupDeCoeurs() 
    { 
        $actu = new Actualite(); 
        $resultat = $actu->setNbCoupDeCoeurs(2 + 5 + 9); 
 
        // assert that your calculator added the numbers correctly! 
        $this->assertEquals(16, $resultat); 
    } 
    
    public function testSetArtiste() 
    { 
        $actu = new Actualite(); 
        $resultat = $actu->setArtiste("Johnny"); 
 
        // assert that your calculator added the numbers correctly! 
        $this->assertEquals("Johnny", $resultat); 
    } 
    
    public function testSetModerateur() 
    { 
        $actu = new Actualite(); 
        $resultat = $actu->setModerateur("Modérateur test"); 
 
        // assert that your calculator added the numbers correctly! 
        $this->assertEquals("Modérateur test", $resultat); 
    } 
    
    public function testSetConcert() 
    { 
        $actu = new Actualite(); 
        $resultat = $actu->setConcert("Test OK avec PHPUnit !"); 
 
        // assert that your calculator added the numbers correctly! 
        $this->assertEquals("Test OK avec PHPUnit !", $resultat); 
    } 
    
    public function testSetDateActualite() 
    { 
        $actu = new Actualite();
        $resultat = $actu->setDateActualite("2018-03-20");
 
        // assert that your calculator added the numbers correctly! 
        $this->assertEquals("2018-03-20", $resultat); 
    }
    
    public function testGetTitre() 
    { 
        $actu = new Actualite();
        $actu->setTitre("Test titre 1");
        $resultat = $actu->getTitre(); 
 
        // assert that your calculator added the numbers correctly! 
        $this->assertEquals("Test titre 1", $resultat); 
    } 
    
    public function testGetDescription() 
    { 
        $actu = new Actualite();
        $actu->setDescription("Test titre 1");
        $resultat = $actu->getDescription(); 
 
        // assert that your calculator added the numbers correctly! 
        $this->assertEquals("Test titre 1", $resultat); 
    }
    
    public function testGetNbCoupDeCoeurs() 
    { 
        $actu = new Actualite();
        $actu->setNbCoupDeCoeurs(24);
        $resultat = $actu->getNbCoupDeCoeurs(); 
 
        // assert that your calculator added the numbers correctly! 
        $this->assertEquals(24, $resultat); 
    }
    
    public function testGetArtiste() 
    { 
        $artiste = new Artiste();
        $artiste->setNom("Johnny");
        
        $actu = new Actualite();
        $actu->setArtiste(artiste);
        $resultat = $actu->getArtiste()->getNom(); 
 
        // assert that your calculator added the numbers correctly! 
        $this->assertEquals("Johnny", $resultat); 
    }
    
    public function testGetModerateur() 
    { 
        $mod = new Moderateur();
        $mod->setNom("Modérateur 1");
        
        $actu = new Actualite();
        $actu->setModerateur(artiste);
        $resultat = $actu->getModerateur()->getNom(); 
 
        // assert that your calculator added the numbers correctly! 
        $this->assertEquals("Modérateur 1", $resultat); 
    }
    
    public function testGetConcert() 
    { 
        $actu = new Actualite();
        $actu->setConcert("Modérateur 1");
        $resultat = $actu->getConcert(); 
 
        // assert that your calculator added the numbers correctly! 
        $this->assertEquals("Modérateur 1", $resultat); 
    }
    
    public function testGetDateActualite() 
    { 
        $actu = new Actualite();
        $actu->setDateActualite("2018-03-20");
        $resultat = $actu->getDateActualite(); 
 
        // assert that your calculator added the numbers correctly! 
        $this->assertEquals("2018-03-20", $resultat); 
    }
}