<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_b9ee5a6fcf58bdf8c4e26f1ede5e017ac5a630b7265697c729425bf6a7dd1df6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_de67d06869315fcc17daa10a620e7532fbb577fa8ced2a48be499e4c964d5bb7 = $this->env->getExtension("native_profiler");
        $__internal_de67d06869315fcc17daa10a620e7532fbb577fa8ced2a48be499e4c964d5bb7->enter($__internal_de67d06869315fcc17daa10a620e7532fbb577fa8ced2a48be499e4c964d5bb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de67d06869315fcc17daa10a620e7532fbb577fa8ced2a48be499e4c964d5bb7->leave($__internal_de67d06869315fcc17daa10a620e7532fbb577fa8ced2a48be499e4c964d5bb7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6efa9e98abf9fb8a697be901a9efb0d7e6fd451e0fd807874560263d392f2b0c = $this->env->getExtension("native_profiler");
        $__internal_6efa9e98abf9fb8a697be901a9efb0d7e6fd451e0fd807874560263d392f2b0c->enter($__internal_6efa9e98abf9fb8a697be901a9efb0d7e6fd451e0fd807874560263d392f2b0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_6efa9e98abf9fb8a697be901a9efb0d7e6fd451e0fd807874560263d392f2b0c->leave($__internal_6efa9e98abf9fb8a697be901a9efb0d7e6fd451e0fd807874560263d392f2b0c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
