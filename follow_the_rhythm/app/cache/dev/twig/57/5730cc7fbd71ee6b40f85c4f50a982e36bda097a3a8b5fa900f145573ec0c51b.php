<?php

/* follow_the_rhythmSymfonyBundle:Symfony:concert.html.twig */
class __TwigTemplate_49daab578a8790f5f97774cd22d4d20057180c02cfe52097286890beaff97682 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::vueMere.html.twig", "follow_the_rhythmSymfonyBundle:Symfony:concert.html.twig", 1);
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
        $__internal_f575a24643c49593f76a895a16b808bbbf0bf5a742a52aab33781866aefe6c72 = $this->env->getExtension("native_profiler");
        $__internal_f575a24643c49593f76a895a16b808bbbf0bf5a742a52aab33781866aefe6c72->enter($__internal_f575a24643c49593f76a895a16b808bbbf0bf5a742a52aab33781866aefe6c72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "follow_the_rhythmSymfonyBundle:Symfony:concert.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f575a24643c49593f76a895a16b808bbbf0bf5a742a52aab33781866aefe6c72->leave($__internal_f575a24643c49593f76a895a16b808bbbf0bf5a742a52aab33781866aefe6c72_prof);

    }

    // line 3
    public function block_contenuCentral($context, array $blocks = array())
    {
        $__internal_00b96c55aafd591c7138307249fc962e2b57f058f51d7a6c4334e17d0ed87601 = $this->env->getExtension("native_profiler");
        $__internal_00b96c55aafd591c7138307249fc962e2b57f058f51d7a6c4334e17d0ed87601->enter($__internal_00b96c55aafd591c7138307249fc962e2b57f058f51d7a6c4334e17d0ed87601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenuCentral"));

        // line 4
        echo "<body>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"panel panel-default\">
      <!--default panel content-->
        <div class=\"panel-heading\"><h2><b>Soumettre un concert</b></h2></div>
     
      <div class=\"list-group\">
        <div class=\"list-group-item\">
           
          <!--AFFICHAGE DU FORMULAIRE-->
          <form method=\"post\" id=soumettreConcertForm ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulaireConcert"]) ? $context["formulaireConcert"] : $this->getContext($context, "formulaireConcert")), 'enctype');
        echo ">
              ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulaireConcert"]) ? $context["formulaireConcert"] : $this->getContext($context, "formulaireConcert")), 'widget');
        echo "
            <input type=submit class=\"btn btn-primary\" onsubmit=\"return false\"> <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("follow_the_rhythm_accueil", array("page" => 1, "sens" => 1)), "html", null, true);
        echo "\"><input type=button class=\"btn btn-primary\" value=\"Annuler\" onclick=\"return confirm('Êtes vous sûr? Les données saisies seront effacées');\"></a>
          </form>
          <p></p><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("follow_the_rhythm_artiste");
        echo "\"><button class=\"btn btn-primary\">Ajouter un nouvel artiste</button></a></p>
           
        </div>
      </div>
    </div>
  </div>
</div>
</body>

";
        
        $__internal_00b96c55aafd591c7138307249fc962e2b57f058f51d7a6c4334e17d0ed87601->leave($__internal_00b96c55aafd591c7138307249fc962e2b57f058f51d7a6c4334e17d0ed87601_prof);

    }

    public function getTemplateName()
    {
        return "follow_the_rhythmSymfonyBundle:Symfony:concert.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 19,  61 => 17,  57 => 16,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
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
/*         <div class="panel-heading"><h2><b>Soumettre un concert</b></h2></div>*/
/*      */
/*       <div class="list-group">*/
/*         <div class="list-group-item">*/
/*            */
/*           <!--AFFICHAGE DU FORMULAIRE-->*/
/*           <form method="post" id=soumettreConcertForm {{form_enctype(formulaireConcert)}}>*/
/*               {{ form_widget(formulaireConcert)}}*/
/*             <input type=submit class="btn btn-primary" onsubmit="return false"> <a href="{{path('follow_the_rhythm_accueil',{'page': 1, 'sens': 1})}}"><input type=button class="btn btn-primary" value="Annuler" onclick="return confirm('Êtes vous sûr? Les données saisies seront effacées');"></a>*/
/*           </form>*/
/*           <p></p><a href="{{path('follow_the_rhythm_artiste')}}"><button class="btn btn-primary">Ajouter un nouvel artiste</button></a></p>*/
/*            */
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
