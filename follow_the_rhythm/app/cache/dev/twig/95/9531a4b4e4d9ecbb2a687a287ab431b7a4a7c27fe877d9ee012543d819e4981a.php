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
        $__internal_764541b38483f736773ba749adfb8481fe1d0b4e2b4e54c3988f22e61b93434f = $this->env->getExtension("native_profiler");
        $__internal_764541b38483f736773ba749adfb8481fe1d0b4e2b4e54c3988f22e61b93434f->enter($__internal_764541b38483f736773ba749adfb8481fe1d0b4e2b4e54c3988f22e61b93434f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_tel.html.twig"));

        // line 1
        echo "<a href=\"tel:";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "</a>
";
        
        $__internal_764541b38483f736773ba749adfb8481fe1d0b4e2b4e54c3988f22e61b93434f->leave($__internal_764541b38483f736773ba749adfb8481fe1d0b4e2b4e54c3988f22e61b93434f_prof);

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
