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
        $__internal_41e720392fde12740bbc760538c8b986b7fb6ef78af56b0d985d4a238f0a1523 = $this->env->getExtension("native_profiler");
        $__internal_41e720392fde12740bbc760538c8b986b7fb6ef78af56b0d985d4a238f0a1523->enter($__internal_41e720392fde12740bbc760538c8b986b7fb6ef78af56b0d985d4a238f0a1523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_empty.html.twig"));

        // line 1
        echo "<span class=\"label label-empty\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.empty", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_41e720392fde12740bbc760538c8b986b7fb6ef78af56b0d985d4a238f0a1523->leave($__internal_41e720392fde12740bbc760538c8b986b7fb6ef78af56b0d985d4a238f0a1523_prof);

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
