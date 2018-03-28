<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_2e5409f002f7564c8788b3fcd214adee118ba9a9143fbca9ba0b209c0e8fbad4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_2bfbe0b787cf26c3d81eef9b8ccf83f4f7cd2e7cc4c778f55d5b544d0ca1ddac = $this->env->getExtension("native_profiler");
        $__internal_2bfbe0b787cf26c3d81eef9b8ccf83f4f7cd2e7cc4c778f55d5b544d0ca1ddac->enter($__internal_2bfbe0b787cf26c3d81eef9b8ccf83f4f7cd2e7cc4c778f55d5b544d0ca1ddac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2bfbe0b787cf26c3d81eef9b8ccf83f4f7cd2e7cc4c778f55d5b544d0ca1ddac->leave($__internal_2bfbe0b787cf26c3d81eef9b8ccf83f4f7cd2e7cc4c778f55d5b544d0ca1ddac_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8d47f4d68d2ec96e679e5270a8fa85f5442672265314cb62e1f198188a485d32 = $this->env->getExtension("native_profiler");
        $__internal_8d47f4d68d2ec96e679e5270a8fa85f5442672265314cb62e1f198188a485d32->enter($__internal_8d47f4d68d2ec96e679e5270a8fa85f5442672265314cb62e1f198188a485d32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_8d47f4d68d2ec96e679e5270a8fa85f5442672265314cb62e1f198188a485d32->leave($__internal_8d47f4d68d2ec96e679e5270a8fa85f5442672265314cb62e1f198188a485d32_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
