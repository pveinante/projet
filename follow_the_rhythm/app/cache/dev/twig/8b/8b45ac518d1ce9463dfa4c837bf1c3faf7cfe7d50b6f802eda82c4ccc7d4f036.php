<?php

/* follow_the_rhythmSymfonyBundle:Symfony:categorie.html.twig */
class __TwigTemplate_fa6d473191d74585fd92ffa3e7cc15d69f508477c1370c626b253c94517aa99d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::vueMere.html.twig", "follow_the_rhythmSymfonyBundle:Symfony:categorie.html.twig", 1);
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
        $__internal_4f0383c6f680420aeba0749db84f09ba494e8232c270251dc4e02d88b3fc9913 = $this->env->getExtension("native_profiler");
        $__internal_4f0383c6f680420aeba0749db84f09ba494e8232c270251dc4e02d88b3fc9913->enter($__internal_4f0383c6f680420aeba0749db84f09ba494e8232c270251dc4e02d88b3fc9913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "follow_the_rhythmSymfonyBundle:Symfony:categorie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f0383c6f680420aeba0749db84f09ba494e8232c270251dc4e02d88b3fc9913->leave($__internal_4f0383c6f680420aeba0749db84f09ba494e8232c270251dc4e02d88b3fc9913_prof);

    }

    // line 3
    public function block_contenuCentral($context, array $blocks = array())
    {
        $__internal_266f8224b212619cc0fd241e57a14c1924bff44c7fc8cd370d5ea5839ce9057d = $this->env->getExtension("native_profiler");
        $__internal_266f8224b212619cc0fd241e57a14c1924bff44c7fc8cd370d5ea5839ce9057d->enter($__internal_266f8224b212619cc0fd241e57a14c1924bff44c7fc8cd370d5ea5839ce9057d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenuCentral"));

        // line 4
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\"><h2><b><i class=\"fa fa-";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon")), (isset($context["catId"]) ? $context["catId"] : $this->getContext($context, "catId")), array(), "array"), "html", null, true);
        echo "\" aria-hidden=\"true\"></i> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cat"]) ? $context["cat"] : $this->getContext($context, "cat")), (isset($context["catId"]) ? $context["catId"] : $this->getContext($context, "catId")), array(), "array"), "html", null, true);
        echo "</b><a title='Créer un nouveau topic dans cette catégorie.' href=\"";
        echo $this->env->getExtension('routing')->getPath("follow_the_rhythm_soumettreTopicNews");
        echo "\"><button style='margin-left: 32px;' type=\"button\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-plus\"></span> Nouveau topic</button></a></h2></div>
            ";
        // line 8
        if (twig_test_empty((isset($context["tabTopics"]) ? $context["tabTopics"] : $this->getContext($context, "tabTopics")))) {
            // line 9
            echo "            <div class=\"container\">
\t            <div class =\"row\">
\t\t            <div class =\"col-lg-12\">
\t\t\t            <h5>Aucun topic pour le moment.</h5>
\t\t            </div>
\t            </div>
            </div>
            ";
        } else {
            // line 17
            echo "            <div class=\"container\">
\t            <div class =\"row\">
\t\t            <div class =\"col-lg-6\">
\t\t\t            <h4>Sujet du topic</h4>
\t\t            </div>
\t\t            <div class =\"col-lg-2\">
\t\t\t            <h4 align=\"center\">Créateur</h4>
\t\t            </div>
\t\t            <div class =\"col-lg-1\">
\t\t\t            <h4 align=\"center\">Messages</h4> 
\t\t            </div>
\t\t            <div class =\"col-lg-3\">
\t\t\t            <h4 align=\"center\">Dernier message le</h4>
\t\t            </div>
\t            </div>
            </div>
            ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tabTopics"]) ? $context["tabTopics"] : $this->getContext($context, "tabTopics")));
            foreach ($context['_seq'] as $context["_key"] => $context["topicCourant"]) {
                // line 34
                echo "                <div class=\"container\">
\t            <div class =\"row\">
\t\t            <div class =\"col-lg-6\">
\t\t\t            <a href=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("follow_the_rhythm_messages", array("topicId" => $this->getAttribute($context["topicCourant"], "id", array()), "page" => 1, "nbParPage" => 25)), "html", null, true);
                echo "\"><h5>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["topicCourant"], "titre", array()), "html", null, true);
                echo "</h5></a>
\t\t            </div>
\t\t            <div class =\"col-lg-2\">
\t\t\t            <a href=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("follow_the_rhythm_pageUtilisateur", array("id" => $this->getAttribute($this->getAttribute($context["topicCourant"], "utilisateur", array()), "id", array()))), "html", null, true);
                echo "\"><h5 align=\"center\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["topicCourant"], "utilisateur", array()), "username", array()), "html", null, true);
                echo "</h5></a>
\t\t            </div>
\t\t            <div class =\"col-lg-1\">
\t\t\t            <h5 align=\"center\">";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tabNbMessages"]) ? $context["tabNbMessages"] : $this->getContext($context, "tabNbMessages")), $this->getAttribute($context["topicCourant"], "id", array()), array(), "array"), "html", null, true);
                echo "</h5> 
