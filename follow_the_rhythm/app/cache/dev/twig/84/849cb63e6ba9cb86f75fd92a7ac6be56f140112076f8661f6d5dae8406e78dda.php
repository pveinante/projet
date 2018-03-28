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
        $__internal_18bf38b49064b6ebde3d6ec53c4bf28daa0ce993c5915990970ea25244d0ac2d = $this->env->getExtension("native_profiler");
        $__internal_18bf38b49064b6ebde3d6ec53c4bf28daa0ce993c5915990970ea25244d0ac2d->enter($__internal_18bf38b49064b6ebde3d6ec53c4bf28daa0ce993c5915990970ea25244d0ac2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18bf38b49064b6ebde3d6ec53c4bf28daa0ce993c5915990970ea25244d0ac2d->leave($__internal_18bf38b49064b6ebde3d6ec53c4bf28daa0ce993c5915990970ea25244d0ac2d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_97d767d58054b87b457766685bf339967f804b01580c20f42b0d8e5906e23565 = $this->env->getExtension("native_profiler");
        $__internal_97d767d58054b87b457766685bf339967f804b01580c20f42b0d8e5906e23565->enter($__internal_97d767d58054b87b457766685bf339967f804b01580c20f42b0d8e5906e23565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_97d767d58054b87b457766685bf339967f804b01580c20f42b0d8e5906e23565->leave($__internal_97d767d58054b87b457766685bf339967f804b01580c20f42b0d8e5906e23565_prof);

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
