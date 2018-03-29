<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_a4313a4963732790a161a4a67793ac273ab48af0a3765d30b2703e2c5f97db2c extends Twig_Template
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
        $__internal_92e7ce64d1ff41a1ee55c0fcd8a2446d96c3de270614acd285f7ab2af4c8698d = $this->env->getExtension("native_profiler");
        $__internal_92e7ce64d1ff41a1ee55c0fcd8a2446d96c3de270614acd285f7ab2af4c8698d->enter($__internal_92e7ce64d1ff41a1ee55c0fcd8a2446d96c3de270614acd285f7ab2af4c8698d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_92e7ce64d1ff41a1ee55c0fcd8a2446d96c3de270614acd285f7ab2af4c8698d->leave($__internal_92e7ce64d1ff41a1ee55c0fcd8a2446d96c3de270614acd285f7ab2af4c8698d_prof);

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
