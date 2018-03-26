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
        $__internal_744f09d3f0fa98ee692043d1ebd88485e4b80204eba1bcdabd046fd8ebdf0407 = $this->env->getExtension("native_profiler");
        $__internal_744f09d3f0fa98ee692043d1ebd88485e4b80204eba1bcdabd046fd8ebdf0407->enter($__internal_744f09d3f0fa98ee692043d1ebd88485e4b80204eba1bcdabd046fd8ebdf0407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_744f09d3f0fa98ee692043d1ebd88485e4b80204eba1bcdabd046fd8ebdf0407->leave($__internal_744f09d3f0fa98ee692043d1ebd88485e4b80204eba1bcdabd046fd8ebdf0407_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_1474b81a4a85650c84d1fcdbd8bdf1e57e2c19376585defdc2b4dd935b667fba = $this->env->getExtension("native_profiler");
        $__internal_1474b81a4a85650c84d1fcdbd8bdf1e57e2c19376585defdc2b4dd935b667fba->enter($__internal_1474b81a4a85650c84d1fcdbd8bdf1e57e2c19376585defdc2b4dd935b667fba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_1474b81a4a85650c84d1fcdbd8bdf1e57e2c19376585defdc2b4dd935b667fba->leave($__internal_1474b81a4a85650c84d1fcdbd8bdf1e57e2c19376585defdc2b4dd935b667fba_prof);

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
