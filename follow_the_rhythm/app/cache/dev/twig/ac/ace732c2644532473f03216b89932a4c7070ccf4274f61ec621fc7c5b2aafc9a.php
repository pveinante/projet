<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_0ceea979abd2fb84a1922b5c492d20d80a33b5fd7337d986c353e7d2388c0c2a extends Twig_Template
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
        $__internal_877f1ebafce5c1eef8c132ae3fe0a6349d66d2aa43ad1d7f76a53e20398d791e = $this->env->getExtension("native_profiler");
        $__internal_877f1ebafce5c1eef8c132ae3fe0a6349d66d2aa43ad1d7f76a53e20398d791e->enter($__internal_877f1ebafce5c1eef8c132ae3fe0a6349d66d2aa43ad1d7f76a53e20398d791e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_877f1ebafce5c1eef8c132ae3fe0a6349d66d2aa43ad1d7f76a53e20398d791e->leave($__internal_877f1ebafce5c1eef8c132ae3fe0a6349d66d2aa43ad1d7f76a53e20398d791e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
