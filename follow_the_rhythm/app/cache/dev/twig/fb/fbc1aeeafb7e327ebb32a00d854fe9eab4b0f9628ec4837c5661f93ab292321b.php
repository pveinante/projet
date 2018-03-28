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
        $__internal_dfeac770524efba63bf21c904d2d92b141898dcc67aa99b96fdf6f912e40358e = $this->env->getExtension("native_profiler");
        $__internal_dfeac770524efba63bf21c904d2d92b141898dcc67aa99b96fdf6f912e40358e->enter($__internal_dfeac770524efba63bf21c904d2d92b141898dcc67aa99b96fdf6f912e40358e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dfeac770524efba63bf21c904d2d92b141898dcc67aa99b96fdf6f912e40358e->leave($__internal_dfeac770524efba63bf21c904d2d92b141898dcc67aa99b96fdf6f912e40358e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_50380e7579953d14357e5d85652bb3b51db5d97af84caaad23da4f6f7b02098b = $this->env->getExtension("native_profiler");
        $__internal_50380e7579953d14357e5d85652bb3b51db5d97af84caaad23da4f6f7b02098b->enter($__internal_50380e7579953d14357e5d85652bb3b51db5d97af84caaad23da4f6f7b02098b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_50380e7579953d14357e5d85652bb3b51db5d97af84caaad23da4f6f7b02098b->leave($__internal_50380e7579953d14357e5d85652bb3b51db5d97af84caaad23da4f6f7b02098b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_df67cb170b90cf878a9ebfff9d53d770965a7fa1dddc63ac3dd318d35815046b = $this->env->getExtension("native_profiler");
        $__internal_df67cb170b90cf878a9ebfff9d53d770965a7fa1dddc63ac3dd318d35815046b->enter($__internal_df67cb170b90cf878a9ebfff9d53d770965a7fa1dddc63ac3dd318d35815046b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_df67cb170b90cf878a9ebfff9d53d770965a7fa1dddc63ac3dd318d35815046b->leave($__internal_df67cb170b90cf878a9ebfff9d53d770965a7fa1dddc63ac3dd318d35815046b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a348bcc34ef54d6217611516bd34369cbe664be103b14e2de2b83cda85fa51df = $this->env->getExtension("native_profiler");
        $__internal_a348bcc34ef54d6217611516bd34369cbe664be103b14e2de2b83cda85fa51df->enter($__internal_a348bcc34ef54d6217611516bd34369cbe664be103b14e2de2b83cda85fa51df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a348bcc34ef54d6217611516bd34369cbe664be103b14e2de2b83cda85fa51df->leave($__internal_a348bcc34ef54d6217611516bd34369cbe664be103b14e2de2b83cda85fa51df_prof);

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
