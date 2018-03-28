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
        $__internal_e0e050a9ba1bb6d5715ebd890c95dfd500346cb488fc165606257de771c908b4 = $this->env->getExtension("native_profiler");
        $__internal_e0e050a9ba1bb6d5715ebd890c95dfd500346cb488fc165606257de771c908b4->enter($__internal_e0e050a9ba1bb6d5715ebd890c95dfd500346cb488fc165606257de771c908b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_e0e050a9ba1bb6d5715ebd890c95dfd500346cb488fc165606257de771c908b4->leave($__internal_e0e050a9ba1bb6d5715ebd890c95dfd500346cb488fc165606257de771c908b4_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_47b5e952afb78f887307d6384125b6aea63124e24daf40f7661d986dccf121ee = $this->env->getExtension("native_profiler");
        $__internal_47b5e952afb78f887307d6384125b6aea63124e24daf40f7661d986dccf121ee->enter($__internal_47b5e952afb78f887307d6384125b6aea63124e24daf40f7661d986dccf121ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_47b5e952afb78f887307d6384125b6aea63124e24daf40f7661d986dccf121ee->leave($__internal_47b5e952afb78f887307d6384125b6aea63124e24daf40f7661d986dccf121ee_prof);

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
