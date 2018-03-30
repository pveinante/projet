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
        $__internal_62e38cf820410ca06d8cb6770f501cfcadb4aef6d3e3b0610b42527526bbd4d4 = $this->env->getExtension("native_profiler");
        $__internal_62e38cf820410ca06d8cb6770f501cfcadb4aef6d3e3b0610b42527526bbd4d4->enter($__internal_62e38cf820410ca06d8cb6770f501cfcadb4aef6d3e3b0610b42527526bbd4d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "follow_the_rhythmSymfonyBundle:Symfony:accueilForum.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62e38cf820410ca06d8cb6770f501cfcadb4aef6d3e3b0610b42527526bbd4d4->leave($__internal_62e38cf820410ca06d8cb6770f501cfcadb4aef6d3e3b0610b42527526bbd4d4_prof);

    }

    // line 3
    public function block_contenuCentral($context, array $blocks = array())
    {
        $__internal_7a175a7ee0c0e685cf7009858b56d236a1fd5f006ad46790c06e1c18eaf4cddb = $this->env->getExtension("native_profiler");
        $__internal_7a175a7ee0c0e685cf7009858b56d236a1fd5f006ad46790c06e1c18eaf4cddb->enter($__internal_7a175a7ee0c0e685cf7009858b56d236a1fd5f006ad46790c06e1c18eaf4cddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenuCentral"));

        // line 4
        echo "<style>
\t.footer
\t{
\t\tposition: fixed;
\t\twidth: 100%;
\t\tbottom: 0;
\t\tleft: 0;
\t}
</style>
<div class=\"container\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\"><h2><b><i class=\"fa fa-wechat\"></i> Forum</b><a title=\"Renvoie à l'accueil de Follow the Rhythm.\" href=\"/follow_the_rhythm/web/app_dev.php/accueil/1/1/25\"><button style='margin-left: 32px;' type=\"button\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-arrow-left\"></span> Retour à l'accueil</button></a></h2></div>
                <div class=\"row\">
                \t<div class=\"col-lg-12\">
            <div class=\"container\">
\t            <div class =\"row\">
\t\t            <div class =\"col-lg-3\">
\t\t\t            <h4>Catégorie</h4>
\t\t            </div>
\t\t            <div class =\"col-lg-1\">
\t\t\t            <h4 align=\"center\">Topics</h4>
\t\t            </div>
\t\t            <div class =\"col-lg-1\">
\t\t\t            <h4 align=\"center\">Messages</h4> 
\t\t            </div>
\t\t            <div class =\"col-lg-7\">
\t\t\t            <h4 align=\"center\">Derniers Messages</h4>
\t\t            </div>
\t            </div>
            </div>
            <div class=\"container\">
\t            <div class =\"row\">
\t\t            <div class =\"col-lg-3\">
\t\t\t            <h5><a title=\"Discuter des news du moment.\" href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("follow_the_rhythm_categorie", array("catId" => 1));
        echo "\"> News</a></h5>
\t\t            </div>
\t\t            <div class =\"col-lg-1\">
\t\t\t            <h5 align=\"center\">";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tabTopics"]) ? $context["tabTopics"] : $this->getContext($context, "tabTopics")), 1, array(), "array"), "html", null, true);
        echo "</h5>
\t\t            </div>
\t\t            <div class =\"col-lg-1\">
\t\t\t            <h5 align=\"center\">";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tabNbMessTopics"]) ? $context["tabNbMessTopics"] : $this->getContext($context, "tabNbMessTopics")), 1, array(), "array"), "html", null, true);
        echo "</h5>
\t\t            </div>
\t\t            <div class =\"col-lg-7\">
\t\t            \t";
        // line 46
        if (($this->getAttribute((isset($context["dDate"]) ? $context["dDate"] : $this->getContext($context, "dDate")), 1, array(), "array") != "")) {
            // line 47
            echo "\t\t\t            <h5 align=\"center\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dDate"]) ? $context["dDate"] : $this->getContext($context, "dDate")), 1, array(), "array"), "html", null, true);
            echo " par <a href='";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("follow_the_rhythm_pageUtilisateur", array("id" => $this->getAttribute((isset($context["dUtilisateur"]) ? $context["dUtilisateur"] : $this->getContext($context, "dUtilisateur")), 1, array(), "array"))), "html", null, true);
            echo "' title='";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dPseudo"]) ? $context["dPseudo"] : $this->getContext($context, "dPseudo")), 1, array(), "array"), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dPseudo"]) ? $context["dPseudo"] : $this->getContext($context, "dPseudo")), 1, array(), "array"), "html", null, true);
            echo "</a> dans le topic <a href='";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("follow_the_rhythm_messages", array("topicId" => $this->getAttribute((isset($context["dTopic"]) ? $context["dTopic"] : $this->getContext($context, "dTopic")), 1, array(), "array"), "page" => 1, "nbParPage" => 25)), "html", null, true);
            echo "' title='";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dTitre"]) ? $context["dTitre"] : $this->getContext($context, "dTitre")), 1, array(), "array"), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dTitre"]) ? $context["dTitre"] : $this->getContext($context, "dTitre")), 1, array(), "array"), "html", null, true);
            echo "</a></h5>
