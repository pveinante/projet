<?php

/* follow_the_rhythmSymfonyBundle:Symfony:pageConcert.html.twig */
class __TwigTemplate_2f43b8fe43b5d651f7df2b1ddcac48bd7c4399b993f2f6f19ed20f5b458a6d39 extends Twig_Template
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
        $__internal_5160725f5b2bc168180480b8b5634ed6f90edd72f3fd0d762f5385381e593a37 = $this->env->getExtension("native_profiler");
        $__internal_5160725f5b2bc168180480b8b5634ed6f90edd72f3fd0d762f5385381e593a37->enter($__internal_5160725f5b2bc168180480b8b5634ed6f90edd72f3fd0d762f5385381e593a37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "follow_the_rhythmSymfonyBundle:Symfony:pageConcert.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5160725f5b2bc168180480b8b5634ed6f90edd72f3fd0d762f5385381e593a37->leave($__internal_5160725f5b2bc168180480b8b5634ed6f90edd72f3fd0d762f5385381e593a37_prof);

    }

    // line 3
    public function block_contenuCentral($context, array $blocks = array())
    {
        $__internal_36f0f77dd6f198d04cc72a2519b2ff45fedb41f731d2b9c5be0785c2e426593f = $this->env->getExtension("native_profiler");
        $__internal_36f0f77dd6f198d04cc72a2519b2ff45fedb41f731d2b9c5be0785c2e426593f->enter($__internal_36f0f77dd6f198d04cc72a2519b2ff45fedb41f731d2b9c5be0785c2e426593f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenuCentral"));

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
            <input type=\"button\" class=\"btn btn-primary\" value=\"J'y serais\" onclick=\"allerConcert();\">
        </div>
     
       
     
        <div class=\"list-group\">
            
            <div class=\"list-group-item\">
                <h3>Lieu</h3>
                ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["concert"]) ? $context["concert"] : $this->getContext($context, "concert")), "lieu", array()), "html", null, true);
        echo "
            </div>
            <div class=\"list-group-item\">
                <h3>Description</h3>
                ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["concert"]) ? $context["concert"] : $this->getContext($context, "concert")), "description", array()), "html", null, true);
        echo "
            </div>
            <div class=\"list-group-item\">
                <h3>Artiste participant</h3>
            
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
        
        $__internal_36f0f77dd6f198d04cc72a2519b2ff45fedb41f731d2b9c5be0785c2e426593f->leave($__internal_36f0f77dd6f198d04cc72a2519b2ff45fedb41f731d2b9c5be0785c2e426593f_prof);

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
        return array (  91 => 32,  80 => 30,  76 => 29,  68 => 24,  61 => 20,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
/*             <input type="button" class="btn btn-primary" value="J'y serais" onclick="allerConcert();">*/
/*         </div>*/
/*      */
/*        */
/*      */
/*         <div class="list-group">*/
/*             */
/*             <div class="list-group-item">*/
/*                 <h3>Lieu</h3>*/
/*                 {{concert.lieu}}*/
/*             </div>*/
/*             <div class="list-group-item">*/
/*                 <h3>Description</h3>*/
/*                 {{concert.description}}*/
/*             </div>*/
/*             <div class="list-group-item">*/
/*                 <h3>Artiste participant</h3>*/
/*             */
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
