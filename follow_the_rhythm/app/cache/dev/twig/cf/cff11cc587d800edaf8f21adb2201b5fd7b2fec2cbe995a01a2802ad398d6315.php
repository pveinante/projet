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
        $__internal_c494b45a57a72402209a0fc6a84cdd3aa142701664710f208f2a2183f219454f = $this->env->getExtension("native_profiler");
        $__internal_c494b45a57a72402209a0fc6a84cdd3aa142701664710f208f2a2183f219454f->enter($__internal_c494b45a57a72402209a0fc6a84cdd3aa142701664710f208f2a2183f219454f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c494b45a57a72402209a0fc6a84cdd3aa142701664710f208f2a2183f219454f->leave($__internal_c494b45a57a72402209a0fc6a84cdd3aa142701664710f208f2a2183f219454f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ada50ac75396186d9367d717323b4c05f014b76e7f43b22126ff7f138267af59 = $this->env->getExtension("native_profiler");
        $__internal_ada50ac75396186d9367d717323b4c05f014b76e7f43b22126ff7f138267af59->enter($__internal_ada50ac75396186d9367d717323b4c05f014b76e7f43b22126ff7f138267af59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_ada50ac75396186d9367d717323b4c05f014b76e7f43b22126ff7f138267af59->leave($__internal_ada50ac75396186d9367d717323b4c05f014b76e7f43b22126ff7f138267af59_prof);

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
