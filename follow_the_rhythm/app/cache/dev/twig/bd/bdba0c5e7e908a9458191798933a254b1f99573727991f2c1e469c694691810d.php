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
        $__internal_db4399bb4c02572f3fba1581293754a57de25e90bd9b351e299944373365e15f = $this->env->getExtension("native_profiler");
        $__internal_db4399bb4c02572f3fba1581293754a57de25e90bd9b351e299944373365e15f->enter($__internal_db4399bb4c02572f3fba1581293754a57de25e90bd9b351e299944373365e15f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db4399bb4c02572f3fba1581293754a57de25e90bd9b351e299944373365e15f->leave($__internal_db4399bb4c02572f3fba1581293754a57de25e90bd9b351e299944373365e15f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_88b2d74aa9b3c714acf6de7d9158846f409014d2548e99bdab2cc3c9bfa438e9 = $this->env->getExtension("native_profiler");
        $__internal_88b2d74aa9b3c714acf6de7d9158846f409014d2548e99bdab2cc3c9bfa438e9->enter($__internal_88b2d74aa9b3c714acf6de7d9158846f409014d2548e99bdab2cc3c9bfa438e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>
";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_88b2d74aa9b3c714acf6de7d9158846f409014d2548e99bdab2cc3c9bfa438e9->leave($__internal_88b2d74aa9b3c714acf6de7d9158846f409014d2548e99bdab2cc3c9bfa438e9_prof);

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
