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
        $__internal_309c3970b66cca820df3f451353f198a8a4ab213722b645b4ec50e510ef23220 = $this->env->getExtension("native_profiler");
        $__internal_309c3970b66cca820df3f451353f198a8a4ab213722b645b4ec50e510ef23220->enter($__internal_309c3970b66cca820df3f451353f198a8a4ab213722b645b4ec50e510ef23220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::vueMere.html.twig"));

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
        echo "\" style=\"background-size: cover; height: 100%;\">
            <a title=\"Revenir à la page d'accueil Follow The Rhythm !\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("follow_the_rhythm_accueil", array("page" => 1, "sens" => 1, "nbParPage" => 25)), "html", null, true);
        echo "\"> <div style=\"position: fixed; width: 100%; z-index: 99; background-size: auto 128px; background-position: center;\" class=\"header col-lg-12 col-md-12 col-sm-12 col-xs-12\">
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
        <div style='z-index: 99; width: 100%; height: 36px; top: 128px; position: fixed; left: 0; background-color: rgba(0, 0, 0, 1);' class=\"container\">
            <div class=\"row\">
                
                    <p style='margin-left: 128px; width: 100%; position: fixed; text-align: left;'><a title='Afficher les actualités musicales du moment.' href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("follow_the_rhythm_accueil", array("page" => 1, "sens" => 1, "nbParPage" => 25)), "html", null, true);
        echo "\"><button style='background-color: black; color: white; border: 0' type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-list\"></i> Actualités</button></a>
                    <a title='Aller au forum pour consulter les topics ou discuter avec la communauté.' href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("follow_the_rhythm_accueilForum");
        echo "\"> <button style='background-color: black; color: white; border: 0' type=\"button\" class=\"btn btn-default\"><i class=\"\tfa fa-wechat\"></i> Forum</button></a>
                    <input type=\"text\" style='margin-left: 64px; width: 450px; background-color: black; color: rgb(200, 200, 200); border: 0; border-bottom: 1px solid grey;' placeholder=\"Rechercher des utilisateurs, artistes, concerts, topics, actualités...\" id=recherche />
                    <a href='#' id='go'><button style='background-color: rgb(32, 32, 32); color: white; border: 0; border-radius: 0;' type=\"button\" class=\"btn btn-secondary\" onclick=\"paramRecherche();\">Go!</button></a>
                    </p>
                    <p style='margin-right: 128px; width: 25%; position: fixed; right: 0; text-align: right;'><a title='Voir les informations sur les développeurs et le commanditaire de ce site.' href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("follow_the_rhythm_contacts");
        echo "\"> <button style='background-color: black; color: white; border: 0' type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-address-book\"></i> Nous contacter</button></a>
                    <a title=\"Obtenir de l'aide sur l'utilisation du site\"  href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("follow_the_rhythm_aide");
        echo "\"> <button style='background-color: black; color: white; border: 0' type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-question-circle\" aria-hidden=\"true\"></i> Aide</button></a>
                    ";
        // line 48
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 49
            echo "                        <a title='Se déconnecter de Follow The Rhythm' href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\"> <button style='background-color: black; color: white; border: 0' type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i> Se déconnecter (";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo ")</button></a>
                    ";
        } else {
            // line 51
            echo "                        <a title='Se connecter pour bénéficier de tous les avantages Follow The Rhythm !' href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\"> <button style='background-color: black; color: white; border: 0' type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i> Se connecter</button></a>
                    ";
        }
        // line 53
        echo "                    </p></div>
                    <!--
                    <div class=\"btn-group\" role=\"group\" data-toggle=\"buttons\">
                    <button type=\"button\" class=\"btn btn-secondary\"><a href=\"";
        // line 56
        echo "\"><i class=\"fa fa-list\"></i> Actualités</a></button>
                    <button type=\"button\" class=\"btn btn-secondary\"><a href=\"";
        // line 57
        echo "\"><i class=\"\tfa fa-wechat\"></i> Forum</a></button>
                    </div>
                    -->
           
        </div>
          <div class=\"row\">
            <div class=\"col-sm-12\">
                </br></br></br></br></br></br></br></br></br>
            </div>
        </div>
        
        ";
        // line 68
        $this->displayBlock('menuPropreAuBundle', $context, $blocks);
        // line 70
        echo "        

        ";
        // line 72
        $this->displayBlock('contenuCentral', $context, $blocks);
        // line 74
        echo "        
        <div class=\"row footer\" style='bottom: 0; position: fixed; width: 100%; background-color: rgba(0, 0, 0, 0.8); height: 24px; line-height: 24px; vertical-align: middle;'>
            <div class=\"col-sm-12\">
                ";
        // line 78
        echo "                ";
        $this->displayBlock('footer', $context, $blocks);
        // line 84
        echo "            </div>
       </div>
          
      
        ";
        // line 88
        $this->displayBlock('javascripts', $context, $blocks);
        // line 101
        echo "    </body>
