<?php

/* EasyAdminBundle:default:field_datetimetz.html.twig */
class __TwigTemplate_dc3a02669627a07fe94bc090cffb411f98d9031a725f5130767c7bf164984625 extends Twig_Template
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
        $__internal_fa8c326886d972d96d92edfadec0a57d9104b41ae50f4e94d4332e0fb692b8ca = $this->env->getExtension("native_profiler");
        $__internal_fa8c326886d972d96d92edfadec0a57d9104b41ae50f4e94d4332e0fb692b8ca->enter($__internal_fa8c326886d972d96d92edfadec0a57d9104b41ae50f4e94d4332e0fb692b8ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_datetimetz.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_fa8c326886d972d96d92edfadec0a57d9104b41ae50f4e94d4332e0fb692b8ca->leave($__internal_fa8c326886d972d96d92edfadec0a57d9104b41ae50f4e94d4332e0fb692b8ca_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_datetimetz.html.twig";
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