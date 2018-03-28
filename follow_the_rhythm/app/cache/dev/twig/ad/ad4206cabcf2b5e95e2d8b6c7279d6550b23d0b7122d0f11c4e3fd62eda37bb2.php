<?php

/* follow_the_rhythmSymfonyBundle:Symfony:credits.html.twig */
class __TwigTemplate_5f80f176fb76d7f99445b850f93e4e52e06dd362f855fa18660b3f368a77e467 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::vueMere.html.twig", "follow_the_rhythmSymfonyBundle:Symfony:credits.html.twig", 1);
        $this->blocks = array(
            'contenuCentral' => array($this, 'block_contenuCentral'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::vueMere.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f823728925e11ea1e2b9319190295f0014dfaa29d65116fcddb6de492961f423 = $this->env->getExtension("native_profiler");
        $__internal_f823728925e11ea1e2b9319190295f0014dfaa29d65116fcddb6de492961f423->enter($__internal_f823728925e11ea1e2b9319190295f0014dfaa29d65116fcddb6de492961f423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "follow_the_rhythmSymfonyBundle:Symfony:credits.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f823728925e11ea1e2b9319190295f0014dfaa29d65116fcddb6de492961f423->leave($__internal_f823728925e11ea1e2b9319190295f0014dfaa29d65116fcddb6de492961f423_prof);

    }

    // line 3
    public function block_contenuCentral($context, array $blocks = array())
    {
        $__internal_e0fea8ea362d7f744681562d841f4303aae6678fc478189ac57870296437de3b = $this->env->getExtension("native_profiler");
        $__internal_e0fea8ea362d7f744681562d841f4303aae6678fc478189ac57870296437de3b->enter($__internal_e0fea8ea362d7f744681562d841f4303aae6678fc478189ac57870296437de3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenuCentral"));

        // line 4
        echo "       
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\"><h2><b><span class=\"glyphicon glyphicon-file\"></span> Crédits</b></h2>
                </div>
                <div class=\"list-group\">
                    <div class=\"list-group-item\">
                        <div align=\"justify\"> 
                            <h3><b>Ce projet a été réalisé dans le cadre d'un projet de DUT informatique de l' 
                            <a href=\"";
        // line 14
        echo "https://www.iutbayonne.univ-pau.fr/";
        echo "\"><FONT COLOR=\"#0000FF\">IUT de Bayonne et du Pays Basque</FONT></a>
                            par des <a href=";
        // line 15
        echo $this->env->getExtension('routing')->getPath("follow_the_rhythm_contacts");
        echo "><FONT COLOR=\"#0000FF\">étudiants</FONT></a>
                            de seconde année lors de l'année universitaire 2017/2018.</b></h3></Br>

                            <h2><u>Contexte du projet</u></h2>

                            <h5>Ce projet est la poursuite du projet de première année de DUT Informatique, 
                            réalisé par la même équipe projet et avec le même tuteur/commanditaire.</h5>

                            <h5>Pour trouver ce projet, nous nous sommes réunis en première année sans notre 
                            tuteur et nous avons fait une séance de brainstorming en énumérant toutes les 
                            idées nous passant par la tête jusqu’à nous arrêter sur celle-ci : un réseau 
                            social musical. En effet, nous ne connaissions aucun réseau social où les 
                            personnes pouvaient parler exclusivement de musique. Après quelques réunions 
                            avec notre tuteur pour définir plus précisément le projet, Follow the Rhythm 
                            était né.</h5>
                            <h5>Le but de ce projet est de créer un site de consultation d’actualités 
                            musicales disposant aussi d’un côté social grâce à un forum permettant aux 
                            utilisateurs d’échanger autour de la musique.</h5>
                            <h5>Les différents acteurs de notre projet sont les utilisateurs et les modérateurs.</h5>
                    
                            <h2><u>Fonctionalités du site</u></h2>
                            
                            <h5>Voici les quatre principales fonctionnalités de Follow the Rythm : </h5>
                    
                            <h3>Se renseigner sur les différentes actualités musicales</h3>
                    
                            <h5>L’application permettra aux utilisateurs de se renseigner sur 
                            les différents événements en rapport avec la musique (concerts, festivals) 
                            en fonction de leur localisation géographique. Elle permettra également 
                            aux utilisateurs de se renseigner sur les artistes de leur choix, sur leurs 
                            futurs concerts, leurs albums ou les derniers événements les concernant.</h5>
                    
                            <h3>Consulter et poster sur un forum visible par tous</h3>
                    
                            <h5>L’application contiendra également un forum visible par tous, mais 
                            seul les utilisateurs enregistrés pourront poster leurs messages ou leurs
                            fils de discussion.</h5> 
                            <h5>Le forum contiendra deux niveaux. Un premier niveau découpé en catégories 
                            créé par les modérateurs permettra aux utilisateurs de choisir le sujet 
                            principal des discussions auxquelles ils vont accéder. Le deuxième niveau
                            sera composé des fils de discussion créés par les utilisateurs sous la 
                            surveillance des modérateurs qui auront pour rôle de gérer les fils de 
                            discussions des forums ainsi que de poster différentes actualités dans 
                            le fil d’actualités.</h5>
                    
                            <h3>Ajouter des artistes et des utilisateurs</h3>
                            
                            <h5>Les utilisateurs pourront s’enregistrer sur l’application et garder 
                            des artistes dans leur liste d’artistes favoris. Ils pourront envoyer des
                            demandes d’amis à d’autres utilisateurs. Une fois dans la liste 
                            d’amis/d’artistes, l’utilisateur recevra des informations sur les 
                            actualités concernant ces personnes.</h5>
                    
                            <h3>Réserver des billets de concert</h3> 
                    
                            <h5>Il serait également possible pour un utilisateur enregistré, 
                            lorsqu’il recherche un concert, de réserver ses billets pour ce dernier 
                            en passant par un site partenaire.</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_e0fea8ea362d7f744681562d841f4303aae6678fc478189ac57870296437de3b->leave($__internal_e0fea8ea362d7f744681562d841f4303aae6678fc478189ac57870296437de3b_prof);

    }

    public function getTemplateName()
    {
        return "follow_the_rhythmSymfonyBundle:Symfony:credits.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 15,  52 => 14,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "::vueMere.html.twig" %} {#La vue fille hérite de la vue mère#}*/
/*     */
/* {% block contenuCentral %}*/
/*        */
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="panel panel-default">*/
/*                 <div class="panel-heading"><h2><b><span class="glyphicon glyphicon-file"></span> Crédits</b></h2>*/
/*                 </div>*/
/*                 <div class="list-group">*/
/*                     <div class="list-group-item">*/
/*                         <div align="justify"> */
/*                             <h3><b>Ce projet a été réalisé dans le cadre d'un projet de DUT informatique de l' */
/*                             <a href="{{'https://www.iutbayonne.univ-pau.fr/' }}"><FONT COLOR="#0000FF">IUT de Bayonne et du Pays Basque</FONT></a>*/
/*                             par des <a href={{path('follow_the_rhythm_contacts')}}><FONT COLOR="#0000FF">étudiants</FONT></a>*/
/*                             de seconde année lors de l'année universitaire 2017/2018.</b></h3></Br>*/
/* */
/*                             <h2><u>Contexte du projet</u></h2>*/
/* */
/*                             <h5>Ce projet est la poursuite du projet de première année de DUT Informatique, */
/*                             réalisé par la même équipe projet et avec le même tuteur/commanditaire.</h5>*/
/* */
/*                             <h5>Pour trouver ce projet, nous nous sommes réunis en première année sans notre */
/*                             tuteur et nous avons fait une séance de brainstorming en énumérant toutes les */
/*                             idées nous passant par la tête jusqu’à nous arrêter sur celle-ci : un réseau */
/*                             social musical. En effet, nous ne connaissions aucun réseau social où les */
/*                             personnes pouvaient parler exclusivement de musique. Après quelques réunions */
/*                             avec notre tuteur pour définir plus précisément le projet, Follow the Rhythm */
/*                             était né.</h5>*/
/*                             <h5>Le but de ce projet est de créer un site de consultation d’actualités */
/*                             musicales disposant aussi d’un côté social grâce à un forum permettant aux */
/*                             utilisateurs d’échanger autour de la musique.</h5>*/
/*                             <h5>Les différents acteurs de notre projet sont les utilisateurs et les modérateurs.</h5>*/
/*                     */
/*                             <h2><u>Fonctionalités du site</u></h2>*/
/*                             */
/*                             <h5>Voici les quatre principales fonctionnalités de Follow the Rythm : </h5>*/
/*                     */
/*                             <h3>Se renseigner sur les différentes actualités musicales</h3>*/
/*                     */
/*                             <h5>L’application permettra aux utilisateurs de se renseigner sur */
/*                             les différents événements en rapport avec la musique (concerts, festivals) */
/*                             en fonction de leur localisation géographique. Elle permettra également */
/*                             aux utilisateurs de se renseigner sur les artistes de leur choix, sur leurs */
/*                             futurs concerts, leurs albums ou les derniers événements les concernant.</h5>*/
/*                     */
/*                             <h3>Consulter et poster sur un forum visible par tous</h3>*/
/*                     */
/*                             <h5>L’application contiendra également un forum visible par tous, mais */
/*                             seul les utilisateurs enregistrés pourront poster leurs messages ou leurs*/
/*                             fils de discussion.</h5> */
/*                             <h5>Le forum contiendra deux niveaux. Un premier niveau découpé en catégories */
/*                             créé par les modérateurs permettra aux utilisateurs de choisir le sujet */
/*                             principal des discussions auxquelles ils vont accéder. Le deuxième niveau*/
/*                             sera composé des fils de discussion créés par les utilisateurs sous la */
/*                             surveillance des modérateurs qui auront pour rôle de gérer les fils de */
/*                             discussions des forums ainsi que de poster différentes actualités dans */
/*                             le fil d’actualités.</h5>*/
/*                     */
/*                             <h3>Ajouter des artistes et des utilisateurs</h3>*/
/*                             */
/*                             <h5>Les utilisateurs pourront s’enregistrer sur l’application et garder */
/*                             des artistes dans leur liste d’artistes favoris. Ils pourront envoyer des*/
/*                             demandes d’amis à d’autres utilisateurs. Une fois dans la liste */
/*                             d’amis/d’artistes, l’utilisateur recevra des informations sur les */
/*                             actualités concernant ces personnes.</h5>*/
/*                     */
/*                             <h3>Réserver des billets de concert</h3> */
/*                     */
/*                             <h5>Il serait également possible pour un utilisateur enregistré, */
/*                             lorsqu’il recherche un concert, de réserver ses billets pour ce dernier */
/*                             en passant par un site partenaire.</h5>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* */
/* */
