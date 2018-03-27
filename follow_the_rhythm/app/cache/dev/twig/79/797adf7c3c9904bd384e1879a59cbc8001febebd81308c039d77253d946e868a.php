<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_6831dd4baaaac36a07bba83b537dbde6d9d0cd2f652ff150a20194e6f30cc6b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ba6f9fc62abb06ea5b733fb66e4e1aa794c6b420fd3cb185bf56290b8de4df98 = $this->env->getExtension("native_profiler");
        $__internal_ba6f9fc62abb06ea5b733fb66e4e1aa794c6b420fd3cb185bf56290b8de4df98->enter($__internal_ba6f9fc62abb06ea5b733fb66e4e1aa794c6b420fd3cb185bf56290b8de4df98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_ba6f9fc62abb06ea5b733fb66e4e1aa794c6b420fd3cb185bf56290b8de4df98->leave($__internal_ba6f9fc62abb06ea5b733fb66e4e1aa794c6b420fd3cb185bf56290b8de4df98_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
