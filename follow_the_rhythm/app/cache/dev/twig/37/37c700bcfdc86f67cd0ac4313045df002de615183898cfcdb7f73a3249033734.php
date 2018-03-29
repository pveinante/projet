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
        $__internal_0cbbafd011c212e19f257fad6dcc32a4caaa2409052113fa79271ad7e653b81e = $this->env->getExtension("native_profiler");
        $__internal_0cbbafd011c212e19f257fad6dcc32a4caaa2409052113fa79271ad7e653b81e->enter($__internal_0cbbafd011c212e19f257fad6dcc32a4caaa2409052113fa79271ad7e653b81e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "follow_the_rhythmSymfonyBundle:Symfony:recherche.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0cbbafd011c212e19f257fad6dcc32a4caaa2409052113fa79271ad7e653b81e->leave($__internal_0cbbafd011c212e19f257fad6dcc32a4caaa2409052113fa79271ad7e653b81e_prof);

    }

    // line 3
    public function block_contenuCentral($context, array $blocks = array())
    {
        $__internal_9b4f27f8cefdd1995e35b6154518e43c0588fca6b60e804df7ee30ee36cdb8cb = $this->env->getExtension("native_profiler");
        $__internal_9b4f27f8cefdd1995e35b6154518e43c0588fca6b60e804df7ee30ee36cdb8cb->enter($__internal_9b4f27f8cefdd1995e35b6154518e43c0588fca6b60e804df7ee30ee36cdb8cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenuCentral"));

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
        <div class=\"panel-heading\"><h2><b><span class=\"glyphicon glyphicon-search\"></span> Résultat de la recherche pour \"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["recherche"]) ? $context["recherche"] : $this->getContext($context, "recherche")), "html", null, true);
        echo "\"</b><a title=\"Renvoie à l'accueil de Follow the Rhythm.\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("follow_the_rhythm_accueil", array("page" => 1, "sens" => 2, "nbParPage" => 25)), "html", null, true);
        echo "\"><button style='margin-left: 32px;' type=\"button\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-arrow-left\"></span> Retour à l'accueil</button></a></h2></div>
        <div class=\"row\">
        \t<div class=\"col-lg-12\">
               <div class=\"container\">
                    <div class =\"row\">
        \t            <div class =\"col-lg-3\">
    \t\t\t            <label><b><h3>Artistes</h3></b>
    \t\t\t            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["resultRechercheArtiste"]) ? $context["resultRechercheArtiste"] : $this->getContext($context, "resultRechercheArtiste")));
        foreach ($context['_seq'] as $context["_key"] => $context["artisteCourant"]) {
            // line 23
            echo "        \t\t                <p><a title=\"Aller à la page de ";
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
        // line 25
        echo "        \t\t            </label>
    \t\t            </div>
        \t        </div>
                </div>
                <div class=\"container\">
                    <div class =\"row\">
    \t\t            <div class =\"col-lg-3\">
    \t\t\t            <label><b><h3>Concerts</h3></b>
    \t\t\t            ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["resultRechercheConcert"]) ? $context["resultRechercheConcert"] : $this->getContext($context, "resultRechercheConcert")));
        foreach ($context['_seq'] as $context["_key"] => $context["concertCourant"]) {
            // line 34
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
        // line 36
        echo "        \t\t            </label>
    \t\t            </div>
    \t            </div>
                </div>
                <div class=\"container\">
                    <div class =\"row\">
        \t            <div class =\"col-lg-3\">
        \t\t            <label><b><h3>Topics</h3></b>
        \t\t            ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["resultRechercheTopic"]) ? $context["resultRechercheTopic"] : $this->getContext($context, "resultRechercheTopic")));
        foreach ($context['_seq'] as $context["_key"] => $context["topicCourant"]) {
            // line 45
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
        // line 47
        echo "        \t\t            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
";
        
        $__internal_9b4f27f8cefdd1995e35b6154518e43c0588fca6b60e804df7ee30ee36cdb8cb->leave($__internal_9b4f27f8cefdd1995e35b6154518e43c0588fca6b60e804df7ee30ee36cdb8cb_prof);

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
        return array (  132 => 47,  121 => 45,  117 => 44,  107 => 36,  96 => 34,  92 => 33,  82 => 25,  69 => 23,  65 => 22,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
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
/*         <div class="panel-heading"><h2><b><span class="glyphicon glyphicon-search"></span> Résultat de la recherche pour "{{ recherche }}"</b><a title="Renvoie à l'accueil de Follow the Rhythm." href="{{path('follow_the_rhythm_accueil',{'page': 1, 'sens': 2, 'nbParPage': 25})}}"><button style='margin-left: 32px;' type="button" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Retour à l'accueil</button></a></h2></div>*/
/*         <div class="row">*/
/*         	<div class="col-lg-12">*/
/*                <div class="container">*/
/*                     <div class ="row">*/
/*         	            <div class ="col-lg-3">*/
/*     			            <label><b><h3>Artistes</h3></b>*/
/*     			            {% for artisteCourant in resultRechercheArtiste %}*/
/*         		                <p><a title="Aller à la page de {{artisteCourant}}." href="{{path('follow_the_rhythm_pageArtiste',{'id':artisteCourant.id})}}">{{artisteCourant.nomDeScene}}</a></p>*/
/*         		            {% endfor %}*/
/*         		            </label>*/
/*     		            </div>*/
/*         	        </div>*/
/*                 </div>*/
/*                 <div class="container">*/
/*                     <div class ="row">*/
/*     		            <div class ="col-lg-3">*/
/*     			            <label><b><h3>Concerts</h3></b>*/
/*     			            {% for concertCourant in resultRechercheConcert %}*/
/*         		                <p><a title="Aller à la page du concert." href="{{path('follow_the_rhythm_pageConcert',{'id':concertCourant.id})}}" >{{concertCourant}}</a></p>*/
/*         		            {% endfor %}*/
/*         		            </label>*/
/*     		            </div>*/
/*     	            </div>*/
/*                 </div>*/
/*                 <div class="container">*/
/*                     <div class ="row">*/
/*         	            <div class ="col-lg-3">*/
/*         		            <label><b><h3>Topics</h3></b>*/
/*         		            {% for topicCourant in resultRechercheTopic %}*/
/*         		                <p><a href="{{path('follow_the_rhythm_messages',{'topicId':topicCourant.id, 'page':1, 'nbParPage':25})}}">{{topicCourant}}</a></p>*/
/*         		            {% endfor %}*/
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
