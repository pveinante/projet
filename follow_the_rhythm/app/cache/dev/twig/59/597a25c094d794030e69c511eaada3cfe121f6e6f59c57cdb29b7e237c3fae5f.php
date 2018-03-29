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
        $__internal_5880787bc15d834efd75a7287ae82396f083404d8918dc2e905ffc5a922abd12 = $this->env->getExtension("native_profiler");
        $__internal_5880787bc15d834efd75a7287ae82396f083404d8918dc2e905ffc5a922abd12->enter($__internal_5880787bc15d834efd75a7287ae82396f083404d8918dc2e905ffc5a922abd12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "follow_the_rhythmSymfonyBundle:Symfony:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5880787bc15d834efd75a7287ae82396f083404d8918dc2e905ffc5a922abd12->leave($__internal_5880787bc15d834efd75a7287ae82396f083404d8918dc2e905ffc5a922abd12_prof);

    }

    // line 3
    public function block_contenuCentral($context, array $blocks = array())
    {
        $__internal_932cca523bb6f36b1243f36d00514b355580cf779508def7c0ec06ed6d0eaf2b = $this->env->getExtension("native_profiler");
        $__internal_932cca523bb6f36b1243f36d00514b355580cf779508def7c0ec06ed6d0eaf2b->enter($__internal_932cca523bb6f36b1243f36d00514b355580cf779508def7c0ec06ed6d0eaf2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenuCentral"));

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

            <p>Nombre de messages par page : <select onChange='changerNbParPage()' id='nb'></p>
          <option value='";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["nbParPage"]) ? $context["nbParPage"] : $this->getContext($context, "nbParPage")), "html", null, true);
        echo "' selected>Nombre courant : ";
        echo twig_escape_filter($this->env, (isset($context["nbParPage"]) ? $context["nbParPage"] : $this->getContext($context, "nbParPage")), "html", null, true);
        echo "</option><option value=5>5</option><option value=10>10</option><option value=25>25</option><option value=50>50</option>
        </select>
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
        // line 50
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 51
            echo "      <!--Bouton \"soumettre actualité\"-->
        <div class=\"list-group-item\">
          <label>Options modérateur : </label> <a title=\"Ajoute une nouvelle actualité sur Follow The Rhythm !\" href=\"";
            // line 53
            echo $this->env->getExtension('routing')->getPath("follow_the_rhythm_soumettreActualite");
            echo "\"><button type=\"button\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-plus\"></span> Soumettre actualité</button></a>
          <a title=\"Modifie les infos d'une actualité ou en supprimer une.\" href=\"";
            // line 54
            echo $this->env->getExtension('routing')->getPath("follow_the_rhythm_modifierSupprimerActualite");
            echo "\"><button type=\"button\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-edit\"></span> Modifier/Supprimer actualité</button></a>
                  <div class=\"pull-right\">
                  <a title=\"Modifier les donnees du site.\" href=\"";
            // line 56
            echo $this->env->getExtension('routing')->getPath("admin");
            echo "\"><button type=\"button\" class=\"btn btn-primary\"><span class=\"fa fa-database\"></span> Accès base de données</button></a>
                  </div>
        </div>
      ";
        }
        // line 60
        echo "        
      <!--AFFICHAGE DES ACTUALITEES-->
        ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tabActualites"]) ? $context["tabActualites"] : $this->getContext($context, "tabActualites")));
        foreach ($context['_seq'] as $context["_key"] => $context["actualiteCourante"]) {
            // line 63
            echo "        
          <div class=\"list-group-item\"><h2><label>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["actualiteCourante"], "titre", array()), "html", null, true);
            echo "</label></h2>
        <!-- si pas d'artiste concerné -->
          ";
            // line 66
            if (twig_test_empty($this->getAttribute($context["actualiteCourante"], "artiste", array()))) {
                // line 67
                echo "              <p><label>Pas d'artiste concerné</label></p>
          ";
            } else {
                // line 69
                echo "          <p><label>
            ";
                // line 70
                if ((twig_length_filter($this->env, $this->getAttribute($context["actualiteCourante"], "artiste", array())) > 1)) {
                    // line 71
                    echo "          Artistes concernés:
          ";
                } else {
                    // line 73
                    echo "          Artiste concerné:
          ";
                }
                // line 74
                echo "   
            ";
                // line 75
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
                    // line 76
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
                    // line 77
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
                // line 78
                echo "          </p></label>
          ";
            }
            // line 80
            echo "        <!-- si pas de concert concerné -->
          ";
            // line 81
            if (twig_test_empty($this->getAttribute($context["actualiteCourante"], "concert", array()))) {
                // line 82
                echo "              <p><label>Pas de concert lié</label></p>
          ";
            } else {
                // line 84
                echo "              <p><label>Concert lié : <a title=\"Aller à la page du concert lié à cette actualité.\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("follow_the_rhythm_pageConcert", array("id" => $this->getAttribute($this->getAttribute($context["actualiteCourante"], "concert", array()), "id", array()))), "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["actualiteCourante"], "concert", array()), "nom", array()), "html", null, true);
                echo "</a> </label></p>
              <p><label>Date de l'événement : ";
                // line 85
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["actualiteCourante"], "concert", array()), "dateConcert", array()), "d/m/Y"), "html", null, true);
                echo "</label></p>
              <p><label>Lieu : ";
                // line 86
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["actualiteCourante"], "concert", array()), "lieu", array()), "html", null, true);
                echo "</label></p>
          ";
            }
            // line 88
            echo "          <p align=\"justify\"><label>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["actualiteCourante"], "description", array()), "html", null, true);
            echo "</label></p>
          <p><label>Date de publication: ";
            // line 89
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["actualiteCourante"], "dateActualite", array()), "d/m/Y"), "html", null, true);
            echo "</label></p>
        <!--Si coup(s) de coeur > 1-->
          ";
            // line 91
            if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                // line 92
                echo "            ";
                if (($this->getAttribute($context["actualiteCourante"], "nbCoupDeCoeurs", array()) > 1)) {
                    // line 93
                    echo "                <a href='";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("follow_the_rhythm_coupDeCoeur", array("actualite" => $this->getAttribute($context["actualiteCourante"], "id", array()))), "html", null, true);
                    echo "' title=\"J'adore cet article !\"><button type=\"button\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-heart\"></span> Coup de cœur</button></a> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["actualiteCourante"], "nbCoupDeCoeurs", array()), "html", null, true);
                    echo " Coups de cœurs 
            ";
                } else {
                    // line 95
                    echo "                <a href='";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("follow_the_rhythm_coupDeCoeur", array("actualite" => $this->getAttribute($context["actualiteCourante"], "id", array()))), "html", null, true);
                    echo "' title=\"J'adore cet article !\"><button type=\"button\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-heart\"></span> Coup de cœur</button></a> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["actualiteCourante"], "nbCoupDeCoeurs", array()), "html", null, true);
                    echo " Coup de cœur
            ";
                }
                // line 96
                echo "   
          ";
            } else {
                // line 98
                echo "            ";
                if (($this->getAttribute($context["actualiteCourante"], "nbCoupDeCoeurs", array()) > 1)) {
                    // line 99
                    echo "                <a href='";
                    echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
                    echo "' title=\"J'adore cet article !\"><button type=\"button\" class=\"btn btn-primary\"  onclick=\"isNotConnected();\"><span class=\"glyphicon glyphicon-heart\"></span> Coup de cœur</button></a> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["actualiteCourante"], "nbCoupDeCoeurs", array()), "html", null, true);
                    echo " Coups de cœurs 
            ";
                } else {
                    // line 101
                    echo "                <a href='";
                    echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
                    echo "' title=\"J'adore cet article !\"><button type=\"button\" class=\"btn btn-primary\"  onclick=\"isNotConnected();\"><span class=\"glyphicon glyphicon-heart\"></span> Coup de cœur</button></a> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["actualiteCourante"], "nbCoupDeCoeurs", array()), "html", null, true);
                    echo " Coup de cœur
            ";
                }
                // line 102
                echo "   
          ";
            }
            // line 104
            echo "        
            </div>
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actualiteCourante'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "      </div>
    </div>
  </div>

