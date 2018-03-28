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
        $__internal_6858d0d761d3e388298dc1b1da1cb7ef4aee962f1e391d65d4d612c9fa2bcb99 = $this->env->getExtension("native_profiler");
        $__internal_6858d0d761d3e388298dc1b1da1cb7ef4aee962f1e391d65d4d612c9fa2bcb99->enter($__internal_6858d0d761d3e388298dc1b1da1cb7ef4aee962f1e391d65d4d612c9fa2bcb99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6858d0d761d3e388298dc1b1da1cb7ef4aee962f1e391d65d4d612c9fa2bcb99->leave($__internal_6858d0d761d3e388298dc1b1da1cb7ef4aee962f1e391d65d4d612c9fa2bcb99_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_92444c9cb881dc3db52eeb23f02dc4df6e0f823799a68a72a2aaef8589f48f47 = $this->env->getExtension("native_profiler");
        $__internal_92444c9cb881dc3db52eeb23f02dc4df6e0f823799a68a72a2aaef8589f48f47->enter($__internal_92444c9cb881dc3db52eeb23f02dc4df6e0f823799a68a72a2aaef8589f48f47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_92444c9cb881dc3db52eeb23f02dc4df6e0f823799a68a72a2aaef8589f48f47->leave($__internal_92444c9cb881dc3db52eeb23f02dc4df6e0f823799a68a72a2aaef8589f48f47_prof);

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
