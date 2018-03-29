<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_7ee7c5aea4edb6f4381f631b9f079d74c066ac355f00e052b3f585942d1be109 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_0c4f0dc62bc25ddf62f44f801efd700e36ed15b2e072cea720bb1e318a7b71d2 = $this->env->getExtension("native_profiler");
        $__internal_0c4f0dc62bc25ddf62f44f801efd700e36ed15b2e072cea720bb1e318a7b71d2->enter($__internal_0c4f0dc62bc25ddf62f44f801efd700e36ed15b2e072cea720bb1e318a7b71d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c4f0dc62bc25ddf62f44f801efd700e36ed15b2e072cea720bb1e318a7b71d2->leave($__internal_0c4f0dc62bc25ddf62f44f801efd700e36ed15b2e072cea720bb1e318a7b71d2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b19d45539bf9305656396d086aad59366c8d30818f27b98ab103d29be1674e4d = $this->env->getExtension("native_profiler");
        $__internal_b19d45539bf9305656396d086aad59366c8d30818f27b98ab103d29be1674e4d->enter($__internal_b19d45539bf9305656396d086aad59366c8d30818f27b98ab103d29be1674e4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>
";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_b19d45539bf9305656396d086aad59366c8d30818f27b98ab103d29be1674e4d->leave($__internal_b19d45539bf9305656396d086aad59366c8d30818f27b98ab103d29be1674e4d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}, 'FOSUserBundle') }}*/
/* </p>*/
/* {% endblock %}*/
/* */
