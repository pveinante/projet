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
        $__internal_c4943f1ea43c0dc8d487ff831a855d2e0832a14c1c4bf66159f441e40ed14349 = $this->env->getExtension("native_profiler");
        $__internal_c4943f1ea43c0dc8d487ff831a855d2e0832a14c1c4bf66159f441e40ed14349->enter($__internal_c4943f1ea43c0dc8d487ff831a855d2e0832a14c1c4bf66159f441e40ed14349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::vueMere.html.twig"));

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
        // line 36
        echo "            </div>
        ";
        // line 38
        echo "        
        ";
        // line 40
        echo "        <div class=\"row\">
            <div class=\"col-sm-12\">
                </br>
            </div>
        </div>
        
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"btn-group\" role=\"group\">
                    <a href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("follow_the_rhythm_accueil", array("page" => 1, "sens" => 1)), "html", null, true);
        echo "\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-list\"></i> Actualités</button></a>
                    <a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("follow_the_rhythm_accueilForum");
        echo "\"> <button type=\"button\" class=\"btn btn-default\"><i class=\"\tfa fa-wechat\"></i> Forum</button></a>
                    <a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("follow_the_rhythm_contacts");
        echo "\"> <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-address-book\"></i> Nous contacter</button></a>
                    <a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("follow_the_rhythm_aide");
        echo "\"> <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-question-circle\" aria-hidden=\"true\"></i> Aide</button></a>
                </div>
                    <!--
                    <div class=\"btn-group\" role=\"group\" data-toggle=\"buttons\">
                    <button type=\"button\" class=\"btn btn-secondary\"><a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("follow_the_rhythm_accueil", array("page" => 1, "sens" => 1)), "html", null, true);
        echo "\"><i class=\"fa fa-list\"></i> Actualités</a></button>
                    <button type=\"button\" class=\"btn btn-secondary\"><a href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("follow_the_rhythm_accueilForum");
        echo "\"><i class=\"\tfa fa-wechat\"></i> Forum</a></button>
                    </div>
                    -->
                </div>
            </div>
        </div>
        
        ";
        // line 64
        $this->displayBlock('menuPropreAuBundle', $context, $blocks);
        // line 66
        echo "        
        <div class=\"row\">
            <div class=\"col-sm-12\">
                ";
        // line 69
        $this->displayBlock('contenuCentral', $context, $blocks);
        // line 71
        echo "            </div>
       </div>
        
        <div class=\"row\">
            <div class=\"col-sm-12\">
                ";
        // line 77
        echo "                ";
        $this->displayBlock('footer', $context, $blocks);
        // line 85
        echo "            </div>
       </div>
          
      
        ";
        // line 89
        $this->displayBlock('javascripts', $context, $blocks);
        // line 93
        echo "    </body>
