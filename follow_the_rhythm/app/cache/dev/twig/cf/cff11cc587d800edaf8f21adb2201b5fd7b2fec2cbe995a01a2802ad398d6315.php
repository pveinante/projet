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
        $__internal_e8a994ed77b23976d298677bc7cd82e69b14a0a514e8e7d976464ef4b4d5c7e7 = $this->env->getExtension("native_profiler");
        $__internal_e8a994ed77b23976d298677bc7cd82e69b14a0a514e8e7d976464ef4b4d5c7e7->enter($__internal_e8a994ed77b23976d298677bc7cd82e69b14a0a514e8e7d976464ef4b4d5c7e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8a994ed77b23976d298677bc7cd82e69b14a0a514e8e7d976464ef4b4d5c7e7->leave($__internal_e8a994ed77b23976d298677bc7cd82e69b14a0a514e8e7d976464ef4b4d5c7e7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_850be4a0bf6083727308bda2e9ce01f9bcd5b039843abc7e663de3fb195c5306 = $this->env->getExtension("native_profiler");
        $__internal_850be4a0bf6083727308bda2e9ce01f9bcd5b039843abc7e663de3fb195c5306->enter($__internal_850be4a0bf6083727308bda2e9ce01f9bcd5b039843abc7e663de3fb195c5306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_850be4a0bf6083727308bda2e9ce01f9bcd5b039843abc7e663de3fb195c5306->leave($__internal_850be4a0bf6083727308bda2e9ce01f9bcd5b039843abc7e663de3fb195c5306_prof);

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
