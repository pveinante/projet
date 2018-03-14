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
        $__internal_af971c004f016e35c104c68230612e7ceeab8aae337523a2c1999032a06cd672 = $this->env->getExtension("native_profiler");
        $__internal_af971c004f016e35c104c68230612e7ceeab8aae337523a2c1999032a06cd672->enter($__internal_af971c004f016e35c104c68230612e7ceeab8aae337523a2c1999032a06cd672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::vueMere.html.twig"));

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
                </div>
                    <!--
                    <div class=\"btn-group\" role=\"group\" data-toggle=\"buttons\">
                    <button type=\"button\" class=\"btn btn-secondary\"><a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("follow_the_rhythm_accueil", array("page" => 1, "sens" => 1)), "html", null, true);
        echo "\"><i class=\"fa fa-list\"></i> Actualités</a></button>
                    <button type=\"button\" class=\"btn btn-secondary\"><a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("follow_the_rhythm_accueilForum");
        echo "\"><i class=\"\tfa fa-wechat\"></i> Forum</a></button>
                    </div>
                    -->
                </div>
            </div>
        </div>
        
        ";
        // line 62
        $this->displayBlock('menuPropreAuBundle', $context, $blocks);
        // line 64
        echo "        
        <div class=\"row\">
            <div class=\"col-sm-12\">
                ";
        // line 67
        $this->displayBlock('contenuCentral', $context, $blocks);
        // line 69
        echo "            </div>
       </div>
        
        <div class=\"row\">
            <div class=\"col-sm-12\">
                ";
        // line 75
        echo "                ";
        $this->displayBlock('footer', $context, $blocks);
        // line 83
        echo "            </div>
       </div>
          
      
        ";
        // line 87
        $this->displayBlock('javascripts', $context, $blocks);
        // line 91
        echo "    </body>
</html>
";
        
        $__internal_af971c004f016e35c104c68230612e7ceeab8aae337523a2c1999032a06cd672->leave($__internal_af971c004f016e35c104c68230612e7ceeab8aae337523a2c1999032a06cd672_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_7c845ce6ee39fbb58a750a0f4065a1dd29249c84cca8b4995d0de41e4c1646d7 = $this->env->getExtension("native_profiler");
        $__internal_7c845ce6ee39fbb58a750a0f4065a1dd29249c84cca8b4995d0de41e4c1646d7->enter($__internal_7c845ce6ee39fbb58a750a0f4065a1dd29249c84cca8b4995d0de41e4c1646d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 15
        echo "                Follow The Rhythm 
            ";
        
        $__internal_7c845ce6ee39fbb58a750a0f4065a1dd29249c84cca8b4995d0de41e4c1646d7->leave($__internal_7c845ce6ee39fbb58a750a0f4065a1dd29249c84cca8b4995d0de41e4c1646d7_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_063bec07504c5c9b87fd1cbe712a93561edd0dbc323d57968994137b6cf8c570 = $this->env->getExtension("native_profiler");
        $__internal_063bec07504c5c9b87fd1cbe712a93561edd0dbc323d57968994137b6cf8c570->enter($__internal_063bec07504c5c9b87fd1cbe712a93561edd0dbc323d57968994137b6cf8c570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 20
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\"> 
            <link rel=\"stylesheet\" href=\"/follow_the_rhythm/web/css/followTheRhythm.css\">
        ";
        
        $__internal_063bec07504c5c9b87fd1cbe712a93561edd0dbc323d57968994137b6cf8c570->leave($__internal_063bec07504c5c9b87fd1cbe712a93561edd0dbc323d57968994137b6cf8c570_prof);

    }

    // line 30
    public function block_header($context, array $blocks = array())
    {
        $__internal_cbb28a71bd8e659f5f34d5add28e575d362e9d7e146126a30dbfa39dcba902ca = $this->env->getExtension("native_profiler");
        $__internal_cbb28a71bd8e659f5f34d5add28e575d362e9d7e146126a30dbfa39dcba902ca->enter($__internal_cbb28a71bd8e659f5f34d5add28e575d362e9d7e146126a30dbfa39dcba902ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_cbb28a71bd8e659f5f34d5add28e575d362e9d7e146126a30dbfa39dcba902ca->leave($__internal_cbb28a71bd8e659f5f34d5add28e575d362e9d7e146126a30dbfa39dcba902ca_prof);

    }

    // line 62
    public function block_menuPropreAuBundle($context, array $blocks = array())
    {
        $__internal_d5987d0d8cb8e13353e131fa2aaf8dd2efc8b411766ec3c07b8891884cfa23c3 = $this->env->getExtension("native_profiler");
        $__internal_d5987d0d8cb8e13353e131fa2aaf8dd2efc8b411766ec3c07b8891884cfa23c3->enter($__internal_d5987d0d8cb8e13353e131fa2aaf8dd2efc8b411766ec3c07b8891884cfa23c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menuPropreAuBundle"));

        echo "         
        ";
        
        $__internal_d5987d0d8cb8e13353e131fa2aaf8dd2efc8b411766ec3c07b8891884cfa23c3->leave($__internal_d5987d0d8cb8e13353e131fa2aaf8dd2efc8b411766ec3c07b8891884cfa23c3_prof);

    }

    // line 67
    public function block_contenuCentral($context, array $blocks = array())
    {
        $__internal_413d48659628aef6a9839b5e1a80bd25c2d05a74dd3a31e923edec234783a7fc = $this->env->getExtension("native_profiler");
        $__internal_413d48659628aef6a9839b5e1a80bd25c2d05a74dd3a31e923edec234783a7fc->enter($__internal_413d48659628aef6a9839b5e1a80bd25c2d05a74dd3a31e923edec234783a7fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenuCentral"));

        // line 68
        echo "                ";
        
        $__internal_413d48659628aef6a9839b5e1a80bd25c2d05a74dd3a31e923edec234783a7fc->leave($__internal_413d48659628aef6a9839b5e1a80bd25c2d05a74dd3a31e923edec234783a7fc_prof);

    }

    // line 75
    public function block_footer($context, array $blocks = array())
    {
        $__internal_f754cb13808b144771002adc51c66354dc1ef0a03038cced6b3abf49e894c531 = $this->env->getExtension("native_profiler");
        $__internal_f754cb13808b144771002adc51c66354dc1ef0a03038cced6b3abf49e894c531->enter($__internal_f754cb13808b144771002adc51c66354dc1ef0a03038cced6b3abf49e894c531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 76
        echo "                <hr>
                    <font color=\"white\">Tous droits réservés © 2018</font></br>
                    <font color=\"white\">Ce site est un projet de 2nd année réalisé par des étudiants de DUT informatique de l'<a href=\"";
        // line 78
        echo "https://www.iutbayonne.univ-pau.fr/";
        echo "\"><FONT COLOR=\"#00CED1\">IUT de Bayonne et du Pays Basque</FONT></a></font></Br>
                    <a href=\"";
        // line 79
        echo $this->env->getExtension('routing')->getPath("follow_the_rhythm_contacts");
        echo "\">Nous contacter !</a>
                    <a href=\"";
        // line 80
        echo $this->env->getExtension('routing')->getPath("follow_the_rhythm_credits");
        echo "\">Crédits</a> </Br>
                    <h1> </h1>
                ";
        
        $__internal_f754cb13808b144771002adc51c66354dc1ef0a03038cced6b3abf49e894c531->leave($__internal_f754cb13808b144771002adc51c66354dc1ef0a03038cced6b3abf49e894c531_prof);

    }

    // line 87
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c9c1cc965eca686b371b08d8e4ec3984cd1e50547c60b21ea9bb96acc6cb9184 = $this->env->getExtension("native_profiler");
        $__internal_c9c1cc965eca686b371b08d8e4ec3984cd1e50547c60b21ea9bb96acc6cb9184->enter($__internal_c9c1cc965eca686b371b08d8e4ec3984cd1e50547c60b21ea9bb96acc6cb9184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 88
        echo "            <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_c9c1cc965eca686b371b08d8e4ec3984cd1e50547c60b21ea9bb96acc6cb9184->leave($__internal_c9c1cc965eca686b371b08d8e4ec3984cd1e50547c60b21ea9bb96acc6cb9184_prof);

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
        return array (  267 => 89,  262 => 88,  256 => 87,  246 => 80,  242 => 79,  238 => 78,  234 => 76,  228 => 75,  221 => 68,  215 => 67,  202 => 62,  193 => 32,  186 => 31,  180 => 30,  168 => 20,  162 => 19,  154 => 15,  148 => 14,  139 => 91,  137 => 87,  131 => 83,  128 => 75,  121 => 69,  119 => 67,  114 => 64,  112 => 62,  102 => 55,  98 => 54,  91 => 50,  87 => 49,  83 => 48,  72 => 39,  69 => 37,  66 => 35,  63 => 30,  58 => 27,  54 => 25,  52 => 24,  50 => 19,  46 => 17,  44 => 14,  40 => 12,  35 => 8,  32 => 3,  29 => 1,);
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
/*                     <font color="white">Ce site est un projet de 2nd année réalisé par des étudiants de DUT informatique de l'<a href="{{'https://www.iutbayonne.univ-pau.fr/' }}"><FONT COLOR="#00CED1">IUT de Bayonne et du Pays Basque</FONT></a></font></Br>*/
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
