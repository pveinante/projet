<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_aa6dc3d419fc200ed134d2a8b90b5d6ed758b0f874cab9c03f2a8d882f062d03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_a62d063285e702c5125c9da2fc912d3b514a3633ee7ece913d22563d50887176 = $this->env->getExtension("native_profiler");
        $__internal_a62d063285e702c5125c9da2fc912d3b514a3633ee7ece913d22563d50887176->enter($__internal_a62d063285e702c5125c9da2fc912d3b514a3633ee7ece913d22563d50887176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a62d063285e702c5125c9da2fc912d3b514a3633ee7ece913d22563d50887176->leave($__internal_a62d063285e702c5125c9da2fc912d3b514a3633ee7ece913d22563d50887176_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b834986be3efea99629d83c4286c85bcac3c55da8b73b0437611fe90e54deb22 = $this->env->getExtension("native_profiler");
        $__internal_b834986be3efea99629d83c4286c85bcac3c55da8b73b0437611fe90e54deb22->enter($__internal_b834986be3efea99629d83c4286c85bcac3c55da8b73b0437611fe90e54deb22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_b834986be3efea99629d83c4286c85bcac3c55da8b73b0437611fe90e54deb22->leave($__internal_b834986be3efea99629d83c4286c85bcac3c55da8b73b0437611fe90e54deb22_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
