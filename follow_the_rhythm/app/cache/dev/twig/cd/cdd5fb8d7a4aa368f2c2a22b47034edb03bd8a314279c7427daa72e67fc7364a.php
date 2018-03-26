<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_a8145bfe595df253817f7398838e921d065050e90ae4e0539aabf3b10adc0434 extends Twig_Template
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
        $__internal_27217e571ba37fb50903e39dd54f3c9301d0b1aab2ea63184bcff54983b7ce94 = $this->env->getExtension("native_profiler");
        $__internal_27217e571ba37fb50903e39dd54f3c9301d0b1aab2ea63184bcff54983b7ce94->enter($__internal_27217e571ba37fb50903e39dd54f3c9301d0b1aab2ea63184bcff54983b7ce94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_27217e571ba37fb50903e39dd54f3c9301d0b1aab2ea63184bcff54983b7ce94->leave($__internal_27217e571ba37fb50903e39dd54f3c9301d0b1aab2ea63184bcff54983b7ce94_prof);

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
