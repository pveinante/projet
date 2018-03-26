<?php

/* follow_the_rhythmSymfonyBundle:Symfony:pageArtiste.html.twig */
class __TwigTemplate_9bcaf19d36c032be6c0a714bfb5908f91e91491104e6f97539a3b85952cb5474 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::vueMere.html.twig", "follow_the_rhythmSymfonyBundle:Symfony:pageArtiste.html.twig", 1);
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
        $__internal_06ebd42d7f645222c2cbd95cb6894cca2f75e3408e9667bc995becfd17ce0d5b = $this->env->getExtension("native_profiler");
        $__internal_06ebd42d7f645222c2cbd95cb6894cca2f75e3408e9667bc995becfd17ce0d5b->enter($__internal_06ebd42d7f645222c2cbd95cb6894cca2f75e3408e9667bc995becfd17ce0d5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "follow_the_rhythmSymfonyBundle:Symfony:pageArtiste.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06ebd42d7f645222c2cbd95cb6894cca2f75e3408e9667bc995becfd17ce0d5b->leave($__internal_06ebd42d7f645222c2cbd95cb6894cca2f75e3408e9667bc995becfd17ce0d5b_prof);

    }

    // line 3
    public function block_contenuCentral($context, array $blocks = array())
    {
        $__internal_7da253dd5918f20d731bd3f36610b65b67410c5f430d3ccae1873d33b82a2132 = $this->env->getExtension("native_profiler");
        $__internal_7da253dd5918f20d731bd3f36610b65b67410c5f430d3ccae1873d33b82a2132->enter($__internal_7da253dd5918f20d731bd3f36610b65b67410c5f430d3ccae1873d33b82a2132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenuCentral"));

        // line 4
        echo "<body>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"panel panel-default\">
      <!--default panel content-->
        <div class=\"panel-heading\"><h2><b><i class=\"fa fa-user-circle\"></i> ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["artiste"]) ? $context["artiste"] : $this->getContext($context, "artiste")), "nomDeScene", array()), "html", null, true);
        echo "</b></h2></div>
     
        <div class=\"list-group\">
            <div class=\"list-group-item\">
            <p align=\"center\"><img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("upload/images/Stickman.png"), "html", null, true);
        echo "\" /></p>
               <p><button class=\"btn btn-primary\" onclick=\"isNotConnected();\">Suivre</button> ";
        // line 14
        if (($this->getAttribute((isset($context["artiste"]) ? $context["artiste"] : $this->getContext($context, "artiste")), "nbFollower", array()) > 1)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["artiste"]) ? $context["artiste"] : $this->getContext($context, "artiste")), "nbFollower", array()), "html", null, true);
            echo " followers ";
        } else {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["artiste"]) ? $context["artiste"] : $this->getContext($context, "artiste")), "nbFollower", array()), "html", null, true);
            echo " follower ";
        }
        echo " </p>
               <p><h4>Nom complet de l'artiste: ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["artiste"]) ? $context["artiste"] : $this->getContext($context, "artiste")), "nomComplet", array()), "html", null, true);
        echo "</h4></p>
               <p><label><b><h3>Actualités concernant ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["artiste"]) ? $context["artiste"] : $this->getContext($context, "artiste")), "nomDeScene", array()), "html", null, true);
        echo "</h3></b></label></p>
        
                    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tabActualites"]) ? $context["tabActualites"] : $this->getContext($context, "tabActualites")));
        foreach ($context['_seq'] as $context["_key"] => $context["actualiteCourante"]) {
            // line 19
            echo "                      
                      <div class=\"list-group-item\"><h2><label>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["actualiteCourante"], "titre", array()), "html", null, true);
            echo "</label></h2>
                    <!-- si pas de concert concerné -->
                      ";
            // line 22
            if (twig_test_empty($this->getAttribute($context["actualiteCourante"], "concert", array()))) {
                // line 23
                echo "                          <p><label>Pas de concert lié</label></p>
                      ";
            } else {
                // line 25
                echo "                          <p><label>Concert lié : <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("follow_the_rhythm_pageConcert", array("id" => $this->getAttribute($this->getAttribute($context["actualiteCourante"], "concert", array()), "id", array()))), "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["actualiteCourante"], "concert", array()), "nom", array()), "html", null, true);
                echo "</a> </label></p>
                      ";
            }
            // line 27
            echo "                          <p><label>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["actualiteCourante"], "description", array()), "html", null, true);
            echo "</label></p>
                          <p><label>Date : ";
            // line 28
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["actualiteCourante"], "dateActualite", array()), "d/m/Y"), "html", null, true);
            echo "</label></p>
                    <!--Si coup(s) de coeur > 1-->
                      ";
            // line 30
            if (($this->getAttribute($context["actualiteCourante"], "nbCoupDeCoeurs", array()) > 1)) {
                // line 31
                echo "                          <button type=\"button\" class=\"btn btn-primary\"  onclick=\"isNotConnected();\">♥ Coup de cœur</button> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["actualiteCourante"], "nbCoupDeCoeurs", array()), "html", null, true);
                echo " Coups de cœur 
                      ";
            } else {
                // line 33
                echo "                          <button type=\"button\" class=\"btn btn-primary\"  onclick=\"isNotConnected();\">♥ Coup de cœur</button> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["actualiteCourante"], "nbCoupDeCoeurs", array()), "html", null, true);
                echo " Coup de cœur
                      ";
            }
            // line 34
            echo "   
                      ";
            // line 35
            if (twig_test_empty($this->getAttribute($context["actualiteCourante"], "moderateur", array()))) {
                // line 36
                echo "                      ";
            } else {
                // line 37
                echo "                         <!-- <p><label>Soumis par : ";
                echo "</label></p> -->
                      ";
            }
            // line 38
            echo "  
                      
                        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actualiteCourante'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        </div>
      </div>
    </div>
  </div>
