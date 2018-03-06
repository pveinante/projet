<?php

namespace follow_the_rhythm\SymfonyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use follow_the_rhythm\SymfonyBundle\Entity\Artiste;
use follow_the_rhythm\SymfonyBundle\Entity\Actualite;
use follow_the_rhythm\SymfonyBundle\Entity\Concert;
use follow_the_rhythm\SymfonyBundle\Entity\Moderateur;

use Symfony\Component\HttpFoundation\Request;

use follow_the_rhythm\SymfonyBundle\Form\ActualiteType;
use follow_the_rhythm\SymfonyBundle\Form\ArtisteType;
use follow_the_rhythm\SymfonyBundle\Form\ConcertType;

class SymfonyController extends Controller
{
  
    
    
    public function indexAction($page = 1, $sens = 1)
    {
      //-------------------------------AFFICHER ACTUALITE/ARTISTE/CONCERT---------------------------
      //on récupère le gestionnaire d'entité
      $gestionnaireEntite = $this->getDoctrine()->getManager();
      
      //Pour pagination
      $nbActualiteParPage = 10;
      
      //on récupère les repositories des entités
      $repositoryActualite = $gestionnaireEntite->getRepository('follow_the_rhythmSymfonyBundle:Actualite');
      if ($sens == 1){
      //On récupère toutes les actualité de la BD
      $tabActualites = $repositoryActualite->findAllPagineEtTrieDesc($page, $nbActualiteParPage);
      }
      
      else if($sens == 2){
      $tabActualites = $repositoryActualite->findAllPagineEtTrieAsc($page, $nbActualiteParPage);
      }
      //Pagination
      $pagination = array(
          'page' => $page,
          'nbPages' => ceil(count($tabActualites) / $nbActualiteParPage),
          'nomRoute' => 'follow_the_rhythm_accueil',
          'paramsRoute' => array()
      );
      
     
      return $this->render('follow_the_rhythmSymfonyBundle:Symfony:index.html.twig',
      array('tabActualites'=>$tabActualites,'pagination'=>$pagination));
    }
    
    
    
    public function accueilArtistesUniquementAction($page = 1, $sens = 1)
    {
          //-------------------------------AFFICHER ACTUALITE/ARTISTE UNIQUEMENT---------------------------
      //on récupère le gestionnaire d'entité
      $gestionnaireEntite = $this->getDoctrine()->getManager();
      
      $nbActualiteParPage = 10;
      
      //on récupère les repositories des entités
      $repositoryActualite = $gestionnaireEntite->getRepository('follow_the_rhythmSymfonyBundle:Actualite');
      if ($sens==1){
      $tabActualites = $repositoryActualite->findAllPagineEtTrieDesc($page, $nbActualiteParPage);
      }
      
      else if($sens==2){
      $tabActualites = $repositoryActualite->findAllPagineEtTrieAsc($page, $nbActualiteParPage);      
      }
      
       $pagination = array(
          'page' => $page,
          'nbPages' => ceil(count($tabActualites) / $nbActualiteParPage),
          'nomRoute' => 'follow_the_rhythm_accueilArtistesUniquement',
          'paramsRoute' => array()
      );
      
      return $this->render('follow_the_rhythmSymfonyBundle:Symfony:accueilArtistesUniquement.html.twig',
      array('tabActualites'=>$tabActualites));  
      
    }
    
    
    
    
    
    public function soumettreActualiteAction(Request $requeteUtilisateur){
       //on récupère le gestionnaire d'entité
      $gestionnaireEntite = $this->getDoctrine()->getManager();
      
      //on récupère le repository des entités
      $repositoryActualite = $gestionnaireEntite->getRepository('follow_the_rhythmSymfonyBundle:Actualite');
      
      //Création du formulaire
      $actualite = new Actualite();
      
      $formulaireActualite = $this->createForm(new ActualiteType, $actualite); //création du formulaire
        
      //Récupération des données dans $actualite dès que le formulaire est soumis
      $formulaireActualite->handleRequest($requeteUtilisateur);
      
      if($formulaireActualite->isValid()) //Le formulaire a été soumis
      {
        //On enregistre l'objet $actualite dans la BD
        $actualite->setDateActualite(new \Datetime());
        $actualite->setNbCoupDeCoeurs(0);
        //On met à l'actualité le seul modérateur éxistant
        //$actualite->setModerateur(xxx);   //IMPORTANT!
        $gestionnaireEntite->persist($actualite);
        $gestionnaireEntite->flush();
        
      // Envoi du formulaire vers la vue
      //return $this->render('follow_the_rhythmSymfonyBundle:Symfony:soumettreActualite.html.twig',array('formulaireActualite'=>$formulaireActualite->createView()));
      return $this->redirect($this->generateUrl('follow_the_rhythm_accueil',array('page'=>1)));
    
      }
      return $this->render('follow_the_rhythmSymfonyBundle:Symfony:soumettreActualite.html.twig',
      array('formulaireActualite' => $formulaireActualite->createView()));
    }
    
    
    
    
    
    
    
    
    
    
    
