<?php

/* @EasyAdmin/default/new.html.twig */
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "@EasyAdmin/default/new.html.twig", 7);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3d47a20fdc33c53a10e4cf0d8cf94c7b5cdda1177f7222092c79c2cbcee80eb8 = $this->env->getExtension("native_profiler");
        $__internal_3d47a20fdc33c53a10e4cf0d8cf94c7b5cdda1177f7222092c79c2cbcee80eb8->enter($__internal_3d47a20fdc33c53a10e4cf0d8cf94c7b5cdda1177f7222092c79c2cbcee80eb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/new.html.twig"));

        // line 1
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $this->env->getExtension('easyadmin_extension')->getBackendConfiguration("design.form_theme"));
        // line 3
        $context["_entity_config"] = $this->env->getExtension('easyadmin_extension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["__internal_ccb99f5224694e7daa6aafbafde4adf704deb2937bad457bcdbfde28fbc3734c"] = $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 5
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 4
(isset($context["__internal_ccb99f5224694e7daa6aafbafde4adf704deb2937bad457bcdbfde28fbc3734c"]) ? $context["__internal_ccb99f5224694e7daa6aafbafde4adf704deb2937bad457bcdbfde28fbc3734c"] : $this->getContext($context, "__internal_ccb99f5224694e7daa6aafbafde4adf704deb2937bad457bcdbfde28fbc3734c"))), "%entity_label%" => $this->env->getExtension('translator')->trans($this->getAttribute(        // line 5
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 4
(isset($context["__internal_ccb99f5224694e7daa6aafbafde4adf704deb2937bad457bcdbfde28fbc3734c"]) ? $context["__internal_ccb99f5224694e7daa6aafbafde4adf704deb2937bad457bcdbfde28fbc3734c"] : $this->getContext($context, "__internal_ccb99f5224694e7daa6aafbafde4adf704deb2937bad457bcdbfde28fbc3734c"))));
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d47a20fdc33c53a10e4cf0d8cf94c7b5cdda1177f7222092c79c2cbcee80eb8->leave($__internal_3d47a20fdc33c53a10e4cf0d8cf94c7b5cdda1177f7222092c79c2cbcee80eb8_prof);

    }

    // line 9
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_4f025e5dc8558b15c0f681ed261f53ebeb9f54724c2f97b2b5992c93407ad9d9 = $this->env->getExtension("native_profiler");
        $__internal_4f025e5dc8558b15c0f681ed261f53ebeb9f54724c2f97b2b5992c93407ad9d9->enter($__internal_4f025e5dc8558b15c0f681ed261f53ebeb9f54724c2f97b2b5992c93407ad9d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ("easyadmin-new-" . $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array())), "html", null, true);
        
        $__internal_4f025e5dc8558b15c0f681ed261f53ebeb9f54724c2f97b2b5992c93407ad9d9->leave($__internal_4f025e5dc8558b15c0f681ed261f53ebeb9f54724c2f97b2b5992c93407ad9d9_prof);

    }

    // line 10
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_f557b14ce6175884e6e829beaf27eaf8c93eee39c12152b452c054f6decab0c8 = $this->env->getExtension("native_profiler");
        $__internal_f557b14ce6175884e6e829beaf27eaf8c93eee39c12152b452c054f6decab0c8->enter($__internal_f557b14ce6175884e6e829beaf27eaf8c93eee39c12152b452c054f6decab0c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("new new-" . twig_lower_filter($this->env, $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_f557b14ce6175884e6e829beaf27eaf8c93eee39c12152b452c054f6decab0c8->leave($__internal_f557b14ce6175884e6e829beaf27eaf8c93eee39c12152b452c054f6decab0c8_prof);

    }

    // line 12
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_78ed1877fb5d4b152eaa2b25d4e40729d0f599d1738488d1e5b9af6dc65763d4 = $this->env->getExtension("native_profiler");
        $__internal_78ed1877fb5d4b152eaa2b25d4e40729d0f599d1738488d1e5b9af6dc65763d4->enter($__internal_78ed1877fb5d4b152eaa2b25d4e40729d0f599d1738488d1e5b9af6dc65763d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 13
        ob_start();
        // line 14
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('translator')->trans("new.page_title", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "new", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "new", array()), "title", array()), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")),         // line 4
(isset($context["__internal_ccb99f5224694e7daa6aafbafde4adf704deb2937bad457bcdbfde28fbc3734c"]) ? $context["__internal_ccb99f5224694e7daa6aafbafde4adf704deb2937bad457bcdbfde28fbc3734c"] : $this->getContext($context, "__internal_ccb99f5224694e7daa6aafbafde4adf704deb2937bad457bcdbfde28fbc3734c")))) : (        // line 15
(isset($context["_default_title"]) ? $context["_default_title"] : $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_78ed1877fb5d4b152eaa2b25d4e40729d0f599d1738488d1e5b9af6dc65763d4->leave($__internal_78ed1877fb5d4b152eaa2b25d4e40729d0f599d1738488d1e5b9af6dc65763d4_prof);

    }

    // line 19
    public function block_main($context, array $blocks = array())
    {
        $__internal_c8b4d56256d9414f511eb47bb3a67055384bd37daca286c3e3d67e1029def0be = $this->env->getExtension("native_profiler");
        $__internal_c8b4d56256d9414f511eb47bb3a67055384bd37daca286c3e3d67e1029def0be->enter($__internal_c8b4d56256d9414f511eb47bb3a67055384bd37daca286c3e3d67e1029def0be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 20
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        
        $__internal_c8b4d56256d9414f511eb47bb3a67055384bd37daca286c3e3d67e1029def0be->leave($__internal_c8b4d56256d9414f511eb47bb3a67055384bd37daca286c3e3d67e1029def0be_prof);

    }

    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_0a17b3c026d66a5d0ce1693f77052bfe33a628182985dc2a28dd2944306f84c4 = $this->env->getExtension("native_profiler");
        $__internal_0a17b3c026d66a5d0ce1693f77052bfe33a628182985dc2a28dd2944306f84c4->enter($__internal_0a17b3c026d66a5d0ce1693f77052bfe33a628182985dc2a28dd2944306f84c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 21
        echo "        ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
    ";
        
        $__internal_0a17b3c026d66a5d0ce1693f77052bfe33a628182985dc2a28dd2944306f84c4->leave($__internal_0a17b3c026d66a5d0ce1693f77052bfe33a628182985dc2a28dd2944306f84c4_prof);

    }

    // line 25
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_cd09c0456a410ea44f8f0979242658f182967f155b596774e7356f388ce4a8a8 = $this->env->getExtension("native_profiler");
        $__internal_cd09c0456a410ea44f8f0979242658f182967f155b596774e7356f388ce4a8a8->enter($__internal_cd09c0456a410ea44f8f0979242658f182967f155b596774e7356f388ce4a8a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

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
        
        $__internal_cd09c0456a410ea44f8f0979242658f182967f155b596774e7356f388ce4a8a8->leave($__internal_cd09c0456a410ea44f8f0979242658f182967f155b596774e7356f388ce4a8a8_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/new.html.twig";
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
