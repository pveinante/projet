<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_d18405d3cd0d450746e677bf6f416da9173f0244826fce16ea6cd7cb95b37746 extends Twig_Template
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
        $__internal_4a8c5249e6e9488141c874f00abb5f54bff7a22a3a7a2143b3e47bdbe8bf80f6 = $this->env->getExtension("native_profiler");
        $__internal_4a8c5249e6e9488141c874f00abb5f54bff7a22a3a7a2143b3e47bdbe8bf80f6->enter($__internal_4a8c5249e6e9488141c874f00abb5f54bff7a22a3a7a2143b3e47bdbe8bf80f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 1
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_registration_register\">
    ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_4a8c5249e6e9488141c874f00abb5f54bff7a22a3a7a2143b3e47bdbe8bf80f6->leave($__internal_4a8c5249e6e9488141c874f00abb5f54bff7a22a3a7a2143b3e47bdbe8bf80f6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 4,  29 => 2,  22 => 1,);
    }
}
/* <form action="{{ path('fos_user_registration_register') }}" {{ form_enctype(form) }} method="POST" class="fos_user_registration_register">*/
/*     {{ form_widget(form) }}*/
/*     <div>*/
/*         <input type="submit" value="{{ 'registration.submit'|trans({}, 'FOSUserBundle') }}" />*/
/*     </div>*/
/* </form>*/
/* */
