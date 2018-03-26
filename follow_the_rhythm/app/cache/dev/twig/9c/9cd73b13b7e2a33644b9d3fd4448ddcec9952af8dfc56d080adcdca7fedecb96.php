<?php

/* follow_the_rhythmSymfonyBundle:Symfony:categorieConcert.html.twig */
class __TwigTemplate_0c0c454b8514cde3e3eb3ba0268227e607c55092ec3e3458c483d62ec319a77a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::vueMere.html.twig", "follow_the_rhythmSymfonyBundle:Symfony:categorieConcert.html.twig", 1);
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
        $__internal_e388ab68fd407fded17c8c212ed74f78fa86afe6c12f3ac3665e547427af9327 = $this->env->getExtension("native_profiler");
        $__internal_e388ab68fd407fded17c8c212ed74f78fa86afe6c12f3ac3665e547427af9327->enter($__internal_e388ab68fd407fded17c8c212ed74f78fa86afe6c12f3ac3665e547427af9327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "follow_the_rhythmSymfonyBundle:Symfony:categorieConcert.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e388ab68fd407fded17c8c212ed74f78fa86afe6c12f3ac3665e547427af9327->leave($__internal_e388ab68fd407fded17c8c212ed74f78fa86afe6c12f3ac3665e547427af9327_prof);

    }

    // line 3
    public function block_contenuCentral($context, array $blocks = array())
    {
        $__internal_906e8d936cfd112ab1cc48690ab35b0d82ab8d654b29d2de602a9021cf2a28af = $this->env->getExtension("native_profiler");
        $__internal_906e8d936cfd112ab1cc48690ab35b0d82ab8d654b29d2de602a9021cf2a28af->enter($__internal_906e8d936cfd112ab1cc48690ab35b0d82ab8d654b29d2de602a9021cf2a28af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenuCentral"));

        // line 4
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\"><h2><b><i class=\"fa fa-music\" aria-hidden=\"true\"></i> Concerts</b><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("follow_the_rhythm_soumettreActualite");
        echo "\"><button style='margin-left: 32px;' type=\"button\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-plus\"></span> Nouveau topic</button></a></h2></div>
            <div class=\"list-group\">
                <div class=\"list-group-item\">
                    <div align=\"justify\"> 
                        <h4>Prochainement, la catégorie concert du forum de Follow the rhythm</h4></Br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
";
        
        $__internal_906e8d936cfd112ab1cc48690ab35b0d82ab8d654b29d2de602a9021cf2a28af->leave($__internal_906e8d936cfd112ab1cc48690ab35b0d82ab8d654b29d2de602a9021cf2a28af_prof);

    }

    public function getTemplateName()
    {
        return "follow_the_rhythmSymfonyBundle:Symfony:categorieConcert.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "::vueMere.html.twig" %} {#La vue fille hérite de la vue mère#}*/
/*     */
/* {% block contenuCentral %}*/
/* <div class="container">*/
/*     <div class="row">*/
/*         <div class="panel panel-default">*/
/*             <div class="panel-heading"><h2><b><i class="fa fa-music" aria-hidden="true"></i> Concerts</b><a href="{{path('follow_the_rhythm_soumettreActualite')}}"><button style='margin-left: 32px;' type="button" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Nouveau topic</button></a></h2></div>*/
/*             <div class="list-group">*/
/*                 <div class="list-group-item">*/
/*                     <div align="justify"> */
/*                         <h4>Prochainement, la catégorie concert du forum de Follow the rhythm</h4></Br>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/*     */
/* {% endblock %}*/
