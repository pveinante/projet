<?php

/* follow_the_rhythmSymfonyBundle:Symfony:messages.html.twig */
class __TwigTemplate_30d71c44aa2e70d27efad3b75ae9a51e0383610d7d218f2b8f99281ff66413f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::vueMere.html.twig", "follow_the_rhythmSymfonyBundle:Symfony:messages.html.twig", 1);
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
        $__internal_72d5c38d6fdbbc1a1dbea1bf61f535828c09e016fc0fa97b82b96311a07cafa7 = $this->env->getExtension("native_profiler");
        $__internal_72d5c38d6fdbbc1a1dbea1bf61f535828c09e016fc0fa97b82b96311a07cafa7->enter($__internal_72d5c38d6fdbbc1a1dbea1bf61f535828c09e016fc0fa97b82b96311a07cafa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "follow_the_rhythmSymfonyBundle:Symfony:messages.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72d5c38d6fdbbc1a1dbea1bf61f535828c09e016fc0fa97b82b96311a07cafa7->leave($__internal_72d5c38d6fdbbc1a1dbea1bf61f535828c09e016fc0fa97b82b96311a07cafa7_prof);

    }

    // line 3
    public function block_contenuCentral($context, array $blocks = array())
    {
        $__internal_d9231a14913666d06bde38b514d64aa873c23cd1b01f5d7f8765f9e41e664bff = $this->env->getExtension("native_profiler");
        $__internal_d9231a14913666d06bde38b514d64aa873c23cd1b01f5d7f8765f9e41e664bff->enter($__internal_d9231a14913666d06bde38b514d64aa873c23cd1b01f5d7f8765f9e41e664bff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenuCentral"));

        // line 4
        echo "
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"panel panel-default\">
        <div class=\"panel-heading\"><h2><b><span class=\"fa fa-commenting\"></span> Topic - Titre du sujet</b></h2>
        </div>
     
      <div class=\"list-group\">

      <!--AFFICHAGE DES MESSAGES-->
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tabMessage"]) ? $context["tabMessage"] : $this->getContext($context, "tabMessage")));
        foreach ($context['_seq'] as $context["_key"] => $context["messageCourant"]) {
            // line 15
            echo "        
          <div class=\"list-group-item\">
            <p></p><label>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tabCreateur"]) ? $context["tabCreateur"] : $this->getContext($context, "tabCreateur")), $this->getAttribute($context["messageCourant"], "id", array()), array(), "array"), "html", null, true);
            echo " le 27/03/2018 à 10.00</label></p>
            <p align=\"justify\"><label>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["messageCourant"], "contenu", array()), "html", null, true);
            echo "</label></p>
          </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['messageCourant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "      </div>
    </div>
  </div>
</div>

<script>
  function isNotConnected(){
    alert(\"Il faut être connecté pour accéder à cette fonctionnalité\");
  }
  
  /*function afficherArtistesUniquement(){
    
  }*/
</script>
";
        // line 36
        echo "<div align=\"center\"><a href=\"#\"><button class=\"btn btn-primary\"><i class=\"fa fa-angle-double-up\"></i> Haut de page <i class=\"fa fa-angle-double-up\"></i></button></a></div>
";
        
        $__internal_d9231a14913666d06bde38b514d64aa873c23cd1b01f5d7f8765f9e41e664bff->leave($__internal_d9231a14913666d06bde38b514d64aa873c23cd1b01f5d7f8765f9e41e664bff_prof);

    }

    public function getTemplateName()
    {
        return "follow_the_rhythmSymfonyBundle:Symfony:messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  73 => 21,  64 => 18,  60 => 17,  56 => 15,  52 => 14,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "::vueMere.html.twig" %} {#La vue fille hérite de la vue mère#}*/
/* */
/* {% block contenuCentral %}*/
/* */
/*   <div class="container">*/
/*     <div class="row">*/
/*       <div class="panel panel-default">*/
/*         <div class="panel-heading"><h2><b><span class="fa fa-commenting"></span> Topic - Titre du sujet</b></h2>*/
/*         </div>*/
/*      */
/*       <div class="list-group">*/
/* */
/*       <!--AFFICHAGE DES MESSAGES-->*/
/*         {% for messageCourant in tabMessage %}*/
/*         */
/*           <div class="list-group-item">*/
/*             <p></p><label>{{tabCreateur[messageCourant.id]}} le 27/03/2018 à 10.00</label></p>*/
/*             <p align="justify"><label>{{messageCourant.contenu}}</label></p>*/
/*           </div>*/
/*         {% endfor %}*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
/* <script>*/
/*   function isNotConnected(){*/
/*     alert("Il faut être connecté pour accéder à cette fonctionnalité");*/
/*   }*/
/*   */
/*   /*function afficherArtistesUniquement(){*/
/*     */
/*   }*//* */
/* </script>*/
/* {#Pagination#}*/
/* <div align="center"><a href="#"><button class="btn btn-primary"><i class="fa fa-angle-double-up"></i> Haut de page <i class="fa fa-angle-double-up"></i></button></a></div>*/
/* {% endblock %}*/
/* */
/* */
/* */
