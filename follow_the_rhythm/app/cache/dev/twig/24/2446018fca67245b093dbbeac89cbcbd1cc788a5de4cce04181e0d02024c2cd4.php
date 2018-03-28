<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_a739f27641ec89b2a566377f082bd506cad4d22815e9a7a536e4ef29350c7696 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_ff9ddf685c040844ac3bb41f831a5c00cc3ab7c3bb5000c7375534079c8a3bf5 = $this->env->getExtension("native_profiler");
        $__internal_ff9ddf685c040844ac3bb41f831a5c00cc3ab7c3bb5000c7375534079c8a3bf5->enter($__internal_ff9ddf685c040844ac3bb41f831a5c00cc3ab7c3bb5000c7375534079c8a3bf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff9ddf685c040844ac3bb41f831a5c00cc3ab7c3bb5000c7375534079c8a3bf5->leave($__internal_ff9ddf685c040844ac3bb41f831a5c00cc3ab7c3bb5000c7375534079c8a3bf5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bb0c00fa3b4a4f28f2a9f0355b6da53ba74632ed71d7b633da04be4c4423b66f = $this->env->getExtension("native_profiler");
        $__internal_bb0c00fa3b4a4f28f2a9f0355b6da53ba74632ed71d7b633da04be4c4423b66f->enter($__internal_bb0c00fa3b4a4f28f2a9f0355b6da53ba74632ed71d7b633da04be4c4423b66f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_bb0c00fa3b4a4f28f2a9f0355b6da53ba74632ed71d7b633da04be4c4423b66f->leave($__internal_bb0c00fa3b4a4f28f2a9f0355b6da53ba74632ed71d7b633da04be4c4423b66f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
