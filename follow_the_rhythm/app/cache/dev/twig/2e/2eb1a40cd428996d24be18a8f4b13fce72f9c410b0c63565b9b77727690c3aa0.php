<?php

/* EasyAdminBundle:default:field_email.html.twig */
class __TwigTemplate_8c14b75e34598056e1305b01da8ea12dbf9fda59d228343c62b08bee45cbfaed extends Twig_Template
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
        $__internal_7a2aba7e64b1b1a518a02ed4c54b5035dda8346ea3753e857844224c82db72b3 = $this->env->getExtension("native_profiler");
        $__internal_7a2aba7e64b1b1a518a02ed4c54b5035dda8346ea3753e857844224c82db72b3->enter($__internal_7a2aba7e64b1b1a518a02ed4c54b5035dda8346ea3753e857844224c82db72b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_email.html.twig"));

        // line 1
        if (((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")) == "show")) {
            // line 2
            echo "    <a href=\"mailto:";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "</a>
";
        } else {
            // line 4
            echo "    <a href=\"mailto:";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('easyadmin_extension')->truncateText($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
            echo "</a>
";
        }
        
        $__internal_7a2aba7e64b1b1a518a02ed4c54b5035dda8346ea3753e857844224c82db72b3->leave($__internal_7a2aba7e64b1b1a518a02ed4c54b5035dda8346ea3753e857844224c82db72b3_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 4,  24 => 2,  22 => 1,);
    }
}
/* {% if view == 'show' %}*/
/*     <a href="mailto:{{ value }}">{{ value }}</a>*/
/* {% else %}*/
/*     <a href="mailto:{{ value }}">{{ value|easyadmin_truncate }}</a>*/
/* {% endif %}*/
/* */
