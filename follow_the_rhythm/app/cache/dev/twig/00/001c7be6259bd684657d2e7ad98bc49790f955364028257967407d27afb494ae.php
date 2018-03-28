<?php

/* EasyAdminBundle:default:exception.html.twig */
class __TwigTemplate_cef99915ccd94f1fffc647841bc89f6e52ed2ec30e062b6f459474b51600c1c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_class' => array($this, 'block_body_class'),
            'page_title' => array($this, 'block_page_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return $this->loadTemplate(array(0 => (($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "templates", array(), "any", false, true), "layout", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "templates", array(), "any", false, true), "layout", array()), "")) : ("")), 1 => $this->env->getExtension('easyadmin_extension')->getBackendConfiguration("design.templates.layout"), 2 => "@EasyAdmin/default/layout.html.twig"), "EasyAdminBundle:default:exception.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3e34d3e7203d3f96ac9ea387798ad5b08f922265e2964fc6616dd61c80f3b794 = $this->env->getExtension("native_profiler");
        $__internal_3e34d3e7203d3f96ac9ea387798ad5b08f922265e2964fc6616dd61c80f3b794->enter($__internal_3e34d3e7203d3f96ac9ea387798ad5b08f922265e2964fc6616dd61c80f3b794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:exception.html.twig"));

        // line 1
        $context["_entity_config"] = (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method")) ? ($this->env->getExtension('easyadmin_extension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"))) : (""));
        // line 3
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e34d3e7203d3f96ac9ea387798ad5b08f922265e2964fc6616dd61c80f3b794->leave($__internal_3e34d3e7203d3f96ac9ea387798ad5b08f922265e2964fc6616dd61c80f3b794_prof);

    }

    // line 8
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_bd0d14cea80e8275a4505107d849372a36df4d49ebd8765ff5f0b4d86b1343c8 = $this->env->getExtension("native_profiler");
        $__internal_bd0d14cea80e8275a4505107d849372a36df4d49ebd8765ff5f0b4d86b1343c8->enter($__internal_bd0d14cea80e8275a4505107d849372a36df4d49ebd8765ff5f0b4d86b1343c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo "error";
        
        $__internal_bd0d14cea80e8275a4505107d849372a36df4d49ebd8765ff5f0b4d86b1343c8->leave($__internal_bd0d14cea80e8275a4505107d849372a36df4d49ebd8765ff5f0b4d86b1343c8_prof);

    }

    // line 9
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_9ffa895ae014304ca990a1df3204cf5ba26a95b43a03b50bd6e4ca648cd6eff4 = $this->env->getExtension("native_profiler");
        $__internal_9ffa895ae014304ca990a1df3204cf5ba26a95b43a03b50bd6e4ca648cd6eff4->enter($__internal_9ffa895ae014304ca990a1df3204cf5ba26a95b43a03b50bd6e4ca648cd6eff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->transchoice("errors", 1, array(), "EasyAdminBundle"), "html", null, true);
        
        $__internal_9ffa895ae014304ca990a1df3204cf5ba26a95b43a03b50bd6e4ca648cd6eff4->leave($__internal_9ffa895ae014304ca990a1df3204cf5ba26a95b43a03b50bd6e4ca648cd6eff4_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_c0c5b8cba3d29bb9eaf22c9bf14b0d4d485cecb7cd7eaa0461acd84ffa7dec17 = $this->env->getExtension("native_profiler");
        $__internal_c0c5b8cba3d29bb9eaf22c9bf14b0d4d485cecb7cd7eaa0461acd84ffa7dec17->enter($__internal_c0c5b8cba3d29bb9eaf22c9bf14b0d4d485cecb7cd7eaa0461acd84ffa7dec17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 12
        echo "    <section id=\"main\" class=\"content\">
        <div class=\"error-description\">
            <h1><i class=\"fa fa-exclamation-circle\"></i> ";
        // line 14
        $this->displayBlock("page_title", $context, $blocks);
        echo "</h1>

            <div class=\"error-message\">
                ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "publicMessage", array()), $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "translationParameters", array()), "EasyAdminBundle"), "html", null, true);
        echo "
            </div>
        </div>
    </section>
";
        
        $__internal_c0c5b8cba3d29bb9eaf22c9bf14b0d4d485cecb7cd7eaa0461acd84ffa7dec17->leave($__internal_c0c5b8cba3d29bb9eaf22c9bf14b0d4d485cecb7cd7eaa0461acd84ffa7dec17_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 17,  72 => 14,  68 => 12,  62 => 11,  50 => 9,  38 => 8,  31 => 3,  29 => 1,  20 => 3,);
    }
}
/* {% set _entity_config = app.request.query.get('entity') ? easyadmin_entity(app.request.query.get('entity')) %}*/
/* {% extends [*/
/*     _entity_config.templates.layout|default(''),*/
/*     easyadmin_config('design.templates.layout'),*/
/*     '@EasyAdmin/default/layout.html.twig'*/
/* ] %}*/
/* */
/* {% block body_class 'error' %}*/
/* {% block page_title %}{{ 'errors'|transchoice(1, {}, 'EasyAdminBundle') }}{% endblock %}*/
/* */
/* {% block content %}*/
/*     <section id="main" class="content">*/
/*         <div class="error-description">*/
/*             <h1><i class="fa fa-exclamation-circle"></i> {{ block('page_title') }}</h1>*/
/* */
/*             <div class="error-message">*/
/*                 {{ exception.publicMessage|trans(exception.translationParameters, 'EasyAdminBundle') }}*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/* {% endblock %}*/
/* */
