<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_8e4636f9120b1babf0f17c7659066c50b8229f6fb5e9db08cde07207713bec2c extends Twig_Template
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
        $__internal_1a1c424deb277d7feea80d995723f64cceca783c3811fbfabe14719087fa0221 = $this->env->getExtension("native_profiler");
        $__internal_1a1c424deb277d7feea80d995723f64cceca783c3811fbfabe14719087fa0221->enter($__internal_1a1c424deb277d7feea80d995723f64cceca783c3811fbfabe14719087fa0221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_1a1c424deb277d7feea80d995723f64cceca783c3811fbfabe14719087fa0221->leave($__internal_1a1c424deb277d7feea80d995723f64cceca783c3811fbfabe14719087fa0221_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