\t\t            </div>
\t\t            <div class =\"col-lg-3\">
\t\t\t            <h5 align=\"center\">";
                // line 46
                if (($this->getAttribute((isset($context["tabNbMessages"]) ? $context["tabNbMessages"] : $this->getContext($context, "tabNbMessages")), $this->getAttribute($context["topicCourant"], "id", array()), array(), "array") != 0)) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["dateD"]) ? $context["dateD"] : $this->getContext($context, "dateD")), $this->getAttribute($context["topicCourant"], "id", array()), array(), "array"), "d-m-Y"), "html", null, true);
                    echo " à ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["dateD"]) ? $context["dateD"] : $this->getContext($context, "dateD")), $this->getAttribute($context["topicCourant"], "id", array()), array(), "array"), "H.i"), "html", null, true);
                }
                echo "</h5>
\t\t            </div>
\t            </div>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topicCourant'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "            ";
        }
        // line 52
        echo "            <a title=\"Renvoie à l'accueil du forum.\" href=\"/follow_the_rhythm/web/app_dev.php/accueilaccueilForum\"><button style='margin-top: 32px;' type=\"button\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-arrow-left\"></span> Retour au forum</button></a><a title=\"Renvoie à l'accueil de Follow the Rhythm.\" href=\"/follow_the_rhythm/web/app_dev.php/accueil/1/1\"><button style='margin-left: 8px; margin-top: 32px;' type=\"button\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-arrow-left\"></span> Retour à l'accueil</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
    
";
        
        $__internal_266f8224b212619cc0fd241e57a14c1924bff44c7fc8cd370d5ea5839ce9057d->leave($__internal_266f8224b212619cc0fd241e57a14c1924bff44c7fc8cd370d5ea5839ce9057d_prof);

    }

    public function getTemplateName()
    {
        return "follow_the_rhythmSymfonyBundle:Symfony:categorie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 52,  129 => 51,  114 => 46,  108 => 43,  100 => 40,  92 => 37,  87 => 34,  83 => 33,  65 => 17,  55 => 9,  53 => 8,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "::vueMere.html.twig" %} {#La vue fille hérite de la vue mère#}*/
/*     */
/* {% block contenuCentral %}*/
/* <div class="container">*/
/*     <div class="row">*/
/*         <div class="panel panel-default">*/
/*             <div class="panel-heading"><h2><b><i class="fa fa-{{icon[catId]}}" aria-hidden="true"></i> {{cat[catId]}}</b><a title='Créer un nouveau topic dans cette catégorie.' href="{{path('follow_the_rhythm_soumettreTopicNews')}}"><button style='margin-left: 32px;' type="button" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Nouveau topic</button></a></h2></div>*/
/*             {% if tabTopics is empty %}*/
/*             <div class="container">*/
/* 	            <div class ="row">*/
/* 		            <div class ="col-lg-12">*/
/* 			            <h5>Aucun topic pour le moment.</h5>*/
/* 		            </div>*/
/* 	            </div>*/
/*             </div>*/
/*             {% else %}*/
/*             <div class="container">*/
/* 	            <div class ="row">*/
/* 		            <div class ="col-lg-6">*/
/* 			            <h4>Sujet du topic</h4>*/
/* 		            </div>*/
/* 		            <div class ="col-lg-2">*/
/* 			            <h4 align="center">Créateur</h4>*/
/* 		            </div>*/
/* 		            <div class ="col-lg-1">*/
/* 			            <h4 align="center">Messages</h4> */
/* 		            </div>*/
/* 		            <div class ="col-lg-3">*/
/* 			            <h4 align="center">Dernier message le</h4>*/
/* 		            </div>*/
/* 	            </div>*/
/*             </div>*/
/*             {% for topicCourant in tabTopics %}*/
/*                 <div class="container">*/
/* 	            <div class ="row">*/
/* 		            <div class ="col-lg-6">*/
/* 			            <a href="{{path('follow_the_rhythm_messages',{'topicId':topicCourant.id, 'page':1, 'nbParPage':25})}}"><h5>{{topicCourant.titre}}</h5></a>*/
/* 		            </div>*/
/* 		            <div class ="col-lg-2">*/
/* 			            <a href="{{path('follow_the_rhythm_pageUtilisateur',{'id':topicCourant.utilisateur.id})}}"><h5 align="center">{{topicCourant.utilisateur.username}}</h5></a>*/
/* 		            </div>*/
/* 		            <div class ="col-lg-1">*/
/* 			            <h5 align="center">{{tabNbMessages[topicCourant.id]}}</h5> */
/* 		            </div>*/
/* 		            <div class ="col-lg-3">*/
/* 			            <h5 align="center">{% if tabNbMessages[topicCourant.id] != 0 %}{{dateD[topicCourant.id]|date('d-m-Y') }} à {{dateD[topicCourant.id]|date('H.i')}}{% endif %}</h5>*/
/* 		            </div>*/
/* 	            </div>*/
/*             </div>*/
/*             {% endfor %}*/
/*             {% endif %}*/
/*             <a title="Renvoie à l'accueil du forum." href="/follow_the_rhythm/web/app_dev.php/accueilaccueilForum"><button style='margin-top: 32px;' type="button" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Retour au forum</button></a><a title="Renvoie à l'accueil de Follow the Rhythm." href="/follow_the_rhythm/web/app_dev.php/accueil/1/1"><button style='margin-left: 8px; margin-top: 32px;' type="button" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Retour à l'accueil</button></a>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/*     */
/* {% endblock %}*/
