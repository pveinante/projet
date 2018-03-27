<?php

/* EasyAdminBundle:default:new.html.twig */
class __TwigTemplate_3987c395a6f3d46c31c4f627785965cca8a8b6481dcf69a71bea0c836dd31fc2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'content_title' => array($this, 'block_content_title'),
            'main' => array($this, 'block_main'),
            'entity_form' => array($this, 'block_entity_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 7
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "EasyAdminBundle:default:new.html.twig", 7);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_932c681e5068fd751960b9fc27688b96203a76f3f23ad555b5dfeaa463dc4201 = $this->env->getExtension("native_profiler");
        $__internal_932c681e5068fd751960b9fc27688b96203a76f3f23ad555b5dfeaa463dc4201->enter($__internal_932c681e5068fd751960b9fc27688b96203a76f3f23ad555b5dfeaa463dc4201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:new.html.twig"));

        // line 1
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $this->env->getExtension('easyadmin_extension')->getBackendConfiguration("design.form_theme"));
        // line 3
        $context["_entity_config"] = $this->env->getExtension('easyadmin_extension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["__internal_dbdb4f86854cadc4387502ca426b9e8872452624e1e14a5f2c8a8b4355c11c14"] = $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 5
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 4
(isset($context["__internal_dbdb4f86854cadc4387502ca426b9e8872452624e1e14a5f2c8a8b4355c11c14"]) ? $context["__internal_dbdb4f86854cadc4387502ca426b9e8872452624e1e14a5f2c8a8b4355c11c14"] : $this->getContext($context, "__internal_dbdb4f86854cadc4387502ca426b9e8872452624e1e14a5f2c8a8b4355c11c14"))), "%entity_label%" => $this->env->getExtension('translator')->trans($this->getAttribute(        // line 5
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 4
(isset($context["__internal_dbdb4f86854cadc4387502ca426b9e8872452624e1e14a5f2c8a8b4355c11c14"]) ? $context["__internal_dbdb4f86854cadc4387502ca426b9e8872452624e1e14a5f2c8a8b4355c11c14"] : $this->getContext($context, "__internal_dbdb4f86854cadc4387502ca426b9e8872452624e1e14a5f2c8a8b4355c11c14"))));
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_932c681e5068fd751960b9fc27688b96203a76f3f23ad555b5dfeaa463dc4201->leave($__internal_932c681e5068fd751960b9fc27688b96203a76f3f23ad555b5dfeaa463dc4201_prof);

    }

    // line 9
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_7807523d6fde27496821e75ccb9d86e8caa64256d8af2adfd5da2e6e4ed3ac1e = $this->env->getExtension("native_profiler");
        $__internal_7807523d6fde27496821e75ccb9d86e8caa64256d8af2adfd5da2e6e4ed3ac1e->enter($__internal_7807523d6fde27496821e75ccb9d86e8caa64256d8af2adfd5da2e6e4ed3ac1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ("easyadmin-new-" . $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array())), "html", null, true);
        
        $__internal_7807523d6fde27496821e75ccb9d86e8caa64256d8af2adfd5da2e6e4ed3ac1e->leave($__internal_7807523d6fde27496821e75ccb9d86e8caa64256d8af2adfd5da2e6e4ed3ac1e_prof);

    }

    // line 10
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_50883319c810b6b6981c64a81768b6026662653dfe01746b8e1794b26ac7b2f9 = $this->env->getExtension("native_profiler");
        $__internal_50883319c810b6b6981c64a81768b6026662653dfe01746b8e1794b26ac7b2f9->enter($__internal_50883319c810b6b6981c64a81768b6026662653dfe01746b8e1794b26ac7b2f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("new new-" . twig_lower_filter($this->env, $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_50883319c810b6b6981c64a81768b6026662653dfe01746b8e1794b26ac7b2f9->leave($__internal_50883319c810b6b6981c64a81768b6026662653dfe01746b8e1794b26ac7b2f9_prof);

    }

    // line 12
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_f71252389dd28d6ec401213b38590039567b6b60995724fd0cac9d1b1b7fd7c9 = $this->env->getExtension("native_profiler");
        $__internal_f71252389dd28d6ec401213b38590039567b6b60995724fd0cac9d1b1b7fd7c9->enter($__internal_f71252389dd28d6ec401213b38590039567b6b60995724fd0cac9d1b1b7fd7c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 13
        ob_start();
        // line 14
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('translator')->trans("new.page_title", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "new", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "new", array()), "title", array()), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")),         // line 4
(isset($context["__internal_dbdb4f86854cadc4387502ca426b9e8872452624e1e14a5f2c8a8b4355c11c14"]) ? $context["__internal_dbdb4f86854cadc4387502ca426b9e8872452624e1e14a5f2c8a8b4355c11c14"] : $this->getContext($context, "__internal_dbdb4f86854cadc4387502ca426b9e8872452624e1e14a5f2c8a8b4355c11c14")))) : (        // line 15
(isset($context["_default_title"]) ? $context["_default_title"] : $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_f71252389dd28d6ec401213b38590039567b6b60995724fd0cac9d1b1b7fd7c9->leave($__internal_f71252389dd28d6ec401213b38590039567b6b60995724fd0cac9d1b1b7fd7c9_prof);

    }

    // line 19
    public function block_main($context, array $blocks = array())
    {
        $__internal_5d654f6ea4ff46778361bf41cffff7d870f58220fe0b42b07960436800f70df2 = $this->env->getExtension("native_profiler");
        $__internal_5d654f6ea4ff46778361bf41cffff7d870f58220fe0b42b07960436800f70df2->enter($__internal_5d654f6ea4ff46778361bf41cffff7d870f58220fe0b42b07960436800f70df2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 20
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        
        $__internal_5d654f6ea4ff46778361bf41cffff7d870f58220fe0b42b07960436800f70df2->leave($__internal_5d654f6ea4ff46778361bf41cffff7d870f58220fe0b42b07960436800f70df2_prof);

    }

    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_6b5d5491ab7cf510bc3b85c50fc0ed2c9c84854ea403802c80b7b88404b19154 = $this->env->getExtension("native_profiler");
        $__internal_6b5d5491ab7cf510bc3b85c50fc0ed2c9c84854ea403802c80b7b88404b19154->enter($__internal_6b5d5491ab7cf510bc3b85c50fc0ed2c9c84854ea403802c80b7b88404b19154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 21
        echo "        ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
    ";
        
        $__internal_6b5d5491ab7cf510bc3b85c50fc0ed2c9c84854ea403802c80b7b88404b19154->leave($__internal_6b5d5491ab7cf510bc3b85c50fc0ed2c9c84854ea403802c80b7b88404b19154_prof);

    }

    // line 25
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_3a32d3485d1d0cb4a4d3383d6cecf74c2a23e93337a3b815a819f0b6f772319b = $this->env->getExtension("native_profiler");
        $__internal_3a32d3485d1d0cb4a4d3383d6cecf74c2a23e93337a3b815a819f0b6f772319b->enter($__internal_3a32d3485d1d0cb4a4d3383d6cecf74c2a23e93337a3b815a819f0b6f772319b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 26
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('.new-form').areYouSure({ 'message': '";
        // line 30
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("form.are_you_sure", array(), "EasyAdminBundle"), "js"), "html", null, true);
        echo "' });

            \$('.form-actions').easyAdminSticky();
        });
    </script>

    ";
        // line 36
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_select2_widget.html.twig");
        echo "
";
        
        $__internal_3a32d3485d1d0cb4a4d3383d6cecf74c2a23e93337a3b815a819f0b6f772319b->leave($__internal_3a32d3485d1d0cb4a4d3383d6cecf74c2a23e93337a3b815a819f0b6f772319b_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 36,  141 => 30,  133 => 26,  127 => 25,  117 => 21,  104 => 20,  98 => 19,  88 => 15,  87 => 4,  85 => 15,  82 => 14,  80 => 13,  74 => 12,  62 => 10,  50 => 9,  43 => 7,  41 => 4,  40 => 5,  39 => 4,  38 => 5,  36 => 4,  34 => 3,  32 => 1,  23 => 7,);
    }
}
/* {% form_theme form with easyadmin_config('design.form_theme') %}*/
/* */
/* {% set _entity_config = easyadmin_entity(app.request.query.get('entity')) %}*/
/* {% trans_default_domain _entity_config.translation_domain %}*/
/* {% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans } %}*/
/* */
/* {% extends _entity_config.templates.layout %}*/
/* */
/* {% block body_id 'easyadmin-new-' ~ _entity_config.name %}*/
/* {% block body_class 'new new-' ~ _entity_config.name|lower %}*/
/* */
/* {% block content_title %}*/
/* {% spaceless %}*/
/*     {% set _default_title = 'new.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}*/
/*     {{ _entity_config.new.title is defined ? _entity_config.new.title|trans(_trans_parameters) : _default_title }}*/
/* {% endspaceless %}*/
/* {% endblock %}*/
/* */
/* {% block main %}*/
/*     {% block entity_form %}*/
/*         {{ form(form) }}*/
/*     {% endblock entity_form %}*/
/* {% endblock %}*/
/* */
/* {% block body_javascript %}*/
/*     {{ parent() }}*/
/* */
/*     <script type="text/javascript">*/
/*         $(function() {*/
/*             $('.new-form').areYouSure({ 'message': '{{ 'form.are_you_sure'|trans({}, 'EasyAdminBundle')|e('js') }}' });*/
/* */
/*             $('.form-actions').easyAdminSticky();*/
/*         });*/
/*     </script>*/
/* */
/*     {{ include('@EasyAdmin/default/includes/_select2_widget.html.twig') }}*/
/* {% endblock %}*/
/* */
