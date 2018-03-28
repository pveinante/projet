<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_0807cdf231b36a044d008619029a38616452089af505b6f9aa4a73a8e4f94544 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7dfaf17e16b774b1e3f582662acacf593001c5a06a008cd467474fe6d3c0854e = $this->env->getExtension("native_profiler");
        $__internal_7dfaf17e16b774b1e3f582662acacf593001c5a06a008cd467474fe6d3c0854e->enter($__internal_7dfaf17e16b774b1e3f582662acacf593001c5a06a008cd467474fe6d3c0854e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7dfaf17e16b774b1e3f582662acacf593001c5a06a008cd467474fe6d3c0854e->leave($__internal_7dfaf17e16b774b1e3f582662acacf593001c5a06a008cd467474fe6d3c0854e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9210dbca260a410750b932cfec189c93ffb7d3933e21199f72d0fa59c414138b = $this->env->getExtension("native_profiler");
        $__internal_9210dbca260a410750b932cfec189c93ffb7d3933e21199f72d0fa59c414138b->enter($__internal_9210dbca260a410750b932cfec189c93ffb7d3933e21199f72d0fa59c414138b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_9210dbca260a410750b932cfec189c93ffb7d3933e21199f72d0fa59c414138b->leave($__internal_9210dbca260a410750b932cfec189c93ffb7d3933e21199f72d0fa59c414138b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
