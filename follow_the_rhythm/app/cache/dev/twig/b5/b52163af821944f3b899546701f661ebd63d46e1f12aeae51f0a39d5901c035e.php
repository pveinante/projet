<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_0c2e366aae66ac96d544936e0c047a8a3b7f3e217ddb6f4f68f065865b3328a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_2ea7816fd53f990b245762b46b2f0bca2983d4ccedd917e9976a778e12e5d648 = $this->env->getExtension("native_profiler");
        $__internal_2ea7816fd53f990b245762b46b2f0bca2983d4ccedd917e9976a778e12e5d648->enter($__internal_2ea7816fd53f990b245762b46b2f0bca2983d4ccedd917e9976a778e12e5d648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ea7816fd53f990b245762b46b2f0bca2983d4ccedd917e9976a778e12e5d648->leave($__internal_2ea7816fd53f990b245762b46b2f0bca2983d4ccedd917e9976a778e12e5d648_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_189918d9a659b7df4381e44178601463e47978256c632bdf951460610ca867e9 = $this->env->getExtension("native_profiler");
        $__internal_189918d9a659b7df4381e44178601463e47978256c632bdf951460610ca867e9->enter($__internal_189918d9a659b7df4381e44178601463e47978256c632bdf951460610ca867e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_189918d9a659b7df4381e44178601463e47978256c632bdf951460610ca867e9->leave($__internal_189918d9a659b7df4381e44178601463e47978256c632bdf951460610ca867e9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
