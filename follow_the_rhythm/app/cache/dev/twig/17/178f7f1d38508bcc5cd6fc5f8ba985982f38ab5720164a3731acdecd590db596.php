<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_471de3adfe40ad51cda74bb0379960be2dffb0a92457a4953f626c237112906e extends Twig_Template
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
        $__internal_a323721d732c3960eb4f9d95e27054c7fc3568e5741e50311bd22faaf551338d = $this->env->getExtension("native_profiler");
        $__internal_a323721d732c3960eb4f9d95e27054c7fc3568e5741e50311bd22faaf551338d->enter($__internal_a323721d732c3960eb4f9d95e27054c7fc3568e5741e50311bd22faaf551338d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_a323721d732c3960eb4f9d95e27054c7fc3568e5741e50311bd22faaf551338d->leave($__internal_a323721d732c3960eb4f9d95e27054c7fc3568e5741e50311bd22faaf551338d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
