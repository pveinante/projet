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
        $__internal_ac8919019f1a08e175f5d2c9041f384ab55c088eb4093a89e083e1f5883b4f97 = $this->env->getExtension("native_profiler");
        $__internal_ac8919019f1a08e175f5d2c9041f384ab55c088eb4093a89e083e1f5883b4f97->enter($__internal_ac8919019f1a08e175f5d2c9041f384ab55c088eb4093a89e083e1f5883b4f97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_ac8919019f1a08e175f5d2c9041f384ab55c088eb4093a89e083e1f5883b4f97->leave($__internal_ac8919019f1a08e175f5d2c9041f384ab55c088eb4093a89e083e1f5883b4f97_prof);

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
