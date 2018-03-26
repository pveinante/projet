<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_b10b0a240bb4d15254a87aab390eaac034a72933f07dfcd2c9d2005594c2771d extends Twig_Template
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
        $__internal_0aaeee8c456f62e7ce007159e2538216b71dafc59059c4147cf12cfac27859ba = $this->env->getExtension("native_profiler");
        $__internal_0aaeee8c456f62e7ce007159e2538216b71dafc59059c4147cf12cfac27859ba->enter($__internal_0aaeee8c456f62e7ce007159e2538216b71dafc59059c4147cf12cfac27859ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_0aaeee8c456f62e7ce007159e2538216b71dafc59059c4147cf12cfac27859ba->leave($__internal_0aaeee8c456f62e7ce007159e2538216b71dafc59059c4147cf12cfac27859ba_prof);

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