</div>
</body>
<script>
    function isNotConnected(){
    alert(\"Il faut être connecté pour accéder à cette fonctionnalité\");
  }
    
</script>

";
        
        $__internal_7da253dd5918f20d731bd3f36610b65b67410c5f430d3ccae1873d33b82a2132->leave($__internal_7da253dd5918f20d731bd3f36610b65b67410c5f430d3ccae1873d33b82a2132_prof);

    }

    public function getTemplateName()
    {
        return "follow_the_rhythmSymfonyBundle:Symfony:pageArtiste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 42,  141 => 38,  136 => 37,  133 => 36,  131 => 35,  128 => 34,  122 => 33,  116 => 31,  114 => 30,  109 => 28,  104 => 27,  96 => 25,  92 => 23,  90 => 22,  85 => 20,  82 => 19,  78 => 18,  73 => 16,  69 => 15,  58 => 14,  54 => 13,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "::vueMere.html.twig" %} {#La vue fille hérite de la vue mère#}*/
/* */
/* {% block contenuCentral %}*/
/* <body>*/
/*   <div class="container">*/
/*     <div class="row">*/
/*       <div class="panel panel-default">*/
/*       <!--default panel content-->*/
/*         <div class="panel-heading"><h2><b><i class="fa fa-user-circle"></i> {{artiste.nomDeScene}}</b></h2></div>*/
/*      */
/*         <div class="list-group">*/
/*             <div class="list-group-item">*/
/*             <p align="center"><img src="{{ asset('upload/images/Stickman.png') }}" /></p>*/
/*                <p><button class="btn btn-primary" onclick="isNotConnected();">Suivre</button> {% if artiste.nbFollower > 1 %}{{artiste.nbFollower}} followers {% else %} {{artiste.nbFollower}} follower {% endif %} </p>*/
/*                <p><h4>Nom complet de l'artiste: {{artiste.nomComplet}}</h4></p>*/
/*                <p><label><b><h3>Actualités concernant {{artiste.nomDeScene}}</h3></b></label></p>*/
/*         */
/*                     {% for actualiteCourante in tabActualites %}*/
/*                       */
/*                       <div class="list-group-item"><h2><label>{{actualiteCourante.titre}}</label></h2>*/
/*                     <!-- si pas de concert concerné -->*/
/*                       {% if actualiteCourante.concert is empty %}*/
/*                           <p><label>Pas de concert lié</label></p>*/
/*                       {% else %}*/
/*                           <p><label>Concert lié : <a href="{{path('follow_the_rhythm_pageConcert',{'id':actualiteCourante.concert.id})}}" >{{actualiteCourante.concert.nom}}</a> </label></p>*/
/*                       {% endif %}*/
/*                           <p><label>{{actualiteCourante.description}}</label></p>*/
/*                           <p><label>Date : {{actualiteCourante.dateActualite|date("d/m/Y")}}</label></p>*/
/*                     <!--Si coup(s) de coeur > 1-->*/
/*                       {% if actualiteCourante.nbCoupDeCoeurs > 1 %}*/
/*                           <button type="button" class="btn btn-primary"  onclick="isNotConnected();">♥ Coup de cœur</button> {{actualiteCourante.nbCoupDeCoeurs}} Coups de cœur */
/*                       {% else %}*/
/*                           <button type="button" class="btn btn-primary"  onclick="isNotConnected();">♥ Coup de cœur</button> {{actualiteCourante.nbCoupDeCoeurs}} Coup de cœur*/
/*                       {% endif %}   */
/*                       {% if actualiteCourante.moderateur is empty %}*/
/*                       {% else %}*/
/*                          <!-- <p><label>Soumis par : {#actualiteCourante.moderateur.id#}</label></p> -->*/
/*                       {% endif %}  */
/*                       */
/*                         </div>*/
/*         {% endfor %}*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* </body>*/
/* <script>*/
/*     function isNotConnected(){*/
/*     alert("Il faut être connecté pour accéder à cette fonctionnalité");*/
/*   }*/
/*     */
/* </script>*/
/* */
/* {% endblock %}*/
