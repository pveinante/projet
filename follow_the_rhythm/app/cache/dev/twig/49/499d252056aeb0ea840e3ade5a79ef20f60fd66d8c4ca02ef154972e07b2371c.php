<?php

/* follow_the_rhythmSymfonyBundle:Symfony:categorieNews.html.twig */
class __TwigTemplate_0a6597c5e08da3050ba93c61aed9797538146e4615b987f68bb2cabf1ef4aaa4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::vueMere.html.twig", "follow_the_rhythmSymfonyBundle:Symfony:categorieNews.html.twig", 1);
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
        $__internal_54b315dd28509f2b578e3c2d3da38226e74858b19cbde8002af88613aa64b150 = $this->env->getExtension("native_profiler");
        $__internal_54b315dd28509f2b578e3c2d3da38226e74858b19cbde8002af88613aa64b150->enter($__internal_54b315dd28509f2b578e3c2d3da38226e74858b19cbde8002af88613aa64b150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "follow_the_rhythmSymfonyBundle:Symfony:categorieNews.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54b315dd28509f2b578e3c2d3da38226e74858b19cbde8002af88613aa64b150->leave($__internal_54b315dd28509f2b578e3c2d3da38226e74858b19cbde8002af88613aa64b150_prof);

    }

    // line 3
    public function block_contenuCentral($context, array $blocks = array())
    {
        $__internal_74146b67cdaee87880bca5c2298c4e73b8f2f4b1ad2b71aed9801e1b3f16e5a7 = $this->env->getExtension("native_profiler");
        $__internal_74146b67cdaee87880bca5c2298c4e73b8f2f4b1ad2b71aed9801e1b3f16e5a7->enter($__internal_74146b67cdaee87880bca5c2298c4e73b8f2f4b1ad2b71aed9801e1b3f16e5a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenuCentral"));

        // line 4
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\"><h2><b><i class=\"fa fa-newspaper-o\" aria-hidden=\"true\"></i> News</b><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("follow_the_rhythm_soumettreActualite");
        echo "\"><button style='margin-left: 32px;' type=\"button\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-plus\"></span> Nouveau topic</button></a></h2></div>
            <div class=\"list-group\">
                <div class=\"list-group-item\">
                    <div align=\"justify\"> 
                        <h4>Prochainement, la catégorie news du forum de Follow the rhythm</h4></Br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
";
        
        $__internal_74146b67cdaee87880bca5c2298c4e73b8f2f4b1ad2b71aed9801e1b3f16e5a7->leave($__internal_74146b67cdaee87880bca5c2298c4e73b8f2f4b1ad2b71aed9801e1b3f16e5a7_prof);

    }

    public function getTemplateName()
    {
        return "follow_the_rhythmSymfonyBundle:Symfony:categorieNews.html.twig";
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
/*             <div class="panel-heading"><h2><b><i class="fa fa-newspaper-o" aria-hidden="true"></i> News</b><a href="{{path('follow_the_rhythm_soumettreActualite')}}"><button style='margin-left: 32px;' type="button" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Nouveau topic</button></a></h2></div>*/
/*             <div class="list-group">*/
/*                 <div class="list-group-item">*/
/*                     <div align="justify"> */
/*                         <h4>Prochainement, la catégorie news du forum de Follow the rhythm</h4></Br>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/*     */
/* {% endblock %}*/