    public function artisteAction(Request $requeteUtilisateur){
      //--------------------------AFFICHER CONCERT----------------------------
      //on récupère le gestionnaire d'entité
      $gestionnaireEntite = $this->getDoctrine()->getManager();
      
      //on récupère le repository des entités
      $repositoryArtiste = $gestionnaireEntite->getRepository('follow_the_rhythmSymfonyBundle:Artiste');
      
      
      //-------------------------------FORMULAIRE SOUMETTRE Artiste--------------
      //création objet Artiste "vide"
      $artiste = new Artiste();
      
      $formulaireArtiste = $this->createForm(new ArtisteType, $artiste); //création du formulaire
        
      //Récupération des données dans $artiste dès que le formulaire est soumis
      $formulaireArtiste->handleRequest($requeteUtilisateur);
      
      if($formulaireArtiste->isValid()) //Le formulaire a été soumis
      {
        //On enregistre l'objet $artiste dans la BD
        $artiste->setNbFollower(0);
        $gestionnaireEntite->persist($artiste);
        $gestionnaireEntite->flush();
        return $this->redirect($this->generateUrl('follow_the_rhythm_accueil',array('page'=>1, 'sens'=>1)));
      }
      
      //On envoie les données à la vue artiste
      return $this->render('follow_the_rhythmSymfonyBundle:Symfony:artiste.html.twig', 
      array('formulaireArtiste'=>$formulaireArtiste->createView()));
    }
    
    
    
    
    
    
     public function concertAction(Request $requeteUtilisateur){
      //--------------------------AFFICHER CONCERT----------------------------
      //on récupère le gestionnaire d'entité
      $gestionnaireEntite = $this->getDoctrine()->getManager();
      
      //on récupère le repository des entités
      $repositoryConcert = $gestionnaireEntite->getRepository('follow_the_rhythmSymfonyBundle:Concert');
      
      //On récupère tous les concert de la BD ainsi que les Artistes liés
      $tabConcerts = $repositoryConcert->getConcertArtiste();
      
      //-------------------------------FORMULAIRE SOUMETTRE CONCERT--------------
      //création objet Actualite "vide"
      $concert = new Concert();
      
      $formulaireConcert = $this->createForm(new ConcertType, $concert); //création du formulaire
      

      //Récupération des données dans $concert dès que le formulaire est soumis
      $formulaireConcert->handleRequest($requeteUtilisateur);
      
      if($formulaireConcert->isValid()) //Le formulaire a été soumis
      {
        //On enregistre l'objet $concert dans la BD
        $gestionnaireEntite->persist($concert);
        $gestionnaireEntite->flush();
      }
      
      //On envoie les données à la vue concert
      return $this->render('follow_the_rhythmSymfonyBundle:Symfony:concert.html.twig', 
      array('tabConcert'=>$tabConcerts,
            'formulaireConcert'=>$formulaireConcert->createView()));
   
    }
    //heyo
    public function contactsAction(){
            return $this->render('follow_the_rhythmSymfonyBundle:Symfony:contacts.html.twig');
    }
    
    public function creditsAction(){
            return $this->render('follow_the_rhythmSymfonyBundle:Symfony:credits.html.twig');
    }
    
    public function accueilForumAction(){
            return $this->render('follow_the_rhythmSymfonyBundle:Symfony:accueilForum.html.twig');
    }
    
    
    
    public function pageArtisteAction($id){
      //on récupère le gestionnaire d'entité
      $gestionnaireEntite = $this->getDoctrine()->getManager();
      
      //on récupère le repository de l'entité artiste
      $repositoryArtiste = $gestionnaireEntite->getRepository('follow_the_rhythmSymfonyBundle:Artiste');
      
      //on recupère l'artiste recherché
      $tabActualites = $repositoryArtiste->getActualitesDUnArtiste($id);
      
      //on recupère l'artiste
      $artiste = $repositoryArtiste->find($id);
      return $this->render('follow_the_rhythmSymfonyBundle:Symfony:pageArtiste.html.twig',
      array('tabActualites'=>$tabActualites,'artiste'=>$artiste));
    }
    
    
    
    public function pageUtilisateurAction($id){
      //on récupère le gestionnaire d'entité
      $gestionnaireEntite = $this->getDoctrine()->getManager();
      
      //on récupère le repository de l'entité utilisateur
      $repositoryUtilisateur = $gestionnaireEntite->getRepository('follow_the_rhythmSymfonyBundle:Utilisateur');
      
      //on recupère l'utilisateur recherché
      //$tabArtiste = $repositoryUtilisateur->getArtisteDunUtilisateur($id);
      
      //on recupère l'utilisateur
      $utilisateur = $repositoryUtilisateur->find($id);
      
      $tabArtiste = $utilisateur->getArtiste();
      
      return $this->render('follow_the_rhythmSymfonyBundle:Symfony:pageUtilisateur.html.twig',array('tabArtiste'=>$tabArtiste,'utilisateur'=>$utilisateur));
    }
    
    
    public function pageConcertAction($id){
      //on récupère le gestionnaire d'entité
      $gestionnaireEntite = $this->getDoctrine()->getManager();
      
      //on récupère le repository de l'entité concert
      $repositoryConcert = $gestionnaireEntite->getRepository('follow_the_rhythmSymfonyBundle:Concert');
      
     
      
      //on recupère le concert recherché
      $concert = $repositoryConcert->find($id);
      
      $artiste = $concert->getArtiste();
      
      return $this->render('follow_the_rhythmSymfonyBundle:Symfony:pageConcert.html.twig',
      array('concert'=>$concert, 'artiste'=>$artiste));
    }
    //--------------------------------------------------------METHODES TEST--------------------------------------------------------
    
