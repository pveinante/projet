<?php

/* follow_the_rhythmSymfonyBundle:Symfony:index.html.twig */
class __TwigTemplate_63804bfc74cccfc353c4a4309dc8dc93f529ae35b87d4df573c6ba60fd420629 extends Twig_Template
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
        $__internal_93dca9123cc8fbd10f2931867396266cd6f4828bd8f308b9c518b61bbb42d440 = $this->env->getExtension("native_profiler");
        $__internal_93dca9123cc8fbd10f2931867396266cd6f4828bd8f308b9c518b61bbb42d440->enter($__internal_93dca9123cc8fbd10f2931867396266cd6f4828bd8f308b9c518b61bbb42d440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "follow_the_rhythmSymfonyBundle:Symfony:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93dca9123cc8fbd10f2931867396266cd6f4828bd8f308b9c518b61bbb42d440->leave($__internal_93dca9123cc8fbd10f2931867396266cd6f4828bd8f308b9c518b61bbb42d440_prof);

    }

    // line 3
    public function block_contenuCentral($context, array $blocks = array())
    {
        $__internal_c9a4ca6f986224a5097ffa1e018ef14698fdaf2d1df17a7518c10d5b95f830be = $this->env->getExtension("native_profiler");
        $__internal_c9a4ca6f986224a5097ffa1e018ef14698fdaf2d1df17a7518c10d5b95f830be->enter($__internal_c9a4ca6f986224a5097ffa1e018ef14698fdaf2d1df17a7518c10d5b95f830be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenuCentral"));

        // line 4
        echo "
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"panel panel-default\">
        <div class=\"panel-heading\"><h2><b><span class=\"fa fa-list\"></span> Liste des Actualités</b></h2>
    
          <label>Options de tri :</label>
          <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("follow_the_rhythm_accueil", array("page" => 1, "sens" => 1)), "html", null, true);
        echo "\" title=\"Affiche toutes les actualités\"><button type=\"button\" class=\"btn btn-secondary\"autofocus>Toutes les actualités</button></a>
          <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("follow_the_rhythm_accueilArtistesUniquement", array("page" => 1, "sens" => 1)), "html", null, true);
        echo "\" title=\"Affiche seulement les actualités qui concernent des artistes et non des concerts\"><button type=\"button\" class=\"btn btn-secondary\">Actualites sur les artistes uniquement</button></a>
          <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("follow_the_rhythm_accueil", array("page" => 1, "sens" => 2)), "html", null, true);
        echo "\" title=\"Trie les actualités de la plus ancienne à la plus récente\"><button class=\"btn btn-secondary\" type=\"button\"><span class=\"glyphicon glyphicon-time\"></span><span class=\"glyphicon glyphicon-sort-by-order\"></span> Chronologique</button></a>
          <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("follow_the_rhythm_accueil", array("page" => 1, "sens" => 1)), "html", null, true);
        echo "\" title=\"Trie les actualités de la plus récente à la plus ancienne\"><button class=\"btn btn-secondary\" type=\"button\"><span class=\"glyphicon glyphicon-time\"></span><span class=\"glyphicon glyphicon-sort-by-order-alt\"></span>Antéchronologique</button></a>          
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
        <div class=\"list-group-item\">
          <label>Options modérateur : </label> <a title=\"Ajoute une nouvelle actualité sur Follow The Rhythm !\" href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("follow_the_rhythm_soumettreActualite");
        echo "\"><button type=\"button\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-plus\"></span> Soumettre actualité</button></a>
          <a title=\"Modifie les infos d'une actualité ou en supprimer une.\" href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("follow_the_rhythm_modifierSupprimerActualite");
        echo "\"><button type=\"button\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-edit\"></span> Modifier/Supprimer actualité</button></a>
        </div>
        
      <!--AFFICHAGE DES ACTUALITEES-->
        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tabActualites"]) ? $context["tabActualites"] : $this->getContext($context, "tabActualites")));
        foreach ($context['_seq'] as $context["_key"] => $context["actualiteCourante"]) {
            // line 34
            echo "        
          <div class=\"list-group-item\"><h2><label>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["actualiteCourante"], "titre", array()), "html", null, true);
            echo "</label></h2>
        <!-- si pas d'artiste concerné -->
          ";
            // line 37
            if (twig_test_empty($this->getAttribute($context["actualiteCourante"], "artiste", array()))) {
                // line 38
                echo "              <p><label>Pas d'artiste concerné</label></p>
          ";
            } else {
                // line 40
                echo "          <p><label>
            ";
                // line 41
                if ((twig_length_filter($this->env, $this->getAttribute($context["actualiteCourante"], "artiste", array())) > 1)) {
                    // line 42
                    echo "          Artistes concernés:
          ";
                } else {
                    // line 44
                    echo "          Artiste concerné:
          ";
                }
                // line 45
                echo "   
            ";
                // line 46
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
                    // line 47
                    echo "             <a title=\"Aller à la page de ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["list"], "nomDeScene", array()), "html", null, true);
                    echo ".\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("follow_the_rhythm_pageArtiste", array("id" => $this->getAttribute($context["list"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["list"], "nomDeScene", array()), "html", null, true);
                    echo "</a>";
                    if ( !$this->getAttribute($context["loop"], "last", array())) {
                        echo ",";
                    }
                    // line 48
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
                // line 49
                echo "          </p></label>
          ";
            }
            // line 51
            echo "        <!-- si pas de concert concerné -->
          ";
            // line 52
            if (twig_test_empty($this->getAttribute($context["actualiteCourante"], "concert", array()))) {
                // line 53
                echo "              <p><label>Pas de concert lié</label></p>
          ";
            } else {
                // line 55
                echo "              <p><label>Concert lié : <a title=\"Aller à la page du concert lié à cette actualité.\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("follow_the_rhythm_pageConcert", array("id" => $this->getAttribute($this->getAttribute($context["actualiteCourante"], "concert", array()), "id", array()))), "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["actualiteCourante"], "concert", array()), "nom", array()), "html", null, true);
                echo "</a> </label></p>
              <p><label>Date de l'événement : ";
                // line 56
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["actualiteCourante"], "concert", array()), "dateConcert", array()), "d/m/Y"), "html", null, true);
                echo "</label></p>
              <p><label>Lieu : ";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["actualiteCourante"], "concert", array()), "lieu", array()), "html", null, true);
                echo "</label></p>
          ";
            }
            // line 59
            echo "          <p align=\"justify\"><label>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["actualiteCourante"], "description", array()), "html", null, true);
            echo "</label></p>
          <p><label>Date de publication: ";
            // line 60
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["actualiteCourante"], "dateActualite", array()), "d/m/Y"), "html", null, true);
            echo "</label></p>
        <!--Si coup(s) de coeur > 1-->
          ";
            // line 62
            if (($this->getAttribute($context["actualiteCourante"], "nbCoupDeCoeurs", array()) > 1)) {
                // line 63
                echo "              <a href='' title=\"J'adore cet article !\"><button type=\"button\" class=\"btn btn-primary\"  onclick=\"isNotConnected();\"><span class=\"glyphicon glyphicon-heart\"></span> Coup de cœur</button></a> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["actualiteCourante"], "nbCoupDeCoeurs", array()), "html", null, true);
                echo " Coups de cœur 
          ";
            } else {
                // line 65
                echo "              <a href='' title=\"J'adore cet article !\"><button type=\"button\" class=\"btn btn-primary\"  onclick=\"isNotConnected();\"><span class=\"glyphicon glyphicon-heart\"></span> Coup de cœur</button></a> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["actualiteCourante"], "nbCoupDeCoeurs", array()), "html", null, true);
                echo " Coup de cœur
          ";
            }
            // line 66
            echo "   
          ";
            // line 67
            if (twig_test_empty($this->getAttribute($context["actualiteCourante"], "moderateur", array()))) {
                // line 68
                echo "          ";
            } else {
                // line 69
                echo "             <!-- <p><label>Soumis par : ";
                echo "</label></p> -->
          ";
            }
            // line 71
            echo "            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actualiteCourante'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
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
        // line 88
        echo "<div align=\"center\"><a title='Remonter en haut de la page courante' href=\"#\"><button class=\"btn btn-primary\"><i class=\"fa fa-angle-double-up\"></i> Haut de page <i class=\"fa fa-angle-double-up\"></i></button></a></div>
