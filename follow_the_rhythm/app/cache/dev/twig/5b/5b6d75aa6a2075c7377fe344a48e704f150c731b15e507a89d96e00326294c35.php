<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_105826a9859f08802b53ec831c236e17004d3f89c321cd1d331589a77bdd3ae4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_dd518e208a6c72432d82638cfd8f01e3c9eee066312eae3e9a3469bbf9eb0432 = $this->env->getExtension("native_profiler");
        $__internal_dd518e208a6c72432d82638cfd8f01e3c9eee066312eae3e9a3469bbf9eb0432->enter($__internal_dd518e208a6c72432d82638cfd8f01e3c9eee066312eae3e9a3469bbf9eb0432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd518e208a6c72432d82638cfd8f01e3c9eee066312eae3e9a3469bbf9eb0432->leave($__internal_dd518e208a6c72432d82638cfd8f01e3c9eee066312eae3e9a3469bbf9eb0432_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dbb1affaa14b69255c0e1c624e0c2aa97866944d87dba1c3edf978c8cb07deb5 = $this->env->getExtension("native_profiler");
        $__internal_dbb1affaa14b69255c0e1c624e0c2aa97866944d87dba1c3edf978c8cb07deb5->enter($__internal_dbb1affaa14b69255c0e1c624e0c2aa97866944d87dba1c3edf978c8cb07deb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_dbb1affaa14b69255c0e1c624e0c2aa97866944d87dba1c3edf978c8cb07deb5->leave($__internal_dbb1affaa14b69255c0e1c624e0c2aa97866944d87dba1c3edf978c8cb07deb5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
