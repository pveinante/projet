<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_0807cdf231b36a044d008619029a38616452089af505b6f9aa4a73a8e4f94544 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_de1d8afa330520ea1146f7794aca992240280fdc95bd2edc29cb54230efcea68 = $this->env->getExtension("native_profiler");
        $__internal_de1d8afa330520ea1146f7794aca992240280fdc95bd2edc29cb54230efcea68->enter($__internal_de1d8afa330520ea1146f7794aca992240280fdc95bd2edc29cb54230efcea68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de1d8afa330520ea1146f7794aca992240280fdc95bd2edc29cb54230efcea68->leave($__internal_de1d8afa330520ea1146f7794aca992240280fdc95bd2edc29cb54230efcea68_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e1c241963ea84808be25a59a8fa519a922e5d24b0d4f577f2ed55fcb65edf627 = $this->env->getExtension("native_profiler");
        $__internal_e1c241963ea84808be25a59a8fa519a922e5d24b0d4f577f2ed55fcb65edf627->enter($__internal_e1c241963ea84808be25a59a8fa519a922e5d24b0d4f577f2ed55fcb65edf627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_e1c241963ea84808be25a59a8fa519a922e5d24b0d4f577f2ed55fcb65edf627->leave($__internal_e1c241963ea84808be25a59a8fa519a922e5d24b0d4f577f2ed55fcb65edf627_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
