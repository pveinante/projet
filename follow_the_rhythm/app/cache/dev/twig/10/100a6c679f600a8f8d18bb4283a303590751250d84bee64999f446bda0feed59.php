<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_02e6914f96a17a29000d867217df328766588143a549d06378ff9d00513d7ce5 extends Twig_Template
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
        $__internal_b3f9c96729916f19d67090a8d1ac054bded6558baf667fbc58005a2e25eee752 = $this->env->getExtension("native_profiler");
        $__internal_b3f9c96729916f19d67090a8d1ac054bded6558baf667fbc58005a2e25eee752->enter($__internal_b3f9c96729916f19d67090a8d1ac054bded6558baf667fbc58005a2e25eee752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_b3f9c96729916f19d67090a8d1ac054bded6558baf667fbc58005a2e25eee752->leave($__internal_b3f9c96729916f19d67090a8d1ac054bded6558baf667fbc58005a2e25eee752_prof);

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
