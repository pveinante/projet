<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_2928f69eaff1236651c917f6db51c930da48fd239acba4983b052870e224ef5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_38e04c2e87745c043785b27bdb4fa0dda6239bc9816e8d3c78695c55db1ebc9e = $this->env->getExtension("native_profiler");
        $__internal_38e04c2e87745c043785b27bdb4fa0dda6239bc9816e8d3c78695c55db1ebc9e->enter($__internal_38e04c2e87745c043785b27bdb4fa0dda6239bc9816e8d3c78695c55db1ebc9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38e04c2e87745c043785b27bdb4fa0dda6239bc9816e8d3c78695c55db1ebc9e->leave($__internal_38e04c2e87745c043785b27bdb4fa0dda6239bc9816e8d3c78695c55db1ebc9e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ed755297be97099977aaccc34a76725a696287fb0d0ee0eaf8d130bf8bf4df55 = $this->env->getExtension("native_profiler");
        $__internal_ed755297be97099977aaccc34a76725a696287fb0d0ee0eaf8d130bf8bf4df55->enter($__internal_ed755297be97099977aaccc34a76725a696287fb0d0ee0eaf8d130bf8bf4df55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_ed755297be97099977aaccc34a76725a696287fb0d0ee0eaf8d130bf8bf4df55->leave($__internal_ed755297be97099977aaccc34a76725a696287fb0d0ee0eaf8d130bf8bf4df55_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
