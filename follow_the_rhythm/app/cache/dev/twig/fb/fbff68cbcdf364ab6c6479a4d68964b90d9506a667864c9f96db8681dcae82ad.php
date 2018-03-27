<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_002678d43d4fdaa8793ac93b78b5b0f8805161a8a2ef9955c1679d242ed033db extends Twig_Template
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
        $__internal_a43a2a14c17436178b73b581dca8f0c8c53c1ab49746e733cfd767e762f5a5af = $this->env->getExtension("native_profiler");
        $__internal_a43a2a14c17436178b73b581dca8f0c8c53c1ab49746e733cfd767e762f5a5af->enter($__internal_a43a2a14c17436178b73b581dca8f0c8c53c1ab49746e733cfd767e762f5a5af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_a43a2a14c17436178b73b581dca8f0c8c53c1ab49746e733cfd767e762f5a5af->leave($__internal_a43a2a14c17436178b73b581dca8f0c8c53c1ab49746e733cfd767e762f5a5af_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
