<?php

/* @EasyAdmin/default/field_integer.html.twig */
class __TwigTemplate_011b9907462d2b38ff5b793f7ce2f4178aa67f5e88aab887608e3babe1a29cbb extends Twig_Template
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
        $__internal_109010886b88433d2d531d2918144e95e8b76e64fd1b2234ea25cf006e102a3c = $this->env->getExtension("native_profiler");
        $__internal_109010886b88433d2d531d2918144e95e8b76e64fd1b2234ea25cf006e102a3c->enter($__internal_109010886b88433d2d531d2918144e95e8b76e64fd1b2234ea25cf006e102a3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_integer.html.twig"));

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
        
        $__internal_109010886b88433d2d531d2918144e95e8b76e64fd1b2234ea25cf006e102a3c->leave($__internal_109010886b88433d2d531d2918144e95e8b76e64fd1b2234ea25cf006e102a3c_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_integer.html.twig";
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
