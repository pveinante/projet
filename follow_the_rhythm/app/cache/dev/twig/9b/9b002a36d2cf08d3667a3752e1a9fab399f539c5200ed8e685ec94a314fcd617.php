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
        $__internal_998a25e37b5d607553833b1ef3548629841c3ea2f5840c6ddd60c29487105fbb = $this->env->getExtension("native_profiler");
        $__internal_998a25e37b5d607553833b1ef3548629841c3ea2f5840c6ddd60c29487105fbb->enter($__internal_998a25e37b5d607553833b1ef3548629841c3ea2f5840c6ddd60c29487105fbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_998a25e37b5d607553833b1ef3548629841c3ea2f5840c6ddd60c29487105fbb->leave($__internal_998a25e37b5d607553833b1ef3548629841c3ea2f5840c6ddd60c29487105fbb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_382d71d0a00ca39cf53ff4724206f002840c6807760b15a0c3d9099af58749ad = $this->env->getExtension("native_profiler");
        $__internal_382d71d0a00ca39cf53ff4724206f002840c6807760b15a0c3d9099af58749ad->enter($__internal_382d71d0a00ca39cf53ff4724206f002840c6807760b15a0c3d9099af58749ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_382d71d0a00ca39cf53ff4724206f002840c6807760b15a0c3d9099af58749ad->leave($__internal_382d71d0a00ca39cf53ff4724206f002840c6807760b15a0c3d9099af58749ad_prof);

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
