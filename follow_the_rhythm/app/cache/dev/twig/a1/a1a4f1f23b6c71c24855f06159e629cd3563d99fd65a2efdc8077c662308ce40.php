<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_f401b72806d930e5487db3c0e9827fc537bdccb625ac2dec65b2dfc2f332e421 extends Twig_Template
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
        $__internal_4e0ca7a37b1a3caa01f5bfb9c14494c6c5b56108b3d49f0a77c072786fa04299 = $this->env->getExtension("native_profiler");
        $__internal_4e0ca7a37b1a3caa01f5bfb9c14494c6c5b56108b3d49f0a77c072786fa04299->enter($__internal_4e0ca7a37b1a3caa01f5bfb9c14494c6c5b56108b3d49f0a77c072786fa04299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_4e0ca7a37b1a3caa01f5bfb9c14494c6c5b56108b3d49f0a77c072786fa04299->leave($__internal_4e0ca7a37b1a3caa01f5bfb9c14494c6c5b56108b3d49f0a77c072786fa04299_prof);

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
