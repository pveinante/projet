<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_002678d43d4fdaa8793ac93b78b5b0f8805161a8a2ef9955c1679d242ed033db extends Twig_Template
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
        $__internal_ed43310ae803e7b8270f9ac342f9aead0c345e0985246c31d253cb3d6c471c8b = $this->env->getExtension("native_profiler");
        $__internal_ed43310ae803e7b8270f9ac342f9aead0c345e0985246c31d253cb3d6c471c8b->enter($__internal_ed43310ae803e7b8270f9ac342f9aead0c345e0985246c31d253cb3d6c471c8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_ed43310ae803e7b8270f9ac342f9aead0c345e0985246c31d253cb3d6c471c8b->leave($__internal_ed43310ae803e7b8270f9ac342f9aead0c345e0985246c31d253cb3d6c471c8b_prof);

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
