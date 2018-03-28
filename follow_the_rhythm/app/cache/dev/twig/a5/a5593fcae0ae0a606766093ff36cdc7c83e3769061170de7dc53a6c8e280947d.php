<?php

/* EasyAdminBundle:default:field_boolean.html.twig */
class __TwigTemplate_8cf33728b8d0fc5ecec2703f26badaa767751b422a57b7085b62386f5e4e183f extends Twig_Template
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
        $__internal_4c3d37cb35868299ebae98b46d1c05b52e8e72d2389803e6c294edf6b0a59c0b = $this->env->getExtension("native_profiler");
        $__internal_4c3d37cb35868299ebae98b46d1c05b52e8e72d2389803e6c294edf6b0a59c0b->enter($__internal_4c3d37cb35868299ebae98b46d1c05b52e8e72d2389803e6c294edf6b0a59c0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_boolean.html.twig"));

        // line 2
        echo "
";
        // line 3
        if (((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) == true)) {
            // line 4
            echo "    <span class=\"label label-success\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.true", array(), "EasyAdminBundle"), "html", null, true);
            echo "</span>
";
        } else {
            // line 6
            echo "    <span class=\"label label-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.false", array(), "EasyAdminBundle"), "html", null, true);
            echo "</span>
";
        }
        
        $__internal_4c3d37cb35868299ebae98b46d1c05b52e8e72d2389803e6c294edf6b0a59c0b->leave($__internal_4c3d37cb35868299ebae98b46d1c05b52e8e72d2389803e6c294edf6b0a59c0b_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 6,  27 => 4,  25 => 3,  22 => 2,);
    }
}
/* {% trans_default_domain 'EasyAdminBundle' %}*/
/* */
/* {% if value == true %}*/
/*     <span class="label label-success">{{ 'label.true'|trans }}</span>*/
/* {% else %}*/
/*     <span class="label label-danger">{{ 'label.false'|trans }}</span>*/
/* {% endif %}*/
/* */
