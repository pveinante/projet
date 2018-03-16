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
        $__internal_a01200d6a743116ff0e93e30065e79bc3bf30260d812040cf36d7bc55f776e2d = $this->env->getExtension("native_profiler");
        $__internal_a01200d6a743116ff0e93e30065e79bc3bf30260d812040cf36d7bc55f776e2d->enter($__internal_a01200d6a743116ff0e93e30065e79bc3bf30260d812040cf36d7bc55f776e2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::vueMere.html.twig"));

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
        
        $__internal_a01200d6a743116ff0e93e30065e79bc3bf30260d812040cf36d7bc55f776e2d->leave($__internal_a01200d6a743116ff0e93e30065e79bc3bf30260d812040cf36d7bc55f776e2d_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_a81e2f0976927719ec6ae23b94dff8e02746778c48747306246a121f59b0f7be = $this->env->getExtension("native_profiler");
        $__internal_a81e2f0976927719ec6ae23b94dff8e02746778c48747306246a121f59b0f7be->enter($__internal_a81e2f0976927719ec6ae23b94dff8e02746778c48747306246a121f59b0f7be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 15
        echo "                Follow The Rhythm 
            ";
        
        $__internal_a81e2f0976927719ec6ae23b94dff8e02746778c48747306246a121f59b0f7be->leave($__internal_a81e2f0976927719ec6ae23b94dff8e02746778c48747306246a121f59b0f7be_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d5fdba20efd72e5fae93664fd965e7c188b334ee136b0454dd3936dc353f0862 = $this->env->getExtension("native_profiler");
        $__internal_d5fdba20efd72e5fae93664fd965e7c188b334ee136b0454dd3936dc353f0862->enter($__internal_d5fdba20efd72e5fae93664fd965e7c188b334ee136b0454dd3936dc353f0862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 20
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\"> 
            <link rel=\"stylesheet\" href=\"/follow_the_rhythm/web/css/followTheRhythm.css\">
        ";
        
        $__internal_d5fdba20efd72e5fae93664fd965e7c188b334ee136b0454dd3936dc353f0862->leave($__internal_d5fdba20efd72e5fae93664fd965e7c188b334ee136b0454dd3936dc353f0862_prof);

    }

    // line 30
    public function block_header($context, array $blocks = array())
    {
        $__internal_728c611520cacccb8c30846f269c2178861834a312da359b836457af48be3a82 = $this->env->getExtension("native_profiler");
        $__internal_728c611520cacccb8c30846f269c2178861834a312da359b836457af48be3a82->enter($__internal_728c611520cacccb8c30846f269c2178861834a312da359b836457af48be3a82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_728c611520cacccb8c30846f269c2178861834a312da359b836457af48be3a82->leave($__internal_728c611520cacccb8c30846f269c2178861834a312da359b836457af48be3a82_prof);

    }

    // line 62
    public function block_menuPropreAuBundle($context, array $blocks = array())
    {
        $__internal_1f619a791e77f06e293892270f7edb835afbb3a8473555a091f1681b977b59fb = $this->env->getExtension("native_profiler");
        $__internal_1f619a791e77f06e293892270f7edb835afbb3a8473555a091f1681b977b59fb->enter($__internal_1f619a791e77f06e293892270f7edb835afbb3a8473555a091f1681b977b59fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menuPropreAuBundle"));

        echo "         
        ";
        
        $__internal_1f619a791e77f06e293892270f7edb835afbb3a8473555a091f1681b977b59fb->leave($__internal_1f619a791e77f06e293892270f7edb835afbb3a8473555a091f1681b977b59fb_prof);

    }

    // line 67
    public function block_contenuCentral($context, array $blocks = array())
    {
        $__internal_3187a3934d6932a30e1c3094423e9d85c86d53d4f18a8ff2ec55c0bbe5d0267b = $this->env->getExtension("native_profiler");
        $__internal_3187a3934d6932a30e1c3094423e9d85c86d53d4f18a8ff2ec55c0bbe5d0267b->enter($__internal_3187a3934d6932a30e1c3094423e9d85c86d53d4f18a8ff2ec55c0bbe5d0267b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenuCentral"));

        // line 68
        echo "                ";
        
        $__internal_3187a3934d6932a30e1c3094423e9d85c86d53d4f18a8ff2ec55c0bbe5d0267b->leave($__internal_3187a3934d6932a30e1c3094423e9d85c86d53d4f18a8ff2ec55c0bbe5d0267b_prof);

    }

    // line 75
    public function block_footer($context, array $blocks = array())
    {
        $__internal_9d72b8e70ecbfdfef3e0eef7fc055867bd745d7c81ddc60ecb93edfa5a75d103 = $this->env->getExtension("native_profiler");
        $__internal_9d72b8e70ecbfdfef3e0eef7fc055867bd745d7c81ddc60ecb93edfa5a75d103->enter($__internal_9d72b8e70ecbfdfef3e0eef7fc055867bd745d7c81ddc60ecb93edfa5a75d103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

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
        
        $__internal_9d72b8e70ecbfdfef3e0eef7fc055867bd745d7c81ddc60ecb93edfa5a75d103->leave($__internal_9d72b8e70ecbfdfef3e0eef7fc055867bd745d7c81ddc60ecb93edfa5a75d103_prof);

    }

    // line 87
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c05c97f83efc9b9d246f124abb71cb1954bef00080501e3a106d7f5cb6456e46 = $this->env->getExtension("native_profiler");
        $__internal_c05c97f83efc9b9d246f124abb71cb1954bef00080501e3a106d7f5cb6456e46->enter($__internal_c05c97f83efc9b9d246f124abb71cb1954bef00080501e3a106d7f5cb6456e46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 88
        echo "            <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_c05c97f83efc9b9d246f124abb71cb1954bef00080501e3a106d7f5cb6456e46->leave($__internal_c05c97f83efc9b9d246f124abb71cb1954bef00080501e3a106d7f5cb6456e46_prof);

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
