<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_079a4d120063001fb024810c7078f72936b0292dd1cda426b2c58e3d6b24215a extends Twig_Template
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
        $__internal_d8ab6244acffe84ab4a97f418813b092f9aaaa41d7edcd9874b71f22093005ae = $this->env->getExtension("native_profiler");
        $__internal_d8ab6244acffe84ab4a97f418813b092f9aaaa41d7edcd9874b71f22093005ae->enter($__internal_d8ab6244acffe84ab4a97f418813b092f9aaaa41d7edcd9874b71f22093005ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_d8ab6244acffe84ab4a97f418813b092f9aaaa41d7edcd9874b71f22093005ae->leave($__internal_d8ab6244acffe84ab4a97f418813b092f9aaaa41d7edcd9874b71f22093005ae_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
