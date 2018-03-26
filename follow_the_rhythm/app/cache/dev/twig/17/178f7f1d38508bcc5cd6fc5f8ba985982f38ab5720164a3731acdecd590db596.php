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
        $__internal_5aadd3a35c196139cc534da5afa0d69391fa5c569b0d335fa44bea2c8e17d6fa = $this->env->getExtension("native_profiler");
        $__internal_5aadd3a35c196139cc534da5afa0d69391fa5c569b0d335fa44bea2c8e17d6fa->enter($__internal_5aadd3a35c196139cc534da5afa0d69391fa5c569b0d335fa44bea2c8e17d6fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_5aadd3a35c196139cc534da5afa0d69391fa5c569b0d335fa44bea2c8e17d6fa->leave($__internal_5aadd3a35c196139cc534da5afa0d69391fa5c569b0d335fa44bea2c8e17d6fa_prof);

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
