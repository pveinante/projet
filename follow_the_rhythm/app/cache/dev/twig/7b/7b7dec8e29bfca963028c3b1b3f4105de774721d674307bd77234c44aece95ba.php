<?php

/* follow_the_rhythmSymfonyBundle:Symfony:accueilArtistesUniquement.html.twig */
class __TwigTemplate_7cdbe34ba1ee94debeb6af7f9a4f9ab5407632f7197f23ea4a1de1185e8e78aa extends Twig_Template
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
        $__internal_8956160f8d00825a453b0bcd861b34e06b0b52979156f9f68b1620e7280b8d20 = $this->env->getExtension("native_profiler");
        $__internal_8956160f8d00825a453b0bcd861b34e06b0b52979156f9f68b1620e7280b8d20->enter($__internal_8956160f8d00825a453b0bcd861b34e06b0b52979156f9f68b1620e7280b8d20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "follow_the_rhythmSymfonyBundle:Symfony:accueilArtistesUniquement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8956160f8d00825a453b0bcd861b34e06b0b52979156f9f68b1620e7280b8d20->leave($__internal_8956160f8d00825a453b0bcd861b34e06b0b52979156f9f68b1620e7280b8d20_prof);

    }

    // line 3
    public function block_contenuCentral($context, array $blocks = array())
    {
        $__internal_456a654a55832dcdca72013c8b9186024476fc15bcb6687a70f51e9783b2c009 = $this->env->getExtension("native_profiler");
        $__internal_456a654a55832dcdca72013c8b9186024476fc15bcb6687a70f51e9783b2c009->enter($__internal_456a654a55832dcdca72013c8b9186024476fc15bcb6687a70f51e9783b2c009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenuCentral"));

        // line 4
        echo "
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"panel panel-default\">
      <!--default panel content-->
        <div class=\"panel-heading\"><h2><b><span class=\"glyphicon glyphicon-music\"></span> Liste des Actualités</b></h2>
        Options de tri:
          <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("follow_the_rhythm_accueil", array("page" => 1, "sens" => 1)), "html", null, true);
        echo "\"><button type=\"button\" class=\"btn btn-secondary\">Toutes les actualités</button></a>
          <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("follow_the_rhythm_accueilArtistesUniquement", array("page" => 1, "sens" => 1)), "html", null, true);
        echo "\"><button type=\"button\" class=\"btn btn-secondary\">Actualites sur les artistes uniquement</button></a>
          <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("follow_the_rhythm_accueil", array("page" => 1, "sens" => 2)), "html", null, true);
        echo "\" title=\"De la plus ancienne à la plus récente\"><button class=\"btn btn-secondary\" type=\"button\">Chronologique</button></a>
          <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("follow_the_rhythm_accueil", array("page" => 1, "sens" => 1)), "html", null, true);
        echo "\" title=\"De la plus récente à la plus ancienne\"><button class=\"btn btn-secondary\" type=\"button\">Antéchronologique</button></a>  
        </div>

     
      <div class=\"list-group\">

      <!--Bouton \"soumettre actualité\"-->
        <div class=\"list-group-item\"><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("follow_the_rhythm_soumettreActualite");
        echo "\"><button type=\"button\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-plus\"></span> Soumettre actualité</button></a></div>
        <div class=\"list-group-item\"><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("follow_the_rhythm_modifierSupprimerActualite");
        echo "\"><button type=\"button\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-edit\"></span> Modifier/Supprimer actualité</button></a></div>
          
      <!--AFFICHAGE DES ACTUALITEES-->
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tabActualites"]) ? $context["tabActualites"] : $this->getContext($context, "tabActualites")));
        foreach ($context['_seq'] as $context["_key"] => $context["actualiteCourante"]) {
            // line 26
            echo "        ";
            if (twig_test_empty($this->getAttribute($context["actualiteCourante"], "artiste", array()))) {
                // line 27
                echo "        ";
            } else {
                // line 28
                echo "            ";
                if (twig_test_empty($this->getAttribute($context["actualiteCourante"], "concert", array()))) {
                    // line 29
                    echo "          <div class=\"list-group-item\"><h2><label>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["actualiteCourante"], "titre", array()), "html", null, true);
                    echo "</label></h2>
           <p><label>
            ";
                    // line 31
                    if ((twig_length_filter($this->env, $this->getAttribute($context["actualiteCourante"], "artiste", array())) > 1)) {
                        // line 32
                        echo "          Artistes concernés:
          ";
                    } else {
                        // line 34
                        echo "          Artiste concerné:
          ";
                    }
                    // line 35
                    echo "   
            ";
                    // line 36
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
                        // line 37
                        echo "             <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("follow_the_rhythm_pageArtiste", array("id" => $this->getAttribute($context["list"], "id", array()))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["list"], "nomDeScene", array()), "html", null, true);
                        echo "</a>";
                        if ( !$this->getAttribute($context["loop"], "last", array())) {
                            echo ",";
                        }
                        // line 38
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
                    // line 39
                    echo "          </p></label>
              
              <p><label>";
                    // line 41
                    echo twig_escape_filter($this->env, $this->getAttribute($context["actualiteCourante"], "description", array()), "html", null, true);
                    echo "</label></p>
              
              <p><label>Date : ";
                    // line 43
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["actualiteCourante"], "dateActualite", array()), "d/m/Y"), "html", null, true);
                    echo "</label></p>
        <!--Si coup(s) de coeur > 1-->
          ";
                    // line 45
                    if (($this->getAttribute($context["actualiteCourante"], "nbCoupDeCoeurs", array()) > 1)) {
                        // line 46
                        echo "              <button type=\"button\" class=\"btn btn-primary\"  onclick=\"isNotConnected();\">♥ Coup de cœur</button> ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["actualiteCourante"], "nbCoupDeCoeurs", array()), "html", null, true);
                        echo " Coups de cœur 
          ";
                    } else {
                        // line 48
                        echo "              <button type=\"button\" class=\"btn btn-primary\"  onclick=\"isNotConnected();\">♥ Coup de cœur</button> ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["actualiteCourante"], "nbCoupDeCoeurs", array()), "html", null, true);
                        echo " Coup de cœur
          ";
                    }
                    // line 49
                    echo "   
          ";
                    // line 50
                    if (twig_test_empty($this->getAttribute($context["actualiteCourante"], "moderateur", array()))) {
                        // line 51
                        echo "          ";
                    } else {
                        // line 52
                        echo "             <!-- <p><label>Soumis par : ";
                        echo "</label></p> -->
          ";
                    }
                    // line 53
                    echo "  
            </div>
          ";
                }
                // line 56
                echo "           ";
            }
            // line 57
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actualiteCourante'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "      </div>
    </div>
  </div>
