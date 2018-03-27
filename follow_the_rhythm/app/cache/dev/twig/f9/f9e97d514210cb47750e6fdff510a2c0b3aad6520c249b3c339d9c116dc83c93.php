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
        $__internal_a4aca24e8d1707d2e95e87bcd30f4f4c90de252489234f081d94a57a8199ab14 = $this->env->getExtension("native_profiler");
        $__internal_a4aca24e8d1707d2e95e87bcd30f4f4c90de252489234f081d94a57a8199ab14->enter($__internal_a4aca24e8d1707d2e95e87bcd30f4f4c90de252489234f081d94a57a8199ab14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::vueMere.html.twig"));

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
            <a href=\"/follow_the_rhythm/web/app_dev.php/accueil/1/1\"> <div style=\"background-size: auto 128px; background-position: center;\" class=\"header col-lg-12 col-md-12 col-sm-12 col-xs-12\">
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
                    <a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("follow_the_rhythm_aide");
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
        
        $__internal_a4aca24e8d1707d2e95e87bcd30f4f4c90de252489234f081d94a57a8199ab14->leave($__internal_a4aca24e8d1707d2e95e87bcd30f4f4c90de252489234f081d94a57a8199ab14_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_a8d4039427f1a105305d1835ea1354c3234f46578f0cb7520bc7502bd5bd9bf3 = $this->env->getExtension("native_profiler");
        $__internal_a8d4039427f1a105305d1835ea1354c3234f46578f0cb7520bc7502bd5bd9bf3->enter($__internal_a8d4039427f1a105305d1835ea1354c3234f46578f0cb7520bc7502bd5bd9bf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 14
        echo "                Follow The Rhythm 
            ";
        
        $__internal_a8d4039427f1a105305d1835ea1354c3234f46578f0cb7520bc7502bd5bd9bf3->leave($__internal_a8d4039427f1a105305d1835ea1354c3234f46578f0cb7520bc7502bd5bd9bf3_prof);

    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2b5ff81514ebf794ec5cf5429c33b70ae9258764eaf4c386cc210fa5bc38c258 = $this->env->getExtension("native_profiler");
        $__internal_2b5ff81514ebf794ec5cf5429c33b70ae9258764eaf4c386cc210fa5bc38c258->enter($__internal_2b5ff81514ebf794ec5cf5429c33b70ae9258764eaf4c386cc210fa5bc38c258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 19
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\"> 
            <link rel=\"stylesheet\" href=\"/follow_the_rhythm/web/css/followTheRhythm.css\">
        ";
        
        $__internal_2b5ff81514ebf794ec5cf5429c33b70ae9258764eaf4c386cc210fa5bc38c258->leave($__internal_2b5ff81514ebf794ec5cf5429c33b70ae9258764eaf4c386cc210fa5bc38c258_prof);

    }

    // line 29
    public function block_header($context, array $blocks = array())
    {
        $__internal_fb2673e35b71d43602e7d4d70aa86957e2014f79a69c1c4f163c41ab61a1e75b = $this->env->getExtension("native_profiler");
        $__internal_fb2673e35b71d43602e7d4d70aa86957e2014f79a69c1c4f163c41ab61a1e75b->enter($__internal_fb2673e35b71d43602e7d4d70aa86957e2014f79a69c1c4f163c41ab61a1e75b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 30
        echo "                        <!-- <p align=\"center\"><a href =\"";
        echo "\"><img class=img-responsive src=\"";
        echo "\" style=width:20% /></a></p>
                        <!--<a href=\"";
        // line 31
        echo "\"><h1> <FONT COLOR=\"#9400d3\">Follow The Rhythm</FONT></h1></a>
                        <h2>L'actualité Musicale</h2>-->
                    ";
        
        $__internal_fb2673e35b71d43602e7d4d70aa86957e2014f79a69c1c4f163c41ab61a1e75b->leave($__internal_fb2673e35b71d43602e7d4d70aa86957e2014f79a69c1c4f163c41ab61a1e75b_prof);

    }

    // line 64
    public function block_menuPropreAuBundle($context, array $blocks = array())
    {
        $__internal_5251df8a01236d651cf137d406d6386c115c1c34a2d56624558d9ed604660eaa = $this->env->getExtension("native_profiler");
        $__internal_5251df8a01236d651cf137d406d6386c115c1c34a2d56624558d9ed604660eaa->enter($__internal_5251df8a01236d651cf137d406d6386c115c1c34a2d56624558d9ed604660eaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menuPropreAuBundle"));

        echo "         
        ";
        
        $__internal_5251df8a01236d651cf137d406d6386c115c1c34a2d56624558d9ed604660eaa->leave($__internal_5251df8a01236d651cf137d406d6386c115c1c34a2d56624558d9ed604660eaa_prof);

    }

    // line 69
    public function block_contenuCentral($context, array $blocks = array())
    {
        $__internal_0f588868d391fa72a96a3b30b424fcc40cf7023ca371c9bc192d98eb6fba17f2 = $this->env->getExtension("native_profiler");
        $__internal_0f588868d391fa72a96a3b30b424fcc40cf7023ca371c9bc192d98eb6fba17f2->enter($__internal_0f588868d391fa72a96a3b30b424fcc40cf7023ca371c9bc192d98eb6fba17f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenuCentral"));

        // line 70
        echo "                ";
        
        $__internal_0f588868d391fa72a96a3b30b424fcc40cf7023ca371c9bc192d98eb6fba17f2->leave($__internal_0f588868d391fa72a96a3b30b424fcc40cf7023ca371c9bc192d98eb6fba17f2_prof);

    }

    // line 77
    public function block_footer($context, array $blocks = array())
    {
        $__internal_34006a7ded71275be36aa116344a3c428d64f9efe4ad96dd7c3d9c8689597be1 = $this->env->getExtension("native_profiler");
        $__internal_34006a7ded71275be36aa116344a3c428d64f9efe4ad96dd7c3d9c8689597be1->enter($__internal_34006a7ded71275be36aa116344a3c428d64f9efe4ad96dd7c3d9c8689597be1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

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
        
        $__internal_34006a7ded71275be36aa116344a3c428d64f9efe4ad96dd7c3d9c8689597be1->leave($__internal_34006a7ded71275be36aa116344a3c428d64f9efe4ad96dd7c3d9c8689597be1_prof);

    }

    // line 89
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6665d6f5f2054d2a4c70411a16d21706fe431d59e3807a940bfb3ff7c0ca598b = $this->env->getExtension("native_profiler");
        $__internal_6665d6f5f2054d2a4c70411a16d21706fe431d59e3807a940bfb3ff7c0ca598b->enter($__internal_6665d6f5f2054d2a4c70411a16d21706fe431d59e3807a940bfb3ff7c0ca598b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 90
        echo "            <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_6665d6f5f2054d2a4c70411a16d21706fe431d59e3807a940bfb3ff7c0ca598b->leave($__internal_6665d6f5f2054d2a4c70411a16d21706fe431d59e3807a940bfb3ff7c0ca598b_prof);

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
        return array (  273 => 91,  268 => 90,  262 => 89,  252 => 82,  248 => 81,  244 => 80,  240 => 78,  234 => 77,  227 => 70,  221 => 69,  208 => 64,  199 => 31,  194 => 30,  188 => 29,  176 => 19,  170 => 18,  162 => 14,  156 => 13,  147 => 93,  145 => 89,  139 => 85,  136 => 77,  129 => 71,  127 => 69,  122 => 66,  120 => 64,  110 => 57,  106 => 56,  99 => 52,  95 => 51,  91 => 50,  87 => 49,  83 => 48,  72 => 39,  69 => 37,  65 => 34,  62 => 29,  57 => 26,  53 => 24,  51 => 23,  49 => 18,  45 => 16,  43 => 13,  39 => 11,  35 => 8,  32 => 3,  29 => 1,);
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
/*                     <a href="{{path('follow_the_rhythm_aide')}}"> <button type="button" class="btn btn-default"><i class="fa fa-user" aria-hidden="true"></i> Se connecter</button></a>*/
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
