<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_ccfbefc0ead1af44ab5911fb484291570823df8857d6dd2bde6bf7f485c39872 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b843f34bdcb8db8e2aba83be7b8ad07ee4210e22979a64d5437c960d3bb7a44b = $this->env->getExtension("native_profiler");
        $__internal_b843f34bdcb8db8e2aba83be7b8ad07ee4210e22979a64d5437c960d3bb7a44b->enter($__internal_b843f34bdcb8db8e2aba83be7b8ad07ee4210e22979a64d5437c960d3bb7a44b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_user_show\">
    <p>";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_b843f34bdcb8db8e2aba83be7b8ad07ee4210e22979a64d5437c960d3bb7a44b->leave($__internal_b843f34bdcb8db8e2aba83be7b8ad07ee4210e22979a64d5437c960d3bb7a44b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 2,  22 => 1,);
    }
}
/* <div class="fos_user_user_show">*/
/*     <p>{{ 'profile.show.username'|trans({}, 'FOSUserBundle') }}: {{ user.username }}</p>*/
/*     <p>{{ 'profile.show.email'|trans({}, 'FOSUserBundle') }}: {{ user.email }}</p>*/
/* </div>*/
/* */
