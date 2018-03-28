<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_a739f27641ec89b2a566377f082bd506cad4d22815e9a7a536e4ef29350c7696 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_dd5b02d7162f873a8327409c1b8b8928332a2d95e1e37825804bc92de91e8c98 = $this->env->getExtension("native_profiler");
        $__internal_dd5b02d7162f873a8327409c1b8b8928332a2d95e1e37825804bc92de91e8c98->enter($__internal_dd5b02d7162f873a8327409c1b8b8928332a2d95e1e37825804bc92de91e8c98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd5b02d7162f873a8327409c1b8b8928332a2d95e1e37825804bc92de91e8c98->leave($__internal_dd5b02d7162f873a8327409c1b8b8928332a2d95e1e37825804bc92de91e8c98_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3ecd5deb7cc32b4a2cf998b75c82466755464db25ec028237b118de8e913b9c5 = $this->env->getExtension("native_profiler");
        $__internal_3ecd5deb7cc32b4a2cf998b75c82466755464db25ec028237b118de8e913b9c5->enter($__internal_3ecd5deb7cc32b4a2cf998b75c82466755464db25ec028237b118de8e913b9c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_3ecd5deb7cc32b4a2cf998b75c82466755464db25ec028237b118de8e913b9c5->leave($__internal_3ecd5deb7cc32b4a2cf998b75c82466755464db25ec028237b118de8e913b9c5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
