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
        $__internal_5d7856197832fcc309c24f05e4b2c56a92effb1356015f4221f769b7f7ab4539 = $this->env->getExtension("native_profiler");
        $__internal_5d7856197832fcc309c24f05e4b2c56a92effb1356015f4221f769b7f7ab4539->enter($__internal_5d7856197832fcc309c24f05e4b2c56a92effb1356015f4221f769b7f7ab4539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d7856197832fcc309c24f05e4b2c56a92effb1356015f4221f769b7f7ab4539->leave($__internal_5d7856197832fcc309c24f05e4b2c56a92effb1356015f4221f769b7f7ab4539_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_821fc280a0a4ad3b3f3e77ae62cbc55d428bf377ed51a96d20e95a6fd8fbfbc5 = $this->env->getExtension("native_profiler");
        $__internal_821fc280a0a4ad3b3f3e77ae62cbc55d428bf377ed51a96d20e95a6fd8fbfbc5->enter($__internal_821fc280a0a4ad3b3f3e77ae62cbc55d428bf377ed51a96d20e95a6fd8fbfbc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_821fc280a0a4ad3b3f3e77ae62cbc55d428bf377ed51a96d20e95a6fd8fbfbc5->leave($__internal_821fc280a0a4ad3b3f3e77ae62cbc55d428bf377ed51a96d20e95a6fd8fbfbc5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_89b47dd342c66af9264af5e67cf359bd7f7ef3f464866555f8f2cd376fcf453f = $this->env->getExtension("native_profiler");
        $__internal_89b47dd342c66af9264af5e67cf359bd7f7ef3f464866555f8f2cd376fcf453f->enter($__internal_89b47dd342c66af9264af5e67cf359bd7f7ef3f464866555f8f2cd376fcf453f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_89b47dd342c66af9264af5e67cf359bd7f7ef3f464866555f8f2cd376fcf453f->leave($__internal_89b47dd342c66af9264af5e67cf359bd7f7ef3f464866555f8f2cd376fcf453f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_14fa3f1b6a042b5dc4a30456b6ce73ddfb44de22ae869924f4d9a579f1ff7d43 = $this->env->getExtension("native_profiler");
        $__internal_14fa3f1b6a042b5dc4a30456b6ce73ddfb44de22ae869924f4d9a579f1ff7d43->enter($__internal_14fa3f1b6a042b5dc4a30456b6ce73ddfb44de22ae869924f4d9a579f1ff7d43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_14fa3f1b6a042b5dc4a30456b6ce73ddfb44de22ae869924f4d9a579f1ff7d43->leave($__internal_14fa3f1b6a042b5dc4a30456b6ce73ddfb44de22ae869924f4d9a579f1ff7d43_prof);

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
