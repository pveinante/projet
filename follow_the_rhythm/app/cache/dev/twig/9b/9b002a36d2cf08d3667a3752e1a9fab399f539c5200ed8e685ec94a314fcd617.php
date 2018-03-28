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
        $__internal_682412de1556a613aeaddeba81806ea3940bddadb4b78df0ef79af873c28186b = $this->env->getExtension("native_profiler");
        $__internal_682412de1556a613aeaddeba81806ea3940bddadb4b78df0ef79af873c28186b->enter($__internal_682412de1556a613aeaddeba81806ea3940bddadb4b78df0ef79af873c28186b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_682412de1556a613aeaddeba81806ea3940bddadb4b78df0ef79af873c28186b->leave($__internal_682412de1556a613aeaddeba81806ea3940bddadb4b78df0ef79af873c28186b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fc0b34872eae105606d4e170ef740acbc83b5c73d7b86e35ce717bf6007104f5 = $this->env->getExtension("native_profiler");
        $__internal_fc0b34872eae105606d4e170ef740acbc83b5c73d7b86e35ce717bf6007104f5->enter($__internal_fc0b34872eae105606d4e170ef740acbc83b5c73d7b86e35ce717bf6007104f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_fc0b34872eae105606d4e170ef740acbc83b5c73d7b86e35ce717bf6007104f5->leave($__internal_fc0b34872eae105606d4e170ef740acbc83b5c73d7b86e35ce717bf6007104f5_prof);

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
