<?php

/* EasyAdminBundle:default:field_datetime.html.twig */
class __TwigTemplate_99a155b1c2a1632c483b7d130656118684a1f590e91d4540620605d968c0091b extends Twig_Template
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
        $__internal_99d7ea1f6b057f5eea7136a707a282d2fc9807de081aad80eb587df981e4cdc5 = $this->env->getExtension("native_profiler");
        $__internal_99d7ea1f6b057f5eea7136a707a282d2fc9807de081aad80eb587df981e4cdc5->enter($__internal_99d7ea1f6b057f5eea7136a707a282d2fc9807de081aad80eb587df981e4cdc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_datetime.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_99d7ea1f6b057f5eea7136a707a282d2fc9807de081aad80eb587df981e4cdc5->leave($__internal_99d7ea1f6b057f5eea7136a707a282d2fc9807de081aad80eb587df981e4cdc5_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_datetime.html.twig";
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