<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_6924ee31814ca0eab374966106eb92616f58180c15ecdd6cfbd0705a91f31099 extends Twig_Template
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
        $__internal_551270adab544758e8d196a719c59418988f994696de20018f68fa5b2e45958b = $this->env->getExtension("native_profiler");
        $__internal_551270adab544758e8d196a719c59418988f994696de20018f68fa5b2e45958b->enter($__internal_551270adab544758e8d196a719c59418988f994696de20018f68fa5b2e45958b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_551270adab544758e8d196a719c59418988f994696de20018f68fa5b2e45958b->leave($__internal_551270adab544758e8d196a719c59418988f994696de20018f68fa5b2e45958b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