<div align=center>";
        // line 89
        $this->loadTemplate("::pagination.html.twig", "follow_the_rhythmSymfonyBundle:Symfony:index.html.twig", 89)->display($context);
        echo "</div>
";
        
        $__internal_c9a4ca6f986224a5097ffa1e018ef14698fdaf2d1df17a7518c10d5b95f830be->leave($__internal_c9a4ca6f986224a5097ffa1e018ef14698fdaf2d1df17a7518c10d5b95f830be_prof);

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
        return array (  257 => 89,  254 => 88,  238 => 73,  231 => 71,  226 => 69,  223 => 68,  221 => 67,  218 => 66,  212 => 65,  206 => 63,  204 => 62,  199 => 60,  194 => 59,  189 => 57,  185 => 56,  178 => 55,  174 => 53,  172 => 52,  169 => 51,  165 => 49,  151 => 48,  140 => 47,  123 => 46,  120 => 45,  116 => 44,  112 => 42,  110 => 41,  107 => 40,  103 => 38,  101 => 37,  96 => 35,  93 => 34,  89 => 33,  82 => 29,  78 => 28,  61 => 14,  57 => 13,  53 => 12,  49 => 11,  40 => 4,  34 => 3,  11 => 1,);
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
/*     */
/*           <label>Options de tri :</label>*/
/*           <a href="{{path('follow_the_rhythm_accueil',{'page': 1, 'sens': 1})}}" title="Affiche toutes les actualités"><button type="button" class="btn btn-secondary"autofocus>Toutes les actualités</button></a>*/
/*           <a href="{{path('follow_the_rhythm_accueilArtistesUniquement',{'page': 1, 'sens': 1})}}" title="Affiche seulement les actualités qui concernent des artistes et non des concerts"><button type="button" class="btn btn-secondary">Actualites sur les artistes uniquement</button></a>*/
/*           <a href="{{path('follow_the_rhythm_accueil',{'page': 1, 'sens': 2})}}" title="Trie les actualités de la plus ancienne à la plus récente"><button class="btn btn-secondary" type="button"><span class="glyphicon glyphicon-time"></span><span class="glyphicon glyphicon-sort-by-order"></span> Chronologique</button></a>*/
/*           <a href="{{path('follow_the_rhythm_accueil',{'page': 1, 'sens': 1})}}" title="Trie les actualités de la plus récente à la plus ancienne"><button class="btn btn-secondary" type="button"><span class="glyphicon glyphicon-time"></span><span class="glyphicon glyphicon-sort-by-order-alt"></span>Antéchronologique</button></a>          */
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
/*         <div class="list-group-item">*/
/*           <label>Options modérateur : </label> <a title="Ajoute une nouvelle actualité sur Follow The Rhythm !" href="{{path('follow_the_rhythm_soumettreActualite')}}"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Soumettre actualité</button></a>*/
/*           <a title="Modifie les infos d'une actualité ou en supprimer une." href="{{path('follow_the_rhythm_modifierSupprimerActualite')}}"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span> Modifier/Supprimer actualité</button></a>*/
/*         </div>*/
/*         */
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
/*              <a title="Aller à la page de {{list.nomDeScene}}." href="{{path('follow_the_rhythm_pageArtiste',{'id':list.id})}}">{{list.nomDeScene}}</a>{% if not loop.last %},{% endif %}*/
/*           {% endfor %}*/
/*           </p></label>*/
/*           {% endif %}*/
/*         <!-- si pas de concert concerné -->*/
/*           {% if actualiteCourante.concert is empty %}*/
/*               <p><label>Pas de concert lié</label></p>*/
/*           {% else %}*/
/*               <p><label>Concert lié : <a title="Aller à la page du concert lié à cette actualité." href="{{path('follow_the_rhythm_pageConcert',{'id':actualiteCourante.concert.id})}}" >{{actualiteCourante.concert.nom}}</a> </label></p>*/
/*               <p><label>Date de l'événement : {{actualiteCourante.concert.dateConcert|date("d/m/Y")}}</label></p>*/
/*               <p><label>Lieu : {{actualiteCourante.concert.lieu}}</label></p>*/
/*           {% endif %}*/
/*           <p align="justify"><label>{{actualiteCourante.description}}</label></p>*/
/*           <p><label>Date de publication: {{actualiteCourante.dateActualite|date("d/m/Y")}}</label></p>*/
/*         <!--Si coup(s) de coeur > 1-->*/
/*           {% if actualiteCourante.nbCoupDeCoeurs > 1 %}*/
/*               <a href='' title="J'adore cet article !"><button type="button" class="btn btn-primary"  onclick="isNotConnected();"><span class="glyphicon glyphicon-heart"></span> Coup de cœur</button></a> {{actualiteCourante.nbCoupDeCoeurs}} Coups de cœur */
/*           {% else %}*/
/*               <a href='' title="J'adore cet article !"><button type="button" class="btn btn-primary"  onclick="isNotConnected();"><span class="glyphicon glyphicon-heart"></span> Coup de cœur</button></a> {{actualiteCourante.nbCoupDeCoeurs}} Coup de cœur*/
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
/* <div align="center"><a title='Remonter en haut de la page courante' href="#"><button class="btn btn-primary"><i class="fa fa-angle-double-up"></i> Haut de page <i class="fa fa-angle-double-up"></i></button></a></div>*/
/* <div align=center>{% include "::pagination.html.twig" %}</div>*/
/* {% endblock %}*/
/* */
/* */
/* */
