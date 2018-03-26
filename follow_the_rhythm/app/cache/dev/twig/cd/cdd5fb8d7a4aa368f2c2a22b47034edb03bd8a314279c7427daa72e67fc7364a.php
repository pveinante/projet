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
        $__internal_917e99ab8e0ca04d4e59a9da47ff07fab9a38bb693082fb56be28e4c7413e127 = $this->env->getExtension("native_profiler");
        $__internal_917e99ab8e0ca04d4e59a9da47ff07fab9a38bb693082fb56be28e4c7413e127->enter($__internal_917e99ab8e0ca04d4e59a9da47ff07fab9a38bb693082fb56be28e4c7413e127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_917e99ab8e0ca04d4e59a9da47ff07fab9a38bb693082fb56be28e4c7413e127->leave($__internal_917e99ab8e0ca04d4e59a9da47ff07fab9a38bb693082fb56be28e4c7413e127_prof);

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
