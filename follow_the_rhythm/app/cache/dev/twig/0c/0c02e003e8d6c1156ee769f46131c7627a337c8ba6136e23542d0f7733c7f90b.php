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
        $__internal_f58206dd9065ac3f7ccfc641ae39f6b7072399997221add784c27aa27ae7da38 = $this->env->getExtension("native_profiler");
        $__internal_f58206dd9065ac3f7ccfc641ae39f6b7072399997221add784c27aa27ae7da38->enter($__internal_f58206dd9065ac3f7ccfc641ae39f6b7072399997221add784c27aa27ae7da38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f58206dd9065ac3f7ccfc641ae39f6b7072399997221add784c27aa27ae7da38->leave($__internal_f58206dd9065ac3f7ccfc641ae39f6b7072399997221add784c27aa27ae7da38_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2eb96c59cfb386df820cd1d8ceeadce2b86104f5f5187432d6ea3932d2a82ba8 = $this->env->getExtension("native_profiler");
        $__internal_2eb96c59cfb386df820cd1d8ceeadce2b86104f5f5187432d6ea3932d2a82ba8->enter($__internal_2eb96c59cfb386df820cd1d8ceeadce2b86104f5f5187432d6ea3932d2a82ba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_2eb96c59cfb386df820cd1d8ceeadce2b86104f5f5187432d6ea3932d2a82ba8->leave($__internal_2eb96c59cfb386df820cd1d8ceeadce2b86104f5f5187432d6ea3932d2a82ba8_prof);

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
