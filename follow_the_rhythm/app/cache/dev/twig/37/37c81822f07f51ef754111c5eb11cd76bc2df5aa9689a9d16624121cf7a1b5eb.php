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
        $__internal_d256b8c65cfb8856d8f2c0c8da5fc9b1cd1ad5e42f361ad764ec8b01ace22eae = $this->env->getExtension("native_profiler");
        $__internal_d256b8c65cfb8856d8f2c0c8da5fc9b1cd1ad5e42f361ad764ec8b01ace22eae->enter($__internal_d256b8c65cfb8856d8f2c0c8da5fc9b1cd1ad5e42f361ad764ec8b01ace22eae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_d256b8c65cfb8856d8f2c0c8da5fc9b1cd1ad5e42f361ad764ec8b01ace22eae->leave($__internal_d256b8c65cfb8856d8f2c0c8da5fc9b1cd1ad5e42f361ad764ec8b01ace22eae_prof);

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
