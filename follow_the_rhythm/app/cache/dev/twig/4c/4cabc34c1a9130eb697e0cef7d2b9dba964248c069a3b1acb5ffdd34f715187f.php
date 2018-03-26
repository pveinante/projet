<?php

/* follow_the_rhythmSymfonyBundle:Symfony:codeKO.html.twig */
class __TwigTemplate_a6f9ef6beae4f24577ec803c768eb635970930a4632e2ac5a95e56b97e56889e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1684c57bd123eaab618523870a6d20dd6ace3fe3c74c5724a745ebf9c888ef44 = $this->env->getExtension("native_profiler");
        $__internal_1684c57bd123eaab618523870a6d20dd6ace3fe3c74c5724a745ebf9c888ef44->enter($__internal_1684c57bd123eaab618523870a6d20dd6ace3fe3c74c5724a745ebf9c888ef44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "follow_the_rhythmSymfonyBundle:Symfony:codeKO.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
<!--
        ";
        // line 7
        echo "        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-sm\">
              <div class=\"btn-group\" data-toggle=\"buttons\">
               <label class=\"btn btn-secondary active btn-sm\">
                <input type=\"radio\" name=\"options\" id=\"option1\" autocomplete=\"off\" checked> Concert/Festival
               </label>
               <label class=\"btn btn-secondary btn-sm\">
                <input type=\"radio\" name=\"options\" id=\"option2\" autocomplete=\"off\"> Artistes
               </label>
              </div>
            </div>
          </div>
        </div>
        ";
        // line 22
        echo "    
    
        <div class=\"container\">
          <div class=\"dropdown\">
            <button class=\"btn btn-default dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\">Trier par ordre
            <span class=\"caret\"></span></button>
            <ul class=\"dropdown-menu\">
              <li><a href=\"#\">Chronologique</a></li>
              <li><a href=\"#\">Antéchronologique</a></li>
              <li class=\"divider\"></li>
            </ul>
          </div>
        </div>
        -->

        <!--
        <div class=\"col-sm-2\">
          <p>Trier par ordre </p>            
        </div>
        <div class=\"col-sm-2\">
        ";
        // line 42
        echo "   
          <div class=\"dropdown\">
            <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
            Chronologique
            </button>
            <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
               <li><a class=\"dropdown-item\" href=\"#\">Chronologique</a></li>
               <li><a class=\"dropdown-item\" href=\"#\">Antéchronologique</a></li>
            </div>
          </div>
        </div>
             
             -->
          ";
        // line 56
        echo "          ";
        // line 57
        echo "          
          
";
        // line 60
        echo "
<!--    //--------------------------------------------------------METHODES TEST--------------------------------------------------------
    
  public function ajouterAction()
  {
    // Création de l'entité
    \$actualite = new Actualite();
    \$actualite->setTitre('Mon dernier weekend');
    \$actualite->setDescription(\"C'était vraiment super et on s'est bien amusé.\");
    \$actualite->setNbCoupDeCoeurs(1);
    \$actualite->setDate(2018/12/01);
    // On peut ne pas définir ni la date ni la publication,
    // car ces attributs sont définis automatiquement dans le constructeur

    // On récupère l'EntityManager
    \$em = \$this->getDoctrine()->getManager();

    // Étape 1 : On « persiste » l'entité
    \$em->persist(\$actualite);

    // Étape 2 : On « flush » tout ce qui a été persisté avant
    \$em->flush();

    // Reste de la méthode qu'on avait déjà écrit
    if (\$this->getRequest()->getMethod() == 'POST') {
      \$this->get('session')->getFlashBag()->add('info', 'Actualite bien enregistré');
      return \$this->redirect( \$this->generateUrl('sdzblog_voir', array('id' => \$actualite->getId())) );
    }

    return \$this->render('follow_the_rhythmSymfonyBundle:Symfony:index.html.twig');
  }
    
    public function actualiteAction(\$titre,\$description,\$nbCoupDeCoeurs,\$dateActualite,\$unMod)
    {
        // you can fetch the EntityManager via \$this->getDoctrine()
        // or you can add an argument to your action: index(EntityManagerInterface \$em)
        \$em = \$this->getDoctrine()->getManager();

        \$actualite = new Actualite();
        \$actualite->setTitre(\$titre);
        \$actualite->setDescription(\$description);
        \$actualite->setNbCoupDeCoeurs(\$nbCoupDeCoeurs);
        \$actualite->setDateActualite(\$dateActualite);
        \$actualite->setModerateur(\$unMod);
                
       # \$birthday = \"11-11-2018\";
      #  \$dateT = new \\DateTime(\$birthday);
        
      #  \$artiste->setDateActualite(\$dateT);

        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        \$em->persist(\$actualite);

        // actually executes the queries (i.e. the INSERT query)
        \$em->flush();

        return \$this->render('follow_the_rhythmSymfonyBundle:Symfony:index.html.twig');
        #return new Response('Saved new product with id '.\$actualite->getId());
    }
    
    public function soumettreActualiteAction(Request \$requeteUtilisateur)
    {
      //création objet Actualite \"vide\"
      \$actualite = new Actualite();
      
      //Création formulaire permettant de saisir une actualité
      \$formulaireActualite = \$this->createFormBuilder(\$actualite)
        ->add('titre','text')
        ->add('artiste_id','text', array('required'=>false,'label'=>'Artiste Concerné'))
        ->add('concert_id','text', array('required'=>false,'label'=>'Concert Concerné'))
        ->add('description','textarea')
        ->getForm();
        
      //Récupération des données dans \$actualite dès que le formulaire est soumis
      \$formulaireActualite->handleRequest(\$requeteUtilisateur);
      
      if(\$formulaireActualite->isSubmitted()) //Le formulaire a été soumis
      {
        //On enregistre l'objet \$actualite dans la BD
        \$gestionnaireEntite = \$this->getDoctrine()->getManager();
        \$actualite->setDateActualite(date('Y-m-d H:i:s'));
        \$gestionnaireEntite->persist(\$actualite);
        \$gestionnaireEntite->flush();
      }
      // Envoi du formulaire vers la vue
      return \$this->render('follow_the_rhythmSymfonyBundle:Symfony:index.html.twig', 
                    array('formulaireActualite' => \$formulaireActualite->createView()));
    }
}
    
    public function artisteAction()
    {
        // you can fetch the EntityManager via \$this->getDoctrine()
        // or you can add an argument to your action: index(EntityManagerInterface \$em)
        \$em = \$this->getDoctrine()->getManager();

        \$artiste = new Artiste();
        \$artiste->setNomComplet(\"Machin\");
        \$artiste->setNomDeScene(\"Truc\");
        \$artiste->setNbFollower(6);
        
       # \$birthday = \"11-11-2018\";
      #  \$dateT = new \\DateTime(\$birthday);
        
      #  \$artiste->setDateActualite(\$dateT);

        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        \$em->persist(\$artiste);

        // actually executes the queries (i.e. the INSERT query)
        \$em->flush();

        return \$this->render('follow_the_rhythmSymfonyBundle:Symfony:index.html.twig');
        #return new Response('Saved new product with id '.\$artiste->getId());
    }
-->
";
        
        $__internal_1684c57bd123eaab618523870a6d20dd6ace3fe3c74c5724a745ebf9c888ef44->leave($__internal_1684c57bd123eaab618523870a6d20dd6ace3fe3c74c5724a745ebf9c888ef44_prof);

    }

    public function getTemplateName()
    {
        return "follow_the_rhythmSymfonyBundle:Symfony:codeKO.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  88 => 60,  84 => 57,  82 => 56,  67 => 42,  45 => 22,  29 => 7,  25 => 4,  22 => 2,);
    }
}
/* {#Cette page garde trace de toutes les portions de code qui n'ont pas été gardées/utilisées dans cette application web#}*/
/* */
/* {#vueMere.html.twig#}*/
/* */
/* <!--*/
/*         {#Tri festival ou artiste#}*/
/*         <div class="container">*/
/*           <div class="row">*/
/*             <div class="col-sm">*/
/*               <div class="btn-group" data-toggle="buttons">*/
/*                <label class="btn btn-secondary active btn-sm">*/
/*                 <input type="radio" name="options" id="option1" autocomplete="off" checked> Concert/Festival*/
/*                </label>*/
/*                <label class="btn btn-secondary btn-sm">*/
/*                 <input type="radio" name="options" id="option2" autocomplete="off"> Artistes*/
/*                </label>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*         {#fin du tri#}*/
/*     */
/*     */
/*         <div class="container">*/
/*           <div class="dropdown">*/
/*             <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Trier par ordre*/
/*             <span class="caret"></span></button>*/
/*             <ul class="dropdown-menu">*/
/*               <li><a href="#">Chronologique</a></li>*/
/*               <li><a href="#">Antéchronologique</a></li>*/
/*               <li class="divider"></li>*/
/*             </ul>*/
/*           </div>*/
/*         </div>*/
/*         -->*/
/* */
/*         <!--*/
/*         <div class="col-sm-2">*/
/*           <p>Trier par ordre </p>            */
/*         </div>*/
/*         <div class="col-sm-2">*/
/*         {#Menu déroulant de tri#}   */
/*           <div class="dropdown">*/
/*             <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">*/
/*             Chronologique*/
/*             </button>*/
/*             <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">*/
/*                <li><a class="dropdown-item" href="#">Chronologique</a></li>*/
/*                <li><a class="dropdown-item" href="#">Antéchronologique</a></li>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*              */
/*              -->*/
/*           {#fin du menu déroulant#}*/
/*           {#fin de la séparation des éléments#}*/
/*           */
/*           */
/* {#SymfonyController.php#}*/
/* */
/* <!--    //--------------------------------------------------------METHODES TEST--------------------------------------------------------*/
/*     */
/*   public function ajouterAction()*/
/*   {*/
/*     // Création de l'entité*/
/*     $actualite = new Actualite();*/
/*     $actualite->setTitre('Mon dernier weekend');*/
/*     $actualite->setDescription("C'était vraiment super et on s'est bien amusé.");*/
/*     $actualite->setNbCoupDeCoeurs(1);*/
/*     $actualite->setDate(2018/12/01);*/
/*     // On peut ne pas définir ni la date ni la publication,*/
/*     // car ces attributs sont définis automatiquement dans le constructeur*/
/* */
/*     // On récupère l'EntityManager*/
/*     $em = $this->getDoctrine()->getManager();*/
/* */
/*     // Étape 1 : On « persiste » l'entité*/
/*     $em->persist($actualite);*/
/* */
/*     // Étape 2 : On « flush » tout ce qui a été persisté avant*/
/*     $em->flush();*/
/* */
/*     // Reste de la méthode qu'on avait déjà écrit*/
/*     if ($this->getRequest()->getMethod() == 'POST') {*/
/*       $this->get('session')->getFlashBag()->add('info', 'Actualite bien enregistré');*/
/*       return $this->redirect( $this->generateUrl('sdzblog_voir', array('id' => $actualite->getId())) );*/
/*     }*/
/* */
/*     return $this->render('follow_the_rhythmSymfonyBundle:Symfony:index.html.twig');*/
/*   }*/
/*     */
/*     public function actualiteAction($titre,$description,$nbCoupDeCoeurs,$dateActualite,$unMod)*/
/*     {*/
/*         // you can fetch the EntityManager via $this->getDoctrine()*/
/*         // or you can add an argument to your action: index(EntityManagerInterface $em)*/
/*         $em = $this->getDoctrine()->getManager();*/
/* */
/*         $actualite = new Actualite();*/
/*         $actualite->setTitre($titre);*/
/*         $actualite->setDescription($description);*/
/*         $actualite->setNbCoupDeCoeurs($nbCoupDeCoeurs);*/
/*         $actualite->setDateActualite($dateActualite);*/
/*         $actualite->setModerateur($unMod);*/
/*                 */
/*        # $birthday = "11-11-2018";*/
/*       #  $dateT = new \DateTime($birthday);*/
/*         */
/*       #  $artiste->setDateActualite($dateT);*/
/* */
/*         // tell Doctrine you want to (eventually) save the Product (no queries yet)*/
/*         $em->persist($actualite);*/
/* */
/*         // actually executes the queries (i.e. the INSERT query)*/
/*         $em->flush();*/
/* */
/*         return $this->render('follow_the_rhythmSymfonyBundle:Symfony:index.html.twig');*/
/*         #return new Response('Saved new product with id '.$actualite->getId());*/
/*     }*/
/*     */
/*     public function soumettreActualiteAction(Request $requeteUtilisateur)*/
/*     {*/
/*       //création objet Actualite "vide"*/
/*       $actualite = new Actualite();*/
/*       */
/*       //Création formulaire permettant de saisir une actualité*/
/*       $formulaireActualite = $this->createFormBuilder($actualite)*/
/*         ->add('titre','text')*/
/*         ->add('artiste_id','text', array('required'=>false,'label'=>'Artiste Concerné'))*/
/*         ->add('concert_id','text', array('required'=>false,'label'=>'Concert Concerné'))*/
/*         ->add('description','textarea')*/
/*         ->getForm();*/
/*         */
/*       //Récupération des données dans $actualite dès que le formulaire est soumis*/
/*       $formulaireActualite->handleRequest($requeteUtilisateur);*/
/*       */
/*       if($formulaireActualite->isSubmitted()) //Le formulaire a été soumis*/
/*       {*/
/*         //On enregistre l'objet $actualite dans la BD*/
/*         $gestionnaireEntite = $this->getDoctrine()->getManager();*/
/*         $actualite->setDateActualite(date('Y-m-d H:i:s'));*/
/*         $gestionnaireEntite->persist($actualite);*/
/*         $gestionnaireEntite->flush();*/
/*       }*/
/*       // Envoi du formulaire vers la vue*/
/*       return $this->render('follow_the_rhythmSymfonyBundle:Symfony:index.html.twig', */
/*                     array('formulaireActualite' => $formulaireActualite->createView()));*/
/*     }*/
/* }*/
/*     */
/*     public function artisteAction()*/
/*     {*/
/*         // you can fetch the EntityManager via $this->getDoctrine()*/
/*         // or you can add an argument to your action: index(EntityManagerInterface $em)*/
/*         $em = $this->getDoctrine()->getManager();*/
/* */
/*         $artiste = new Artiste();*/
/*         $artiste->setNomComplet("Machin");*/
/*         $artiste->setNomDeScene("Truc");*/
/*         $artiste->setNbFollower(6);*/
/*         */
/*        # $birthday = "11-11-2018";*/
/*       #  $dateT = new \DateTime($birthday);*/
/*         */
/*       #  $artiste->setDateActualite($dateT);*/
/* */
/*         // tell Doctrine you want to (eventually) save the Product (no queries yet)*/
/*         $em->persist($artiste);*/
/* */
/*         // actually executes the queries (i.e. the INSERT query)*/
/*         $em->flush();*/
/* */
/*         return $this->render('follow_the_rhythmSymfonyBundle:Symfony:index.html.twig');*/
/*         #return new Response('Saved new product with id '.$artiste->getId());*/
/*     }*/
/* -->*/
/* */
