<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_dfd8154064b0a5657b883fed85abb5364647472d5c59ef5ef52f05fad1daaf2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_41be5d87d6d3bea98728f6c5f5bd734272d545135b300b677434549af954661d = $this->env->getExtension("native_profiler");
        $__internal_41be5d87d6d3bea98728f6c5f5bd734272d545135b300b677434549af954661d->enter($__internal_41be5d87d6d3bea98728f6c5f5bd734272d545135b300b677434549af954661d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41be5d87d6d3bea98728f6c5f5bd734272d545135b300b677434549af954661d->leave($__internal_41be5d87d6d3bea98728f6c5f5bd734272d545135b300b677434549af954661d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_39ea75b85ea5ba4ec3b89967eff9b5b8df4e1f575b6f7ada7192fe193f5d9075 = $this->env->getExtension("native_profiler");
        $__internal_39ea75b85ea5ba4ec3b89967eff9b5b8df4e1f575b6f7ada7192fe193f5d9075->enter($__internal_39ea75b85ea5ba4ec3b89967eff9b5b8df4e1f575b6f7ada7192fe193f5d9075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_39ea75b85ea5ba4ec3b89967eff9b5b8df4e1f575b6f7ada7192fe193f5d9075->leave($__internal_39ea75b85ea5ba4ec3b89967eff9b5b8df4e1f575b6f7ada7192fe193f5d9075_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
