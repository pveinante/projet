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
        $__internal_46a57b1e8cd5fd899a14f02f4c4d7358ede5002ff9ba9f3b1499f07948cf90c5 = $this->env->getExtension("native_profiler");
        $__internal_46a57b1e8cd5fd899a14f02f4c4d7358ede5002ff9ba9f3b1499f07948cf90c5->enter($__internal_46a57b1e8cd5fd899a14f02f4c4d7358ede5002ff9ba9f3b1499f07948cf90c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "follow_the_rhythmSymfonyBundle:Symfony:modifierSupprimerActualite.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46a57b1e8cd5fd899a14f02f4c4d7358ede5002ff9ba9f3b1499f07948cf90c5->leave($__internal_46a57b1e8cd5fd899a14f02f4c4d7358ede5002ff9ba9f3b1499f07948cf90c5_prof);

    }

    // line 3
    public function block_contenuCentral($context, array $blocks = array())
    {
        $__internal_48f08edaaca3f5f07cea0c6d2d84c67c44b705adc1fbfa4f29db4afc046c4b63 = $this->env->getExtension("native_profiler");
        $__internal_48f08edaaca3f5f07cea0c6d2d84c67c44b705adc1fbfa4f29db4afc046c4b63->enter($__internal_48f08edaaca3f5f07cea0c6d2d84c67c44b705adc1fbfa4f29db4afc046c4b63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenuCentral"));

        // line 4
        echo "<div class=\"container\">

<div class=\"panel panel-default\">
    <div class=\"panel-heading\"><h2><b>Sélectionnez l'actualité à modifier / supprimer</b></h2>
    </div>
        <div class=\"row\">
            <div class=\"col-lg-12\">
<!--\t<div class =\"table table-striped table-hover\">-->
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tabActualites"]) ? $context["tabActualites"] : $this->getContext($context, "tabActualites")));
        foreach ($context['_seq'] as $context["_key"] => $context["actualiteCourante"]) {
            // line 13
            echo "             <div class=\"list-group-item\"><h2><label>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["actualiteCourante"], "titre", array()), "html", null, true);
            echo "</label></h2>
        <!-- si pas d'artiste concerné -->
          ";
            // line 15
            if (twig_test_empty($this->getAttribute($context["actualiteCourante"], "artiste", array()))) {
                // line 16
                echo "              <p><label>Pas d'artiste concerné</label></p>
          ";
            } else {
                // line 18
                echo "              <p><label>
              ";
                // line 19
                if ((twig_length_filter($this->env, $this->getAttribute($context["actualiteCourante"], "artiste", array())) > 1)) {
                    // line 20
                    echo "          Artistes concernés:
          ";
                } else {
                    // line 22
                    echo "          Artiste concerné:
          ";
                }
                // line 23
                echo "   
            ";
                // line 24
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
                    // line 25
                    echo "             <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("follow_the_rhythm_pageArtiste", array("id" => $this->getAttribute($context["list"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["list"], "nomDeScene", array()), "html", null, true);
                    echo "</a>";
                    if ( !$this->getAttribute($context["loop"], "last", array())) {
                        echo ",";
                    }
                    // line 26
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
                // line 27
                echo "              </label></p>
          ";
            }
            // line 29
            echo "        <!-- si pas de concert concerné -->
          ";
            // line 30
            if (twig_test_empty($this->getAttribute($context["actualiteCourante"], "concert", array()))) {
                // line 31
                echo "              <p><label>Pas de concert lié</label></p>
          ";
            } else {
                // line 33
                echo "              <p><label>Concert lié : <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("follow_the_rhythm_pageConcert", array("id" => $this->getAttribute($this->getAttribute($context["actualiteCourante"], "concert", array()), "id", array()))), "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["actualiteCourante"], "concert", array()), "nom", array()), "html", null, true);
                echo "</a> </label></p>
              <p><label>Lieu : ";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["actualiteCourante"], "concert", array()), "lieu", array()), "html", null, true);
                echo "</label></p>
          ";
            }
            // line 36
            echo "          <p align=\"justify\"><label>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["actualiteCourante"], "description", array()), "html", null, true);
            echo "</label></p>
          <p><label>Date : ";
            // line 37
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["actualiteCourante"], "dateActualite", array()), "d/m/Y"), "html", null, true);
            echo "</label></p>
        <!--Si coup(s) de coeur > 1-->
          ";
            // line 39
            if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                // line 40
                echo "            ";
                if (($this->getAttribute($context["actualiteCourante"], "nbCoupDeCoeurs", array()) > 1)) {
                    // line 41
                    echo "                <a href='' title=\"J'adore cet article !\"><button type=\"button\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-heart\"></span> Coup de cœur</button></a> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["actualiteCourante"], "nbCoupDeCoeurs", array()), "html", null, true);
                    echo " Coups de cœur 
            ";
                } else {
                    // line 43
                    echo "                <a href='' title=\"J'adore cet article !\"><button type=\"button\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-heart\"></span> Coup de cœur</button></a> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["actualiteCourante"], "nbCoupDeCoeurs", array()), "html", null, true);
                    echo " Coup de cœur
            ";
                }
                // line 44
                echo "   
          ";
            } else {
                // line 46
                echo "            ";
                if (($this->getAttribute($context["actualiteCourante"], "nbCoupDeCoeurs", array()) > 1)) {
                    // line 47
                    echo "                <a href='' title=\"J'adore cet article !\"><button type=\"button\" class=\"btn btn-primary\"  onclick=\"isNotConnected();\"><span class=\"glyphicon glyphicon-heart\"></span> Coup de cœur</button></a> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["actualiteCourante"], "nbCoupDeCoeurs", array()), "html", null, true);
                    echo " Coups de cœur 
            ";
                } else {
                    // line 49
                    echo "                <a href='' title=\"J'adore cet article !\"><button type=\"button\" class=\"btn btn-primary\"  onclick=\"isNotConnected();\"><span class=\"glyphicon glyphicon-heart\"></span> Coup de cœur</button></a> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["actualiteCourante"], "nbCoupDeCoeurs", array()), "html", null, true);
                    echo " Coup de cœur
            ";
                }
                // line 50
                echo "   
          ";
            }
            // line 52
            echo "                 <div align=\"right\">
                 <tr>
                    <td>
                        <a class=\"btn btn-primary btn-xs\" type=\"button\" href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("follow_the_rhythm_modifierActualite", array("id" => $this->getAttribute($context["actualiteCourante"], "id", array()))), "html", null, true);
            echo "\">";
            // line 56
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
        // line 68
        echo "    </div>
    </div>
