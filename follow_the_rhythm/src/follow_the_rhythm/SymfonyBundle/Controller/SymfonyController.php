<?php
namespace follow_the_rhythm\SymfonyBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use follow_the_rhythm\SymfonyBundle\Entity\Artiste;
use follow_the_rhythm\SymfonyBundle\Entity\Actualite;
use follow_the_rhythm\SymfonyBundle\Entity\Concert;
use follow_the_rhythm\SymfonyBundle\Entity\Message;
use follow_the_rhythm\SymfonyBundle\Entity\Moderateur;
use follow_the_rhythm\SymfonyBundle\Entity\Topic;
use follow_the_rhythm\SymfonyBundle\Entity\User;
use Symfony\Component\HttpFoundation\Request;
use follow_the_rhythm\SymfonyBundle\Form\ActualiteType;
use follow_the_rhythm\SymfonyBundle\Form\ArtisteType;
use follow_the_rhythm\SymfonyBundle\Form\ConcertType;
use follow_the_rhythm\SymfonyBundle\Form\MessageType;
use follow_the_rhythm\SymfonyBundle\Form\TopicType;

class SymfonyController extends Controller
{
    public function indexAction($page = 1, $sens = 1, $nbParPage = 20)
    {
      //-------------------------------AFFICHER ACTUALITE/ARTISTE/CONCERT---------------------------
      //on récupère le gestionnaire d'entité
      $gestionnaireEntite = $this->getDoctrine()->getManager();
      
      //on récupère les repositories des entités
      $repositoryActualite = $gestionnaireEntite->getRepository('follow_the_rhythmSymfonyBundle:Actualite');
      if ($sens == 1){
      //On récupère toutes les actualité de la BD
      $tabActualites = $repositoryActualite->findAllPagineEtTrieDesc($page, $nbParPage, false);
      }
      
      else if($sens == 2){
      $tabActualites = $repositoryActualite->findAllPagineEtTrieAsc($page, $nbParPage, false);
      }
      //Pagination
      $pagination = array(
          'page' => $page,
          'nbPages' => ceil(count($tabActualites) / $nbParPage),
          'nomRoute' => 'follow_the_rhythm_accueil',
          'paramsRoute' => array()
      );
      
     
      return $this->render('follow_the_rhythmSymfonyBundle:Symfony:index.html.twig',
      array('tabActualites'=>$tabActualites,'pagination'=>$pagination, 'nbParPage' => $nbParPage));
    }
    
    
    
