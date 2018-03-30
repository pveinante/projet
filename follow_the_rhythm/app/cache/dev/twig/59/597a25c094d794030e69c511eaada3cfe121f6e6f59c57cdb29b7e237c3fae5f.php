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
        $__internal_c75de70d7cac54b18a403bb95e559daad5a2a5d1b6d2ddfe945afc0f2fe1af12 = $this->env->getExtension("native_profiler");
        $__internal_c75de70d7cac54b18a403bb95e559daad5a2a5d1b6d2ddfe945afc0f2fe1af12->enter($__internal_c75de70d7cac54b18a403bb95e559daad5a2a5d1b6d2ddfe945afc0f2fe1af12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "follow_the_rhythmSymfonyBundle:Symfony:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c75de70d7cac54b18a403bb95e559daad5a2a5d1b6d2ddfe945afc0f2fe1af12->leave($__internal_c75de70d7cac54b18a403bb95e559daad5a2a5d1b6d2ddfe945afc0f2fe1af12_prof);

    }

    // line 3
    public function block_contenuCentral($context, array $blocks = array())
    {
        $__internal_590e2bd412440555089ed226482381240b4728a2a82e25da483890c0e77e9356 = $this->env->getExtension("native_profiler");
        $__internal_590e2bd412440555089ed226482381240b4728a2a82e25da483890c0e77e9356->enter($__internal_590e2bd412440555089ed226482381240b4728a2a82e25da483890c0e77e9356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenuCentral"));

        // line 4
        echo "
  <script>
    function changerNbParPage()
    {
      \$lien = document.getElementById(\"nb\").value;
      location.href = \$lien;
    }
  </script>

  <div class=\"container\">
      <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
          <div class=\"row\">
          <div class=\"col-lg-6\">
            <h2><b><span class=\"fa fa-list\"></span> Liste des Actualités</b></h2>
          </div>
          </div>
          <div class=\"row\">
            <div class=\"col-lg-6\">
              <label>Options de tri :</label>
              <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("follow_the_rhythm_accueil", array("page" => 1, "sens" => 1, "nbParPage" => (isset($context["nbParPage"]) ? $context["nbParPage"] : $this->getContext($context, "nbParPage")))), "html", null, true);
        echo "\" title=\"Affiche toutes les actualités\"><button type=\"button\" class=\"btn btn-secondary\"autofocus>Toutes les actualités</button></a>
              <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("follow_the_rhythm_accueilArtistesUniquement", array("page" => 1, "sens" => 1, "nbParPage" => (isset($context["nbParPage"]) ? $context["nbParPage"] : $this->getContext($context, "nbParPage")))), "html", null, true);
        echo "\" title=\"Affiche seulement les actualités qui concernent des artistes et non des concerts\"><button type=\"button\" class=\"btn btn-secondary\">Actualites sur les artistes uniquement</button></a>
            </div>

            <div class=\"col-lg-6\">
              <div class=\"pull-right\">
              <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("follow_the_rhythm_accueil", array("page" => 1, "sens" => 2, "nbParPage" => (isset($context["nbParPage"]) ? $context["nbParPage"] : $this->getContext($context, "nbParPage")))), "html", null, true);
        echo "\" title=\"Trie les actualités de la plus ancienne à la plus récente\"><button class=\"btn btn-secondary\" type=\"button\"><span class=\"glyphicon glyphicon-time\"></span><span class=\"glyphicon glyphicon-sort-by-order\"></span> Chronologique</button></a>
              <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("follow_the_rhythm_accueil", array("page" => 1, "sens" => 1, "nbParPage" => (isset($context["nbParPage"]) ? $context["nbParPage"] : $this->getContext($context, "nbParPage")))), "html", null, true);
        echo "\" title=\"Trie les actualités de la plus récente à la plus ancienne\"><button class=\"btn btn-secondary\" type=\"button\"><span class=\"glyphicon glyphicon-time\"></span><span class=\"glyphicon glyphicon-sort-by-order-alt\"></span>Antéchronologique</button></a>          
          </div>
           </div>
          </div>
          <div class=\"row\">
            <div class='col-lg-6' style='margin-top: 8px;'>
            <p>Nombre de messages par page : <select onChange='changerNbParPage()' id='nb'></p>
          <option value='";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["nbParPage"]) ? $context["nbParPage"] : $this->getContext($context, "nbParPage")), "html", null, true);
        echo "' selected>Nombre courant : ";
        echo twig_escape_filter($this->env, (isset($context["nbParPage"]) ? $context["nbParPage"] : $this->getContext($context, "nbParPage")), "html", null, true);
        echo "</option><option value=5>5</option><option value=10>10</option><option value=25>25</option><option value=50>50</option>
        </select>
        </div>
     <!--     <div class=\"dropdown\">
            <button class=\"btn btn-default dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\">Trier par ordre<span class=\"caret\"></span></button>
            <ul class=\"dropdown-menu\">
              <li>Chronologique</li>
              <li>Antéchronologique</li>
            </ul>
          </div>-->
          </div>
        </div>
     
      <div class=\"list-group\">

      ";
        // line 53
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 54
            echo "      <!--Bouton \"soumettre actualité\"-->
        <div class=\"list-group-item\">
          <label>Options modérateur : </label> <a title=\"Ajoute une nouvelle actualité sur Follow The Rhythm !\" href=\"";
            // line 56
            echo $this->env->getExtension('routing')->getPath("follow_the_rhythm_soumettreActualite");
            echo "\"><button type=\"button\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-plus\"></span> Soumettre actualité</button></a>
          <a title=\"Modifie les infos d'une actualité ou en supprimer une.\" href=\"";
            // line 57
            echo $this->env->getExtension('routing')->getPath("follow_the_rhythm_modifierSupprimerActualite");
            echo "\"><button type=\"button\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-edit\"></span> Modifier/Supprimer actualité</button></a>
                  <div class=\"pull-right\">
                  <a target='_blank' title=\"Modifier les donnees du site.\" href=\"";
            // line 59
            echo $this->env->getExtension('routing')->getPath("admin");
            echo "\"><button type=\"button\" class=\"btn btn-primary\"><span class=\"fa fa-database\"></span> Accès base de données</button></a>
                  </div>
        </div>
      ";
        }
        // line 63
        echo "        
      <!--AFFICHAGE DES ACTUALITEES-->
        ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tabActualites"]) ? $context["tabActualites"] : $this->getContext($context, "tabActualites")));
        foreach ($context['_seq'] as $context["_key"] => $context["actualiteCourante"]) {
            // line 66
            echo "        
          <div class=\"list-group-item\"><h2><label>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["actualiteCourante"], "titre", array()), "html", null, true);
            echo "</label></h2>
        <!-- si pas d'artiste concerné -->
          ";
            // line 69
            if (twig_test_empty($this->getAttribute($context["actualiteCourante"], "artiste", array()))) {
                // line 70
                echo "              <p><label>Pas d'artiste concerné</label></p>
          ";
            } else {
                // line 72
                echo "          <p><label>
            ";
                // line 73
                if ((twig_length_filter($this->env, $this->getAttribute($context["actualiteCourante"], "artiste", array())) > 1)) {
                    // line 74
                    echo "          Artistes concernés:
          ";
                } else {
                    // line 76
                    echo "          Artiste concerné:
          ";
                }
                // line 77
                echo "   
            ";
                // line 78
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
                    // line 79
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
                    // line 80
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
                // line 81
                echo "          </p></label>
          ";
            }
            // line 83
            echo "        <!-- si pas de concert concerné -->
          ";
            // line 84
            if (twig_test_empty($this->getAttribute($context["actualiteCourante"], "concert", array()))) {
                // line 85
                echo "              <p><label>Pas de concert lié</label></p>
          ";
            } else {
                // line 87
                echo "              <p><label>Concert lié : <a title=\"Aller à la page du concert lié à cette actualité.\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("follow_the_rhythm_pageConcert", array("id" => $this->getAttribute($this->getAttribute($context["actualiteCourante"], "concert", array()), "id", array()))), "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["actualiteCourante"], "concert", array()), "nom", array()), "html", null, true);
                echo "</a> </label></p>
              <p><label>Date de l'événement : ";
                // line 88
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["actualiteCourante"], "concert", array()), "dateConcert", array()), "d/m/Y"), "html", null, true);
                echo "</label></p>
              <p><label>Lieu : ";
                // line 89
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["actualiteCourante"], "concert", array()), "lieu", array()), "html", null, true);
                echo "</label></p>
          ";
            }
            // line 91
            echo "          <p align=\"justify\"><label>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["actualiteCourante"], "description", array()), "html", null, true);
            echo "</label></p>
          <p><label>Date de publication: ";
            // line 92
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["actualiteCourante"], "dateActualite", array()), "d/m/Y"), "html", null, true);
            echo "</label></p>
        <!--Si coup(s) de coeur > 1-->
          ";
            // line 94
            if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                // line 95
                echo "            ";
                if (($this->getAttribute($context["actualiteCourante"], "nbCoupDeCoeurs", array()) > 1)) {
                    // line 96
                    echo "                <a href='";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("follow_the_rhythm_coupDeCoeur", array("actualite" => $this->getAttribute($context["actualiteCourante"], "id", array()))), "html", null, true);
                    echo "' title=\"J'adore cet article !\"><button type=\"button\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-heart\"></span> Coup de cœur</button></a> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["actualiteCourante"], "nbCoupDeCoeurs", array()), "html", null, true);
                    echo " Coups de cœurs 
            ";
                } else {
                    // line 98
                    echo "                <a href='";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("follow_the_rhythm_coupDeCoeur", array("actualite" => $this->getAttribute($context["actualiteCourante"], "id", array()))), "html", null, true);
                    echo "' title=\"J'adore cet article !\"><button type=\"button\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-heart\"></span> Coup de cœur</button></a> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["actualiteCourante"], "nbCoupDeCoeurs", array()), "html", null, true);
                    echo " Coup de cœur
            ";
                }
                // line 99
                echo "   
          ";
            } else {
                // line 101
                echo "            ";
                if (($this->getAttribute($context["actualiteCourante"], "nbCoupDeCoeurs", array()) > 1)) {
                    // line 102
                    echo "                <a href='";
                    echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
                    echo "' title=\"J'adore cet article !\"><button type=\"button\" class=\"btn btn-primary\"  onclick=\"isNotConnected();\"><span class=\"glyphicon glyphicon-heart\"></span> Coup de cœur</button></a> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["actualiteCourante"], "nbCoupDeCoeurs", array()), "html", null, true);
                    echo " Coups de cœurs 
            ";
                } else {
                    // line 104
                    echo "                <a href='";
                    echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
                    echo "' title=\"J'adore cet article !\"><button type=\"button\" class=\"btn btn-primary\"  onclick=\"isNotConnected();\"><span class=\"glyphicon glyphicon-heart\"></span> Coup de cœur</button></a> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["actualiteCourante"], "nbCoupDeCoeurs", array()), "html", null, true);
                    echo " Coup de cœur
            ";
                }
                // line 105
                echo "   
          ";
            }
            // line 107
            echo "        
            </div>
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actualiteCourante'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "      </div>
    </div>
  </div>

