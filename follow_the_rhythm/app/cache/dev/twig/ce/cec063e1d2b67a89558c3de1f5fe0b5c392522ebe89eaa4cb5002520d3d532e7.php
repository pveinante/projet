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
        $__internal_270c891df4b570e3dd90d202e73102109d7645b727f5b45f203b2ab834aea8b3 = $this->env->getExtension("native_profiler");
        $__internal_270c891df4b570e3dd90d202e73102109d7645b727f5b45f203b2ab834aea8b3->enter($__internal_270c891df4b570e3dd90d202e73102109d7645b727f5b45f203b2ab834aea8b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_date.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_270c891df4b570e3dd90d202e73102109d7645b727f5b45f203b2ab834aea8b3->leave($__internal_270c891df4b570e3dd90d202e73102109d7645b727f5b45f203b2ab834aea8b3_prof);

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
