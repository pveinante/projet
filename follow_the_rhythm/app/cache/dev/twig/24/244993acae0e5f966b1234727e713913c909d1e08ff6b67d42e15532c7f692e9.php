<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_712583bece434ab5c352c48f347caa5f23d089267f064729790d7b1117904178 extends Twig_Template
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
        $__internal_e9de973f537218b3f53c4171789f18b976602b5de65dc9dc56446e95ea5cc054 = $this->env->getExtension("native_profiler");
        $__internal_e9de973f537218b3f53c4171789f18b976602b5de65dc9dc56446e95ea5cc054->enter($__internal_e9de973f537218b3f53c4171789f18b976602b5de65dc9dc56446e95ea5cc054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_e9de973f537218b3f53c4171789f18b976602b5de65dc9dc56446e95ea5cc054->leave($__internal_e9de973f537218b3f53c4171789f18b976602b5de65dc9dc56446e95ea5cc054_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
