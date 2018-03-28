<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_a739f27641ec89b2a566377f082bd506cad4d22815e9a7a536e4ef29350c7696 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_7d85eb9c16a217987f1903fd1036e184dc3840c0a1d8224e5a8d241eb355ea5e = $this->env->getExtension("native_profiler");
        $__internal_7d85eb9c16a217987f1903fd1036e184dc3840c0a1d8224e5a8d241eb355ea5e->enter($__internal_7d85eb9c16a217987f1903fd1036e184dc3840c0a1d8224e5a8d241eb355ea5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d85eb9c16a217987f1903fd1036e184dc3840c0a1d8224e5a8d241eb355ea5e->leave($__internal_7d85eb9c16a217987f1903fd1036e184dc3840c0a1d8224e5a8d241eb355ea5e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e8a1e4d818f2eee3d6caa7bf225bdac22acdb5c2931f7971d5b884d294e32eef = $this->env->getExtension("native_profiler");
        $__internal_e8a1e4d818f2eee3d6caa7bf225bdac22acdb5c2931f7971d5b884d294e32eef->enter($__internal_e8a1e4d818f2eee3d6caa7bf225bdac22acdb5c2931f7971d5b884d294e32eef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_e8a1e4d818f2eee3d6caa7bf225bdac22acdb5c2931f7971d5b884d294e32eef->leave($__internal_e8a1e4d818f2eee3d6caa7bf225bdac22acdb5c2931f7971d5b884d294e32eef_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
