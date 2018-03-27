<?php

/* @EasyAdmin/form/bootstrap_3_layout.html.twig */
class __TwigTemplate_da24e024974aa791e9ae4bf6af5c543225994d735530d533864d25f50eb6dc60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "@EasyAdmin/form/bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_widget' => array($this, 'block_form_widget'),
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'collection_row' => array($this, 'block_collection_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
                'empty_collection' => array($this, 'block_empty_collection'),
                'vich_file_row' => array($this, 'block_vich_file_row'),
                'vich_file_widget' => array($this, 'block_vich_file_widget'),
                'vich_image_row' => array($this, 'block_vich_image_row'),
                'vich_image_widget' => array($this, 'block_vich_image_widget'),
                'easyadmin_widget' => array($this, 'block_easyadmin_widget'),
                'item_actions' => array($this, 'block_item_actions'),
                'easyadmin_autocomplete_widget' => array($this, 'block_easyadmin_autocomplete_widget'),
                'easyadmin_autocomplete_inner_label' => array($this, 'block_easyadmin_autocomplete_inner_label'),
                'easyadmin_divider_row' => array($this, 'block_easyadmin_divider_row'),
                'easyadmin_section_row' => array($this, 'block_easyadmin_section_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5768b3ab3f8feea1ac5aff090974311ce7210ec8d16b3ad65efb7f10bbfe935c = $this->env->getExtension("native_profiler");
        $__internal_5768b3ab3f8feea1ac5aff090974311ce7210ec8d16b3ad65efb7f10bbfe935c->enter($__internal_5768b3ab3f8feea1ac5aff090974311ce7210ec8d16b3ad65efb7f10bbfe935c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/form/bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 19
        echo "
";
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('form_widget', $context, $blocks);
        // line 49
        echo "
";
        // line 50
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 61
        echo "
";
        // line 62
        $this->displayBlock('button_widget', $context, $blocks);
        // line 66
        echo "
";
        // line 67
        $this->displayBlock('money_widget', $context, $blocks);
        // line 79
        echo "
";
        // line 80
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 86
        echo "
";
        // line 87
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 100
        echo "
";
        // line 101
        $this->displayBlock('date_widget', $context, $blocks);
        // line 119
        echo "
";
        // line 120
        $this->displayBlock('time_widget', $context, $blocks);
        // line 134
        echo "
";
        // line 135
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 162
        echo "
";
        // line 163
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 184
        echo "
";
        // line 185
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 195
        echo "
";
        // line 196
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 206
        echo "
";
        // line 208
        echo "
";
        // line 209
        $this->displayBlock('form_label', $context, $blocks);
        // line 213
        echo "
";
        // line 214
        $this->displayBlock('choice_label', $context, $blocks);
        // line 219
        echo "
";
        // line 220
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 223
        echo "
";
        // line 224
        $this->displayBlock('radio_label', $context, $blocks);
        // line 227
        echo "
";
        // line 228
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 246
        echo "
";
        // line 248
        echo "
";
        // line 249
        $this->displayBlock('form_row', $context, $blocks);
        // line 271
        echo "
";
        // line 272
        $this->displayBlock('collection_row', $context, $blocks);
        // line 307
        echo "
";
        // line 308
        $this->displayBlock('button_row', $context, $blocks);
        // line 313
        echo "
";
        // line 314
        $this->displayBlock('choice_row', $context, $blocks);
        // line 318
        echo "
";
        // line 319
        $this->displayBlock('date_row', $context, $blocks);
        // line 323
        echo "
";
        // line 324
        $this->displayBlock('time_row', $context, $blocks);
        // line 328
        echo "
";
        // line 329
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 333
        echo "
";
        // line 334
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 340
        echo "
";
        // line 341
        $this->displayBlock('radio_row', $context, $blocks);
        // line 347
        echo "
";
        // line 349
        $this->displayBlock('form_errors', $context, $blocks);
        // line 367
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 380
        $this->displayBlock('empty_collection', $context, $blocks);
        // line 385
        echo "
";
        // line 386
        $this->displayBlock('vich_file_row', $context, $blocks);
        // line 390
        echo "
";
        // line 391
        $this->displayBlock('vich_file_widget', $context, $blocks);
        // line 412
        echo "
";
        // line 413
        $this->displayBlock('vich_image_row', $context, $blocks);
        // line 417
        echo "
";
        // line 418
        $this->displayBlock('vich_image_widget', $context, $blocks);
        // line 440
        echo "
";
        // line 442
        $this->displayBlock('easyadmin_widget', $context, $blocks);
        // line 524
        echo "
";
        // line 526
        $this->displayBlock('easyadmin_autocomplete_widget', $context, $blocks);
        // line 536
        echo "
";
        // line 537
        $this->displayBlock('easyadmin_autocomplete_inner_label', $context, $blocks);
        // line 541
        echo "
";
        // line 543
        $this->displayBlock('easyadmin_divider_row', $context, $blocks);
        // line 548
        echo "
";
        // line 550
        $this->displayBlock('easyadmin_section_row', $context, $blocks);
        
        $__internal_5768b3ab3f8feea1ac5aff090974311ce7210ec8d16b3ad65efb7f10bbfe935c->leave($__internal_5768b3ab3f8feea1ac5aff090974311ce7210ec8d16b3ad65efb7f10bbfe935c_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_827111a109010322fece7b8db0d6905de99f3d3b717637e0d40ddc4ecd5869e3 = $this->env->getExtension("native_profiler");
        $__internal_827111a109010322fece7b8db0d6905de99f3d3b717637e0d40ddc4ecd5869e3->enter($__internal_827111a109010322fece7b8db0d6905de99f3d3b717637e0d40ddc4ecd5869e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        if (("easyadmin" == twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : $this->getContext($context, "block_prefixes")),  -2)))) {
            // line 5
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_join_filter(array(0 => (((((            // line 7
array_key_exists("_easyadmin_form_type", $context)) ? (_twig_default_filter((isset($context["_easyadmin_form_type"]) ? $context["_easyadmin_form_type"] : $this->getContext($context, "_easyadmin_form_type")), "")) : ("")) == "horizontal")) ? ("form-horizontal") : ("form-vertical")), 1 => (($this->getAttribute(            // line 8
(isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")), 2 => ($this->getAttribute(            // line 9
(isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "view", array()) . "-form")), " "), "data-view" => $this->getAttribute(            // line 11
(isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "view", array()), "data-entity" => $this->getAttribute($this->getAttribute(            // line 12
(isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "name", array()), "data-entity-id" => $this->getAttribute(            // line 13
(isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "primary_key_field_name", array()))));
            // line 15
            echo "    ";
        }
        // line 17
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_827111a109010322fece7b8db0d6905de99f3d3b717637e0d40ddc4ecd5869e3->leave($__internal_827111a109010322fece7b8db0d6905de99f3d3b717637e0d40ddc4ecd5869e3_prof);

    }

    // line 22
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_f757ac40d5f71e2c7ff3f0a2c2ec6c215ead7f753c17846a0f4d6fb3877006e5 = $this->env->getExtension("native_profiler");
        $__internal_f757ac40d5f71e2c7ff3f0a2c2ec6c215ead7f753c17846a0f4d6fb3877006e5->enter($__internal_f757ac40d5f71e2c7ff3f0a2c2ec6c215ead7f753c17846a0f4d6fb3877006e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 23
        $this->displayParentBlock("form_widget", $context, $blocks);
        // line 25
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array()), false)) : (false))) {
            // line 26
            echo "        ";
            ob_start();
            // line 27
            echo "            \$(function() {
            if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

            var containerDiv = \$('#";
            // line 30
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "').parents('.form-group:first');
            var parentDiv = containerDiv.parents('[data-prototype]:first');
            containerDiv.remove();
            parentDiv.trigger('easyadmin.collection.item-deleted');

            if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {
                \$(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);
            }
            });
        ";
            $context["remove_item_javascript"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 40
            echo "
        <div class=\"text-right field-collection-item-action\">
            <a href=\"#\" onclick=\"";
            // line 42
            echo (isset($context["remove_item_javascript"]) ? $context["remove_item_javascript"] : $this->getContext($context, "remove_item_javascript"));
            echo "\" class=\"text-danger\">
                <i class=\"fa fa-remove\"></i>
                ";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.remove_item", array(), "EasyAdminBundle"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
        
        $__internal_f757ac40d5f71e2c7ff3f0a2c2ec6c215ead7f753c17846a0f4d6fb3877006e5->leave($__internal_f757ac40d5f71e2c7ff3f0a2c2ec6c215ead7f753c17846a0f4d6fb3877006e5_prof);

    }

    // line 50
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_6e11423612e22e3e013e6233b83974a8e18e16a84c3ad80ed4b5ed368105f40d = $this->env->getExtension("native_profiler");
        $__internal_6e11423612e22e3e013e6233b83974a8e18e16a84c3ad80ed4b5ed368105f40d->enter($__internal_6e11423612e22e3e013e6233b83974a8e18e16a84c3ad80ed4b5ed368105f40d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 51
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 52
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 54
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_6e11423612e22e3e013e6233b83974a8e18e16a84c3ad80ed4b5ed368105f40d->leave($__internal_6e11423612e22e3e013e6233b83974a8e18e16a84c3ad80ed4b5ed368105f40d_prof);

    }

    // line 57
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_de29e2c84d2f0136bee6ae8eed4ecfa0f405f587985ab1b6ca1bbddef589a00f = $this->env->getExtension("native_profiler");
        $__internal_de29e2c84d2f0136bee6ae8eed4ecfa0f405f587985ab1b6ca1bbddef589a00f->enter($__internal_de29e2c84d2f0136bee6ae8eed4ecfa0f405f587985ab1b6ca1bbddef589a00f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 58
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 59
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_de29e2c84d2f0136bee6ae8eed4ecfa0f405f587985ab1b6ca1bbddef589a00f->leave($__internal_de29e2c84d2f0136bee6ae8eed4ecfa0f405f587985ab1b6ca1bbddef589a00f_prof);

    }

    // line 62
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_606123a27d731f9af496cad00d77fc03f89244da28d82d1dcbaa3de5187fec02 = $this->env->getExtension("native_profiler");
        $__internal_606123a27d731f9af496cad00d77fc03f89244da28d82d1dcbaa3de5187fec02->enter($__internal_606123a27d731f9af496cad00d77fc03f89244da28d82d1dcbaa3de5187fec02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 63
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 64
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_606123a27d731f9af496cad00d77fc03f89244da28d82d1dcbaa3de5187fec02->leave($__internal_606123a27d731f9af496cad00d77fc03f89244da28d82d1dcbaa3de5187fec02_prof);

    }

    // line 67
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_9ea301f50d2ea3635b27a8fcc8e09857bab9ee16d38d206b58f1767571c9db0b = $this->env->getExtension("native_profiler");
        $__internal_9ea301f50d2ea3635b27a8fcc8e09857bab9ee16d38d206b58f1767571c9db0b->enter($__internal_9ea301f50d2ea3635b27a8fcc8e09857bab9ee16d38d206b58f1767571c9db0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 68
        echo "<div class=\"input-group\">
        ";
        // line 69
        $context["prepend"] = ("{{" == twig_slice($this->env, (isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), 0, 2));
        // line 70
        echo "        ";
        if ( !(isset($context["prepend"]) ? $context["prepend"] : $this->getContext($context, "prepend"))) {
            // line 71
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 73
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 74
        if ((isset($context["prepend"]) ? $context["prepend"] : $this->getContext($context, "prepend"))) {
            // line 75
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 77
        echo "    </div>";
        
        $__internal_9ea301f50d2ea3635b27a8fcc8e09857bab9ee16d38d206b58f1767571c9db0b->leave($__internal_9ea301f50d2ea3635b27a8fcc8e09857bab9ee16d38d206b58f1767571c9db0b_prof);

    }

    // line 80
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_07e35ce5fc89602a1acb112a61c7286d2de5743861e7e0344536c6d758a27c8b = $this->env->getExtension("native_profiler");
        $__internal_07e35ce5fc89602a1acb112a61c7286d2de5743861e7e0344536c6d758a27c8b->enter($__internal_07e35ce5fc89602a1acb112a61c7286d2de5743861e7e0344536c6d758a27c8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 81
        echo "<div class=\"input-group\">";
        // line 82
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 83
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_07e35ce5fc89602a1acb112a61c7286d2de5743861e7e0344536c6d758a27c8b->leave($__internal_07e35ce5fc89602a1acb112a61c7286d2de5743861e7e0344536c6d758a27c8b_prof);

    }

    // line 87
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_ecab08ffe4308e5d1148b7e707f9b87ecd616e4e301a0b5bf1c7ff2543df6a09 = $this->env->getExtension("native_profiler");
        $__internal_ecab08ffe4308e5d1148b7e707f9b87ecd616e4e301a0b5bf1c7ff2543df6a09->enter($__internal_ecab08ffe4308e5d1148b7e707f9b87ecd616e4e301a0b5bf1c7ff2543df6a09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 88
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 89
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 91
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 92
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 93
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            // line 94
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            // line 95
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 96
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 97
            echo "</div>";
        }
        
        $__internal_ecab08ffe4308e5d1148b7e707f9b87ecd616e4e301a0b5bf1c7ff2543df6a09->leave($__internal_ecab08ffe4308e5d1148b7e707f9b87ecd616e4e301a0b5bf1c7ff2543df6a09_prof);

    }

    // line 101
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_c43feabc59863247d3deea630a2b84bd09841a1556e75d1e0479d37ff25e12a1 = $this->env->getExtension("native_profiler");
        $__internal_c43feabc59863247d3deea630a2b84bd09841a1556e75d1e0479d37ff25e12a1->enter($__internal_c43feabc59863247d3deea630a2b84bd09841a1556e75d1e0479d37ff25e12a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 102
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 103
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 105
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 106
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 107
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 109
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 110
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 111
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 112
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 114
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 115
                echo "</div>";
            }
        }
        
        $__internal_c43feabc59863247d3deea630a2b84bd09841a1556e75d1e0479d37ff25e12a1->leave($__internal_c43feabc59863247d3deea630a2b84bd09841a1556e75d1e0479d37ff25e12a1_prof);

    }

    // line 120
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_75529e893463e49c00735e1bce040a224065ddc6521075de7acbbc6e84195db7 = $this->env->getExtension("native_profiler");
        $__internal_75529e893463e49c00735e1bce040a224065ddc6521075de7acbbc6e84195db7->enter($__internal_75529e893463e49c00735e1bce040a224065ddc6521075de7acbbc6e84195db7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 121
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 122
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 124
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 125
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 126
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 128
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget');
            echo ":";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget');
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 129
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 130
                echo "</div>";
            }
        }
        
        $__internal_75529e893463e49c00735e1bce040a224065ddc6521075de7acbbc6e84195db7->leave($__internal_75529e893463e49c00735e1bce040a224065ddc6521075de7acbbc6e84195db7_prof);

    }

    // line 135
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_25f04325eeb60e6d6fbcec1c60a546933e00fe0f090b7e54a6db093802f57c36 = $this->env->getExtension("native_profiler");
        $__internal_25f04325eeb60e6d6fbcec1c60a546933e00fe0f090b7e54a6db093802f57c36->enter($__internal_25f04325eeb60e6d6fbcec1c60a546933e00fe0f090b7e54a6db093802f57c36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 136
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 137
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        // line 138
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array()), false)) : (false))) {
            // line 139
            echo "        ";
            ob_start();
            // line 140
            echo "            \$(function() {
            if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

            var containerDiv = \$('#";
            // line 143
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "').parents('.form-group:first');
            var parentDiv = containerDiv.parents('[data-prototype]:first');
            containerDiv.remove();
            parentDiv.trigger('easyadmin.collection.item-deleted');

            if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {
            \$(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);
            }
            });
        ";
            $context["remove_item_javascript"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 153
            echo "
        <div class=\"text-right field-collection-item-action\">
            <a href=\"#\" onclick=\"";
            // line 155
            echo (isset($context["remove_item_javascript"]) ? $context["remove_item_javascript"] : $this->getContext($context, "remove_item_javascript"));
            echo "\" class=\"text-danger\">
                <i class=\"fa fa-remove\"></i>
                ";
            // line 157
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.remove_item", array(), "EasyAdminBundle"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
        
        $__internal_25f04325eeb60e6d6fbcec1c60a546933e00fe0f090b7e54a6db093802f57c36->leave($__internal_25f04325eeb60e6d6fbcec1c60a546933e00fe0f090b7e54a6db093802f57c36_prof);

    }

    // line 163
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_e901bf267e21010ed70154233d3a23cc0127a2c66fd23b9e8a0d734f492822d9 = $this->env->getExtension("native_profiler");
        $__internal_e901bf267e21010ed70154233d3a23cc0127a2c66fd23b9e8a0d734f492822d9->enter($__internal_e901bf267e21010ed70154233d3a23cc0127a2c66fd23b9e8a0d734f492822d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 164
        if (twig_in_filter("-inline", (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) {
            // line 165
            echo "<div class=\"control-group\">";
            // line 166
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 167
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 168
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 169
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 172
            echo "</div>";
        } else {
            // line 174
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 175
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 176
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 177
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 178
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 181
            echo "</div>";
        }
        
        $__internal_e901bf267e21010ed70154233d3a23cc0127a2c66fd23b9e8a0d734f492822d9->leave($__internal_e901bf267e21010ed70154233d3a23cc0127a2c66fd23b9e8a0d734f492822d9_prof);

    }

    // line 185
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_9dedc21fb62c491073028b782d5e2c7799327f48eab1d844b74d1d97a0885e6c = $this->env->getExtension("native_profiler");
        $__internal_9dedc21fb62c491073028b782d5e2c7799327f48eab1d844b74d1d97a0885e6c->enter($__internal_9dedc21fb62c491073028b782d5e2c7799327f48eab1d844b74d1d97a0885e6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 186
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 187
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 188
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 190
            echo "<div class=\"checkbox\">";
            // line 191
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 192
            echo "</div>";
        }
        
        $__internal_9dedc21fb62c491073028b782d5e2c7799327f48eab1d844b74d1d97a0885e6c->leave($__internal_9dedc21fb62c491073028b782d5e2c7799327f48eab1d844b74d1d97a0885e6c_prof);

    }

    // line 196
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_83a87bb916edbb563b3758ce683778e31558851c38dc97a6d241a14a19ee9da7 = $this->env->getExtension("native_profiler");
        $__internal_83a87bb916edbb563b3758ce683778e31558851c38dc97a6d241a14a19ee9da7->enter($__internal_83a87bb916edbb563b3758ce683778e31558851c38dc97a6d241a14a19ee9da7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 197
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 198
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 199
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 201
            echo "<div class=\"radio\">";
            // line 202
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 203
            echo "</div>";
        }
        
        $__internal_83a87bb916edbb563b3758ce683778e31558851c38dc97a6d241a14a19ee9da7->leave($__internal_83a87bb916edbb563b3758ce683778e31558851c38dc97a6d241a14a19ee9da7_prof);

    }

    // line 209
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_9b85fb6dbf0b4cae2e8936ef04485e2468af055eb696d8b5ea6904134e1314fb = $this->env->getExtension("native_profiler");
        $__internal_9b85fb6dbf0b4cae2e8936ef04485e2468af055eb696d8b5ea6904134e1314fb->enter($__internal_9b85fb6dbf0b4cae2e8936ef04485e2468af055eb696d8b5ea6904134e1314fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 210
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " control-label"))));
        // line 211
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_9b85fb6dbf0b4cae2e8936ef04485e2468af055eb696d8b5ea6904134e1314fb->leave($__internal_9b85fb6dbf0b4cae2e8936ef04485e2468af055eb696d8b5ea6904134e1314fb_prof);

    }

    // line 214
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_bf217d230c5aa29f8878e068f2ef4a5abfbe462f42048adc0871c85d49f2b674 = $this->env->getExtension("native_profiler");
        $__internal_bf217d230c5aa29f8878e068f2ef4a5abfbe462f42048adc0871c85d49f2b674->enter($__internal_bf217d230c5aa29f8878e068f2ef4a5abfbe462f42048adc0871c85d49f2b674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 216
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(twig_replace_filter((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 217
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_bf217d230c5aa29f8878e068f2ef4a5abfbe462f42048adc0871c85d49f2b674->leave($__internal_bf217d230c5aa29f8878e068f2ef4a5abfbe462f42048adc0871c85d49f2b674_prof);

    }

    // line 220
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_42fd47abb596a471a733b9df9872dcf91b51277a1ed7200a574a5359ba448890 = $this->env->getExtension("native_profiler");
        $__internal_42fd47abb596a471a733b9df9872dcf91b51277a1ed7200a574a5359ba448890->enter($__internal_42fd47abb596a471a733b9df9872dcf91b51277a1ed7200a574a5359ba448890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 221
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_42fd47abb596a471a733b9df9872dcf91b51277a1ed7200a574a5359ba448890->leave($__internal_42fd47abb596a471a733b9df9872dcf91b51277a1ed7200a574a5359ba448890_prof);

    }

    // line 224
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_74a21e49d962557cdf1f33cc77ab0892d068165d0f1797204ec7814fa18eec0a = $this->env->getExtension("native_profiler");
        $__internal_74a21e49d962557cdf1f33cc77ab0892d068165d0f1797204ec7814fa18eec0a->enter($__internal_74a21e49d962557cdf1f33cc77ab0892d068165d0f1797204ec7814fa18eec0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 225
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_74a21e49d962557cdf1f33cc77ab0892d068165d0f1797204ec7814fa18eec0a->leave($__internal_74a21e49d962557cdf1f33cc77ab0892d068165d0f1797204ec7814fa18eec0a_prof);

    }

    // line 228
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_6e570ed2d62404695ad1b277738a1a06e4e15af08947ff738e491cebbd24b23a = $this->env->getExtension("native_profiler");
        $__internal_6e570ed2d62404695ad1b277738a1a06e4e15af08947ff738e491cebbd24b23a->enter($__internal_6e570ed2d62404695ad1b277738a1a06e4e15af08947ff738e491cebbd24b23a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 229
        echo "    ";
        // line 230
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 231
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 232
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
                // line 233
                echo "        ";
            }
            // line 234
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 235
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class"))))));
                // line 236
                echo "        ";
            }
            // line 237
            echo "        ";
            if (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false) && twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))))) {
                // line 238
                echo "            ";
                $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                // line 239
                echo "        ";
            }
            // line 240
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 241
            echo (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget"));
            // line 242
            echo twig_escape_filter($this->env, (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) ? ($this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))) ? ((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))) : ($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "translation_domain", array()))))) : ("")), "html", null, true);
            // line 243
            echo "</label>
    ";
        }
        
        $__internal_6e570ed2d62404695ad1b277738a1a06e4e15af08947ff738e491cebbd24b23a->leave($__internal_6e570ed2d62404695ad1b277738a1a06e4e15af08947ff738e491cebbd24b23a_prof);

    }

    // line 249
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_136cb10d70ce8c4e2480da713566efca73226205cf3d9867daef5b5024fe8f2b = $this->env->getExtension("native_profiler");
        $__internal_136cb10d70ce8c4e2480da713566efca73226205cf3d9867daef5b5024fe8f2b->enter($__internal_136cb10d70ce8c4e2480da713566efca73226205cf3d9867daef5b5024fe8f2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 250
        $context["_field_type"] = (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "fieldType", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "fieldType", array()), "default")) : ("default"));
        // line 251
        echo "    <div class=\"form-group ";
        if ((( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : $this->getContext($context, "force_error")), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid")))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">";
        // line 252
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 253
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 255
        if ((twig_in_filter((isset($context["_field_type"]) ? $context["_field_type"] : $this->getContext($context, "_field_type")), array(0 => "datetime", 1 => "date", 2 => "time", 3 => "birthday")) && (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "nullable", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "nullable", array()), false)) : (false)))) {
            // line 256
            echo "            <div class=\"nullable-control\">
                <label>
                    <input type=\"checkbox\" ";
            // line 258
            if ((null === (isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")))) {
                echo "checked=\"checked\"";
            }
            echo ">
                    ";
            // line 259
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.nullable_field", array(), "EasyAdminBundle"), "html", null, true);
            echo "
                </label>
            </div>
        ";
        }
        // line 264
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 266
        if (((($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "help", array()), "")) : ("")) != "")) {
            // line 267
            echo "            <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> ";
            echo $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "field", array()), "help", array()), array(), $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "translation_domain", array()));
            echo "</span>
        ";
        }
        // line 269
        echo "    </div>";
        
        $__internal_136cb10d70ce8c4e2480da713566efca73226205cf3d9867daef5b5024fe8f2b->leave($__internal_136cb10d70ce8c4e2480da713566efca73226205cf3d9867daef5b5024fe8f2b_prof);

    }

    // line 272
    public function block_collection_row($context, array $blocks = array())
    {
        $__internal_82e8d2c782ec210190f5b102d14814f44bad4eb759bb8684e439237e3091c8fc = $this->env->getExtension("native_profiler");
        $__internal_82e8d2c782ec210190f5b102d14814f44bad4eb759bb8684e439237e3091c8fc->enter($__internal_82e8d2c782ec210190f5b102d14814f44bad4eb759bb8684e439237e3091c8fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_row"));

        // line 273
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "

    ";
        // line 275
        if (((array_key_exists("allow_add", $context)) ? (_twig_default_filter((isset($context["allow_add"]) ? $context["allow_add"] : $this->getContext($context, "allow_add")), false)) : (false))) {
            // line 276
            echo "        ";
            ob_start();
            // line 277
            echo "            \$(function() {
                if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

                var collection = \$('#";
            // line 280
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "');
                // Use a counter to avoid having the same index more than once
                var numItems = collection.data('count') || collection.children('div.form-group').length;

                collection.prev('.collection-empty').remove();

                var newItem = collection.attr('data-prototype')
                    .replace(/\\>__name__label__\\</g, '>' + numItems + '<')
                    .replace(/_";
            // line 288
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "___name__/g, '_";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "_' + numItems)
                    .replace(/";
            // line 289
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "\\]\\[__name__\\]/g, '";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "][' + numItems + ']')
                ;

                // Increment the counter and store it in the collection
                collection.data('count', ++numItems);

                collection.append(newItem).trigger('easyadmin.collection.item-added');
            });
        ";
            $context["js_add_item"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 298
            echo "
        <div class=\"text-right field-collection-action\">
            <a href=\"#\" onclick=\"";
            // line 300
            echo (isset($context["js_add_item"]) ? $context["js_add_item"] : $this->getContext($context, "js_add_item"));
            echo "\" class=\"text-primary\">
                <i class=\"fa fa-plus-square\"></i>
                ";
            // line 302
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((((twig_length_filter($this->env, (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form"))) == 0)) ? ("action.add_new_item") : ("action.add_another_item")), array(), "EasyAdminBundle"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
        
        $__internal_82e8d2c782ec210190f5b102d14814f44bad4eb759bb8684e439237e3091c8fc->leave($__internal_82e8d2c782ec210190f5b102d14814f44bad4eb759bb8684e439237e3091c8fc_prof);

    }

    // line 308
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_a48a4f81ffc5714a91403c3ed13a2480f0624cd229f8102490e716371585a6fb = $this->env->getExtension("native_profiler");
        $__internal_a48a4f81ffc5714a91403c3ed13a2480f0624cd229f8102490e716371585a6fb->enter($__internal_a48a4f81ffc5714a91403c3ed13a2480f0624cd229f8102490e716371585a6fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 309
        echo "<div class=\"form-group field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\">";
        // line 310
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 311
        echo "</div>";
        
        $__internal_a48a4f81ffc5714a91403c3ed13a2480f0624cd229f8102490e716371585a6fb->leave($__internal_a48a4f81ffc5714a91403c3ed13a2480f0624cd229f8102490e716371585a6fb_prof);

    }

    // line 314
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_ade376aaeb4df19426ddc139455916184f6f80ce1a7145f955313bb643d03ff5 = $this->env->getExtension("native_profiler");
        $__internal_ade376aaeb4df19426ddc139455916184f6f80ce1a7145f955313bb643d03ff5->enter($__internal_ade376aaeb4df19426ddc139455916184f6f80ce1a7145f955313bb643d03ff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 315
        $context["force_error"] = true;
        // line 316
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_ade376aaeb4df19426ddc139455916184f6f80ce1a7145f955313bb643d03ff5->leave($__internal_ade376aaeb4df19426ddc139455916184f6f80ce1a7145f955313bb643d03ff5_prof);

    }

    // line 319
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_0f6a77903eaa40a2476879dbc36cf709eba11440694079374dfedff9c13e67a1 = $this->env->getExtension("native_profiler");
        $__internal_0f6a77903eaa40a2476879dbc36cf709eba11440694079374dfedff9c13e67a1->enter($__internal_0f6a77903eaa40a2476879dbc36cf709eba11440694079374dfedff9c13e67a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 320
        $context["force_error"] = true;
        // line 321
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_0f6a77903eaa40a2476879dbc36cf709eba11440694079374dfedff9c13e67a1->leave($__internal_0f6a77903eaa40a2476879dbc36cf709eba11440694079374dfedff9c13e67a1_prof);

    }

    // line 324
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_8f958a500945d886fdface9232531b6d5dc8dce9f266483cd7316725b5ee19cb = $this->env->getExtension("native_profiler");
        $__internal_8f958a500945d886fdface9232531b6d5dc8dce9f266483cd7316725b5ee19cb->enter($__internal_8f958a500945d886fdface9232531b6d5dc8dce9f266483cd7316725b5ee19cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 325
        $context["force_error"] = true;
        // line 326
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_8f958a500945d886fdface9232531b6d5dc8dce9f266483cd7316725b5ee19cb->leave($__internal_8f958a500945d886fdface9232531b6d5dc8dce9f266483cd7316725b5ee19cb_prof);

    }

    // line 329
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_ed5c478d880279a1b0349e69a2a5930d0a9e75caffcfa35eaf1ae1cd1c2bf25f = $this->env->getExtension("native_profiler");
        $__internal_ed5c478d880279a1b0349e69a2a5930d0a9e75caffcfa35eaf1ae1cd1c2bf25f->enter($__internal_ed5c478d880279a1b0349e69a2a5930d0a9e75caffcfa35eaf1ae1cd1c2bf25f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 330
        $context["force_error"] = true;
        // line 331
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_ed5c478d880279a1b0349e69a2a5930d0a9e75caffcfa35eaf1ae1cd1c2bf25f->leave($__internal_ed5c478d880279a1b0349e69a2a5930d0a9e75caffcfa35eaf1ae1cd1c2bf25f_prof);

    }

    // line 334
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_53b29fc3a8903d9131c2a1f08c863da618b192ec39c19245969d130ea1f8b00f = $this->env->getExtension("native_profiler");
        $__internal_53b29fc3a8903d9131c2a1f08c863da618b192ec39c19245969d130ea1f8b00f->enter($__internal_53b29fc3a8903d9131c2a1f08c863da618b192ec39c19245969d130ea1f8b00f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 335
        echo "<div class=\"form-group ";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">";
        // line 336
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 337
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 338
        echo "</div>";
        
        $__internal_53b29fc3a8903d9131c2a1f08c863da618b192ec39c19245969d130ea1f8b00f->leave($__internal_53b29fc3a8903d9131c2a1f08c863da618b192ec39c19245969d130ea1f8b00f_prof);

    }

    // line 341
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_27ed884be6d4d9be0e7f599f4b09b396d1033ab5eec1b878154bf6027b57c49d = $this->env->getExtension("native_profiler");
        $__internal_27ed884be6d4d9be0e7f599f4b09b396d1033ab5eec1b878154bf6027b57c49d->enter($__internal_27ed884be6d4d9be0e7f599f4b09b396d1033ab5eec1b878154bf6027b57c49d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 342
        echo "<div class=\"form-group ";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">";
        // line 343
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 344
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 345
        echo "</div>";
        
        $__internal_27ed884be6d4d9be0e7f599f4b09b396d1033ab5eec1b878154bf6027b57c49d->leave($__internal_27ed884be6d4d9be0e7f599f4b09b396d1033ab5eec1b878154bf6027b57c49d_prof);

    }

    // line 349
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_7f3b32619a4304fe9d53c4f46307566d7d86857b053bda9394ebb4ef37cbb03c = $this->env->getExtension("native_profiler");
        $__internal_7f3b32619a4304fe9d53c4f46307566d7d86857b053bda9394ebb4ef37cbb03c->enter($__internal_7f3b32619a4304fe9d53c4f46307566d7d86857b053bda9394ebb4ef37cbb03c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 350
        echo "    ";
        $context["error_count"] = twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
        // line 351
        echo "    ";
        if (((isset($context["error_count"]) ? $context["error_count"] : $this->getContext($context, "error_count")) >= 1)) {
            // line 352
            echo "        <div class=\"error-block\">
            <span class=\"label label-danger\">";
            // line 353
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->transchoice("errors", (isset($context["error_count"]) ? $context["error_count"] : $this->getContext($context, "error_count")), array(), "EasyAdminBundle"), "html", null, true);
            echo "</span>
            ";
            // line 354
            if (((isset($context["error_count"]) ? $context["error_count"] : $this->getContext($context, "error_count")) == 1)) {
                // line 355
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute(twig_first($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))), "message", array()), "html", null, true);
                echo "
            ";
            } else {
                // line 357
                echo "                <ul>
                    ";
                // line 358
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 359
                    echo "                        <li>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                    echo "</li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 361
                echo "                </ul>
            ";
            }
            // line 363
            echo "        </div>
    ";
        }
        
        $__internal_7f3b32619a4304fe9d53c4f46307566d7d86857b053bda9394ebb4ef37cbb03c->leave($__internal_7f3b32619a4304fe9d53c4f46307566d7d86857b053bda9394ebb4ef37cbb03c_prof);

    }

    // line 367
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_2488efe43b75c50ef7fe3a3906ed05308e989f856c7a5b1ecfcced8040cfb05f = $this->env->getExtension("native_profiler");
        $__internal_2488efe43b75c50ef7fe3a3906ed05308e989f856c7a5b1ecfcced8040cfb05f->enter($__internal_2488efe43b75c50ef7fe3a3906ed05308e989f856c7a5b1ecfcced8040cfb05f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 370
        echo "    ";
        if ((twig_test_iterable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) && twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
            // line 371
            echo "        ";
            $this->displayBlock("empty_collection", $context, $blocks);
            echo "
    ";
        }
        // line 373
        echo "    ";
        if (((twig_test_iterable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) && twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) || $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "prototype", array(), "any", true, true))) {
            // line 374
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-empty-collection" => $this->renderBlock("empty_collection", $context, $blocks)));
            // line 375
            echo "    ";
        }
        // line 376
        echo "
    ";
        // line 377
        $this->displayParentBlock("form_widget_compound", $context, $blocks);
        
        $__internal_2488efe43b75c50ef7fe3a3906ed05308e989f856c7a5b1ecfcced8040cfb05f->leave($__internal_2488efe43b75c50ef7fe3a3906ed05308e989f856c7a5b1ecfcced8040cfb05f_prof);

    }

    // line 380
    public function block_empty_collection($context, array $blocks = array())
    {
        $__internal_421f3e5938679f7a7a2f365014ad5604ed6b9778112600d91bacb50c5399bfc4 = $this->env->getExtension("native_profiler");
        $__internal_421f3e5938679f7a7a2f365014ad5604ed6b9778112600d91bacb50c5399bfc4->enter($__internal_421f3e5938679f7a7a2f365014ad5604ed6b9778112600d91bacb50c5399bfc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "empty_collection"));

        // line 381
        echo "    <div class=\"empty collection-empty\">
        ";
        // line 382
        echo twig_include($this->env, $context, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "templates", array()), "label_empty", array()));
        echo "
    </div>
";
        
        $__internal_421f3e5938679f7a7a2f365014ad5604ed6b9778112600d91bacb50c5399bfc4->leave($__internal_421f3e5938679f7a7a2f365014ad5604ed6b9778112600d91bacb50c5399bfc4_prof);

    }

    // line 386
    public function block_vich_file_row($context, array $blocks = array())
    {
        $__internal_65460e721b67a321b6635ed1beb0c523ff2f200151edaae890a8797550385f84 = $this->env->getExtension("native_profiler");
        $__internal_65460e721b67a321b6635ed1beb0c523ff2f200151edaae890a8797550385f84->enter($__internal_65460e721b67a321b6635ed1beb0c523ff2f200151edaae890a8797550385f84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        // line 387
        echo "    ";
        $context["force_error"] = true;
        // line 388
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
        
        $__internal_65460e721b67a321b6635ed1beb0c523ff2f200151edaae890a8797550385f84->leave($__internal_65460e721b67a321b6635ed1beb0c523ff2f200151edaae890a8797550385f84_prof);

    }

    // line 391
    public function block_vich_file_widget($context, array $blocks = array())
    {
        $__internal_2c8d7c417ed51cfcc63ea6de57a63e36a19d14266af587d267e622c029863965 = $this->env->getExtension("native_profiler");
        $__internal_2c8d7c417ed51cfcc63ea6de57a63e36a19d14266af587d267e622c029863965->enter($__internal_2c8d7c417ed51cfcc63ea6de57a63e36a19d14266af587d267e622c029863965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        // line 392
        ob_start();
        // line 393
        echo "    <div class=\"easyadmin-vich-file\">
        ";
        // line 394
        if ( !twig_test_empty(((array_key_exists("download_uri", $context)) ? (_twig_default_filter((isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")), "")) : ("")))) {
            // line 395
            echo "            ";
            $context["download_title"] = ((twig_last($this->env, twig_split_filter($this->env, (isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")), "/"))) ? (twig_last($this->env, twig_split_filter($this->env, (isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")), "/"))) : ($this->env->getExtension('translator')->trans("download", array(), "VichUploaderBundle")));
            // line 396
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["download_title"]) ? $context["download_title"] : $this->getContext($context, "download_title")), "html", null, true);
            echo "</a>
        ";
        }
        // line 398
        echo "
        <div class=\"row\">
            ";
        // line 400
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "delete", array(), "any", true, true)) {
            // line 401
            echo "            <div class=\"col-sm-3 col-md-2\">
                ";
            // line 402
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delete", array()), 'row', array("label" => "action.delete"));
            echo "
            </div>
            ";
        }
        // line 405
        echo "            <div class=\"";
        echo (($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "delete", array(), "any", true, true)) ? ("col-sm-9 col-md-10") : ("col-sm-12"));
        echo "\">
                ";
        // line 406
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
            </div>
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_2c8d7c417ed51cfcc63ea6de57a63e36a19d14266af587d267e622c029863965->leave($__internal_2c8d7c417ed51cfcc63ea6de57a63e36a19d14266af587d267e622c029863965_prof);

    }

    // line 413
    public function block_vich_image_row($context, array $blocks = array())
    {
        $__internal_438855a93a99f06748e7517dd20759fba5d0f3d223628ccb63cf10e5c79ae676 = $this->env->getExtension("native_profiler");
        $__internal_438855a93a99f06748e7517dd20759fba5d0f3d223628ccb63cf10e5c79ae676->enter($__internal_438855a93a99f06748e7517dd20759fba5d0f3d223628ccb63cf10e5c79ae676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        // line 414
        echo "    ";
        $context["force_error"] = true;
        // line 415
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
        
        $__internal_438855a93a99f06748e7517dd20759fba5d0f3d223628ccb63cf10e5c79ae676->leave($__internal_438855a93a99f06748e7517dd20759fba5d0f3d223628ccb63cf10e5c79ae676_prof);

    }

    // line 418
    public function block_vich_image_widget($context, array $blocks = array())
    {
        $__internal_c4374a1056478cc88c99f3e193142a346070d8c38dc57233a972f7cbdff41a89 = $this->env->getExtension("native_profiler");
        $__internal_c4374a1056478cc88c99f3e193142a346070d8c38dc57233a972f7cbdff41a89->enter($__internal_c4374a1056478cc88c99f3e193142a346070d8c38dc57233a972f7cbdff41a89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        // line 419
        ob_start();
        // line 420
        echo "    <div class=\"easyadmin-vich-image\">
        ";
        // line 421
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
        ";
        // line 422
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "delete", array(), "any", true, true)) {
            // line 423
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delete", array()), 'row', array("label" => "action.delete"));
            echo "
        ";
        }
        // line 425
        echo "
        ";
        // line 426
        if ( !twig_test_empty(((array_key_exists("download_uri", $context)) ? (_twig_default_filter((isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")), "")) : ("")))) {
            // line 427
            echo "            ";
            $context["_lightbox_id"] = ("easyadmin-lightbox-" . (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")));
            // line 428
            echo "
            <a href=\"#\" class=\"easyadmin-thumbnail\" data-featherlight=\"#";
            // line 429
            echo twig_escape_filter($this->env, (isset($context["_lightbox_id"]) ? $context["_lightbox_id"] : $this->getContext($context, "_lightbox_id")), "html", null, true);
            echo "\" data-featherlight-close-on-click=\"anywhere\">
                <img src=\"";
            // line 430
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri"))), "html", null, true);
            echo "\">
            </a>

            <div id=\"";
            // line 433
            echo twig_escape_filter($this->env, (isset($context["_lightbox_id"]) ? $context["_lightbox_id"] : $this->getContext($context, "_lightbox_id")), "html", null, true);
            echo "\" class=\"easyadmin-lightbox\">
                <img src=\"";
            // line 434
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri"))), "html", null, true);
            echo "\">
            </div>
        ";
        }
        // line 437
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_c4374a1056478cc88c99f3e193142a346070d8c38dc57233a972f7cbdff41a89->leave($__internal_c4374a1056478cc88c99f3e193142a346070d8c38dc57233a972f7cbdff41a89_prof);

    }

    // line 442
    public function block_easyadmin_widget($context, array $blocks = array())
    {
        $__internal_537957020835799cbe16981995a7f3c0153ec62ea0193edd5b47a3199fbc20c7 = $this->env->getExtension("native_profiler");
        $__internal_537957020835799cbe16981995a7f3c0153ec62ea0193edd5b47a3199fbc20c7->enter($__internal_537957020835799cbe16981995a7f3c0153ec62ea0193edd5b47a3199fbc20c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_widget"));

        // line 443
        echo "    ";
        $context["_translation_domain"] = $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "translation_domain", array());
        // line 444
        echo "    ";
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "name", array())), "%entity_label%" => $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "label", array())));
        // line 445
        echo "
    ";
        // line 446
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "errors", array())) > 0)) {
            // line 447
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "
    ";
        }
        // line 449
        echo "
    <input type=\"hidden\" name=\"referer\" value=\"";
        // line 450
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer", 1 => ""), "method"), "html", null, true);
        echo "\"/>

    <div class=\"row\">
        ";
        // line 453
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["easyadmin_form_groups"]) ? $context["easyadmin_form_groups"] : $this->getContext($context, "easyadmin_form_groups")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["group_name"] => $context["group_config"]) {
            // line 454
            echo "            <div class=\"field-group col-xs-12 ";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["group_config"], "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "css_class", array()), "")) : ("")), "html", null, true);
            echo "\">
                <div class=\"box box-default\">
                    ";
            // line 456
            if (((($this->getAttribute($context["group_config"], "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "label", array()), false)) : (false)) || (($this->getAttribute($context["group_config"], "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "icon", array()), false)) : (false)))) {
                // line 457
                echo "                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\">
                                ";
                // line 459
                if ((($this->getAttribute($context["group_config"], "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "icon", array()), false)) : (false))) {
                    // line 460
                    echo "                                    <i class=\"fa fa-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["group_config"], "icon", array()), "html", null, true);
                    echo "\"></i>
                                ";
                }
                // line 462
                echo "                                ";
                echo $this->env->getExtension('translator')->trans($this->getAttribute($context["group_config"], "label", array()), array(), (isset($context["_translation_domain"]) ? $context["_translation_domain"] : $this->getContext($context, "_translation_domain")));
                echo "
                            </h3>
                        </div>
                    ";
            }
            // line 466
            echo "
                    <div class=\"box-body\">
                        ";
            // line 468
            if ((($this->getAttribute($context["group_config"], "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "help", array()), false)) : (false))) {
                // line 469
                echo "                            <p class=\"help-block\">";
                echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["group_config"], "help", array()), array(), (isset($context["_translation_domain"]) ? $context["_translation_domain"] : $this->getContext($context, "_translation_domain"))), "html", null, true));
                echo "</p>
                        ";
            }
            // line 471
            echo "
                        <div class=\"row\">
                            ";
            // line 473
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                if ((!twig_in_filter("hidden", $this->getAttribute($this->getAttribute($context["field"], "vars", array()), "block_prefixes", array())) && ($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array()), "easyadmin", array()), "form_group", array()) == $context["group_name"]))) {
                    // line 474
                    echo "                                <div class=\"col-xs-12 ";
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
                    echo "\">
                                    ";
                    // line 475
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["field"], 'row');
                    echo "
                                </div>
                            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 478
            echo "                        </div>
                    </div>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 483
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                if (!twig_in_filter("hidden", $this->getAttribute($this->getAttribute($context["field"], "vars", array()), "block_prefixes", array()))) {
                    // line 484
                    echo "                <div class=\"col-xs-12 ";
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
                    echo "\">
                    ";
                    // line 485
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["field"], 'row');
                    echo "
                </div>
            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 488
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_name'], $context['group_config'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 489
        echo "    </div>

    <div class=\"row\">
        <div class=\"col-xs-12 form-actions\">
            <div class=\"form-group\">
                <div id=\"form-actions-row\">
                    ";
        // line 495
        $this->displayBlock('item_actions', $context, $blocks);
        // line 519
        echo "                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_537957020835799cbe16981995a7f3c0153ec62ea0193edd5b47a3199fbc20c7->leave($__internal_537957020835799cbe16981995a7f3c0153ec62ea0193edd5b47a3199fbc20c7_prof);

    }

    // line 495
    public function block_item_actions($context, array $blocks = array())
    {
        $__internal_91aaf313a864d0199972bacf0e813c6ac9d334aba1ead68d088053b55a5fa65a = $this->env->getExtension("native_profiler");
        $__internal_91aaf313a864d0199972bacf0e813c6ac9d334aba1ead68d088053b55a5fa65a->enter($__internal_91aaf313a864d0199972bacf0e813c6ac9d334aba1ead68d088053b55a5fa65a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        // line 496
        echo "                        ";
        // line 497
        echo "                        <button type=\"submit\" class=\"btn btn-primary action-save\">
                            <i class=\"fa fa-save\"></i> ";
        // line 498
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.save", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), (isset($context["_translation_domain"]) ? $context["_translation_domain"] : $this->getContext($context, "_translation_domain"))), "html", null, true);
        echo "
                        </button>

                        ";
        // line 501
        $context["_entity_actions"] = ((($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "view", array()) == "new")) ? ($this->env->getExtension('easyadmin_extension')->getActionsForItem("new", $this->getAttribute($this->getAttribute(        // line 502
(isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "name", array()))) : ($this->env->getExtension('easyadmin_extension')->getActionsForItem("edit", $this->getAttribute($this->getAttribute(        // line 503
(isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "name", array()))));
        // line 504
        echo "
                        ";
        // line 505
        $context["_entity_id"] = ((($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "view", array()) == "new")) ? (null) : ($this->getAttribute($this->getAttribute(        // line 507
(isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "item", array()), $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "primary_key_field_name", array()))));
        // line 508
        echo "
                        ";
        // line 509
        $context["_request_parameters"] = array("entity" => $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "name", array()), "referer" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer"), "method"));
        // line 510
        echo "
                        ";
        // line 511
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_actions.html.twig", array("actions" =>         // line 512
(isset($context["_entity_actions"]) ? $context["_entity_actions"] : $this->getContext($context, "_entity_actions")), "request_parameters" =>         // line 513
(isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), "translation_domain" =>         // line 514
(isset($context["_translation_domain"]) ? $context["_translation_domain"] : $this->getContext($context, "_translation_domain")), "trans_parameters" =>         // line 515
(isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "item_id" =>         // line 516
(isset($context["_entity_id"]) ? $context["_entity_id"] : $this->getContext($context, "_entity_id"))), false);
        // line 517
        echo "
                    ";
        
        $__internal_91aaf313a864d0199972bacf0e813c6ac9d334aba1ead68d088053b55a5fa65a->leave($__internal_91aaf313a864d0199972bacf0e813c6ac9d334aba1ead68d088053b55a5fa65a_prof);

    }

    // line 526
    public function block_easyadmin_autocomplete_widget($context, array $blocks = array())
    {
        $__internal_7d1693a5627096d1bd173a840acf6c20d27ee668de5ad33439ef7d7559cd3eb1 = $this->env->getExtension("native_profiler");
        $__internal_7d1693a5627096d1bd173a840acf6c20d27ee668de5ad33439ef7d7559cd3eb1->enter($__internal_7d1693a5627096d1bd173a840acf6c20d27ee668de5ad33439ef7d7559cd3eb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_autocomplete_widget"));

        // line 527
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "autocomplete", array()), 'widget', array("attr" => twig_array_merge(        // line 528
(isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-easyadmin-autocomplete-url" => $this->env->getExtension('routing')->getPath("easyadmin", array("action" => "autocomplete", "entity" =>         // line 531
(isset($context["autocomplete_entity_name"]) ? $context["autocomplete_entity_name"] : $this->getContext($context, "autocomplete_entity_name"))))))));
        // line 534
        echo "
