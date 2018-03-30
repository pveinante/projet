<?php

/* follow_the_rhythmSymfonyBundle:Symfony:recherche.html.twig */
class __TwigTemplate_eeb088459987c404f2a7f6cdcd277d556f31a27f37c72c31923ec12b7f7cbbd6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::vueMere.html.twig", "follow_the_rhythmSymfonyBundle:Symfony:recherche.html.twig", 1);
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
        $__internal_b08cb1ffcfdd567c5967841d6edc94ed83ac330366bcdcee3c9d9eea468090fb = $this->env->getExtension("native_profiler");
        $__internal_b08cb1ffcfdd567c5967841d6edc94ed83ac330366bcdcee3c9d9eea468090fb->enter($__internal_b08cb1ffcfdd567c5967841d6edc94ed83ac330366bcdcee3c9d9eea468090fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "follow_the_rhythmSymfonyBundle:Symfony:recherche.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b08cb1ffcfdd567c5967841d6edc94ed83ac330366bcdcee3c9d9eea468090fb->leave($__internal_b08cb1ffcfdd567c5967841d6edc94ed83ac330366bcdcee3c9d9eea468090fb_prof);

    }

    // line 3
    public function block_contenuCentral($context, array $blocks = array())
    {
        $__internal_a860a4221b87ff3dd6e881ddeb6b7587493900934b6a099a1cbba83e61258ed4 = $this->env->getExtension("native_profiler");
        $__internal_a860a4221b87ff3dd6e881ddeb6b7587493900934b6a099a1cbba83e61258ed4->enter($__internal_a860a4221b87ff3dd6e881ddeb6b7587493900934b6a099a1cbba83e61258ed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenuCentral"));

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
        ";
        // line 15
        if ((((twig_length_filter($this->env, (isset($context["resultRechercheArtiste"]) ? $context["resultRechercheArtiste"] : $this->getContext($context, "resultRechercheArtiste"))) + twig_length_filter($this->env, (isset($context["resultRechercheConcert"]) ? $context["resultRechercheConcert"] : $this->getContext($context, "resultRechercheConcert")))) + twig_length_filter($this->env, (isset($context["resultRechercheTopic"]) ? $context["resultRechercheTopic"] : $this->getContext($context, "resultRechercheTopic")))) > 1)) {
            // line 16
            echo "            <div class=\"panel-heading\"><h2><b><span class=\"glyphicon glyphicon-search\"></span> Résultat de la recherche pour \"";
            echo twig_escape_filter($this->env, (isset($context["recherche"]) ? $context["recherche"] : $this->getContext($context, "recherche")), "html", null, true);
            echo "\" (";
            echo twig_escape_filter($this->env, ((twig_length_filter($this->env, (isset($context["resultRechercheArtiste"]) ? $context["resultRechercheArtiste"] : $this->getContext($context, "resultRechercheArtiste"))) + twig_length_filter($this->env, (isset($context["resultRechercheConcert"]) ? $context["resultRechercheConcert"] : $this->getContext($context, "resultRechercheConcert")))) + twig_length_filter($this->env, (isset($context["resultRechercheTopic"]) ? $context["resultRechercheTopic"] : $this->getContext($context, "resultRechercheTopic")))), "html", null, true);
            echo " resultats trouvés)</b></h2></div>
        ";
        } else {
            // line 18
            echo "            <div class=\"panel-heading\"><h2><b><span class=\"glyphicon glyphicon-search\"></span> Résultat de la recherche pour \"";
            echo twig_escape_filter($this->env, (isset($context["recherche"]) ? $context["recherche"] : $this->getContext($context, "recherche")), "html", null, true);
            echo "\" (";
            echo twig_escape_filter($this->env, ((twig_length_filter($this->env, (isset($context["resultRechercheArtiste"]) ? $context["resultRechercheArtiste"] : $this->getContext($context, "resultRechercheArtiste"))) + twig_length_filter($this->env, (isset($context["resultRechercheConcert"]) ? $context["resultRechercheConcert"] : $this->getContext($context, "resultRechercheConcert")))) + twig_length_filter($this->env, (isset($context["resultRechercheTopic"]) ? $context["resultRechercheTopic"] : $this->getContext($context, "resultRechercheTopic")))), "html", null, true);
            echo " resultat trouvé)</b></h2></div>
        ";
        }
        // line 20
        echo "        <div class=\"row\">
        \t<div class=\"col-lg-12\">
               <div class=\"container\">
                    <div class =\"row\">
        \t            <div class =\"col-lg-3\">
    \t\t\t            <label><b><h3>Artistes (";
        // line 25
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["resultRechercheArtiste"]) ? $context["resultRechercheArtiste"] : $this->getContext($context, "resultRechercheArtiste"))), "html", null, true);
        echo ")</h3></b>
    \t\t\t            ";
        // line 26
        if (twig_test_empty((isset($context["resultRechercheArtiste"]) ? $context["resultRechercheArtiste"] : $this->getContext($context, "resultRechercheArtiste")))) {
            // line 27
            echo "    \t\t\t                <p>Pas d'artistes trouvés pour \"";
            echo twig_escape_filter($this->env, (isset($context["recherche"]) ? $context["recherche"] : $this->getContext($context, "recherche")), "html", null, true);
            echo "\"</p>
    \t\t\t            ";
        } else {
            // line 29
            echo "        \t\t\t            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["resultRechercheArtiste"]) ? $context["resultRechercheArtiste"] : $this->getContext($context, "resultRechercheArtiste")));
            foreach ($context['_seq'] as $context["_key"] => $context["artisteCourant"]) {
                // line 30
                echo "            \t\t                <p><a title=\"Aller à la page de ";
                echo twig_escape_filter($this->env, $context["artisteCourant"], "html", null, true);
                echo ".\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("follow_the_rhythm_pageArtiste", array("id" => $this->getAttribute($context["artisteCourant"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["artisteCourant"], "nomDeScene", array()), "html", null, true);
                echo "</a></p>
            \t\t            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['artisteCourant'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "        \t\t            ";
        }
        // line 33
        echo "        \t\t            </label>
    \t\t            </div>
        \t        </div>
                </div>
                <div class=\"container\">
                    <div class =\"row\">
    \t\t            <div class =\"col-lg-3\">
    \t\t\t            <label><b><h3>Concerts</h3></b>
    \t\t\t               ";
        // line 41
        if (twig_test_empty((isset($context["resultRechercheConcert"]) ? $context["resultRechercheConcert"] : $this->getContext($context, "resultRechercheConcert")))) {
            // line 42
            echo "    \t\t\t                <p>Pas de concerts trouvés pour \"";
            echo twig_escape_filter($this->env, (isset($context["recherche"]) ? $context["recherche"] : $this->getContext($context, "recherche")), "html", null, true);
            echo "\"</p>
    \t\t\t            ";
        } else {
            // line 44
            echo "    \t\t\t            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["resultRechercheConcert"]) ? $context["resultRechercheConcert"] : $this->getContext($context, "resultRechercheConcert")));
            foreach ($context['_seq'] as $context["_key"] => $context["concertCourant"]) {
                // line 45
                echo "        \t\t                <p><a title=\"Aller à la page du concert.\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("follow_the_rhythm_pageConcert", array("id" => $this->getAttribute($context["concertCourant"], "id", array()))), "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, $context["concertCourant"], "html", null, true);
                echo "</a></p>
        \t\t            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['concertCourant'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "        \t\t            ";
        }
        // line 48
        echo "        \t\t            </label>
    \t\t            </div>
    \t            </div>
                </div>
                <div class=\"container\">
                    <div class =\"row\">
        \t            <div class =\"col-lg-3\">
        \t\t            <label><b><h3>Topics</h3></b>
        \t\t            ";
        // line 56
        if (twig_test_empty((isset($context["resultRechercheTopic"]) ? $context["resultRechercheTopic"] : $this->getContext($context, "resultRechercheTopic")))) {
            // line 57
            echo "    \t\t\t                <p>Pas de topics trouvés pour \"";
            echo twig_escape_filter($this->env, (isset($context["recherche"]) ? $context["recherche"] : $this->getContext($context, "recherche")), "html", null, true);
            echo "\"</p>
    \t\t\t            ";
        } else {
            // line 59
            echo "        \t\t            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["resultRechercheTopic"]) ? $context["resultRechercheTopic"] : $this->getContext($context, "resultRechercheTopic")));
            foreach ($context['_seq'] as $context["_key"] => $context["topicCourant"]) {
                // line 60
                echo "        \t\t                <p><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("follow_the_rhythm_messages", array("topicId" => $this->getAttribute($context["topicCourant"], "id", array()), "page" => 1, "nbParPage" => 25)), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["topicCourant"], "html", null, true);
                echo "</a></p>
        \t\t            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topicCourant'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "        \t\t            ";
        }
        // line 63
        echo "        \t\t            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
";
        
        $__internal_a860a4221b87ff3dd6e881ddeb6b7587493900934b6a099a1cbba83e61258ed4->leave($__internal_a860a4221b87ff3dd6e881ddeb6b7587493900934b6a099a1cbba83e61258ed4_prof);

    }

    public function getTemplateName()
    {
        return "follow_the_rhythmSymfonyBundle:Symfony:recherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 63,  182 => 62,  171 => 60,  166 => 59,  160 => 57,  158 => 56,  148 => 48,  145 => 47,  134 => 45,  129 => 44,  123 => 42,  121 => 41,  111 => 33,  108 => 32,  95 => 30,  90 => 29,  84 => 27,  82 => 26,  78 => 25,  71 => 20,  63 => 18,  55 => 16,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
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
/*     <div class="panel panel-default">*/
/*         {% if (resultRechercheArtiste|length + resultRechercheConcert|length + resultRechercheTopic|length)>1 %}*/
/*             <div class="panel-heading"><h2><b><span class="glyphicon glyphicon-search"></span> Résultat de la recherche pour "{{ recherche }}" ({{resultRechercheArtiste|length + resultRechercheConcert|length + resultRechercheTopic|length}} resultats trouvés)</b></h2></div>*/
/*         {% else %}*/
/*             <div class="panel-heading"><h2><b><span class="glyphicon glyphicon-search"></span> Résultat de la recherche pour "{{ recherche }}" ({{resultRechercheArtiste|length + resultRechercheConcert|length + resultRechercheTopic|length}} resultat trouvé)</b></h2></div>*/
/*         {% endif %}*/
/*         <div class="row">*/
/*         	<div class="col-lg-12">*/
/*                <div class="container">*/
/*                     <div class ="row">*/
/*         	            <div class ="col-lg-3">*/
/*     			            <label><b><h3>Artistes ({{resultRechercheArtiste|length}})</h3></b>*/
/*     			            {% if resultRechercheArtiste is empty %}*/
/*     			                <p>Pas d'artistes trouvés pour "{{ recherche }}"</p>*/
/*     			            {% else %}*/
/*         			            {% for artisteCourant in resultRechercheArtiste %}*/
/*             		                <p><a title="Aller à la page de {{artisteCourant}}." href="{{path('follow_the_rhythm_pageArtiste',{'id':artisteCourant.id})}}">{{artisteCourant.nomDeScene}}</a></p>*/
/*             		            {% endfor %}*/
/*         		            {% endif %}*/
/*         		            </label>*/
/*     		            </div>*/
/*         	        </div>*/
/*                 </div>*/
/*                 <div class="container">*/
/*                     <div class ="row">*/
/*     		            <div class ="col-lg-3">*/
/*     			            <label><b><h3>Concerts</h3></b>*/
/*     			               {% if resultRechercheConcert is empty %}*/
/*     			                <p>Pas de concerts trouvés pour "{{ recherche }}"</p>*/
/*     			            {% else %}*/
/*     			            {% for concertCourant in resultRechercheConcert %}*/
/*         		                <p><a title="Aller à la page du concert." href="{{path('follow_the_rhythm_pageConcert',{'id':concertCourant.id})}}" >{{concertCourant}}</a></p>*/
/*         		            {% endfor %}*/
/*         		            {% endif %}*/
/*         		            </label>*/
/*     		            </div>*/
/*     	            </div>*/
/*                 </div>*/
/*                 <div class="container">*/
/*                     <div class ="row">*/
/*         	            <div class ="col-lg-3">*/
/*         		            <label><b><h3>Topics</h3></b>*/
/*         		            {% if resultRechercheTopic is empty %}*/
/*     			                <p>Pas de topics trouvés pour "{{ recherche }}"</p>*/
/*     			            {% else %}*/
/*         		            {% for topicCourant in resultRechercheTopic %}*/
/*         		                <p><a href="{{path('follow_the_rhythm_messages',{'topicId':topicCourant.id, 'page':1, 'nbParPage':25})}}">{{topicCourant}}</a></p>*/
/*         		            {% endfor %}*/
/*         		            {% endif %}*/
/*         		            </label>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/*     */
/* {% endblock %}*/
