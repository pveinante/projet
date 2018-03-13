<?php

/* follow_the_rhythmSymfonyBundle:Symfony:modifierSupprimerActualite.html.twig */
class __TwigTemplate_54d02fcf586cf69f4e6bb7ac486e4b7d10a94355a3b6924362673575e64cc706 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::vueMere.html.twig", "follow_the_rhythmSymfonyBundle:Symfony:modifierSupprimerActualite.html.twig", 1);
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
        $__internal_c0a6c52c3e1f7e6fbc776a55e77ab6647e396270cda27fed96c3edfdd8f09402 = $this->env->getExtension("native_profiler");
        $__internal_c0a6c52c3e1f7e6fbc776a55e77ab6647e396270cda27fed96c3edfdd8f09402->enter($__internal_c0a6c52c3e1f7e6fbc776a55e77ab6647e396270cda27fed96c3edfdd8f09402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "follow_the_rhythmSymfonyBundle:Symfony:modifierSupprimerActualite.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0a6c52c3e1f7e6fbc776a55e77ab6647e396270cda27fed96c3edfdd8f09402->leave($__internal_c0a6c52c3e1f7e6fbc776a55e77ab6647e396270cda27fed96c3edfdd8f09402_prof);

    }

    // line 3
    public function block_contenuCentral($context, array $blocks = array())
    {
        $__internal_30a6f19459720fef17fc36ee76af0dc2699832ebafa12b8c1c724bc04a808eff = $this->env->getExtension("native_profiler");
        $__internal_30a6f19459720fef17fc36ee76af0dc2699832ebafa12b8c1c724bc04a808eff->enter($__internal_30a6f19459720fef17fc36ee76af0dc2699832ebafa12b8c1c724bc04a808eff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenuCentral"));

        // line 4
        echo "<div class=\"container\">
    <div class=\"row\">
<div class=\"panel panel-default\">
    <div class=\"panel-heading\"><h2><b>Sélectionnez l'actualité à modifier / supprimer</b></h2>
    </div>
<!--\t<div class =\"table table-striped table-hover\">-->
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tabActualites"]) ? $context["tabActualites"] : $this->getContext($context, "tabActualites")));
        foreach ($context['_seq'] as $context["_key"] => $context["actualiteCourante"]) {
            // line 11
            echo "             <div class=\"list-group-item\"><h2><label>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["actualiteCourante"], "titre", array()), "html", null, true);
            echo "</label></h2>
        <!-- si pas d'artiste concerné -->
          ";
            // line 13
            if (twig_test_empty($this->getAttribute($context["actualiteCourante"], "artiste", array()))) {
                // line 14
                echo "              <p><label>Pas d'artiste concerné</label></p>
          ";
            } else {
                // line 16
                echo "              <p><label>Artiste concerné : <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("follow_the_rhythm_pageArtiste", array("id" => $this->getAttribute($this->getAttribute($context["actualiteCourante"], "artiste", array()), "id", array()))), "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["actualiteCourante"], "artiste", array()), "nomDeScene", array()), "html", null, true);
                echo "</a> </label></p>
          ";
            }
            // line 18
            echo "        <!-- si pas de concert concerné -->
          ";
            // line 19
            if (twig_test_empty($this->getAttribute($context["actualiteCourante"], "concert", array()))) {
                // line 20
                echo "              <p><label>Pas de concert lié</label></p>
          ";
            } else {
                // line 22
                echo "              <p><label>Concert lié : <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("follow_the_rhythm_pageConcert", array("id" => $this->getAttribute($this->getAttribute($context["actualiteCourante"], "concert", array()), "id", array()))), "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["actualiteCourante"], "concert", array()), "nom", array()), "html", null, true);
                echo "</a> </label></p>
              <p><label>Lieu : ";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["actualiteCourante"], "concert", array()), "lieu", array()), "html", null, true);
                echo "</label></p>
          ";
            }
            // line 25
            echo "          <p align=\"justify\"><label>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["actualiteCourante"], "description", array()), "html", null, true);
            echo "</label></p>
          <p><label>Date : ";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["actualiteCourante"], "dateActualite", array()), "d/m/Y"), "html", null, true);
            echo "</label></p>
        <!--Si coup(s) de coeur > 1-->
          ";
            // line 28
            if (($this->getAttribute($context["actualiteCourante"], "nbCoupDeCoeurs", array()) > 1)) {
                // line 29
                echo "              <button type=\"button\" class=\"btn btn-primary\"  onclick=\"isNotConnected();\"><span class=\"glyphicon glyphicon-heart\"></span> Coup de cœur</button> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["actualiteCourante"], "nbCoupDeCoeurs", array()), "html", null, true);
                echo " Coups de cœur 
          ";
            } else {
                // line 31
                echo "              <button type=\"button\" class=\"btn btn-primary\"  onclick=\"isNotConnected();\"><span class=\"glyphicon glyphicon-heart\"></span> Coup de cœur</button> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["actualiteCourante"], "nbCoupDeCoeurs", array()), "html", null, true);
                echo " Coup de cœur
          ";
            }
            // line 32
            echo "   
          ";
            // line 33
            if (twig_test_empty($this->getAttribute($context["actualiteCourante"], "moderateur", array()))) {
                // line 34
                echo "          ";
            } else {
                // line 35
                echo "             <!-- <p><label>Soumis par : ";
                echo "</label></p> -->
          ";
            }
            // line 37
            echo "                 <div align=\"right\">
                 <tr>
                    <td>
                        <a class=\"btn btn-primary btn-xs\" type=\"button\" href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("follow_the_rhythm_modifierActualite", array("id" => $this->getAttribute($context["actualiteCourante"], "id", array()))), "html", null, true);
            echo "\">";
            // line 41
            echo "                        <span class=\"glyphicon glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span> Modifier 
                        </a>
                    </td>
                    <td>
                        <a class=\"btn btn-danger btn-xs\" type=\"button\" href=\"#\">
                        <span class=\"glyphicon glyphicon glyphicon-remove\" aria-hidden=\"true\"></span> Supprimer
                        </a>
                    </td>
                </tr>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actualiteCourante'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "    </div>
