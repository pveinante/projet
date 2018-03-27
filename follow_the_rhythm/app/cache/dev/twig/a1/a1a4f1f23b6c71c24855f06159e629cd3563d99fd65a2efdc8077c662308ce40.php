<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_f401b72806d930e5487db3c0e9827fc537bdccb625ac2dec65b2dfc2f332e421 extends Twig_Template
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
        $__internal_bcf492c29efd76ef492216235814bd4cbb3b5d613656bb4b324682e6ae8583fa = $this->env->getExtension("native_profiler");
        $__internal_bcf492c29efd76ef492216235814bd4cbb3b5d613656bb4b324682e6ae8583fa->enter($__internal_bcf492c29efd76ef492216235814bd4cbb3b5d613656bb4b324682e6ae8583fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_bcf492c29efd76ef492216235814bd4cbb3b5d613656bb4b324682e6ae8583fa->leave($__internal_bcf492c29efd76ef492216235814bd4cbb3b5d613656bb4b324682e6ae8583fa_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
