<?php

/* follow_the_rhythmSymfonyBundle:Symfony:accueilArtistesUniquement.html.twig */
class __TwigTemplate_9a41474982c1ea95fa1ef28ee95c69b7676a8d3e1dc875f5eba28c40bc61daa8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::vueMere.html.twig", "follow_the_rhythmSymfonyBundle:Symfony:accueilArtistesUniquement.html.twig", 1);
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
        $__internal_4925877ffcdb76d2f6649908ff3671516d1abcb6f209c268188516102d651b14 = $this->env->getExtension("native_profiler");
        $__internal_4925877ffcdb76d2f6649908ff3671516d1abcb6f209c268188516102d651b14->enter($__internal_4925877ffcdb76d2f6649908ff3671516d1abcb6f209c268188516102d651b14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "follow_the_rhythmSymfonyBundle:Symfony:accueilArtistesUniquement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4925877ffcdb76d2f6649908ff3671516d1abcb6f209c268188516102d651b14->leave($__internal_4925877ffcdb76d2f6649908ff3671516d1abcb6f209c268188516102d651b14_prof);

    }

    // line 3
    public function block_contenuCentral($context, array $blocks = array())
    {
        $__internal_4d96065c346d12061ddfb57398de8b1f8104b14ec4497eb70cd39f3c7b89475c = $this->env->getExtension("native_profiler");
        $__internal_4d96065c346d12061ddfb57398de8b1f8104b14ec4497eb70cd39f3c7b89475c->enter($__internal_4d96065c346d12061ddfb57398de8b1f8104b14ec4497eb70cd39f3c7b89475c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenuCentral"));

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
      <!--default panel content-->
      <div class=\"panel-heading\">
          <div class=\"row\">
          <div class=\"col-lg-6\">
            <h2><b><span class=\"fa fa-list\"></span> Liste des Actualités</b></h2>
            Nombre de messages par page : <select onChange='changerNbParPage()' id='nb'>
          <option value='";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["nbParPage"]) ? $context["nbParPage"] : $this->getContext($context, "nbParPage")), "html", null, true);
        echo "' selected>Nombre courant : ";
        echo twig_escape_filter($this->env, (isset($context["nbParPage"]) ? $context["nbParPage"] : $this->getContext($context, "nbParPage")), "html", null, true);
        echo "</option><option value=5>5</option><option value=10>10</option><option value=25>25</option><option value=50>50</option>
        </select>
          </div>
      
          <div class=\"col-lg-6\">
            <div class=\"input-group\">
              <span class=\"input-group-btn\">
                <button class=\"btn btn-secondary\" type=\"button\">Go!</button>
              </span>
              <input type=\"text\" class=\"form-control\" placeholder=\"Search for...\">
            </div>
          </div>
          </div>
          <div class=\"row\">
            <div class=\"col-lg-6\">
              <label>Options de tri :</label>
              <a href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("follow_the_rhythm_accueil", array("page" => 1, "sens" => 1, "nbParPage" => (isset($context["nbParPage"]) ? $context["nbParPage"] : $this->getContext($context, "nbParPage")))), "html", null, true);
        echo "\" title=\"Affiche toutes les actualités\"><button type=\"button\" class=\"btn btn-secondary\"autofocus>Toutes les actualités</button></a>
              <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("follow_the_rhythm_accueilArtistesUniquement", array("page" => 1, "sens" => 1, "nbParPage" => (isset($context["nbParPage"]) ? $context["nbParPage"] : $this->getContext($context, "nbParPage")))), "html", null, true);
        echo "\" title=\"Affiche seulement les actualités qui concernent des artistes et non des concerts\"><button type=\"button\" class=\"btn btn-secondary\">Actualites sur les artistes uniquement</button></a>
            </div>

            <div class=\"col-lg-6\">
              <div class=\"pull-right\">
              <a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("follow_the_rhythm_accueilArtistesUniquement", array("page" => 1, "sens" => 2, "nbParPage" => (isset($context["nbParPage"]) ? $context["nbParPage"] : $this->getContext($context, "nbParPage")))), "html", null, true);
        echo "\" title=\"Tri les actualités de la plus ancienne à la plus récente\"><button class=\"btn btn-secondary\" type=\"button\"><span class=\"glyphicon glyphicon-time\"></span><span class=\"glyphicon glyphicon-sort-by-order\"></span> Chronologique</button></a>
          <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("follow_the_rhythm_accueilArtistesUniquement", array("page" => 1, "sens" => 1, "nbParPage" => (isset($context["nbParPage"]) ? $context["nbParPage"] : $this->getContext($context, "nbParPage")))), "html", null, true);
        echo "\" title=\"Tri les actualités de la plus récente à la plus ancienne\"><button class=\"btn btn-secondary\" type=\"button\"><span class=\"glyphicon glyphicon-time\"></span><span class=\"glyphicon glyphicon-sort-by-order-alt\"></span>Antéchronologique</button></a> 
          </div>
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
      <!--AFFICHAGE DES ACTUALITEES-->
        ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tabActualites"]) ? $context["tabActualites"] : $this->getContext($context, "tabActualites")));
        foreach ($context['_seq'] as $context["_key"] => $context["actualiteCourante"]) {
            // line 58
            echo "        ";
            if (twig_test_empty($this->getAttribute($context["actualiteCourante"], "artiste", array()))) {
                // line 59
                echo "        ";
            } else {
                // line 60
                echo "            ";
                if (twig_test_empty($this->getAttribute($context["actualiteCourante"], "concert", array()))) {
                    // line 61
                    echo "          <div class=\"list-group-item\"><h2><label>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["actualiteCourante"], "titre", array()), "html", null, true);
                    echo "</label></h2>
           <p><label>
            ";
                    // line 63
                    if ((twig_length_filter($this->env, $this->getAttribute($context["actualiteCourante"], "artiste", array())) > 1)) {
                        // line 64
                        echo "          Artistes concernés:
          ";
                    } else {
                        // line 66
                        echo "          Artiste concerné:
          ";
                    }
                    // line 67
                    echo "   
            ";
                    // line 68
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
                        // line 69
                        echo "             <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("follow_the_rhythm_pageArtiste", array("id" => $this->getAttribute($context["list"], "id", array()))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["list"], "nomDeScene", array()), "html", null, true);
                        echo "</a>";
                        if ( !$this->getAttribute($context["loop"], "last", array())) {
                            echo ",";
                        }
                        // line 70
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
                    // line 71
                    echo "          </p></label>
              
              <p><label>";
                    // line 73
                    echo twig_escape_filter($this->env, $this->getAttribute($context["actualiteCourante"], "description", array()), "html", null, true);
                    echo "</label></p>
              
              <p><label>Date : ";
                    // line 75
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["actualiteCourante"], "dateActualite", array()), "d/m/Y"), "html", null, true);
                    echo "</label></p>
        <!--Si coup(s) de coeur > 1-->
          ";
                    // line 77
                    if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                        // line 78
                        echo "            ";
                        if (($this->getAttribute($context["actualiteCourante"], "nbCoupDeCoeurs", array()) > 1)) {
                            // line 79
                            echo "                <a href='' title=\"J'adore cet article !\"><button type=\"button\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-heart\"></span> Coup de cœur</button></a> ";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["actualiteCourante"], "nbCoupDeCoeurs", array()), "html", null, true);
                            echo " Coups de cœur 
            ";
                        } else {
                            // line 81
                            echo "                <a href='' title=\"J'adore cet article !\"><button type=\"button\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-heart\"></span> Coup de cœur</button></a> ";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["actualiteCourante"], "nbCoupDeCoeurs", array()), "html", null, true);
                            echo " Coup de cœur
            ";
                        }
                        // line 82
                        echo "   
          ";
                    } else {
                        // line 84
                        echo "            ";
                        if (($this->getAttribute($context["actualiteCourante"], "nbCoupDeCoeurs", array()) > 1)) {
                            // line 85
                            echo "                <a href='' title=\"J'adore cet article !\"><button type=\"button\" class=\"btn btn-primary\"  onclick=\"isNotConnected();\"><span class=\"glyphicon glyphicon-heart\"></span> Coup de cœur</button></a> ";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["actualiteCourante"], "nbCoupDeCoeurs", array()), "html", null, true);
                            echo " Coups de cœur 
            ";
                        } else {
                            // line 87
                            echo "                <a href='' title=\"J'adore cet article !\"><button type=\"button\" class=\"btn btn-primary\"  onclick=\"isNotConnected();\"><span class=\"glyphicon glyphicon-heart\"></span> Coup de cœur</button></a> ";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["actualiteCourante"], "nbCoupDeCoeurs", array()), "html", null, true);
                            echo " Coup de cœur
            ";
                        }
                        // line 88
                        echo "   
          ";
                    }
                    // line 90
                    echo "          
            </div>
          ";
                }
                // line 93
                echo "           ";
            }
            // line 94
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actualiteCourante'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "      </div>
    </div>
