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
        $__internal_c7675f5ed574366e22c5de80a90eb96fc37021036d459436e9fdcd6daa6a94cd = $this->env->getExtension("native_profiler");
        $__internal_c7675f5ed574366e22c5de80a90eb96fc37021036d459436e9fdcd6daa6a94cd->enter($__internal_c7675f5ed574366e22c5de80a90eb96fc37021036d459436e9fdcd6daa6a94cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7675f5ed574366e22c5de80a90eb96fc37021036d459436e9fdcd6daa6a94cd->leave($__internal_c7675f5ed574366e22c5de80a90eb96fc37021036d459436e9fdcd6daa6a94cd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0ab9db70422ff2409511eb499613f1573037a57d501e322c3b9fbe6d69bca06d = $this->env->getExtension("native_profiler");
        $__internal_0ab9db70422ff2409511eb499613f1573037a57d501e322c3b9fbe6d69bca06d->enter($__internal_0ab9db70422ff2409511eb499613f1573037a57d501e322c3b9fbe6d69bca06d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0ab9db70422ff2409511eb499613f1573037a57d501e322c3b9fbe6d69bca06d->leave($__internal_0ab9db70422ff2409511eb499613f1573037a57d501e322c3b9fbe6d69bca06d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0e32a8faa43dc056050d8a87cb3da698f8628be94e5fa1b8943fb929ce331e26 = $this->env->getExtension("native_profiler");
        $__internal_0e32a8faa43dc056050d8a87cb3da698f8628be94e5fa1b8943fb929ce331e26->enter($__internal_0e32a8faa43dc056050d8a87cb3da698f8628be94e5fa1b8943fb929ce331e26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0e32a8faa43dc056050d8a87cb3da698f8628be94e5fa1b8943fb929ce331e26->leave($__internal_0e32a8faa43dc056050d8a87cb3da698f8628be94e5fa1b8943fb929ce331e26_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_293168b3e5a3ef35e539e2a15972640d4e343bbd486813d050f2de1d98007e5a = $this->env->getExtension("native_profiler");
        $__internal_293168b3e5a3ef35e539e2a15972640d4e343bbd486813d050f2de1d98007e5a->enter($__internal_293168b3e5a3ef35e539e2a15972640d4e343bbd486813d050f2de1d98007e5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_293168b3e5a3ef35e539e2a15972640d4e343bbd486813d050f2de1d98007e5a->leave($__internal_293168b3e5a3ef35e539e2a15972640d4e343bbd486813d050f2de1d98007e5a_prof);

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
