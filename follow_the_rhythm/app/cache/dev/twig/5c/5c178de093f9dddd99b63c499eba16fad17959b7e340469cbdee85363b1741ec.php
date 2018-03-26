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
        $__internal_b4c55fe860c76cff4a99fcb5c1dbf0d6898955e6f4be456d964aa25d40a33444 = $this->env->getExtension("native_profiler");
        $__internal_b4c55fe860c76cff4a99fcb5c1dbf0d6898955e6f4be456d964aa25d40a33444->enter($__internal_b4c55fe860c76cff4a99fcb5c1dbf0d6898955e6f4be456d964aa25d40a33444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::vueMere.html.twig"));

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
            <a href=\"/follow_the_rhythm/web/app_dev.php/accueil/1/1\"> <div style=\"background-size: auto 128px; background-position: center;\" class=\"header col-lg-12 col-md-12 col-sm-12 col-xs-12\">
            ";
        // line 30
        echo "                    ";
        $this->displayBlock('header', $context, $blocks);
        // line 35
        echo "            </div>
            </a>
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
        
        $__internal_b4c55fe860c76cff4a99fcb5c1dbf0d6898955e6f4be456d964aa25d40a33444->leave($__internal_b4c55fe860c76cff4a99fcb5c1dbf0d6898955e6f4be456d964aa25d40a33444_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_e5fb55c4227646f9538813ac8895c6c9f2d74344040cfd8a8cdfeb4bc81ba64f = $this->env->getExtension("native_profiler");
        $__internal_e5fb55c4227646f9538813ac8895c6c9f2d74344040cfd8a8cdfeb4bc81ba64f->enter($__internal_e5fb55c4227646f9538813ac8895c6c9f2d74344040cfd8a8cdfeb4bc81ba64f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 15
        echo "                Follow The Rhythm 
            ";
        
        $__internal_e5fb55c4227646f9538813ac8895c6c9f2d74344040cfd8a8cdfeb4bc81ba64f->leave($__internal_e5fb55c4227646f9538813ac8895c6c9f2d74344040cfd8a8cdfeb4bc81ba64f_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_520428fcc15d603376955982bc8dc839d1737cf08c0861d1c13657253139081c = $this->env->getExtension("native_profiler");
        $__internal_520428fcc15d603376955982bc8dc839d1737cf08c0861d1c13657253139081c->enter($__internal_520428fcc15d603376955982bc8dc839d1737cf08c0861d1c13657253139081c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 20
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\"> 
            <link rel=\"stylesheet\" href=\"/follow_the_rhythm/web/css/followTheRhythm.css\">
        ";
        
        $__internal_520428fcc15d603376955982bc8dc839d1737cf08c0861d1c13657253139081c->leave($__internal_520428fcc15d603376955982bc8dc839d1737cf08c0861d1c13657253139081c_prof);

    }

    // line 30
    public function block_header($context, array $blocks = array())
    {
        $__internal_ade3de83e85906ee4552d622852e31252d67f5449683bdb436eb805ba29e1518 = $this->env->getExtension("native_profiler");
        $__internal_ade3de83e85906ee4552d622852e31252d67f5449683bdb436eb805ba29e1518->enter($__internal_ade3de83e85906ee4552d622852e31252d67f5449683bdb436eb805ba29e1518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 31
        echo "                        <!-- <p align=\"center\"><a href =\"";
        echo "\"><img class=img-responsive src=\"";
        echo "\" style=width:20% /></a></p>
                        <!--<a href=\"";
        // line 32
        echo "\"><h1> <FONT COLOR=\"#9400d3\">Follow The Rhythm</FONT></h1></a>
                        <h2>L'actualité Musicale</h2>-->
                    ";
        
        $__internal_ade3de83e85906ee4552d622852e31252d67f5449683bdb436eb805ba29e1518->leave($__internal_ade3de83e85906ee4552d622852e31252d67f5449683bdb436eb805ba29e1518_prof);

    }

    // line 64
    public function block_menuPropreAuBundle($context, array $blocks = array())
    {
        $__internal_5b55b10790aeb2d2da763e488ddf205198d9a33a38bbb9dfa84b232b0dc0d9a4 = $this->env->getExtension("native_profiler");
        $__internal_5b55b10790aeb2d2da763e488ddf205198d9a33a38bbb9dfa84b232b0dc0d9a4->enter($__internal_5b55b10790aeb2d2da763e488ddf205198d9a33a38bbb9dfa84b232b0dc0d9a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menuPropreAuBundle"));

        echo "         
        ";
        
        $__internal_5b55b10790aeb2d2da763e488ddf205198d9a33a38bbb9dfa84b232b0dc0d9a4->leave($__internal_5b55b10790aeb2d2da763e488ddf205198d9a33a38bbb9dfa84b232b0dc0d9a4_prof);

    }

    // line 69
    public function block_contenuCentral($context, array $blocks = array())
    {
        $__internal_b1e1f31dcf98c16c390384a12b6d13a0b5931602f408c02868cdb1809c4de020 = $this->env->getExtension("native_profiler");
        $__internal_b1e1f31dcf98c16c390384a12b6d13a0b5931602f408c02868cdb1809c4de020->enter($__internal_b1e1f31dcf98c16c390384a12b6d13a0b5931602f408c02868cdb1809c4de020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenuCentral"));

        // line 70
        echo "                ";
        
        $__internal_b1e1f31dcf98c16c390384a12b6d13a0b5931602f408c02868cdb1809c4de020->leave($__internal_b1e1f31dcf98c16c390384a12b6d13a0b5931602f408c02868cdb1809c4de020_prof);

    }

    // line 77
    public function block_footer($context, array $blocks = array())
    {
        $__internal_5bd183c9ef14c747a7f2a3d1ac97630cf1e9366663fcd6ede157a9eafcf12e01 = $this->env->getExtension("native_profiler");
        $__internal_5bd183c9ef14c747a7f2a3d1ac97630cf1e9366663fcd6ede157a9eafcf12e01->enter($__internal_5bd183c9ef14c747a7f2a3d1ac97630cf1e9366663fcd6ede157a9eafcf12e01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

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
        
        $__internal_5bd183c9ef14c747a7f2a3d1ac97630cf1e9366663fcd6ede157a9eafcf12e01->leave($__internal_5bd183c9ef14c747a7f2a3d1ac97630cf1e9366663fcd6ede157a9eafcf12e01_prof);

    }

    // line 89
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9df91ccd73238890a692cbd93338c1078f9983c09c57c1a378131cfed65b0dd1 = $this->env->getExtension("native_profiler");
        $__internal_9df91ccd73238890a692cbd93338c1078f9983c09c57c1a378131cfed65b0dd1->enter($__internal_9df91ccd73238890a692cbd93338c1078f9983c09c57c1a378131cfed65b0dd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 90
        echo "            <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_9df91ccd73238890a692cbd93338c1078f9983c09c57c1a378131cfed65b0dd1->leave($__internal_9df91ccd73238890a692cbd93338c1078f9983c09c57c1a378131cfed65b0dd1_prof);

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
        return array (  270 => 91,  265 => 90,  259 => 89,  249 => 82,  245 => 81,  241 => 80,  237 => 78,  231 => 77,  224 => 70,  218 => 69,  205 => 64,  196 => 32,  191 => 31,  185 => 30,  173 => 20,  167 => 19,  159 => 15,  153 => 14,  144 => 93,  142 => 89,  136 => 85,  133 => 77,  126 => 71,  124 => 69,  119 => 66,  117 => 64,  107 => 57,  103 => 56,  96 => 52,  92 => 51,  88 => 50,  84 => 49,  73 => 40,  70 => 38,  66 => 35,  63 => 30,  58 => 27,  54 => 25,  52 => 24,  50 => 19,  46 => 17,  44 => 14,  40 => 12,  35 => 8,  32 => 3,  29 => 1,);
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
/*             <a href="/follow_the_rhythm/web/app_dev.php/accueil/1/1"> <div style="background-size: auto 128px; background-position: center;" class="header col-lg-12 col-md-12 col-sm-12 col-xs-12">*/
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
