<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_5e1ab414de0a5e84ffa2c4418cf5a9f6b862aa02ca69c1981a61e2b1ed9e548a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8895f06ce76fab2e9a117151a33c4e8ad6bf69b8db54b30676142b4813eefa7d = $this->env->getExtension("native_profiler");
        $__internal_8895f06ce76fab2e9a117151a33c4e8ad6bf69b8db54b30676142b4813eefa7d->enter($__internal_8895f06ce76fab2e9a117151a33c4e8ad6bf69b8db54b30676142b4813eefa7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8895f06ce76fab2e9a117151a33c4e8ad6bf69b8db54b30676142b4813eefa7d->leave($__internal_8895f06ce76fab2e9a117151a33c4e8ad6bf69b8db54b30676142b4813eefa7d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_98092752ffd33523bc520cccee8504811036a9a57f665cd6259415f68d79cbd8 = $this->env->getExtension("native_profiler");
        $__internal_98092752ffd33523bc520cccee8504811036a9a57f665cd6259415f68d79cbd8->enter($__internal_98092752ffd33523bc520cccee8504811036a9a57f665cd6259415f68d79cbd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_98092752ffd33523bc520cccee8504811036a9a57f665cd6259415f68d79cbd8->leave($__internal_98092752ffd33523bc520cccee8504811036a9a57f665cd6259415f68d79cbd8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f184b33e97ed7881fa9ed9dda6f35495bc334877cbee8c8e20f4bf312932c428 = $this->env->getExtension("native_profiler");
        $__internal_f184b33e97ed7881fa9ed9dda6f35495bc334877cbee8c8e20f4bf312932c428->enter($__internal_f184b33e97ed7881fa9ed9dda6f35495bc334877cbee8c8e20f4bf312932c428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_f184b33e97ed7881fa9ed9dda6f35495bc334877cbee8c8e20f4bf312932c428->leave($__internal_f184b33e97ed7881fa9ed9dda6f35495bc334877cbee8c8e20f4bf312932c428_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
