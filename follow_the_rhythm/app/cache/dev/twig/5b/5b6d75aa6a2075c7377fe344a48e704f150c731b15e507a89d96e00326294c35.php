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
        $__internal_398caacf136e8f0e62865ad23c02be4a029e299deb661514e406c808a25cebef = $this->env->getExtension("native_profiler");
        $__internal_398caacf136e8f0e62865ad23c02be4a029e299deb661514e406c808a25cebef->enter($__internal_398caacf136e8f0e62865ad23c02be4a029e299deb661514e406c808a25cebef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_398caacf136e8f0e62865ad23c02be4a029e299deb661514e406c808a25cebef->leave($__internal_398caacf136e8f0e62865ad23c02be4a029e299deb661514e406c808a25cebef_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3e18dea7160d0853b8270b5786883f4a7771909232306e85b3d4ce36ebe4995f = $this->env->getExtension("native_profiler");
        $__internal_3e18dea7160d0853b8270b5786883f4a7771909232306e85b3d4ce36ebe4995f->enter($__internal_3e18dea7160d0853b8270b5786883f4a7771909232306e85b3d4ce36ebe4995f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_3e18dea7160d0853b8270b5786883f4a7771909232306e85b3d4ce36ebe4995f->leave($__internal_3e18dea7160d0853b8270b5786883f4a7771909232306e85b3d4ce36ebe4995f_prof);

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
