<?php

/* follow_the_rhythmSymfonyBundle:Symfony:pageConcert.html.twig */
class __TwigTemplate_619ac1f1566f9d6971bc10ba265c8d618424a82c9a58761e62a059680d595241 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::vueMere.html.twig", "follow_the_rhythmSymfonyBundle:Symfony:pageConcert.html.twig", 1);
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
        $__internal_0f8757fb8bcf0427661b0e3c444956a514c7c89b4b82980790e53baa8d7a1c2d = $this->env->getExtension("native_profiler");
        $__internal_0f8757fb8bcf0427661b0e3c444956a514c7c89b4b82980790e53baa8d7a1c2d->enter($__internal_0f8757fb8bcf0427661b0e3c444956a514c7c89b4b82980790e53baa8d7a1c2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "follow_the_rhythmSymfonyBundle:Symfony:pageConcert.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f8757fb8bcf0427661b0e3c444956a514c7c89b4b82980790e53baa8d7a1c2d->leave($__internal_0f8757fb8bcf0427661b0e3c444956a514c7c89b4b82980790e53baa8d7a1c2d_prof);

    }

    // line 3
    public function block_contenuCentral($context, array $blocks = array())
    {
        $__internal_e97f7c11f81b13087b3c1a15f2adb6f0e70b6bead4877decf1a869ee343c908a = $this->env->getExtension("native_profiler");
        $__internal_e97f7c11f81b13087b3c1a15f2adb6f0e70b6bead4877decf1a869ee343c908a->enter($__internal_e97f7c11f81b13087b3c1a15f2adb6f0e70b6bead4877decf1a869ee343c908a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenuCentral"));

        // line 4
        echo "<body>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"panel panel-default\">
      <!--default panel content-->
        <div class=\"panel-heading\">
            <h2><b>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["concert"]) ? $context["concert"] : $this->getContext($context, "concert")), "nom", array()), "html", null, true);
        echo "</b></h2> 
            <label>";
        // line 11
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["concert"]) ? $context["concert"] : $this->getContext($context, "concert")), "dateConcert", array()), "d/m/Y"), "html", null, true);
        echo "</label>
            <input type=\"button\" class=\"btn btn-primary\" value=\"Suivre\" onclick=\"allerConcert();\"suivre>
        </div>
     
       
     
        <div class=\"list-group\">
            
            <div class=\"list-group-item\">
                <p><label><h3>Lieu</h3></label></p>
                <p><label>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["concert"]) ? $context["concert"] : $this->getContext($context, "concert")), "lieu", array()), "html", null, true);
        echo "</label></p>
            </div>
            <div class=\"list-group-item\">
                <p><label><h3>Description</h3></label></p>
                <p><label>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["concert"]) ? $context["concert"] : $this->getContext($context, "concert")), "description", array()), "html", null, true);
        echo "</label></p>
            </div>
            <div class=\"list-group-item\">
                <p><label><h3>Artiste participant</h3></label></p>
                ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["artiste"]) ? $context["artiste"] : $this->getContext($context, "artiste")));
        foreach ($context['_seq'] as $context["_key"] => $context["artisteCourant"]) {
            // line 30
            echo "                   <p> <label> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("follow_the_rhythm_pageArtiste", array("id" => $this->getAttribute($context["artisteCourant"], "id", array()))), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["artisteCourant"], "nomDeScene", array()), "html", null, true);
            echo "</a></label></p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['artisteCourant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "            </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
<script>
function allerConcert(){
  alert(\"Il faut être connecté pour accéder à cette fonctionnalité\");
}
</script>
";
        
        $__internal_e97f7c11f81b13087b3c1a15f2adb6f0e70b6bead4877decf1a869ee343c908a->leave($__internal_e97f7c11f81b13087b3c1a15f2adb6f0e70b6bead4877decf1a869ee343c908a_prof);

    }

    public function getTemplateName()
    {
        return "follow_the_rhythmSymfonyBundle:Symfony:pageConcert.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 32,  83 => 30,  79 => 29,  72 => 25,  65 => 21,  52 => 11,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
/*         <div class="panel-heading">*/
/*             <h2><b>{{concert.nom}}</b></h2> */
/*             <label>{{concert.dateConcert|date("d/m/Y")}}</label>*/
/*             <input type="button" class="btn btn-primary" value="Suivre" onclick="allerConcert();"suivre>*/
/*         </div>*/
/*      */
/*        */
/*      */
/*         <div class="list-group">*/
/*             */
/*             <div class="list-group-item">*/
/*                 <p><label><h3>Lieu</h3></label></p>*/
/*                 <p><label>{{concert.lieu}}</label></p>*/
/*             </div>*/
/*             <div class="list-group-item">*/
/*                 <p><label><h3>Description</h3></label></p>*/
/*                 <p><label>{{concert.description}}</label></p>*/
/*             </div>*/
/*             <div class="list-group-item">*/
/*                 <p><label><h3>Artiste participant</h3></label></p>*/
/*                 {% for artisteCourant in artiste %}*/
/*                    <p> <label> <a href="{{path('follow_the_rhythm_pageArtiste',{'id':artisteCourant.id})}}" >{{artisteCourant.nomDeScene}}</a></label></p>*/
/*                 {% endfor %}*/
/*             </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* </body>*/
/* <script>*/
/* function allerConcert(){*/
/*   alert("Il faut être connecté pour accéder à cette fonctionnalité");*/
/* }*/
/* </script>*/
/* {% endblock %}*/
