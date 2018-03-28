<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_10f121c21c43accea9dd27e65eac83409320617ba0ad683031e209bf8287a518 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_4b7a62eab1480a07c20901944a5e8a4bad7bb81966f0ea9dfd7c5b70d91c55d3 = $this->env->getExtension("native_profiler");
        $__internal_4b7a62eab1480a07c20901944a5e8a4bad7bb81966f0ea9dfd7c5b70d91c55d3->enter($__internal_4b7a62eab1480a07c20901944a5e8a4bad7bb81966f0ea9dfd7c5b70d91c55d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b7a62eab1480a07c20901944a5e8a4bad7bb81966f0ea9dfd7c5b70d91c55d3->leave($__internal_4b7a62eab1480a07c20901944a5e8a4bad7bb81966f0ea9dfd7c5b70d91c55d3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_77ac83e0a438cdb60731eef0b4fd7b7b1615eb3bc2eefce6c2ea86834336579c = $this->env->getExtension("native_profiler");
        $__internal_77ac83e0a438cdb60731eef0b4fd7b7b1615eb3bc2eefce6c2ea86834336579c->enter($__internal_77ac83e0a438cdb60731eef0b4fd7b7b1615eb3bc2eefce6c2ea86834336579c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_77ac83e0a438cdb60731eef0b4fd7b7b1615eb3bc2eefce6c2ea86834336579c->leave($__internal_77ac83e0a438cdb60731eef0b4fd7b7b1615eb3bc2eefce6c2ea86834336579c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