\t\t\t            ";
        }
        // line 49
        echo "\t\t            </div>
\t            </div>
            </div>
            <div class=\"container\">
\t            <div class =\"row\">
\t\t            <div class =\"col-lg-3\">
\t\t\t            <h5><a title=\"Entrer dans l'espace privé.\" href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("follow_the_rhythm_categorie", array("catId" => 2));
        echo "\"> Espace Privé</a></h5>
\t\t            </div>
\t\t            <div class =\"col-lg-1\">
\t\t\t            <h5 align=\"center\">";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tabTopics"]) ? $context["tabTopics"] : $this->getContext($context, "tabTopics")), 2, array(), "array"), "html", null, true);
        echo "</h5>
\t\t            </div>
\t\t            <div class =\"col-lg-1\">
\t\t\t            <h5 align=\"center\">";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tabNbMessTopics"]) ? $context["tabNbMessTopics"] : $this->getContext($context, "tabNbMessTopics")), 2, array(), "array"), "html", null, true);
        echo "</h5>
\t\t            </div>
\t\t            <div class =\"col-lg-7\">
\t\t            \t";
        // line 64
        if (($this->getAttribute((isset($context["dDate"]) ? $context["dDate"] : $this->getContext($context, "dDate")), 2, array(), "array") != "")) {
            // line 65
            echo "\t\t\t            <h5 align=\"center\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dDate"]) ? $context["dDate"] : $this->getContext($context, "dDate")), 2, array(), "array"), "html", null, true);
            echo " par <a href='";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("follow_the_rhythm_pageUtilisateur", array("id" => $this->getAttribute((isset($context["dUtilisateur"]) ? $context["dUtilisateur"] : $this->getContext($context, "dUtilisateur")), 2, array(), "array"))), "html", null, true);
            echo "' title='";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dPseudo"]) ? $context["dPseudo"] : $this->getContext($context, "dPseudo")), 2, array(), "array"), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dPseudo"]) ? $context["dPseudo"] : $this->getContext($context, "dPseudo")), 2, array(), "array"), "html", null, true);
            echo "</a> dans le topic <a href='";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("follow_the_rhythm_messages", array("topicId" => $this->getAttribute((isset($context["dTopic"]) ? $context["dTopic"] : $this->getContext($context, "dTopic")), 2, array(), "array"), "page" => 1, "nbParPage" => 25)), "html", null, true);
            echo "' title='";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dTitre"]) ? $context["dTitre"] : $this->getContext($context, "dTitre")), 2, array(), "array"), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dTitre"]) ? $context["dTitre"] : $this->getContext($context, "dTitre")), 2, array(), "array"), "html", null, true);
            echo "</a></h5>
\t\t\t            ";
        }
        // line 67
        echo "\t\t            </div>
