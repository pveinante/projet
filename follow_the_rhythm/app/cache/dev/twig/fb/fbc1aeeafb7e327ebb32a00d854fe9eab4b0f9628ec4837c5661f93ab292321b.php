<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_0a04fe3a5394a976a626f98d7d9c6cc2239813ae078194f5f1b06c5a0d1b87a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_305f3a9ec3457cea6b66e7c8e2f9528d15cd411e890533dd8a816db20300ecac = $this->env->getExtension("native_profiler");
        $__internal_305f3a9ec3457cea6b66e7c8e2f9528d15cd411e890533dd8a816db20300ecac->enter($__internal_305f3a9ec3457cea6b66e7c8e2f9528d15cd411e890533dd8a816db20300ecac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_305f3a9ec3457cea6b66e7c8e2f9528d15cd411e890533dd8a816db20300ecac->leave($__internal_305f3a9ec3457cea6b66e7c8e2f9528d15cd411e890533dd8a816db20300ecac_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9f0689f08d89763e19c5f52450a9c88f2d0fcf6bf03fb3a2d03132a816b4d528 = $this->env->getExtension("native_profiler");
        $__internal_9f0689f08d89763e19c5f52450a9c88f2d0fcf6bf03fb3a2d03132a816b4d528->enter($__internal_9f0689f08d89763e19c5f52450a9c88f2d0fcf6bf03fb3a2d03132a816b4d528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9f0689f08d89763e19c5f52450a9c88f2d0fcf6bf03fb3a2d03132a816b4d528->leave($__internal_9f0689f08d89763e19c5f52450a9c88f2d0fcf6bf03fb3a2d03132a816b4d528_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6f27441fba734aac77e1524fa19fe4aaeb021c1f781ca8fb5f1bb637ab4ed1cf = $this->env->getExtension("native_profiler");
        $__internal_6f27441fba734aac77e1524fa19fe4aaeb021c1f781ca8fb5f1bb637ab4ed1cf->enter($__internal_6f27441fba734aac77e1524fa19fe4aaeb021c1f781ca8fb5f1bb637ab4ed1cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6f27441fba734aac77e1524fa19fe4aaeb021c1f781ca8fb5f1bb637ab4ed1cf->leave($__internal_6f27441fba734aac77e1524fa19fe4aaeb021c1f781ca8fb5f1bb637ab4ed1cf_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f001065ce438de59f10c771fe7ff233760486381aa90ddef55d6137ab71cc27c = $this->env->getExtension("native_profiler");
        $__internal_f001065ce438de59f10c771fe7ff233760486381aa90ddef55d6137ab71cc27c->enter($__internal_f001065ce438de59f10c771fe7ff233760486381aa90ddef55d6137ab71cc27c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f001065ce438de59f10c771fe7ff233760486381aa90ddef55d6137ab71cc27c->leave($__internal_f001065ce438de59f10c771fe7ff233760486381aa90ddef55d6137ab71cc27c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
