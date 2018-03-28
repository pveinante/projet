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
        $__internal_84bfc4116f73d7ab5961b455d285056efb36e14446e592bef58d2262a487362b = $this->env->getExtension("native_profiler");
        $__internal_84bfc4116f73d7ab5961b455d285056efb36e14446e592bef58d2262a487362b->enter($__internal_84bfc4116f73d7ab5961b455d285056efb36e14446e592bef58d2262a487362b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84bfc4116f73d7ab5961b455d285056efb36e14446e592bef58d2262a487362b->leave($__internal_84bfc4116f73d7ab5961b455d285056efb36e14446e592bef58d2262a487362b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_57ed35578f878583e6cea1af71bd0de37539b25f637265064aa26a2eb03c1b05 = $this->env->getExtension("native_profiler");
        $__internal_57ed35578f878583e6cea1af71bd0de37539b25f637265064aa26a2eb03c1b05->enter($__internal_57ed35578f878583e6cea1af71bd0de37539b25f637265064aa26a2eb03c1b05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_57ed35578f878583e6cea1af71bd0de37539b25f637265064aa26a2eb03c1b05->leave($__internal_57ed35578f878583e6cea1af71bd0de37539b25f637265064aa26a2eb03c1b05_prof);

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
