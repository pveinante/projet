<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_982eb60ee399ddf862246594ad846535bdcfeaaadb10da611920b1823bf41b76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_824c169878cdf22c8eae1f4f11056d413ccbdc2bbf09fa08cb7a450381a8b876 = $this->env->getExtension("native_profiler");
        $__internal_824c169878cdf22c8eae1f4f11056d413ccbdc2bbf09fa08cb7a450381a8b876->enter($__internal_824c169878cdf22c8eae1f4f11056d413ccbdc2bbf09fa08cb7a450381a8b876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_824c169878cdf22c8eae1f4f11056d413ccbdc2bbf09fa08cb7a450381a8b876->leave($__internal_824c169878cdf22c8eae1f4f11056d413ccbdc2bbf09fa08cb7a450381a8b876_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6387dfb3821391872e8744feaa48e19dc4de74a5d41b747cfd5ef28c5751e223 = $this->env->getExtension("native_profiler");
        $__internal_6387dfb3821391872e8744feaa48e19dc4de74a5d41b747cfd5ef28c5751e223->enter($__internal_6387dfb3821391872e8744feaa48e19dc4de74a5d41b747cfd5ef28c5751e223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6387dfb3821391872e8744feaa48e19dc4de74a5d41b747cfd5ef28c5751e223->leave($__internal_6387dfb3821391872e8744feaa48e19dc4de74a5d41b747cfd5ef28c5751e223_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_381de97c8f692b8dd5ac1751d854bcd10ae470acaf5c861db85b7a3a62d01e27 = $this->env->getExtension("native_profiler");
        $__internal_381de97c8f692b8dd5ac1751d854bcd10ae470acaf5c861db85b7a3a62d01e27->enter($__internal_381de97c8f692b8dd5ac1751d854bcd10ae470acaf5c861db85b7a3a62d01e27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_381de97c8f692b8dd5ac1751d854bcd10ae470acaf5c861db85b7a3a62d01e27->leave($__internal_381de97c8f692b8dd5ac1751d854bcd10ae470acaf5c861db85b7a3a62d01e27_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b36b86b3107804e83b7bfe3f1365c1858d36a6620a73192777950bae8b87998e = $this->env->getExtension("native_profiler");
        $__internal_b36b86b3107804e83b7bfe3f1365c1858d36a6620a73192777950bae8b87998e->enter($__internal_b36b86b3107804e83b7bfe3f1365c1858d36a6620a73192777950bae8b87998e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b36b86b3107804e83b7bfe3f1365c1858d36a6620a73192777950bae8b87998e->leave($__internal_b36b86b3107804e83b7bfe3f1365c1858d36a6620a73192777950bae8b87998e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
