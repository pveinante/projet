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
        $__internal_46467962d334dcacb4fdd3fc1f9eb5079b8e1fb0f31f1b141d81de306949ad1e = $this->env->getExtension("native_profiler");
        $__internal_46467962d334dcacb4fdd3fc1f9eb5079b8e1fb0f31f1b141d81de306949ad1e->enter($__internal_46467962d334dcacb4fdd3fc1f9eb5079b8e1fb0f31f1b141d81de306949ad1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_46467962d334dcacb4fdd3fc1f9eb5079b8e1fb0f31f1b141d81de306949ad1e->leave($__internal_46467962d334dcacb4fdd3fc1f9eb5079b8e1fb0f31f1b141d81de306949ad1e_prof);

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
