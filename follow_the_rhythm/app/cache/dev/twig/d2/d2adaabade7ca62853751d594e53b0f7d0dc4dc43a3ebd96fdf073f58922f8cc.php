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
        $__internal_8b2d89b25c3b950b51682e128e7033d4a9b70d26f2ac331cc67dbca1f7f3b5be = $this->env->getExtension("native_profiler");
        $__internal_8b2d89b25c3b950b51682e128e7033d4a9b70d26f2ac331cc67dbca1f7f3b5be->enter($__internal_8b2d89b25c3b950b51682e128e7033d4a9b70d26f2ac331cc67dbca1f7f3b5be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_time.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_8b2d89b25c3b950b51682e128e7033d4a9b70d26f2ac331cc67dbca1f7f3b5be->leave($__internal_8b2d89b25c3b950b51682e128e7033d4a9b70d26f2ac331cc67dbca1f7f3b5be_prof);

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
