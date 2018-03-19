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
        $__internal_6b6c4f2d2063be3830e8020f4ccbc7762aef5134c7b1770a3479fda3b23f655d = $this->env->getExtension("native_profiler");
        $__internal_6b6c4f2d2063be3830e8020f4ccbc7762aef5134c7b1770a3479fda3b23f655d->enter($__internal_6b6c4f2d2063be3830e8020f4ccbc7762aef5134c7b1770a3479fda3b23f655d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "follow_the_rhythmSymfonyBundle:Symfony:categorieNews.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b6c4f2d2063be3830e8020f4ccbc7762aef5134c7b1770a3479fda3b23f655d->leave($__internal_6b6c4f2d2063be3830e8020f4ccbc7762aef5134c7b1770a3479fda3b23f655d_prof);

    }

    // line 3
    public function block_contenuCentral($context, array $blocks = array())
    {
        $__internal_baabbd6105f84a177aeb3861cf1c7b84de46edf7843feb6cb71161c42f8fab71 = $this->env->getExtension("native_profiler");
        $__internal_baabbd6105f84a177aeb3861cf1c7b84de46edf7843feb6cb71161c42f8fab71->enter($__internal_baabbd6105f84a177aeb3861cf1c7b84de46edf7843feb6cb71161c42f8fab71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenuCentral"));

        // line 4
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\"><h2><b><i class=\"fa fa-newspaper-o\" aria-hidden=\"true\"></i> News</b></h2></div>
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
        
        $__internal_baabbd6105f84a177aeb3861cf1c7b84de46edf7843feb6cb71161c42f8fab71->leave($__internal_baabbd6105f84a177aeb3861cf1c7b84de46edf7843feb6cb71161c42f8fab71_prof);

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
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "::vueMere.html.twig" %} {#La vue fille hérite de la vue mère#}*/
/*     */
/* {% block contenuCentral %}*/
/* <div class="container">*/
/*     <div class="row">*/
/*         <div class="panel panel-default">*/
/*             <div class="panel-heading"><h2><b><i class="fa fa-newspaper-o" aria-hidden="true"></i> News</b></h2></div>*/
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
