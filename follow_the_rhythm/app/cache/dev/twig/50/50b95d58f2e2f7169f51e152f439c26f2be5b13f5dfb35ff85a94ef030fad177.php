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
        $__internal_5fa5ddcec217789eef180d849846f8107378a1ed7199fd9432af18a6f2b75057 = $this->env->getExtension("native_profiler");
        $__internal_5fa5ddcec217789eef180d849846f8107378a1ed7199fd9432af18a6f2b75057->enter($__internal_5fa5ddcec217789eef180d849846f8107378a1ed7199fd9432af18a6f2b75057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_5fa5ddcec217789eef180d849846f8107378a1ed7199fd9432af18a6f2b75057->leave($__internal_5fa5ddcec217789eef180d849846f8107378a1ed7199fd9432af18a6f2b75057_prof);

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
