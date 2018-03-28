<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_0c2e366aae66ac96d544936e0c047a8a3b7f3e217ddb6f4f68f065865b3328a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_62c0db0e424aae256a028907c918060463f00f715d3213a9431abc4f789b4137 = $this->env->getExtension("native_profiler");
        $__internal_62c0db0e424aae256a028907c918060463f00f715d3213a9431abc4f789b4137->enter($__internal_62c0db0e424aae256a028907c918060463f00f715d3213a9431abc4f789b4137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62c0db0e424aae256a028907c918060463f00f715d3213a9431abc4f789b4137->leave($__internal_62c0db0e424aae256a028907c918060463f00f715d3213a9431abc4f789b4137_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_98b6cfca894bb62d0e125d04c34966e52a72ba9944af47c65dc75a75e950a4df = $this->env->getExtension("native_profiler");
        $__internal_98b6cfca894bb62d0e125d04c34966e52a72ba9944af47c65dc75a75e950a4df->enter($__internal_98b6cfca894bb62d0e125d04c34966e52a72ba9944af47c65dc75a75e950a4df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_98b6cfca894bb62d0e125d04c34966e52a72ba9944af47c65dc75a75e950a4df->leave($__internal_98b6cfca894bb62d0e125d04c34966e52a72ba9944af47c65dc75a75e950a4df_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
