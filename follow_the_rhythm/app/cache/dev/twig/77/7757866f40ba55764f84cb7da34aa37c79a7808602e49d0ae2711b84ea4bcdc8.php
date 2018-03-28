<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_468e8d37cf68ba5261a6d8238435c706dfa4dadc64159a040d6f31e9ccd983b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_fcb6a8bd41f6fdcabfb31984e49468dfd0050ec280e6a5b3946beff9dff8201f = $this->env->getExtension("native_profiler");
        $__internal_fcb6a8bd41f6fdcabfb31984e49468dfd0050ec280e6a5b3946beff9dff8201f->enter($__internal_fcb6a8bd41f6fdcabfb31984e49468dfd0050ec280e6a5b3946beff9dff8201f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fcb6a8bd41f6fdcabfb31984e49468dfd0050ec280e6a5b3946beff9dff8201f->leave($__internal_fcb6a8bd41f6fdcabfb31984e49468dfd0050ec280e6a5b3946beff9dff8201f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_29dd0025f9bf01ee9f61835e693fe0eddacc63fcb5795eb5ce1ce1709ed3b73b = $this->env->getExtension("native_profiler");
        $__internal_29dd0025f9bf01ee9f61835e693fe0eddacc63fcb5795eb5ce1ce1709ed3b73b->enter($__internal_29dd0025f9bf01ee9f61835e693fe0eddacc63fcb5795eb5ce1ce1709ed3b73b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_29dd0025f9bf01ee9f61835e693fe0eddacc63fcb5795eb5ce1ce1709ed3b73b->leave($__internal_29dd0025f9bf01ee9f61835e693fe0eddacc63fcb5795eb5ce1ce1709ed3b73b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
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
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}, 'FOSUserBundle') }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
