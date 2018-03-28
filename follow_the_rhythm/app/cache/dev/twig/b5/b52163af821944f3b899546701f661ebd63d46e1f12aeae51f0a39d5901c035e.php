<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_0c2e366aae66ac96d544936e0c047a8a3b7f3e217ddb6f4f68f065865b3328a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_b770cb81fabeec55f4a46f635661420868a046b6ecd137f7757166890e152960 = $this->env->getExtension("native_profiler");
        $__internal_b770cb81fabeec55f4a46f635661420868a046b6ecd137f7757166890e152960->enter($__internal_b770cb81fabeec55f4a46f635661420868a046b6ecd137f7757166890e152960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b770cb81fabeec55f4a46f635661420868a046b6ecd137f7757166890e152960->leave($__internal_b770cb81fabeec55f4a46f635661420868a046b6ecd137f7757166890e152960_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ff9ab65ca0290fa14af6372ab8cfe82531c377f8c1000910c6882cb644080802 = $this->env->getExtension("native_profiler");
        $__internal_ff9ab65ca0290fa14af6372ab8cfe82531c377f8c1000910c6882cb644080802->enter($__internal_ff9ab65ca0290fa14af6372ab8cfe82531c377f8c1000910c6882cb644080802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_ff9ab65ca0290fa14af6372ab8cfe82531c377f8c1000910c6882cb644080802->leave($__internal_ff9ab65ca0290fa14af6372ab8cfe82531c377f8c1000910c6882cb644080802_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