";
        // line 112
        echo "<div align=\"center\"><a title='Remonter en haut de la page courante' href=\"#\"><button class=\"btn btn-primary\"><i class=\"fa fa-angle-double-up\"></i> Haut de page <i class=\"fa fa-angle-double-up\"></i></button></a></div>
<div align=center>";
        // line 113
        $this->loadTemplate("::pagination.html.twig", "follow_the_rhythmSymfonyBundle:Symfony:index.html.twig", 113)->display($context);
        echo "</div>
";
        
        $__internal_932cca523bb6f36b1243f36d00514b355580cf779508def7c0ec06ed6d0eaf2b->leave($__internal_932cca523bb6f36b1243f36d00514b355580cf779508def7c0ec06ed6d0eaf2b_prof);

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
        return array (  311 => 113,  308 => 112,  302 => 107,  294 => 104,  290 => 102,  282 => 101,  274 => 99,  271 => 98,  267 => 96,  259 => 95,  251 => 93,  248 => 92,  246 => 91,  241 => 89,  236 => 88,  231 => 86,  227 => 85,  220 => 84,  216 => 82,  214 => 81,  211 => 80,  207 => 78,  193 => 77,  182 => 76,  165 => 75,  162 => 74,  158 => 73,  154 => 71,  152 => 70,  149 => 69,  145 => 67,  143 => 66,  138 => 64,  135 => 63,  131 => 62,  127 => 60,  120 => 56,  115 => 54,  111 => 53,  107 => 51,  105 => 50,  86 => 36,  78 => 31,  74 => 30,  66 => 25,  62 => 24,  40 => 4,  34 => 3,  11 => 1,);
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
/* */
/*             <p>Nombre de messages par page : <select onChange='changerNbParPage()' id='nb'></p>*/
/*           <option value='{{nbParPage}}' selected>Nombre courant : {{nbParPage}}</option><option value=5>5</option><option value=10>10</option><option value=25>25</option><option value=50>50</option>*/
/*         </select>*/
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
/*                   <a title="Modifier les donnees du site." href="{{path('admin')}}"><button type="button" class="btn btn-primary"><span class="fa fa-database"></span> Accès base de données</button></a>*/
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
