<?php

/* @EasyAdmin/default/edit.html.twig */
class __TwigTemplate_3d76b40201354be22a7184afcda89ee9c1b2c99a3bb78944c468dc3d14e0ec50 extends Twig_Template
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
            'delete_form' => array($this, 'block_delete_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 8
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "@EasyAdmin/default/edit.html.twig", 8);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dd6b0cf05454b0fd946efb40c5f59a32d9cfb301856587058865f9b0ae2e242a = $this->env->getExtension("native_profiler");
        $__internal_dd6b0cf05454b0fd946efb40c5f59a32d9cfb301856587058865f9b0ae2e242a->enter($__internal_dd6b0cf05454b0fd946efb40c5f59a32d9cfb301856587058865f9b0ae2e242a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/edit.html.twig"));

        // line 1
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $this->env->getExtension('easyadmin_extension')->getBackendConfiguration("design.form_theme"));
        // line 3
        $context["_entity_config"] = $this->env->getExtension('easyadmin_extension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["_entity_id"] = $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "primary_key_field_name", array()));
        // line 5
        $context["__internal_f39a9d722ff98a919d2eb35c21cab12ef4d52e885d66dd531d3ce81e932bc083"] = $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 6
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 5
(isset($context["__internal_f39a9d722ff98a919d2eb35c21cab12ef4d52e885d66dd531d3ce81e932bc083"]) ? $context["__internal_f39a9d722ff98a919d2eb35c21cab12ef4d52e885d66dd531d3ce81e932bc083"] : $this->getContext($context, "__internal_f39a9d722ff98a919d2eb35c21cab12ef4d52e885d66dd531d3ce81e932bc083"))), "%entity_label%" => $this->env->getExtension('translator')->trans($this->getAttribute(        // line 6
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 5
(isset($context["__internal_f39a9d722ff98a919d2eb35c21cab12ef4d52e885d66dd531d3ce81e932bc083"]) ? $context["__internal_f39a9d722ff98a919d2eb35c21cab12ef4d52e885d66dd531d3ce81e932bc083"] : $this->getContext($context, "__internal_f39a9d722ff98a919d2eb35c21cab12ef4d52e885d66dd531d3ce81e932bc083"))), "%entity_id%" =>         // line 6
(isset($context["_entity_id"]) ? $context["_entity_id"] : $this->getContext($context, "_entity_id")));
        // line 8
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd6b0cf05454b0fd946efb40c5f59a32d9cfb301856587058865f9b0ae2e242a->leave($__internal_dd6b0cf05454b0fd946efb40c5f59a32d9cfb301856587058865f9b0ae2e242a_prof);

    }

    // line 10
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_f88f81924aa7176cb26b45738d7ea240004d215ac4f12389113f4aa76e809e91 = $this->env->getExtension("native_profiler");
        $__internal_f88f81924aa7176cb26b45738d7ea240004d215ac4f12389113f4aa76e809e91->enter($__internal_f88f81924aa7176cb26b45738d7ea240004d215ac4f12389113f4aa76e809e91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ((("easyadmin-edit-" . $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array())) . "-") . (isset($context["_entity_id"]) ? $context["_entity_id"] : $this->getContext($context, "_entity_id"))), "html", null, true);
        
        $__internal_f88f81924aa7176cb26b45738d7ea240004d215ac4f12389113f4aa76e809e91->leave($__internal_f88f81924aa7176cb26b45738d7ea240004d215ac4f12389113f4aa76e809e91_prof);

    }

    // line 11
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_f20d6a926c4210696d1f2456bd1494b6c13c438dafe7bc9206f1d1b6b039f4d9 = $this->env->getExtension("native_profiler");
        $__internal_f20d6a926c4210696d1f2456bd1494b6c13c438dafe7bc9206f1d1b6b039f4d9->enter($__internal_f20d6a926c4210696d1f2456bd1494b6c13c438dafe7bc9206f1d1b6b039f4d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("edit edit-" . twig_lower_filter($this->env, $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_f20d6a926c4210696d1f2456bd1494b6c13c438dafe7bc9206f1d1b6b039f4d9->leave($__internal_f20d6a926c4210696d1f2456bd1494b6c13c438dafe7bc9206f1d1b6b039f4d9_prof);

    }

    // line 13
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_cf974b4fd0c0d64903c397f111193b8d0e05927d169a9dfad360f4aee9f3729b = $this->env->getExtension("native_profiler");
        $__internal_cf974b4fd0c0d64903c397f111193b8d0e05927d169a9dfad360f4aee9f3729b->enter($__internal_cf974b4fd0c0d64903c397f111193b8d0e05927d169a9dfad360f4aee9f3729b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 14
        ob_start();
        // line 15
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('translator')->trans("edit.page_title", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "edit", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "edit", array()), "title", array()), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")),         // line 5
(isset($context["__internal_f39a9d722ff98a919d2eb35c21cab12ef4d52e885d66dd531d3ce81e932bc083"]) ? $context["__internal_f39a9d722ff98a919d2eb35c21cab12ef4d52e885d66dd531d3ce81e932bc083"] : $this->getContext($context, "__internal_f39a9d722ff98a919d2eb35c21cab12ef4d52e885d66dd531d3ce81e932bc083")))) : (        // line 16
(isset($context["_default_title"]) ? $context["_default_title"] : $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_cf974b4fd0c0d64903c397f111193b8d0e05927d169a9dfad360f4aee9f3729b->leave($__internal_cf974b4fd0c0d64903c397f111193b8d0e05927d169a9dfad360f4aee9f3729b_prof);

    }

    // line 20
    public function block_main($context, array $blocks = array())
    {
        $__internal_046b4ae3f632519cb08473af8a2aad34d123790523eb9db5a10d824ce6791cdf = $this->env->getExtension("native_profiler");
        $__internal_046b4ae3f632519cb08473af8a2aad34d123790523eb9db5a10d824ce6791cdf->enter($__internal_046b4ae3f632519cb08473af8a2aad34d123790523eb9db5a10d824ce6791cdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 21
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_046b4ae3f632519cb08473af8a2aad34d123790523eb9db5a10d824ce6791cdf->leave($__internal_046b4ae3f632519cb08473af8a2aad34d123790523eb9db5a10d824ce6791cdf_prof);

    }

    // line 21
    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_6a1092b4a5f32eca0ee9aa00ba556e7924f3071480b48b8a1dea340faaa0b7dd = $this->env->getExtension("native_profiler");
        $__internal_6a1092b4a5f32eca0ee9aa00ba556e7924f3071480b48b8a1dea340faaa0b7dd->enter($__internal_6a1092b4a5f32eca0ee9aa00ba556e7924f3071480b48b8a1dea340faaa0b7dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 22
        echo "        ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
    ";
        
        $__internal_6a1092b4a5f32eca0ee9aa00ba556e7924f3071480b48b8a1dea340faaa0b7dd->leave($__internal_6a1092b4a5f32eca0ee9aa00ba556e7924f3071480b48b8a1dea340faaa0b7dd_prof);

    }

    // line 25
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_57aae5d11b17cd1cc6e857c8c7467d6a4af3ca33d067649dfd791c33ccc3c90d = $this->env->getExtension("native_profiler");
        $__internal_57aae5d11b17cd1cc6e857c8c7467d6a4af3ca33d067649dfd791c33ccc3c90d->enter($__internal_57aae5d11b17cd1cc6e857c8c7467d6a4af3ca33d067649dfd791c33ccc3c90d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        // line 26
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_delete_form.html.twig", array("view" => "edit", "referer" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 28
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer", 1 => ""), "method"), "delete_form" =>         // line 29
(isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "_translation_domain" => $this->getAttribute(        // line 30
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "translation_domain", array()), "_trans_parameters" =>         // line 31
(isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "_entity_config" =>         // line 32
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config"))), false);
        // line 33
        echo "
    ";
        
        $__internal_57aae5d11b17cd1cc6e857c8c7467d6a4af3ca33d067649dfd791c33ccc3c90d->leave($__internal_57aae5d11b17cd1cc6e857c8c7467d6a4af3ca33d067649dfd791c33ccc3c90d_prof);

    }

    // line 37
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_86f2386c42ba94a647c8981d21820bb734890c87a8db14ec84c1a2f7b42a7a6f = $this->env->getExtension("native_profiler");
        $__internal_86f2386c42ba94a647c8981d21820bb734890c87a8db14ec84c1a2f7b42a7a6f->enter($__internal_86f2386c42ba94a647c8981d21820bb734890c87a8db14ec84c1a2f7b42a7a6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 38
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('.edit-form').areYouSure({ 'message': '";
        // line 42
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("form.are_you_sure", array(), "EasyAdminBundle"), "js"), "html", null, true);
        echo "' });

            \$('.form-actions').easyAdminSticky();

            \$('a.action-delete').on('click', function(e) {
                e.preventDefault();

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        \$('#delete-form').trigger('submit');
                    });
            });
        });
    </script>

    ";
        // line 58
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_select2_widget.html.twig");
        echo "
";
        
        $__internal_86f2386c42ba94a647c8981d21820bb734890c87a8db14ec84c1a2f7b42a7a6f->leave($__internal_86f2386c42ba94a647c8981d21820bb734890c87a8db14ec84c1a2f7b42a7a6f_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 58,  173 => 42,  165 => 38,  159 => 37,  151 => 33,  149 => 32,  148 => 31,  147 => 30,  146 => 29,  145 => 28,  143 => 26,  137 => 25,  127 => 22,  121 => 21,  114 => 25,  111 => 24,  108 => 21,  102 => 20,  92 => 16,  91 => 5,  89 => 16,  86 => 15,  84 => 14,  78 => 13,  66 => 11,  54 => 10,  47 => 8,  45 => 6,  44 => 5,  43 => 6,  42 => 5,  41 => 6,  39 => 5,  37 => 4,  35 => 3,  33 => 1,  24 => 8,);
    }
}
/* {% form_theme form with easyadmin_config('design.form_theme') %}*/
/* */
/* {% set _entity_config = easyadmin_entity(app.request.query.get('entity')) %}*/
/* {% set _entity_id = attribute(entity, _entity_config.primary_key_field_name) %}*/
/* {% trans_default_domain _entity_config.translation_domain %}*/
/* {% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans, '%entity_id%': _entity_id } %}*/
/* */
/* {% extends _entity_config.templates.layout %}*/
/* */
/* {% block body_id 'easyadmin-edit-' ~ _entity_config.name ~ '-' ~ _entity_id %}*/
/* {% block body_class 'edit edit-' ~ _entity_config.name|lower %}*/
/* */
/* {% block content_title %}*/
/* {% spaceless %}*/
/*     {% set _default_title = 'edit.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}*/
/*     {{ _entity_config.edit.title is defined ? _entity_config.edit.title|trans(_trans_parameters) : _default_title }}*/
/* {% endspaceless %}*/
/* {% endblock %}*/
/* */
/* {% block main %}*/
/*     {% block entity_form %}*/
/*         {{ form(form) }}*/
/*     {% endblock entity_form %}*/
/* */
/*     {% block delete_form %}*/
/*         {{ include('@EasyAdmin/default/includes/_delete_form.html.twig', {*/
/*             view: 'edit',*/
/*             referer: app.request.query.get('referer', ''),*/
/*             delete_form: delete_form,*/
/*             _translation_domain: _entity_config.translation_domain,*/
/*             _trans_parameters: _trans_parameters,*/
/*             _entity_config: _entity_config,*/
/*         }, with_context = false) }}*/
/*     {% endblock delete_form %}*/
/* {% endblock %}*/
/* */
/* {% block body_javascript %}*/
/*     {{ parent() }}*/
/* */
/*     <script type="text/javascript">*/
/*         $(function() {*/
/*             $('.edit-form').areYouSure({ 'message': '{{ 'form.are_you_sure'|trans({}, 'EasyAdminBundle')|e('js') }}' });*/
/* */
/*             $('.form-actions').easyAdminSticky();*/
/* */
/*             $('a.action-delete').on('click', function(e) {*/
/*                 e.preventDefault();*/
/* */
/*                 $('#modal-delete').modal({ backdrop: true, keyboard: true })*/
/*                     .off('click', '#modal-delete-button')*/
/*                     .on('click', '#modal-delete-button', function () {*/
/*                         $('#delete-form').trigger('submit');*/
/*                     });*/
/*             });*/
/*         });*/
/*     </script>*/
/* */
/*     {{ include('@EasyAdmin/default/includes/_select2_widget.html.twig') }}*/
/* {% endblock %}*/
/* */
