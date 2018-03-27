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
        $__internal_47d211287e7c6c25662c1e43d7b3aa8d14797c45f8bd2a6d68f9fb289ed440bf = $this->env->getExtension("native_profiler");
        $__internal_47d211287e7c6c25662c1e43d7b3aa8d14797c45f8bd2a6d68f9fb289ed440bf->enter($__internal_47d211287e7c6c25662c1e43d7b3aa8d14797c45f8bd2a6d68f9fb289ed440bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_47d211287e7c6c25662c1e43d7b3aa8d14797c45f8bd2a6d68f9fb289ed440bf->leave($__internal_47d211287e7c6c25662c1e43d7b3aa8d14797c45f8bd2a6d68f9fb289ed440bf_prof);

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
