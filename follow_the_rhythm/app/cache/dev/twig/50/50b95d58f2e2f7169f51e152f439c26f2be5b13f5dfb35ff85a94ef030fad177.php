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
        $__internal_36c1542d9de3309283625fef44ccb282d91c22fb3ea9bcac44cc4ef30746c374 = $this->env->getExtension("native_profiler");
        $__internal_36c1542d9de3309283625fef44ccb282d91c22fb3ea9bcac44cc4ef30746c374->enter($__internal_36c1542d9de3309283625fef44ccb282d91c22fb3ea9bcac44cc4ef30746c374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_36c1542d9de3309283625fef44ccb282d91c22fb3ea9bcac44cc4ef30746c374->leave($__internal_36c1542d9de3309283625fef44ccb282d91c22fb3ea9bcac44cc4ef30746c374_prof);

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
