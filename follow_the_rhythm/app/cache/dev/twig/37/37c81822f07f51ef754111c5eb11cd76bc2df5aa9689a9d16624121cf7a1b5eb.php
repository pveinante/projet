<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_199523fcc67a63e0b1295e0e2cf2e72ee90642a3bbfe321fec63193525bd85b9 extends Twig_Template
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
        $__internal_16221aacef30cc19e4a4f9812c7f03ffc414689b3e524fe326f4cb0291fb0626 = $this->env->getExtension("native_profiler");
        $__internal_16221aacef30cc19e4a4f9812c7f03ffc414689b3e524fe326f4cb0291fb0626->enter($__internal_16221aacef30cc19e4a4f9812c7f03ffc414689b3e524fe326f4cb0291fb0626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_16221aacef30cc19e4a4f9812c7f03ffc414689b3e524fe326f4cb0291fb0626->leave($__internal_16221aacef30cc19e4a4f9812c7f03ffc414689b3e524fe326f4cb0291fb0626_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