</div>
</div>
";
        
        $__internal_48f08edaaca3f5f07cea0c6d2d84c67c44b705adc1fbfa4f29db4afc046c4b63->leave($__internal_48f08edaaca3f5f07cea0c6d2d84c67c44b705adc1fbfa4f29db4afc046c4b63_prof);

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
        return array (  222 => 68,  205 => 56,  202 => 55,  197 => 52,  193 => 50,  187 => 49,  181 => 47,  178 => 46,  174 => 44,  168 => 43,  162 => 41,  159 => 40,  157 => 39,  152 => 37,  147 => 36,  142 => 34,  135 => 33,  131 => 31,  129 => 30,  126 => 29,  122 => 27,  108 => 26,  99 => 25,  82 => 24,  79 => 23,  75 => 22,  71 => 20,  69 => 19,  66 => 18,  62 => 16,  60 => 15,  54 => 13,  50 => 12,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "::vueMere.html.twig" %} */
/* */
/* {% block contenuCentral %}*/
/* <div class="container">*/
/* */
/* <div class="panel panel-default">*/
/*     <div class="panel-heading"><h2><b>Sélectionnez l'actualité à modifier / supprimer</b></h2>*/
/*     </div>*/
/*         <div class="row">*/
/*             <div class="col-lg-12">*/
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
/*           {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*             {% if actualiteCourante.nbCoupDeCoeurs > 1 %}*/
/*                 <a href='' title="J'adore cet article !"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-heart"></span> Coup de cœur</button></a> {{actualiteCourante.nbCoupDeCoeurs}} Coups de cœur */
/*             {% else %}*/
/*                 <a href='' title="J'adore cet article !"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-heart"></span> Coup de cœur</button></a> {{actualiteCourante.nbCoupDeCoeurs}} Coup de cœur*/
/*             {% endif %}   */
/*           {% else %}*/
/*             {% if actualiteCourante.nbCoupDeCoeurs > 1 %}*/
/*                 <a href='' title="J'adore cet article !"><button type="button" class="btn btn-primary"  onclick="isNotConnected();"><span class="glyphicon glyphicon-heart"></span> Coup de cœur</button></a> {{actualiteCourante.nbCoupDeCoeurs}} Coups de cœur */
/*             {% else %}*/
/*                 <a href='' title="J'adore cet article !"><button type="button" class="btn btn-primary"  onclick="isNotConnected();"><span class="glyphicon glyphicon-heart"></span> Coup de cœur</button></a> {{actualiteCourante.nbCoupDeCoeurs}} Coup de cœur*/
/*             {% endif %}   */
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
/*     </div>*/
/* </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
/* */
