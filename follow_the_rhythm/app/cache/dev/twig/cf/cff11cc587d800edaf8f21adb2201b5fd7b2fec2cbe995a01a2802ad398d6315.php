<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_2928f69eaff1236651c917f6db51c930da48fd239acba4983b052870e224ef5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_a75eec945c2d8d81d5fd766ef53d2633529cfe5ef9e9d2ad1cb854013ed63f75 = $this->env->getExtension("native_profiler");
        $__internal_a75eec945c2d8d81d5fd766ef53d2633529cfe5ef9e9d2ad1cb854013ed63f75->enter($__internal_a75eec945c2d8d81d5fd766ef53d2633529cfe5ef9e9d2ad1cb854013ed63f75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a75eec945c2d8d81d5fd766ef53d2633529cfe5ef9e9d2ad1cb854013ed63f75->leave($__internal_a75eec945c2d8d81d5fd766ef53d2633529cfe5ef9e9d2ad1cb854013ed63f75_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_70e7ede89ad1a4313bb7677698e0da70c5746af2e930247008edacecb3b05521 = $this->env->getExtension("native_profiler");
        $__internal_70e7ede89ad1a4313bb7677698e0da70c5746af2e930247008edacecb3b05521->enter($__internal_70e7ede89ad1a4313bb7677698e0da70c5746af2e930247008edacecb3b05521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_70e7ede89ad1a4313bb7677698e0da70c5746af2e930247008edacecb3b05521->leave($__internal_70e7ede89ad1a4313bb7677698e0da70c5746af2e930247008edacecb3b05521_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
