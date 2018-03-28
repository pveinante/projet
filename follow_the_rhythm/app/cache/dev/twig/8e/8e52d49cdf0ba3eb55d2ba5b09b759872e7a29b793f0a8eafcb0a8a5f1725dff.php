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
        $__internal_b65450850ea4eaaa863e52da537f098ba207ad5c92167bb82218b2e432c970da = $this->env->getExtension("native_profiler");
        $__internal_b65450850ea4eaaa863e52da537f098ba207ad5c92167bb82218b2e432c970da->enter($__internal_b65450850ea4eaaa863e52da537f098ba207ad5c92167bb82218b2e432c970da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b65450850ea4eaaa863e52da537f098ba207ad5c92167bb82218b2e432c970da->leave($__internal_b65450850ea4eaaa863e52da537f098ba207ad5c92167bb82218b2e432c970da_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_90eaaf2cbc28761623cfb51c1346a970a48ab7c5a5beefe52825b3e9e41ce1a3 = $this->env->getExtension("native_profiler");
        $__internal_90eaaf2cbc28761623cfb51c1346a970a48ab7c5a5beefe52825b3e9e41ce1a3->enter($__internal_90eaaf2cbc28761623cfb51c1346a970a48ab7c5a5beefe52825b3e9e41ce1a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_90eaaf2cbc28761623cfb51c1346a970a48ab7c5a5beefe52825b3e9e41ce1a3->leave($__internal_90eaaf2cbc28761623cfb51c1346a970a48ab7c5a5beefe52825b3e9e41ce1a3_prof);

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
