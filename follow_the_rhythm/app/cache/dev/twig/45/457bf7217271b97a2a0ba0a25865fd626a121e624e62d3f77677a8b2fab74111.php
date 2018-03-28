<?php

/* follow_the_rhythmSymfonyBundle:Symfony:artiste.html.twig */
class __TwigTemplate_86f2e579a438e083b08a54ba5766d54c76b01cebdf94d418e9bdcac4086c9feb extends Twig_Template
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
        $__internal_6a5fea86960fafe8d0ec1916eb71fd2b56fd0e437098e09d4ffc6a414e4c810b = $this->env->getExtension("native_profiler");
        $__internal_6a5fea86960fafe8d0ec1916eb71fd2b56fd0e437098e09d4ffc6a414e4c810b->enter($__internal_6a5fea86960fafe8d0ec1916eb71fd2b56fd0e437098e09d4ffc6a414e4c810b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "follow_the_rhythmSymfonyBundle:Symfony:artiste.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a5fea86960fafe8d0ec1916eb71fd2b56fd0e437098e09d4ffc6a414e4c810b->leave($__internal_6a5fea86960fafe8d0ec1916eb71fd2b56fd0e437098e09d4ffc6a414e4c810b_prof);

    }

    // line 3
    public function block_contenuCentral($context, array $blocks = array())
    {
        $__internal_76effd855d2382fb7ad03a141d0c0eeef888d7efb375d0dbd6f3b43cc9f3d4d8 = $this->env->getExtension("native_profiler");
        $__internal_76effd855d2382fb7ad03a141d0c0eeef888d7efb375d0dbd6f3b43cc9f3d4d8->enter($__internal_76effd855d2382fb7ad03a141d0c0eeef888d7efb375d0dbd6f3b43cc9f3d4d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenuCentral"));

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
        
        $__internal_76effd855d2382fb7ad03a141d0c0eeef888d7efb375d0dbd6f3b43cc9f3d4d8->leave($__internal_76effd855d2382fb7ad03a141d0c0eeef888d7efb375d0dbd6f3b43cc9f3d4d8_prof);

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
