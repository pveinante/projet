<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_b22ce0be156421ea08d566de7700a8adadfe3a82ca3225a45462e15fee539c75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_15063b2bb5b17a7ae978c06c257e16312237fc64f227eb80103591cb87c36824 = $this->env->getExtension("native_profiler");
        $__internal_15063b2bb5b17a7ae978c06c257e16312237fc64f227eb80103591cb87c36824->enter($__internal_15063b2bb5b17a7ae978c06c257e16312237fc64f227eb80103591cb87c36824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_15063b2bb5b17a7ae978c06c257e16312237fc64f227eb80103591cb87c36824->leave($__internal_15063b2bb5b17a7ae978c06c257e16312237fc64f227eb80103591cb87c36824_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_4b53741fa44c0306f1f62f174ae3ca21000b4dfe5b1113c4f1df281aee3b1b26 = $this->env->getExtension("native_profiler");
        $__internal_4b53741fa44c0306f1f62f174ae3ca21000b4dfe5b1113c4f1df281aee3b1b26->enter($__internal_4b53741fa44c0306f1f62f174ae3ca21000b4dfe5b1113c4f1df281aee3b1b26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_4b53741fa44c0306f1f62f174ae3ca21000b4dfe5b1113c4f1df281aee3b1b26->leave($__internal_4b53741fa44c0306f1f62f174ae3ca21000b4dfe5b1113c4f1df281aee3b1b26_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
