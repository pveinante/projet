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
        $__internal_9f9eb2596558a893958da90cfb8003751fe141103b52f9c7e84ea9ec4d33f529 = $this->env->getExtension("native_profiler");
        $__internal_9f9eb2596558a893958da90cfb8003751fe141103b52f9c7e84ea9ec4d33f529->enter($__internal_9f9eb2596558a893958da90cfb8003751fe141103b52f9c7e84ea9ec4d33f529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::vueMere.html.twig"));

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
                    ";
        // line 52
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 53
            echo "                        <a title='Se déconnecter de Follow The Rhythm' href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\"> <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i> Se déconnecter (";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo ")</button></a>
                    ";
        } else {
            // line 55
            echo "                        <a title='Se connecter pour bénéficier de tous les avantages Follow The Rhythm !' href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\"> <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i> Se connecter</button></a>
                    ";
        }
        // line 57
        echo "                    
                </div>
                    <!--
                    <div class=\"btn-group\" role=\"group\" data-toggle=\"buttons\">
                    <button type=\"button\" class=\"btn btn-secondary\"><a href=\"";
        // line 61
        echo "\"><i class=\"fa fa-list\"></i> Actualités</a></button>
                    <button type=\"button\" class=\"btn btn-secondary\"><a href=\"";
        // line 62
        echo "\"><i class=\"\tfa fa-wechat\"></i> Forum</a></button>
                    </div>
                    -->
                </div>
            </div>
        </div>
        
        ";
        // line 69
        $this->displayBlock('menuPropreAuBundle', $context, $blocks);
        // line 71
        echo "        
        <div class=\"row\">
            <div class=\"col-sm-12\">
                ";
        // line 74
        $this->displayBlock('contenuCentral', $context, $blocks);
        // line 76
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
        // line 88
        echo "                ";
        $this->displayBlock('footer', $context, $blocks);
        // line 96
        echo "            </div>
       </div>
          
      
        ";
        // line 100
        $this->displayBlock('javascripts', $context, $blocks);
        // line 104
        echo "    </body>
