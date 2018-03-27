<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_10f121c21c43accea9dd27e65eac83409320617ba0ad683031e209bf8287a518 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_87c1faa8bc1b5702a1157101db2ed5b809d974e88dac62d8ab5d4047b4aab72d = $this->env->getExtension("native_profiler");
        $__internal_87c1faa8bc1b5702a1157101db2ed5b809d974e88dac62d8ab5d4047b4aab72d->enter($__internal_87c1faa8bc1b5702a1157101db2ed5b809d974e88dac62d8ab5d4047b4aab72d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87c1faa8bc1b5702a1157101db2ed5b809d974e88dac62d8ab5d4047b4aab72d->leave($__internal_87c1faa8bc1b5702a1157101db2ed5b809d974e88dac62d8ab5d4047b4aab72d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_55792734df9ca59936b274ef7f0cf2db5693db751895b624fb2d24968dae760c = $this->env->getExtension("native_profiler");
        $__internal_55792734df9ca59936b274ef7f0cf2db5693db751895b624fb2d24968dae760c->enter($__internal_55792734df9ca59936b274ef7f0cf2db5693db751895b624fb2d24968dae760c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_55792734df9ca59936b274ef7f0cf2db5693db751895b624fb2d24968dae760c->leave($__internal_55792734df9ca59936b274ef7f0cf2db5693db751895b624fb2d24968dae760c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
