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
        $__internal_2038953b2e21a2b5938495df90d5cdb4b9fbd41c221c9d1637a8ab18df6294c8 = $this->env->getExtension("native_profiler");
        $__internal_2038953b2e21a2b5938495df90d5cdb4b9fbd41c221c9d1637a8ab18df6294c8->enter($__internal_2038953b2e21a2b5938495df90d5cdb4b9fbd41c221c9d1637a8ab18df6294c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_2038953b2e21a2b5938495df90d5cdb4b9fbd41c221c9d1637a8ab18df6294c8->leave($__internal_2038953b2e21a2b5938495df90d5cdb4b9fbd41c221c9d1637a8ab18df6294c8_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_07d2c1eca5b12330a166e6e93ebf9d3c8d866a4cd0225f29a6ba8efce7fcc00a = $this->env->getExtension("native_profiler");
        $__internal_07d2c1eca5b12330a166e6e93ebf9d3c8d866a4cd0225f29a6ba8efce7fcc00a->enter($__internal_07d2c1eca5b12330a166e6e93ebf9d3c8d866a4cd0225f29a6ba8efce7fcc00a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_07d2c1eca5b12330a166e6e93ebf9d3c8d866a4cd0225f29a6ba8efce7fcc00a->leave($__internal_07d2c1eca5b12330a166e6e93ebf9d3c8d866a4cd0225f29a6ba8efce7fcc00a_prof);

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
