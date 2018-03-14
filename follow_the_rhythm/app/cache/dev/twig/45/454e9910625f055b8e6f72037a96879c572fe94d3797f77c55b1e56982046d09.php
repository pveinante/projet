<?php

/* follow_the_rhythmSymfonyBundle:Symfony:concert.html.twig */
class __TwigTemplate_4752fa556d8341fbfce7da0afdb1625d3cc5001c296ef0fcd68b41001922a868 extends Twig_Template
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
        $__internal_8061b54f951e48ff862ceb2c319b2ddf7abab312b3d33883710fa15b5dda27fe = $this->env->getExtension("native_profiler");
        $__internal_8061b54f951e48ff862ceb2c319b2ddf7abab312b3d33883710fa15b5dda27fe->enter($__internal_8061b54f951e48ff862ceb2c319b2ddf7abab312b3d33883710fa15b5dda27fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "follow_the_rhythmSymfonyBundle:Symfony:concert.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8061b54f951e48ff862ceb2c319b2ddf7abab312b3d33883710fa15b5dda27fe->leave($__internal_8061b54f951e48ff862ceb2c319b2ddf7abab312b3d33883710fa15b5dda27fe_prof);

    }

    // line 3
    public function block_contenuCentral($context, array $blocks = array())
    {
        $__internal_e06de5815b2fb0d812306a25ddaf88fe4610a81c47f9aa915fb2905e4c2098b3 = $this->env->getExtension("native_profiler");
        $__internal_e06de5815b2fb0d812306a25ddaf88fe4610a81c47f9aa915fb2905e4c2098b3->enter($__internal_e06de5815b2fb0d812306a25ddaf88fe4610a81c47f9aa915fb2905e4c2098b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenuCentral"));

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
            <p></p><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("follow_the_rhythm_artiste");
        echo "\"><button class=\"btn btn-primary\">Ajouter un nouvel artiste</button></a></p>
           
          </form>
          
        </div>
      </div>
    </div>
  </div>
</div>
</body>

";
        
        $__internal_e06de5815b2fb0d812306a25ddaf88fe4610a81c47f9aa915fb2905e4c2098b3->leave($__internal_e06de5815b2fb0d812306a25ddaf88fe4610a81c47f9aa915fb2905e4c2098b3_prof);

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
        return array (  65 => 18,  61 => 17,  57 => 16,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
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
/*             <p></p><a href="{{path('follow_the_rhythm_artiste')}}"><button class="btn btn-primary">Ajouter un nouvel artiste</button></a></p>*/
/*            */
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