</div>
<script>
  function isNotConnected(){
    alert(\"Il faut être connecté pour accéder à cette fonctionnalité\");
  }
</script>
";
        
        $__internal_456a654a55832dcdca72013c8b9186024476fc15bcb6687a70f51e9783b2c009->leave($__internal_456a654a55832dcdca72013c8b9186024476fc15bcb6687a70f51e9783b2c009_prof);

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
        return array (  208 => 58,  202 => 57,  199 => 56,  194 => 53,  189 => 52,  186 => 51,  184 => 50,  181 => 49,  175 => 48,  169 => 46,  167 => 45,  162 => 43,  157 => 41,  153 => 39,  139 => 38,  130 => 37,  113 => 36,  110 => 35,  106 => 34,  102 => 32,  100 => 31,  94 => 29,  91 => 28,  88 => 27,  85 => 26,  81 => 25,  75 => 22,  71 => 21,  61 => 14,  57 => 13,  53 => 12,  49 => 11,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "::vueMere.html.twig" %} {#La vue fille hérite de la vue mère#}*/
/* */
/* {% block contenuCentral %}*/
/* */
/*   <div class="container">*/
/*     <div class="row">*/
/*       <div class="panel panel-default">*/
/*       <!--default panel content-->*/
/*         <div class="panel-heading"><h2><b><span class="glyphicon glyphicon-music"></span> Liste des Actualités</b></h2>*/
/*         Options de tri:*/
/*           <a href="{{path('follow_the_rhythm_accueil',{'page': 1, 'sens': 1})}}"><button type="button" class="btn btn-secondary">Toutes les actualités</button></a>*/
/*           <a href="{{path('follow_the_rhythm_accueilArtistesUniquement',{'page': 1, 'sens': 1})}}"><button type="button" class="btn btn-secondary">Actualites sur les artistes uniquement</button></a>*/
/*           <a href="{{path('follow_the_rhythm_accueil',{'page': 1, 'sens': 2})}}" title="De la plus ancienne à la plus récente"><button class="btn btn-secondary" type="button">Chronologique</button></a>*/
/*           <a href="{{path('follow_the_rhythm_accueil',{'page': 1, 'sens': 1})}}" title="De la plus récente à la plus ancienne"><button class="btn btn-secondary" type="button">Antéchronologique</button></a>  */
/*         </div>*/
/* */
/*      */
/*       <div class="list-group">*/
/* */
/*       <!--Bouton "soumettre actualité"-->*/
/*         <div class="list-group-item"><a href="{{path('follow_the_rhythm_soumettreActualite')}}"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Soumettre actualité</button></a></div>*/
/*         <div class="list-group-item"><a href="{{path('follow_the_rhythm_modifierSupprimerActualite')}}"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span> Modifier/Supprimer actualité</button></a></div>*/
/*           */
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
/*           {% if actualiteCourante.nbCoupDeCoeurs > 1 %}*/
/*               <button type="button" class="btn btn-primary"  onclick="isNotConnected();">♥ Coup de cœur</button> {{actualiteCourante.nbCoupDeCoeurs}} Coups de cœur */
/*           {% else %}*/
/*               <button type="button" class="btn btn-primary"  onclick="isNotConnected();">♥ Coup de cœur</button> {{actualiteCourante.nbCoupDeCoeurs}} Coup de cœur*/
/*           {% endif %}   */
/*           {% if actualiteCourante.moderateur is empty %}*/
/*           {% else %}*/
/*              <!-- <p><label>Soumis par : {#actualiteCourante.moderateur.id#}</label></p> -->*/
/*           {% endif %}  */
/*             </div>*/
/*           {% endif %}*/
/*            {% endif %}*/
/*         {% endfor %}*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* <script>*/
/*   function isNotConnected(){*/
/*     alert("Il faut être connecté pour accéder à cette fonctionnalité");*/
/*   }*/
/* </script>*/
/* {% endblock %}*/
/* */
