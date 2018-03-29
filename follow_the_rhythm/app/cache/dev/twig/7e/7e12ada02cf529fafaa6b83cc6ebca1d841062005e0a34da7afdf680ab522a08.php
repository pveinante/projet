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
        $__internal_dbb54ff9d157a3fa7b25b3b64e5cfeaa55ed77f121d8aa175d480d81fe18d32d = $this->env->getExtension("native_profiler");
        $__internal_dbb54ff9d157a3fa7b25b3b64e5cfeaa55ed77f121d8aa175d480d81fe18d32d->enter($__internal_dbb54ff9d157a3fa7b25b3b64e5cfeaa55ed77f121d8aa175d480d81fe18d32d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbb54ff9d157a3fa7b25b3b64e5cfeaa55ed77f121d8aa175d480d81fe18d32d->leave($__internal_dbb54ff9d157a3fa7b25b3b64e5cfeaa55ed77f121d8aa175d480d81fe18d32d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_71dcac8b067f780beb14198bd723f2aaf615ea2c43892724a41181c4af6c38f2 = $this->env->getExtension("native_profiler");
        $__internal_71dcac8b067f780beb14198bd723f2aaf615ea2c43892724a41181c4af6c38f2->enter($__internal_71dcac8b067f780beb14198bd723f2aaf615ea2c43892724a41181c4af6c38f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_71dcac8b067f780beb14198bd723f2aaf615ea2c43892724a41181c4af6c38f2->leave($__internal_71dcac8b067f780beb14198bd723f2aaf615ea2c43892724a41181c4af6c38f2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8d8f392a553e52495c96df008c00170c9a22d9e9e3ae473331184850cb71e1f4 = $this->env->getExtension("native_profiler");
        $__internal_8d8f392a553e52495c96df008c00170c9a22d9e9e3ae473331184850cb71e1f4->enter($__internal_8d8f392a553e52495c96df008c00170c9a22d9e9e3ae473331184850cb71e1f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8d8f392a553e52495c96df008c00170c9a22d9e9e3ae473331184850cb71e1f4->leave($__internal_8d8f392a553e52495c96df008c00170c9a22d9e9e3ae473331184850cb71e1f4_prof);

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
