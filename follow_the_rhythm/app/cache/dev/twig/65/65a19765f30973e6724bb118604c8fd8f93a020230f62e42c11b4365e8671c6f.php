<?php

/* EasyAdminBundle:default:field_string.html.twig */
class __TwigTemplate_1b4d6f6d48efa8e6715a01fc227a9b499650bd4ed4b39faf0cbb7fd8b88bee94 extends Twig_Template
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
        $__internal_e53ad2a9ee68ddffb1ee0b71069e8f5937f468605ba83c3061c95519f5e3f373 = $this->env->getExtension("native_profiler");
        $__internal_e53ad2a9ee68ddffb1ee0b71069e8f5937f468605ba83c3061c95519f5e3f373->enter($__internal_e53ad2a9ee68ddffb1ee0b71069e8f5937f468605ba83c3061c95519f5e3f373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_string.html.twig"));

        // line 1
        if (((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")) == "show")) {
            // line 2
            echo "    ";
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true));
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('easyadmin_extension')->truncateText($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        }
        
        $__internal_e53ad2a9ee68ddffb1ee0b71069e8f5937f468605ba83c3061c95519f5e3f373->leave($__internal_e53ad2a9ee68ddffb1ee0b71069e8f5937f468605ba83c3061c95519f5e3f373_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_string.html.twig";
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
/* {% if view == 'show' %}*/
/*     {{ value|nl2br }}*/
/* {% else %}*/
/*     {{ value|easyadmin_truncate }}*/
/* {% endif %}*/
/* */
