<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0a04fe3a5394a976a626f98d7d9c6cc2239813ae078194f5f1b06c5a0d1b87a8 extends Twig_Template
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
        $__internal_8d4047f1eba785a3a6f0e0710ef2d47fba36f4a6e924a115e5569f02709386eb = $this->env->getExtension("native_profiler");
        $__internal_8d4047f1eba785a3a6f0e0710ef2d47fba36f4a6e924a115e5569f02709386eb->enter($__internal_8d4047f1eba785a3a6f0e0710ef2d47fba36f4a6e924a115e5569f02709386eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d4047f1eba785a3a6f0e0710ef2d47fba36f4a6e924a115e5569f02709386eb->leave($__internal_8d4047f1eba785a3a6f0e0710ef2d47fba36f4a6e924a115e5569f02709386eb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a976d84edd4888e73297ec3b98319865760014d5f2f136f74827dab30c551064 = $this->env->getExtension("native_profiler");
        $__internal_a976d84edd4888e73297ec3b98319865760014d5f2f136f74827dab30c551064->enter($__internal_a976d84edd4888e73297ec3b98319865760014d5f2f136f74827dab30c551064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a976d84edd4888e73297ec3b98319865760014d5f2f136f74827dab30c551064->leave($__internal_a976d84edd4888e73297ec3b98319865760014d5f2f136f74827dab30c551064_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c105d438e1417f2598fc71c437d80f5a013cc0eee76c51750c532c3c62dcb58e = $this->env->getExtension("native_profiler");
        $__internal_c105d438e1417f2598fc71c437d80f5a013cc0eee76c51750c532c3c62dcb58e->enter($__internal_c105d438e1417f2598fc71c437d80f5a013cc0eee76c51750c532c3c62dcb58e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c105d438e1417f2598fc71c437d80f5a013cc0eee76c51750c532c3c62dcb58e->leave($__internal_c105d438e1417f2598fc71c437d80f5a013cc0eee76c51750c532c3c62dcb58e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_88154fbf5414217bcf57cd94ec28a8f7e51941379ca3dc371f2e0c0c33afbec8 = $this->env->getExtension("native_profiler");
        $__internal_88154fbf5414217bcf57cd94ec28a8f7e51941379ca3dc371f2e0c0c33afbec8->enter($__internal_88154fbf5414217bcf57cd94ec28a8f7e51941379ca3dc371f2e0c0c33afbec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_88154fbf5414217bcf57cd94ec28a8f7e51941379ca3dc371f2e0c0c33afbec8->leave($__internal_88154fbf5414217bcf57cd94ec28a8f7e51941379ca3dc371f2e0c0c33afbec8_prof);

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
