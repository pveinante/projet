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
        $__internal_9d9195e6fc021ffbed702d1153f42fa87990e9c31fbc7834904014b3766c166d = $this->env->getExtension("native_profiler");
        $__internal_9d9195e6fc021ffbed702d1153f42fa87990e9c31fbc7834904014b3766c166d->enter($__internal_9d9195e6fc021ffbed702d1153f42fa87990e9c31fbc7834904014b3766c166d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_9d9195e6fc021ffbed702d1153f42fa87990e9c31fbc7834904014b3766c166d->leave($__internal_9d9195e6fc021ffbed702d1153f42fa87990e9c31fbc7834904014b3766c166d_prof);

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
