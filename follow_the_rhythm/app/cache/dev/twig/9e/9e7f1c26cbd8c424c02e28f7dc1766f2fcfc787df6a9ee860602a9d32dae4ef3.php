<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_5d7324cd46c8ccf504b16bf16403b3f39dcf411ec892de1ed5623c6043076477 extends Twig_Template
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
        $__internal_e7b5c1c6397a0e630b33d284a730d6fc08f0a8a1d3fc9d223d9069370fd07fef = $this->env->getExtension("native_profiler");
        $__internal_e7b5c1c6397a0e630b33d284a730d6fc08f0a8a1d3fc9d223d9069370fd07fef->enter($__internal_e7b5c1c6397a0e630b33d284a730d6fc08f0a8a1d3fc9d223d9069370fd07fef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7b5c1c6397a0e630b33d284a730d6fc08f0a8a1d3fc9d223d9069370fd07fef->leave($__internal_e7b5c1c6397a0e630b33d284a730d6fc08f0a8a1d3fc9d223d9069370fd07fef_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a06978c894e7c627f29649ca642402ad46a5e9c396d04f0108d1b8d9183f6b30 = $this->env->getExtension("native_profiler");
        $__internal_a06978c894e7c627f29649ca642402ad46a5e9c396d04f0108d1b8d9183f6b30->enter($__internal_a06978c894e7c627f29649ca642402ad46a5e9c396d04f0108d1b8d9183f6b30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a06978c894e7c627f29649ca642402ad46a5e9c396d04f0108d1b8d9183f6b30->leave($__internal_a06978c894e7c627f29649ca642402ad46a5e9c396d04f0108d1b8d9183f6b30_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_410ffec39ca941bf90af4828cde2ec0feb79a8892f1a68051458806387e5fd03 = $this->env->getExtension("native_profiler");
        $__internal_410ffec39ca941bf90af4828cde2ec0feb79a8892f1a68051458806387e5fd03->enter($__internal_410ffec39ca941bf90af4828cde2ec0feb79a8892f1a68051458806387e5fd03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_410ffec39ca941bf90af4828cde2ec0feb79a8892f1a68051458806387e5fd03->leave($__internal_410ffec39ca941bf90af4828cde2ec0feb79a8892f1a68051458806387e5fd03_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6c2dfc186367031fc8b0591c3db22682741d8921af8acfb5769ea90bb2ed0179 = $this->env->getExtension("native_profiler");
        $__internal_6c2dfc186367031fc8b0591c3db22682741d8921af8acfb5769ea90bb2ed0179->enter($__internal_6c2dfc186367031fc8b0591c3db22682741d8921af8acfb5769ea90bb2ed0179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_6c2dfc186367031fc8b0591c3db22682741d8921af8acfb5769ea90bb2ed0179->leave($__internal_6c2dfc186367031fc8b0591c3db22682741d8921af8acfb5769ea90bb2ed0179_prof);

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