</div>
";
        
        $__internal_30a6f19459720fef17fc36ee76af0dc2699832ebafa12b8c1c724bc04a808eff->leave($__internal_30a6f19459720fef17fc36ee76af0dc2699832ebafa12b8c1c724bc04a808eff_prof);

    }

    public function getTemplateName()
    {
        return "follow_the_rhythmSymfonyBundle:Symfony:modifierSupprimerActualite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 53,  138 => 41,  135 => 40,  130 => 37,  125 => 35,  122 => 34,  120 => 33,  117 => 32,  111 => 31,  105 => 29,  103 => 28,  98 => 26,  93 => 25,  88 => 23,  81 => 22,  77 => 20,  75 => 19,  72 => 18,  64 => 16,  60 => 14,  58 => 13,  52 => 11,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "::vueMere.html.twig" %} */
/* */
/* {% block contenuCentral %}*/
/* <div class="container">*/
/*     <div class="row">*/
/* <div class="panel panel-default">*/
/*     <div class="panel-heading"><h2><b>Sélectionnez l'actualité à modifier / supprimer</b></h2>*/
/*     </div>*/
/* <!--	<div class ="table table-striped table-hover">-->*/
/*         {% for actualiteCourante in tabActualites %}*/
/*              <div class="list-group-item"><h2><label>{{actualiteCourante.titre}}</label></h2>*/
/*         <!-- si pas d'artiste concerné -->*/
/*           {% if actualiteCourante.artiste is empty %}*/
/*               <p><label>Pas d'artiste concerné</label></p>*/
/*           {% else %}*/
/*               <p><label>Artiste concerné : <a href="{{path('follow_the_rhythm_pageArtiste',{'id':actualiteCourante.artiste.id})}}" >{{actualiteCourante.artiste.nomDeScene}}</a> </label></p>*/
/*           {% endif %}*/
/*         <!-- si pas de concert concerné -->*/
/*           {% if actualiteCourante.concert is empty %}*/
/*               <p><label>Pas de concert lié</label></p>*/
/*           {% else %}*/
/*               <p><label>Concert lié : <a href="{{path('follow_the_rhythm_pageConcert',{'id':actualiteCourante.concert.id})}}" >{{actualiteCourante.concert.nom}}</a> </label></p>*/
/*               <p><label>Lieu : {{actualiteCourante.concert.lieu}}</label></p>*/
/*           {% endif %}*/
/*           <p align="justify"><label>{{actualiteCourante.description}}</label></p>*/
/*           <p><label>Date : {{actualiteCourante.dateActualite|date("d/m/Y")}}</label></p>*/
/*         <!--Si coup(s) de coeur > 1-->*/
/*           {% if actualiteCourante.nbCoupDeCoeurs > 1 %}*/
/*               <button type="button" class="btn btn-primary"  onclick="isNotConnected();"><span class="glyphicon glyphicon-heart"></span> Coup de cœur</button> {{actualiteCourante.nbCoupDeCoeurs}} Coups de cœur */
/*           {% else %}*/
/*               <button type="button" class="btn btn-primary"  onclick="isNotConnected();"><span class="glyphicon glyphicon-heart"></span> Coup de cœur</button> {{actualiteCourante.nbCoupDeCoeurs}} Coup de cœur*/
/*           {% endif %}   */
/*           {% if actualiteCourante.moderateur is empty %}*/
/*           {% else %}*/
/*              <!-- <p><label>Soumis par : {#actualiteCourante.moderateur.id#}</label></p> -->*/
/*           {% endif %}*/
/*                  <div align="right">*/
/*                  <tr>*/
/*                     <td>*/
/*                         <a class="btn btn-primary btn-xs" type="button" href="{{path('follow_the_rhythm_modifierActualite',{'id':actualiteCourante.id})}}">{##}*/
/*                         <span class="glyphicon glyphicon glyphicon-pencil" aria-hidden="true"></span> Modifier */
/*                         </a>*/
/*                     </td>*/
/*                     <td>*/
/*                         <a class="btn btn-danger btn-xs" type="button" href="#">*/
/*                         <span class="glyphicon glyphicon glyphicon-remove" aria-hidden="true"></span> Supprimer*/
/*                         </a>*/
/*                     </td>*/
/*                 </tr>*/
/*                 </div>*/
/*             </div>*/
/*         {% endfor%}*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
/* */
