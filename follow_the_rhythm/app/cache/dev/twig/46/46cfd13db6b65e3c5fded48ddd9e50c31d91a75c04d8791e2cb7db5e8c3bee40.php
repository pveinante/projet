<?php

/* EasyAdminBundle:default:label_empty.html.twig */
class __TwigTemplate_f87725f16f90aaaa8a28e969d2ccddb133448d6f7ffc6e6611efe62088c8e414 extends Twig_Template
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
        $__internal_e04a01285c19bdbf76d3926f9f33301749a0e9f69bb2e2990d6fb4063e03dc41 = $this->env->getExtension("native_profiler");
        $__internal_e04a01285c19bdbf76d3926f9f33301749a0e9f69bb2e2990d6fb4063e03dc41->enter($__internal_e04a01285c19bdbf76d3926f9f33301749a0e9f69bb2e2990d6fb4063e03dc41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_empty.html.twig"));

        // line 1
        echo "<span class=\"label label-empty\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.empty", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_e04a01285c19bdbf76d3926f9f33301749a0e9f69bb2e2990d6fb4063e03dc41->leave($__internal_e04a01285c19bdbf76d3926f9f33301749a0e9f69bb2e2990d6fb4063e03dc41_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:label_empty.html.twig";
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
/* <span class="label label-empty">{{ 'label.empty'|trans(domain = 'EasyAdminBundle') }}</span>*/
/* */
