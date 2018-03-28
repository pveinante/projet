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
        $__internal_0e47734a68ed5b4abf70a76b5f1a70bf691999036282df333a0cbba28c33abef = $this->env->getExtension("native_profiler");
        $__internal_0e47734a68ed5b4abf70a76b5f1a70bf691999036282df333a0cbba28c33abef->enter($__internal_0e47734a68ed5b4abf70a76b5f1a70bf691999036282df333a0cbba28c33abef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_0e47734a68ed5b4abf70a76b5f1a70bf691999036282df333a0cbba28c33abef->leave($__internal_0e47734a68ed5b4abf70a76b5f1a70bf691999036282df333a0cbba28c33abef_prof);

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