\t            </div>
            </div>
            <div class=\"container\">
\t            <div class =\"row\">
\t\t            <div class =\"col-lg-3\">
\t\t\t            <h5><a title=\"Discuter des prochains concerts.\" href=\"";
        // line 73
        echo $this->env->getExtension('routing')->getPath("follow_the_rhythm_categorie", array("catId" => 3));
        echo "\"> Concerts</a></h5>
\t\t            </div>
\t\t            <div class =\"col-lg-1\">
\t\t\t            <h5 align=\"center\">";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tabTopics"]) ? $context["tabTopics"] : $this->getContext($context, "tabTopics")), 3, array(), "array"), "html", null, true);
        echo "</h5>
\t\t            </div>
\t\t            <div class =\"col-lg-1\">
\t\t\t            <h5 align=\"center\">";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tabNbMessTopics"]) ? $context["tabNbMessTopics"] : $this->getContext($context, "tabNbMessTopics")), 3, array(), "array"), "html", null, true);
        echo "</h5>
\t\t            </div>
\t\t            <div class =\"col-lg-7\">
\t\t            \t";
        // line 82
        if (($this->getAttribute((isset($context["dDate"]) ? $context["dDate"] : $this->getContext($context, "dDate")), 3, array(), "array") != "")) {
            // line 83
            echo "\t\t\t           <h5 align=\"center\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dDate"]) ? $context["dDate"] : $this->getContext($context, "dDate")), 3, array(), "array"), "html", null, true);
            echo " par <a href='";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("follow_the_rhythm_pageUtilisateur", array("id" => $this->getAttribute((isset($context["dUtilisateur"]) ? $context["dUtilisateur"] : $this->getContext($context, "dUtilisateur")), 3, array(), "array"))), "html", null, true);
            echo "' title='";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dPseudo"]) ? $context["dPseudo"] : $this->getContext($context, "dPseudo")), 3, array(), "array"), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dPseudo"]) ? $context["dPseudo"] : $this->getContext($context, "dPseudo")), 3, array(), "array"), "html", null, true);
            echo "</a> dans le topic <a href='";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("follow_the_rhythm_messages", array("topicId" => $this->getAttribute((isset($context["dTopic"]) ? $context["dTopic"] : $this->getContext($context, "dTopic")), 3, array(), "array"), "page" => 1, "nbParPage" => 25)), "html", null, true);
            echo "' title='";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dTitre"]) ? $context["dTitre"] : $this->getContext($context, "dTitre")), 3, array(), "array"), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dTitre"]) ? $context["dTitre"] : $this->getContext($context, "dTitre")), 3, array(), "array"), "html", null, true);
            echo "</a></h5>
\t\t\t           ";
        }
        // line 85
        echo "\t\t            </div>
\t            </div>
            </div>
            <div class=\"container\">
\t            <div class =\"row\">
\t\t            <div class =\"col-lg-3\">
\t\t\t            <h5><a title=\"Discuter des promotions.\" href=\"";
        // line 91
        echo $this->env->getExtension('routing')->getPath("follow_the_rhythm_categorie", array("catId" => 4));
        echo "\"> Promotions</a></h5>
\t\t            </div>
\t\t            <div class =\"col-lg-1\">
\t\t\t            <h5 align=\"center\">";
        // line 94
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tabTopics"]) ? $context["tabTopics"] : $this->getContext($context, "tabTopics")), 4, array(), "array"), "html", null, true);
        echo "</h5>
\t\t            </div>
\t\t            <div class =\"col-lg-1\">
\t\t\t            <h5 align=\"center\">";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tabNbMessTopics"]) ? $context["tabNbMessTopics"] : $this->getContext($context, "tabNbMessTopics")), 4, array(), "array"), "html", null, true);
        echo "</h5>
