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
        $__internal_8022f04eea821a3a52e0d5425645dae8d05013fb62e8c983ce243244002e8804 = $this->env->getExtension("native_profiler");
        $__internal_8022f04eea821a3a52e0d5425645dae8d05013fb62e8c983ce243244002e8804->enter($__internal_8022f04eea821a3a52e0d5425645dae8d05013fb62e8c983ce243244002e8804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_8022f04eea821a3a52e0d5425645dae8d05013fb62e8c983ce243244002e8804->leave($__internal_8022f04eea821a3a52e0d5425645dae8d05013fb62e8c983ce243244002e8804_prof);

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
