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
      return $this->redirect($this->generateUrl('follow_the_rhythm_accueil',array('page'=>1,'sens'=>1)));
    
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
      array('formulaireConcert'=>$formulaireConcert->createView()));
   
    }
    
    public function contactsAction(){
      return $this->render('follow_the_rhythmSymfonyBundle:Symfony:contacts.html.twig');
    }
    
    public function creditsAction(){
      return $this->render('follow_the_rhythmSymfonyBundle:Symfony:credits.html.twig');
    }
    
    public function accueilForumAction(){
      return $this->render('follow_the_rhythmSymfonyBundle:Symfony:accueilForum.html.twig');
    }
    
    public function aideAction(){
      return $this->render('follow_the_rhythmSymfonyBundle:Symfony:aide.html.twig');
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
    
    //--------------------------------------------------------FORUM-----------------------------------------------------------------
     public function categorieNewsAction(){
      return $this->render('follow_the_rhythmSymfonyBundle:Symfony:categorieNews.html.twig');
    }
     public function categorieEspacePriveAction(){
      return $this->render('follow_the_rhythmSymfonyBundle:Symfony:categorieEspacePrive.html.twig');
    }
     public function categorieConcertAction(){
      return $this->render('follow_the_rhythmSymfonyBundle:Symfony:categorieConcert.html.twig');
    }
     public function categoriePromotionAction(){
      return $this->render('follow_the_rhythmSymfonyBundle:Symfony:categoriePromotion.html.twig');
    }
    
    //--------------------------------------------------------JSON-----------------------------------------------------------------
    
     public function newsAction()
    {
      header("Access-Control-Allow-Origin: *");
      //-------------------------------AFFICHER ACTUALITE/ARTISTE/CONCERT---------------------------
      //on récupère le gestionnaire d'entité
      $gestionnaireEntite = $this->getDoctrine()->getManager();
      
      //on récupère les repositories des entités
      $repositoryActualite = $gestionnaireEntite->getRepository('follow_the_rhythmSymfonyBundle:Actualite');
      
      //On récupère toutes les actualité de la BD
      $tabActualites = $repositoryActualite->findAll();
     
      return $this->render('follow_the_rhythmSymfonyBundle:Symfony:news.json.twig',
      array('tabActualites'=>$tabActualites));
    }
    
    public function modifierSupprimerActualiteAction(){
      //--------------------------AFFICHER CONCERT----------------------------
      //on récupère le gestionnaire d'entité
      $gestionnaireEntite = $this->getDoctrine()->getManager();
      
      //on récupère le repository des entités
      $repositoryActualite = $gestionnaireEntite->getRepository('follow_the_rhythmSymfonyBundle:Actualite');
      
      //On récupère tous les concert de la BD ainsi que les Artistes liés
      $tabActualites = $repositoryActualite->findAll();
      
      //On envoie les données à la vue correspondante
      return $this->render('follow_the_rhythmSymfonyBundle:Symfony:modifierSupprimerActualite.html.twig', array('tabActualites'=>$tabActualites));
    }
    
    public function modifierActualiteAction(Request $requeteUtilisateur, $id){
       //on récupère le gestionnaire d'entité
      $gestionnaireEntite = $this->getDoctrine()->getManager();
      
      //on récupère le repository des entités
      $repositoryActualite = $gestionnaireEntite->getRepository('follow_the_rhythmSymfonyBundle:Actualite');
      
      $actualite = $repositoryActualite->find($id);
      
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
      return $this->redirect($this->generateUrl('follow_the_rhythm_accueil',array('page'=>1,'sens'=>1)));
    
      }
      return $this->render('follow_the_rhythmSymfonyBundle:Symfony:modifierActualite.html.twig',
      array('formulaireActualite' => $formulaireActualite->createView()));
    }
}