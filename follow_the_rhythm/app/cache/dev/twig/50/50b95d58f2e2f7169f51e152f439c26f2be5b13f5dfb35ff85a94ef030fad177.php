<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_56679a74bcbe8249edfa45d789ef0107a964d029d267760a424892e7eb8f50bc extends Twig_Template
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
        $__internal_86008a1b51380e571f62b02e44dec86185e36e9c0c190b249d268a3b83d8cda4 = $this->env->getExtension("native_profiler");
        $__internal_86008a1b51380e571f62b02e44dec86185e36e9c0c190b249d268a3b83d8cda4->enter($__internal_86008a1b51380e571f62b02e44dec86185e36e9c0c190b249d268a3b83d8cda4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_86008a1b51380e571f62b02e44dec86185e36e9c0c190b249d268a3b83d8cda4->leave($__internal_86008a1b51380e571f62b02e44dec86185e36e9c0c190b249d268a3b83d8cda4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
