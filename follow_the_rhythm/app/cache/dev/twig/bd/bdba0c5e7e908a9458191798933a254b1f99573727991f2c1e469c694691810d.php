<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_7ee7c5aea4edb6f4381f631b9f079d74c066ac355f00e052b3f585942d1be109 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_05062f9d294c960b1102972eeb58447b1b90bbfd1981647c2696a5705d97f562 = $this->env->getExtension("native_profiler");
        $__internal_05062f9d294c960b1102972eeb58447b1b90bbfd1981647c2696a5705d97f562->enter($__internal_05062f9d294c960b1102972eeb58447b1b90bbfd1981647c2696a5705d97f562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05062f9d294c960b1102972eeb58447b1b90bbfd1981647c2696a5705d97f562->leave($__internal_05062f9d294c960b1102972eeb58447b1b90bbfd1981647c2696a5705d97f562_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_31523449083aebff0ce2031c6bd6eb20b1bd66b3e1cc80a48a430ab512e6ea83 = $this->env->getExtension("native_profiler");
        $__internal_31523449083aebff0ce2031c6bd6eb20b1bd66b3e1cc80a48a430ab512e6ea83->enter($__internal_31523449083aebff0ce2031c6bd6eb20b1bd66b3e1cc80a48a430ab512e6ea83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>
";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_31523449083aebff0ce2031c6bd6eb20b1bd66b3e1cc80a48a430ab512e6ea83->leave($__internal_31523449083aebff0ce2031c6bd6eb20b1bd66b3e1cc80a48a430ab512e6ea83_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}, 'FOSUserBundle') }}*/
/* </p>*/
/* {% endblock %}*/
/* */
