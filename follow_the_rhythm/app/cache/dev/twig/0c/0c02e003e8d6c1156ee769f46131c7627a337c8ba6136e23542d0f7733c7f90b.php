<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_2e5409f002f7564c8788b3fcd214adee118ba9a9143fbca9ba0b209c0e8fbad4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_f5a1457bd44496050a2edce7df8b49109742d254f029dd003d08e0e641a11429 = $this->env->getExtension("native_profiler");
        $__internal_f5a1457bd44496050a2edce7df8b49109742d254f029dd003d08e0e641a11429->enter($__internal_f5a1457bd44496050a2edce7df8b49109742d254f029dd003d08e0e641a11429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5a1457bd44496050a2edce7df8b49109742d254f029dd003d08e0e641a11429->leave($__internal_f5a1457bd44496050a2edce7df8b49109742d254f029dd003d08e0e641a11429_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f6d51f46aff6243ab08a37a08ca52983548b29eac8bbae5d7ff3ef04069b539b = $this->env->getExtension("native_profiler");
        $__internal_f6d51f46aff6243ab08a37a08ca52983548b29eac8bbae5d7ff3ef04069b539b->enter($__internal_f6d51f46aff6243ab08a37a08ca52983548b29eac8bbae5d7ff3ef04069b539b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_f6d51f46aff6243ab08a37a08ca52983548b29eac8bbae5d7ff3ef04069b539b->leave($__internal_f6d51f46aff6243ab08a37a08ca52983548b29eac8bbae5d7ff3ef04069b539b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
