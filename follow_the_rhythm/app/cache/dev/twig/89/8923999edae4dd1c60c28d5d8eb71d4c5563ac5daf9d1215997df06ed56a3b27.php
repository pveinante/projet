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
        $__internal_0abe92b2a641c4a700b9b4689d857e594470c6066337c9cc110dc3f27d70e31a = $this->env->getExtension("native_profiler");
        $__internal_0abe92b2a641c4a700b9b4689d857e594470c6066337c9cc110dc3f27d70e31a->enter($__internal_0abe92b2a641c4a700b9b4689d857e594470c6066337c9cc110dc3f27d70e31a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:new.html.twig"));

        // line 1
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $this->env->getExtension('easyadmin_extension')->getBackendConfiguration("design.form_theme"));
        // line 3
        $context["_entity_config"] = $this->env->getExtension('easyadmin_extension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["__internal_874772bab1819356873c56a82c6019559f6e6dcf845d531343f8f196c96f4026"] = $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 5
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 4
(isset($context["__internal_874772bab1819356873c56a82c6019559f6e6dcf845d531343f8f196c96f4026"]) ? $context["__internal_874772bab1819356873c56a82c6019559f6e6dcf845d531343f8f196c96f4026"] : $this->getContext($context, "__internal_874772bab1819356873c56a82c6019559f6e6dcf845d531343f8f196c96f4026"))), "%entity_label%" => $this->env->getExtension('translator')->trans($this->getAttribute(        // line 5
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 4
(isset($context["__internal_874772bab1819356873c56a82c6019559f6e6dcf845d531343f8f196c96f4026"]) ? $context["__internal_874772bab1819356873c56a82c6019559f6e6dcf845d531343f8f196c96f4026"] : $this->getContext($context, "__internal_874772bab1819356873c56a82c6019559f6e6dcf845d531343f8f196c96f4026"))));
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0abe92b2a641c4a700b9b4689d857e594470c6066337c9cc110dc3f27d70e31a->leave($__internal_0abe92b2a641c4a700b9b4689d857e594470c6066337c9cc110dc3f27d70e31a_prof);

    }

    // line 9
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_827210d742a2bde1477022dbf82224a95f6afe5243a5ccd8b8ed897f968d9428 = $this->env->getExtension("native_profiler");
        $__internal_827210d742a2bde1477022dbf82224a95f6afe5243a5ccd8b8ed897f968d9428->enter($__internal_827210d742a2bde1477022dbf82224a95f6afe5243a5ccd8b8ed897f968d9428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ("easyadmin-new-" . $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array())), "html", null, true);
        
        $__internal_827210d742a2bde1477022dbf82224a95f6afe5243a5ccd8b8ed897f968d9428->leave($__internal_827210d742a2bde1477022dbf82224a95f6afe5243a5ccd8b8ed897f968d9428_prof);

    }

    // line 10
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_5e78148dedaa78e0069b16e3f39137e7b38edc787551c9a9ca3e61f2a257dd88 = $this->env->getExtension("native_profiler");
        $__internal_5e78148dedaa78e0069b16e3f39137e7b38edc787551c9a9ca3e61f2a257dd88->enter($__internal_5e78148dedaa78e0069b16e3f39137e7b38edc787551c9a9ca3e61f2a257dd88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("new new-" . twig_lower_filter($this->env, $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_5e78148dedaa78e0069b16e3f39137e7b38edc787551c9a9ca3e61f2a257dd88->leave($__internal_5e78148dedaa78e0069b16e3f39137e7b38edc787551c9a9ca3e61f2a257dd88_prof);

    }

    // line 12
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_aae05e2741c9ba1d975e19155deb9c743ba8789f8cf3de089da83f67a9776d00 = $this->env->getExtension("native_profiler");
        $__internal_aae05e2741c9ba1d975e19155deb9c743ba8789f8cf3de089da83f67a9776d00->enter($__internal_aae05e2741c9ba1d975e19155deb9c743ba8789f8cf3de089da83f67a9776d00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 13
        ob_start();
        // line 14
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('translator')->trans("new.page_title", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "new", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "new", array()), "title", array()), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")),         // line 4
(isset($context["__internal_874772bab1819356873c56a82c6019559f6e6dcf845d531343f8f196c96f4026"]) ? $context["__internal_874772bab1819356873c56a82c6019559f6e6dcf845d531343f8f196c96f4026"] : $this->getContext($context, "__internal_874772bab1819356873c56a82c6019559f6e6dcf845d531343f8f196c96f4026")))) : (        // line 15
(isset($context["_default_title"]) ? $context["_default_title"] : $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_aae05e2741c9ba1d975e19155deb9c743ba8789f8cf3de089da83f67a9776d00->leave($__internal_aae05e2741c9ba1d975e19155deb9c743ba8789f8cf3de089da83f67a9776d00_prof);

    }

    // line 19
    public function block_main($context, array $blocks = array())
    {
        $__internal_2346e48fb60cf79ca7d8e92aa0b996180b8b98432349f0efb43061fba4658061 = $this->env->getExtension("native_profiler");
        $__internal_2346e48fb60cf79ca7d8e92aa0b996180b8b98432349f0efb43061fba4658061->enter($__internal_2346e48fb60cf79ca7d8e92aa0b996180b8b98432349f0efb43061fba4658061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 20
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        
        $__internal_2346e48fb60cf79ca7d8e92aa0b996180b8b98432349f0efb43061fba4658061->leave($__internal_2346e48fb60cf79ca7d8e92aa0b996180b8b98432349f0efb43061fba4658061_prof);

    }

    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_a6af9e5be65963b6aeef6334152cc176532523c35d422715941863982c61fda6 = $this->env->getExtension("native_profiler");
        $__internal_a6af9e5be65963b6aeef6334152cc176532523c35d422715941863982c61fda6->enter($__internal_a6af9e5be65963b6aeef6334152cc176532523c35d422715941863982c61fda6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 21
        echo "        ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
    ";
        
        $__internal_a6af9e5be65963b6aeef6334152cc176532523c35d422715941863982c61fda6->leave($__internal_a6af9e5be65963b6aeef6334152cc176532523c35d422715941863982c61fda6_prof);

    }

    // line 25
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_1010fabdf9af86cea179ad13483d632c13d053cecb183eafd718f04302c6a547 = $this->env->getExtension("native_profiler");
        $__internal_1010fabdf9af86cea179ad13483d632c13d053cecb183eafd718f04302c6a547->enter($__internal_1010fabdf9af86cea179ad13483d632c13d053cecb183eafd718f04302c6a547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

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
        
        $__internal_1010fabdf9af86cea179ad13483d632c13d053cecb183eafd718f04302c6a547->leave($__internal_1010fabdf9af86cea179ad13483d632c13d053cecb183eafd718f04302c6a547_prof);

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
