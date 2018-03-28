<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_e23a66d5d61cd5c1d1888d24c8d11b80114a901b0cdef2d93a7c029c10de1a91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_6e0513ffee8ab0ad2797fe68439d3bc8e98af94f59cf2038104b70cdc1464864 = $this->env->getExtension("native_profiler");
        $__internal_6e0513ffee8ab0ad2797fe68439d3bc8e98af94f59cf2038104b70cdc1464864->enter($__internal_6e0513ffee8ab0ad2797fe68439d3bc8e98af94f59cf2038104b70cdc1464864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e0513ffee8ab0ad2797fe68439d3bc8e98af94f59cf2038104b70cdc1464864->leave($__internal_6e0513ffee8ab0ad2797fe68439d3bc8e98af94f59cf2038104b70cdc1464864_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ee5cae92621c81d9eec651b017efa2859cba65293deebce7f141b49b29225c8a = $this->env->getExtension("native_profiler");
        $__internal_ee5cae92621c81d9eec651b017efa2859cba65293deebce7f141b49b29225c8a->enter($__internal_ee5cae92621c81d9eec651b017efa2859cba65293deebce7f141b49b29225c8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_ee5cae92621c81d9eec651b017efa2859cba65293deebce7f141b49b29225c8a->leave($__internal_ee5cae92621c81d9eec651b017efa2859cba65293deebce7f141b49b29225c8a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
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
/* <p>{{ 'resetting.password_already_requested'|trans({}, 'FOSUserBundle') }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
