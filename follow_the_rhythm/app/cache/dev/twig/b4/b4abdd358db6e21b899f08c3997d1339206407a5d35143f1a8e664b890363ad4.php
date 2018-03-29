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
        $__internal_1ff0bbdb03f5910a9396c7b2600ba39ff3ed9794482d9ee96305578a891e47b5 = $this->env->getExtension("native_profiler");
        $__internal_1ff0bbdb03f5910a9396c7b2600ba39ff3ed9794482d9ee96305578a891e47b5->enter($__internal_1ff0bbdb03f5910a9396c7b2600ba39ff3ed9794482d9ee96305578a891e47b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "follow_the_rhythmSymfonyBundle:Symfony:pageConcert.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ff0bbdb03f5910a9396c7b2600ba39ff3ed9794482d9ee96305578a891e47b5->leave($__internal_1ff0bbdb03f5910a9396c7b2600ba39ff3ed9794482d9ee96305578a891e47b5_prof);

    }

    // line 3
    public function block_contenuCentral($context, array $blocks = array())
    {
        $__internal_06a2ca7bc36a8712fd213197c7862275e42f9d70c22d3bb396780cf9839394f9 = $this->env->getExtension("native_profiler");
        $__internal_06a2ca7bc36a8712fd213197c7862275e42f9d70c22d3bb396780cf9839394f9->enter($__internal_06a2ca7bc36a8712fd213197c7862275e42f9d70c22d3bb396780cf9839394f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenuCentral"));

        // line 4
        echo "<body>
  <div class=\"container\">
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
            ";
        // line 12
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 13
            echo "              ";
            if ((isset($context["dejaSuivi"]) ? $context["dejaSuivi"] : $this->getContext($context, "dejaSuivi"))) {
                // line 14
                echo "                <a title='Ne plus suivre ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["concert"]) ? $context["concert"] : $this->getContext($context, "concert")), "nom", array()), "html", null, true);
                echo "' href='";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("follow_the_rhythm_nePlusSuivreConcert", array("concert" => $this->getAttribute((isset($context["concert"]) ? $context["concert"] : $this->getContext($context, "concert")), "id", array()))), "html", null, true);
                echo "'><p><button class=\"btn btn-primary\">Ne plus suivre</button></a></p>
              ";
            } else {
                // line 16
                echo "                <a title='Suivre ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["concert"]) ? $context["concert"] : $this->getContext($context, "concert")), "nom", array()), "html", null, true);
                echo "' href='";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("follow_the_rhythm_suivreConcert", array("concert" => $this->getAttribute((isset($context["concert"]) ? $context["concert"] : $this->getContext($context, "concert")), "id", array()))), "html", null, true);
                echo "'><p><button class=\"btn btn-primary\">Suivre</button></a></p>
             ";
            }
            // line 18
            echo "             ";
        } else {
            // line 19
            echo "               <a title='Connectez-vous pour suivre ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["concert"]) ? $context["concert"] : $this->getContext($context, "concert")), "nom", array()), "html", null, true);
            echo "' href='";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "'><input type=\"button\" class=\"btn btn-primary\" value=\"Connectez-vous pour suivre ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["concert"]) ? $context["concert"] : $this->getContext($context, "concert")), "nom", array()), "html", null, true);
            echo ".\" onclick=\"allerConcert();\"></a>
            ";
        }
        // line 21
        echo "           </div>
          <div class=\"row\">
            <div class=\"col-lg-12\">
     
     
     
        <div class=\"list-group\">
            
            <div class=\"list-group-item\">
                <p><label><b><h3>Lieu</h3></b></label></p>
                <p><label>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["concert"]) ? $context["concert"] : $this->getContext($context, "concert")), "lieu", array()), "html", null, true);
        echo "</label></p>
            </div>
            <div class=\"list-group-item\">
                <p><label><b><h3>Description</h3></b></label></p>
                <p><label>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["concert"]) ? $context["concert"] : $this->getContext($context, "concert")), "description", array()), "html", null, true);
        echo "</label></p>
            </div>
            <div class=\"list-group-item\">
                <p><label><b><h3>Artiste participant</h3></b></label></p>
                ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["artiste"]) ? $context["artiste"] : $this->getContext($context, "artiste")));
        foreach ($context['_seq'] as $context["_key"] => $context["artisteCourant"]) {
            // line 40
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
        // line 42
        echo "            </div>
        </div>
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
        
        $__internal_06a2ca7bc36a8712fd213197c7862275e42f9d70c22d3bb396780cf9839394f9->leave($__internal_06a2ca7bc36a8712fd213197c7862275e42f9d70c22d3bb396780cf9839394f9_prof);

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
        return array (  131 => 42,  120 => 40,  116 => 39,  109 => 35,  102 => 31,  90 => 21,  80 => 19,  77 => 18,  69 => 16,  61 => 14,  58 => 13,  56 => 12,  52 => 11,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "::vueMere.html.twig" %} {#La vue fille hérite de la vue mère#}*/
/* */
/* {% block contenuCentral %}*/
/* <body>*/
/*   <div class="container">*/
/*       <div class="panel panel-default">*/
/*       <!--default panel content-->*/
/*         <div class="panel-heading">*/
/* */
/*             <h2><b>{{concert.nom}}</b></h2> */
/*             <label>{{concert.dateConcert|date("d/m/Y")}}</label>*/
/*             {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*               {% if dejaSuivi %}*/
/*                 <a title='Ne plus suivre {{concert.nom}}' href='{{path('follow_the_rhythm_nePlusSuivreConcert',{'concert':concert.id})}}'><p><button class="btn btn-primary">Ne plus suivre</button></a></p>*/
/*               {% else %}*/
/*                 <a title='Suivre {{concert.nom}}' href='{{path('follow_the_rhythm_suivreConcert',{'concert':concert.id})}}'><p><button class="btn btn-primary">Suivre</button></a></p>*/
/*              {% endif %}*/
/*              {% else %}*/
/*                <a title='Connectez-vous pour suivre {{concert.nom}}' href='{{path('fos_user_security_login')}}'><input type="button" class="btn btn-primary" value="Connectez-vous pour suivre {{concert.nom}}." onclick="allerConcert();"></a>*/
/*             {% endif %}*/
/*            </div>*/
/*           <div class="row">*/
/*             <div class="col-lg-12">*/
/*      */
/*      */
/*      */
/*         <div class="list-group">*/
/*             */
/*             <div class="list-group-item">*/
/*                 <p><label><b><h3>Lieu</h3></b></label></p>*/
/*                 <p><label>{{concert.lieu}}</label></p>*/
/*             </div>*/
/*             <div class="list-group-item">*/
/*                 <p><label><b><h3>Description</h3></b></label></p>*/
/*                 <p><label>{{concert.description}}</label></p>*/
/*             </div>*/
/*             <div class="list-group-item">*/
/*                 <p><label><b><h3>Artiste participant</h3></b></label></p>*/
/*                 {% for artisteCourant in artiste %}*/
/*                    <p> <label> <a href="{{path('follow_the_rhythm_pageArtiste',{'id':artisteCourant.id})}}" >{{artisteCourant.nomDeScene}}</a></label></p>*/
/*                 {% endfor %}*/
/*             </div>*/
/*         </div>*/
/*       </div>*/
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
