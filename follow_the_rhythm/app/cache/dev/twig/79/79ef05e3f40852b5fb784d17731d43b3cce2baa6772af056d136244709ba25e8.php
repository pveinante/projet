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
        $__internal_3fa7184c511679c0ab11e374cb1eb8b9f1db71524221c2c5b509d7bf01f74c5a = $this->env->getExtension("native_profiler");
        $__internal_3fa7184c511679c0ab11e374cb1eb8b9f1db71524221c2c5b509d7bf01f74c5a->enter($__internal_3fa7184c511679c0ab11e374cb1eb8b9f1db71524221c2c5b509d7bf01f74c5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3fa7184c511679c0ab11e374cb1eb8b9f1db71524221c2c5b509d7bf01f74c5a->leave($__internal_3fa7184c511679c0ab11e374cb1eb8b9f1db71524221c2c5b509d7bf01f74c5a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0bbc3ecc5491accebb9e1d7ca48aff717501d06f8e54012049fef35052cd682a = $this->env->getExtension("native_profiler");
        $__internal_0bbc3ecc5491accebb9e1d7ca48aff717501d06f8e54012049fef35052cd682a->enter($__internal_0bbc3ecc5491accebb9e1d7ca48aff717501d06f8e54012049fef35052cd682a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_0bbc3ecc5491accebb9e1d7ca48aff717501d06f8e54012049fef35052cd682a->leave($__internal_0bbc3ecc5491accebb9e1d7ca48aff717501d06f8e54012049fef35052cd682a_prof);

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