";
        
        $__internal_7d1693a5627096d1bd173a840acf6c20d27ee668de5ad33439ef7d7559cd3eb1->leave($__internal_7d1693a5627096d1bd173a840acf6c20d27ee668de5ad33439ef7d7559cd3eb1_prof);

    }

    // line 537
    public function block_easyadmin_autocomplete_inner_label($context, array $blocks = array())
    {
        $__internal_fbbdc10f247812748a4cab41185e23a3b51b765a4e00763b1287b800fee0012f = $this->env->getExtension("native_profiler");
        $__internal_fbbdc10f247812748a4cab41185e23a3b51b765a4e00763b1287b800fee0012f->enter($__internal_fbbdc10f247812748a4cab41185e23a3b51b765a4e00763b1287b800fee0012f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_autocomplete_inner_label"));

        // line 538
        echo "    ";
        $context["name"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()), "vars", array()), "name", array());
        // line 539
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_fbbdc10f247812748a4cab41185e23a3b51b765a4e00763b1287b800fee0012f->leave($__internal_fbbdc10f247812748a4cab41185e23a3b51b765a4e00763b1287b800fee0012f_prof);

    }

    // line 543
    public function block_easyadmin_divider_row($context, array $blocks = array())
    {
        $__internal_d170e718042a7c63e633a838d8f04751c33afc63dc4608af106fef6d671ffdd7 = $this->env->getExtension("native_profiler");
        $__internal_d170e718042a7c63e633a838d8f04751c33afc63dc4608af106fef6d671ffdd7->enter($__internal_d170e718042a7c63e633a838d8f04751c33afc63dc4608af106fef6d671ffdd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_divider_row"));

        // line 544
        echo "    <div class=\"field-divider\">
        <hr>
    </div>
";
        
        $__internal_d170e718042a7c63e633a838d8f04751c33afc63dc4608af106fef6d671ffdd7->leave($__internal_d170e718042a7c63e633a838d8f04751c33afc63dc4608af106fef6d671ffdd7_prof);

    }

    // line 550
    public function block_easyadmin_section_row($context, array $blocks = array())
    {
        $__internal_ca8a3d6716782e3e65ff8de66c6e083f4fefb097b81501756dc6072e4db61232 = $this->env->getExtension("native_profiler");
        $__internal_ca8a3d6716782e3e65ff8de66c6e083f4fefb097b81501756dc6072e4db61232->enter($__internal_ca8a3d6716782e3e65ff8de66c6e083f4fefb097b81501756dc6072e4db61232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_section_row"));

        // line 551
        echo "    ";
        $context["_translation_domain"] = $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "translation_domain", array());
        // line 552
        echo "    <div class=\"field-section ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\">
        ";
        // line 553
        if (((($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "label", array()), false)) : (false)) || (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "icon", array()), false)) : (false)))) {
            // line 554
            echo "            <h2>
                ";
            // line 555
            if ((($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "icon", array()), false)) : (false))) {
                echo "<i class=\"fa fa-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "field", array()), "icon", array()), "html", null, true);
                echo "\"></i>";
            }
            // line 556
            echo "                ";
            echo $this->env->getExtension('translator')->trans((($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "label", array()), "")) : ("")), array(), (isset($context["_translation_domain"]) ? $context["_translation_domain"] : $this->getContext($context, "_translation_domain")));
            echo "
            </h2>
        ";
        }
        // line 559
        echo "
        ";
        // line 560
        if ((($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "help", array()), false)) : (false))) {
            // line 561
            echo "            <p class=\"help-block\">";
            echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "field", array()), "help", array()), array(), (isset($context["_translation_domain"]) ? $context["_translation_domain"] : $this->getContext($context, "_translation_domain"))), "html", null, true));
            echo "</p>
        ";
        }
        // line 563
        echo "    </div>
