<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_0529be324dae9484df3f7e23887dd8b63f9c6ceae01b4982dff723fdd5bcd308 extends Twig_Template
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
        $__internal_5005c55c0eb695f23e0ec5c5bd0ed87b72b4ca18b37cad3df6476343f4b5497e = $this->env->getExtension("native_profiler");
        $__internal_5005c55c0eb695f23e0ec5c5bd0ed87b72b4ca18b37cad3df6476343f4b5497e->enter($__internal_5005c55c0eb695f23e0ec5c5bd0ed87b72b4ca18b37cad3df6476343f4b5497e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_5005c55c0eb695f23e0ec5c5bd0ed87b72b4ca18b37cad3df6476343f4b5497e->leave($__internal_5005c55c0eb695f23e0ec5c5bd0ed87b72b4ca18b37cad3df6476343f4b5497e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
