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
        $__internal_a4ea77820d79bc156da7b8429fc3d9e8bba4b5f2cb0fdbbfc5f798bb1ce24e07 = $this->env->getExtension("native_profiler");
        $__internal_a4ea77820d79bc156da7b8429fc3d9e8bba4b5f2cb0fdbbfc5f798bb1ce24e07->enter($__internal_a4ea77820d79bc156da7b8429fc3d9e8bba4b5f2cb0fdbbfc5f798bb1ce24e07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4ea77820d79bc156da7b8429fc3d9e8bba4b5f2cb0fdbbfc5f798bb1ce24e07->leave($__internal_a4ea77820d79bc156da7b8429fc3d9e8bba4b5f2cb0fdbbfc5f798bb1ce24e07_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_49c2db5be9f8246075a5fafe9c6cb014afedfc4e2f931c926a77fed76b20b760 = $this->env->getExtension("native_profiler");
        $__internal_49c2db5be9f8246075a5fafe9c6cb014afedfc4e2f931c926a77fed76b20b760->enter($__internal_49c2db5be9f8246075a5fafe9c6cb014afedfc4e2f931c926a77fed76b20b760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_49c2db5be9f8246075a5fafe9c6cb014afedfc4e2f931c926a77fed76b20b760->leave($__internal_49c2db5be9f8246075a5fafe9c6cb014afedfc4e2f931c926a77fed76b20b760_prof);

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
