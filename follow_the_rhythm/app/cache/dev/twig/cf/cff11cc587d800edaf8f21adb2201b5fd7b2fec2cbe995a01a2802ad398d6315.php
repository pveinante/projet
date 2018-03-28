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
        $__internal_f089dcfc63423a06c501db80c1691f7da8c4e968ca35d5136e4e62fb311d8499 = $this->env->getExtension("native_profiler");
        $__internal_f089dcfc63423a06c501db80c1691f7da8c4e968ca35d5136e4e62fb311d8499->enter($__internal_f089dcfc63423a06c501db80c1691f7da8c4e968ca35d5136e4e62fb311d8499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f089dcfc63423a06c501db80c1691f7da8c4e968ca35d5136e4e62fb311d8499->leave($__internal_f089dcfc63423a06c501db80c1691f7da8c4e968ca35d5136e4e62fb311d8499_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_aadc6746424b87fe07bb1b5211e8cc22f03c3d03445a4ef40d29e55e871f244e = $this->env->getExtension("native_profiler");
        $__internal_aadc6746424b87fe07bb1b5211e8cc22f03c3d03445a4ef40d29e55e871f244e->enter($__internal_aadc6746424b87fe07bb1b5211e8cc22f03c3d03445a4ef40d29e55e871f244e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_aadc6746424b87fe07bb1b5211e8cc22f03c3d03445a4ef40d29e55e871f244e->leave($__internal_aadc6746424b87fe07bb1b5211e8cc22f03c3d03445a4ef40d29e55e871f244e_prof);

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
