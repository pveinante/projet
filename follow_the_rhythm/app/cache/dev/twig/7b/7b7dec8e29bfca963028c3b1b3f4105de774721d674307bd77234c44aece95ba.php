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
        $__internal_aceaaa573e8e5d79c32f3aa141cd651eee274badd80f4704db97e6c54084f8c7 = $this->env->getExtension("native_profiler");
        $__internal_aceaaa573e8e5d79c32f3aa141cd651eee274badd80f4704db97e6c54084f8c7->enter($__internal_aceaaa573e8e5d79c32f3aa141cd651eee274badd80f4704db97e6c54084f8c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "follow_the_rhythmSymfonyBundle:Symfony:accueilArtistesUniquement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aceaaa573e8e5d79c32f3aa141cd651eee274badd80f4704db97e6c54084f8c7->leave($__internal_aceaaa573e8e5d79c32f3aa141cd651eee274badd80f4704db97e6c54084f8c7_prof);

    }

    // line 3
    public function block_contenuCentral($context, array $blocks = array())
    {
        $__internal_37b0f3d13fde12c78b11801ed08f3db6e974f8f92d7ccad1ea558604a0796eec = $this->env->getExtension("native_profiler");
        $__internal_37b0f3d13fde12c78b11801ed08f3db6e974f8f92d7ccad1ea558604a0796eec->enter($__internal_37b0f3d13fde12c78b11801ed08f3db6e974f8f92d7ccad1ea558604a0796eec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenuCentral"));

        // line 4
        echo "
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"panel panel-default\">
      <!--default panel content-->
        <div class=\"panel-heading\"><h2><b><span class=\"fa fa-list\"></span> Liste des Actualités</b></h2>
         
         <label>Options de tri :</label>
          <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("follow_the_rhythm_accueil", array("page" => 1, "sens" => 1)), "html", null, true);
        echo "\" title=\"Affiche toutes les actualités\"><button type=\"button\" class=\"btn btn-secondary\">Toutes les actualités</button></a>
          <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("follow_the_rhythm_accueilArtistesUniquement", array("page" => 1, "sens" => 1)), "html", null, true);
        echo "\" title=\"Affiche seulement les actualités qui concernent des artistes et non des concerts\"><button type=\"button\" class=\"btn btn-secondary\" autofocus>Actualites sur les artistes uniquement</button></a>
          <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("follow_the_rhythm_accueilArtistesUniquement", array("page" => 1, "sens" => 2)), "html", null, true);
        echo "\" title=\"Tri les actualités de la plus ancienne à la plus récente\"><button class=\"btn btn-secondary\" type=\"button\"><span class=\"glyphicon glyphicon-time\"></span><span class=\"glyphicon glyphicon-sort-by-order\"></span> Chronologique</button></a>
          <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("follow_the_rhythm_accueilArtistesUniquement", array("page" => 1, "sens" => 1)), "html", null, true);
        echo "\" title=\"Tri les actualités de la plus récente à la plus ancienne\"><button class=\"btn btn-secondary\" type=\"button\"><span class=\"glyphicon glyphicon-time\"></span><span class=\"glyphicon glyphicon-sort-by-order-alt\"></span>Antéchronologique</button></a>          
       </div>

     
      <div class=\"list-group\">

      <!--Bouton \"soumettre actualité\"-->
        <div class=\"list-group-item\">
          <label>Options modérateur : </label> <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("follow_the_rhythm_soumettreActualite");
        echo "\"><button type=\"button\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-plus\"></span> Soumettre actualité</button></a>
          <a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("follow_the_rhythm_modifierSupprimerActualite");
        echo "\"><button type=\"button\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-edit\"></span> Modifier/Supprimer actualité</button></a>
        </div>
      <!--AFFICHAGE DES ACTUALITEES-->
        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tabActualites"]) ? $context["tabActualites"] : $this->getContext($context, "tabActualites")));
        foreach ($context['_seq'] as $context["_key"] => $context["actualiteCourante"]) {
            // line 28
            echo "        ";
            if (twig_test_empty($this->getAttribute($context["actualiteCourante"], "artiste", array()))) {
                // line 29
                echo "        ";
            } else {
                // line 30
                echo "            ";
                if (twig_test_empty($this->getAttribute($context["actualiteCourante"], "concert", array()))) {
                    // line 31
                    echo "          <div class=\"list-group-item\"><h2><label>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["actualiteCourante"], "titre", array()), "html", null, true);
                    echo "</label></h2>
           <p><label>
            ";
                    // line 33
                    if ((twig_length_filter($this->env, $this->getAttribute($context["actualiteCourante"], "artiste", array())) > 1)) {
                        // line 34
                        echo "          Artistes concernés:
          ";
                    } else {
                        // line 36
                        echo "          Artiste concerné:
          ";
                    }
                    // line 37
                    echo "   
            ";
                    // line 38
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
                        // line 39
                        echo "             <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("follow_the_rhythm_pageArtiste", array("id" => $this->getAttribute($context["list"], "id", array()))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["list"], "nomDeScene", array()), "html", null, true);
                        echo "</a>";
                        if ( !$this->getAttribute($context["loop"], "last", array())) {
                            echo ",";
                        }
                        // line 40
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
                    // line 41
                    echo "          </p></label>
              
              <p><label>";
                    // line 43
                    echo twig_escape_filter($this->env, $this->getAttribute($context["actualiteCourante"], "description", array()), "html", null, true);
                    echo "</label></p>
              
              <p><label>Date : ";
                    // line 45
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["actualiteCourante"], "dateActualite", array()), "d/m/Y"), "html", null, true);
                    echo "</label></p>
        <!--Si coup(s) de coeur > 1-->
          ";
                    // line 47
                    if (($this->getAttribute($context["actualiteCourante"], "nbCoupDeCoeurs", array()) > 1)) {
                        // line 48
                        echo "              <button type=\"button\" class=\"btn btn-primary\"  onclick=\"isNotConnected();\">♥ Coup de cœur</button> ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["actualiteCourante"], "nbCoupDeCoeurs", array()), "html", null, true);
                        echo " Coups de cœur 
          ";
                    } else {
                        // line 50
                        echo "              <button type=\"button\" class=\"btn btn-primary\"  onclick=\"isNotConnected();\">♥ Coup de cœur</button> ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["actualiteCourante"], "nbCoupDeCoeurs", array()), "html", null, true);
                        echo " Coup de cœur
          ";
                    }
                    // line 51
                    echo "   
          ";
                    // line 52
                    if (twig_test_empty($this->getAttribute($context["actualiteCourante"], "moderateur", array()))) {
                        // line 53
                        echo "          ";
                    } else {
                        // line 54
                        echo "             <!-- <p><label>Soumis par : ";
                        echo "</label></p> -->
          ";
                    }
                    // line 55
                    echo "  
            </div>
          ";
                }
                // line 58
                echo "           ";
            }
            // line 59
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actualiteCourante'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
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
        
        $__internal_37b0f3d13fde12c78b11801ed08f3db6e974f8f92d7ccad1ea558604a0796eec->leave($__internal_37b0f3d13fde12c78b11801ed08f3db6e974f8f92d7ccad1ea558604a0796eec_prof);

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
        return array (  210 => 60,  204 => 59,  201 => 58,  196 => 55,  191 => 54,  188 => 53,  186 => 52,  183 => 51,  177 => 50,  171 => 48,  169 => 47,  164 => 45,  159 => 43,  155 => 41,  141 => 40,  132 => 39,  115 => 38,  112 => 37,  108 => 36,  104 => 34,  102 => 33,  96 => 31,  93 => 30,  90 => 29,  87 => 28,  83 => 27,  77 => 24,  73 => 23,  62 => 15,  58 => 14,  54 => 13,  50 => 12,  40 => 4,  34 => 3,  11 => 1,);
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
/*         <div class="panel-heading"><h2><b><span class="fa fa-list"></span> Liste des Actualités</b></h2>*/
/*          */
/*          <label>Options de tri :</label>*/
/*           <a href="{{path('follow_the_rhythm_accueil',{'page': 1, 'sens': 1})}}" title="Affiche toutes les actualités"><button type="button" class="btn btn-secondary">Toutes les actualités</button></a>*/
/*           <a href="{{path('follow_the_rhythm_accueilArtistesUniquement',{'page': 1, 'sens': 1})}}" title="Affiche seulement les actualités qui concernent des artistes et non des concerts"><button type="button" class="btn btn-secondary" autofocus>Actualites sur les artistes uniquement</button></a>*/
/*           <a href="{{path('follow_the_rhythm_accueilArtistesUniquement',{'page': 1, 'sens': 2})}}" title="Tri les actualités de la plus ancienne à la plus récente"><button class="btn btn-secondary" type="button"><span class="glyphicon glyphicon-time"></span><span class="glyphicon glyphicon-sort-by-order"></span> Chronologique</button></a>*/
/*           <a href="{{path('follow_the_rhythm_accueilArtistesUniquement',{'page': 1, 'sens': 1})}}" title="Tri les actualités de la plus récente à la plus ancienne"><button class="btn btn-secondary" type="button"><span class="glyphicon glyphicon-time"></span><span class="glyphicon glyphicon-sort-by-order-alt"></span>Antéchronologique</button></a>          */
/*        </div>*/
/* */
/*      */
/*       <div class="list-group">*/
/* */
/*       <!--Bouton "soumettre actualité"-->*/
/*         <div class="list-group-item">*/
/*           <label>Options modérateur : </label> <a href="{{path('follow_the_rhythm_soumettreActualite')}}"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Soumettre actualité</button></a>*/
/*           <a href="{{path('follow_the_rhythm_modifierSupprimerActualite')}}"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span> Modifier/Supprimer actualité</button></a>*/
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
