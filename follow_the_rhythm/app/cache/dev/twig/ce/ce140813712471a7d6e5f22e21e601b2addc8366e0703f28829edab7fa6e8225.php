<?php

/* follow_the_rhythmSymfonyBundle:Symfony:artiste.html.twig */
class __TwigTemplate_d0abdd55b1b4c2551f32dd71ba45a80fe2668d20f8988ac8bbcf442de87f51f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::vueMere.html.twig", "follow_the_rhythmSymfonyBundle:Symfony:artiste.html.twig", 1);
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
        $__internal_e4654de5c7b6aec337cc4f36f03333a4eb12fbd620958a9350a2f26f9e77b6a1 = $this->env->getExtension("native_profiler");
        $__internal_e4654de5c7b6aec337cc4f36f03333a4eb12fbd620958a9350a2f26f9e77b6a1->enter($__internal_e4654de5c7b6aec337cc4f36f03333a4eb12fbd620958a9350a2f26f9e77b6a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "follow_the_rhythmSymfonyBundle:Symfony:artiste.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4654de5c7b6aec337cc4f36f03333a4eb12fbd620958a9350a2f26f9e77b6a1->leave($__internal_e4654de5c7b6aec337cc4f36f03333a4eb12fbd620958a9350a2f26f9e77b6a1_prof);

    }

    // line 3
    public function block_contenuCentral($context, array $blocks = array())
    {
        $__internal_74ef5fabacf391c9ef30533aea93e06a3eca73197bb0fc46b9f70b8538e027b8 = $this->env->getExtension("native_profiler");
        $__internal_74ef5fabacf391c9ef30533aea93e06a3eca73197bb0fc46b9f70b8538e027b8->enter($__internal_74ef5fabacf391c9ef30533aea93e06a3eca73197bb0fc46b9f70b8538e027b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenuCentral"));

        // line 4
        echo "<body onload=\"hide();\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"panel panel-default\">
      <!--default panel content-->
        <div class=\"panel-heading\"><h2><b>Créer un nouvel artiste</b></h2></div>
     
      <div class=\"list-group\">
        <div class=\"list-group-item\">
           
          <!--AFFICHAGE DU FORMULAIRE-->
          <form method=\"post\" id=soumettreArtisteForm ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulaireArtiste"]) ? $context["formulaireArtiste"] : $this->getContext($context, "formulaireArtiste")), 'enctype');
        echo ">
              ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulaireArtiste"]) ? $context["formulaireArtiste"] : $this->getContext($context, "formulaireArtiste")), 'widget');
        echo "
            <input type=submit class=\"btn btn-primary\" onsubmit=\"return false\">
            <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("follow_the_rhythm_accueil", array("page" => 1, "sens" => 1)), "html", null, true);
        echo "\"><input type=button class=\"btn btn-primary\" value=\"Annuler\" onclick=\"return confirm('Êtes vous sûr? Les données saisies seront effacées');\"></a>
          </form>
          
        </div>
      </div>
    </div>
  </div>
</div>
</body>

";
        
        $__internal_74ef5fabacf391c9ef30533aea93e06a3eca73197bb0fc46b9f70b8538e027b8->leave($__internal_74ef5fabacf391c9ef30533aea93e06a3eca73197bb0fc46b9f70b8538e027b8_prof);

    }

    public function getTemplateName()
    {
        return "follow_the_rhythmSymfonyBundle:Symfony:artiste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 18,  57 => 16,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "::vueMere.html.twig" %} {#La vue fille hérite de la vue mère#}*/
/* */
/* {% block contenuCentral %}*/
/* <body onload="hide();">*/
/*   <div class="container">*/
/*     <div class="row">*/
/*       <div class="panel panel-default">*/
/*       <!--default panel content-->*/
/*         <div class="panel-heading"><h2><b>Créer un nouvel artiste</b></h2></div>*/
/*      */
/*       <div class="list-group">*/
/*         <div class="list-group-item">*/
/*            */
/*           <!--AFFICHAGE DU FORMULAIRE-->*/
/*           <form method="post" id=soumettreArtisteForm {{form_enctype(formulaireArtiste)}}>*/
/*               {{ form_widget(formulaireArtiste)}}*/
/*             <input type=submit class="btn btn-primary" onsubmit="return false">*/
/*             <a href="{{path('follow_the_rhythm_accueil',{'page': 1, 'sens': 1})}}"><input type=button class="btn btn-primary" value="Annuler" onclick="return confirm('Êtes vous sûr? Les données saisies seront effacées');"></a>*/
/*           </form>*/
/*           */
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* </body>*/
/* */
/* {% endblock %}*/
/* */
/* */
/* */
