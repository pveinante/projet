<?php

/* EasyAdminBundle:default:field_tel.html.twig */
class __TwigTemplate_31d512e20014ec4da5848bfd6d73dbb1d04aa973c5813effbb1592cdbedb7f58 extends Twig_Template
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
        $__internal_1155a4b651b317cdf0a24ae9ba8a6cca5e61446ad613340f3275db7bfa1d0706 = $this->env->getExtension("native_profiler");
        $__internal_1155a4b651b317cdf0a24ae9ba8a6cca5e61446ad613340f3275db7bfa1d0706->enter($__internal_1155a4b651b317cdf0a24ae9ba8a6cca5e61446ad613340f3275db7bfa1d0706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_tel.html.twig"));

        // line 1
        echo "<a href=\"tel:";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "</a>
";
        
        $__internal_1155a4b651b317cdf0a24ae9ba8a6cca5e61446ad613340f3275db7bfa1d0706->leave($__internal_1155a4b651b317cdf0a24ae9ba8a6cca5e61446ad613340f3275db7bfa1d0706_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_tel.html.twig";
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
/* <a href="tel:{{ value }}">{{ value }}</a>*/
/* */