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
        $__internal_8b4288bc77bab0045d6718d359501d0f29ad42b2d455255ad7b20968b0a1cf07 = $this->env->getExtension("native_profiler");
        $__internal_8b4288bc77bab0045d6718d359501d0f29ad42b2d455255ad7b20968b0a1cf07->enter($__internal_8b4288bc77bab0045d6718d359501d0f29ad42b2d455255ad7b20968b0a1cf07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b4288bc77bab0045d6718d359501d0f29ad42b2d455255ad7b20968b0a1cf07->leave($__internal_8b4288bc77bab0045d6718d359501d0f29ad42b2d455255ad7b20968b0a1cf07_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c4982658ff88c200921fb59db81abb439de74df9520709a88da28e6d8a1610b6 = $this->env->getExtension("native_profiler");
        $__internal_c4982658ff88c200921fb59db81abb439de74df9520709a88da28e6d8a1610b6->enter($__internal_c4982658ff88c200921fb59db81abb439de74df9520709a88da28e6d8a1610b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_c4982658ff88c200921fb59db81abb439de74df9520709a88da28e6d8a1610b6->leave($__internal_c4982658ff88c200921fb59db81abb439de74df9520709a88da28e6d8a1610b6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_07a88bb59ad819b162ebdd78f9da243e4926713c8ce9dfc14e99af314f4d9783 = $this->env->getExtension("native_profiler");
        $__internal_07a88bb59ad819b162ebdd78f9da243e4926713c8ce9dfc14e99af314f4d9783->enter($__internal_07a88bb59ad819b162ebdd78f9da243e4926713c8ce9dfc14e99af314f4d9783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_07a88bb59ad819b162ebdd78f9da243e4926713c8ce9dfc14e99af314f4d9783->leave($__internal_07a88bb59ad819b162ebdd78f9da243e4926713c8ce9dfc14e99af314f4d9783_prof);

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
