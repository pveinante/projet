<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_4fdd4edb76b166c92f183a2d59920fc36da7cce00c8ec1079c5049ffd6fe0719 extends Twig_Template
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
        $__internal_a2d88d5325531aeb8913106e04b6e7d2bd2918bd477c0e78dfb4752922a6e881 = $this->env->getExtension("native_profiler");
        $__internal_a2d88d5325531aeb8913106e04b6e7d2bd2918bd477c0e78dfb4752922a6e881->enter($__internal_a2d88d5325531aeb8913106e04b6e7d2bd2918bd477c0e78dfb4752922a6e881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2d88d5325531aeb8913106e04b6e7d2bd2918bd477c0e78dfb4752922a6e881->leave($__internal_a2d88d5325531aeb8913106e04b6e7d2bd2918bd477c0e78dfb4752922a6e881_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cf4919f931b2521d98393604f6f89d59837b92960d1a3de38ea4bce66fba3330 = $this->env->getExtension("native_profiler");
        $__internal_cf4919f931b2521d98393604f6f89d59837b92960d1a3de38ea4bce66fba3330->enter($__internal_cf4919f931b2521d98393604f6f89d59837b92960d1a3de38ea4bce66fba3330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_cf4919f931b2521d98393604f6f89d59837b92960d1a3de38ea4bce66fba3330->leave($__internal_cf4919f931b2521d98393604f6f89d59837b92960d1a3de38ea4bce66fba3330_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5a1465d6aba8357f975045a109f4cd3da4a71801264d3e5a4ee73f38b1906f5b = $this->env->getExtension("native_profiler");
        $__internal_5a1465d6aba8357f975045a109f4cd3da4a71801264d3e5a4ee73f38b1906f5b->enter($__internal_5a1465d6aba8357f975045a109f4cd3da4a71801264d3e5a4ee73f38b1906f5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5a1465d6aba8357f975045a109f4cd3da4a71801264d3e5a4ee73f38b1906f5b->leave($__internal_5a1465d6aba8357f975045a109f4cd3da4a71801264d3e5a4ee73f38b1906f5b_prof);

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
