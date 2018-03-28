<?php

/* @EasyAdmin/default/field_string.html.twig */
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
        $__internal_8c1929470eccb06096c236a553dfbb2ae304fd615f8b8cc383c38ad518fcc681 = $this->env->getExtension("native_profiler");
        $__internal_8c1929470eccb06096c236a553dfbb2ae304fd615f8b8cc383c38ad518fcc681->enter($__internal_8c1929470eccb06096c236a553dfbb2ae304fd615f8b8cc383c38ad518fcc681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_string.html.twig"));

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
        
        $__internal_8c1929470eccb06096c236a553dfbb2ae304fd615f8b8cc383c38ad518fcc681->leave($__internal_8c1929470eccb06096c236a553dfbb2ae304fd615f8b8cc383c38ad518fcc681_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_string.html.twig";
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
