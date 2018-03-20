<?php

/* follow_the_rhythmSymfonyBundle:Symfony:index.html.twig */
class __TwigTemplate_b21d12ff313f30ab4a85cbb14533994408e3e80c3cf51f11500e4d7235fd6aae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::vueMere.html.twig", "follow_the_rhythmSymfonyBundle:Symfony:index.html.twig", 1);
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
        $__internal_7bdce076ea1062d158965ea2547fdf6b839a6140de962ebe07727455ea34c243 = $this->env->getExtension("native_profiler");
        $__internal_7bdce076ea1062d158965ea2547fdf6b839a6140de962ebe07727455ea34c243->enter($__internal_7bdce076ea1062d158965ea2547fdf6b839a6140de962ebe07727455ea34c243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "follow_the_rhythmSymfonyBundle:Symfony:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7bdce076ea1062d158965ea2547fdf6b839a6140de962ebe07727455ea34c243->leave($__internal_7bdce076ea1062d158965ea2547fdf6b839a6140de962ebe07727455ea34c243_prof);

    }

    // line 3
    public function block_contenuCentral($context, array $blocks = array())
    {
        $__internal_3402e1f8cd8396589aa83ba2bb2c47a0d38d85521f9efe1b00dc2269378edb13 = $this->env->getExtension("native_profiler");
        $__internal_3402e1f8cd8396589aa83ba2bb2c47a0d38d85521f9efe1b00dc2269378edb13->enter($__internal_3402e1f8cd8396589aa83ba2bb2c47a0d38d85521f9efe1b00dc2269378edb13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenuCentral"));

        // line 4
        echo "
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"panel panel-default\">
        <div class=\"panel-heading\"><h2><b><span class=\"fa fa-list\"></span> Liste des Actualités</b></h2>
          Options de tri:
          <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("follow_the_rhythm_accueil", array("page" => 1, "sens" => 1)), "html", null, true);
        echo "\"><button type=\"button\" class=\"btn btn-secondary\"autofocus>Toutes les actualités</button></a>
          <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("follow_the_rhythm_accueilArtistesUniquement", array("page" => 1, "sens" => 1)), "html", null, true);
        echo "\"><button type=\"button\" class=\"btn btn-secondary\">Actualites sur les artistes uniquement</button></a>
          <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("follow_the_rhythm_accueil", array("page" => 1, "sens" => 2)), "html", null, true);
        echo "\" title=\"De la plus ancienne à la plus récente\"><button class=\"btn btn-secondary\" type=\"button\">Chronologique</button></a>
          <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("follow_the_rhythm_accueil", array("page" => 1, "sens" => 1)), "html", null, true);
        echo "\" title=\"De la plus récente à la plus ancienne\"><button class=\"btn btn-secondary\" type=\"button\" autofocus>Antéchronologique</button></a>          
     <!--     <div class=\"dropdown\">
            <button class=\"btn btn-default dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\">Trier par ordre<span class=\"caret\"></span></button>
            <ul class=\"dropdown-menu\">
              <li>Chronologique</li>
              <li>Antéchronologique</li>
            </ul>
          </div>-->
        </div>
     
      <div class=\"list-group\">

      <!--Bouton \"soumettre actualité\"-->
        <div class=\"list-group-item\"><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("follow_the_rhythm_soumettreActualite");
        echo "\"><button type=\"button\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-plus\"></span> Soumettre actualité</button></a></div>
        <div class=\"list-group-item\"><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("follow_the_rhythm_modifierSupprimerActualite");
        echo "\"><button type=\"button\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-edit\"></span> Modifier/Supprimer actualité</button></a></div>
      <!--AFFICHAGE DES ACTUALITEES-->
        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tabActualites"]) ? $context["tabActualites"] : $this->getContext($context, "tabActualites")));
        foreach ($context['_seq'] as $context["_key"] => $context["actualiteCourante"]) {
            // line 30
            echo "        
          <div class=\"list-group-item\"><h2><label>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["actualiteCourante"], "titre", array()), "html", null, true);
            echo "</label></h2>
        <!-- si pas d'artiste concerné -->
          ";
            // line 33
            if (twig_test_empty($this->getAttribute($context["actualiteCourante"], "artiste", array()))) {
                // line 34
                echo "              <p><label>Pas d'artiste concerné</label></p>
          ";
            } else {
                // line 36
                echo "          <p><label>
            ";
                // line 37
                if ((twig_length_filter($this->env, $this->getAttribute($context["actualiteCourante"], "artiste", array())) > 1)) {
                    // line 38
                    echo "          Artistes concernés:
          ";
                } else {
                    // line 40
                    echo "          Artiste concerné:
          ";
                }
                // line 41
                echo "   
            ";
                // line 42
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
                    // line 43
                    echo "             <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("follow_the_rhythm_pageArtiste", array("id" => $this->getAttribute($context["list"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["list"], "nomDeScene", array()), "html", null, true);
                    echo "</a>";
                    if ( !$this->getAttribute($context["loop"], "last", array())) {
                        echo ",";
                    }
                    // line 44
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
                // line 45
                echo "          </p></label>
          ";
            }
            // line 47
            echo "        <!-- si pas de concert concerné -->
          ";
            // line 48
            if (twig_test_empty($this->getAttribute($context["actualiteCourante"], "concert", array()))) {
                // line 49
                echo "              <p><label>Pas de concert lié</label></p>
          ";
            } else {
                // line 51
                echo "              <p><label>Concert lié : <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("follow_the_rhythm_pageConcert", array("id" => $this->getAttribute($this->getAttribute($context["actualiteCourante"], "concert", array()), "id", array()))), "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["actualiteCourante"], "concert", array()), "nom", array()), "html", null, true);
                echo "</a> </label></p>
              <p><label>Date de l'événement : ";
                // line 52
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["actualiteCourante"], "concert", array()), "dateConcert", array()), "d/m/Y"), "html", null, true);
                echo "</label></p>
              <p><label>Lieu : ";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["actualiteCourante"], "concert", array()), "lieu", array()), "html", null, true);
                echo "</label></p>
          ";
            }
            // line 55
            echo "          <p align=\"justify\"><label>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["actualiteCourante"], "description", array()), "html", null, true);
            echo "</label></p>
          <p><label>Date de publication: ";
            // line 56
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["actualiteCourante"], "dateActualite", array()), "d/m/Y"), "html", null, true);
            echo "</label></p>
        <!--Si coup(s) de coeur > 1-->
          ";
            // line 58
            if (($this->getAttribute($context["actualiteCourante"], "nbCoupDeCoeurs", array()) > 1)) {
                // line 59
                echo "              <button type=\"button\" class=\"btn btn-primary\"  onclick=\"isNotConnected();\"><span class=\"glyphicon glyphicon-heart\"></span> Coup de cœur</button> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["actualiteCourante"], "nbCoupDeCoeurs", array()), "html", null, true);
                echo " Coups de cœur 
          ";
            } else {
                // line 61
                echo "              <button type=\"button\" class=\"btn btn-primary\"  onclick=\"isNotConnected();\"><span class=\"glyphicon glyphicon-heart\"></span> Coup de cœur</button> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["actualiteCourante"], "nbCoupDeCoeurs", array()), "html", null, true);
                echo " Coup de cœur
          ";
            }
            // line 62
            echo "   
          ";
            // line 63
            if (twig_test_empty($this->getAttribute($context["actualiteCourante"], "moderateur", array()))) {
                // line 64
                echo "          ";
            } else {
                // line 65
                echo "             <!-- <p><label>Soumis par : ";
                echo "</label></p> -->
          ";
            }
            // line 67
            echo "            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actualiteCourante'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "      </div>
    </div>
  </div>
