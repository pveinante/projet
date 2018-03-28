<?php

/* follow_the_rhythmSymfonyBundle:Symfony:modifierSupprimerActualite.html.twig */
class __TwigTemplate_760ea7b9cdb61e922c34936fb9f15941fada9769a2617e979ae7f7a42b48ca9f extends Twig_Template
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
        $__internal_58a17218b0cacf5a9fcdfa68514c0f55c318b8c67cb17f591719d78c5cd62fde = $this->env->getExtension("native_profiler");
        $__internal_58a17218b0cacf5a9fcdfa68514c0f55c318b8c67cb17f591719d78c5cd62fde->enter($__internal_58a17218b0cacf5a9fcdfa68514c0f55c318b8c67cb17f591719d78c5cd62fde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "follow_the_rhythmSymfonyBundle:Symfony:modifierSupprimerActualite.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58a17218b0cacf5a9fcdfa68514c0f55c318b8c67cb17f591719d78c5cd62fde->leave($__internal_58a17218b0cacf5a9fcdfa68514c0f55c318b8c67cb17f591719d78c5cd62fde_prof);

    }

    // line 3
    public function block_contenuCentral($context, array $blocks = array())
    {
        $__internal_dd562ba4ceb7ba201a72ae5cb94921f26989ac5beb0f00d0229099ccf307b0b1 = $this->env->getExtension("native_profiler");
        $__internal_dd562ba4ceb7ba201a72ae5cb94921f26989ac5beb0f00d0229099ccf307b0b1->enter($__internal_dd562ba4ceb7ba201a72ae5cb94921f26989ac5beb0f00d0229099ccf307b0b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenuCentral"));

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
                echo "              <p><label>
              ";
                // line 17
                if ((twig_length_filter($this->env, $this->getAttribute($context["actualiteCourante"], "artiste", array())) > 1)) {
                    // line 18
                    echo "          Artistes concernés:
          ";
                } else {
                    // line 20
                    echo "          Artiste concerné:
          ";
                }
                // line 21
                echo "   
            ";
                // line 22
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["actualiteCourante"], "artiste", array()));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["list"]) {
                    // line 23
                    echo "             <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("follow_the_rhythm_pageArtiste", array("id" => $this->getAttribute($context["list"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["list"], "nomDeScene", array()), "html", null, true);
                    echo "</a>";
                    if ( !$this->getAttribute($context["loop"], "last", array())) {
                        echo ",";
                    }
                    // line 24
                    echo "          ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['list'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 25
                echo "              </label></p>
          ";
            }
            // line 27
            echo "        <!-- si pas de concert concerné -->
          ";
            // line 28
            if (twig_test_empty($this->getAttribute($context["actualiteCourante"], "concert", array()))) {
                // line 29
                echo "              <p><label>Pas de concert lié</label></p>
          ";
            } else {
                // line 31
                echo "              <p><label>Concert lié : <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("follow_the_rhythm_pageConcert", array("id" => $this->getAttribute($this->getAttribute($context["actualiteCourante"], "concert", array()), "id", array()))), "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["actualiteCourante"], "concert", array()), "nom", array()), "html", null, true);
                echo "</a> </label></p>
              <p><label>Lieu : ";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["actualiteCourante"], "concert", array()), "lieu", array()), "html", null, true);
                echo "</label></p>
          ";
            }
            // line 34
            echo "          <p align=\"justify\"><label>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["actualiteCourante"], "description", array()), "html", null, true);
            echo "</label></p>
          <p><label>Date : ";
            // line 35
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["actualiteCourante"], "dateActualite", array()), "d/m/Y"), "html", null, true);
            echo "</label></p>
        <!--Si coup(s) de coeur > 1-->
          ";
            // line 37
            if (($this->getAttribute($context["actualiteCourante"], "nbCoupDeCoeurs", array()) > 1)) {
                // line 38
                echo "              <button type=\"button\" class=\"btn btn-primary\"  onclick=\"isNotConnected();\"><span class=\"glyphicon glyphicon-heart\"></span> Coup de cœur</button> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["actualiteCourante"], "nbCoupDeCoeurs", array()), "html", null, true);
                echo " Coups de cœur 
          ";
            } else {
                // line 40
                echo "              <button type=\"button\" class=\"btn btn-primary\"  onclick=\"isNotConnected();\"><span class=\"glyphicon glyphicon-heart\"></span> Coup de cœur</button> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["actualiteCourante"], "nbCoupDeCoeurs", array()), "html", null, true);
                echo " Coup de cœur
          ";
            }
            // line 41
            echo "   
          ";
            // line 42
            if (twig_test_empty($this->getAttribute($context["actualiteCourante"], "moderateur", array()))) {
                // line 43
                echo "          ";
            } else {
                // line 44
                echo "             <!-- <p><label>Soumis par : ";
                echo "</label></p> -->
          ";
            }
            // line 46
            echo "                 <div align=\"right\">
                 <tr>
                    <td>
                        <a class=\"btn btn-primary btn-xs\" type=\"button\" href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("follow_the_rhythm_modifierActualite", array("id" => $this->getAttribute($context["actualiteCourante"], "id", array()))), "html", null, true);
            echo "\">";
            // line 50
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
        // line 62
        echo "    </div>
</div>
";
        
        $__internal_dd562ba4ceb7ba201a72ae5cb94921f26989ac5beb0f00d0229099ccf307b0b1->leave($__internal_dd562ba4ceb7ba201a72ae5cb94921f26989ac5beb0f00d0229099ccf307b0b1_prof);

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
        return array (  207 => 62,  190 => 50,  187 => 49,  182 => 46,  177 => 44,  174 => 43,  172 => 42,  169 => 41,  163 => 40,  157 => 38,  155 => 37,  150 => 35,  145 => 34,  140 => 32,  133 => 31,  129 => 29,  127 => 28,  124 => 27,  120 => 25,  106 => 24,  97 => 23,  80 => 22,  77 => 21,  73 => 20,  69 => 18,  67 => 17,  64 => 16,  60 => 14,  58 => 13,  52 => 11,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
/*               <p><label>*/
/*               {% if actualiteCourante.artiste|length > 1 %}*/
/*           Artistes concernés:*/
/*           {% else %}*/
/*           Artiste concerné:*/
/*           {% endif %}   */
/*             {% for list in actualiteCourante.artiste %}*/
/*              <a href="{{path('follow_the_rhythm_pageArtiste',{'id':list.id})}}">{{list.nomDeScene}}</a>{% if not loop.last %},{% endif %}*/
/*           {% endfor %}*/
/*               </label></p>*/
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
