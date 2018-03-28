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
        $__internal_4b093e743dc1b3e0164e51090dc6d409a88430c75ba1f4f807df49ed3569f107 = $this->env->getExtension("native_profiler");
        $__internal_4b093e743dc1b3e0164e51090dc6d409a88430c75ba1f4f807df49ed3569f107->enter($__internal_4b093e743dc1b3e0164e51090dc6d409a88430c75ba1f4f807df49ed3569f107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b093e743dc1b3e0164e51090dc6d409a88430c75ba1f4f807df49ed3569f107->leave($__internal_4b093e743dc1b3e0164e51090dc6d409a88430c75ba1f4f807df49ed3569f107_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bbc4282adb7b86e8fded75c7d692c133263cde8ebd91e829d8a5de2858970d65 = $this->env->getExtension("native_profiler");
        $__internal_bbc4282adb7b86e8fded75c7d692c133263cde8ebd91e829d8a5de2858970d65->enter($__internal_bbc4282adb7b86e8fded75c7d692c133263cde8ebd91e829d8a5de2858970d65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_bbc4282adb7b86e8fded75c7d692c133263cde8ebd91e829d8a5de2858970d65->leave($__internal_bbc4282adb7b86e8fded75c7d692c133263cde8ebd91e829d8a5de2858970d65_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0b5dd082b73053a889f6e117499c4640a4bbd8c968456552446a9e5c1f83b369 = $this->env->getExtension("native_profiler");
        $__internal_0b5dd082b73053a889f6e117499c4640a4bbd8c968456552446a9e5c1f83b369->enter($__internal_0b5dd082b73053a889f6e117499c4640a4bbd8c968456552446a9e5c1f83b369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0b5dd082b73053a889f6e117499c4640a4bbd8c968456552446a9e5c1f83b369->leave($__internal_0b5dd082b73053a889f6e117499c4640a4bbd8c968456552446a9e5c1f83b369_prof);

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