</div>

<script>
  function isNotConnected(){
    alert(\"Il faut être connecté pour accéder à cette fonctionnalité\");
  }
  
  /*function afficherArtistesUniquement(){
    
  }*/
</script>
";
        // line 84
        echo "<div align=\"center\"><a href=\"#\"><button class=\"btn btn-primary\"><i class=\"fa fa-angle-double-up\"></i> Haut de page <i class=\"fa fa-angle-double-up\"></i></button></a></div>
<div align=center>";
        // line 85
        $this->loadTemplate("::pagination.html.twig", "follow_the_rhythmSymfonyBundle:Symfony:index.html.twig", 85)->display($context);
        echo "</div>
";
        
        $__internal_3402e1f8cd8396589aa83ba2bb2c47a0d38d85521f9efe1b00dc2269378edb13->leave($__internal_3402e1f8cd8396589aa83ba2bb2c47a0d38d85521f9efe1b00dc2269378edb13_prof);

    }

    public function getTemplateName()
    {
        return "follow_the_rhythmSymfonyBundle:Symfony:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 85,  248 => 84,  232 => 69,  225 => 67,  220 => 65,  217 => 64,  215 => 63,  212 => 62,  206 => 61,  200 => 59,  198 => 58,  193 => 56,  188 => 55,  183 => 53,  179 => 52,  172 => 51,  168 => 49,  166 => 48,  163 => 47,  159 => 45,  145 => 44,  136 => 43,  119 => 42,  116 => 41,  112 => 40,  108 => 38,  106 => 37,  103 => 36,  99 => 34,  97 => 33,  92 => 31,  89 => 30,  85 => 29,  80 => 27,  76 => 26,  60 => 13,  56 => 12,  52 => 11,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "::vueMere.html.twig" %} {#La vue fille hérite de la vue mère#}*/
/* */
/* {% block contenuCentral %}*/
/* */
/*   <div class="container">*/
/*     <div class="row">*/
/*       <div class="panel panel-default">*/
/*         <div class="panel-heading"><h2><b><span class="fa fa-list"></span> Liste des Actualités</b></h2>*/
/*           Options de tri:*/
/*           <a href="{{path('follow_the_rhythm_accueil',{'page': 1, 'sens': 1})}}"><button type="button" class="btn btn-secondary"autofocus>Toutes les actualités</button></a>*/
/*           <a href="{{path('follow_the_rhythm_accueilArtistesUniquement',{'page': 1, 'sens': 1})}}"><button type="button" class="btn btn-secondary">Actualites sur les artistes uniquement</button></a>*/
/*           <a href="{{path('follow_the_rhythm_accueil',{'page': 1, 'sens': 2})}}" title="De la plus ancienne à la plus récente"><button class="btn btn-secondary" type="button">Chronologique</button></a>*/
/*           <a href="{{path('follow_the_rhythm_accueil',{'page': 1, 'sens': 1})}}" title="De la plus récente à la plus ancienne"><button class="btn btn-secondary" type="button" autofocus>Antéchronologique</button></a>          */
/*      <!--     <div class="dropdown">*/
/*             <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Trier par ordre<span class="caret"></span></button>*/
/*             <ul class="dropdown-menu">*/
/*               <li>Chronologique</li>*/
/*               <li>Antéchronologique</li>*/
/*             </ul>*/
/*           </div>-->*/
/*         </div>*/
/*      */
/*       <div class="list-group">*/
/* */
/*       <!--Bouton "soumettre actualité"-->*/
/*         <div class="list-group-item"><a href="{{path('follow_the_rhythm_soumettreActualite')}}"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Soumettre actualité</button></a></div>*/
/*         <div class="list-group-item"><a href="{{path('follow_the_rhythm_modifierSupprimerActualite')}}"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span> Modifier/Supprimer actualité</button></a></div>*/
/*       <!--AFFICHAGE DES ACTUALITEES-->*/
/*         {% for actualiteCourante in tabActualites %}*/
/*         */
/*           <div class="list-group-item"><h2><label>{{actualiteCourante.titre}}</label></h2>*/
/*         <!-- si pas d'artiste concerné -->*/
/*           {% if actualiteCourante.artiste is empty %}*/
/*               <p><label>Pas d'artiste concerné</label></p>*/
/*           {% else %}*/
/*           <p><label>*/
/*             {% if actualiteCourante.artiste|length > 1 %}*/
/*           Artistes concernés:*/
/*           {% else %}*/
/*           Artiste concerné:*/
/*           {% endif %}   */
/*             {% for list in actualiteCourante.artiste %}*/
/*              <a href="{{path('follow_the_rhythm_pageArtiste',{'id':list.id})}}">{{list.nomDeScene}}</a>{% if not loop.last %},{% endif %}*/
/*           {% endfor %}*/
/*           </p></label>*/
/*           {% endif %}*/
/*         <!-- si pas de concert concerné -->*/
/*           {% if actualiteCourante.concert is empty %}*/
/*               <p><label>Pas de concert lié</label></p>*/
/*           {% else %}*/
/*               <p><label>Concert lié : <a href="{{path('follow_the_rhythm_pageConcert',{'id':actualiteCourante.concert.id})}}" >{{actualiteCourante.concert.nom}}</a> </label></p>*/
/*               <p><label>Date de l'événement : {{actualiteCourante.concert.dateConcert|date("d/m/Y")}}</label></p>*/
/*               <p><label>Lieu : {{actualiteCourante.concert.lieu}}</label></p>*/
/*           {% endif %}*/
/*           <p align="justify"><label>{{actualiteCourante.description}}</label></p>*/
/*           <p><label>Date de publication: {{actualiteCourante.dateActualite|date("d/m/Y")}}</label></p>*/
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
/*             </div>*/
/*         {% endfor %}*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
/* <script>*/
/*   function isNotConnected(){*/
/*     alert("Il faut être connecté pour accéder à cette fonctionnalité");*/
/*   }*/
/*   */
/*   /*function afficherArtistesUniquement(){*/
/*     */
/*   }*//* */
/* </script>*/
/* {#Pagination#}*/
/* <div align="center"><a href="#"><button class="btn btn-primary"><i class="fa fa-angle-double-up"></i> Haut de page <i class="fa fa-angle-double-up"></i></button></a></div>*/
/* <div align=center>{% include "::pagination.html.twig" %}</div>*/
/* {% endblock %}*/
/* */
/* */
/* */
