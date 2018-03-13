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
        $__internal_a393de613d9a1787db5c968bb283fc295d763396cd4c9c1c1329b690df703209 = $this->env->getExtension("native_profiler");
        $__internal_a393de613d9a1787db5c968bb283fc295d763396cd4c9c1c1329b690df703209->enter($__internal_a393de613d9a1787db5c968bb283fc295d763396cd4c9c1c1329b690df703209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "follow_the_rhythmSymfonyBundle:Symfony:accueilArtistesUniquement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a393de613d9a1787db5c968bb283fc295d763396cd4c9c1c1329b690df703209->leave($__internal_a393de613d9a1787db5c968bb283fc295d763396cd4c9c1c1329b690df703209_prof);

    }

    // line 3
    public function block_contenuCentral($context, array $blocks = array())
    {
        $__internal_0e7278c8b05df35ba7916a8a016baaf5c1ecfefb1eeb0adadfa6524f61613a88 = $this->env->getExtension("native_profiler");
        $__internal_0e7278c8b05df35ba7916a8a016baaf5c1ecfefb1eeb0adadfa6524f61613a88->enter($__internal_0e7278c8b05df35ba7916a8a016baaf5c1ecfefb1eeb0adadfa6524f61613a88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenuCentral"));

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
          
              <p><label>Artiste concerné : <a href=\"";
                    // line 31
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("follow_the_rhythm_pageArtiste", array("id" => $this->getAttribute($this->getAttribute($context["actualiteCourante"], "artiste", array()), "id", array()))), "html", null, true);
                    echo "\" >";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["actualiteCourante"], "artiste", array()), "nomDeScene", array()), "html", null, true);
                    echo "</a> </label></p>
              
              <p><label>";
                    // line 33
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
                        echo "              <button type=\"button\" class=\"btn btn-primary\"  onclick=\"isNotConnected();\">♥ Coup de cœur</button> ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["actualiteCourante"], "nbCoupDeCoeurs", array()), "html", null, true);
                        echo " Coups de cœur 
          ";
                    } else {
                        // line 40
                        echo "              <button type=\"button\" class=\"btn btn-primary\"  onclick=\"isNotConnected();\">♥ Coup de cœur</button> ";
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
                    // line 45
                    echo "  
            </div>
          ";
                }
                // line 48
                echo "           ";
            }
            // line 49
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actualiteCourante'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
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
        
        $__internal_0e7278c8b05df35ba7916a8a016baaf5c1ecfefb1eeb0adadfa6524f61613a88->leave($__internal_0e7278c8b05df35ba7916a8a016baaf5c1ecfefb1eeb0adadfa6524f61613a88_prof);

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
        return array (  158 => 50,  152 => 49,  149 => 48,  144 => 45,  139 => 44,  136 => 43,  134 => 42,  131 => 41,  125 => 40,  119 => 38,  117 => 37,  112 => 35,  107 => 33,  100 => 31,  94 => 29,  91 => 28,  88 => 27,  85 => 26,  81 => 25,  75 => 22,  71 => 21,  61 => 14,  57 => 13,  53 => 12,  49 => 11,  40 => 4,  34 => 3,  11 => 1,);
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
/*           */
/*               <p><label>Artiste concerné : <a href="{{path('follow_the_rhythm_pageArtiste',{'id':actualiteCourante.artiste.id})}}" >{{actualiteCourante.artiste.nomDeScene}}</a> </label></p>*/
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
