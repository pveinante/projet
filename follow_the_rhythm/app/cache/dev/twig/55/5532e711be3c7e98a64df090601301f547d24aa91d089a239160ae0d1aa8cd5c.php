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
        $__internal_f12d63a3030863c2615e9762dbac128f121078e8e7f87bb31e28a1c2ab91a031 = $this->env->getExtension("native_profiler");
        $__internal_f12d63a3030863c2615e9762dbac128f121078e8e7f87bb31e28a1c2ab91a031->enter($__internal_f12d63a3030863c2615e9762dbac128f121078e8e7f87bb31e28a1c2ab91a031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f12d63a3030863c2615e9762dbac128f121078e8e7f87bb31e28a1c2ab91a031->leave($__internal_f12d63a3030863c2615e9762dbac128f121078e8e7f87bb31e28a1c2ab91a031_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c60c3cdd0d553d9fcf6903b58c575926687316c750ad639a0f0d64a351824af3 = $this->env->getExtension("native_profiler");
        $__internal_c60c3cdd0d553d9fcf6903b58c575926687316c750ad639a0f0d64a351824af3->enter($__internal_c60c3cdd0d553d9fcf6903b58c575926687316c750ad639a0f0d64a351824af3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c60c3cdd0d553d9fcf6903b58c575926687316c750ad639a0f0d64a351824af3->leave($__internal_c60c3cdd0d553d9fcf6903b58c575926687316c750ad639a0f0d64a351824af3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f84f2904fb0a008b506fe81d5978ddb45d3c77b6d5364649bca4b5bf8a7134ef = $this->env->getExtension("native_profiler");
        $__internal_f84f2904fb0a008b506fe81d5978ddb45d3c77b6d5364649bca4b5bf8a7134ef->enter($__internal_f84f2904fb0a008b506fe81d5978ddb45d3c77b6d5364649bca4b5bf8a7134ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f84f2904fb0a008b506fe81d5978ddb45d3c77b6d5364649bca4b5bf8a7134ef->leave($__internal_f84f2904fb0a008b506fe81d5978ddb45d3c77b6d5364649bca4b5bf8a7134ef_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_39e3bc87d4ec127762cf513f9b468aeed0a6cd28e9f59c0203f43540939eb3ae = $this->env->getExtension("native_profiler");
        $__internal_39e3bc87d4ec127762cf513f9b468aeed0a6cd28e9f59c0203f43540939eb3ae->enter($__internal_39e3bc87d4ec127762cf513f9b468aeed0a6cd28e9f59c0203f43540939eb3ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_39e3bc87d4ec127762cf513f9b468aeed0a6cd28e9f59c0203f43540939eb3ae->leave($__internal_39e3bc87d4ec127762cf513f9b468aeed0a6cd28e9f59c0203f43540939eb3ae_prof);

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
