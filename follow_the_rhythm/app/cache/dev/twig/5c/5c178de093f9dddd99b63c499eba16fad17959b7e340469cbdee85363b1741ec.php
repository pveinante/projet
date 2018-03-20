<?php

/* ::vueMere.html.twig */
class __TwigTemplate_5f3a6ba8148f13a0adf66b15fff7f26d35ca77f7100550bf018df9bf4252c7a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'menuPropreAuBundle' => array($this, 'block_menuPropreAuBundle'),
            'contenuCentral' => array($this, 'block_contenuCentral'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1b451ebc1d39b9d29a03fe22e8d24f5794ae6e48341513a901f73d8425fec42b = $this->env->getExtension("native_profiler");
        $__internal_1b451ebc1d39b9d29a03fe22e8d24f5794ae6e48341513a901f73d8425fec42b->enter($__internal_1b451ebc1d39b9d29a03fe22e8d24f5794ae6e48341513a901f73d8425fec42b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::vueMere.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
";
        // line 3
        echo "
";
        // line 8
        echo "
<html>
    <head>
    ";
        // line 12
        echo "        <meta charset=\"UTF-8\" />
        <title>
            ";
        // line 14
        $this->displayBlock('title', $context, $blocks);
        // line 17
        echo "        </title>
     
        ";
        // line 19
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 24
        echo "        ";
        // line 25
        echo "    </head>

    <body background=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("upload/images/bg3.jpg"), "html", null, true);
        echo "\" style=\"background-size: cover;\">
            <div style=\"background-size: auto 128px; background-position: center;\" class=\"header col-lg-12 col-md-12 col-sm-12 col-xs-12\">
            ";
        // line 30
        echo "                    ";
        $this->displayBlock('header', $context, $blocks);
        // line 35
        echo "            </div>
        ";
        // line 37
        echo "        
        ";
        // line 39
        echo "        <div class=\"row\">
            <div class=\"col-sm-12\">
                </br>
            </div>
        </div>
        
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"btn-group\" role=\"group\">
                    <a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("follow_the_rhythm_accueil", array("page" => 1, "sens" => 1)), "html", null, true);
        echo "\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-list\"></i> Actualités</button></a>
                    <a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("follow_the_rhythm_accueilForum");
        echo "\"> <button type=\"button\" class=\"btn btn-default\"><i class=\"\tfa fa-wechat\"></i> Forum</button></a>
                    <a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("follow_the_rhythm_contacts");
        echo "\"> <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-address-book\"></i> Nous contacter</button></a>
                    <a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("follow_the_rhythm_aide");
        echo "\"> <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-question-circle\" aria-hidden=\"true\"></i> Aide</button></a>
                </div>
                    <!--
                    <div class=\"btn-group\" role=\"group\" data-toggle=\"buttons\">
                    <button type=\"button\" class=\"btn btn-secondary\"><a href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("follow_the_rhythm_accueil", array("page" => 1, "sens" => 1)), "html", null, true);
        echo "\"><i class=\"fa fa-list\"></i> Actualités</a></button>
                    <button type=\"button\" class=\"btn btn-secondary\"><a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("follow_the_rhythm_accueilForum");
        echo "\"><i class=\"\tfa fa-wechat\"></i> Forum</a></button>
                    </div>
                    -->
                </div>
            </div>
        </div>
        
        ";
        // line 63
        $this->displayBlock('menuPropreAuBundle', $context, $blocks);
        // line 65
        echo "        
        <div class=\"row\">
            <div class=\"col-sm-12\">
                ";
        // line 68
        $this->displayBlock('contenuCentral', $context, $blocks);
        // line 70
        echo "            </div>
       </div>
        
        <div class=\"row\">
            <div class=\"col-sm-12\">
                ";
        // line 76
        echo "                ";
        $this->displayBlock('footer', $context, $blocks);
        // line 84
        echo "            </div>
       </div>
          
      
        ";
        // line 88
        $this->displayBlock('javascripts', $context, $blocks);
        // line 92
        echo "    </body>
