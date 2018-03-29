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
        $__internal_52c13e4d5dbd46cb88160fa8ba898a930bf49a1ed9736c5710e0c73e8f686d78 = $this->env->getExtension("native_profiler");
        $__internal_52c13e4d5dbd46cb88160fa8ba898a930bf49a1ed9736c5710e0c73e8f686d78->enter($__internal_52c13e4d5dbd46cb88160fa8ba898a930bf49a1ed9736c5710e0c73e8f686d78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52c13e4d5dbd46cb88160fa8ba898a930bf49a1ed9736c5710e0c73e8f686d78->leave($__internal_52c13e4d5dbd46cb88160fa8ba898a930bf49a1ed9736c5710e0c73e8f686d78_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5ade3b89df1940fa5ad5d612ae9babf0caf0c04210130112711964f5f81b347b = $this->env->getExtension("native_profiler");
        $__internal_5ade3b89df1940fa5ad5d612ae9babf0caf0c04210130112711964f5f81b347b->enter($__internal_5ade3b89df1940fa5ad5d612ae9babf0caf0c04210130112711964f5f81b347b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_5ade3b89df1940fa5ad5d612ae9babf0caf0c04210130112711964f5f81b347b->leave($__internal_5ade3b89df1940fa5ad5d612ae9babf0caf0c04210130112711964f5f81b347b_prof);

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
