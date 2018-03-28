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
        $__internal_e15428d454210219d1c5c8aa7c9f2dbb5a02bc8420c8df97f6db0ea14ea5004c = $this->env->getExtension("native_profiler");
        $__internal_e15428d454210219d1c5c8aa7c9f2dbb5a02bc8420c8df97f6db0ea14ea5004c->enter($__internal_e15428d454210219d1c5c8aa7c9f2dbb5a02bc8420c8df97f6db0ea14ea5004c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e15428d454210219d1c5c8aa7c9f2dbb5a02bc8420c8df97f6db0ea14ea5004c->leave($__internal_e15428d454210219d1c5c8aa7c9f2dbb5a02bc8420c8df97f6db0ea14ea5004c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c143789b18a8c2c93a2f0f1542befda671517381c8654b6313ee16ae20301c0a = $this->env->getExtension("native_profiler");
        $__internal_c143789b18a8c2c93a2f0f1542befda671517381c8654b6313ee16ae20301c0a->enter($__internal_c143789b18a8c2c93a2f0f1542befda671517381c8654b6313ee16ae20301c0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_c143789b18a8c2c93a2f0f1542befda671517381c8654b6313ee16ae20301c0a->leave($__internal_c143789b18a8c2c93a2f0f1542befda671517381c8654b6313ee16ae20301c0a_prof);

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
