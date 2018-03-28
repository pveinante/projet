<?php

/* @EasyAdmin/default/field_id.html.twig */
class __TwigTemplate_dfc4469b2656b69c8e83350a998056ff183dcb71148d943c75931918c3fb2c6e extends Twig_Template
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
        $__internal_75f7d1757e7e7db1cafbfe9eb4cffaaa9d2cf268bfbf012946a844f951e12289 = $this->env->getExtension("native_profiler");
        $__internal_75f7d1757e7e7db1cafbfe9eb4cffaaa9d2cf268bfbf012946a844f951e12289->enter($__internal_75f7d1757e7e7db1cafbfe9eb4cffaaa9d2cf268bfbf012946a844f951e12289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_id.html.twig"));

        // line 2
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "
";
        
        $__internal_75f7d1757e7e7db1cafbfe9eb4cffaaa9d2cf268bfbf012946a844f951e12289->leave($__internal_75f7d1757e7e7db1cafbfe9eb4cffaaa9d2cf268bfbf012946a844f951e12289_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_id.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,);
    }
}
/* {# this field template is used to avoid formatting the special ID attribute as a number #}*/
/* {{ value }}*/
/* */