    public function accueilArtistesUniquementAction($page = 1, $sens = 1, $nbParPage = 25)
    {
          //-------------------------------AFFICHER ACTUALITE/ARTISTE UNIQUEMENT---------------------------
      //on récupère le gestionnaire d'entité
      $gestionnaireEntite = $this->getDoctrine()->getManager();
      
      //on récupère les repositories des entités
      $repositoryActualite = $gestionnaireEntite->getRepository('follow_the_rhythmSymfonyBundle:Actualite');
      if ($sens==1){
      $tabActualites = $repositoryActualite->findAllPagineEtTrieDesc($page, $nbParPage, true);
      }
      
      else if($sens==2){
      $tabActualites = $repositoryActualite->findAllPagineEtTrieAsc($page, $nbParPage, true);      
      }
      
       $pagination = array(
          'page' => $page,
          'nbPages' => ceil(count($tabActualites) / $nbParPage),
          'nomRoute' => 'follow_the_rhythm_accueilArtistesUniquement',
          'paramsRoute' => array()
      );
      
      return $this->render('follow_the_rhythmSymfonyBundle:Symfony:accueilArtistesUniquement.html.twig',
      array('tabActualites'=>$tabActualites,'pagination'=>$pagination, 'nbParPage'=>$nbParPage));  
      
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
        $actualite->setDateActualite(date_add(new \Datetime(), date_interval_create_from_date_string('2 hours')));
        $actualite->setNbCoupDeCoeurs(0);
        //On met à l'actualité le seul modérateur éxistant
        //$actualite->setModerateur(1);   //IMPORTANT!
        $gestionnaireEntite->persist($actualite);
        $gestionnaireEntite->flush();
        
      // Envoi du formulaire vers la vue
      //return $this->render('follow_the_rhythmSymfonyBundle:Symfony:soumettreActualite.html.twig',array('formulaireActualite'=>$formulaireActualite->createView()));
      return $this->redirect($this->generateUrl('follow_the_rhythm_accueil',array('page'=>1,'sens'=>1, 'nbParPage' => 25)));
    
      }
      return $this->render('follow_the_rhythmSymfonyBundle:Symfony:soumettreActualite.html.twig',
      array('formulaireActualite' => $formulaireActualite->createView()));
    }
    
    public function soumettreTopicPromotionsAction(Request $requeteUtilisateur){
       //on récupère le gestionnaire d'entité
      $gestionnaireEntite = $this->getDoctrine()->getManager();
      
      //on récupère le repository des entités
      $repositoryActualite = $gestionnaireEntite->getRepository('follow_the_rhythmSymfonyBundle:Topic');
      
      //Création du formulaire
      $topic = new Topic();
      
      $formulaireTopic = $this->createForm(new TopicType, $topic); //création du formulaire
      
      //Récupération des données dans $Topic dès que le formulaire est soumis
      $formulaireTopic->handleRequest($requeteUtilisateur);
      
      if($formulaireTopic->isValid()) //Le formulaire a été soumis
      {
        //On enregistre l'objet $Topic dans la BD
        $date = date_add(new \Datetime(), date_interval_create_from_date_string('2 hours'));
        $topic->setNbSignalement(0);
        $topic->setDate($date);
        $topic->setUtilisateur($this->get('security.context')->getToken()->getUser());
        $repositoryCategories = $gestionnaireEntite->getRepository('follow_the_rhythmSymfonyBundle:Categorie')->findBy([
          "nom" => "Promotions"
          ]);
        $topic->setCategorie($repositoryCategories[0]);
        //On met à l'actualité le seul modérateur éxistant
        // $topic->setModerateur(1);   //IMPORTANT!
        $gestionnaireEntite->persist($topic);
        $gestionnaireEntite->flush();
        
      // Envoi du formulaire vers la vue
      //return $this->render('follow_the_rhythmSymfonyBundle:Symfony:soumettreTopic.html.twig',array('formulaireTopic'=>$formulaireTopic->createView()));
      return $this->redirect($this->generateUrl('follow_the_rhythm_categorie',array('catId'=>4, 'page'=>1,'sens'=>1)));
    
      }
      return $this->render('follow_the_rhythmSymfonyBundle:Symfony:soumettreTopic.html.twig',
      array('formulaireTopic' => $formulaireTopic->createView(), 'categorie' => 4, 'categorie_nom' => 'Promotions'));
    }
    
    public function soumettreTopicNewsAction(Request $requeteUtilisateur){
       //on récupère le gestionnaire d'entité
      $gestionnaireEntite = $this->getDoctrine()->getManager();
      
      //on récupère le repository des entités
      $repositoryActualite = $gestionnaireEntite->getRepository('follow_the_rhythmSymfonyBundle:Topic');
      
      //Création du formulaire
      $topic = new Topic();
      
      $formulaireTopic = $this->createForm(new TopicType, $topic); //création du formulaire
      
      //Récupération des données dans $Topic dès que le formulaire est soumis
      $formulaireTopic->handleRequest($requeteUtilisateur);
      
      if($formulaireTopic->isValid()) //Le formulaire a été soumis
      {
        //On enregistre l'objet $Topic dans la BD
        $date = date_add(new \Datetime(), date_interval_create_from_date_string('2 hours'));
        $topic->setNbSignalement(0);
        $topic->setDate($date);
        $topic->setUtilisateur($this->get('security.context')->getToken()->getUser());
        $repositoryCategories = $gestionnaireEntite->getRepository('follow_the_rhythmSymfonyBundle:Categorie')->findBy([
          "nom" => "News"
          ]);
        $topic->setCategorie($repositoryCategories[0]);
        //On met à l'actualité le seul modérateur éxistant
        // $topic->setModerateur(1);   //IMPORTANT!
        $gestionnaireEntite->persist($topic);
        $gestionnaireEntite->flush();
        
      // Envoi du formulaire vers la vue
      //return $this->render('follow_the_rhythmSymfonyBundle:Symfony:soumettreTopic.html.twig',array('formulaireTopic'=>$formulaireTopic->createView()));
      return $this->redirect($this->generateUrl('follow_the_rhythm_categorie',array('catId'=>1, 'page'=>1,'sens'=>1)));
    
      }
      return $this->render('follow_the_rhythmSymfonyBundle:Symfony:soumettreTopic.html.twig',
      array('formulaireTopic' => $formulaireTopic->createView(), 'categorie' => 1, 'categorie_nom' => 'News'));
    }
    
    public function soumettreTopicEspacePriveAction(Request $requeteUtilisateur){
       //on récupère le gestionnaire d'entité
      $gestionnaireEntite = $this->getDoctrine()->getManager();
      
      //on récupère le repository des entités
      $repositoryActualite = $gestionnaireEntite->getRepository('follow_the_rhythmSymfonyBundle:Topic');
      
      //Création du formulaire
      $topic = new Topic();
      
      $formulaireTopic = $this->createForm(new TopicType, $topic); //création du formulaire
      
      //Récupération des données dans $Topic dès que le formulaire est soumis
      $formulaireTopic->handleRequest($requeteUtilisateur);
      
      if($formulaireTopic->isValid()) //Le formulaire a été soumis
      {
        //On enregistre l'objet $Topic dans la BD
        $date = date_add(new \Datetime(), date_interval_create_from_date_string('2 hours'));
        $topic->setNbSignalement(0);
        $topic->setDate($date);
        $topic->setUtilisateur($this->get('security.context')->getToken()->getUser());
        $repositoryCategories = $gestionnaireEntite->getRepository('follow_the_rhythmSymfonyBundle:Categorie')->findBy([
          "nom" => "Espace Prive"
          ]);
        $topic->setCategorie($repositoryCategories[0]);
        //On met à l'actualité le seul modérateur éxistant
        // $topic->setModerateur(1);   //IMPORTANT!
        $gestionnaireEntite->persist($topic);
        $gestionnaireEntite->flush();
        
      // Envoi du formulaire vers la vue
      //return $this->render('follow_the_rhythmSymfonyBundle:Symfony:soumettreTopic.html.twig',array('formulaireTopic'=>$formulaireTopic->createView()));
      return $this->redirect($this->generateUrl('follow_the_rhythm_categorie',array('catId'=>2, 'page'=>1,'sens'=>1)));
    
      }
      return $this->render('follow_the_rhythmSymfonyBundle:Symfony:soumettreTopic.html.twig',
      array('formulaireTopic' => $formulaireTopic->createView(), 'categorie' => 2, 'categorie_nom' => 'Espace privé'));
    }
    
    public function soumettreTopicConcertsAction(Request $requeteUtilisateur){
       //on récupère le gestionnaire d'entité
      $gestionnaireEntite = $this->getDoctrine()->getManager();
      
      //on récupère le repository des entités
      $repositoryActualite = $gestionnaireEntite->getRepository('follow_the_rhythmSymfonyBundle:Topic');
      
      //Création du formulaire
      $topic = new Topic();
      
      $formulaireTopic = $this->createForm(new TopicType, $topic); //création du formulaire
      
      //Récupération des données dans $Topic dès que le formulaire est soumis
      $formulaireTopic->handleRequest($requeteUtilisateur);
      
      if($formulaireTopic->isValid()) //Le formulaire a été soumis
      {
        //On enregistre l'objet $Topic dans la BD
        $date = date_add(new \Datetime(), date_interval_create_from_date_string('2 hours'));
        $topic->setNbSignalement(0);
        $topic->setDate($date);
        $topic->setUtilisateur($this->get('security.context')->getToken()->getUser());
        $repositoryCategories = $gestionnaireEntite->getRepository('follow_the_rhythmSymfonyBundle:Categorie')->findBy([
          "nom" => "Concerts"
          ]);
        $topic->setCategorie($repositoryCategories[0]);
        //On met à l'actualité le seul modérateur éxistant
        // $topic->setModerateur(1);   //IMPORTANT!
        $gestionnaireEntite->persist($topic);
        $gestionnaireEntite->flush();
        
      // Envoi du formulaire vers la vue
      //return $this->render('follow_the_rhythmSymfonyBundle:Symfony:soumettreTopic.html.twig',array('formulaireTopic'=>$formulaireTopic->createView()));
      return $this->redirect($this->generateUrl('follow_the_rhythm_categorie',array('catId'=>3,'page'=>1,'sens'=>1)));
    
      }
      return $this->render('follow_the_rhythmSymfonyBundle:Symfony:soumettreTopic.html.twig',
      array('formulaireTopic' => $formulaireTopic->createView(), 'categorie' => 3, 'categorie_nom' => 'Concerts'));
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
        return $this->redirect($this->generateUrl('follow_the_rhythm_accueil',array('page'=>1, 'sens'=>1)));
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
      $gestionnaireEntite = $this->getDoctrine()->getManager();
      $repositoryCategorie = $gestionnaireEntite->getRepository('follow_the_rhythmSymfonyBundle:Categorie');
      $tabTopics = $repositoryCategorie->findAll();
      $tabNbTopics[0] = 0;
      $tabNbMessTopics[0] = 0;
      $tabDernier[0] = 0;
      
      foreach ($tabTopics as $topicActuel)
      {
        $repositoryMessage = $gestionnaireEntite->getRepository('follow_the_rhythmSymfonyBundle:Topic');
        $tabTopics2 = $repositoryMessage->findBy(["categorie" => $topicActuel->getId()]);
        $tabNbTopics [$topicActuel->getId()] = count($tabTopics2);
        if (empty($tabTopics)) $tabMessages[0] = 0;
        $tabNbMessages[0] = 0;
        $tabNbMessTopics[$topicActuel->getId()] = 0;
        foreach ($tabTopics2 as $topicActuel2)
        {
          $repositoryMessage2 = $gestionnaireEntite->getRepository('follow_the_rhythmSymfonyBundle:Message');
          $tabMessage2 = $repositoryMessage2->findBy(["topic" => $topicActuel2->getId()]);
          $tabNbMessages2 [$topicActuel2->getId()] = count($tabMessage2);
          if (empty($tabTopics)) $tabMessages2[0] = 0;
          $tabNbMessTopics[$topicActuel->getId()] += $tabNbMessages2 [$topicActuel2->getId()];
        }
        
        if ($tabNbTopics [$topicActuel->getId()] != 0 && $tabNbMessTopics[$topicActuel->getId()] != 0)
        {
          // Sélection du dernier message de chaque catégorie
          $dernier = $gestionnaireEntite->CreateQuery("SELECT t.id AS topic, u.id AS user, m.date AS date, m.contenu AS contenu FROM follow_the_rhythmSymfonyBundle:Message m JOIN follow_the_rhythmSymfonyBundle:Topic t WITH t.id = m.topic JOIN follow_the_rhythmSymfonyBundle:User u WITH u.id = m.utilisateur WHERE t.categorie = '".$topicActuel->getId()."' ORDER BY m.id DESC");
          $derniers = $dernier->getResult();
          $topicD = $gestionnaireEntite->getRepository('follow_the_rhythmSymfonyBundle:Topic');
          $topicD = $topicD->findBy(["id" => $derniers[0]["topic"]]);
          $userD = $gestionnaireEntite->getRepository('follow_the_rhythmSymfonyBundle:User');
          $userD = $userD->findBy(["id" => $derniers[0]["user"]]);
          
          $derniereDate[$topicActuel->getId()] = $derniers[0]['date']->format('d-m-Y à H.i');
          $dernierPseudo[$topicActuel->getId()] = $userD[0]->getUsername();
          $dernierTitre[$topicActuel->getId()] = $topicD[0]->getTitre();
          $dernierIdUser[$topicActuel->getId()] = $userD[0]->getId();
          $dernierIdTopic[$topicActuel->getId()] = $topicD[0]->getId();
        }
        else
        {
          $derniereDate[$topicActuel->getId()] = "";
          $dernierPseudo[$topicActuel->getId()] = "";
          $dernierTitre[$topicActuel->getId()] = "";
          $dernierIdUser[$topicActuel->getId()] = "";
        }
      }
      return $this->render('follow_the_rhythmSymfonyBundle:Symfony:accueilForum.html.twig', array('tabTopics' => $tabNbTopics, 'tabNbMessTopics' => $tabNbMessTopics, 'dDate' => $derniereDate, 'dPseudo' => $dernierPseudo, 'dTitre' => $dernierTitre, 'dUtilisateur' => $dernierIdUser, 'dTopic' => $dernierIdTopic));
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
      
      $dejaSuivi = false;
      
      //on regarde si l'artiste est suivi par l'utilisateur connecté
      if (($this->isGranted('IS_AUTHENTICATED_REMEMBERED')))
      {
        $artistes = $gestionnaireEntite->getRepository('follow_the_rhythmSymfonyBundle:Artiste')->findBy([
            "id" => $id
            ]);
        $users = $gestionnaireEntite->getRepository('follow_the_rhythmSymfonyBundle:user')->findBy([
            "id" => $this->get('security.context')->getToken()->getUser()->getId()
            ]);
        $userNew = $users[0];
        $artisteConcerne = $artistes[0];
        
        foreach($userNew->getArtiste() as $artisteActuel)
        {
          if ($artisteActuel->getId() == $artisteConcerne->getId())
          $dejaSuivi = true;
        }
      }
        
        //on recupère l'artiste
        $artiste = $repositoryArtiste->find($id);
        return $this->render('follow_the_rhythmSymfonyBundle:Symfony:pageArtiste.html.twig',
        array('tabActualites'=>$tabActualites,'artiste'=>$artiste, 'dejaSuivi' => $dejaSuivi));
    }
    
    
    
    public function pageUtilisateurAction($id){
      //on récupère le gestionnaire d'entité
      $gestionnaireEntite = $this->getDoctrine()->getManager();
      
      //on récupère le repository de l'entité utilisateur
      $repositoryUtilisateur = $gestionnaireEntite->getRepository('follow_the_rhythmSymfonyBundle:User');
      
      //on recupère l'utilisateur recherché
      //$tabArtiste = $repositoryUtilisateur->getArtisteDunUtilisateur($id);
      
      //on recupère l'utilisateur
      $utilisateur = $repositoryUtilisateur->find($id);
      
      $tabArtiste = $utilisateur->getArtiste();
      
      return $this->render('follow_the_rhythmSymfonyBundle:Symfony:pageUtilisateur.html.twig',array('tabArtiste'=>$tabArtiste,'user'=>$utilisateur));
    }
    
    
    public function pageConcertAction($id){
      //on récupère le gestionnaire d'entité
      $gestionnaireEntite = $this->getDoctrine()->getManager();
      
      //on récupère le repository de l'entité concert
      $repositoryConcert = $gestionnaireEntite->getRepository('follow_the_rhythmSymfonyBundle:Concert');
      
     
      
      //on recupère le concert recherché
      $concert = $repositoryConcert->find($id);
      
      $artiste = $concert->getArtiste();
      
      $dejaSuivi = false;
      
      //on regarde si l'artiste est suivi par l'utilisateur connecté
      if (($this->isGranted('IS_AUTHENTICATED_REMEMBERED')))
      {
        $concerts = $gestionnaireEntite->getRepository('follow_the_rhythmSymfonyBundle:Concert')->findBy([
            "id" => $id
            ]);
        $users = $gestionnaireEntite->getRepository('follow_the_rhythmSymfonyBundle:user')->findBy([
            "id" => $this->get('security.context')->getToken()->getUser()->getId()
            ]);
        $userNew = $users[0];
        $concertConcerne = $concerts[0];
        
        foreach($userNew->getConcert() as $concertActuel)
        {
          if ($concertActuel->getId() == $concertConcerne->getId())
          $dejaSuivi = true;
        }
      }
      
      return $this->render('follow_the_rhythmSymfonyBundle:Symfony:pageConcert.html.twig',
      array('concert'=>$concert, 'artiste'=>$artiste, 'dejaSuivi' => $dejaSuivi));
    }
    
    //--------------------------------------------------------FORUM-----------------------------------------------------------------
     public function categorieAction($catId = 1){
       
      $cat[1] = "News";
      $cat[2] = "EspacePrivé";
      $cat[3] = "Concerts";
      $cat[4] = "Promotions";
      
      $icon[1] = "newspaper-o";
      $icon[2] = "commenting";
      $icon[3] = "music";
      $icon[4] = "microphone";
      
      //on récupère le gestionnaire d'entité
      $gestionnaireEntite = $this->getDoctrine()->getManager();
      
      //on récupère les repositories des entités
      $repositoryTopic = $gestionnaireEntite->getRepository('follow_the_rhythmSymfonyBundle:Topic');
      $tabTopics = $repositoryTopic->findBy(["categorie" => $catId]);
      $tabNbMessages[0] = 0;
      $tabDate[0] = 0;
      foreach ($tabTopics as $topicActuel)
      {
        $repositoryMessage = $gestionnaireEntite->getRepository('follow_the_rhythmSymfonyBundle:Message');
        $tabMessage = $repositoryMessage->findBy(["topic" => $topicActuel->getId()]);
        $tabNbMessages [$topicActuel->getId()] = count($tabMessage);
        if (empty($tabTopics)) $tabMessages[0] = 0;
        $date = $gestionnaireEntite->CreateQuery("SELECT m.date AS dateTest FROM follow_the_rhythmSymfonyBundle:Message m WHERE m.topic = '".$topicActuel->getId()."' ORDER BY m.id DESC");
        $dates = $date->getResult();
        if ($tabNbMessages [$topicActuel->getId()] != 0) $tabDate[$topicActuel->getId()] = $dates[0]['dateTest'];
        else $tabDate[$topicActuel->getId()] = new \Datetime();
      }
      return $this->render('follow_the_rhythmSymfonyBundle:Symfony:categorie.html.twig',
      array('tabTopics'=>$tabTopics, 'dateD' => $tabDate, 'cat' => $cat, 'catId' => $catId, 'icon' => $icon, 'tabNbMessages'=>$tabNbMessages));
    }
    
    public function messagesAction($topicId = 1, $nbParPage = 25, $page = 1, Request $requeteUtilisateur){
      //on récupère le gestionnaire d'entité
      $gestionnaireEntite = $this->getDoctrine()->getManager();
      
      //on récupère les repositories des entités
      $repositoryMessages = $gestionnaireEntite->getRepository('follow_the_rhythmSymfonyBundle:Message');
      $tabMessages = $repositoryMessages->findBy(["topic" => $topicId]);
      $tabCreateur[0] = 0;
      
      // Pagination
      $tabMessages = $repositoryMessages->findAllPagineEtTrieAsc($page, $nbParPage, $topicId); 
      $pagination = array(
          'page' => $page,
          'nbPages' => ceil(count($tabMessages) / $nbParPage),
          'nomRoute' => 'follow_the_rhythm_messages',
          'paramsRoute' => array('topicId' => $topicId)
      );
      
      // on récupère le titre du topic
      $repositoryTopic = $gestionnaireEntite->getRepository('follow_the_rhythmSymfonyBundle:Topic');
      $tabTopics = $repositoryTopic->findBy(["id" => $topicId]);
      
      // on récupère le pesudo du créateur de chaque message
      foreach ($tabMessages as $message)
      {
        $repositoryPseudo = $gestionnaireEntite->getRepository('follow_the_rhythmSymfonyBundle:User');
        $id = $repositoryPseudo->findBy(["id" => $message->getUtilisateur()->getId()]);
        $tabCreateur [$message->getId()] = $id[0]->getUsername();
      }
      
       //on récupère le gestionnaire d'entité
      $gestionnaireEntite = $this->getDoctrine()->getManager();
      
      //on récupère le repository des entités
      $repositoryMessage = $gestionnaireEntite->getRepository('follow_the_rhythmSymfonyBundle:Message');
      
      //Création du formulaire
      $messageForm = new Message();
      
      $formulaireMessage = $this->createForm(new MessageType, $messageForm); //création du formulaire
      
      //Récupération des données dans $actualite dès que le formulaire est soumis
      $formulaireMessage->handleRequest($requeteUtilisateur);
      
      if($formulaireMessage->isValid()) //Le formulaire a été soumis
      {
        //On enregistre l'objet $actualite dans la BD
        $messageForm->setDate(date_add(new \Datetime(), date_interval_create_from_date_string('2 hours')));
        $topic = $gestionnaireEntite->getRepository('follow_the_rhythmSymfonyBundle:Topic')->findBy([
          "id" => $topicId
          ]);
        $messageForm->setTopic($topic[0]);
        $messageForm->setUtilisateur($this->get('security.context')->getToken()->getUser());
        //On met à l'actualité le seul modérateur éxistant
        //$actualite->setModerateur(1);   //IMPORTANT!
        $gestionnaireEntite->persist($messageForm);
        $gestionnaireEntite->flush();
        
      // Envoi du formulaire vers la vue
      //return $this->render('follow_the_rhythmSymfonyBundle:Symfony:soumettreActualite.html.twig',array('formulaireActualite'=>$formulaireActualite->createView()));
      return $this->redirect($this->generateUrl('follow_the_rhythm_messages',array('page'=>1,'sens'=>1,'nbParPage' => 25, 'topicId' => $topicId)));
    
      }
      return $this->render('follow_the_rhythmSymfonyBundle:Symfony:messages.html.twig',
      array('tabMessage'=>$tabMessages, 'tabCreateur' => $tabCreateur, 'titre' => $tabTopics[0]->getTitre(), 'topicCourant' => $topicId, 'pagination'=>$pagination, 'nbParPage' => $nbParPage, 'formulaireMessage' => $formulaireMessage->createView()));
      
    }
    
    //--------------------------------------------------------JSON-----------------------------------------------------------------
    
     public function newsAction()
    {
      header("Access-Control-Allow-Origin: *");
      header("SContent-Type: application/json");
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
        $actualite->setDateActualite(date_add(new \Datetime(), date_interval_create_from_date_string('2 hours')));
        $actualite->setNbCoupDeCoeurs(0);
        //On met à l'actualité le seul modérateur éxistant
        //$actualite->setModerateur(xxx);   //IMPORTANT!
        $gestionnaireEntite->persist($actualite);
        $gestionnaireEntite->flush();
        
      // Envoi du formulaire vers la vue
      //return $this->render('follow_the_rhythmSymfonyBundle:Symfony:soumettreActualite.html.twig',array('formulaireActualite'=>$formulaireActualite->createView()));
      return $this->redirect($this->generateUrl('follow_the_rhythm_accueil',array('page'=>1,'sens'=>1, 'nbParPage' => 25)));
    
      }
      return $this->render('follow_the_rhythmSymfonyBundle:Symfony:modifierActualite.html.twig',
      array('formulaireActualite' => $formulaireActualite->createView()));
    }
    
    public function suivreArtisteAction($artiste)
    {
      //on récupère le gestionnaire d'entité
      $gestionnaireEntite = $this->getDoctrine()->getManager();   
      $artistes = $gestionnaireEntite->getRepository('follow_the_rhythmSymfonyBundle:Artiste')->findBy([
          "id" => $artiste
          ]);
      $users = $gestionnaireEntite->getRepository('follow_the_rhythmSymfonyBundle:user')->findBy([
          "id" => $this->get('security.context')->getToken()->getUser()->getId()
          ]);
      $userNew = $users[0];
      $userNew->addArtiste($artistes[0]);
      $artistes[0]->setNbFollower($artistes[0]->getNbFollower() + 1);
      $gestionnaireEntite->flush();
      return $this->redirect($this->generateUrl('follow_the_rhythm_pageArtiste',array('id'=>$artiste)));
    }
    
    public function nePlusSuivreArtisteAction($artiste)
    {
      //on récupère le gestionnaire d'entité
      $gestionnaireEntite = $this->getDoctrine()->getManager();   
      $artistes = $gestionnaireEntite->getRepository('follow_the_rhythmSymfonyBundle:Artiste')->findBy([
          "id" => $artiste
          ]);
      $users = $gestionnaireEntite->getRepository('follow_the_rhythmSymfonyBundle:user')->findBy([
          "id" => $this->get('security.context')->getToken()->getUser()->getId()
          ]);
      $userNew = $users[0];
      $userNew->removeArtiste($artistes[0]);
      $artistes[0]->setNbFollower($artistes[0]->getNbFollower() - 1);
      $gestionnaireEntite->flush();
      return $this->redirect($this->generateUrl('follow_the_rhythm_pageArtiste',array('id'=>$artiste)));
    }
    
    public function suivreConcertAction($concert)
    {
      //on récupère le gestionnaire d'entité
      $gestionnaireEntite = $this->getDoctrine()->getManager();   
      $concerts = $gestionnaireEntite->getRepository('follow_the_rhythmSymfonyBundle:Concert')->findBy([
          "id" => $concert
          ]);
      $users = $gestionnaireEntite->getRepository('follow_the_rhythmSymfonyBundle:user')->findBy([
          "id" => $this->get('security.context')->getToken()->getUser()->getId()
          ]);
      $userNew = $users[0];
      $userNew->addConcert($concerts[0]);
      $gestionnaireEntite->flush();
      return $this->redirect($this->generateUrl('follow_the_rhythm_pageConcert',array('id'=>$concert)));
    }
    
    public function nePlusSuivreConcertAction($concert)
    {
      //on récupère le gestionnaire d'entité
      $gestionnaireEntite = $this->getDoctrine()->getManager();   
      $concerts = $gestionnaireEntite->getRepository('follow_the_rhythmSymfonyBundle:Concert')->findBy([
          "id" => $concert
          ]);
      $users = $gestionnaireEntite->getRepository('follow_the_rhythmSymfonyBundle:user')->findBy([
          "id" => $this->get('security.context')->getToken()->getUser()->getId()
          ]);
      $userNew = $users[0];
      $userNew->removeConcert($concerts[0]);
      $gestionnaireEntite->flush();
      return $this->redirect($this->generateUrl('follow_the_rhythm_pageConcert',array('id'=>$concert)));
    }
    
    public function coupDeCoeurAction($actualite)
    {
      //on récupère le gestionnaire d'entité
      $gestionnaireEntite = $this->getDoctrine()->getManager();   
      $actualites = $gestionnaireEntite->getRepository('follow_the_rhythmSymfonyBundle:Actualite')->findBy([
          "id" => $actualite
          ]);
      $users = $gestionnaireEntite->getRepository('follow_the_rhythmSymfonyBundle:user')->findBy([
          "id" => $this->get('security.context')->getToken()->getUser()->getId()
          ]);
      $userNew = $users[0];
      $actualites[0]->setNbCoupDeCoeurs($actualites[0]->getNbCoupDeCoeurs() + 1);
      $gestionnaireEntite->flush();
      return $this->redirect($this->generateUrl('follow_the_rhythm_accueil',array('page' => 1, 'sens' => 1, 'id'=>$actualite, 'nbParPage' => 25)));
    }
    
    public function signalerAction($message)
    {
      //on récupère le gestionnaire d'entité
      $gestionnaireEntite = $this->getDoctrine()->getManager();   
      $messages = $gestionnaireEntite->getRepository('follow_the_rhythmSymfonyBundle:Message')->findBy([
          "id" => $message
          ]);
      $users = $gestionnaireEntite->getRepository('follow_the_rhythmSymfonyBundle:user')->findBy([
          "id" => $this->get('security.context')->getToken()->getUser()->getId()
          ]);
      $messages[0]->setNbSignalement($messages[0]->getNbSignalement() + 1);
      $gestionnaireEntite->flush();
      return $this->redirect($this->generateUrl('follow_the_rhythm_accueilForum',array('page' => 1, 'sens' => 1, 'id'=>$message)));
    }
    
    
    public function rechercheAction($recherche)
    {
      
      //on récupère le gestionnaire d'entité
      $gestionnaireEntite = $this->getDoctrine()->getManager();
      //On récupère le résultat de la recherche pour les concerts
      $resultConcert = $gestionnaireEntite->getRepository('follow_the_rhythmSymfonyBundle:Concert')->getSearchConcert($recherche);
      //On récupère le résultat de la recherche pour les artistes
      $resultArtiste = $gestionnaireEntite->getRepository('follow_the_rhythmSymfonyBundle:Artiste')->getSearchArtiste($recherche);
      //On récupère le résultat de la recherche pour les topics
      $resultTopic = $gestionnaireEntite->getRepository('follow_the_rhythmSymfonyBundle:Topic')->getSearchTopic($recherche);
      
      //On envoie les résultat à la vue
      return $this->render('follow_the_rhythmSymfonyBundle:Symfony:recherche.html.twig',array( 'resultRechercheConcert'=>$resultConcert, 
                                                                                                'resultRechercheArtiste'=>$resultArtiste,
                                                                                                'resultRechercheTopic'=>$resultTopic,
                                                                                                'recherche'=>$recherche));
      
      
      
    }
    
}