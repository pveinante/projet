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
        $__internal_d5cd0a585a9672c9070d9ef3095705f06d893d785e6e67d842c0b2e3e474d989 = $this->env->getExtension("native_profiler");
        $__internal_d5cd0a585a9672c9070d9ef3095705f06d893d785e6e67d842c0b2e3e474d989->enter($__internal_d5cd0a585a9672c9070d9ef3095705f06d893d785e6e67d842c0b2e3e474d989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5cd0a585a9672c9070d9ef3095705f06d893d785e6e67d842c0b2e3e474d989->leave($__internal_d5cd0a585a9672c9070d9ef3095705f06d893d785e6e67d842c0b2e3e474d989_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e3e3458ba26a736c0eb139001d1211284cbf96ad495e43a7041a9dc3a88cff48 = $this->env->getExtension("native_profiler");
        $__internal_e3e3458ba26a736c0eb139001d1211284cbf96ad495e43a7041a9dc3a88cff48->enter($__internal_e3e3458ba26a736c0eb139001d1211284cbf96ad495e43a7041a9dc3a88cff48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_e3e3458ba26a736c0eb139001d1211284cbf96ad495e43a7041a9dc3a88cff48->leave($__internal_e3e3458ba26a736c0eb139001d1211284cbf96ad495e43a7041a9dc3a88cff48_prof);

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
