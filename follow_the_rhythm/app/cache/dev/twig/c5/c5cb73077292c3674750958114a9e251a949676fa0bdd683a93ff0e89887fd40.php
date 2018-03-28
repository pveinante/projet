<?php

/* EasyAdminBundle:default:edit.html.twig */
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "EasyAdminBundle:default:edit.html.twig", 8);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_54d117e9665a6db9c6f62630f5182d11f9a02de2347a370f217044baeda07a9a = $this->env->getExtension("native_profiler");
        $__internal_54d117e9665a6db9c6f62630f5182d11f9a02de2347a370f217044baeda07a9a->enter($__internal_54d117e9665a6db9c6f62630f5182d11f9a02de2347a370f217044baeda07a9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:edit.html.twig"));

        // line 1
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $this->env->getExtension('easyadmin_extension')->getBackendConfiguration("design.form_theme"));
        // line 3
        $context["_entity_config"] = $this->env->getExtension('easyadmin_extension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["_entity_id"] = $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "primary_key_field_name", array()));
        // line 5
        $context["__internal_5b4d5c4f700fa4b4b4bbfbcc61d714abd05783bcd93e46796b9c287f4f0f6ec5"] = $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 6
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 5
(isset($context["__internal_5b4d5c4f700fa4b4b4bbfbcc61d714abd05783bcd93e46796b9c287f4f0f6ec5"]) ? $context["__internal_5b4d5c4f700fa4b4b4bbfbcc61d714abd05783bcd93e46796b9c287f4f0f6ec5"] : $this->getContext($context, "__internal_5b4d5c4f700fa4b4b4bbfbcc61d714abd05783bcd93e46796b9c287f4f0f6ec5"))), "%entity_label%" => $this->env->getExtension('translator')->trans($this->getAttribute(        // line 6
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 5
(isset($context["__internal_5b4d5c4f700fa4b4b4bbfbcc61d714abd05783bcd93e46796b9c287f4f0f6ec5"]) ? $context["__internal_5b4d5c4f700fa4b4b4bbfbcc61d714abd05783bcd93e46796b9c287f4f0f6ec5"] : $this->getContext($context, "__internal_5b4d5c4f700fa4b4b4bbfbcc61d714abd05783bcd93e46796b9c287f4f0f6ec5"))), "%entity_id%" =>         // line 6
(isset($context["_entity_id"]) ? $context["_entity_id"] : $this->getContext($context, "_entity_id")));
        // line 8
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54d117e9665a6db9c6f62630f5182d11f9a02de2347a370f217044baeda07a9a->leave($__internal_54d117e9665a6db9c6f62630f5182d11f9a02de2347a370f217044baeda07a9a_prof);

    }

    // line 10
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_746242ca9c62562707e8d5530b7c94f76e70a572df48a1afe39b49408e68a113 = $this->env->getExtension("native_profiler");
        $__internal_746242ca9c62562707e8d5530b7c94f76e70a572df48a1afe39b49408e68a113->enter($__internal_746242ca9c62562707e8d5530b7c94f76e70a572df48a1afe39b49408e68a113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ((("easyadmin-edit-" . $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array())) . "-") . (isset($context["_entity_id"]) ? $context["_entity_id"] : $this->getContext($context, "_entity_id"))), "html", null, true);
        
        $__internal_746242ca9c62562707e8d5530b7c94f76e70a572df48a1afe39b49408e68a113->leave($__internal_746242ca9c62562707e8d5530b7c94f76e70a572df48a1afe39b49408e68a113_prof);

    }

    // line 11
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_b1ecd636b4343716d7b36d427559487f9029a100ffcb3944bc6ff8d7ce4ee16b = $this->env->getExtension("native_profiler");
        $__internal_b1ecd636b4343716d7b36d427559487f9029a100ffcb3944bc6ff8d7ce4ee16b->enter($__internal_b1ecd636b4343716d7b36d427559487f9029a100ffcb3944bc6ff8d7ce4ee16b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("edit edit-" . twig_lower_filter($this->env, $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_b1ecd636b4343716d7b36d427559487f9029a100ffcb3944bc6ff8d7ce4ee16b->leave($__internal_b1ecd636b4343716d7b36d427559487f9029a100ffcb3944bc6ff8d7ce4ee16b_prof);

    }

    // line 13
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_9da38a344d15fe002eba565f846bec58cb3d9dfd21ce7dd2d66f219cdd44be95 = $this->env->getExtension("native_profiler");
        $__internal_9da38a344d15fe002eba565f846bec58cb3d9dfd21ce7dd2d66f219cdd44be95->enter($__internal_9da38a344d15fe002eba565f846bec58cb3d9dfd21ce7dd2d66f219cdd44be95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 14
        ob_start();
        // line 15
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('translator')->trans("edit.page_title", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "edit", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "edit", array()), "title", array()), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")),         // line 5
(isset($context["__internal_5b4d5c4f700fa4b4b4bbfbcc61d714abd05783bcd93e46796b9c287f4f0f6ec5"]) ? $context["__internal_5b4d5c4f700fa4b4b4bbfbcc61d714abd05783bcd93e46796b9c287f4f0f6ec5"] : $this->getContext($context, "__internal_5b4d5c4f700fa4b4b4bbfbcc61d714abd05783bcd93e46796b9c287f4f0f6ec5")))) : (        // line 16
(isset($context["_default_title"]) ? $context["_default_title"] : $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_9da38a344d15fe002eba565f846bec58cb3d9dfd21ce7dd2d66f219cdd44be95->leave($__internal_9da38a344d15fe002eba565f846bec58cb3d9dfd21ce7dd2d66f219cdd44be95_prof);

    }

    // line 20
    public function block_main($context, array $blocks = array())
    {
        $__internal_ad6a275e68525b72b20ccf962d036bc2d11b9f3d33b76d75708f3bda331753a4 = $this->env->getExtension("native_profiler");
        $__internal_ad6a275e68525b72b20ccf962d036bc2d11b9f3d33b76d75708f3bda331753a4->enter($__internal_ad6a275e68525b72b20ccf962d036bc2d11b9f3d33b76d75708f3bda331753a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 21
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_ad6a275e68525b72b20ccf962d036bc2d11b9f3d33b76d75708f3bda331753a4->leave($__internal_ad6a275e68525b72b20ccf962d036bc2d11b9f3d33b76d75708f3bda331753a4_prof);

    }

    // line 21
    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_7fd2be5dac4f65f0fda2d8fd8756a1c691d742b0c393a6d1185cfeb122593825 = $this->env->getExtension("native_profiler");
        $__internal_7fd2be5dac4f65f0fda2d8fd8756a1c691d742b0c393a6d1185cfeb122593825->enter($__internal_7fd2be5dac4f65f0fda2d8fd8756a1c691d742b0c393a6d1185cfeb122593825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 22
        echo "        ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
    ";
        
        $__internal_7fd2be5dac4f65f0fda2d8fd8756a1c691d742b0c393a6d1185cfeb122593825->leave($__internal_7fd2be5dac4f65f0fda2d8fd8756a1c691d742b0c393a6d1185cfeb122593825_prof);

    }

    // line 25
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_3401cccc8eaf8a598d25df29ef6913f87e1ba75e2f99cd11888cd933f5566d7b = $this->env->getExtension("native_profiler");
        $__internal_3401cccc8eaf8a598d25df29ef6913f87e1ba75e2f99cd11888cd933f5566d7b->enter($__internal_3401cccc8eaf8a598d25df29ef6913f87e1ba75e2f99cd11888cd933f5566d7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

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
        
        $__internal_3401cccc8eaf8a598d25df29ef6913f87e1ba75e2f99cd11888cd933f5566d7b->leave($__internal_3401cccc8eaf8a598d25df29ef6913f87e1ba75e2f99cd11888cd933f5566d7b_prof);

    }

    // line 37
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_0a431fa9e45aff5886b6f9747e1179383713211c8d9b2ffab445026c30c12ffd = $this->env->getExtension("native_profiler");
        $__internal_0a431fa9e45aff5886b6f9747e1179383713211c8d9b2ffab445026c30c12ffd->enter($__internal_0a431fa9e45aff5886b6f9747e1179383713211c8d9b2ffab445026c30c12ffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

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
        
        $__internal_0a431fa9e45aff5886b6f9747e1179383713211c8d9b2ffab445026c30c12ffd->leave($__internal_0a431fa9e45aff5886b6f9747e1179383713211c8d9b2ffab445026c30c12ffd_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:edit.html.twig";
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