";
        // line 115
        echo "<div align=\"center\"><a title='Remonter en haut de la page courante' href=\"#\"><button class=\"btn btn-primary\"><i class=\"fa fa-angle-double-up\"></i> Haut de page <i class=\"fa fa-angle-double-up\"></i></button></a></div>
<div align=center>";
        // line 116
        $this->loadTemplate("::pagination.html.twig", "follow_the_rhythmSymfonyBundle:Symfony:index.html.twig", 116)->display($context);
        echo "</div>
";
        
        $__internal_590e2bd412440555089ed226482381240b4728a2a82e25da483890c0e77e9356->leave($__internal_590e2bd412440555089ed226482381240b4728a2a82e25da483890c0e77e9356_prof);

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
        return array (  314 => 116,  311 => 115,  305 => 110,  297 => 107,  293 => 105,  285 => 104,  277 => 102,  274 => 101,  270 => 99,  262 => 98,  254 => 96,  251 => 95,  249 => 94,  244 => 92,  239 => 91,  234 => 89,  230 => 88,  223 => 87,  219 => 85,  217 => 84,  214 => 83,  210 => 81,  196 => 80,  185 => 79,  168 => 78,  165 => 77,  161 => 76,  157 => 74,  155 => 73,  152 => 72,  148 => 70,  146 => 69,  141 => 67,  138 => 66,  134 => 65,  130 => 63,  123 => 59,  118 => 57,  114 => 56,  110 => 54,  108 => 53,  88 => 38,  78 => 31,  74 => 30,  66 => 25,  62 => 24,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "::vueMere.html.twig" %} {#La vue fille hérite de la vue mère#}*/
/* */
/* {% block contenuCentral %}*/
/* */
/*   <script>*/
/*     function changerNbParPage()*/
/*     {*/
/*       $lien = document.getElementById("nb").value;*/
/*       location.href = $lien;*/
/*     }*/
/*   </script>*/
/* */
/*   <div class="container">*/
/*       <div class="panel panel-default">*/
/*         <div class="panel-heading">*/
/*           <div class="row">*/
/*           <div class="col-lg-6">*/
/*             <h2><b><span class="fa fa-list"></span> Liste des Actualités</b></h2>*/
/*           </div>*/
/*           </div>*/
/*           <div class="row">*/
/*             <div class="col-lg-6">*/
/*               <label>Options de tri :</label>*/
/*               <a href="{{path('follow_the_rhythm_accueil',{'page': 1, 'sens': 1, 'nbParPage': nbParPage})}}" title="Affiche toutes les actualités"><button type="button" class="btn btn-secondary"autofocus>Toutes les actualités</button></a>*/
/*               <a href="{{path('follow_the_rhythm_accueilArtistesUniquement',{'page': 1, 'sens': 1, 'nbParPage': nbParPage})}}" title="Affiche seulement les actualités qui concernent des artistes et non des concerts"><button type="button" class="btn btn-secondary">Actualites sur les artistes uniquement</button></a>*/
/*             </div>*/
/* */
/*             <div class="col-lg-6">*/
/*               <div class="pull-right">*/
/*               <a href="{{path('follow_the_rhythm_accueil',{'page': 1, 'sens': 2, 'nbParPage': nbParPage})}}" title="Trie les actualités de la plus ancienne à la plus récente"><button class="btn btn-secondary" type="button"><span class="glyphicon glyphicon-time"></span><span class="glyphicon glyphicon-sort-by-order"></span> Chronologique</button></a>*/
/*               <a href="{{path('follow_the_rhythm_accueil',{'page': 1, 'sens': 1, 'nbParPage': nbParPage})}}" title="Trie les actualités de la plus récente à la plus ancienne"><button class="btn btn-secondary" type="button"><span class="glyphicon glyphicon-time"></span><span class="glyphicon glyphicon-sort-by-order-alt"></span>Antéchronologique</button></a>          */
/*           </div>*/
/*            </div>*/
/*           </div>*/
/*           <div class="row">*/
/*             <div class='col-lg-6' style='margin-top: 8px;'>*/
/*             <p>Nombre de messages par page : <select onChange='changerNbParPage()' id='nb'></p>*/
/*           <option value='{{nbParPage}}' selected>Nombre courant : {{nbParPage}}</option><option value=5>5</option><option value=10>10</option><option value=25>25</option><option value=50>50</option>*/
/*         </select>*/
/*         </div>*/
/*      <!--     <div class="dropdown">*/
/*             <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Trier par ordre<span class="caret"></span></button>*/
/*             <ul class="dropdown-menu">*/
/*               <li>Chronologique</li>*/
/*               <li>Antéchronologique</li>*/
/*             </ul>*/
/*           </div>-->*/
/*           </div>*/
/*         </div>*/
/*      */
/*       <div class="list-group">*/
/* */
/*       {% if is_granted('ROLE_ADMIN') %}*/
/*       <!--Bouton "soumettre actualité"-->*/
/*         <div class="list-group-item">*/
/*           <label>Options modérateur : </label> <a title="Ajoute une nouvelle actualité sur Follow The Rhythm !" href="{{path('follow_the_rhythm_soumettreActualite')}}"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Soumettre actualité</button></a>*/
/*           <a title="Modifie les infos d'une actualité ou en supprimer une." href="{{path('follow_the_rhythm_modifierSupprimerActualite')}}"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span> Modifier/Supprimer actualité</button></a>*/
/*                   <div class="pull-right">*/
/*                   <a target='_blank' title="Modifier les donnees du site." href="{{path('admin')}}"><button type="button" class="btn btn-primary"><span class="fa fa-database"></span> Accès base de données</button></a>*/
/*                   </div>*/
/*         </div>*/
/*       {% endif %}*/
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
/*           {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*             {% if actualiteCourante.nbCoupDeCoeurs > 1 %}*/
/*                 <a href='{{path('follow_the_rhythm_coupDeCoeur',{'actualite':actualiteCourante.id})}}' title="J'adore cet article !"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-heart"></span> Coup de cœur</button></a> {{actualiteCourante.nbCoupDeCoeurs}} Coups de cœurs */
/*             {% else %}*/
/*                 <a href='{{path('follow_the_rhythm_coupDeCoeur',{'actualite':actualiteCourante.id})}}' title="J'adore cet article !"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-heart"></span> Coup de cœur</button></a> {{actualiteCourante.nbCoupDeCoeurs}} Coup de cœur*/
/*             {% endif %}   */
/*           {% else %}*/
/*             {% if actualiteCourante.nbCoupDeCoeurs > 1 %}*/
/*                 <a href='{{path('fos_user_security_login')}}' title="J'adore cet article !"><button type="button" class="btn btn-primary"  onclick="isNotConnected();"><span class="glyphicon glyphicon-heart"></span> Coup de cœur</button></a> {{actualiteCourante.nbCoupDeCoeurs}} Coups de cœurs */
/*             {% else %}*/
/*                 <a href='{{path('fos_user_security_login')}}' title="J'adore cet article !"><button type="button" class="btn btn-primary"  onclick="isNotConnected();"><span class="glyphicon glyphicon-heart"></span> Coup de cœur</button></a> {{actualiteCourante.nbCoupDeCoeurs}} Coup de cœur*/
/*             {% endif %}   */
/*           {% endif %}*/
/*         */
/*             </div>*/
/*          {% endfor %}*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* */
/* {#Pagination#}*/
/* <div align="center"><a title='Remonter en haut de la page courante' href="#"><button class="btn btn-primary"><i class="fa fa-angle-double-up"></i> Haut de page <i class="fa fa-angle-double-up"></i></button></a></div>*/
/* <div align=center>{% include "::pagination.html.twig" %}</div>*/
/* {% endblock %}*/
/* */
/* */
/* */
