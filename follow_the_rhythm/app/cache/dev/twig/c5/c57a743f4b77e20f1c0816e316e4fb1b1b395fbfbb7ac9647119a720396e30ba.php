<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_8f8fd3002352b9ccba282f58589983b31b4f066fd43d21636b269bebf25872f7 extends Twig_Template
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
        $__internal_af86e64d829bb90d95d269dce76af6a8b7afb4d33e15c6a2847b08b97b9e0fa7 = $this->env->getExtension("native_profiler");
        $__internal_af86e64d829bb90d95d269dce76af6a8b7afb4d33e15c6a2847b08b97b9e0fa7->enter($__internal_af86e64d829bb90d95d269dce76af6a8b7afb4d33e15c6a2847b08b97b9e0fa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_af86e64d829bb90d95d269dce76af6a8b7afb4d33e15c6a2847b08b97b9e0fa7->leave($__internal_af86e64d829bb90d95d269dce76af6a8b7afb4d33e15c6a2847b08b97b9e0fa7_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_409a216b559a22e0365cc6803b674e37942981411fb1ed44a4a9c4246f067dd5 = $this->env->getExtension("native_profiler");
        $__internal_409a216b559a22e0365cc6803b674e37942981411fb1ed44a4a9c4246f067dd5->enter($__internal_409a216b559a22e0365cc6803b674e37942981411fb1ed44a4a9c4246f067dd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_409a216b559a22e0365cc6803b674e37942981411fb1ed44a4a9c4246f067dd5->leave($__internal_409a216b559a22e0365cc6803b674e37942981411fb1ed44a4a9c4246f067dd5_prof);

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
