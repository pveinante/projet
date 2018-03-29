<?php

/* EasyAdminBundle:default:field_datetimetz.html.twig */
class __TwigTemplate_dc3a02669627a07fe94bc090cffb411f98d9031a725f5130767c7bf164984625 extends Twig_Template
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
        $__internal_163f7cbe816405c2f61fd8709803858dba14d5501efd25d902503275250521fa = $this->env->getExtension("native_profiler");
        $__internal_163f7cbe816405c2f61fd8709803858dba14d5501efd25d902503275250521fa->enter($__internal_163f7cbe816405c2f61fd8709803858dba14d5501efd25d902503275250521fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_datetimetz.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_163f7cbe816405c2f61fd8709803858dba14d5501efd25d902503275250521fa->leave($__internal_163f7cbe816405c2f61fd8709803858dba14d5501efd25d902503275250521fa_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_datetimetz.html.twig";
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
/* {{ value|date(field_options.format) }}*/
/* */
