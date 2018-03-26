<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_4f3208f8f748705f357e37165bc50573dcabdc631eed085d6b88612cbecbcaf1 extends Twig_Template
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
        $__internal_5aca6fbffabff77a2e753cc340433e3a86549d7ea69f6b632613f28d8bdeb58f = $this->env->getExtension("native_profiler");
        $__internal_5aca6fbffabff77a2e753cc340433e3a86549d7ea69f6b632613f28d8bdeb58f->enter($__internal_5aca6fbffabff77a2e753cc340433e3a86549d7ea69f6b632613f28d8bdeb58f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_5aca6fbffabff77a2e753cc340433e3a86549d7ea69f6b632613f28d8bdeb58f->leave($__internal_5aca6fbffabff77a2e753cc340433e3a86549d7ea69f6b632613f28d8bdeb58f_prof);

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
