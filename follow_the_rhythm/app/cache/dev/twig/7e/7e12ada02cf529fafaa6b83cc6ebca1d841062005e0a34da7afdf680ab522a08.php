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
        $__internal_749a17c2a3c9f39673fae76b71dde1994d772a312b04be6da1a672346177ff65 = $this->env->getExtension("native_profiler");
        $__internal_749a17c2a3c9f39673fae76b71dde1994d772a312b04be6da1a672346177ff65->enter($__internal_749a17c2a3c9f39673fae76b71dde1994d772a312b04be6da1a672346177ff65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_749a17c2a3c9f39673fae76b71dde1994d772a312b04be6da1a672346177ff65->leave($__internal_749a17c2a3c9f39673fae76b71dde1994d772a312b04be6da1a672346177ff65_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_969acd495e48a870ebc39718670dc90b1905447cbdef52e40cd8e845db1acda7 = $this->env->getExtension("native_profiler");
        $__internal_969acd495e48a870ebc39718670dc90b1905447cbdef52e40cd8e845db1acda7->enter($__internal_969acd495e48a870ebc39718670dc90b1905447cbdef52e40cd8e845db1acda7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_969acd495e48a870ebc39718670dc90b1905447cbdef52e40cd8e845db1acda7->leave($__internal_969acd495e48a870ebc39718670dc90b1905447cbdef52e40cd8e845db1acda7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a1c2c6b3b87f10f169089de92f4499944af5ead4b0f8d7fe56fa2a26653ac61e = $this->env->getExtension("native_profiler");
        $__internal_a1c2c6b3b87f10f169089de92f4499944af5ead4b0f8d7fe56fa2a26653ac61e->enter($__internal_a1c2c6b3b87f10f169089de92f4499944af5ead4b0f8d7fe56fa2a26653ac61e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a1c2c6b3b87f10f169089de92f4499944af5ead4b0f8d7fe56fa2a26653ac61e->leave($__internal_a1c2c6b3b87f10f169089de92f4499944af5ead4b0f8d7fe56fa2a26653ac61e_prof);

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
