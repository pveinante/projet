<?php

/* EasyAdminBundle:default:field_bigint.html.twig */
class __TwigTemplate_38c4791ea8ee003c4a8cf35724a3e8d82619283cae1edc8393a83b32bde30fa7 extends Twig_Template
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
        $__internal_9fb24f75fae7629ac5a9e6f40f02039cfc698c5c02531a62d2c5441b6b8a5368 = $this->env->getExtension("native_profiler");
        $__internal_9fb24f75fae7629ac5a9e6f40f02039cfc698c5c02531a62d2c5441b6b8a5368->enter($__internal_9fb24f75fae7629ac5a9e6f40f02039cfc698c5c02531a62d2c5441b6b8a5368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_bigint.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array())) {
            // line 2
            echo "    ";
            echo twig_escape_filter($this->env, sprintf($this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array()), (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        }
        
        $__internal_9fb24f75fae7629ac5a9e6f40f02039cfc698c5c02531a62d2c5441b6b8a5368->leave($__internal_9fb24f75fae7629ac5a9e6f40f02039cfc698c5c02531a62d2c5441b6b8a5368_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_bigint.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  24 => 2,  22 => 1,);
    }
}
/* {% if field_options.format %}*/
/*     {{ field_options.format|format(value) }}*/
/* {% else %}*/
/*     {{ value|number_format }}*/
/* {% endif %}*/
/* */
