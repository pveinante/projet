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
        $__internal_ae9a75978e5bbc60b1118ea805d1f3e1d4388d6395d22633977824ed39e3a59e = $this->env->getExtension("native_profiler");
        $__internal_ae9a75978e5bbc60b1118ea805d1f3e1d4388d6395d22633977824ed39e3a59e->enter($__internal_ae9a75978e5bbc60b1118ea805d1f3e1d4388d6395d22633977824ed39e3a59e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae9a75978e5bbc60b1118ea805d1f3e1d4388d6395d22633977824ed39e3a59e->leave($__internal_ae9a75978e5bbc60b1118ea805d1f3e1d4388d6395d22633977824ed39e3a59e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2c490ccc26584ad1db8a0eb77061c6169db72052cc34e1a64df961ab5344d247 = $this->env->getExtension("native_profiler");
        $__internal_2c490ccc26584ad1db8a0eb77061c6169db72052cc34e1a64df961ab5344d247->enter($__internal_2c490ccc26584ad1db8a0eb77061c6169db72052cc34e1a64df961ab5344d247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_2c490ccc26584ad1db8a0eb77061c6169db72052cc34e1a64df961ab5344d247->leave($__internal_2c490ccc26584ad1db8a0eb77061c6169db72052cc34e1a64df961ab5344d247_prof);

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