</html>
";
        
        $__internal_9f9eb2596558a893958da90cfb8003751fe141103b52f9c7e84ea9ec4d33f529->leave($__internal_9f9eb2596558a893958da90cfb8003751fe141103b52f9c7e84ea9ec4d33f529_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_c88caf49a2e4793276535215349e7ba37f309127e7070013feb3b5524b1b399d = $this->env->getExtension("native_profiler");
        $__internal_c88caf49a2e4793276535215349e7ba37f309127e7070013feb3b5524b1b399d->enter($__internal_c88caf49a2e4793276535215349e7ba37f309127e7070013feb3b5524b1b399d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 14
        echo "                Follow The Rhythm 
            ";
        
        $__internal_c88caf49a2e4793276535215349e7ba37f309127e7070013feb3b5524b1b399d->leave($__internal_c88caf49a2e4793276535215349e7ba37f309127e7070013feb3b5524b1b399d_prof);

    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0eacf33c94aca03816ffecec948f644740b359761b181b556ac634a000d91e7a = $this->env->getExtension("native_profiler");
        $__internal_0eacf33c94aca03816ffecec948f644740b359761b181b556ac634a000d91e7a->enter($__internal_0eacf33c94aca03816ffecec948f644740b359761b181b556ac634a000d91e7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 19
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\"> 
            <link rel=\"stylesheet\" href=\"/follow_the_rhythm/web/css/followTheRhythm.css\">
        ";
        
        $__internal_0eacf33c94aca03816ffecec948f644740b359761b181b556ac634a000d91e7a->leave($__internal_0eacf33c94aca03816ffecec948f644740b359761b181b556ac634a000d91e7a_prof);

    }

    // line 29
    public function block_header($context, array $blocks = array())
    {
        $__internal_d8e50b5924bb72f8a89b0b43399a38933789ea291e986c8b5629e3c87953901c = $this->env->getExtension("native_profiler");
        $__internal_d8e50b5924bb72f8a89b0b43399a38933789ea291e986c8b5629e3c87953901c->enter($__internal_d8e50b5924bb72f8a89b0b43399a38933789ea291e986c8b5629e3c87953901c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 30
        echo "                        <!-- <p align=\"center\"><a href =\"";
        echo "\"><img class=img-responsive src=\"";
        echo "\" style=width:20% /></a></p>
                        <!--<a href=\"";
        // line 31
        echo "\"><h1> <FONT COLOR=\"#9400d3\">Follow The Rhythm</FONT></h1></a>
                        <h2>L'actualité Musicale</h2>-->
                    ";
        
        $__internal_d8e50b5924bb72f8a89b0b43399a38933789ea291e986c8b5629e3c87953901c->leave($__internal_d8e50b5924bb72f8a89b0b43399a38933789ea291e986c8b5629e3c87953901c_prof);

    }

    // line 69
    public function block_menuPropreAuBundle($context, array $blocks = array())
    {
        $__internal_69ffcf571745d727773569078129790be08848a49340285e4f157aaaf956184c = $this->env->getExtension("native_profiler");
        $__internal_69ffcf571745d727773569078129790be08848a49340285e4f157aaaf956184c->enter($__internal_69ffcf571745d727773569078129790be08848a49340285e4f157aaaf956184c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menuPropreAuBundle"));

        echo "         
        ";
        
        $__internal_69ffcf571745d727773569078129790be08848a49340285e4f157aaaf956184c->leave($__internal_69ffcf571745d727773569078129790be08848a49340285e4f157aaaf956184c_prof);

    }

    // line 74
    public function block_contenuCentral($context, array $blocks = array())
    {
        $__internal_29f7562f63c49f367b5ad8976cc916e25f914c34c9cba58581474e8b59b413c4 = $this->env->getExtension("native_profiler");
        $__internal_29f7562f63c49f367b5ad8976cc916e25f914c34c9cba58581474e8b59b413c4->enter($__internal_29f7562f63c49f367b5ad8976cc916e25f914c34c9cba58581474e8b59b413c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenuCentral"));

        // line 75
        echo "                ";
        
        $__internal_29f7562f63c49f367b5ad8976cc916e25f914c34c9cba58581474e8b59b413c4->leave($__internal_29f7562f63c49f367b5ad8976cc916e25f914c34c9cba58581474e8b59b413c4_prof);

    }

    // line 88
    public function block_footer($context, array $blocks = array())
    {
        $__internal_72cae1f2fcc673a66080aeccd2fdb3f5d51d67c2f9ede24d367da2767104a5eb = $this->env->getExtension("native_profiler");
        $__internal_72cae1f2fcc673a66080aeccd2fdb3f5d51d67c2f9ede24d367da2767104a5eb->enter($__internal_72cae1f2fcc673a66080aeccd2fdb3f5d51d67c2f9ede24d367da2767104a5eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 89
        echo "                <hr>
                    <font color=\"white\">Tous droits réservés © 2018</font></br>
                    <font color=\"white\">Ce site est un projet de 2nde année réalisé par des étudiants de DUT informatique de l'<a title=\"Aller sur le site Web de l'IUT de Bayonne et du pays Basque\" href=\"";
        // line 91
        echo "https://www.iutbayonne.univ-pau.fr/";
        echo "\"><FONT COLOR=\"#00CED1\">IUT de Bayonne et du Pays Basque</FONT></a></font></Br>
                    <a title=\"Voir les informations sur les développeurs et le commanditaire de ce site.\" href=\"";
        // line 92
        echo $this->env->getExtension('routing')->getPath("follow_the_rhythm_contacts");
        echo "\">Nous contacter !</a>
                    <a title=\"Voir les crédits du site.\" href=\"";
        // line 93
        echo $this->env->getExtension('routing')->getPath("follow_the_rhythm_credits");
        echo "\">Crédits</a> </Br>
                    <h1> </h1>
                ";
        
        $__internal_72cae1f2fcc673a66080aeccd2fdb3f5d51d67c2f9ede24d367da2767104a5eb->leave($__internal_72cae1f2fcc673a66080aeccd2fdb3f5d51d67c2f9ede24d367da2767104a5eb_prof);

    }

    // line 100
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1c94f9ce36f72d9dd89251edf646b2d3b9b498556ce645b29bacd123e3b51c83 = $this->env->getExtension("native_profiler");
        $__internal_1c94f9ce36f72d9dd89251edf646b2d3b9b498556ce645b29bacd123e3b51c83->enter($__internal_1c94f9ce36f72d9dd89251edf646b2d3b9b498556ce645b29bacd123e3b51c83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 101
        echo "            <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_1c94f9ce36f72d9dd89251edf646b2d3b9b498556ce645b29bacd123e3b51c83->leave($__internal_1c94f9ce36f72d9dd89251edf646b2d3b9b498556ce645b29bacd123e3b51c83_prof);

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
        return array (  292 => 102,  287 => 101,  281 => 100,  271 => 93,  267 => 92,  263 => 91,  259 => 89,  253 => 88,  246 => 75,  240 => 74,  227 => 69,  218 => 31,  213 => 30,  207 => 29,  195 => 19,  189 => 18,  181 => 14,  175 => 13,  166 => 104,  164 => 100,  158 => 96,  155 => 88,  142 => 76,  140 => 74,  135 => 71,  133 => 69,  124 => 62,  121 => 61,  115 => 57,  109 => 55,  101 => 53,  99 => 52,  95 => 51,  91 => 50,  87 => 49,  83 => 48,  72 => 39,  69 => 37,  65 => 34,  62 => 29,  57 => 26,  53 => 24,  51 => 23,  49 => 18,  45 => 16,  43 => 13,  39 => 11,  35 => 8,  32 => 3,  29 => 1,);
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
/*                     {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                         <a title='Se déconnecter de Follow The Rhythm' href="{{path('fos_user_security_logout')}}"> <button type="button" class="btn btn-default"><i class="fa fa-user" aria-hidden="true"></i> Se déconnecter ({{ app.user.username }})</button></a>*/
/*                     {% else %}*/
/*                         <a title='Se connecter pour bénéficier de tous les avantages Follow The Rhythm !' href="{{path('fos_user_security_login')}}"> <button type="button" class="btn btn-default"><i class="fa fa-user" aria-hidden="true"></i> Se connecter</button></a>*/
/*                     {% endif %}*/
/*                     */
/*                 </div>*/
/*                     <!--*/
/*                     <div class="btn-group" role="group" data-toggle="buttons">*/
/*                     <button type="button" class="btn btn-secondary"><a href="{#path('follow_the_rhythm_accueil',{'page': 1, 'sens': 1})#}"><i class="fa fa-list"></i> Actualités</a></button>*/
/*                     <button type="button" class="btn btn-secondary"><a href="{#path('follow_the_rhythm_accueilForum')#}"><i class="	fa fa-wechat"></i> Forum</a></button>*/
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
