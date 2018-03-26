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
        $__internal_f67c8bb8d71b96b5f81ae7e552b3ecb5f446df60162d0d3dba37bdc30340563d = $this->env->getExtension("native_profiler");
        $__internal_f67c8bb8d71b96b5f81ae7e552b3ecb5f446df60162d0d3dba37bdc30340563d->enter($__internal_f67c8bb8d71b96b5f81ae7e552b3ecb5f446df60162d0d3dba37bdc30340563d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f67c8bb8d71b96b5f81ae7e552b3ecb5f446df60162d0d3dba37bdc30340563d->leave($__internal_f67c8bb8d71b96b5f81ae7e552b3ecb5f446df60162d0d3dba37bdc30340563d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3f1b196cc3fc26670bb1f5baa20f9d00d45a0dd6c66774fcd2918e86a2866a8d = $this->env->getExtension("native_profiler");
        $__internal_3f1b196cc3fc26670bb1f5baa20f9d00d45a0dd6c66774fcd2918e86a2866a8d->enter($__internal_3f1b196cc3fc26670bb1f5baa20f9d00d45a0dd6c66774fcd2918e86a2866a8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_3f1b196cc3fc26670bb1f5baa20f9d00d45a0dd6c66774fcd2918e86a2866a8d->leave($__internal_3f1b196cc3fc26670bb1f5baa20f9d00d45a0dd6c66774fcd2918e86a2866a8d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7e65224a54bd69e7ef7d52af9610694cc53082c02269a8bc104e97755797dc4f = $this->env->getExtension("native_profiler");
        $__internal_7e65224a54bd69e7ef7d52af9610694cc53082c02269a8bc104e97755797dc4f->enter($__internal_7e65224a54bd69e7ef7d52af9610694cc53082c02269a8bc104e97755797dc4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7e65224a54bd69e7ef7d52af9610694cc53082c02269a8bc104e97755797dc4f->leave($__internal_7e65224a54bd69e7ef7d52af9610694cc53082c02269a8bc104e97755797dc4f_prof);

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
