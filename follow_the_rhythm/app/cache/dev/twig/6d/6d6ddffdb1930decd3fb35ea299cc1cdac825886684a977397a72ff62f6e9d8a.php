<?php

/* EasyAdminBundle:default:field_guid.html.twig */
class __TwigTemplate_a0db60f15c503f1149f76c348c40f400ab0ab8625096da435055ed0e0beda669 extends Twig_Template
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
        $__internal_b3f1aca450e89eda9fcfb830ede3c25276cdcebe6b373181fac6b5c0e9c61c7a = $this->env->getExtension("native_profiler");
        $__internal_b3f1aca450e89eda9fcfb830ede3c25276cdcebe6b373181fac6b5c0e9c61c7a->enter($__internal_b3f1aca450e89eda9fcfb830ede3c25276cdcebe6b373181fac6b5c0e9c61c7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_guid.html.twig"));

        // line 1
        if (((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")) == "show")) {
            // line 2
            echo "    ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('easyadmin_extension')->truncateText($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), 7), "html", null, true);
            echo "
";
        }
        
        $__internal_b3f1aca450e89eda9fcfb830ede3c25276cdcebe6b373181fac6b5c0e9c61c7a->leave($__internal_b3f1aca450e89eda9fcfb830ede3c25276cdcebe6b373181fac6b5c0e9c61c7a_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_guid.html.twig";
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
/*     {{ value }}*/
/* {% else %}*/
/*     {{ value|easyadmin_truncate(7) }}*/
/* {% endif %}*/
/* */