    /*public function ajouterAction()
  {
    // Création de l'entité
    $actualite = new Actualite();
    $actualite->setTitre('Mon dernier weekend');
    $actualite->setDescription("C'était vraiment super et on s'est bien amusé.");
    $actualite->setNbCoupDeCoeurs(1);
    $actualite->setDate(2018/12/01);
    // On peut ne pas définir ni la date ni la publication,
    // car ces attributs sont définis automatiquement dans le constructeur

    // On récupère l'EntityManager
    $em = $this->getDoctrine()->getManager();

    // Étape 1 : On « persiste » l'entité
    $em->persist($actualite);

    // Étape 2 : On « flush » tout ce qui a été persisté avant
    $em->flush();

    // Reste de la méthode qu'on avait déjà écrit
    if ($this->getRequest()->getMethod() == 'POST') {
      $this->get('session')->getFlashBag()->add('info', 'Actualite bien enregistré');
      return $this->redirect( $this->generateUrl('sdzblog_voir', array('id' => $actualite->getId())) );
    }

    return $this->render('follow_the_rhythmSymfonyBundle:Symfony:index.html.twig');
  }*/
    
    /*public function actualiteAction($titre,$description,$nbCoupDeCoeurs,$dateActualite,$unMod)
    {
        // you can fetch the EntityManager via $this->getDoctrine()
        // or you can add an argument to your action: index(EntityManagerInterface $em)
        $em = $this->getDoctrine()->getManager();

        $actualite = new Actualite();
        $actualite->setTitre($titre);
        $actualite->setDescription($description);
        $actualite->setNbCoupDeCoeurs($nbCoupDeCoeurs);
        $actualite->setDateActualite($dateActualite);
        $actualite->setModerateur($unMod);
                
       # $birthday = "11-11-2018";
      #  $dateT = new \DateTime($birthday);
        
      #  $artiste->setDateActualite($dateT);

        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $em->persist($actualite);

        // actually executes the queries (i.e. the INSERT query)
        $em->flush();

        return $this->render('follow_the_rhythmSymfonyBundle:Symfony:index.html.twig');
        #return new Response('Saved new product with id '.$actualite->getId());
    }*/
    
    /*public function soumettreActualiteAction(Request $requeteUtilisateur)
    {
      //création objet Actualite "vide"
      $actualite = new Actualite();
      
      //Création formulaire permettant de saisir une actualité
      $formulaireActualite = $this->createFormBuilder($actualite)
        ->add('titre','text')
        ->add('artiste_id','text', array('required'=>false,'label'=>'Artiste Concerné'))
        ->add('concert_id','text', array('required'=>false,'label'=>'Concert Concerné'))
        ->add('description','textarea')
        ->getForm();
        
      //Récupération des données dans $actualite dès que le formulaire est soumis
      $formulaireActualite->handleRequest($requeteUtilisateur);
      
      if($formulaireActualite->isSubmitted()) //Le formulaire a été soumis
      {
        //On enregistre l'objet $actualite dans la BD
        $gestionnaireEntite = $this->getDoctrine()->getManager();
        $actualite->setDateActualite(date('Y-m-d H:i:s'));
        $gestionnaireEntite->persist($actualite);
        $gestionnaireEntite->flush();
      }
      // Envoi du formulaire vers la vue
      return $this->render('follow_the_rhythmSymfonyBundle:Symfony:index.html.twig', 
                    array('formulaireActualite' => $formulaireActualite->createView()));
    }*/
}



    /*
    public function artisteAction()
    {
        // you can fetch the EntityManager via $this->getDoctrine()
        // or you can add an argument to your action: index(EntityManagerInterface $em)
        $em = $this->getDoctrine()->getManager();

        $artiste = new Artiste();
        $artiste->setNomComplet("Machin");
        $artiste->setNomDeScene("Truc");
        $artiste->setNbFollower(6);
        
       # $birthday = "11-11-2018";
      #  $dateT = new \DateTime($birthday);
        
      #  $artiste->setDateActualite($dateT);

        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $em->persist($artiste);

        // actually executes the queries (i.e. the INSERT query)
        $em->flush();

        return $this->render('follow_the_rhythmSymfonyBundle:Symfony:index.html.twig');
        #return new Response('Saved new product with id '.$artiste->getId());
    }
*/