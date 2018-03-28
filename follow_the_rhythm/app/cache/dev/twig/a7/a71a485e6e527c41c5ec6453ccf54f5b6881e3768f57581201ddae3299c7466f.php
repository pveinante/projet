<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_8e4636f9120b1babf0f17c7659066c50b8229f6fb5e9db08cde07207713bec2c extends Twig_Template
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
        $__internal_769c65df08673703b864f94f9ab1083d66f723fcf070c5275d6f01bee6827048 = $this->env->getExtension("native_profiler");
        $__internal_769c65df08673703b864f94f9ab1083d66f723fcf070c5275d6f01bee6827048->enter($__internal_769c65df08673703b864f94f9ab1083d66f723fcf070c5275d6f01bee6827048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_769c65df08673703b864f94f9ab1083d66f723fcf070c5275d6f01bee6827048->leave($__internal_769c65df08673703b864f94f9ab1083d66f723fcf070c5275d6f01bee6827048_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
