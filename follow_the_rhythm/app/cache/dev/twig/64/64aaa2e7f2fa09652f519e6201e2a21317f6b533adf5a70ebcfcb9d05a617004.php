<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_784d8ce5d62b30ad23639446c655710e9df4282b9cfe564187fdfc7433c5c6e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_933fe6656454797464ccf076d721145bff665bd712eb99f90a636b050dbb99f7 = $this->env->getExtension("native_profiler");
        $__internal_933fe6656454797464ccf076d721145bff665bd712eb99f90a636b050dbb99f7->enter($__internal_933fe6656454797464ccf076d721145bff665bd712eb99f90a636b050dbb99f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_933fe6656454797464ccf076d721145bff665bd712eb99f90a636b050dbb99f7->leave($__internal_933fe6656454797464ccf076d721145bff665bd712eb99f90a636b050dbb99f7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d0d6424214e57d4d8ef5b3c21fc336205e4696392ea82421202961abb6ada766 = $this->env->getExtension("native_profiler");
        $__internal_d0d6424214e57d4d8ef5b3c21fc336205e4696392ea82421202961abb6ada766->enter($__internal_d0d6424214e57d4d8ef5b3c21fc336205e4696392ea82421202961abb6ada766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d0d6424214e57d4d8ef5b3c21fc336205e4696392ea82421202961abb6ada766->leave($__internal_d0d6424214e57d4d8ef5b3c21fc336205e4696392ea82421202961abb6ada766_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_80ace1516eba65c6f074126e3fe5a72f388ed9c89da09159ad17e92cb27d8b95 = $this->env->getExtension("native_profiler");
        $__internal_80ace1516eba65c6f074126e3fe5a72f388ed9c89da09159ad17e92cb27d8b95->enter($__internal_80ace1516eba65c6f074126e3fe5a72f388ed9c89da09159ad17e92cb27d8b95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_80ace1516eba65c6f074126e3fe5a72f388ed9c89da09159ad17e92cb27d8b95->leave($__internal_80ace1516eba65c6f074126e3fe5a72f388ed9c89da09159ad17e92cb27d8b95_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1dc5275366da36f665aadcc2bd4bd5777d84952e509938cddbfd3c0e54fa3e3e = $this->env->getExtension("native_profiler");
        $__internal_1dc5275366da36f665aadcc2bd4bd5777d84952e509938cddbfd3c0e54fa3e3e->enter($__internal_1dc5275366da36f665aadcc2bd4bd5777d84952e509938cddbfd3c0e54fa3e3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_1dc5275366da36f665aadcc2bd4bd5777d84952e509938cddbfd3c0e54fa3e3e->leave($__internal_1dc5275366da36f665aadcc2bd4bd5777d84952e509938cddbfd3c0e54fa3e3e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
