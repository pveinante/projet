<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_c119770f61d6a1bc3900c2e68e28a37c16a2dd967448af11bb44307bfb0d8e12 extends Twig_Template
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
        $__internal_c573e16ddb052ede95494cac87f073ee7978579ff4ac027543f330266994bafa = $this->env->getExtension("native_profiler");
        $__internal_c573e16ddb052ede95494cac87f073ee7978579ff4ac027543f330266994bafa->enter($__internal_c573e16ddb052ede95494cac87f073ee7978579ff4ac027543f330266994bafa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_c573e16ddb052ede95494cac87f073ee7978579ff4ac027543f330266994bafa->leave($__internal_c573e16ddb052ede95494cac87f073ee7978579ff4ac027543f330266994bafa_prof);

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
