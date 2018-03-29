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
        $__internal_916239f2be2a51da0977e4e050f3de6f328acfda7a1b2ba319ea131db09e90f4 = $this->env->getExtension("native_profiler");
        $__internal_916239f2be2a51da0977e4e050f3de6f328acfda7a1b2ba319ea131db09e90f4->enter($__internal_916239f2be2a51da0977e4e050f3de6f328acfda7a1b2ba319ea131db09e90f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_916239f2be2a51da0977e4e050f3de6f328acfda7a1b2ba319ea131db09e90f4->leave($__internal_916239f2be2a51da0977e4e050f3de6f328acfda7a1b2ba319ea131db09e90f4_prof);

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
