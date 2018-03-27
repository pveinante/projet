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
        $__internal_50b471c64d753986e6b45fa0fc456c41bf3496983657f2cc74dd4078e6a1ddb5 = $this->env->getExtension("native_profiler");
        $__internal_50b471c64d753986e6b45fa0fc456c41bf3496983657f2cc74dd4078e6a1ddb5->enter($__internal_50b471c64d753986e6b45fa0fc456c41bf3496983657f2cc74dd4078e6a1ddb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50b471c64d753986e6b45fa0fc456c41bf3496983657f2cc74dd4078e6a1ddb5->leave($__internal_50b471c64d753986e6b45fa0fc456c41bf3496983657f2cc74dd4078e6a1ddb5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_97d6de234e7ee2219df2bde583419d4a93931d2d3fe2fd03a23ca51a24fceeda = $this->env->getExtension("native_profiler");
        $__internal_97d6de234e7ee2219df2bde583419d4a93931d2d3fe2fd03a23ca51a24fceeda->enter($__internal_97d6de234e7ee2219df2bde583419d4a93931d2d3fe2fd03a23ca51a24fceeda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_97d6de234e7ee2219df2bde583419d4a93931d2d3fe2fd03a23ca51a24fceeda->leave($__internal_97d6de234e7ee2219df2bde583419d4a93931d2d3fe2fd03a23ca51a24fceeda_prof);

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
