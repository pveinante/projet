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
        $__internal_8c30db1cf96fd71cef3e93d9f4d826076ea4d64ed487e45589ebf0b136b78fd9 = $this->env->getExtension("native_profiler");
        $__internal_8c30db1cf96fd71cef3e93d9f4d826076ea4d64ed487e45589ebf0b136b78fd9->enter($__internal_8c30db1cf96fd71cef3e93d9f4d826076ea4d64ed487e45589ebf0b136b78fd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_8c30db1cf96fd71cef3e93d9f4d826076ea4d64ed487e45589ebf0b136b78fd9->leave($__internal_8c30db1cf96fd71cef3e93d9f4d826076ea4d64ed487e45589ebf0b136b78fd9_prof);

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
