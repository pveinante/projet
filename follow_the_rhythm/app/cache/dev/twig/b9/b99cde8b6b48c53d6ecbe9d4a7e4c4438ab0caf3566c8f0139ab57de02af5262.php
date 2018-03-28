<?php

/* follow_the_rhythmSymfonyBundle:Symfony:accueilForum.html.twig */
class __TwigTemplate_e586d131729b9163c17ac8f2001678d1fd7da4139d6da96671acd9768be71ae1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::vueMere.html.twig", "follow_the_rhythmSymfonyBundle:Symfony:accueilForum.html.twig", 1);
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
        $__internal_3d30b39b18e468f39e698a33f7ab1516fafdd5d25002220e08c4224ee2fb31f6 = $this->env->getExtension("native_profiler");
        $__internal_3d30b39b18e468f39e698a33f7ab1516fafdd5d25002220e08c4224ee2fb31f6->enter($__internal_3d30b39b18e468f39e698a33f7ab1516fafdd5d25002220e08c4224ee2fb31f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "follow_the_rhythmSymfonyBundle:Symfony:accueilForum.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d30b39b18e468f39e698a33f7ab1516fafdd5d25002220e08c4224ee2fb31f6->leave($__internal_3d30b39b18e468f39e698a33f7ab1516fafdd5d25002220e08c4224ee2fb31f6_prof);

    }

    // line 3
    public function block_contenuCentral($context, array $blocks = array())
    {
        $__internal_ab4ee1c9fa5dbcf8778535bba5d09324b56e61e416069c9c92ba2f6e8dff6597 = $this->env->getExtension("native_profiler");
        $__internal_ab4ee1c9fa5dbcf8778535bba5d09324b56e61e416069c9c92ba2f6e8dff6597->enter($__internal_ab4ee1c9fa5dbcf8778535bba5d09324b56e61e416069c9c92ba2f6e8dff6597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenuCentral"));

        // line 4
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\"><h2><b><i class=\"fa fa-wechat\"></i> Forum</b><a title=\"Renvoie à l'accueil de Follow the Rhythm.\" href=\"/follow_the_rhythm/web/app_dev.php/accueil/1/1\"><button style='margin-left: 32px;' type=\"button\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-arrow-left\"></span> Retour à l'accueil</button></a></h2></div>
            <div class=\"container\">
\t            <div class =\"row\">
\t\t            <div class =\"col-lg-6\">
\t\t\t            <h4>Catégorie</h4>
\t\t            </div>
\t\t            <div class =\"col-lg-1\">
\t\t\t            <h4 align=\"center\">Sujets</h4>
\t\t            </div>
\t\t            <div class =\"col-lg-1\">
\t\t\t            <h4 align=\"center\">Messages</h4> 
\t\t            </div>
\t\t            <div class =\"col-lg-4\">
\t\t\t            <h4 align=\"center\">Derniers Messages</h4>
\t\t            </div>
\t            </div>
            </div>
            <div class=\"container\">
\t            <div class =\"row\">
\t\t            <div class =\"col-lg-6\">
\t\t\t            <h5><a title=\"Discuter des news du moment.\" href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("follow_the_rhythm_categorie", array("catId" => 1));
        echo "\"> News</a></h5>
\t\t            </div>
\t\t            <div class =\"col-lg-1\">
\t\t\t            <h5 align=\"center\">";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tabTopics"]) ? $context["tabTopics"] : $this->getContext($context, "tabTopics")), 1, array(), "array"), "html", null, true);
        echo "</h5>
\t\t            </div>
\t\t            <div class =\"col-lg-1\">
\t\t\t            <h5 align=\"center\">";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tabNbMessTopics"]) ? $context["tabNbMessTopics"] : $this->getContext($context, "tabNbMessTopics")), 1, array(), "array"), "html", null, true);
        echo "</h5>
\t\t            </div>
\t\t            <div class =\"col-lg-4\">
\t\t\t            <h5 align=\"center\">News</h5>
\t\t            </div>
\t            </div>
            </div>
            <div class=\"container\">
\t            <div class =\"row\">
\t\t            <div class =\"col-lg-6\">
\t\t\t            <h5><a title=\"Entrer dans l'espace privé.\" href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("follow_the_rhythm_categorie", array("catId" => 2));
        echo "\"> Espace Privé</a></h5>
\t\t            </div>
\t\t            <div class =\"col-lg-1\">
\t\t\t            <h5 align=\"center\">";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tabTopics"]) ? $context["tabTopics"] : $this->getContext($context, "tabTopics")), 2, array(), "array"), "html", null, true);
        echo "</h5>
\t\t            </div>
\t\t            <div class =\"col-lg-1\">
\t\t\t            <h5 align=\"center\">";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tabNbMessTopics"]) ? $context["tabNbMessTopics"] : $this->getContext($context, "tabNbMessTopics")), 2, array(), "array"), "html", null, true);
        echo "</h5>
\t\t            </div>
\t\t            <div class =\"col-lg-4\">
\t\t\t            <h5 align=\"center\">News</h5>
\t\t            </div>
\t            </div>
            </div>
            <div class=\"container\">
\t            <div class =\"row\">
\t\t            <div class =\"col-lg-6\">
\t\t\t            <h5><a title=\"Discuter des prochains concerts.\" href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("follow_the_rhythm_categorie", array("catId" => 3));
        echo "\"> Concerts</a></h5>
\t\t            </div>
\t\t            <div class =\"col-lg-1\">
\t\t\t            <h5 align=\"center\">";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tabTopics"]) ? $context["tabTopics"] : $this->getContext($context, "tabTopics")), 3, array(), "array"), "html", null, true);
        echo "</h5>
\t\t            </div>
\t\t            <div class =\"col-lg-1\">
\t\t\t            <h5 align=\"center\">";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tabNbMessTopics"]) ? $context["tabNbMessTopics"] : $this->getContext($context, "tabNbMessTopics")), 3, array(), "array"), "html", null, true);
        echo "</h5>
\t\t            </div>
\t\t            <div class =\"col-lg-4\">
\t\t\t            <h5 align=\"center\">News</h5>
\t\t            </div>
\t            </div>
            </div>
            <div class=\"container\">
\t            <div class =\"row\">
\t\t            <div class =\"col-lg-6\">
\t\t\t            <h5><a title=\"Discuter des promotions.\" href=\"";
        // line 75
        echo $this->env->getExtension('routing')->getPath("follow_the_rhythm_categorie", array("catId" => 4));
        echo "\"> Promotion</a></h5>
\t\t            </div>
\t\t            <div class =\"col-lg-1\">
\t\t\t            <h5 align=\"center\">";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tabTopics"]) ? $context["tabTopics"] : $this->getContext($context, "tabTopics")), 4, array(), "array"), "html", null, true);
        echo "</h5>
\t\t            </div>
\t\t            <div class =\"col-lg-1\">
\t\t\t            <h5 align=\"center\">";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tabNbMessTopics"]) ? $context["tabNbMessTopics"] : $this->getContext($context, "tabNbMessTopics")), 4, array(), "array"), "html", null, true);
        echo "</h5>
\t\t            </div>
\t\t            <div class =\"col-lg-4\">
\t\t\t            <h5 align=\"center\">News</h5>
\t\t            </div>
\t            </div>
            </div>
        </div>
    </div>
</div>
    
";
        
        $__internal_ab4ee1c9fa5dbcf8778535bba5d09324b56e61e416069c9c92ba2f6e8dff6597->leave($__internal_ab4ee1c9fa5dbcf8778535bba5d09324b56e61e416069c9c92ba2f6e8dff6597_prof);

    }

    public function getTemplateName()
    {
        return "follow_the_rhythmSymfonyBundle:Symfony:accueilForum.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 81,  146 => 78,  140 => 75,  127 => 65,  121 => 62,  115 => 59,  102 => 49,  96 => 46,  90 => 43,  77 => 33,  71 => 30,  65 => 27,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "::vueMere.html.twig" %} {#La vue fille hérite de la vue mère#}*/
/*     */
/* {% block contenuCentral %}*/
/* <div class="container">*/
/*     <div class="row">*/
/*         <div class="panel panel-default">*/
/*             <div class="panel-heading"><h2><b><i class="fa fa-wechat"></i> Forum</b><a title="Renvoie à l'accueil de Follow the Rhythm." href="/follow_the_rhythm/web/app_dev.php/accueil/1/1"><button style='margin-left: 32px;' type="button" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Retour à l'accueil</button></a></h2></div>*/
/*             <div class="container">*/
/* 	            <div class ="row">*/
/* 		            <div class ="col-lg-6">*/
/* 			            <h4>Catégorie</h4>*/
/* 		            </div>*/
/* 		            <div class ="col-lg-1">*/
/* 			            <h4 align="center">Sujets</h4>*/
/* 		            </div>*/
/* 		            <div class ="col-lg-1">*/
/* 			            <h4 align="center">Messages</h4> */
/* 		            </div>*/
/* 		            <div class ="col-lg-4">*/
/* 			            <h4 align="center">Derniers Messages</h4>*/
/* 		            </div>*/
/* 	            </div>*/
/*             </div>*/
/*             <div class="container">*/
/* 	            <div class ="row">*/
/* 		            <div class ="col-lg-6">*/
/* 			            <h5><a title="Discuter des news du moment." href="{{path('follow_the_rhythm_categorie',{'catId':1})}}"> News</a></h5>*/
/* 		            </div>*/
/* 		            <div class ="col-lg-1">*/
/* 			            <h5 align="center">{{tabTopics[1]}}</h5>*/
/* 		            </div>*/
/* 		            <div class ="col-lg-1">*/
/* 			            <h5 align="center">{{tabNbMessTopics[1]}}</h5>*/
/* 		            </div>*/
/* 		            <div class ="col-lg-4">*/
/* 			            <h5 align="center">News</h5>*/
/* 		            </div>*/
/* 	            </div>*/
/*             </div>*/
/*             <div class="container">*/
/* 	            <div class ="row">*/
/* 		            <div class ="col-lg-6">*/
/* 			            <h5><a title="Entrer dans l'espace privé." href="{{path('follow_the_rhythm_categorie',{'catId':2})}}"> Espace Privé</a></h5>*/
/* 		            </div>*/
/* 		            <div class ="col-lg-1">*/
/* 			            <h5 align="center">{{tabTopics[2]}}</h5>*/
/* 		            </div>*/
/* 		            <div class ="col-lg-1">*/
/* 			            <h5 align="center">{{tabNbMessTopics[2]}}</h5>*/
/* 		            </div>*/
/* 		            <div class ="col-lg-4">*/
/* 			            <h5 align="center">News</h5>*/
/* 		            </div>*/
/* 	            </div>*/
/*             </div>*/
/*             <div class="container">*/
/* 	            <div class ="row">*/
/* 		            <div class ="col-lg-6">*/
/* 			            <h5><a title="Discuter des prochains concerts." href="{{path('follow_the_rhythm_categorie',{'catId':3})}}"> Concerts</a></h5>*/
/* 		            </div>*/
/* 		            <div class ="col-lg-1">*/
/* 			            <h5 align="center">{{tabTopics[3]}}</h5>*/
/* 		            </div>*/
/* 		            <div class ="col-lg-1">*/
/* 			            <h5 align="center">{{tabNbMessTopics[3]}}</h5>*/
/* 		            </div>*/
/* 		            <div class ="col-lg-4">*/
/* 			            <h5 align="center">News</h5>*/
/* 		            </div>*/
/* 	            </div>*/
/*             </div>*/
/*             <div class="container">*/
/* 	            <div class ="row">*/
/* 		            <div class ="col-lg-6">*/
/* 			            <h5><a title="Discuter des promotions." href="{{path('follow_the_rhythm_categorie',{'catId':4})}}"> Promotion</a></h5>*/
/* 		            </div>*/
/* 		            <div class ="col-lg-1">*/
/* 			            <h5 align="center">{{tabTopics[4]}}</h5>*/
/* 		            </div>*/
/* 		            <div class ="col-lg-1">*/
/* 			            <h5 align="center">{{tabNbMessTopics[4]}}</h5>*/
/* 		            </div>*/
/* 		            <div class ="col-lg-4">*/
/* 			            <h5 align="center">News</h5>*/
/* 		            </div>*/
/* 	            </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/*     */
/* {% endblock %}*/
