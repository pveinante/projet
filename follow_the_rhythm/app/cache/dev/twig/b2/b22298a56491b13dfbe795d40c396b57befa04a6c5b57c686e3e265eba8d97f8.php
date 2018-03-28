<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_14ea64a101ac04a7c25003bb09f3236bda680176eb293d38473c9cf6a7cf97a8 extends Twig_Template
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
        $__internal_04fe947fea0003ab50ff804e0e779a3ace5589865beba57a846d8ac23a5d9e00 = $this->env->getExtension("native_profiler");
        $__internal_04fe947fea0003ab50ff804e0e779a3ace5589865beba57a846d8ac23a5d9e00->enter($__internal_04fe947fea0003ab50ff804e0e779a3ace5589865beba57a846d8ac23a5d9e00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_04fe947fea0003ab50ff804e0e779a3ace5589865beba57a846d8ac23a5d9e00->leave($__internal_04fe947fea0003ab50ff804e0e779a3ace5589865beba57a846d8ac23a5d9e00_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
