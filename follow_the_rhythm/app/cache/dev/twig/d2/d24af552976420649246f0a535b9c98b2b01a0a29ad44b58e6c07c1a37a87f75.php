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
        $__internal_5837d587d8a3d4645279a1a3b953ab8f641a7d57b27818abe3ceadce25e3cabc = $this->env->getExtension("native_profiler");
        $__internal_5837d587d8a3d4645279a1a3b953ab8f641a7d57b27818abe3ceadce25e3cabc->enter($__internal_5837d587d8a3d4645279a1a3b953ab8f641a7d57b27818abe3ceadce25e3cabc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5837d587d8a3d4645279a1a3b953ab8f641a7d57b27818abe3ceadce25e3cabc->leave($__internal_5837d587d8a3d4645279a1a3b953ab8f641a7d57b27818abe3ceadce25e3cabc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a56718486e3a0e7bed3ac45892e94c0b9a40a6566a88a7fd9f53be3c94a1ab2e = $this->env->getExtension("native_profiler");
        $__internal_a56718486e3a0e7bed3ac45892e94c0b9a40a6566a88a7fd9f53be3c94a1ab2e->enter($__internal_a56718486e3a0e7bed3ac45892e94c0b9a40a6566a88a7fd9f53be3c94a1ab2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_a56718486e3a0e7bed3ac45892e94c0b9a40a6566a88a7fd9f53be3c94a1ab2e->leave($__internal_a56718486e3a0e7bed3ac45892e94c0b9a40a6566a88a7fd9f53be3c94a1ab2e_prof);

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