</html>
";
        
        $__internal_c4943f1ea43c0dc8d487ff831a855d2e0832a14c1c4bf66159f441e40ed14349->leave($__internal_c4943f1ea43c0dc8d487ff831a855d2e0832a14c1c4bf66159f441e40ed14349_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_6fa5968e399aaffd458cea5c4ae3a6e0003dd0521ed8a98f296d2139d65f7134 = $this->env->getExtension("native_profiler");
        $__internal_6fa5968e399aaffd458cea5c4ae3a6e0003dd0521ed8a98f296d2139d65f7134->enter($__internal_6fa5968e399aaffd458cea5c4ae3a6e0003dd0521ed8a98f296d2139d65f7134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 15
        echo "                Follow The Rhythm 
            ";
        
        $__internal_6fa5968e399aaffd458cea5c4ae3a6e0003dd0521ed8a98f296d2139d65f7134->leave($__internal_6fa5968e399aaffd458cea5c4ae3a6e0003dd0521ed8a98f296d2139d65f7134_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_baaeec18f6464604cd4ae0641de8f2ada506bb51026884259ab0b361b83e339e = $this->env->getExtension("native_profiler");
        $__internal_baaeec18f6464604cd4ae0641de8f2ada506bb51026884259ab0b361b83e339e->enter($__internal_baaeec18f6464604cd4ae0641de8f2ada506bb51026884259ab0b361b83e339e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 20
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\"> 
            <link rel=\"stylesheet\" href=\"/follow_the_rhythm/web/css/followTheRhythm.css\">
        ";
        
        $__internal_baaeec18f6464604cd4ae0641de8f2ada506bb51026884259ab0b361b83e339e->leave($__internal_baaeec18f6464604cd4ae0641de8f2ada506bb51026884259ab0b361b83e339e_prof);

    }

    // line 30
    public function block_header($context, array $blocks = array())
    {
        $__internal_f46e0883850848b38f923c943b7ce61c646d0fc4d93e1e694bef8bbed395fd8a = $this->env->getExtension("native_profiler");
        $__internal_f46e0883850848b38f923c943b7ce61c646d0fc4d93e1e694bef8bbed395fd8a->enter($__internal_f46e0883850848b38f923c943b7ce61c646d0fc4d93e1e694bef8bbed395fd8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 31
        echo "                        <p class='lienCache'><a href=\"";
        echo "\"></a></p>
                        <!-- <p align=\"center\"><a href =\"";
        // line 32
        echo "\"><img class=img-responsive src=\"";
        echo "\" style=width:20% /></a></p>
                        <!--<a href=\"";
        // line 33
        echo "\"><h1> <FONT COLOR=\"#9400d3\">Follow The Rhythm</FONT></h1></a>
                        <h2>L'actualité Musicale</h2>-->
                    ";
        
        $__internal_f46e0883850848b38f923c943b7ce61c646d0fc4d93e1e694bef8bbed395fd8a->leave($__internal_f46e0883850848b38f923c943b7ce61c646d0fc4d93e1e694bef8bbed395fd8a_prof);

    }

    // line 64
    public function block_menuPropreAuBundle($context, array $blocks = array())
    {
        $__internal_5041b14749715c88fa7814ec08b584d7e35f2718a19621c5d6623f70fc6a93c0 = $this->env->getExtension("native_profiler");
        $__internal_5041b14749715c88fa7814ec08b584d7e35f2718a19621c5d6623f70fc6a93c0->enter($__internal_5041b14749715c88fa7814ec08b584d7e35f2718a19621c5d6623f70fc6a93c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menuPropreAuBundle"));

        echo "         
        ";
        
        $__internal_5041b14749715c88fa7814ec08b584d7e35f2718a19621c5d6623f70fc6a93c0->leave($__internal_5041b14749715c88fa7814ec08b584d7e35f2718a19621c5d6623f70fc6a93c0_prof);

    }

    // line 69
    public function block_contenuCentral($context, array $blocks = array())
    {
        $__internal_8d6618f5400c4e22577e4f37ab54ddef745a063f0f6b92627ff81c19bc8b05f6 = $this->env->getExtension("native_profiler");
        $__internal_8d6618f5400c4e22577e4f37ab54ddef745a063f0f6b92627ff81c19bc8b05f6->enter($__internal_8d6618f5400c4e22577e4f37ab54ddef745a063f0f6b92627ff81c19bc8b05f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenuCentral"));

        // line 70
        echo "                ";
        
        $__internal_8d6618f5400c4e22577e4f37ab54ddef745a063f0f6b92627ff81c19bc8b05f6->leave($__internal_8d6618f5400c4e22577e4f37ab54ddef745a063f0f6b92627ff81c19bc8b05f6_prof);

    }

    // line 77
    public function block_footer($context, array $blocks = array())
    {
        $__internal_0376bb1858d7d941656cebb53bdc1bb88f4cacdf6365fbfdb64f17b87d99dbe4 = $this->env->getExtension("native_profiler");
        $__internal_0376bb1858d7d941656cebb53bdc1bb88f4cacdf6365fbfdb64f17b87d99dbe4->enter($__internal_0376bb1858d7d941656cebb53bdc1bb88f4cacdf6365fbfdb64f17b87d99dbe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 78
        echo "                <hr>
                    <font color=\"white\">Tous droits réservés © 2018</font></br>
                    <font color=\"white\">Ce site est un projet de 2nde année réalisé par des étudiants de DUT informatique de l'<a href=\"";
        // line 80
        echo "https://www.iutbayonne.univ-pau.fr/";
        echo "\"><FONT COLOR=\"#00CED1\">IUT de Bayonne et du Pays Basque</FONT></a></font></Br>
                    <a href=\"";
        // line 81
        echo $this->env->getExtension('routing')->getPath("follow_the_rhythm_contacts");
        echo "\">Nous contacter !</a>
                    <a href=\"";
        // line 82
        echo $this->env->getExtension('routing')->getPath("follow_the_rhythm_credits");
        echo "\">Crédits</a> </Br>
                    <h1> </h1>
                ";
        
        $__internal_0376bb1858d7d941656cebb53bdc1bb88f4cacdf6365fbfdb64f17b87d99dbe4->leave($__internal_0376bb1858d7d941656cebb53bdc1bb88f4cacdf6365fbfdb64f17b87d99dbe4_prof);

    }

    // line 89
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5920e3c8d2d9ea6e0e8a22e4e06ea86a7e125da0034429a35dd96c81d502561e = $this->env->getExtension("native_profiler");
        $__internal_5920e3c8d2d9ea6e0e8a22e4e06ea86a7e125da0034429a35dd96c81d502561e->enter($__internal_5920e3c8d2d9ea6e0e8a22e4e06ea86a7e125da0034429a35dd96c81d502561e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 90
        echo "            <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_5920e3c8d2d9ea6e0e8a22e4e06ea86a7e125da0034429a35dd96c81d502561e->leave($__internal_5920e3c8d2d9ea6e0e8a22e4e06ea86a7e125da0034429a35dd96c81d502561e_prof);

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
        return array (  272 => 91,  267 => 90,  261 => 89,  251 => 82,  247 => 81,  243 => 80,  239 => 78,  233 => 77,  226 => 70,  220 => 69,  207 => 64,  198 => 33,  194 => 32,  190 => 31,  184 => 30,  172 => 20,  166 => 19,  158 => 15,  152 => 14,  143 => 93,  141 => 89,  135 => 85,  132 => 77,  125 => 71,  123 => 69,  118 => 66,  116 => 64,  106 => 57,  102 => 56,  95 => 52,  91 => 51,  87 => 50,  83 => 49,  72 => 40,  69 => 38,  66 => 36,  63 => 30,  58 => 27,  54 => 25,  52 => 24,  50 => 19,  46 => 17,  44 => 14,  40 => 12,  35 => 8,  32 => 3,  29 => 1,);
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
/*                         <p class='lienCache'><a href="{#path('follow_the_rhythm_accueil',{'page': 1, 'sens': 1}) #}"></a></p>*/
/*                         <!-- <p align="center"><a href ="{#path('follow_the_rhythm_accueil',{'page': 1, 'sens': 1}) #}"><img class=img-responsive src="{# asset('upload/images/Follow2.png') #}" style=width:20% /></a></p>*/
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
