<?php

/* EasyAdminBundle:default:field_float.html.twig */
class __TwigTemplate_78cc8b9e0243b24ce8f6e470808bbdd45f69965d14fe2b911a165bcbd021e672 extends Twig_Template
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
        $__internal_f9e35e3b1c90a05591041721c3f7eab0a638c1f5013cdb7a33556f4ccc0b3665 = $this->env->getExtension("native_profiler");
        $__internal_f9e35e3b1c90a05591041721c3f7eab0a638c1f5013cdb7a33556f4ccc0b3665->enter($__internal_f9e35e3b1c90a05591041721c3f7eab0a638c1f5013cdb7a33556f4ccc0b3665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_float.html.twig"));

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
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), 2), "html", null, true);
            echo "
";
        }
        
        $__internal_f9e35e3b1c90a05591041721c3f7eab0a638c1f5013cdb7a33556f4ccc0b3665->leave($__internal_f9e35e3b1c90a05591041721c3f7eab0a638c1f5013cdb7a33556f4ccc0b3665_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_float.html.twig";
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
/*     {{ value|number_format(2) }}*/
/* {% endif %}*/
/* */