\t\t            </div>
\t\t            <div class =\"col-lg-7\">
\t\t            \t";
        // line 100
        if (($this->getAttribute((isset($context["dDate"]) ? $context["dDate"] : $this->getContext($context, "dDate")), 4, array(), "array") != "")) {
            // line 101
            echo "\t\t\t            <h5 align=\"center\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dDate"]) ? $context["dDate"] : $this->getContext($context, "dDate")), 4, array(), "array"), "html", null, true);
            echo " par <a href='";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("follow_the_rhythm_pageUtilisateur", array("id" => $this->getAttribute((isset($context["dUtilisateur"]) ? $context["dUtilisateur"] : $this->getContext($context, "dUtilisateur")), 4, array(), "array"))), "html", null, true);
            echo "' title='";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dPseudo"]) ? $context["dPseudo"] : $this->getContext($context, "dPseudo")), 4, array(), "array"), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dPseudo"]) ? $context["dPseudo"] : $this->getContext($context, "dPseudo")), 4, array(), "array"), "html", null, true);
            echo "</a> dans le topic <a href='";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("follow_the_rhythm_messages", array("topicId" => $this->getAttribute((isset($context["dTopic"]) ? $context["dTopic"] : $this->getContext($context, "dTopic")), 4, array(), "array"), "page" => 1, "nbParPage" => 25)), "html", null, true);
            echo "' title='";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dTitre"]) ? $context["dTitre"] : $this->getContext($context, "dTitre")), 4, array(), "array"), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dTitre"]) ? $context["dTitre"] : $this->getContext($context, "dTitre")), 4, array(), "array"), "html", null, true);
            echo "</a></h5>
\t\t\t            ";
        }
        // line 103
        echo "\t\t            </div>
\t            </div>
            </div>
            <div class=\"list-group-item\"><b><label><span class=\"glyphicon glyphicon-list-alt\"></span> Règles du forum</label></b></h2>
\t\t\t\t
\t\t\t\t<p style=\"text-align:justify;\">
\t\t\t\tLes contributions contraires aux bons usages (racisme, pornographie, atteinte à la vie privée, injures, liens vers des sites (ou
\t\t\t\tphotos) à caractère pornographique...) seront supprimées.</br>
\t\t\t\tLes messages jugés sensibles (à caractère politique, religieux...) pourront être supprimés pour éviter d'éventuels conflits.<br />
\t\t\t\tL'administrateur et les modérateurs ne sont pas responsables du contenu des messages postés par les utilisateurs du forum. <br />
\t\t\t\tLes topics des utilisateurs sont contrôlés régulièrement mais pas exhaustivement (modération <i>a posteriori</i>).</br>
\t\t\t\tChaque membre de la communauté peut (et doit) signaler tout message enfreignant une règle grave (messages qui nécessitent une
\t\t\t\tmodération urgente) grâce au bouton \"Signaler\"</br>
\t\t\t\tL'administrateur et les modérateurs se réservent la possibilité de supprimer ou ne pas valider tout message qui pourrait aller à l'encontre des intérêts 
\t\t\t\tde la communauté.
\t\t\t\t</p>
\t\t\t\t
            </div>
        </div>
        </div>
    </div>
</div>
    
