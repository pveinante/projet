<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_6bbf50b8571a41c188f8f656f9d32ac9c3c66f3da2593eaa0d36b178f53698e0 extends Twig_Template
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
        $__internal_dd329ac3d5dbc045fdc2123c18fcb6b9b8077ce78bd46cf7d3740a7ff751e475 = $this->env->getExtension("native_profiler");
        $__internal_dd329ac3d5dbc045fdc2123c18fcb6b9b8077ce78bd46cf7d3740a7ff751e475->enter($__internal_dd329ac3d5dbc045fdc2123c18fcb6b9b8077ce78bd46cf7d3740a7ff751e475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_dd329ac3d5dbc045fdc2123c18fcb6b9b8077ce78bd46cf7d3740a7ff751e475->leave($__internal_dd329ac3d5dbc045fdc2123c18fcb6b9b8077ce78bd46cf7d3740a7ff751e475_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
