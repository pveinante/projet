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
        $__internal_eee165331199eca63df89336d60d775e17d0737420a7c1d0764526080d65b4bb = $this->env->getExtension("native_profiler");
        $__internal_eee165331199eca63df89336d60d775e17d0737420a7c1d0764526080d65b4bb->enter($__internal_eee165331199eca63df89336d60d775e17d0737420a7c1d0764526080d65b4bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_eee165331199eca63df89336d60d775e17d0737420a7c1d0764526080d65b4bb->leave($__internal_eee165331199eca63df89336d60d775e17d0737420a7c1d0764526080d65b4bb_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_7b661f37a8038c69ac8b370be25448f23e1c056d70e351e8e862957bb261fb3a = $this->env->getExtension("native_profiler");
        $__internal_7b661f37a8038c69ac8b370be25448f23e1c056d70e351e8e862957bb261fb3a->enter($__internal_7b661f37a8038c69ac8b370be25448f23e1c056d70e351e8e862957bb261fb3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_7b661f37a8038c69ac8b370be25448f23e1c056d70e351e8e862957bb261fb3a->leave($__internal_7b661f37a8038c69ac8b370be25448f23e1c056d70e351e8e862957bb261fb3a_prof);

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
