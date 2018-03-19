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
        $__internal_99f1220c46bb7814e5c3e998dfbab8658311a271ad555ad513494058b02bf4a5 = $this->env->getExtension("native_profiler");
        $__internal_99f1220c46bb7814e5c3e998dfbab8658311a271ad555ad513494058b02bf4a5->enter($__internal_99f1220c46bb7814e5c3e998dfbab8658311a271ad555ad513494058b02bf4a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "follow_the_rhythmSymfonyBundle:Symfony:categorieConcert.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99f1220c46bb7814e5c3e998dfbab8658311a271ad555ad513494058b02bf4a5->leave($__internal_99f1220c46bb7814e5c3e998dfbab8658311a271ad555ad513494058b02bf4a5_prof);

    }

    // line 3
    public function block_contenuCentral($context, array $blocks = array())
    {
        $__internal_46e35403381fbde3ea7faba45ee99ee92176ff5407615a3e17187a23cafe04f1 = $this->env->getExtension("native_profiler");
        $__internal_46e35403381fbde3ea7faba45ee99ee92176ff5407615a3e17187a23cafe04f1->enter($__internal_46e35403381fbde3ea7faba45ee99ee92176ff5407615a3e17187a23cafe04f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenuCentral"));

        // line 4
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\"><h2><b><i class=\"fa fa-music\" aria-hidden=\"true\"></i></i> Concert</b></h2></div>
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
        
        $__internal_46e35403381fbde3ea7faba45ee99ee92176ff5407615a3e17187a23cafe04f1->leave($__internal_46e35403381fbde3ea7faba45ee99ee92176ff5407615a3e17187a23cafe04f1_prof);

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
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "::vueMere.html.twig" %} {#La vue fille hérite de la vue mère#}*/
/*     */
/* {% block contenuCentral %}*/
/* <div class="container">*/
/*     <div class="row">*/
/*         <div class="panel panel-default">*/
/*             <div class="panel-heading"><h2><b><i class="fa fa-music" aria-hidden="true"></i></i> Concert</b></h2></div>*/
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
