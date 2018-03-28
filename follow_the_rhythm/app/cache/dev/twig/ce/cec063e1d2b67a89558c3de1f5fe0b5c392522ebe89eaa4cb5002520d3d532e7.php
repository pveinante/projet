<?php

/* EasyAdminBundle:default:field_date.html.twig */
class __TwigTemplate_30856a9f5552939391a5f65cc8aa45b18cecda83fffe4b5b4dccadac627b8d72 extends Twig_Template
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
        $__internal_7b6621a40a0041e775f4b187311a1b23a304b4b16135a10bd974e1ae3e667358 = $this->env->getExtension("native_profiler");
        $__internal_7b6621a40a0041e775f4b187311a1b23a304b4b16135a10bd974e1ae3e667358->enter($__internal_7b6621a40a0041e775f4b187311a1b23a304b4b16135a10bd974e1ae3e667358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_date.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_7b6621a40a0041e775f4b187311a1b23a304b4b16135a10bd974e1ae3e667358->leave($__internal_7b6621a40a0041e775f4b187311a1b23a304b4b16135a10bd974e1ae3e667358_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_date.html.twig";
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
