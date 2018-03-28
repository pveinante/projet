<?php

/* ::vueMere.html.twig */
class __TwigTemplate_6a3879712f66dc97cba32a803e06cdce6ce13390c6511a3da3fcd5df71aa49b1 extends Twig_Template
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
        $__internal_0bad1f94e855ae626cea241a5b9147966eaa1472dee8e31fddb3217de2583d70 = $this->env->getExtension("native_profiler");
        $__internal_0bad1f94e855ae626cea241a5b9147966eaa1472dee8e31fddb3217de2583d70->enter($__internal_0bad1f94e855ae626cea241a5b9147966eaa1472dee8e31fddb3217de2583d70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::vueMere.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
";
        // line 3
        echo "
";
        // line 8
        echo "<html lang=\"fr\">
    <head>
    ";
        // line 11
        echo "        <meta charset=\"UTF-8\" />
        <title>
            ";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        // line 16
        echo "        </title>
     
        ";
        // line 18
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        echo "        ";
        // line 24
        echo "    </head>

    <body background=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("upload/images/bg3.jpg"), "html", null, true);
        echo "\" style=\"background-size: cover;\">
            <a title=\"Revenir à la page d'accueil Follow The Rhythm !\" href=\"/follow_the_rhythm/web/app_dev.php/accueil/1/1\"> <div style=\"position: fixed; width: 100%; z-index: 99; background-size: auto 128px; background-position: center;\" class=\"header col-lg-12 col-md-12 col-sm-12 col-xs-12\">
            ";
        // line 29
        echo "                    ";
        $this->displayBlock('header', $context, $blocks);
        // line 34
        echo "            </div>
            </a>
        ";
        // line 37
        echo "        
        ";
        // line 39
        echo "        <div class=\"row\">
            <div class=\"col-sm-12\">
                </br></br></br></br></br></br></br>
            </div>
        </div>
        
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"btn-group\" role=\"group\">
                    <a title='Afficher les actualités musicales du moment.' href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("follow_the_rhythm_accueil", array("page" => 1, "sens" => 1)), "html", null, true);
        echo "\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-list\"></i> Actualités</button></a>
                    <a title='Aller au forum pour consulter les topics ou discuter avec la communauté.' href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("follow_the_rhythm_accueilForum");
        echo "\"> <button type=\"button\" class=\"btn btn-default\"><i class=\"\tfa fa-wechat\"></i> Forum</button></a>
                    <a title='Voir les informations sur les développeurs et le commanditaire de ce site.' href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("follow_the_rhythm_contacts");
        echo "\"> <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-address-book\"></i> Nous contacter</button></a>
                    <a title=\"Obtenir de l'aide sur l'utilisation du site\"  href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("follow_the_rhythm_aide");
        echo "\"> <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-question-circle\" aria-hidden=\"true\"></i> Aide</button></a>
                    <a title='Se connecter pour bénéficier de tous les avantages Follow The Rhythm !' href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\"> <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i> Se connecter</button></a>
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
                </br></br></br></br></br></br></br>
            </div>
        </div>
        
        <div class=\"row footer\" style='position: fixed; z-index: 99; bottom: 0; width: 100%; background-color: rgba(0, 0, 0, 0.8);'>
            <div class=\"col-sm-12\">
                ";
        // line 83
        echo "                ";
        $this->displayBlock('footer', $context, $blocks);
        // line 91
        echo "            </div>
       </div>
          
      
        ";
        // line 95
        $this->displayBlock('javascripts', $context, $blocks);
        // line 99
        echo "    </body>
