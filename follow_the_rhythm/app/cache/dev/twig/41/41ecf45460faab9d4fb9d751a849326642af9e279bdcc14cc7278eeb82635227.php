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
        $__internal_608e3e95f8ded11548afbb3ae228cdfa19fc2ef1897b3273108aab71f11853f2 = $this->env->getExtension("native_profiler");
        $__internal_608e3e95f8ded11548afbb3ae228cdfa19fc2ef1897b3273108aab71f11853f2->enter($__internal_608e3e95f8ded11548afbb3ae228cdfa19fc2ef1897b3273108aab71f11853f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_text.html.twig"));

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
        
        $__internal_608e3e95f8ded11548afbb3ae228cdfa19fc2ef1897b3273108aab71f11853f2->leave($__internal_608e3e95f8ded11548afbb3ae228cdfa19fc2ef1897b3273108aab71f11853f2_prof);

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
