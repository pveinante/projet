<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_784d8ce5d62b30ad23639446c655710e9df4282b9cfe564187fdfc7433c5c6e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fbcc8ee52f24316ce59fbaa6d5a93511dd3255689a20bf87bd6c698dc50b37d7 = $this->env->getExtension("native_profiler");
        $__internal_fbcc8ee52f24316ce59fbaa6d5a93511dd3255689a20bf87bd6c698dc50b37d7->enter($__internal_fbcc8ee52f24316ce59fbaa6d5a93511dd3255689a20bf87bd6c698dc50b37d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbcc8ee52f24316ce59fbaa6d5a93511dd3255689a20bf87bd6c698dc50b37d7->leave($__internal_fbcc8ee52f24316ce59fbaa6d5a93511dd3255689a20bf87bd6c698dc50b37d7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c3b5532a3a488d436fc2a65ed7379a62bda2d88e30d1cd7448e809d60b94f28d = $this->env->getExtension("native_profiler");
        $__internal_c3b5532a3a488d436fc2a65ed7379a62bda2d88e30d1cd7448e809d60b94f28d->enter($__internal_c3b5532a3a488d436fc2a65ed7379a62bda2d88e30d1cd7448e809d60b94f28d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c3b5532a3a488d436fc2a65ed7379a62bda2d88e30d1cd7448e809d60b94f28d->leave($__internal_c3b5532a3a488d436fc2a65ed7379a62bda2d88e30d1cd7448e809d60b94f28d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_505467b8c5880c8aab569a54ecb34c2ece86b12ecfaaca1f6fd9db2e7c29a72e = $this->env->getExtension("native_profiler");
        $__internal_505467b8c5880c8aab569a54ecb34c2ece86b12ecfaaca1f6fd9db2e7c29a72e->enter($__internal_505467b8c5880c8aab569a54ecb34c2ece86b12ecfaaca1f6fd9db2e7c29a72e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_505467b8c5880c8aab569a54ecb34c2ece86b12ecfaaca1f6fd9db2e7c29a72e->leave($__internal_505467b8c5880c8aab569a54ecb34c2ece86b12ecfaaca1f6fd9db2e7c29a72e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c7222d67c757d6272ffde08a3079b5466fee1add8cbe869ecf4b9c3554ff6e13 = $this->env->getExtension("native_profiler");
        $__internal_c7222d67c757d6272ffde08a3079b5466fee1add8cbe869ecf4b9c3554ff6e13->enter($__internal_c7222d67c757d6272ffde08a3079b5466fee1add8cbe869ecf4b9c3554ff6e13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_c7222d67c757d6272ffde08a3079b5466fee1add8cbe869ecf4b9c3554ff6e13->leave($__internal_c7222d67c757d6272ffde08a3079b5466fee1add8cbe869ecf4b9c3554ff6e13_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