";
        
        $__internal_ca8a3d6716782e3e65ff8de66c6e083f4fefb097b81501756dc6072e4db61232->leave($__internal_ca8a3d6716782e3e65ff8de66c6e083f4fefb097b81501756dc6072e4db61232_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/form/bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1679 => 563,  1673 => 561,  1671 => 560,  1668 => 559,  1661 => 556,  1655 => 555,  1652 => 554,  1650 => 553,  1645 => 552,  1642 => 551,  1636 => 550,  1626 => 544,  1620 => 543,  1613 => 539,  1610 => 538,  1604 => 537,  1596 => 534,  1594 => 531,  1593 => 528,  1591 => 527,  1585 => 526,  1577 => 517,  1575 => 516,  1574 => 515,  1573 => 514,  1572 => 513,  1571 => 512,  1570 => 511,  1567 => 510,  1565 => 509,  1562 => 508,  1560 => 507,  1559 => 505,  1556 => 504,  1554 => 503,  1553 => 502,  1552 => 501,  1546 => 498,  1543 => 497,  1541 => 496,  1535 => 495,  1524 => 519,  1522 => 495,  1514 => 489,  1508 => 488,  1498 => 485,  1493 => 484,  1487 => 483,  1478 => 478,  1468 => 475,  1463 => 474,  1458 => 473,  1454 => 471,  1448 => 469,  1446 => 468,  1442 => 466,  1434 => 462,  1428 => 460,  1426 => 459,  1422 => 457,  1420 => 456,  1414 => 454,  1409 => 453,  1403 => 450,  1400 => 449,  1394 => 447,  1392 => 446,  1389 => 445,  1386 => 444,  1383 => 443,  1377 => 442,  1368 => 437,  1362 => 434,  1358 => 433,  1352 => 430,  1348 => 429,  1345 => 428,  1342 => 427,  1340 => 426,  1337 => 425,  1331 => 423,  1329 => 422,  1325 => 421,  1322 => 420,  1320 => 419,  1314 => 418,  1304 => 415,  1301 => 414,  1295 => 413,  1282 => 406,  1277 => 405,  1271 => 402,  1268 => 401,  1266 => 400,  1262 => 398,  1254 => 396,  1251 => 395,  1249 => 394,  1246 => 393,  1244 => 392,  1238 => 391,  1228 => 388,  1225 => 387,  1219 => 386,  1209 => 382,  1206 => 381,  1200 => 380,  1193 => 377,  1190 => 376,  1187 => 375,  1184 => 374,  1181 => 373,  1175 => 371,  1172 => 370,  1166 => 367,  1157 => 363,  1153 => 361,  1144 => 359,  1140 => 358,  1137 => 357,  1131 => 355,  1129 => 354,  1125 => 353,  1122 => 352,  1119 => 351,  1116 => 350,  1110 => 349,  1103 => 345,  1101 => 344,  1099 => 343,  1091 => 342,  1085 => 341,  1078 => 338,  1076 => 337,  1074 => 336,  1066 => 335,  1060 => 334,  1053 => 331,  1051 => 330,  1045 => 329,  1038 => 326,  1036 => 325,  1030 => 324,  1023 => 321,  1021 => 320,  1015 => 319,  1008 => 316,  1006 => 315,  1000 => 314,  993 => 311,  991 => 310,  985 => 309,  979 => 308,  967 => 302,  962 => 300,  958 => 298,  944 => 289,  938 => 288,  927 => 280,  922 => 277,  919 => 276,  917 => 275,  911 => 273,  905 => 272,  898 => 269,  892 => 267,  890 => 266,  888 => 264,  881 => 259,  875 => 258,  871 => 256,  869 => 255,  867 => 253,  865 => 252,  857 => 251,  855 => 250,  849 => 249,  840 => 243,  838 => 242,  836 => 241,  821 => 240,  818 => 239,  815 => 238,  812 => 237,  809 => 236,  806 => 235,  803 => 234,  800 => 233,  797 => 232,  794 => 231,  791 => 230,  789 => 229,  783 => 228,  776 => 225,  770 => 224,  763 => 221,  757 => 220,  750 => 217,  748 => 216,  742 => 214,  735 => 211,  733 => 210,  727 => 209,  719 => 203,  717 => 202,  715 => 201,  712 => 199,  710 => 198,  708 => 197,  702 => 196,  694 => 192,  692 => 191,  690 => 190,  687 => 188,  685 => 187,  683 => 186,  677 => 185,  669 => 181,  663 => 178,  662 => 177,  661 => 176,  657 => 175,  653 => 174,  650 => 172,  644 => 169,  643 => 168,  642 => 167,  638 => 166,  636 => 165,  634 => 164,  628 => 163,  616 => 157,  611 => 155,  607 => 153,  594 => 143,  589 => 140,  586 => 139,  584 => 138,  582 => 137,  580 => 136,  574 => 135,  565 => 130,  562 => 129,  554 => 128,  549 => 126,  547 => 125,  545 => 124,  542 => 122,  540 => 121,  534 => 120,  525 => 115,  523 => 114,  521 => 112,  520 => 111,  519 => 110,  518 => 109,  513 => 107,  511 => 106,  509 => 105,  506 => 103,  504 => 102,  498 => 101,  490 => 97,  488 => 96,  486 => 95,  484 => 94,  482 => 93,  478 => 92,  476 => 91,  473 => 89,  471 => 88,  465 => 87,  457 => 83,  455 => 82,  453 => 81,  447 => 80,  440 => 77,  434 => 75,  432 => 74,  430 => 73,  424 => 71,  421 => 70,  419 => 69,  416 => 68,  410 => 67,  403 => 64,  401 => 63,  395 => 62,  388 => 59,  386 => 58,  380 => 57,  373 => 54,  370 => 52,  368 => 51,  362 => 50,  350 => 44,  345 => 42,  341 => 40,  328 => 30,  323 => 27,  320 => 26,  318 => 25,  316 => 23,  310 => 22,  303 => 17,  300 => 15,  298 => 13,  297 => 12,  296 => 11,  295 => 9,  294 => 8,  293 => 7,  291 => 5,  289 => 4,  283 => 3,  276 => 550,  273 => 548,  271 => 543,  268 => 541,  266 => 537,  263 => 536,  261 => 526,  258 => 524,  256 => 442,  253 => 440,  251 => 418,  248 => 417,  246 => 413,  243 => 412,  241 => 391,  238 => 390,  236 => 386,  233 => 385,  231 => 380,  229 => 367,  227 => 349,  224 => 347,  222 => 341,  219 => 340,  217 => 334,  214 => 333,  212 => 329,  209 => 328,  207 => 324,  204 => 323,  202 => 319,  199 => 318,  197 => 314,  194 => 313,  192 => 308,  189 => 307,  187 => 272,  184 => 271,  182 => 249,  179 => 248,  176 => 246,  174 => 228,  171 => 227,  169 => 224,  166 => 223,  164 => 220,  161 => 219,  159 => 214,  156 => 213,  154 => 209,  151 => 208,  148 => 206,  146 => 196,  143 => 195,  141 => 185,  138 => 184,  136 => 163,  133 => 162,  131 => 135,  128 => 134,  126 => 120,  123 => 119,  121 => 101,  118 => 100,  116 => 87,  113 => 86,  111 => 80,  108 => 79,  106 => 67,  103 => 66,  101 => 62,  98 => 61,  96 => 57,  93 => 56,  91 => 50,  88 => 49,  86 => 22,  83 => 21,  80 => 19,  78 => 3,  75 => 2,  14 => 1,);
    }
}
/* {% use 'form_div_layout.html.twig' %}*/
/* */
/* {% block form_start -%}*/
/*     {% if 'easyadmin' == block_prefixes|slice(-2)|first %}*/
/*         {% set attr = attr|merge({*/
/*             'class': [*/
/*                 _easyadmin_form_type|default('') == 'horizontal' ? 'form-horizontal' : 'form-vertical',*/
/*                 attr.class|default(''),*/
/*                 easyadmin.view ~ '-form'*/
/*             ]|join(' '),*/
/*             'data-view': easyadmin.view,*/
/*             'data-entity': easyadmin.entity.name,*/
/*             'data-entity-id': attribute(value, easyadmin.entity.primary_key_field_name),*/
/*         }) %}*/
/*     {% endif %}*/
/* */
/*     {{- parent() -}}*/
/* {%- endblock form_start %}*/
/* */
/* {# Widgets #}*/
/* */
/* {% block form_widget %}*/
/*     {{- parent() -}}*/
/* */
/*     {% if form.parent.vars.allow_delete|default(false) %}*/
/*         {% set remove_item_javascript %}*/
/*             $(function() {*/
/*             if (event.preventDefault) event.preventDefault(); else event.returnValue = false;*/
/* */
/*             var containerDiv = $('#{{ id }}').parents('.form-group:first');*/
/*             var parentDiv = containerDiv.parents('[data-prototype]:first');*/
/*             containerDiv.remove();*/
/*             parentDiv.trigger('easyadmin.collection.item-deleted');*/
/* */
/*             if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {*/
/*                 $(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);*/
/*             }*/
/*             });*/
/*         {% endset %}*/
/* */
/*         <div class="text-right field-collection-item-action">*/
/*             <a href="#" onclick="{{ remove_item_javascript|raw }}" class="text-danger">*/
/*                 <i class="fa fa-remove"></i>*/
/*                 {{ 'action.remove_item'|trans({}, 'EasyAdminBundle') }}*/
/*             </a>*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock form_widget %}*/
/* */
/* {% block form_widget_simple -%}*/
/*     {% if type is not defined or type not in ['file', 'hidden'] %}*/
/*         {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}*/
/*     {% endif %}*/
/*     {{- parent() -}}*/
/* {%- endblock form_widget_simple %}*/
/* */
/* {% block textarea_widget -%}*/
/*     {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}*/
/*     {{- parent() -}}*/
/* {%- endblock textarea_widget %}*/
/* */
/* {% block button_widget -%}*/
/*     {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}*/
/*     {{- parent() -}}*/
/* {%- endblock %}*/
/* */
/* {% block money_widget -%}*/
/*     <div class="input-group">*/
/*         {% set prepend = '{{' == money_pattern[0:2] %}*/
/*         {% if not prepend %}*/
/*             <span class="input-group-addon">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>*/
/*         {% endif %}*/
/*         {{- block('form_widget_simple') -}}*/
/*         {% if prepend %}*/
/*             <span class="input-group-addon">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>*/
/*         {% endif %}*/
/*     </div>*/
/* {%- endblock money_widget %}*/
/* */
/* {% block percent_widget -%}*/
/*     <div class="input-group">*/
/*         {{- block('form_widget_simple') -}}*/
/*         <span class="input-group-addon">%</span>*/
/*     </div>*/
/* {%- endblock percent_widget %}*/
/* */
/* {% block datetime_widget -%}*/
/*     {% if widget == 'single_text' %}*/
/*         {{- block('form_widget_simple') -}}*/
/*     {% else -%}*/
/*         {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}*/
/*         <div {{ block('widget_container_attributes') }}>*/
/*             {{- form_errors(form.date) -}}*/
/*             {{- form_errors(form.time) -}}*/
/*             {{- form_widget(form.date, { datetime: true } ) -}}*/
/*             {{- form_widget(form.time, { datetime: true } ) -}}*/
/*         </div>*/
/*     {%- endif %}*/
/* {%- endblock datetime_widget %}*/
/* */
/* {% block date_widget -%}*/
/*     {% if widget == 'single_text' %}*/
/*         {{- block('form_widget_simple') -}}*/
/*     {% else -%}*/
/*         {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}*/
/*         {% if datetime is not defined or not datetime -%}*/
/*             <div {{ block('widget_container_attributes') -}}>*/
/*         {%- endif %}*/
/*             {{- date_pattern|replace({*/
/*                 '{{ year }}': form_widget(form.year),*/
/*                 '{{ month }}': form_widget(form.month),*/
/*                 '{{ day }}': form_widget(form.day),*/
/*             })|raw -}}*/
/*         {% if datetime is not defined or not datetime -%}*/
/*             </div>*/
/*         {%- endif -%}*/
/*     {% endif %}*/
/* {%- endblock date_widget %}*/
/* */
/* {% block time_widget -%}*/
/*     {% if widget == 'single_text' %}*/
/*         {{- block('form_widget_simple') -}}*/
/*     {% else -%}*/
/*         {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}*/
/*         {% if datetime is not defined or false == datetime -%}*/
/*             <div {{ block('widget_container_attributes') -}}>*/
/*         {%- endif -%}*/
/*         {{- form_widget(form.hour) }}:{{ form_widget(form.minute) }}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}*/
/*         {% if datetime is not defined or false == datetime -%}*/
/*             </div>*/
/*         {%- endif -%}*/
/*     {% endif %}*/
/* {%- endblock time_widget %}*/
/* */
/* {% block choice_widget_collapsed -%}*/
/*     {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}*/
/*     {{- parent() -}}*/
/*     {% if form.parent.vars.allow_delete|default(false) %}*/
/*         {% set remove_item_javascript %}*/
/*             $(function() {*/
/*             if (event.preventDefault) event.preventDefault(); else event.returnValue = false;*/
/* */
/*             var containerDiv = $('#{{ id }}').parents('.form-group:first');*/
/*             var parentDiv = containerDiv.parents('[data-prototype]:first');*/
/*             containerDiv.remove();*/
/*             parentDiv.trigger('easyadmin.collection.item-deleted');*/
/* */
/*             if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {*/
/*             $(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);*/
/*             }*/
/*             });*/
/*         {% endset %}*/
/* */
/*         <div class="text-right field-collection-item-action">*/
/*             <a href="#" onclick="{{ remove_item_javascript|raw }}" class="text-danger">*/
/*                 <i class="fa fa-remove"></i>*/
/*                 {{ 'action.remove_item'|trans({}, 'EasyAdminBundle') }}*/
/*             </a>*/
/*         </div>*/
/*     {% endif %}*/
/* {%- endblock %}*/
/* */
/* {% block choice_widget_expanded -%}*/
/*     {% if '-inline' in label_attr.class|default('') -%}*/
/*         <div class="control-group">*/
/*             {%- for child in form %}*/
/*                 {{- form_widget(child, {*/
/*                     parent_label_class: label_attr.class|default(''),*/
/*                     translation_domain: choice_translation_domain,*/
/*                 }) -}}*/
/*             {% endfor -%}*/
/*         </div>*/
/*     {%- else -%}*/
/*         <div {{ block('widget_container_attributes') }}>*/
/*             {%- for child in form %}*/
/*                 {{- form_widget(child, {*/
/*                     parent_label_class: label_attr.class|default(''),*/
/*                     translation_domain: choice_translation_domain,*/
/*                 }) -}}*/
/*             {% endfor -%}*/
/*         </div>*/
/*     {%- endif %}*/
/* {%- endblock choice_widget_expanded %}*/
/* */
/* {% block checkbox_widget -%}*/
/*     {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}*/
/*     {% if 'checkbox-inline' in parent_label_class %}*/
/*         {{- form_label(form, null, { widget: parent() }) -}}*/
/*     {% else -%}*/
/*         <div class="checkbox">*/
/*             {{- form_label(form, null, { widget: parent() }) -}}*/
/*         </div>*/
/*     {%- endif %}*/
/* {%- endblock checkbox_widget %}*/
/* */
/* {% block radio_widget -%}*/
/*     {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}*/
/*     {% if 'radio-inline' in parent_label_class %}*/
/*         {{- form_label(form, null, { widget: parent() }) -}}*/
/*     {% else -%}*/
/*         <div class="radio">*/
/*             {{- form_label(form, null, { widget: parent() }) -}}*/
/*         </div>*/
/*     {%- endif %}*/
/* {%- endblock radio_widget %}*/
/* */
/* {# Labels #}*/
/* */
/* {% block form_label -%}*/
/*     {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}*/
/*     {{- parent() -}}*/
/* {%- endblock form_label %}*/
/* */
/* {% block choice_label -%}*/
/*     {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}*/
/*     {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}*/
/*     {{- block('form_label') -}}*/
/* {% endblock %}*/
/* */
/* {% block checkbox_label -%}*/
/*     {{- block('checkbox_radio_label') -}}*/
/* {%- endblock checkbox_label %}*/
/* */
/* {% block radio_label -%}*/
/*     {{- block('checkbox_radio_label') -}}*/
/* {%- endblock radio_label %}*/
/* */
/* {% block checkbox_radio_label %}*/
/*     {# Do no display the label if widget is not defined in order to prevent double label rendering #}*/
/*     {% if widget is defined %}*/
/*         {% if required %}*/
/*             {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}*/
/*         {% endif %}*/
/*         {% if parent_label_class is defined %}*/
/*             {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}*/
/*         {% endif %}*/
/*         {% if label is not same as(false) and label is empty %}*/
/*             {% set label = name|humanize %}*/
/*         {% endif %}*/
/*         <label{% for attrname, attrvalue in label_attr %} {{ attrname }}="{{ attrvalue }}"{% endfor %}>*/
/*             {{- widget|raw -}}*/
/*             {{- label is not same as(false) ? label|trans({}, translation_domain ?: easyadmin.entity.translation_domain) -}}*/
/*         </label>*/
/*     {% endif %}*/
/* {% endblock checkbox_radio_label %}*/
/* */
/* {# Rows #}*/
/* */
/* {% block form_row -%}*/
/*     {% set _field_type = easyadmin.field.fieldType|default('default') %}*/
/*     <div class="form-group {% if (not compound or force_error|default(false)) and not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}">*/
/*         {{- form_label(form) -}}*/
/*         {{- form_widget(form) -}}*/
/* */
/*         {% if _field_type in ['datetime', 'date', 'time', 'birthday'] and easyadmin.field.nullable|default(false) %}*/
/*             <div class="nullable-control">*/
/*                 <label>*/
/*                     <input type="checkbox" {% if data is null %}checked="checked"{% endif %}>*/
/*                     {{ 'label.nullable_field'|trans({}, 'EasyAdminBundle')}}*/
/*                 </label>*/
/*             </div>*/
/*         {% endif %}*/
/* */
/*         {{- form_errors(form) -}}*/
/* */
/*         {% if easyadmin.field.help|default('') != '' %}*/
/*             <span class="help-block"><i class="fa fa-info-circle"></i> {{ easyadmin.field.help|trans(domain = easyadmin.entity.translation_domain)|raw }}</span>*/
/*         {% endif %}*/
/*     </div>*/
/* {%- endblock form_row %}*/
/* */
/* {% block collection_row %}*/
/*     {{ block('form_row') }}*/
/* */
/*     {% if allow_add|default(false) %}*/
/*         {% set js_add_item %}*/
/*             $(function() {*/
/*                 if (event.preventDefault) event.preventDefault(); else event.returnValue = false;*/
/* */
/*                 var collection = $('#{{ id }}');*/
/*                 // Use a counter to avoid having the same index more than once*/
/*                 var numItems = collection.data('count') || collection.children('div.form-group').length;*/
/* */
/*                 collection.prev('.collection-empty').remove();*/
/* */
/*                 var newItem = collection.attr('data-prototype')*/
/*                     .replace(/\>__name__label__\</g, '>' + numItems + '<')*/
/*                     .replace(/_{{ name }}___name__/g, '_{{ name }}_' + numItems)*/
/*                     .replace(/{{ name }}\]\[__name__\]/g, '{{ name }}][' + numItems + ']')*/
/*                 ;*/
/* */
/*                 // Increment the counter and store it in the collection*/
/*                 collection.data('count', ++numItems);*/
/* */
/*                 collection.append(newItem).trigger('easyadmin.collection.item-added');*/
/*             });*/
/*         {% endset %}*/
/* */
/*         <div class="text-right field-collection-action">*/
/*             <a href="#" onclick="{{ js_add_item|raw }}" class="text-primary">*/
/*                 <i class="fa fa-plus-square"></i>*/
/*                 {{ (form|length == 0 ? 'action.add_new_item' : 'action.add_another_item')|trans({}, 'EasyAdminBundle') }}*/
/*             </a>*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock collection_row %}*/
/* */
/* {% block button_row -%}*/
/*     <div class="form-group field-{{ block_prefixes|slice(-2)|first }} {{ easyadmin.field.css_class|default('') }}">*/
/*         {{- form_widget(form) -}}*/
/*     </div>*/
/* {%- endblock button_row %}*/
/* */
/* {% block choice_row -%}*/
/*     {% set force_error = true %}*/
/*     {{- block('form_row') }}*/
/* {%- endblock choice_row %}*/
/* */
/* {% block date_row -%}*/
/*     {% set force_error = true %}*/
/*     {{- block('form_row') }}*/
/* {%- endblock date_row %}*/
/* */
/* {% block time_row -%}*/
/*     {% set force_error = true %}*/
/*     {{- block('form_row') }}*/
/* {%- endblock time_row %}*/
/* */
/* {% block datetime_row -%}*/
/*     {% set force_error = true %}*/
/*     {{- block('form_row') }}*/
/* {%- endblock datetime_row %}*/
/* */
/* {% block checkbox_row -%}*/
/*     <div class="form-group {% if not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}">*/
/*         {{- form_widget(form) -}}*/
/*         {{- form_errors(form) -}}*/
/*     </div>*/
/* {%- endblock checkbox_row %}*/
/* */
/* {% block radio_row -%}*/
/*     <div class="form-group {% if not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}">*/
/*         {{- form_widget(form) -}}*/
/*         {{- form_errors(form) -}}*/
/*     </div>*/
/* {%- endblock radio_row %}*/
/* */
/* {# Errors #}*/
/* {% block form_errors %}*/
/*     {% set error_count = errors|length %}*/
/*     {% if error_count >= 1 %}*/
/*         <div class="error-block">*/
/*             <span class="label label-danger">{{ 'errors'|transchoice(error_count, {}, 'EasyAdminBundle') }}</span>*/
/*             {% if error_count == 1 %}*/
/*                 {{ errors|first.message }}*/
/*             {% else %}*/
/*                 <ul>*/
/*                     {% for error in errors %}*/
/*                         <li>{{ error.message }}</li>*/
/*                     {% endfor %}*/
/*                 </ul>*/
/*             {% endif %}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock form_errors %}*/
/* */
/* {%- block form_widget_compound -%}*/
/*     {# the "is iterable" check is needed because if an object implements __toString() and*/
/*        returns an empty string, "is empty" returns true even if it's not a collection #}*/
/*     {% if value is iterable and value is empty %}*/
/*         {{ block('empty_collection') }}*/
/*     {% endif %}*/
/*     {% if value is iterable and value is empty or form.vars.prototype is defined %}*/
/*         {% set attr = attr|merge({'data-empty-collection': block('empty_collection') }) %}*/
/*     {% endif %}*/
/* */
/*     {{ parent() }}*/
/* {%- endblock form_widget_compound -%}*/
/* */
/* {% block empty_collection %}*/
/*     <div class="empty collection-empty">*/
/*         {{ include(easyadmin.entity.templates.label_empty) }}*/
/*     </div>*/
/* {% endblock empty_collection %}*/
/* */
/* {% block vich_file_row %}*/
/*     {% set force_error = true %}*/
/*     {{ block('form_row') }}*/
/* {% endblock %}*/
/* */
/* {% block vich_file_widget %}*/
/* {% spaceless %}*/
/*     <div class="easyadmin-vich-file">*/
/*         {% if download_uri|default('') is not empty %}*/
/*             {% set download_title = download_uri|split('/')|last ?: 'download'|trans({}, 'VichUploaderBundle') %}*/
/*             <a href="{{ asset(download_uri) }}">{{ download_title }}</a>*/
/*         {% endif %}*/
/* */
/*         <div class="row">*/
/*             {% if form.delete is defined %}*/
/*             <div class="col-sm-3 col-md-2">*/
/*                 {{ form_row(form.delete, { label: 'action.delete' }) }}*/
/*             </div>*/
/*             {% endif %}*/
/*             <div class="{{ form.delete is defined ? 'col-sm-9 col-md-10' : 'col-sm-12' }}">*/
/*                 {{ form_widget(form.file) }}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endspaceless %}*/
/* {% endblock %}*/
/* */
/* {% block vich_image_row %}*/
/*     {% set force_error = true %}*/
/*     {{ block('form_row') }}*/
/* {% endblock %}*/
/* */
/* {% block vich_image_widget %}*/
/* {% spaceless %}*/
/*     <div class="easyadmin-vich-image">*/
/*         {{ form_widget(form.file) }}*/
/*         {% if form.delete is defined %}*/
/*             {{ form_row(form.delete, { label: 'action.delete' }) }}*/
/*         {% endif %}*/
/* */
/*         {% if download_uri|default('') is not empty %}*/
/*             {% set _lightbox_id = 'easyadmin-lightbox-' ~ id %}*/
/* */
/*             <a href="#" class="easyadmin-thumbnail" data-featherlight="#{{ _lightbox_id }}" data-featherlight-close-on-click="anywhere">*/
/*                 <img src="{{ asset(download_uri) }}">*/
/*             </a>*/
/* */
/*             <div id="{{ _lightbox_id }}" class="easyadmin-lightbox">*/
/*                 <img src="{{ asset(download_uri) }}">*/
/*             </div>*/
/*         {% endif %}*/
/*     </div>*/
/* {% endspaceless %}*/
/* {% endblock %}*/
/* */
/* {# EasyAdmin form type #}*/
/* {% block easyadmin_widget %}*/
/*     {% set _translation_domain = easyadmin.entity.translation_domain %}*/
/*     {% set _trans_parameters = { '%entity_name%':  easyadmin.entity.name|trans, '%entity_label%': easyadmin.entity.label|trans } %}*/
/* */
/*     {% if form.vars.errors|length > 0 %}*/
/*         {{ form_errors(form) }}*/
/*     {% endif %}*/
/* */
/*     <input type="hidden" name="referer" value="{{ app.request.query.get('referer', '') }}"/>*/
/* */
/*     <div class="row">*/
/*         {% for group_name, group_config in easyadmin_form_groups %}*/
/*             <div class="field-group col-xs-12 {{ group_config.css_class|default('') }}">*/
/*                 <div class="box box-default">*/
/*                     {% if group_config.label|default(false) or group_config.icon|default(false) %}*/
/*                         <div class="box-header with-border">*/
/*                             <h3 class="box-title">*/
/*                                 {% if group_config.icon|default(false) %}*/
/*                                     <i class="fa fa-{{ group_config.icon }}"></i>*/
/*                                 {% endif %}*/
/*                                 {{ group_config.label|trans(domain = _translation_domain)|raw }}*/
/*                             </h3>*/
/*                         </div>*/
/*                     {% endif %}*/
/* */
/*                     <div class="box-body">*/
/*                         {% if group_config.help|default(false) %}*/
/*                             <p class="help-block">{{ group_config.help|trans(domain = _translation_domain)|nl2br|raw }}</p>*/
/*                         {% endif %}*/
/* */
/*                         <div class="row">*/
/*                             {% for field in form.children if 'hidden' not in field.vars.block_prefixes and field.vars.easyadmin.form_group == group_name %}*/
/*                                 <div class="col-xs-12 {{ field.vars.easyadmin.field.css_class|default('') }}">*/
/*                                     {{ form_row(field) }}*/
/*                                 </div>*/
/*                             {% endfor %}*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         {% else %}*/
/*             {% for field in form.children if 'hidden' not in field.vars.block_prefixes %}*/
/*                 <div class="col-xs-12 {{ field.vars.easyadmin.field.css_class|default('') }}">*/
/*                     {{ form_row(field) }}*/
/*                 </div>*/
/*             {% endfor %}*/
/*         {% endfor %}*/
/*     </div>*/
/* */
/*     <div class="row">*/
/*         <div class="col-xs-12 form-actions">*/
/*             <div class="form-group">*/
/*                 <div id="form-actions-row">*/
/*                     {% block item_actions %}*/
/*                         {# the 'save' action is hardcoded for the 'edit' and 'new' views #}*/
/*                         <button type="submit" class="btn btn-primary action-save">*/
/*                             <i class="fa fa-save"></i> {{ 'action.save'|trans(_trans_parameters, _translation_domain) }}*/
/*                         </button>*/
/* */
/*                         {% set _entity_actions = (easyadmin.view == 'new')*/
/*                             ? easyadmin_get_actions_for_new_item(easyadmin.entity.name)*/
/*                             : easyadmin_get_actions_for_edit_item(easyadmin.entity.name) %}*/
/* */
/*                         {% set _entity_id = (easyadmin.view == 'new')*/
/*                             ? null*/
/*                             : attribute(easyadmin.item, easyadmin.entity.primary_key_field_name) %}*/
/* */
/*                         {% set _request_parameters = { entity: easyadmin.entity.name, referer: app.request.query.get('referer') } %}*/
/* */
/*                         {{ include('@EasyAdmin/default/includes/_actions.html.twig', {*/
/*                             actions: _entity_actions,*/
/*                             request_parameters: _request_parameters,*/
/*                             translation_domain: _translation_domain,*/
/*                             trans_parameters: _trans_parameters,*/
/*                             item_id: _entity_id*/
/*                         }, with_context = false) }}*/
/*                     {% endblock item_actions %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock easyadmin_widget %}*/
/* */
/* {# EasyAdminAutocomplete form type #}*/
/* {% block easyadmin_autocomplete_widget %}*/
/*     {{ form_widget(form.autocomplete, {*/
/*         attr: attr|merge({*/
/*             'data-easyadmin-autocomplete-url' : path('easyadmin', {*/
/*                 action: 'autocomplete',*/
/*                 entity: autocomplete_entity_name,*/
/*             })|raw })*/
/*         })*/
/*     }}*/
/* {% endblock easyadmin_autocomplete_widget %}*/
/* */
/* {% block easyadmin_autocomplete_inner_label %}*/
/*     {% set name = form.parent.vars.name %}*/
/*     {{- block('form_label') -}}*/
/* {% endblock easyadmin_autocomplete_inner_label %}*/
/* */
/* {# EasyAdminDivider form type #}*/
/* {% block easyadmin_divider_row %}*/
/*     <div class="field-divider">*/
/*         <hr>*/
/*     </div>*/
/* {% endblock easyadmin_divider_row %}*/
/* */
/* {# EasyAdminSection form type #}*/
/* {% block easyadmin_section_row %}*/
/*     {% set _translation_domain = easyadmin.entity.translation_domain %}*/
/*     <div class="field-section {{ easyadmin.field.css_class|default('') }}">*/
/*         {% if easyadmin.field.label|default(false) or easyadmin.field.icon|default(false) %}*/
/*             <h2>*/
/*                 {% if easyadmin.field.icon|default(false) %}<i class="fa fa-{{ easyadmin.field.icon }}"></i>{% endif %}*/
/*                 {{ easyadmin.field.label|default('')|trans(domain = _translation_domain)|raw }}*/
/*             </h2>*/
/*         {% endif %}*/
/* */
/*         {% if easyadmin.field.help|default(false) %}*/
/*             <p class="help-block">{{ easyadmin.field.help|trans(domain = _translation_domain)|nl2br|raw }}</p>*/
/*         {% endif %}*/
/*     </div>*/
/* {% endblock easyadmin_section_row %}*/
/* */