<script>
  function isNotConnected(){
    alert(\"Il faut être connecté pour accéder à cette fonctionnalité\");
  }
</script>
";
        
        $__internal_4d96065c346d12061ddfb57398de8b1f8104b14ec4497eb70cd39f3c7b89475c->leave($__internal_4d96065c346d12061ddfb57398de8b1f8104b14ec4497eb70cd39f3c7b89475c_prof);

    }

    public function getTemplateName()
    {
        return "follow_the_rhythmSymfonyBundle:Symfony:accueilArtistesUniquement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 95,  246 => 94,  243 => 93,  238 => 90,  234 => 88,  228 => 87,  222 => 85,  219 => 84,  215 => 82,  209 => 81,  203 => 79,  200 => 78,  198 => 77,  193 => 75,  188 => 73,  184 => 71,  170 => 70,  161 => 69,  144 => 68,  141 => 67,  137 => 66,  133 => 64,  131 => 63,  125 => 61,  122 => 60,  119 => 59,  116 => 58,  112 => 57,  96 => 44,  92 => 43,  84 => 38,  80 => 37,  59 => 21,  40 => 4,  34 => 3,  11 => 1,);
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
/*   */
/*   <div class="container">*/
/*       <div class="panel panel-default">*/
/*       <!--default panel content-->*/
/*       <div class="panel-heading">*/
/*           <div class="row">*/
/*           <div class="col-lg-6">*/
/*             <h2><b><span class="fa fa-list"></span> Liste des Actualités</b></h2>*/
/*             Nombre de messages par page : <select onChange='changerNbParPage()' id='nb'>*/
/*           <option value='{{nbParPage}}' selected>Nombre courant : {{nbParPage}}</option><option value=5>5</option><option value=10>10</option><option value=25>25</option><option value=50>50</option>*/
/*         </select>*/
/*           </div>*/
/*       */
/*           <div class="col-lg-6">*/
/*             <div class="input-group">*/
/*               <span class="input-group-btn">*/
/*                 <button class="btn btn-secondary" type="button">Go!</button>*/
/*               </span>*/
/*               <input type="text" class="form-control" placeholder="Search for...">*/
/*             </div>*/
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
/*               <a href="{{path('follow_the_rhythm_accueilArtistesUniquement',{'page': 1, 'sens': 2, 'nbParPage': nbParPage})}}" title="Tri les actualités de la plus ancienne à la plus récente"><button class="btn btn-secondary" type="button"><span class="glyphicon glyphicon-time"></span><span class="glyphicon glyphicon-sort-by-order"></span> Chronologique</button></a>*/
/*           <a href="{{path('follow_the_rhythm_accueilArtistesUniquement',{'page': 1, 'sens': 1, 'nbParPage': nbParPage})}}" title="Tri les actualités de la plus récente à la plus ancienne"><button class="btn btn-secondary" type="button"><span class="glyphicon glyphicon-time"></span><span class="glyphicon glyphicon-sort-by-order-alt"></span>Antéchronologique</button></a> */
/*           </div>*/
/*            </div>*/
/*      <!--     <div class="dropdown">*/
/*             <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Trier par ordre<span class="caret"></span></button>*/
/*             <ul class="dropdown-menu">*/
/*               <li>Chronologique</li>*/
/*               <li>Antéchronologique</li>*/
/*             </ul>*/
/*           </div>-->*/
/*           </div>*/
/*         </div>*/
/*       <!--AFFICHAGE DES ACTUALITEES-->*/
/*         {% for actualiteCourante in tabActualites %}*/
/*         {% if actualiteCourante.artiste is empty %}*/
/*         {% else %}*/
/*             {% if actualiteCourante.concert is empty %}*/
/*           <div class="list-group-item"><h2><label>{{actualiteCourante.titre}}</label></h2>*/
/*            <p><label>*/
/*             {% if actualiteCourante.artiste|length > 1 %}*/
/*           Artistes concernés:*/
/*           {% else %}*/
/*           Artiste concerné:*/
/*           {% endif %}   */
/*             {% for list in actualiteCourante.artiste %}*/
/*              <a href="{{path('follow_the_rhythm_pageArtiste',{'id':list.id})}}">{{list.nomDeScene}}</a>{% if not loop.last %},{% endif %}*/
/*           {% endfor %}*/
/*           </p></label>*/
/*               */
/*               <p><label>{{actualiteCourante.description}}</label></p>*/
/*               */
/*               <p><label>Date : {{actualiteCourante.dateActualite|date("d/m/Y")}}</label></p>*/
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
/*           */
/*             </div>*/
/*           {% endif %}*/
/*            {% endif %}*/
/*         {% endfor %}*/
/*       </div>*/
/*     </div>*/
/* <script>*/
/*   function isNotConnected(){*/
/*     alert("Il faut être connecté pour accéder à cette fonctionnalité");*/
/*   }*/
/* </script>*/
/* {% endblock %}*/
/* */
