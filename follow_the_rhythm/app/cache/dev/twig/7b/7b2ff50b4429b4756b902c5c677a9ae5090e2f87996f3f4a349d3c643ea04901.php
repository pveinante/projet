<?php

/* EasyAdminBundle:default/includes:_delete_form.html.twig */
class __TwigTemplate_1e7ba32eab06c393365abd157e3987cff34d1fb687fddd8b98b03afd30ba4139 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0e7729c27f599e57f0b69c46e19d22eed4231d9f646fcf54a0d18f142e4987df = $this->env->getExtension("native_profiler");
        $__internal_0e7729c27f599e57f0b69c46e19d22eed4231d9f646fcf54a0d18f142e4987df->enter($__internal_0e7729c27f599e57f0b69c46e19d22eed4231d9f646fcf54a0d18f142e4987df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default/includes:_delete_form.html.twig"));

        // line 1
        echo         // line 2
        $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form', array("action" => (($this->getAttribute($this->getAttribute(        // line 3
(isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "vars", array()), "action", array()) . "&referer=") . (isset($context["referer"]) ? $context["referer"] : $this->getContext($context, "referer"))), "method" => "DELETE", "attr" => array("id" => "delete-form", "style" => "display: none")));
        // line 7
        echo "

<div id=\"modal-delete\" class=\"modal fade\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-body\">
                <h4>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("delete_modal.title", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "EasyAdminBundle"), "html", null, true);
        echo "</h4>
                <p>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("delete_modal.content", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "EasyAdminBundle"), "html", null, true);
        echo "</p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" data-dismiss=\"modal\" class=\"btn\">
                    ";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.cancel", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), (isset($context["_translation_domain"]) ? $context["_translation_domain"] : $this->getContext($context, "_translation_domain"))), "html", null, true);
        echo "
                </button>

                ";
        // line 21
        if ($this->env->getExtension('easyadmin_extension')->isActionEnabled((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")), "delete", $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()))) {
            // line 22
            echo "                    ";
            $context["_delete_action"] = $this->env->getExtension('easyadmin_extension')->getActionConfiguration((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")), "delete", $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()));
            // line 23
            echo "                    <button type=\"button\" data-dismiss=\"modal\" class=\"btn btn-danger\" id=\"modal-delete-button\" formtarget=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_delete_action"]) ? $context["_delete_action"] : $this->getContext($context, "_delete_action")), "target", array()), "html", null, true);
            echo "\">
                        ";
            // line 24
            if ($this->getAttribute((isset($context["_delete_action"]) ? $context["_delete_action"] : $this->getContext($context, "_delete_action")), "icon", array())) {
                echo "<i class=\"fa fa-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_delete_action"]) ? $context["_delete_action"] : $this->getContext($context, "_delete_action")), "icon", array()), "html", null, true);
                echo "\"></i>";
            }
            // line 25
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("delete_modal.action", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "EasyAdminBundle"), "html", null, true);
            echo "
                    </button>
                ";
        }
        // line 28
        echo "            </div>
        </div>
    </div>
</div>
";
        
        $__internal_0e7729c27f599e57f0b69c46e19d22eed4231d9f646fcf54a0d18f142e4987df->leave($__internal_0e7729c27f599e57f0b69c46e19d22eed4231d9f646fcf54a0d18f142e4987df_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default/includes:_delete_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 28,  67 => 25,  61 => 24,  56 => 23,  53 => 22,  51 => 21,  45 => 18,  38 => 14,  34 => 13,  26 => 7,  24 => 3,  23 => 2,  22 => 1,);
    }
}
/* {{*/
/*     form(delete_form, {*/
/*         action: delete_form.vars.action ~ '&referer=' ~ referer,*/
/*         method: 'DELETE',*/
/*         attr: { id: 'delete-form', style: 'display: none' }*/
/*     })*/
/* }}*/
/* */
/* <div id="modal-delete" class="modal fade">*/
/*     <div class="modal-dialog">*/
/*         <div class="modal-content">*/
/*             <div class="modal-body">*/
/*                 <h4>{{ 'delete_modal.title'|trans(_trans_parameters, 'EasyAdminBundle') }}</h4>*/
/*                 <p>{{ 'delete_modal.content'|trans(_trans_parameters, 'EasyAdminBundle') }}</p>*/
/*             </div>*/
/*             <div class="modal-footer">*/
/*                 <button type="button" data-dismiss="modal" class="btn">*/
/*                     {{ 'action.cancel'|trans(_trans_parameters, _translation_domain) }}*/
/*                 </button>*/
/* */
/*                 {% if easyadmin_action_is_enabled(view, 'delete', _entity_config.name) %}*/
/*                     {% set _delete_action = easyadmin_get_action(view, 'delete', _entity_config.name) %}*/
/*                     <button type="button" data-dismiss="modal" class="btn btn-danger" id="modal-delete-button" formtarget="{{ _delete_action.target }}">*/
/*                         {% if _delete_action.icon %}<i class="fa fa-{{ _delete_action.icon }}"></i>{% endif %}*/
/*                         {{ 'delete_modal.action'|trans(_trans_parameters, 'EasyAdminBundle') }}*/
/*                     </button>*/
/*                 {% endif %}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
