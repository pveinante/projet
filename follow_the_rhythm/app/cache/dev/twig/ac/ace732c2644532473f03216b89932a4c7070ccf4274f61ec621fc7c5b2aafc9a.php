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
        $__internal_55056a08c090a464e6b3a07a667f07eee3f9d5982122b015e6cc44f26af5090f = $this->env->getExtension("native_profiler");
        $__internal_55056a08c090a464e6b3a07a667f07eee3f9d5982122b015e6cc44f26af5090f->enter($__internal_55056a08c090a464e6b3a07a667f07eee3f9d5982122b015e6cc44f26af5090f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_55056a08c090a464e6b3a07a667f07eee3f9d5982122b015e6cc44f26af5090f->leave($__internal_55056a08c090a464e6b3a07a667f07eee3f9d5982122b015e6cc44f26af5090f_prof);

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
