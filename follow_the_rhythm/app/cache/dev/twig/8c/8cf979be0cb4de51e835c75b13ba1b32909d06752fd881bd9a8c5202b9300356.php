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
        $__internal_b3fb9a6eae30fa5a9da43b0aef6378a02aea84a4a2e17e14db8dbd6846e6988d = $this->env->getExtension("native_profiler");
        $__internal_b3fb9a6eae30fa5a9da43b0aef6378a02aea84a4a2e17e14db8dbd6846e6988d->enter($__internal_b3fb9a6eae30fa5a9da43b0aef6378a02aea84a4a2e17e14db8dbd6846e6988d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_b3fb9a6eae30fa5a9da43b0aef6378a02aea84a4a2e17e14db8dbd6846e6988d->leave($__internal_b3fb9a6eae30fa5a9da43b0aef6378a02aea84a4a2e17e14db8dbd6846e6988d_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_85825b0d554daa3221294af57fcf743327b08fe21344f467418919a2233c76f1 = $this->env->getExtension("native_profiler");
        $__internal_85825b0d554daa3221294af57fcf743327b08fe21344f467418919a2233c76f1->enter($__internal_85825b0d554daa3221294af57fcf743327b08fe21344f467418919a2233c76f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_85825b0d554daa3221294af57fcf743327b08fe21344f467418919a2233c76f1->leave($__internal_85825b0d554daa3221294af57fcf743327b08fe21344f467418919a2233c76f1_prof);

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
