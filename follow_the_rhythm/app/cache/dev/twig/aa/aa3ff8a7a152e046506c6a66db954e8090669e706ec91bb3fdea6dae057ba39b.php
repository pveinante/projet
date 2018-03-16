<?php

/* follow_the_rhythmSymfonyBundle:Symfony:accueilForum.html.twig */
class __TwigTemplate_a195ded075c3afa4beaddc9590fb50c7c234895891e4e5ae38b873f1694e6cf9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::vueMere.html.twig", "follow_the_rhythmSymfonyBundle:Symfony:accueilForum.html.twig", 1);
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
        $__internal_b07810068d7ebd11518082c6ae2427e0eb70349872cc426828d4723dde4e6fa0 = $this->env->getExtension("native_profiler");
        $__internal_b07810068d7ebd11518082c6ae2427e0eb70349872cc426828d4723dde4e6fa0->enter($__internal_b07810068d7ebd11518082c6ae2427e0eb70349872cc426828d4723dde4e6fa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "follow_the_rhythmSymfonyBundle:Symfony:accueilForum.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b07810068d7ebd11518082c6ae2427e0eb70349872cc426828d4723dde4e6fa0->leave($__internal_b07810068d7ebd11518082c6ae2427e0eb70349872cc426828d4723dde4e6fa0_prof);

    }

    // line 3
    public function block_contenuCentral($context, array $blocks = array())
    {
        $__internal_0b5147fefbddafd9bb5792222d3ce8cd2da318fe32462365dacf883e4b720c57 = $this->env->getExtension("native_profiler");
        $__internal_0b5147fefbddafd9bb5792222d3ce8cd2da318fe32462365dacf883e4b720c57->enter($__internal_0b5147fefbddafd9bb5792222d3ce8cd2da318fe32462365dacf883e4b720c57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenuCentral"));

        // line 4
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\"><h2><b><i class=\"fa fa-wechat\"></i> Forum</b></h2></div>
            <div class=\"list-group\">
                <div class=\"list-group-item\">
                    <div align=\"justify\"> 
                        <h4>Prochainement, le forum de Follow the rhythm</h4></Br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
";
        
        $__internal_0b5147fefbddafd9bb5792222d3ce8cd2da318fe32462365dacf883e4b720c57->leave($__internal_0b5147fefbddafd9bb5792222d3ce8cd2da318fe32462365dacf883e4b720c57_prof);

    }

    public function getTemplateName()
    {
        return "follow_the_rhythmSymfonyBundle:Symfony:accueilForum.html.twig";
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
/*             <div class="panel-heading"><h2><b><i class="fa fa-wechat"></i> Forum</b></h2></div>*/
/*             <div class="list-group">*/
/*                 <div class="list-group-item">*/
/*                     <div align="justify"> */
/*                         <h4>Prochainement, le forum de Follow the rhythm</h4></Br>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/*     */
/* {% endblock %}*/
