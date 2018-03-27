<?php

/* EasyAdminBundle:default:show.html.twig */
class __TwigTemplate_e30bffd6034a0932e6b5c3922319e9ae7a38e801a1b8aa3c067c8e9b8e8ec3df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'content_title' => array($this, 'block_content_title'),
            'main' => array($this, 'block_main'),
            'item_actions' => array($this, 'block_item_actions'),
            'delete_form' => array($this, 'block_delete_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 7
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "EasyAdminBundle:default:show.html.twig", 7);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2ce2c26dead3345f488022603be463864d0400d6b28bff56275aab3e970de0d8 = $this->env->getExtension("native_profiler");
        $__internal_2ce2c26dead3345f488022603be463864d0400d6b28bff56275aab3e970de0d8->enter($__internal_2ce2c26dead3345f488022603be463864d0400d6b28bff56275aab3e970de0d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:show.html.twig"));

        // line 1
        $context["_entity_config"] = $this->env->getExtension('easyadmin_extension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 3
        $context["_entity_id"] = ("" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "primary_key_field_name", array())));
        // line 4
        $context["__internal_a1c711c937ba1e39f4f84f945299353da8a07306fc4d43f86045217c5210d6f5"] = $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 5
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 4
(isset($context["__internal_a1c711c937ba1e39f4f84f945299353da8a07306fc4d43f86045217c5210d6f5"]) ? $context["__internal_a1c711c937ba1e39f4f84f945299353da8a07306fc4d43f86045217c5210d6f5"] : $this->getContext($context, "__internal_a1c711c937ba1e39f4f84f945299353da8a07306fc4d43f86045217c5210d6f5"))), "%entity_label%" => $this->env->getExtension('translator')->trans($this->getAttribute(        // line 5
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 4
(isset($context["__internal_a1c711c937ba1e39f4f84f945299353da8a07306fc4d43f86045217c5210d6f5"]) ? $context["__internal_a1c711c937ba1e39f4f84f945299353da8a07306fc4d43f86045217c5210d6f5"] : $this->getContext($context, "__internal_a1c711c937ba1e39f4f84f945299353da8a07306fc4d43f86045217c5210d6f5"))), "%entity_id%" =>         // line 5
(isset($context["_entity_id"]) ? $context["_entity_id"] : $this->getContext($context, "_entity_id")));
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ce2c26dead3345f488022603be463864d0400d6b28bff56275aab3e970de0d8->leave($__internal_2ce2c26dead3345f488022603be463864d0400d6b28bff56275aab3e970de0d8_prof);

    }

    // line 9
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_8ed3bd7710f17832bdf65f61104dad3917c88fa5dc7dd37e48c6d96de61459ae = $this->env->getExtension("native_profiler");
        $__internal_8ed3bd7710f17832bdf65f61104dad3917c88fa5dc7dd37e48c6d96de61459ae->enter($__internal_8ed3bd7710f17832bdf65f61104dad3917c88fa5dc7dd37e48c6d96de61459ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ((("easyadmin-show-" . $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array())) . "-") . (isset($context["_entity_id"]) ? $context["_entity_id"] : $this->getContext($context, "_entity_id"))), "html", null, true);
        
        $__internal_8ed3bd7710f17832bdf65f61104dad3917c88fa5dc7dd37e48c6d96de61459ae->leave($__internal_8ed3bd7710f17832bdf65f61104dad3917c88fa5dc7dd37e48c6d96de61459ae_prof);

    }

    // line 10
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_449fbfc829c0310dc3c52b99284f29859de22f63be9b23944033f5ef3ff66e8e = $this->env->getExtension("native_profiler");
        $__internal_449fbfc829c0310dc3c52b99284f29859de22f63be9b23944033f5ef3ff66e8e->enter($__internal_449fbfc829c0310dc3c52b99284f29859de22f63be9b23944033f5ef3ff66e8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("show show-" . twig_lower_filter($this->env, $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_449fbfc829c0310dc3c52b99284f29859de22f63be9b23944033f5ef3ff66e8e->leave($__internal_449fbfc829c0310dc3c52b99284f29859de22f63be9b23944033f5ef3ff66e8e_prof);

    }

    // line 12
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_d94b58a0f6712ea9b9a5f3ef27e305338365e2aad3ad19f33ea93fb564295efe = $this->env->getExtension("native_profiler");
        $__internal_d94b58a0f6712ea9b9a5f3ef27e305338365e2aad3ad19f33ea93fb564295efe->enter($__internal_d94b58a0f6712ea9b9a5f3ef27e305338365e2aad3ad19f33ea93fb564295efe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 13
        ob_start();
        // line 14
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('translator')->trans("show.page_title", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "show", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "show", array()), "title", array()), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")),         // line 4
(isset($context["__internal_a1c711c937ba1e39f4f84f945299353da8a07306fc4d43f86045217c5210d6f5"]) ? $context["__internal_a1c711c937ba1e39f4f84f945299353da8a07306fc4d43f86045217c5210d6f5"] : $this->getContext($context, "__internal_a1c711c937ba1e39f4f84f945299353da8a07306fc4d43f86045217c5210d6f5")))) : (        // line 15
(isset($context["_default_title"]) ? $context["_default_title"] : $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_d94b58a0f6712ea9b9a5f3ef27e305338365e2aad3ad19f33ea93fb564295efe->leave($__internal_d94b58a0f6712ea9b9a5f3ef27e305338365e2aad3ad19f33ea93fb564295efe_prof);

    }

    // line 19
    public function block_main($context, array $blocks = array())
    {
        $__internal_87deddd7e7392af59708cdc905a4a581aabf0dbb4ed7ba68ecdc872607457eaa = $this->env->getExtension("native_profiler");
        $__internal_87deddd7e7392af59708cdc905a4a581aabf0dbb4ed7ba68ecdc872607457eaa->enter($__internal_87deddd7e7392af59708cdc905a4a581aabf0dbb4ed7ba68ecdc872607457eaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 20
        echo "    <div class=\"form-horizontal\">
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : $this->getContext($context, "fields")));
        foreach ($context['_seq'] as $context["field"] => $context["metadata"]) {
            // line 22
            echo "            <div class=\"form-group field-";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, (($this->getAttribute($context["metadata"], "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["metadata"], "type", array()), "default")) : ("default"))), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["metadata"], "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["metadata"], "css_class", array()), "")) : ("")), "html", null, true);
            echo "\">
                <label class=\"col-sm-2 control-label\">
                    ";
            // line 24
            echo $this->env->getExtension('translator')->trans((($this->getAttribute($context["metadata"], "label", array())) ? ($this->getAttribute($context["metadata"], "label", array())) : ($this->env->getExtension('form')->humanize($context["field"]))), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")),             // line 4
(isset($context["__internal_a1c711c937ba1e39f4f84f945299353da8a07306fc4d43f86045217c5210d6f5"]) ? $context["__internal_a1c711c937ba1e39f4f84f945299353da8a07306fc4d43f86045217c5210d6f5"] : $this->getContext($context, "__internal_a1c711c937ba1e39f4f84f945299353da8a07306fc4d43f86045217c5210d6f5")));
            // line 24
            echo "
                </label>
                <div class=\"col-sm-10\">
                    <div class=\"form-control\">
                        ";
            // line 28
            echo $this->env->getExtension('easyadmin_extension')->renderEntityField($this->env, "show", $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()), (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), $context["metadata"]);
            echo "
                    </div>

                    ";
            // line 31
            if (((($this->getAttribute($context["metadata"], "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["metadata"], "help", array()), "")) : ("")) != "")) {
                // line 32
                echo "                        <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> ";
                echo $this->env->getExtension('translator')->trans($this->getAttribute($context["metadata"], "help", array()), array(),                 // line 4
(isset($context["__internal_a1c711c937ba1e39f4f84f945299353da8a07306fc4d43f86045217c5210d6f5"]) ? $context["__internal_a1c711c937ba1e39f4f84f945299353da8a07306fc4d43f86045217c5210d6f5"] : $this->getContext($context, "__internal_a1c711c937ba1e39f4f84f945299353da8a07306fc4d43f86045217c5210d6f5")));
                // line 32
                echo "</span>
                    ";
            }
            // line 34
            echo "                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['metadata'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "
        <div class=\"form-group form-actions\">
            <div class=\"col-sm-10 col-sm-offset-2\">
            ";
        // line 40
        $this->displayBlock('item_actions', $context, $blocks);
        // line 52
        echo "            </div>
        </div>
    </div>

    ";
        // line 56
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_87deddd7e7392af59708cdc905a4a581aabf0dbb4ed7ba68ecdc872607457eaa->leave($__internal_87deddd7e7392af59708cdc905a4a581aabf0dbb4ed7ba68ecdc872607457eaa_prof);

    }

    // line 40
    public function block_item_actions($context, array $blocks = array())
    {
        $__internal_9cf03c575b7f14c424fa19390b4b68a412699b13576878c43b7a0f03c18d2c6b = $this->env->getExtension("native_profiler");
        $__internal_9cf03c575b7f14c424fa19390b4b68a412699b13576878c43b7a0f03c18d2c6b->enter($__internal_9cf03c575b7f14c424fa19390b4b68a412699b13576878c43b7a0f03c18d2c6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        // line 41
        echo "                ";
        $context["_show_actions"] = $this->env->getExtension('easyadmin_extension')->getActionsForItem("show", $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()));
        // line 42
        echo "                ";
        $context["_request_parameters"] = array("entity" => $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()), "referer" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer"), "method"));
        // line 43
        echo "
                ";
        // line 44
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_actions.html.twig", array("actions" =>         // line 45
(isset($context["_show_actions"]) ? $context["_show_actions"] : $this->getContext($context, "_show_actions")), "request_parameters" =>         // line 46
(isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), "translation_domain" => $this->getAttribute(        // line 47
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "translation_domain", array()), "trans_parameters" =>         // line 48
(isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "item_id" =>         // line 49
(isset($context["_entity_id"]) ? $context["_entity_id"] : $this->getContext($context, "_entity_id"))), false);
        // line 50
        echo "
            ";
        
        $__internal_9cf03c575b7f14c424fa19390b4b68a412699b13576878c43b7a0f03c18d2c6b->leave($__internal_9cf03c575b7f14c424fa19390b4b68a412699b13576878c43b7a0f03c18d2c6b_prof);

    }

    // line 56
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_b48e326b6f093e4e8da074886d5d41116baef5253f33a98ea3b459ad91a8f867 = $this->env->getExtension("native_profiler");
        $__internal_b48e326b6f093e4e8da074886d5d41116baef5253f33a98ea3b459ad91a8f867->enter($__internal_b48e326b6f093e4e8da074886d5d41116baef5253f33a98ea3b459ad91a8f867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        // line 57
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_delete_form.html.twig", array("view" => "show", "referer" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 59
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer", 1 => ""), "method"), "delete_form" =>         // line 60
(isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "_translation_domain" => $this->getAttribute(        // line 61
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "translation_domain", array()), "_trans_parameters" =>         // line 62
(isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "_entity_config" =>         // line 63
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config"))), false);
        // line 64
        echo "
    ";
        
        $__internal_b48e326b6f093e4e8da074886d5d41116baef5253f33a98ea3b459ad91a8f867->leave($__internal_b48e326b6f093e4e8da074886d5d41116baef5253f33a98ea3b459ad91a8f867_prof);

    }

    // line 68
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_243c1eeb5fbbea2abf0ccd4d06d31ae73e1fe6a56d8e900c088191c8410e22bb = $this->env->getExtension("native_profiler");
        $__internal_243c1eeb5fbbea2abf0ccd4d06d31ae73e1fe6a56d8e900c088191c8410e22bb->enter($__internal_243c1eeb5fbbea2abf0ccd4d06d31ae73e1fe6a56d8e900c088191c8410e22bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 69
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
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
        
        $__internal_243c1eeb5fbbea2abf0ccd4d06d31ae73e1fe6a56d8e900c088191c8410e22bb->leave($__internal_243c1eeb5fbbea2abf0ccd4d06d31ae73e1fe6a56d8e900c088191c8410e22bb_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 69,  226 => 68,  218 => 64,  216 => 63,  215 => 62,  214 => 61,  213 => 60,  212 => 59,  210 => 57,  204 => 56,  196 => 50,  194 => 49,  193 => 48,  192 => 47,  191 => 46,  190 => 45,  189 => 44,  186 => 43,  183 => 42,  180 => 41,  174 => 40,  167 => 56,  161 => 52,  159 => 40,  154 => 37,  146 => 34,  142 => 32,  140 => 4,  138 => 32,  136 => 31,  130 => 28,  124 => 24,  122 => 4,  121 => 24,  113 => 22,  109 => 21,  106 => 20,  100 => 19,  90 => 15,  89 => 4,  87 => 15,  84 => 14,  82 => 13,  76 => 12,  64 => 10,  52 => 9,  45 => 7,  43 => 5,  42 => 4,  41 => 5,  40 => 4,  39 => 5,  37 => 4,  35 => 3,  33 => 1,  24 => 7,);
    }
}
/* {% set _entity_config = easyadmin_entity(app.request.query.get('entity')) %}*/
/* {# the empty string concatenation is needed when the primary key is an object (e.g. an Uuid object) #}*/
/* {% set _entity_id = '' ~ attribute(entity, _entity_config.primary_key_field_name) %}*/
/* {% trans_default_domain _entity_config.translation_domain %}*/
/* {% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans, '%entity_id%': _entity_id } %}*/
/* */
/* {% extends _entity_config.templates.layout %}*/
/* */
/* {% block body_id 'easyadmin-show-' ~ _entity_config.name ~ '-' ~ _entity_id %}*/
/* {% block body_class 'show show-' ~ _entity_config.name|lower %}*/
/* */
/* {% block content_title %}*/
/* {% spaceless %}*/
/*     {% set _default_title = 'show.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}*/
/*     {{ _entity_config.show.title is defined ? _entity_config.show.title|trans(_trans_parameters) : _default_title }}*/
/* {% endspaceless %}*/
/* {% endblock %}*/
/* */
/* {% block main %}*/
/*     <div class="form-horizontal">*/
/*         {% for field, metadata in fields %}*/
/*             <div class="form-group field-{{ metadata.type|default('default')|lower }} {{ metadata.css_class|default('') }}">*/
/*                 <label class="col-sm-2 control-label">*/
/*                     {{ (metadata.label ?: field|humanize)|trans(_trans_parameters)|raw }}*/
/*                 </label>*/
/*                 <div class="col-sm-10">*/
/*                     <div class="form-control">*/
/*                         {{ easyadmin_render_field_for_show_view(_entity_config.name, entity, metadata) }}*/
/*                     </div>*/
/* */
/*                     {% if metadata.help|default('') != '' %}*/
/*                         <span class="help-block"><i class="fa fa-info-circle"></i> {{ metadata.help|trans|raw }}</span>*/
/*                     {% endif %}*/
/*                 </div>*/
/*             </div>*/
/*         {% endfor %}*/
/* */
/*         <div class="form-group form-actions">*/
/*             <div class="col-sm-10 col-sm-offset-2">*/
/*             {% block item_actions %}*/
/*                 {% set _show_actions = easyadmin_get_actions_for_show_item(_entity_config.name) %}*/
/*                 {% set _request_parameters = { entity: _entity_config.name, referer: app.request.query.get('referer') } %}*/
/* */
/*                 {{ include('@EasyAdmin/default/includes/_actions.html.twig', {*/
/*                     actions: _show_actions,*/
/*                     request_parameters: _request_parameters,*/
/*                     translation_domain: _entity_config.translation_domain,*/
/*                     trans_parameters: _trans_parameters,*/
/*                     item_id: _entity_id*/
/*                 }, with_context = false) }}*/
/*             {% endblock item_actions %}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     {% block delete_form %}*/
/*         {{ include('@EasyAdmin/default/includes/_delete_form.html.twig', {*/
/*             view: 'show',*/
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
/* {% endblock %}*/
/* */