</html>
";
        
        $__internal_0bad1f94e855ae626cea241a5b9147966eaa1472dee8e31fddb3217de2583d70->leave($__internal_0bad1f94e855ae626cea241a5b9147966eaa1472dee8e31fddb3217de2583d70_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_944a4e9ffaf2039fc0e0cbff6040b489e96545b5383442bb627ca765afbcb583 = $this->env->getExtension("native_profiler");
        $__internal_944a4e9ffaf2039fc0e0cbff6040b489e96545b5383442bb627ca765afbcb583->enter($__internal_944a4e9ffaf2039fc0e0cbff6040b489e96545b5383442bb627ca765afbcb583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 14
        echo "                Follow The Rhythm 
            ";
        
        $__internal_944a4e9ffaf2039fc0e0cbff6040b489e96545b5383442bb627ca765afbcb583->leave($__internal_944a4e9ffaf2039fc0e0cbff6040b489e96545b5383442bb627ca765afbcb583_prof);

    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_26c4cd774835650aabf3d453cbb68490a6eb7669f3096dc0403b70a19eae4d7e = $this->env->getExtension("native_profiler");
        $__internal_26c4cd774835650aabf3d453cbb68490a6eb7669f3096dc0403b70a19eae4d7e->enter($__internal_26c4cd774835650aabf3d453cbb68490a6eb7669f3096dc0403b70a19eae4d7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 19
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\"> 
            <link rel=\"stylesheet\" href=\"/follow_the_rhythm/web/css/followTheRhythm.css\">
        ";
        
        $__internal_26c4cd774835650aabf3d453cbb68490a6eb7669f3096dc0403b70a19eae4d7e->leave($__internal_26c4cd774835650aabf3d453cbb68490a6eb7669f3096dc0403b70a19eae4d7e_prof);

    }

    // line 29
    public function block_header($context, array $blocks = array())
    {
        $__internal_fd8114425101bf56784173d6f6b5d52e095fd3fa44520e3d7e011ab2c00d3b3a = $this->env->getExtension("native_profiler");
        $__internal_fd8114425101bf56784173d6f6b5d52e095fd3fa44520e3d7e011ab2c00d3b3a->enter($__internal_fd8114425101bf56784173d6f6b5d52e095fd3fa44520e3d7e011ab2c00d3b3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 30
        echo "                        <!-- <p align=\"center\"><a href =\"";
        echo "\"><img class=img-responsive src=\"";
        echo "\" style=width:20% /></a></p>
                        <!--<a href=\"";
        // line 31
        echo "\"><h1> <FONT COLOR=\"#9400d3\">Follow The Rhythm</FONT></h1></a>
                        <h2>L'actualité Musicale</h2>-->
                    ";
        
        $__internal_fd8114425101bf56784173d6f6b5d52e095fd3fa44520e3d7e011ab2c00d3b3a->leave($__internal_fd8114425101bf56784173d6f6b5d52e095fd3fa44520e3d7e011ab2c00d3b3a_prof);

    }

    // line 64
    public function block_menuPropreAuBundle($context, array $blocks = array())
    {
        $__internal_01ccf62cff491def0d657049b19b6ec1606f4e4a676fc7dedd987205f210bb9c = $this->env->getExtension("native_profiler");
        $__internal_01ccf62cff491def0d657049b19b6ec1606f4e4a676fc7dedd987205f210bb9c->enter($__internal_01ccf62cff491def0d657049b19b6ec1606f4e4a676fc7dedd987205f210bb9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menuPropreAuBundle"));

        echo "         
        ";
        
        $__internal_01ccf62cff491def0d657049b19b6ec1606f4e4a676fc7dedd987205f210bb9c->leave($__internal_01ccf62cff491def0d657049b19b6ec1606f4e4a676fc7dedd987205f210bb9c_prof);

    }

    // line 69
    public function block_contenuCentral($context, array $blocks = array())
    {
        $__internal_4499041c4db4851a493e55588f446ccc525614e2ff4a136d3d99e023a6a111ca = $this->env->getExtension("native_profiler");
        $__internal_4499041c4db4851a493e55588f446ccc525614e2ff4a136d3d99e023a6a111ca->enter($__internal_4499041c4db4851a493e55588f446ccc525614e2ff4a136d3d99e023a6a111ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenuCentral"));

        // line 70
        echo "                ";
        
        $__internal_4499041c4db4851a493e55588f446ccc525614e2ff4a136d3d99e023a6a111ca->leave($__internal_4499041c4db4851a493e55588f446ccc525614e2ff4a136d3d99e023a6a111ca_prof);

    }

    // line 83
    public function block_footer($context, array $blocks = array())
    {
        $__internal_41a98383bca933220d5af0395636293265a6abf701f22e3d79d5705b9fc4fe81 = $this->env->getExtension("native_profiler");
        $__internal_41a98383bca933220d5af0395636293265a6abf701f22e3d79d5705b9fc4fe81->enter($__internal_41a98383bca933220d5af0395636293265a6abf701f22e3d79d5705b9fc4fe81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 84
        echo "                <hr>
                    <font color=\"white\">Tous droits réservés © 2018</font></br>
                    <font color=\"white\">Ce site est un projet de 2nde année réalisé par des étudiants de DUT informatique de l'<a title=\"Aller sur le site Web de l'IUT de Bayonne et du pays Basque\" href=\"";
        // line 86
        echo "https://www.iutbayonne.univ-pau.fr/";
        echo "\"><FONT COLOR=\"#00CED1\">IUT de Bayonne et du Pays Basque</FONT></a></font></Br>
                    <a title=\"Voir les informations sur les développeurs et le commanditaire de ce site.\" href=\"";
        // line 87
        echo $this->env->getExtension('routing')->getPath("follow_the_rhythm_contacts");
        echo "\">Nous contacter !</a>
                    <a title=\"Voir les crédits du site.\" href=\"";
        // line 88
        echo $this->env->getExtension('routing')->getPath("follow_the_rhythm_credits");
        echo "\">Crédits</a> </Br>
                    <h1> </h1>
                ";
        
        $__internal_41a98383bca933220d5af0395636293265a6abf701f22e3d79d5705b9fc4fe81->leave($__internal_41a98383bca933220d5af0395636293265a6abf701f22e3d79d5705b9fc4fe81_prof);

    }

    // line 95
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_01db0c358996c8e89ca667b21d02cfad9a3706ec56c3bac477f6d08a0a14dd54 = $this->env->getExtension("native_profiler");
        $__internal_01db0c358996c8e89ca667b21d02cfad9a3706ec56c3bac477f6d08a0a14dd54->enter($__internal_01db0c358996c8e89ca667b21d02cfad9a3706ec56c3bac477f6d08a0a14dd54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 96
        echo "            <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_01db0c358996c8e89ca667b21d02cfad9a3706ec56c3bac477f6d08a0a14dd54->leave($__internal_01db0c358996c8e89ca667b21d02cfad9a3706ec56c3bac477f6d08a0a14dd54_prof);

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
        return array (  279 => 97,  274 => 96,  268 => 95,  258 => 88,  254 => 87,  250 => 86,  246 => 84,  240 => 83,  233 => 70,  227 => 69,  214 => 64,  205 => 31,  200 => 30,  194 => 29,  182 => 19,  176 => 18,  168 => 14,  162 => 13,  153 => 99,  151 => 95,  145 => 91,  142 => 83,  129 => 71,  127 => 69,  122 => 66,  120 => 64,  110 => 57,  106 => 56,  99 => 52,  95 => 51,  91 => 50,  87 => 49,  83 => 48,  72 => 39,  69 => 37,  65 => 34,  62 => 29,  57 => 26,  53 => 24,  51 => 23,  49 => 18,  45 => 16,  43 => 13,  39 => 11,  35 => 8,  32 => 3,  29 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* {# app/Ressources/Views/vueMere.html.twig #}*/
/* */
/* {# https://follow-the-rhythm-jbelderrain.c9users.io/follow_the_rhythm/web/app_dev.php/accueil/1/1 #}*/
/* {#jbelderrain:~/workspace (master) $ git add .#}*/
/* {#jbelderrain:~/workspace (master) $ git commit -m "Nom du commit"#}*/
/* {#jbelderrain:~/workspace (master) $ git push #}*/
/* <html lang="fr">*/
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
/*             <a title="Revenir à la page d'accueil Follow The Rhythm !" href="/follow_the_rhythm/web/app_dev.php/accueil/1/1"> <div style="position: fixed; width: 100%; z-index: 99; background-size: auto 128px; background-position: center;" class="header col-lg-12 col-md-12 col-sm-12 col-xs-12">*/
/*             {#Titre de la page avec lien vers la page d'accueil#}*/
/*                     {% block header %}*/
/*                         <!-- <p align="center"><a href ="{#path('follow_the_rhythm_accueil',{'page': 1, 'sens': 1}) #}"><img class=img-responsive src="{# asset('upload/images/Follow2.png') #}" style=width:20% /></a></p>*/
/*                         <!--<a href="{#path('follow_the_rhythm_accueil') #}"><h1> <FONT COLOR="#9400d3">Follow The Rhythm</FONT></h1></a>*/
/*                         <h2>L'actualité Musicale</h2>-->*/
/*                     {% endblock %}*/
/*             </div>*/
/*             </a>*/
/*         {#fin du code responsable du titre#}*/
/*         */
/*         {#Espace entre la banière et le menu #}*/
/*         <div class="row">*/
/*             <div class="col-sm-12">*/
/*                 </br></br></br></br></br></br></br>*/
/*             </div>*/
/*         </div>*/
/*         */
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="btn-group" role="group">*/
/*                     <a title='Afficher les actualités musicales du moment.' href="{{path('follow_the_rhythm_accueil',{'page': 1, 'sens': 1})}}"><button type="button" class="btn btn-default"><i class="fa fa-list"></i> Actualités</button></a>*/
/*                     <a title='Aller au forum pour consulter les topics ou discuter avec la communauté.' href="{{path('follow_the_rhythm_accueilForum')}}"> <button type="button" class="btn btn-default"><i class="	fa fa-wechat"></i> Forum</button></a>*/
/*                     <a title='Voir les informations sur les développeurs et le commanditaire de ce site.' href="{{path('follow_the_rhythm_contacts')}}"> <button type="button" class="btn btn-default"><i class="fa fa-address-book"></i> Nous contacter</button></a>*/
/*                     <a title="Obtenir de l'aide sur l'utilisation du site"  href="{{path('follow_the_rhythm_aide')}}"> <button type="button" class="btn btn-default"><i class="fa fa-question-circle" aria-hidden="true"></i> Aide</button></a>*/
/*                     <a title='Se connecter pour bénéficier de tous les avantages Follow The Rhythm !' href="{{path('fos_user_security_login')}}"> <button type="button" class="btn btn-default"><i class="fa fa-user" aria-hidden="true"></i> Se connecter</button></a>*/
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
/*        */
/*        <div class="row">*/
/*             <div class="col-sm-12">*/
/*                 </br></br></br></br></br></br></br>*/
/*             </div>*/
/*         </div>*/
/*         */
/*         <div class="row footer" style='position: fixed; z-index: 99; bottom: 0; width: 100%; background-color: rgba(0, 0, 0, 0.8);'>*/
/*             <div class="col-sm-12">*/
/*                 {#IL FAUT JUSTIFIER LE TEXTE#}*/
/*                 {% block footer %}*/
/*                 <hr>*/
/*                     <font color="white">Tous droits réservés © 2018</font></br>*/
/*                     <font color="white">Ce site est un projet de 2nde année réalisé par des étudiants de DUT informatique de l'<a title="Aller sur le site Web de l'IUT de Bayonne et du pays Basque" href="{{'https://www.iutbayonne.univ-pau.fr/' }}"><FONT COLOR="#00CED1">IUT de Bayonne et du Pays Basque</FONT></a></font></Br>*/
/*                     <a title="Voir les informations sur les développeurs et le commanditaire de ce site." href="{{path('follow_the_rhythm_contacts')}}">Nous contacter !</a>*/
/*                     <a title="Voir les crédits du site." href="{{path('follow_the_rhythm_credits')}}">Crédits</a> </Br>*/
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
