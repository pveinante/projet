<?php

/* EasyAdminBundle:form:bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_ab9d1512a3a5911d6c27ffd72f6b7fe8906d7f830cf9e6db7455a2e4cb5d6c3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("@EasyAdmin/form/bootstrap_3_layout.html.twig", "EasyAdminBundle:form:bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."@EasyAdmin/form/bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'checkbox_radio_row' => array($this, 'block_checkbox_radio_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_673ce9ca9814e4dc3182d022269ba42c4f0ea7a34badb4d4ec05c7b08151296f = $this->env->getExtension("native_profiler");
        $__internal_673ce9ca9814e4dc3182d022269ba42c4f0ea7a34badb4d4ec05c7b08151296f->enter($__internal_673ce9ca9814e4dc3182d022269ba42c4f0ea7a34badb4d4ec05c7b08151296f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:form:bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 22
        echo "
";
        // line 24
        echo "
";
        // line 25
        $this->displayBlock('form_row', $context, $blocks);
        // line 51
        echo "
";
        // line 52
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('radio_row', $context, $blocks);
        // line 59
        echo "
";
        // line 60
        $this->displayBlock('checkbox_radio_row', $context, $blocks);
        // line 71
        echo "
";
        // line 72
        $this->displayBlock('submit_row', $context, $blocks);
        // line 82
        echo "
";
        // line 83
        $this->displayBlock('reset_row', $context, $blocks);
        // line 93
        echo "
";
        // line 94
        $this->displayBlock('form_group_class', $context, $blocks);
        
        $__internal_673ce9ca9814e4dc3182d022269ba42c4f0ea7a34badb4d4ec05c7b08151296f->leave($__internal_673ce9ca9814e4dc3182d022269ba42c4f0ea7a34badb4d4ec05c7b08151296f_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_e976dee10622ef11c036d38d5b91d8cce9790cf088f7230abe4357714128e7e8 = $this->env->getExtension("native_profiler");
        $__internal_e976dee10622ef11c036d38d5b91d8cce9790cf088f7230abe4357714128e7e8->enter($__internal_e976dee10622ef11c036d38d5b91d8cce9790cf088f7230abe4357714128e7e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["_easyadmin_form_type"] = "horizontal";
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_e976dee10622ef11c036d38d5b91d8cce9790cf088f7230abe4357714128e7e8->leave($__internal_e976dee10622ef11c036d38d5b91d8cce9790cf088f7230abe4357714128e7e8_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_cbc4597909eb2dc171516ad79b5a4ac9fc6299a1a3332b79eea2656acc8da05b = $this->env->getExtension("native_profiler");
        $__internal_cbc4597909eb2dc171516ad79b5a4ac9fc6299a1a3332b79eea2656acc8da05b->enter($__internal_cbc4597909eb2dc171516ad79b5a4ac9fc6299a1a3332b79eea2656acc8da05b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        ob_start();
        // line 12
        echo "    ";
        if (((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
            // line 13
            echo "        <div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>
    ";
        } else {
            // line 15
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " ") . $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 16
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_cbc4597909eb2dc171516ad79b5a4ac9fc6299a1a3332b79eea2656acc8da05b->leave($__internal_cbc4597909eb2dc171516ad79b5a4ac9fc6299a1a3332b79eea2656acc8da05b_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_f5617e5e694dff0a3d75d91b7e6da9fe671086e2f3958f0e4b53a7e60d36b91f = $this->env->getExtension("native_profiler");
        $__internal_f5617e5e694dff0a3d75d91b7e6da9fe671086e2f3958f0e4b53a7e60d36b91f->enter($__internal_f5617e5e694dff0a3d75d91b7e6da9fe671086e2f3958f0e4b53a7e60d36b91f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        echo "col-sm-2";
        
        $__internal_f5617e5e694dff0a3d75d91b7e6da9fe671086e2f3958f0e4b53a7e60d36b91f->leave($__internal_f5617e5e694dff0a3d75d91b7e6da9fe671086e2f3958f0e4b53a7e60d36b91f_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_804e42f5e7068f81ed3cf3abf683bf7dbe82cbab152993c70f3c7ad5ce33d768 = $this->env->getExtension("native_profiler");
        $__internal_804e42f5e7068f81ed3cf3abf683bf7dbe82cbab152993c70f3c7ad5ce33d768->enter($__internal_804e42f5e7068f81ed3cf3abf683bf7dbe82cbab152993c70f3c7ad5ce33d768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 26
        ob_start();
        // line 27
        echo "    ";
        $context["_field_type"] = (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "fieldType", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "fieldType", array()), "default")) : ("default"));
        // line 28
        echo "    <div class=\"form-group ";
        if ((( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : $this->getContext($context, "force_error")), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid")))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">
        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        echo "
        <div class=\"";
        // line 30
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

            ";
        // line 33
        if ((twig_in_filter((isset($context["_field_type"]) ? $context["_field_type"] : $this->getContext($context, "_field_type")), array(0 => "datetime", 1 => "date", 2 => "time", 3 => "birthday")) && (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "nullable", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "nullable", array()), false)) : (false)))) {
            // line 34
            echo "                <div class=\"nullable-control\">
                    <label>
                        <input type=\"checkbox\" ";
            // line 36
            if ((null === (isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")))) {
                echo "checked=\"checked\"";
            }
            echo ">
                        ";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.nullable_field", array(), "EasyAdminBundle"), "html", null, true);
            echo "
                    </label>
                </div>
            ";
        }
        // line 41
        echo "
            ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

            ";
        // line 44
        if (((($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "help", array()), "")) : ("")) != "")) {
            // line 45
            echo "                <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> ";
            echo $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "field", array()), "help", array()), array(), $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "translation_domain", array()));
            echo "</span>
            ";
        }
        // line 47
        echo "        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_804e42f5e7068f81ed3cf3abf683bf7dbe82cbab152993c70f3c7ad5ce33d768->leave($__internal_804e42f5e7068f81ed3cf3abf683bf7dbe82cbab152993c70f3c7ad5ce33d768_prof);

    }

    // line 52
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_78a6e1ced1d112db17a01bbe88dfb3bedb656c86e7064408f0b00f9ad0ac89f1 = $this->env->getExtension("native_profiler");
        $__internal_78a6e1ced1d112db17a01bbe88dfb3bedb656c86e7064408f0b00f9ad0ac89f1->enter($__internal_78a6e1ced1d112db17a01bbe88dfb3bedb656c86e7064408f0b00f9ad0ac89f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 53
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_78a6e1ced1d112db17a01bbe88dfb3bedb656c86e7064408f0b00f9ad0ac89f1->leave($__internal_78a6e1ced1d112db17a01bbe88dfb3bedb656c86e7064408f0b00f9ad0ac89f1_prof);

    }

    // line 56
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_67b53aa2531627f52b6467caf81585cca59a1f62a7469bee5d48bb432ff2208c = $this->env->getExtension("native_profiler");
        $__internal_67b53aa2531627f52b6467caf81585cca59a1f62a7469bee5d48bb432ff2208c->enter($__internal_67b53aa2531627f52b6467caf81585cca59a1f62a7469bee5d48bb432ff2208c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 57
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_67b53aa2531627f52b6467caf81585cca59a1f62a7469bee5d48bb432ff2208c->leave($__internal_67b53aa2531627f52b6467caf81585cca59a1f62a7469bee5d48bb432ff2208c_prof);

    }

    // line 60
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_3dfea153f940b91e24ae13a7ec9cfc9f8721c7729d1a3961fb31d00a739ae185 = $this->env->getExtension("native_profiler");
        $__internal_3dfea153f940b91e24ae13a7ec9cfc9f8721c7729d1a3961fb31d00a739ae185->enter($__internal_3dfea153f940b91e24ae13a7ec9cfc9f8721c7729d1a3961fb31d00a739ae185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        // line 61
        ob_start();
        // line 62
        echo "    <div class=\"form-group ";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">
        <div class=\"";
        // line 63
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 64
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_3dfea153f940b91e24ae13a7ec9cfc9f8721c7729d1a3961fb31d00a739ae185->leave($__internal_3dfea153f940b91e24ae13a7ec9cfc9f8721c7729d1a3961fb31d00a739ae185_prof);

    }

    // line 72
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_bf65229cf9a2482df54ccfffec5dbef0cdcf7ca81848c7e7b732fd1acf3f7aa3 = $this->env->getExtension("native_profiler");
        $__internal_bf65229cf9a2482df54ccfffec5dbef0cdcf7ca81848c7e7b732fd1acf3f7aa3->enter($__internal_bf65229cf9a2482df54ccfffec5dbef0cdcf7ca81848c7e7b732fd1acf3f7aa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 73
        ob_start();
        // line 74
        echo "    <div class=\"form-group field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">
        <div class=\"";
        // line 75
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 76
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_bf65229cf9a2482df54ccfffec5dbef0cdcf7ca81848c7e7b732fd1acf3f7aa3->leave($__internal_bf65229cf9a2482df54ccfffec5dbef0cdcf7ca81848c7e7b732fd1acf3f7aa3_prof);

    }

    // line 83
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_b5d05e61faf724f9a50a15736e7005d66363fdee92df48dbda6ef18cdbc94fa4 = $this->env->getExtension("native_profiler");
        $__internal_b5d05e61faf724f9a50a15736e7005d66363fdee92df48dbda6ef18cdbc94fa4->enter($__internal_b5d05e61faf724f9a50a15736e7005d66363fdee92df48dbda6ef18cdbc94fa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 84
        ob_start();
        // line 85
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 86
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 87
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_b5d05e61faf724f9a50a15736e7005d66363fdee92df48dbda6ef18cdbc94fa4->leave($__internal_b5d05e61faf724f9a50a15736e7005d66363fdee92df48dbda6ef18cdbc94fa4_prof);

    }

    // line 94
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_aadecd8f19731f15848f245d83418efa35e775fe24fc813c4a574d81a8014c9e = $this->env->getExtension("native_profiler");
        $__internal_aadecd8f19731f15848f245d83418efa35e775fe24fc813c4a574d81a8014c9e->enter($__internal_aadecd8f19731f15848f245d83418efa35e775fe24fc813c4a574d81a8014c9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        echo "col-sm-10";
        
        $__internal_aadecd8f19731f15848f245d83418efa35e775fe24fc813c4a574d81a8014c9e->leave($__internal_aadecd8f19731f15848f245d83418efa35e775fe24fc813c4a574d81a8014c9e_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:form:bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  370 => 94,  358 => 88,  354 => 87,  350 => 86,  347 => 85,  345 => 84,  339 => 83,  327 => 77,  323 => 76,  319 => 75,  314 => 74,  312 => 73,  306 => 72,  294 => 66,  290 => 65,  286 => 64,  282 => 63,  273 => 62,  271 => 61,  265 => 60,  258 => 57,  252 => 56,  245 => 53,  239 => 52,  229 => 47,  223 => 45,  221 => 44,  216 => 42,  213 => 41,  206 => 37,  200 => 36,  196 => 34,  194 => 33,  189 => 31,  185 => 30,  181 => 29,  172 => 28,  169 => 27,  167 => 26,  161 => 25,  149 => 21,  140 => 16,  137 => 15,  131 => 13,  128 => 12,  126 => 11,  120 => 10,  113 => 5,  111 => 4,  105 => 3,  98 => 94,  95 => 93,  93 => 83,  90 => 82,  88 => 72,  85 => 71,  83 => 60,  80 => 59,  78 => 56,  75 => 55,  73 => 52,  70 => 51,  68 => 25,  65 => 24,  62 => 22,  60 => 21,  57 => 20,  55 => 10,  52 => 9,  49 => 7,  47 => 3,  44 => 2,  14 => 1,);
    }
}
/* {% use "@EasyAdmin/form/bootstrap_3_layout.html.twig" %}*/
/* */
/* {% block form_start -%}*/
/*     {% set _easyadmin_form_type = 'horizontal' %}*/
/*     {{- parent() -}}*/
/* {%- endblock form_start %}*/
/* */
/* {# Labels #}*/
/* */
/* {% block form_label -%}*/
/* {% spaceless %}*/
/*     {% if label is same as(false) %}*/
/*         <div class="{{ block('form_label_class') }}"></div>*/
/*     {% else %}*/
/*         {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) %}*/
/*         {{- parent() -}}*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {%- endblock form_label %}*/
/* */
/* {% block form_label_class 'col-sm-2' %}*/
/* */
/* {# Rows #}*/
/* */
/* {% block form_row -%}*/
/* {% spaceless %}*/
/*     {% set _field_type = easyadmin.field.fieldType|default('default') %}*/
/*     <div class="form-group {% if (not compound or force_error|default(false)) and not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}">*/
/*         {{ form_label(form) }}*/
/*         <div class="{{ block('form_group_class') }}">*/
/*             {{ form_widget(form) }}*/
/* */
/*             {% if _field_type in ['datetime', 'date', 'time', 'birthday'] and easyadmin.field.nullable|default(false) %}*/
/*                 <div class="nullable-control">*/
/*                     <label>*/
/*                         <input type="checkbox" {% if data is null %}checked="checked"{% endif %}>*/
/*                         {{ 'label.nullable_field'|trans({}, 'EasyAdminBundle')}}*/
/*                     </label>*/
/*                 </div>*/
/*             {% endif %}*/
/* */
/*             {{ form_errors(form) }}*/
/* */
/*             {% if easyadmin.field.help|default('') != '' %}*/
/*                 <span class="help-block"><i class="fa fa-info-circle"></i> {{ easyadmin.field.help|trans(domain = easyadmin.entity.translation_domain)|raw }}</span>*/
/*             {% endif %}*/
/*         </div>*/
/*     </div>*/
/* {% endspaceless %}*/
/* {%- endblock form_row %}*/
/* */
/* {% block checkbox_row -%}*/
/*     {{- block('checkbox_radio_row') -}}*/
/* {%- endblock checkbox_row %}*/
/* */
/* {% block radio_row -%}*/
/*     {{- block('checkbox_radio_row') -}}*/
/* {%- endblock radio_row %}*/
/* */
/* {% block checkbox_radio_row -%}*/
/* {% spaceless %}*/
/*     <div class="form-group {% if not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}">*/
/*         <div class="{{ block('form_label_class') }}"></div>*/
/*         <div class="{{ block('form_group_class') }}">*/
/*             {{ form_widget(form) }}*/
/*             {{ form_errors(form) }}*/
/*         </div>*/
/*     </div>*/
/* {% endspaceless %}*/
/* {%- endblock checkbox_radio_row %}*/
/* */
/* {% block submit_row -%}*/
/* {% spaceless %}*/
/*     <div class="form-group field-{{ block_prefixes|slice(-2)|first }}">*/
/*         <div class="{{ block('form_label_class') }}"></div>*/
/*         <div class="{{ block('form_group_class') }}">*/
/*             {{ form_widget(form) }}*/
/*         </div>*/
/*     </div>*/
/* {% endspaceless %}*/
/* {% endblock submit_row %}*/
/* */
/* {% block reset_row -%}*/
/* {% spaceless %}*/
/*     <div class="form-group">*/
/*         <div class="{{ block('form_label_class') }}"></div>*/
/*         <div class="{{ block('form_group_class') }}">*/
/*             {{ form_widget(form) }}*/
/*         </div>*/
/*     </div>*/
/* {% endspaceless %}*/
/* {% endblock reset_row %}*/
/* */
/* {% block form_group_class 'col-sm-10' %}*/
/* */
