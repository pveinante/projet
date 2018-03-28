<?php

/* EasyAdminBundle:default:field_time.html.twig */
class __TwigTemplate_394c73d940d3f065efb1a4edd80931ebf9af851f0717966f153d42bd7cc3a9ae extends Twig_Template
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
        $__internal_27cbd5afea74120774ddbd15df64bddfda0c0c7a1cf95bda857f2fe4dbee9807 = $this->env->getExtension("native_profiler");
        $__internal_27cbd5afea74120774ddbd15df64bddfda0c0c7a1cf95bda857f2fe4dbee9807->enter($__internal_27cbd5afea74120774ddbd15df64bddfda0c0c7a1cf95bda857f2fe4dbee9807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_time.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_27cbd5afea74120774ddbd15df64bddfda0c0c7a1cf95bda857f2fe4dbee9807->leave($__internal_27cbd5afea74120774ddbd15df64bddfda0c0c7a1cf95bda857f2fe4dbee9807_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_time.html.twig";
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
