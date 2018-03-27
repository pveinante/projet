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
        $__internal_a7a400ab0d0c599df22b6ee6678009f05714dcc140cab96b7078726d520052d7 = $this->env->getExtension("native_profiler");
        $__internal_a7a400ab0d0c599df22b6ee6678009f05714dcc140cab96b7078726d520052d7->enter($__internal_a7a400ab0d0c599df22b6ee6678009f05714dcc140cab96b7078726d520052d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "follow_the_rhythmSymfonyBundle:Symfony:messages.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7a400ab0d0c599df22b6ee6678009f05714dcc140cab96b7078726d520052d7->leave($__internal_a7a400ab0d0c599df22b6ee6678009f05714dcc140cab96b7078726d520052d7_prof);

    }

    // line 3
    public function block_contenuCentral($context, array $blocks = array())
    {
        $__internal_3b67ef2268c3396cebdada6657b973e5519d3af7fd92ceb7d1dbc18fede757d0 = $this->env->getExtension("native_profiler");
        $__internal_3b67ef2268c3396cebdada6657b973e5519d3af7fd92ceb7d1dbc18fede757d0->enter($__internal_3b67ef2268c3396cebdada6657b973e5519d3af7fd92ceb7d1dbc18fede757d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenuCentral"));

        // line 4
        echo "
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"panel panel-default\">
        <div class=\"panel-heading\"><h2><b><span class=\"fa fa-commenting\"></span> ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["titre"]) ? $context["titre"] : $this->getContext($context, "titre")), "html", null, true);
        echo "</b></h2>
        </div>
     
      <div class=\"list-group\">

      <!--AFFICHAGE DES MESSAGES-->
      ";
        // line 14
        if (twig_test_empty((isset($context["tabMessage"]) ? $context["tabMessage"] : $this->getContext($context, "tabMessage")))) {
            // line 15
            echo "            <div class=\"container\">
\t            <div class =\"row\">
\t\t            <div class =\"col-lg-12\">
\t\t\t            <h5>Aucun message. Soyez le premier à parler de \"";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["titre"]) ? $context["titre"] : $this->getContext($context, "titre")), "html", null, true);
            echo "\" !</h5>
\t\t            </div>
\t            </div>
            </div>
            ";
        } else {
            // line 23
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tabMessage"]) ? $context["tabMessage"] : $this->getContext($context, "tabMessage")));
            foreach ($context['_seq'] as $context["_key"] => $context["messageCourant"]) {
                // line 24
                echo "        
          <div class=\"list-group-item\">
            <p></p><label>";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tabCreateur"]) ? $context["tabCreateur"] : $this->getContext($context, "tabCreateur")), $this->getAttribute($context["messageCourant"], "id", array()), array(), "array"), "html", null, true);
                echo " le 27/03/2018 à 10.00</label></p>
            <p align=\"justify\"><label>";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["messageCourant"], "contenu", array()), "html", null, true);
                echo "</label></p>
          </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['messageCourant'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "      ";
        }
        // line 31
        echo "      <!--AFFICHAGE DU FORMULAIRE-->
          <form method=\"post\" id=soumettreMessageForm name=\"formulaireMessage\" ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulaireMessage"]) ? $context["formulaireMessage"] : $this->getContext($context, "formulaireMessage")), 'enctype');
        echo ">
              ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulaireMessage"]) ? $context["formulaireMessage"] : $this->getContext($context, "formulaireMessage")), 'widget');
        echo "
            <input type=submit class=\"btn btn-primary\" onsubmit=\"return false\" onclick=\"return confirm('Vous confirmez?');\">
            <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("follow_the_rhythm_accueil", array("page" => 1, "sens" => 1)), "html", null, true);
        echo "\"><input type=button class=\"btn btn-primary\" value=\"Annuler\" onclick=\"return confirm('Êtes vous sûr? Les données saisies seront effacées');\"></a></br>
            </br>
          </form>
      </div>
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
        // line 53
        echo "<div align=\"center\"><a href=\"#\"><button class=\"btn btn-primary\"><i class=\"fa fa-angle-double-up\"></i> Haut de page <i class=\"fa fa-angle-double-up\"></i></button></a></div>
";
        
        $__internal_3b67ef2268c3396cebdada6657b973e5519d3af7fd92ceb7d1dbc18fede757d0->leave($__internal_3b67ef2268c3396cebdada6657b973e5519d3af7fd92ceb7d1dbc18fede757d0_prof);

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
        return array (  127 => 53,  107 => 35,  102 => 33,  98 => 32,  95 => 31,  92 => 30,  83 => 27,  79 => 26,  75 => 24,  70 => 23,  62 => 18,  57 => 15,  55 => 14,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "::vueMere.html.twig" %} {#La vue fille hérite de la vue mère#}*/
/* */
/* {% block contenuCentral %}*/
/* */
/*   <div class="container">*/
/*     <div class="row">*/
/*       <div class="panel panel-default">*/
/*         <div class="panel-heading"><h2><b><span class="fa fa-commenting"></span> {{titre}}</b></h2>*/
/*         </div>*/
/*      */
/*       <div class="list-group">*/
/* */
/*       <!--AFFICHAGE DES MESSAGES-->*/
/*       {% if tabMessage is empty %}*/
/*             <div class="container">*/
/* 	            <div class ="row">*/
/* 		            <div class ="col-lg-12">*/
/* 			            <h5>Aucun message. Soyez le premier à parler de "{{titre}}" !</h5>*/
/* 		            </div>*/
/* 	            </div>*/
/*             </div>*/
/*             {% else %}*/
/*         {% for messageCourant in tabMessage %}*/
/*         */
/*           <div class="list-group-item">*/
/*             <p></p><label>{{tabCreateur[messageCourant.id]}} le 27/03/2018 à 10.00</label></p>*/
/*             <p align="justify"><label>{{messageCourant.contenu}}</label></p>*/
/*           </div>*/
/*         {% endfor %}*/
/*       {% endif %}*/
/*       <!--AFFICHAGE DU FORMULAIRE-->*/
/*           <form method="post" id=soumettreMessageForm name="formulaireMessage" {{form_enctype(formulaireMessage)}}>*/
/*               {{ form_widget(formulaireMessage)}}*/
/*             <input type=submit class="btn btn-primary" onsubmit="return false" onclick="return confirm('Vous confirmez?');">*/
/*             <a href="{{path('follow_the_rhythm_accueil',{'page': 1, 'sens': 1})}}"><input type=button class="btn btn-primary" value="Annuler" onclick="return confirm('Êtes vous sûr? Les données saisies seront effacées');"></a></br>*/
/*             </br>*/
/*           </form>*/
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
