<?php

/* EasyAdminBundle:default:field_decimal.html.twig */
class __TwigTemplate_fcb8f8e3632de43289d9c2f0077a46e3210c0f0d8b7791c37048eaf2a09e7857 extends Twig_Template
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
        $__internal_f1937e4750d6df1b13aec300fd4bbd6cd52061253d1c4881694a12eb088b9045 = $this->env->getExtension("native_profiler");
        $__internal_f1937e4750d6df1b13aec300fd4bbd6cd52061253d1c4881694a12eb088b9045->enter($__internal_f1937e4750d6df1b13aec300fd4bbd6cd52061253d1c4881694a12eb088b9045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_decimal.html.twig"));

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
        
        $__internal_f1937e4750d6df1b13aec300fd4bbd6cd52061253d1c4881694a12eb088b9045->leave($__internal_f1937e4750d6df1b13aec300fd4bbd6cd52061253d1c4881694a12eb088b9045_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_decimal.html.twig";
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
