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
        $__internal_ee3f33200339ac02f2f5f8a48d48cb01df0d7e6bbd5195076b44d84331afd881 = $this->env->getExtension("native_profiler");
        $__internal_ee3f33200339ac02f2f5f8a48d48cb01df0d7e6bbd5195076b44d84331afd881->enter($__internal_ee3f33200339ac02f2f5f8a48d48cb01df0d7e6bbd5195076b44d84331afd881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee3f33200339ac02f2f5f8a48d48cb01df0d7e6bbd5195076b44d84331afd881->leave($__internal_ee3f33200339ac02f2f5f8a48d48cb01df0d7e6bbd5195076b44d84331afd881_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_40c7f59af2280e111498ea11a603b40b01ed2f5e7147cea6eee5166361b9f997 = $this->env->getExtension("native_profiler");
        $__internal_40c7f59af2280e111498ea11a603b40b01ed2f5e7147cea6eee5166361b9f997->enter($__internal_40c7f59af2280e111498ea11a603b40b01ed2f5e7147cea6eee5166361b9f997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_40c7f59af2280e111498ea11a603b40b01ed2f5e7147cea6eee5166361b9f997->leave($__internal_40c7f59af2280e111498ea11a603b40b01ed2f5e7147cea6eee5166361b9f997_prof);

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
