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
        $__internal_204c49165be027c986a24e61731211dcd838b33e1185758a9f1dc613c4eac374 = $this->env->getExtension("native_profiler");
        $__internal_204c49165be027c986a24e61731211dcd838b33e1185758a9f1dc613c4eac374->enter($__internal_204c49165be027c986a24e61731211dcd838b33e1185758a9f1dc613c4eac374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_204c49165be027c986a24e61731211dcd838b33e1185758a9f1dc613c4eac374->leave($__internal_204c49165be027c986a24e61731211dcd838b33e1185758a9f1dc613c4eac374_prof);

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
