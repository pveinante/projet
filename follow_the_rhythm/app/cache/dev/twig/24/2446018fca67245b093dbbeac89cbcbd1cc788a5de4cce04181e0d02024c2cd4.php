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
        $__internal_30b95b2907a5cdd63c2bc91c7ccac1f821bb62e3d39d9f8a74dc141ed5b662a2 = $this->env->getExtension("native_profiler");
        $__internal_30b95b2907a5cdd63c2bc91c7ccac1f821bb62e3d39d9f8a74dc141ed5b662a2->enter($__internal_30b95b2907a5cdd63c2bc91c7ccac1f821bb62e3d39d9f8a74dc141ed5b662a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30b95b2907a5cdd63c2bc91c7ccac1f821bb62e3d39d9f8a74dc141ed5b662a2->leave($__internal_30b95b2907a5cdd63c2bc91c7ccac1f821bb62e3d39d9f8a74dc141ed5b662a2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c44346b04992f13c3ea8da0d45df5c44e268f7b7fce69cae2d358c24508a63d6 = $this->env->getExtension("native_profiler");
        $__internal_c44346b04992f13c3ea8da0d45df5c44e268f7b7fce69cae2d358c24508a63d6->enter($__internal_c44346b04992f13c3ea8da0d45df5c44e268f7b7fce69cae2d358c24508a63d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_c44346b04992f13c3ea8da0d45df5c44e268f7b7fce69cae2d358c24508a63d6->leave($__internal_c44346b04992f13c3ea8da0d45df5c44e268f7b7fce69cae2d358c24508a63d6_prof);

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
