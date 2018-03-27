<?php

/* EasyAdminBundle:default:field_smallint.html.twig */
class __TwigTemplate_35579b0da73b2e06f75be21e090c5e22af4cb44ddbf1caf7443ef2f3936c72dd extends Twig_Template
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
        $__internal_d7cf3e3d180c2bb19c8c0f5f0b2fe255fdca3d1ea39efbc2ba9ecffe0a960426 = $this->env->getExtension("native_profiler");
        $__internal_d7cf3e3d180c2bb19c8c0f5f0b2fe255fdca3d1ea39efbc2ba9ecffe0a960426->enter($__internal_d7cf3e3d180c2bb19c8c0f5f0b2fe255fdca3d1ea39efbc2ba9ecffe0a960426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_smallint.html.twig"));

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
        
        $__internal_d7cf3e3d180c2bb19c8c0f5f0b2fe255fdca3d1ea39efbc2ba9ecffe0a960426->leave($__internal_d7cf3e3d180c2bb19c8c0f5f0b2fe255fdca3d1ea39efbc2ba9ecffe0a960426_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_smallint.html.twig";
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
