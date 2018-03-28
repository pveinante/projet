<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_0807cdf231b36a044d008619029a38616452089af505b6f9aa4a73a8e4f94544 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_f0fc53a9b0acc3a21031ccba487b335c2a7326bb206b4b2ba2954153f0de377a = $this->env->getExtension("native_profiler");
        $__internal_f0fc53a9b0acc3a21031ccba487b335c2a7326bb206b4b2ba2954153f0de377a->enter($__internal_f0fc53a9b0acc3a21031ccba487b335c2a7326bb206b4b2ba2954153f0de377a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0fc53a9b0acc3a21031ccba487b335c2a7326bb206b4b2ba2954153f0de377a->leave($__internal_f0fc53a9b0acc3a21031ccba487b335c2a7326bb206b4b2ba2954153f0de377a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d0837d630c816882526f6405527832cb88781da822470a447754e3ea9e3c0693 = $this->env->getExtension("native_profiler");
        $__internal_d0837d630c816882526f6405527832cb88781da822470a447754e3ea9e3c0693->enter($__internal_d0837d630c816882526f6405527832cb88781da822470a447754e3ea9e3c0693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_d0837d630c816882526f6405527832cb88781da822470a447754e3ea9e3c0693->leave($__internal_d0837d630c816882526f6405527832cb88781da822470a447754e3ea9e3c0693_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
