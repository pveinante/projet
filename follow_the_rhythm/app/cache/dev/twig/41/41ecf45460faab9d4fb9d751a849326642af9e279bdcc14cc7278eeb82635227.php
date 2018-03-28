<?php

/* EasyAdminBundle:default:field_text.html.twig */
class __TwigTemplate_9801479b8aea086a18eacb55ff248682e0bb784b4ca89e48eab89f65154c9028 extends Twig_Template
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
        $__internal_16752f5aa02bc874b60cd5d60fd21d9957b9770e47f954f6924fa7a9684ee21a = $this->env->getExtension("native_profiler");
        $__internal_16752f5aa02bc874b60cd5d60fd21d9957b9770e47f954f6924fa7a9684ee21a->enter($__internal_16752f5aa02bc874b60cd5d60fd21d9957b9770e47f954f6924fa7a9684ee21a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_text.html.twig"));

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
        
        $__internal_16752f5aa02bc874b60cd5d60fd21d9957b9770e47f954f6924fa7a9684ee21a->leave($__internal_16752f5aa02bc874b60cd5d60fd21d9957b9770e47f954f6924fa7a9684ee21a_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_text.html.twig";
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
