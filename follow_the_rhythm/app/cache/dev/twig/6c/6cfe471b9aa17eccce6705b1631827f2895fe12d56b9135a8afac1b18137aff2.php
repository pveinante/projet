<?php

/* follow_the_rhythmSymfonyBundle:Symfony:pageUtilisateur.html.twig */
class __TwigTemplate_e24760ea05ef0602eeb920c2575f89da6930b1b986e7c5e1c026c4b9bcd490fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::vueMere.html.twig", "follow_the_rhythmSymfonyBundle:Symfony:pageUtilisateur.html.twig", 1);
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
        $__internal_1002e39334a8965767da76be463230d4726a28a4d28f519ee28082f5a593b304 = $this->env->getExtension("native_profiler");
        $__internal_1002e39334a8965767da76be463230d4726a28a4d28f519ee28082f5a593b304->enter($__internal_1002e39334a8965767da76be463230d4726a28a4d28f519ee28082f5a593b304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "follow_the_rhythmSymfonyBundle:Symfony:pageUtilisateur.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1002e39334a8965767da76be463230d4726a28a4d28f519ee28082f5a593b304->leave($__internal_1002e39334a8965767da76be463230d4726a28a4d28f519ee28082f5a593b304_prof);

    }

    // line 3
    public function block_contenuCentral($context, array $blocks = array())
    {
        $__internal_3b8bbb8e9cad8f9958fb30abe6a315d00832b7ccb77084ad592f4484b21c8634 = $this->env->getExtension("native_profiler");
        $__internal_3b8bbb8e9cad8f9958fb30abe6a315d00832b7ccb77084ad592f4484b21c8634->enter($__internal_3b8bbb8e9cad8f9958fb30abe6a315d00832b7ccb77084ad592f4484b21c8634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenuCentral"));

        // line 4
        echo "<body>
  <div class=\"container\">
      <div class=\"panel panel-default\">
      <!--default panel content-->
        <div class=\"panel-heading\"><h2><b>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</h2></b></div>
     <div class=\"row\">
       <div class=\"col-lg-12\">
           <div class=\"list-group\">
            <div class=\"list-group-item\">
            <p align=\"center\"><img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("upload/images/Stickman.png"), "html", null, true);
        echo "\" /></p>
               <p><button class=\"btn btn-primary\" onclick=\"isNotConnected();\">Ajouter</button></p>
               <p><label><h1>Artistes suivis</h1></label></p>
                    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tabArtiste"]) ? $context["tabArtiste"] : $this->getContext($context, "tabArtiste")));
        foreach ($context['_seq'] as $context["_key"] => $context["artisteCourant"]) {
            // line 17
            echo "                      <from></from>
                      <p class=\"list-group-item\"><h2><label>
                           <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("follow_the_rhythm_pageArtiste", array("id" => $this->getAttribute($context["artisteCourant"], "id", array()))), "html", null, true);
            echo "\" ><label>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["artisteCourant"], "nomDeScene", array()), "html", null, true);
            echo "</label></a>
                      </p>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['artisteCourant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "        </div>
      </div>
    </div>
    </div>
  </div>
</div>

<script>
    function isNotConnected(){
    alert(\"Il faut être connecté pour accéder à cette fonctionnalité\");
  }
    
</script>
</body>
";
        
        $__internal_3b8bbb8e9cad8f9958fb30abe6a315d00832b7ccb77084ad592f4484b21c8634->leave($__internal_3b8bbb8e9cad8f9958fb30abe6a315d00832b7ccb77084ad592f4484b21c8634_prof);

    }

    public function getTemplateName()
    {
        return "follow_the_rhythmSymfonyBundle:Symfony:pageUtilisateur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 22,  68 => 19,  64 => 17,  60 => 16,  54 => 13,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "::vueMere.html.twig" %} {#La vue fille hérite de la vue mère#}*/
/* */
/* {% block contenuCentral %}*/
/* <body>*/
/*   <div class="container">*/
/*       <div class="panel panel-default">*/
/*       <!--default panel content-->*/
/*         <div class="panel-heading"><h2><b>{{user.username}}</h2></b></div>*/
/*      <div class="row">*/
/*        <div class="col-lg-12">*/
/*            <div class="list-group">*/
/*             <div class="list-group-item">*/
/*             <p align="center"><img src="{{ asset('upload/images/Stickman.png') }}" /></p>*/
/*                <p><button class="btn btn-primary" onclick="isNotConnected();">Ajouter</button></p>*/
/*                <p><label><h1>Artistes suivis</h1></label></p>*/
/*                     {% for artisteCourant in tabArtiste %}*/
/*                       <from></from>*/
/*                       <p class="list-group-item"><h2><label>*/
/*                            <a href="{{path('follow_the_rhythm_pageArtiste',{'id':artisteCourant.id})}}" ><label>{{artisteCourant.nomDeScene}}</label></a>*/
/*                       </p>*/
/*                     {% endfor %}*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
/* <script>*/
/*     function isNotConnected(){*/
/*     alert("Il faut être connecté pour accéder à cette fonctionnalité");*/
/*   }*/
/*     */
/* </script>*/
/* </body>*/
/* {% endblock %}*/
