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
        $__internal_e2af47f6494c25871a6cb63b5a0c632eaae70d1c3b19ea2c033d51cc03c55804 = $this->env->getExtension("native_profiler");
        $__internal_e2af47f6494c25871a6cb63b5a0c632eaae70d1c3b19ea2c033d51cc03c55804->enter($__internal_e2af47f6494c25871a6cb63b5a0c632eaae70d1c3b19ea2c033d51cc03c55804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2af47f6494c25871a6cb63b5a0c632eaae70d1c3b19ea2c033d51cc03c55804->leave($__internal_e2af47f6494c25871a6cb63b5a0c632eaae70d1c3b19ea2c033d51cc03c55804_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c8531a5c4bba2be38c542844e31f293d6448fddd81930dd9ebea0f6f2c48b901 = $this->env->getExtension("native_profiler");
        $__internal_c8531a5c4bba2be38c542844e31f293d6448fddd81930dd9ebea0f6f2c48b901->enter($__internal_c8531a5c4bba2be38c542844e31f293d6448fddd81930dd9ebea0f6f2c48b901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c8531a5c4bba2be38c542844e31f293d6448fddd81930dd9ebea0f6f2c48b901->leave($__internal_c8531a5c4bba2be38c542844e31f293d6448fddd81930dd9ebea0f6f2c48b901_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e6202a1e9f2fb301cf5e7117118d23ffbfbb83a6643e855310fa37f9ff8a9807 = $this->env->getExtension("native_profiler");
        $__internal_e6202a1e9f2fb301cf5e7117118d23ffbfbb83a6643e855310fa37f9ff8a9807->enter($__internal_e6202a1e9f2fb301cf5e7117118d23ffbfbb83a6643e855310fa37f9ff8a9807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e6202a1e9f2fb301cf5e7117118d23ffbfbb83a6643e855310fa37f9ff8a9807->leave($__internal_e6202a1e9f2fb301cf5e7117118d23ffbfbb83a6643e855310fa37f9ff8a9807_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_dd5fb2714aa235c0fa83732955cd656afa535db56223e2d866329044f7fb9d6d = $this->env->getExtension("native_profiler");
        $__internal_dd5fb2714aa235c0fa83732955cd656afa535db56223e2d866329044f7fb9d6d->enter($__internal_dd5fb2714aa235c0fa83732955cd656afa535db56223e2d866329044f7fb9d6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_dd5fb2714aa235c0fa83732955cd656afa535db56223e2d866329044f7fb9d6d->leave($__internal_dd5fb2714aa235c0fa83732955cd656afa535db56223e2d866329044f7fb9d6d_prof);

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
