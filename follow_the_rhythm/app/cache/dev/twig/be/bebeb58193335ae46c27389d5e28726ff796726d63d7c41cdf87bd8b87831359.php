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
        $__internal_a40c7e9c7229855dcb4b2dbbf95c341bfcdd8bd6d419c4e593e5850b7e76b279 = $this->env->getExtension("native_profiler");
        $__internal_a40c7e9c7229855dcb4b2dbbf95c341bfcdd8bd6d419c4e593e5850b7e76b279->enter($__internal_a40c7e9c7229855dcb4b2dbbf95c341bfcdd8bd6d419c4e593e5850b7e76b279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a40c7e9c7229855dcb4b2dbbf95c341bfcdd8bd6d419c4e593e5850b7e76b279->leave($__internal_a40c7e9c7229855dcb4b2dbbf95c341bfcdd8bd6d419c4e593e5850b7e76b279_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_19d406c8cf1c45e9b5dfcd55e4ba966145d019a5049a2eb39767259934c52a90 = $this->env->getExtension("native_profiler");
        $__internal_19d406c8cf1c45e9b5dfcd55e4ba966145d019a5049a2eb39767259934c52a90->enter($__internal_19d406c8cf1c45e9b5dfcd55e4ba966145d019a5049a2eb39767259934c52a90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_19d406c8cf1c45e9b5dfcd55e4ba966145d019a5049a2eb39767259934c52a90->leave($__internal_19d406c8cf1c45e9b5dfcd55e4ba966145d019a5049a2eb39767259934c52a90_prof);

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
