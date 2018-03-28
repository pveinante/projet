<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_6831dd4baaaac36a07bba83b537dbde6d9d0cd2f652ff150a20194e6f30cc6b0 extends Twig_Template
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
        $__internal_5740b6f31785e1a72339a80cf64b24de35500391c9ac582a658b101c132f66a3 = $this->env->getExtension("native_profiler");
        $__internal_5740b6f31785e1a72339a80cf64b24de35500391c9ac582a658b101c132f66a3->enter($__internal_5740b6f31785e1a72339a80cf64b24de35500391c9ac582a658b101c132f66a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_5740b6f31785e1a72339a80cf64b24de35500391c9ac582a658b101c132f66a3->leave($__internal_5740b6f31785e1a72339a80cf64b24de35500391c9ac582a658b101c132f66a3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