</html>";
        
        $__internal_309c3970b66cca820df3f451353f198a8a4ab213722b645b4ec50e510ef23220->leave($__internal_309c3970b66cca820df3f451353f198a8a4ab213722b645b4ec50e510ef23220_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_4e2316b1b077f05a6fea3c158e9ce2db57ce0001e44cb996c84a0ac4e4d274e7 = $this->env->getExtension("native_profiler");
        $__internal_4e2316b1b077f05a6fea3c158e9ce2db57ce0001e44cb996c84a0ac4e4d274e7->enter($__internal_4e2316b1b077f05a6fea3c158e9ce2db57ce0001e44cb996c84a0ac4e4d274e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 14
        echo "                Follow The Rhythm 
            ";
        
        $__internal_4e2316b1b077f05a6fea3c158e9ce2db57ce0001e44cb996c84a0ac4e4d274e7->leave($__internal_4e2316b1b077f05a6fea3c158e9ce2db57ce0001e44cb996c84a0ac4e4d274e7_prof);

    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3c32d88cdae67fc97e82848650df3bd6475ad9191f03418d4576b792b391396b = $this->env->getExtension("native_profiler");
        $__internal_3c32d88cdae67fc97e82848650df3bd6475ad9191f03418d4576b792b391396b->enter($__internal_3c32d88cdae67fc97e82848650df3bd6475ad9191f03418d4576b792b391396b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 19
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\"> 
            <link rel=\"stylesheet\" href=\"/follow_the_rhythm/web/css/followTheRhythm.css\">
        ";
        
        $__internal_3c32d88cdae67fc97e82848650df3bd6475ad9191f03418d4576b792b391396b->leave($__internal_3c32d88cdae67fc97e82848650df3bd6475ad9191f03418d4576b792b391396b_prof);

    }

    // line 29
    public function block_header($context, array $blocks = array())
    {
        $__internal_cd75a977903f4aab79ffa54ba5402982b62db787c41c9416139e9fcc7ac629cc = $this->env->getExtension("native_profiler");
        $__internal_cd75a977903f4aab79ffa54ba5402982b62db787c41c9416139e9fcc7ac629cc->enter($__internal_cd75a977903f4aab79ffa54ba5402982b62db787c41c9416139e9fcc7ac629cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 30
        echo "                        <!-- <p align=\"center\"><a href =\"";
        echo "\"><img class=img-responsive src=\"";
        echo "\" style=width:20% /></a></p>
                        <!--<a href=\"";
        // line 31
        echo "\"><h1> <FONT COLOR=\"#9400d3\">Follow The Rhythm</FONT></h1></a>
                        <h2>L'actualité Musicale</h2>-->
                    ";
        
        $__internal_cd75a977903f4aab79ffa54ba5402982b62db787c41c9416139e9fcc7ac629cc->leave($__internal_cd75a977903f4aab79ffa54ba5402982b62db787c41c9416139e9fcc7ac629cc_prof);

    }

    // line 68
    public function block_menuPropreAuBundle($context, array $blocks = array())
    {
        $__internal_c1d9184df96d08dfea8bb36e8de0d00d5a326b76e7be78ce83a21215089e5b9d = $this->env->getExtension("native_profiler");
        $__internal_c1d9184df96d08dfea8bb36e8de0d00d5a326b76e7be78ce83a21215089e5b9d->enter($__internal_c1d9184df96d08dfea8bb36e8de0d00d5a326b76e7be78ce83a21215089e5b9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menuPropreAuBundle"));

        echo "         
        ";
        
        $__internal_c1d9184df96d08dfea8bb36e8de0d00d5a326b76e7be78ce83a21215089e5b9d->leave($__internal_c1d9184df96d08dfea8bb36e8de0d00d5a326b76e7be78ce83a21215089e5b9d_prof);

    }

    // line 72
    public function block_contenuCentral($context, array $blocks = array())
    {
        $__internal_a233a330cd0ddbc3503c58fd6172e9545db0a50b74449bf414057142b2a9fe8b = $this->env->getExtension("native_profiler");
        $__internal_a233a330cd0ddbc3503c58fd6172e9545db0a50b74449bf414057142b2a9fe8b->enter($__internal_a233a330cd0ddbc3503c58fd6172e9545db0a50b74449bf414057142b2a9fe8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenuCentral"));

        // line 73
        echo "        ";
        
        $__internal_a233a330cd0ddbc3503c58fd6172e9545db0a50b74449bf414057142b2a9fe8b->leave($__internal_a233a330cd0ddbc3503c58fd6172e9545db0a50b74449bf414057142b2a9fe8b_prof);

    }

    // line 78
    public function block_footer($context, array $blocks = array())
    {
        $__internal_3cd7178466f3b8ef29358affd752b7ebf0d6247d71065b9ec897567f71d888a5 = $this->env->getExtension("native_profiler");
        $__internal_3cd7178466f3b8ef29358affd752b7ebf0d6247d71065b9ec897567f71d888a5->enter($__internal_3cd7178466f3b8ef29358affd752b7ebf0d6247d71065b9ec897567f71d888a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 79
        echo "                    <p style='text-align: left; width: 85%; position: absolute;'><font color=\"white\">Tous droits réservés © 2018</font> | 
                    <font color=\"white\">Ce site est un projet de 2nde année réalisé par des étudiants de DUT informatique de l'<a title=\"Aller sur le site Web de l'IUT de Bayonne et du pays Basque\" href=\"";
        // line 80
        echo "https://www.iutbayonne.univ-pau.fr/";
        echo "\"><FONT COLOR=\"#00CED1\">IUT de Bayonne et du Pays Basque</FONT></a></font></p>
                    <p style='text-align: right; width: 15%; position: absolute; right: 0; margin-right: 32px;'><a title=\"Voir les informations sur les développeurs et le commanditaire de ce site.\" href=\"";
        // line 81
        echo $this->env->getExtension('routing')->getPath("follow_the_rhythm_contacts");
        echo "\">Nous contacter !</a>
                    <a title=\"Voir les crédits du site.\" href=\"";
        // line 82
        echo $this->env->getExtension('routing')->getPath("follow_the_rhythm_credits");
        echo "\">Crédits</a></p>
                ";
        
        $__internal_3cd7178466f3b8ef29358affd752b7ebf0d6247d71065b9ec897567f71d888a5->leave($__internal_3cd7178466f3b8ef29358affd752b7ebf0d6247d71065b9ec897567f71d888a5_prof);

    }

    // line 88
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f7de3585d95dee6956e65e0b1d5037d5e191c2884260491841e7e4a29d48c7e7 = $this->env->getExtension("native_profiler");
        $__internal_f7de3585d95dee6956e65e0b1d5037d5e191c2884260491841e7e4a29d48c7e7->enter($__internal_f7de3585d95dee6956e65e0b1d5037d5e191c2884260491841e7e4a29d48c7e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 89
        echo "            <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
            <script>
                  function paramRecherche(){
                    var lien=document.getElementById(\"go\");
                    var recherche2 = document.getElementById(\"recherche\").value;
                    lien.setAttribute(\"href\",\"https://follow-the-rhythm-jbelderrain.c9users.io/follow_the_rhythm/web/app_dev.php/recherche/\"+recherche2);
                    
                  }
 
</script>
        ";
        
        $__internal_f7de3585d95dee6956e65e0b1d5037d5e191c2884260491841e7e4a29d48c7e7->leave($__internal_f7de3585d95dee6956e65e0b1d5037d5e191c2884260491841e7e4a29d48c7e7_prof);

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
        return array (  281 => 90,  276 => 89,  270 => 88,  261 => 82,  257 => 81,  253 => 80,  250 => 79,  244 => 78,  237 => 73,  231 => 72,  218 => 68,  209 => 31,  204 => 30,  198 => 29,  186 => 19,  180 => 18,  172 => 14,  166 => 13,  158 => 101,  156 => 88,  150 => 84,  147 => 78,  142 => 74,  140 => 72,  136 => 70,  134 => 68,  121 => 57,  118 => 56,  113 => 53,  107 => 51,  99 => 49,  97 => 48,  93 => 47,  89 => 46,  82 => 42,  78 => 41,  72 => 37,  68 => 34,  65 => 29,  61 => 27,  57 => 26,  53 => 24,  51 => 23,  49 => 18,  45 => 16,  43 => 13,  39 => 11,  35 => 8,  32 => 3,  29 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* {# app/Ressources/Views/vueMere.html.twig #}*/
/* */
/* {# https://follow-the-rhythm-jbelderrain.c9users.io/follow_the_rhythm/web/app_dev.php/accueil/1/1/25 #}*/
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
/*     <body background="{{ asset('upload/images/bg3.jpg') }}" style="background-size: cover; height: 100%;">*/
/*             <a title="Revenir à la page d'accueil Follow The Rhythm !" href="{{path('follow_the_rhythm_accueil',{'page': 1, 'sens': 1, 'nbParPage': 25})}}"> <div style="position: fixed; width: 100%; z-index: 99; background-size: auto 128px; background-position: center;" class="header col-lg-12 col-md-12 col-sm-12 col-xs-12">*/
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
/*         <div style='z-index: 99; width: 100%; height: 36px; top: 128px; position: fixed; left: 0; background-color: rgba(0, 0, 0, 1);' class="container">*/
/*             <div class="row">*/
/*                 */
/*                     <p style='margin-left: 128px; width: 100%; position: fixed; text-align: left;'><a title='Afficher les actualités musicales du moment.' href="{{path('follow_the_rhythm_accueil',{'page': 1, 'sens': 1, 'nbParPage': 25})}}"><button style='background-color: black; color: white; border: 0' type="button" class="btn btn-default"><i class="fa fa-list"></i> Actualités</button></a>*/
/*                     <a title='Aller au forum pour consulter les topics ou discuter avec la communauté.' href="{{path('follow_the_rhythm_accueilForum')}}"> <button style='background-color: black; color: white; border: 0' type="button" class="btn btn-default"><i class="	fa fa-wechat"></i> Forum</button></a>*/
/*                     <input type="text" style='margin-left: 64px; width: 450px; background-color: black; color: rgb(200, 200, 200); border: 0; border-bottom: 1px solid grey;' placeholder="Rechercher des utilisateurs, artistes, concerts, topics, actualités..." id=recherche />*/
/*                     <a href='#' id='go'><button style='background-color: rgb(32, 32, 32); color: white; border: 0; border-radius: 0;' type="button" class="btn btn-secondary" onclick="paramRecherche();">Go!</button></a>*/
/*                     </p>*/
/*                     <p style='margin-right: 128px; width: 25%; position: fixed; right: 0; text-align: right;'><a title='Voir les informations sur les développeurs et le commanditaire de ce site.' href="{{path('follow_the_rhythm_contacts')}}"> <button style='background-color: black; color: white; border: 0' type="button" class="btn btn-default"><i class="fa fa-address-book"></i> Nous contacter</button></a>*/
/*                     <a title="Obtenir de l'aide sur l'utilisation du site"  href="{{path('follow_the_rhythm_aide')}}"> <button style='background-color: black; color: white; border: 0' type="button" class="btn btn-default"><i class="fa fa-question-circle" aria-hidden="true"></i> Aide</button></a>*/
/*                     {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                         <a title='Se déconnecter de Follow The Rhythm' href="{{path('fos_user_security_logout')}}"> <button style='background-color: black; color: white; border: 0' type="button" class="btn btn-default"><i class="fa fa-user" aria-hidden="true"></i> Se déconnecter ({{ app.user.username }})</button></a>*/
/*                     {% else %}*/
/*                         <a title='Se connecter pour bénéficier de tous les avantages Follow The Rhythm !' href="{{path('fos_user_security_login')}}"> <button style='background-color: black; color: white; border: 0' type="button" class="btn btn-default"><i class="fa fa-user" aria-hidden="true"></i> Se connecter</button></a>*/
/*                     {% endif %}*/
/*                     </p></div>*/
/*                     <!--*/
/*                     <div class="btn-group" role="group" data-toggle="buttons">*/
/*                     <button type="button" class="btn btn-secondary"><a href="{#path('follow_the_rhythm_accueil',{'page': 1, 'sens': 1})#}"><i class="fa fa-list"></i> Actualités</a></button>*/
/*                     <button type="button" class="btn btn-secondary"><a href="{#path('follow_the_rhythm_accueilForum')#}"><i class="	fa fa-wechat"></i> Forum</a></button>*/
/*                     </div>*/
/*                     -->*/
/*            */
/*         </div>*/
/*           <div class="row">*/
/*             <div class="col-sm-12">*/
/*                 </br></br></br></br></br></br></br></br></br>*/
/*             </div>*/
/*         </div>*/
/*         */
/*         {% block menuPropreAuBundle %}         */
/*         {% endblock %}*/
/*         */
/* */
/*         {% block contenuCentral %}*/
/*         {% endblock %}*/
/*         */
/*         <div class="row footer" style='bottom: 0; position: fixed; width: 100%; background-color: rgba(0, 0, 0, 0.8); height: 24px; line-height: 24px; vertical-align: middle;'>*/
/*             <div class="col-sm-12">*/
/*                 {#IL FAUT JUSTIFIER LE TEXTE#}*/
/*                 {% block footer %}*/
/*                     <p style='text-align: left; width: 85%; position: absolute;'><font color="white">Tous droits réservés © 2018</font> | */
/*                     <font color="white">Ce site est un projet de 2nde année réalisé par des étudiants de DUT informatique de l'<a title="Aller sur le site Web de l'IUT de Bayonne et du pays Basque" href="{{'https://www.iutbayonne.univ-pau.fr/' }}"><FONT COLOR="#00CED1">IUT de Bayonne et du Pays Basque</FONT></a></font></p>*/
/*                     <p style='text-align: right; width: 15%; position: absolute; right: 0; margin-right: 32px;'><a title="Voir les informations sur les développeurs et le commanditaire de ce site." href="{{path('follow_the_rhythm_contacts')}}">Nous contacter !</a>*/
/*                     <a title="Voir les crédits du site." href="{{path('follow_the_rhythm_credits')}}">Crédits</a></p>*/
/*                 {% endblock %}*/
/*             </div>*/
/*        </div>*/
/*           */
/*       */
/*         {% block javascripts %}*/
/*             <script type="text/javascript" src="{{ asset('js/jquery.js')}}"></script>*/
/*             <script type="text/javascript" src="{{ asset('js/bootstrap.js')}}"></script>*/
/*             <script>*/
/*                   function paramRecherche(){*/
/*                     var lien=document.getElementById("go");*/
/*                     var recherche2 = document.getElementById("recherche").value;*/
/*                     lien.setAttribute("href","https://follow-the-rhythm-jbelderrain.c9users.io/follow_the_rhythm/web/app_dev.php/recherche/"+recherche2);*/
/*                     */
/*                   }*/
/*  */
/* </script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
