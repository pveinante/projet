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
        $__internal_9476e3e2bbbdc5399d31e9dcb11c8d7f757108b738bbc209a8d1f105e6890738 = $this->env->getExtension("native_profiler");
        $__internal_9476e3e2bbbdc5399d31e9dcb11c8d7f757108b738bbc209a8d1f105e6890738->enter($__internal_9476e3e2bbbdc5399d31e9dcb11c8d7f757108b738bbc209a8d1f105e6890738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9476e3e2bbbdc5399d31e9dcb11c8d7f757108b738bbc209a8d1f105e6890738->leave($__internal_9476e3e2bbbdc5399d31e9dcb11c8d7f757108b738bbc209a8d1f105e6890738_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ecc5ab43c57c36cc3b5f4422c322ca0f6410088a5e1226ef7c23ffdf76a82018 = $this->env->getExtension("native_profiler");
        $__internal_ecc5ab43c57c36cc3b5f4422c322ca0f6410088a5e1226ef7c23ffdf76a82018->enter($__internal_ecc5ab43c57c36cc3b5f4422c322ca0f6410088a5e1226ef7c23ffdf76a82018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_ecc5ab43c57c36cc3b5f4422c322ca0f6410088a5e1226ef7c23ffdf76a82018->leave($__internal_ecc5ab43c57c36cc3b5f4422c322ca0f6410088a5e1226ef7c23ffdf76a82018_prof);

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
