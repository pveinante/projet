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
        $__internal_e55a20ab5e3baec01decbb5787f3cb80df002b3841cc1c0ee1d8804d9ce1ca6c = $this->env->getExtension("native_profiler");
        $__internal_e55a20ab5e3baec01decbb5787f3cb80df002b3841cc1c0ee1d8804d9ce1ca6c->enter($__internal_e55a20ab5e3baec01decbb5787f3cb80df002b3841cc1c0ee1d8804d9ce1ca6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_date.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_e55a20ab5e3baec01decbb5787f3cb80df002b3841cc1c0ee1d8804d9ce1ca6c->leave($__internal_e55a20ab5e3baec01decbb5787f3cb80df002b3841cc1c0ee1d8804d9ce1ca6c_prof);

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
