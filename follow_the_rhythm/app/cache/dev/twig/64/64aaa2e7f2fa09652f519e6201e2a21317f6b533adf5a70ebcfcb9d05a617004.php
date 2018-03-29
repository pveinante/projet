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
        $__internal_159984d8f3e14439193d5d5116dadcc680690c09813b5b7875b449af3614a0eb = $this->env->getExtension("native_profiler");
        $__internal_159984d8f3e14439193d5d5116dadcc680690c09813b5b7875b449af3614a0eb->enter($__internal_159984d8f3e14439193d5d5116dadcc680690c09813b5b7875b449af3614a0eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_159984d8f3e14439193d5d5116dadcc680690c09813b5b7875b449af3614a0eb->leave($__internal_159984d8f3e14439193d5d5116dadcc680690c09813b5b7875b449af3614a0eb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5b9a51aefcec13843a60292e5948e2919a96d20e96b38d2d09b2ad2f91294dff = $this->env->getExtension("native_profiler");
        $__internal_5b9a51aefcec13843a60292e5948e2919a96d20e96b38d2d09b2ad2f91294dff->enter($__internal_5b9a51aefcec13843a60292e5948e2919a96d20e96b38d2d09b2ad2f91294dff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5b9a51aefcec13843a60292e5948e2919a96d20e96b38d2d09b2ad2f91294dff->leave($__internal_5b9a51aefcec13843a60292e5948e2919a96d20e96b38d2d09b2ad2f91294dff_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ce7afaef2f58f1b8959b12810a3b4264fb9ea4a88b84804e7082f87356c61cc2 = $this->env->getExtension("native_profiler");
        $__internal_ce7afaef2f58f1b8959b12810a3b4264fb9ea4a88b84804e7082f87356c61cc2->enter($__internal_ce7afaef2f58f1b8959b12810a3b4264fb9ea4a88b84804e7082f87356c61cc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ce7afaef2f58f1b8959b12810a3b4264fb9ea4a88b84804e7082f87356c61cc2->leave($__internal_ce7afaef2f58f1b8959b12810a3b4264fb9ea4a88b84804e7082f87356c61cc2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4419f4dfad8151a0258bd777832f1e8045e5038d275e251f7b0485c09808360f = $this->env->getExtension("native_profiler");
        $__internal_4419f4dfad8151a0258bd777832f1e8045e5038d275e251f7b0485c09808360f->enter($__internal_4419f4dfad8151a0258bd777832f1e8045e5038d275e251f7b0485c09808360f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_4419f4dfad8151a0258bd777832f1e8045e5038d275e251f7b0485c09808360f->leave($__internal_4419f4dfad8151a0258bd777832f1e8045e5038d275e251f7b0485c09808360f_prof);

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