</html>
";
        
        $__internal_1b451ebc1d39b9d29a03fe22e8d24f5794ae6e48341513a901f73d8425fec42b->leave($__internal_1b451ebc1d39b9d29a03fe22e8d24f5794ae6e48341513a901f73d8425fec42b_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_f949f77e491af4cd4b54b6997f15d4d73f060a8b4dd006bfc09123f845dd8930 = $this->env->getExtension("native_profiler");
        $__internal_f949f77e491af4cd4b54b6997f15d4d73f060a8b4dd006bfc09123f845dd8930->enter($__internal_f949f77e491af4cd4b54b6997f15d4d73f060a8b4dd006bfc09123f845dd8930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 15
        echo "                Follow The Rhythm 
            ";
        
        $__internal_f949f77e491af4cd4b54b6997f15d4d73f060a8b4dd006bfc09123f845dd8930->leave($__internal_f949f77e491af4cd4b54b6997f15d4d73f060a8b4dd006bfc09123f845dd8930_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e2d6a4719cf68a925368cb40f67c68702b2e29288f21de3a501b2b867a46639d = $this->env->getExtension("native_profiler");
        $__internal_e2d6a4719cf68a925368cb40f67c68702b2e29288f21de3a501b2b867a46639d->enter($__internal_e2d6a4719cf68a925368cb40f67c68702b2e29288f21de3a501b2b867a46639d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 20
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\"> 
            <link rel=\"stylesheet\" href=\"/follow_the_rhythm/web/css/followTheRhythm.css\">
        ";
        
        $__internal_e2d6a4719cf68a925368cb40f67c68702b2e29288f21de3a501b2b867a46639d->leave($__internal_e2d6a4719cf68a925368cb40f67c68702b2e29288f21de3a501b2b867a46639d_prof);

    }

    // line 30
    public function block_header($context, array $blocks = array())
    {
        $__internal_3207cdedfb5c309788b4b4c94aab33c9fbba9f30542cd54794b97d9cc4c8a69d = $this->env->getExtension("native_profiler");
        $__internal_3207cdedfb5c309788b4b4c94aab33c9fbba9f30542cd54794b97d9cc4c8a69d->enter($__internal_3207cdedfb5c309788b4b4c94aab33c9fbba9f30542cd54794b97d9cc4c8a69d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 31
        echo "                        <!-- <p align=\"center\"><a href =\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("follow_the_rhythm_accueil", array("page" => 1, "sens" => 1)), "html", null, true);
        echo "\"><img class=img-responsive src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("upload/images/Follow2.png"), "html", null, true);
        echo "\" style=width:20% /></a></p>
                        <!--<a href=\"";
        // line 32
        echo "\"><h1> <FONT COLOR=\"#9400d3\">Follow The Rhythm</FONT></h1></a>
                        <h2>L'actualité Musicale</h2>-->
                    ";
        
        $__internal_3207cdedfb5c309788b4b4c94aab33c9fbba9f30542cd54794b97d9cc4c8a69d->leave($__internal_3207cdedfb5c309788b4b4c94aab33c9fbba9f30542cd54794b97d9cc4c8a69d_prof);

    }

    // line 63
    public function block_menuPropreAuBundle($context, array $blocks = array())
    {
        $__internal_add5fdd0baff95824a326751c0b1089860be08baccabc67929b3dafb48f7fbf8 = $this->env->getExtension("native_profiler");
        $__internal_add5fdd0baff95824a326751c0b1089860be08baccabc67929b3dafb48f7fbf8->enter($__internal_add5fdd0baff95824a326751c0b1089860be08baccabc67929b3dafb48f7fbf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menuPropreAuBundle"));

        echo "         
        ";
        
        $__internal_add5fdd0baff95824a326751c0b1089860be08baccabc67929b3dafb48f7fbf8->leave($__internal_add5fdd0baff95824a326751c0b1089860be08baccabc67929b3dafb48f7fbf8_prof);

    }

    // line 68
    public function block_contenuCentral($context, array $blocks = array())
    {
        $__internal_3325cab03d203aa1c8d3a4d29168143c007ebfa77b99d549d798b1df5356492f = $this->env->getExtension("native_profiler");
        $__internal_3325cab03d203aa1c8d3a4d29168143c007ebfa77b99d549d798b1df5356492f->enter($__internal_3325cab03d203aa1c8d3a4d29168143c007ebfa77b99d549d798b1df5356492f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenuCentral"));

        // line 69
        echo "                ";
        
        $__internal_3325cab03d203aa1c8d3a4d29168143c007ebfa77b99d549d798b1df5356492f->leave($__internal_3325cab03d203aa1c8d3a4d29168143c007ebfa77b99d549d798b1df5356492f_prof);

    }

    // line 76
    public function block_footer($context, array $blocks = array())
    {
        $__internal_c8d07ca689087636876efac5f5d9e432b164d3bf8345ac065f99972ed22e1625 = $this->env->getExtension("native_profiler");
        $__internal_c8d07ca689087636876efac5f5d9e432b164d3bf8345ac065f99972ed22e1625->enter($__internal_c8d07ca689087636876efac5f5d9e432b164d3bf8345ac065f99972ed22e1625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 77
        echo "                <hr>
                    <font color=\"white\">Tous droits réservés © 2018</font></br>
                    <font color=\"white\">Ce site est un projet de 2nde année réalisé par des étudiants de DUT informatique de l'<a href=\"";
        // line 79
        echo "https://www.iutbayonne.univ-pau.fr/";
        echo "\"><FONT COLOR=\"#00CED1\">IUT de Bayonne et du Pays Basque</FONT></a></font></Br>
                    <a href=\"";
        // line 80
        echo $this->env->getExtension('routing')->getPath("follow_the_rhythm_contacts");
        echo "\">Nous contacter !</a>
                    <a href=\"";
        // line 81
        echo $this->env->getExtension('routing')->getPath("follow_the_rhythm_credits");
        echo "\">Crédits</a> </Br>
                    <h1> </h1>
                ";
        
        $__internal_c8d07ca689087636876efac5f5d9e432b164d3bf8345ac065f99972ed22e1625->leave($__internal_c8d07ca689087636876efac5f5d9e432b164d3bf8345ac065f99972ed22e1625_prof);

    }

    // line 88
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fac2836d93da18d918da5b794c6871e5a29b68512b590346d3eb3ecec75c14db = $this->env->getExtension("native_profiler");
        $__internal_fac2836d93da18d918da5b794c6871e5a29b68512b590346d3eb3ecec75c14db->enter($__internal_fac2836d93da18d918da5b794c6871e5a29b68512b590346d3eb3ecec75c14db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 89
        echo "            <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_fac2836d93da18d918da5b794c6871e5a29b68512b590346d3eb3ecec75c14db->leave($__internal_fac2836d93da18d918da5b794c6871e5a29b68512b590346d3eb3ecec75c14db_prof);

    }

    public function getTemplateName()
    {
        return "::vueMere.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 90,  266 => 89,  260 => 88,  250 => 81,  246 => 80,  242 => 79,  238 => 77,  232 => 76,  225 => 69,  219 => 68,  206 => 63,  197 => 32,  190 => 31,  184 => 30,  172 => 20,  166 => 19,  158 => 15,  152 => 14,  143 => 92,  141 => 88,  135 => 84,  132 => 76,  125 => 70,  123 => 68,  118 => 65,  116 => 63,  106 => 56,  102 => 55,  95 => 51,  91 => 50,  87 => 49,  83 => 48,  72 => 39,  69 => 37,  66 => 35,  63 => 30,  58 => 27,  54 => 25,  52 => 24,  50 => 19,  46 => 17,  44 => 14,  40 => 12,  35 => 8,  32 => 3,  29 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* {# app/Ressources/Views/vueMere.html.twig #}*/
/* */
/* {# https://follow-the-rhythm-jbelderrain.c9users.io/follow_the_rhythm/web/app_dev.php/accueil/1/1 #}*/
/* {#jbelderrain:~/workspace (master) $ git add .#}*/
/* {#jbelderrain:~/workspace (master) $ git commit -m "Nom du commit"#}*/
/* {#jbelderrain:~/workspace (master) $ git push #}*/
/* */
/* <html>*/
/*     <head>*/
/*     {#mise en place du code html#}*/
/*         <meta charset="UTF-8" />*/
/*         <title>*/
/*             {% block title %}*/
/*                 Follow The Rhythm */
/*             {% endblock %}*/
/*         </title>*/
/*      */
/*         {% block stylesheets %}*/
/*             <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" type="text/css" />*/
/*             <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> */
/*             <link rel="stylesheet" href="/follow_the_rhythm/web/css/followTheRhythm.css">*/
/*         {% endblock %}*/
/*         {#fin de la mise en place du code html#}*/
/*     </head>*/
/* */
/*     <body background="{{ asset('upload/images/bg3.jpg') }}" style="background-size: cover;">*/
/*             <div style="background-size: auto 128px; background-position: center;" class="header col-lg-12 col-md-12 col-sm-12 col-xs-12">*/
/*             {#Titre de la page avec lien vers la page d'accueil#}*/
/*                     {% block header %}*/
/*                         <!-- <p align="center"><a href ="{{path('follow_the_rhythm_accueil',{'page': 1, 'sens': 1}) }}"><img class=img-responsive src="{{ asset('upload/images/Follow2.png') }}" style=width:20% /></a></p>*/
/*                         <!--<a href="{#path('follow_the_rhythm_accueil') #}"><h1> <FONT COLOR="#9400d3">Follow The Rhythm</FONT></h1></a>*/
/*                         <h2>L'actualité Musicale</h2>-->*/
/*                     {% endblock %}*/
/*             </div>*/
/*         {#fin du code responsable du titre#}*/
/*         */
/*         {#Espace entre la banière et le menu #}*/
/*         <div class="row">*/
/*             <div class="col-sm-12">*/
/*                 </br>*/
/*             </div>*/
/*         </div>*/
/*         */
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="btn-group" role="group">*/
/*                     <a href="{{path('follow_the_rhythm_accueil',{'page': 1, 'sens': 1})}}"><button type="button" class="btn btn-default"><i class="fa fa-list"></i> Actualités</button></a>*/
/*                     <a href="{{path('follow_the_rhythm_accueilForum')}}"> <button type="button" class="btn btn-default"><i class="	fa fa-wechat"></i> Forum</button></a>*/
/*                     <a href="{{path('follow_the_rhythm_contacts')}}"> <button type="button" class="btn btn-default"><i class="fa fa-address-book"></i> Nous contacter</button></a>*/
/*                     <a href="{{path('follow_the_rhythm_aide')}}"> <button type="button" class="btn btn-default"><i class="fa fa-question-circle" aria-hidden="true"></i> Aide</button></a>*/
/*                 </div>*/
/*                     <!--*/
/*                     <div class="btn-group" role="group" data-toggle="buttons">*/
/*                     <button type="button" class="btn btn-secondary"><a href="{{path('follow_the_rhythm_accueil',{'page': 1, 'sens': 1})}}"><i class="fa fa-list"></i> Actualités</a></button>*/
/*                     <button type="button" class="btn btn-secondary"><a href="{{path('follow_the_rhythm_accueilForum')}}"><i class="	fa fa-wechat"></i> Forum</a></button>*/
/*                     </div>*/
/*                     -->*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         */
/*         {% block menuPropreAuBundle %}         */
/*         {% endblock %}*/
/*         */
/*         <div class="row">*/
/*             <div class="col-sm-12">*/
/*                 {% block contenuCentral %}*/
/*                 {% endblock %}*/
/*             </div>*/
/*        </div>*/
/*         */
/*         <div class="row">*/
/*             <div class="col-sm-12">*/
/*                 {#IL FAUT JUSTIFIER LE TEXTE#}*/
/*                 {% block footer %}*/
/*                 <hr>*/
/*                     <font color="white">Tous droits réservés © 2018</font></br>*/
/*                     <font color="white">Ce site est un projet de 2nde année réalisé par des étudiants de DUT informatique de l'<a href="{{'https://www.iutbayonne.univ-pau.fr/' }}"><FONT COLOR="#00CED1">IUT de Bayonne et du Pays Basque</FONT></a></font></Br>*/
/*                     <a href="{{path('follow_the_rhythm_contacts')}}">Nous contacter !</a>*/
/*                     <a href="{{path('follow_the_rhythm_credits')}}">Crédits</a> </Br>*/
/*                     <h1> </h1>*/
/*                 {% endblock %}*/
/*             </div>*/
/*        </div>*/
/*           */
/*       */
/*         {% block javascripts %}*/
/*             <script type="text/javascript" src="{{ asset('js/jquery.js')}}"></script>*/
/*             <script type="text/javascript" src="{{ asset('js/bootstrap.js')}}"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