";
        
        $__internal_7a175a7ee0c0e685cf7009858b56d236a1fd5f006ad46790c06e1c18eaf4cddb->leave($__internal_7a175a7ee0c0e685cf7009858b56d236a1fd5f006ad46790c06e1c18eaf4cddb_prof);

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
        return array (  251 => 103,  233 => 101,  231 => 100,  225 => 97,  219 => 94,  213 => 91,  205 => 85,  187 => 83,  185 => 82,  179 => 79,  173 => 76,  167 => 73,  159 => 67,  141 => 65,  139 => 64,  133 => 61,  127 => 58,  121 => 55,  113 => 49,  95 => 47,  93 => 46,  87 => 43,  81 => 40,  75 => 37,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "::vueMere.html.twig" %} {#La vue fille hérite de la vue mère#}*/
/*     */
/* {% block contenuCentral %}*/
/* <style>*/
/* 	.footer*/
/* 	{*/
/* 		position: fixed;*/
/* 		width: 100%;*/
/* 		bottom: 0;*/
/* 		left: 0;*/
/* 	}*/
/* </style>*/
/* <div class="container">*/
/*         <div class="panel panel-default">*/
/*             <div class="panel-heading"><h2><b><i class="fa fa-wechat"></i> Forum</b><a title="Renvoie à l'accueil de Follow the Rhythm." href="/follow_the_rhythm/web/app_dev.php/accueil/1/1/25"><button style='margin-left: 32px;' type="button" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Retour à l'accueil</button></a></h2></div>*/
/*                 <div class="row">*/
/*                 	<div class="col-lg-12">*/
/*             <div class="container">*/
/* 	            <div class ="row">*/
/* 		            <div class ="col-lg-3">*/
/* 			            <h4>Catégorie</h4>*/
/* 		            </div>*/
/* 		            <div class ="col-lg-1">*/
/* 			            <h4 align="center">Topics</h4>*/
/* 		            </div>*/
/* 		            <div class ="col-lg-1">*/
/* 			            <h4 align="center">Messages</h4> */
/* 		            </div>*/
/* 		            <div class ="col-lg-7">*/
/* 			            <h4 align="center">Derniers Messages</h4>*/
/* 		            </div>*/
/* 	            </div>*/
/*             </div>*/
/*             <div class="container">*/
/* 	            <div class ="row">*/
/* 		            <div class ="col-lg-3">*/
/* 			            <h5><a title="Discuter des news du moment." href="{{path('follow_the_rhythm_categorie',{'catId':1})}}"> News</a></h5>*/
/* 		            </div>*/
/* 		            <div class ="col-lg-1">*/
/* 			            <h5 align="center">{{tabTopics[1]}}</h5>*/
/* 		            </div>*/
/* 		            <div class ="col-lg-1">*/
/* 			            <h5 align="center">{{tabNbMessTopics[1]}}</h5>*/
/* 		            </div>*/
/* 		            <div class ="col-lg-7">*/
/* 		            	{% if dDate[1] != "" %}*/
/* 			            <h5 align="center">{{dDate[1]}} par <a href='{{path('follow_the_rhythm_pageUtilisateur', {'id':dUtilisateur[1]})}}' title='{{dPseudo[1]}}'>{{dPseudo[1]}}</a> dans le topic <a href='{{path('follow_the_rhythm_messages', {'topicId':dTopic[1], 'page':1, 'nbParPage':25})}}' title='{{dTitre[1]}}'>{{dTitre[1]}}</a></h5>*/
/* 			            {% endif %}*/
/* 		            </div>*/
/* 	            </div>*/
/*             </div>*/
/*             <div class="container">*/
/* 	            <div class ="row">*/
/* 		            <div class ="col-lg-3">*/
/* 			            <h5><a title="Entrer dans l'espace privé." href="{{path('follow_the_rhythm_categorie',{'catId':2})}}"> Espace Privé</a></h5>*/
/* 		            </div>*/
/* 		            <div class ="col-lg-1">*/
/* 			            <h5 align="center">{{tabTopics[2]}}</h5>*/
/* 		            </div>*/
/* 		            <div class ="col-lg-1">*/
/* 			            <h5 align="center">{{tabNbMessTopics[2]}}</h5>*/
/* 		            </div>*/
/* 		            <div class ="col-lg-7">*/
/* 		            	{% if dDate[2] != "" %}*/
/* 			            <h5 align="center">{{dDate[2]}} par <a href='{{path('follow_the_rhythm_pageUtilisateur', {'id':dUtilisateur[2]})}}' title='{{dPseudo[2]}}'>{{dPseudo[2]}}</a> dans le topic <a href='{{path('follow_the_rhythm_messages', {'topicId':dTopic[2], 'page':1, 'nbParPage':25})}}' title='{{dTitre[2]}}'>{{dTitre[2]}}</a></h5>*/
/* 			            {% endif %}*/
/* 		            </div>*/
/* 	            </div>*/
/*             </div>*/
/*             <div class="container">*/
/* 	            <div class ="row">*/
/* 		            <div class ="col-lg-3">*/
/* 			            <h5><a title="Discuter des prochains concerts." href="{{path('follow_the_rhythm_categorie',{'catId':3})}}"> Concerts</a></h5>*/
/* 		            </div>*/
/* 		            <div class ="col-lg-1">*/
/* 			            <h5 align="center">{{tabTopics[3]}}</h5>*/
/* 		            </div>*/
/* 		            <div class ="col-lg-1">*/
/* 			            <h5 align="center">{{tabNbMessTopics[3]}}</h5>*/
/* 		            </div>*/
/* 		            <div class ="col-lg-7">*/
/* 		            	{% if dDate[3] != "" %}*/
/* 			           <h5 align="center">{{dDate[3]}} par <a href='{{path('follow_the_rhythm_pageUtilisateur', {'id':dUtilisateur[3]})}}' title='{{dPseudo[3]}}'>{{dPseudo[3]}}</a> dans le topic <a href='{{path('follow_the_rhythm_messages', {'topicId':dTopic[3], 'page':1, 'nbParPage':25})}}' title='{{dTitre[3]}}'>{{dTitre[3]}}</a></h5>*/
/* 			           {% endif %}*/
/* 		            </div>*/
/* 	            </div>*/
/*             </div>*/
/*             <div class="container">*/
/* 	            <div class ="row">*/
/* 		            <div class ="col-lg-3">*/
/* 			            <h5><a title="Discuter des promotions." href="{{path('follow_the_rhythm_categorie',{'catId':4})}}"> Promotions</a></h5>*/
/* 		            </div>*/
/* 		            <div class ="col-lg-1">*/
/* 			            <h5 align="center">{{tabTopics[4]}}</h5>*/
/* 		            </div>*/
/* 		            <div class ="col-lg-1">*/
/* 			            <h5 align="center">{{tabNbMessTopics[4]}}</h5>*/
/* 		            </div>*/
/* 		            <div class ="col-lg-7">*/
/* 		            	{% if dDate[4] != "" %}*/
/* 			            <h5 align="center">{{dDate[4]}} par <a href='{{path('follow_the_rhythm_pageUtilisateur', {'id':dUtilisateur[4]})}}' title='{{dPseudo[4]}}'>{{dPseudo[4]}}</a> dans le topic <a href='{{path('follow_the_rhythm_messages', {'topicId':dTopic[4], 'page':1, 'nbParPage':25})}}' title='{{dTitre[4]}}'>{{dTitre[4]}}</a></h5>*/
/* 			            {% endif %}*/
/* 		            </div>*/
/* 	            </div>*/
/*             </div>*/
/*             <div class="list-group-item"><b><label><span class="glyphicon glyphicon-list-alt"></span> Règles du forum</label></b></h2>*/
/* 				*/
/* 				<p style="text-align:justify;">*/
/* 				Les contributions contraires aux bons usages (racisme, pornographie, atteinte à la vie privée, injures, liens vers des sites (ou*/
/* 				photos) à caractère pornographique...) seront supprimées.</br>*/
/* 				Les messages jugés sensibles (à caractère politique, religieux...) pourront être supprimés pour éviter d'éventuels conflits.<br />*/
/* 				L'administrateur et les modérateurs ne sont pas responsables du contenu des messages postés par les utilisateurs du forum. <br />*/
/* 				Les topics des utilisateurs sont contrôlés régulièrement mais pas exhaustivement (modération <i>a posteriori</i>).</br>*/
/* 				Chaque membre de la communauté peut (et doit) signaler tout message enfreignant une règle grave (messages qui nécessitent une*/
/* 				modération urgente) grâce au bouton "Signaler"</br>*/
/* 				L'administrateur et les modérateurs se réservent la possibilité de supprimer ou ne pas valider tout message qui pourrait aller à l'encontre des intérêts */
/* 				de la communauté.*/
/* 				</p>*/
/* 				*/
/*             </div>*/
/*         </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/*     */
/* {% endblock %}*/
