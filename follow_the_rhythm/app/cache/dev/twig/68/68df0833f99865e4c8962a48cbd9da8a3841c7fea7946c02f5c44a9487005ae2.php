<?php

/* EasyAdminBundle:default:field_json.html.twig */
class __TwigTemplate_ec06c0894754dee437b04409c9c9dbe072c8eda6d37ac1e2ecdfcd195521c4d9 extends Twig_Template
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
        $__internal_41a57eda8d05658485fa0e2e96c4d3f5fe0fa7a14cb1a954c83bec70fc46be98 = $this->env->getExtension("native_profiler");
        $__internal_41a57eda8d05658485fa0e2e96c4d3f5fe0fa7a14cb1a954c83bec70fc46be98->enter($__internal_41a57eda8d05658485fa0e2e96c4d3f5fe0fa7a14cb1a954c83bec70fc46be98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_json.html.twig"));

        // line 1
        if (((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")) == "show")) {
            // line 2
            echo "    ";
            if ((twig_length_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) > 0)) {
                // line 3
                echo "        <ul>
            ";
                // line 4
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
                foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                    // line 5
                    echo "                <li>";
                    echo twig_escape_filter($this->env, $context["element"], "html", null, true);
                    echo "</li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 7
                echo "        </ul>
    ";
            } else {
                // line 9
                echo "        <div class=\"empty collection-empty\">
            ";
                // line 10
                echo twig_include($this->env, $context, $this->getAttribute($this->getAttribute((isset($context["entity_config"]) ? $context["entity_config"] : $this->getContext($context, "entity_config")), "templates", array()), "label_empty", array()));
                echo "
        </div>
    ";
            }
        } else {
            // line 14
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('easyadmin_extension')->truncateText($this->env, twig_join_filter((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), ", ")), "html", null, true);
            echo "
";
        }
        
        $__internal_41a57eda8d05658485fa0e2e96c4d3f5fe0fa7a14cb1a954c83bec70fc46be98->leave($__internal_41a57eda8d05658485fa0e2e96c4d3f5fe0fa7a14cb1a954c83bec70fc46be98_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_json.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 14,  50 => 10,  47 => 9,  43 => 7,  34 => 5,  30 => 4,  27 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if view == 'show' %}*/
/*     {% if value|length > 0 %}*/
/*         <ul>*/
/*             {% for element in value %}*/
/*                 <li>{{ element }}</li>*/
/*             {% endfor %}*/
/*         </ul>*/
/*     {% else %}*/
/*         <div class="empty collection-empty">*/
/*             {{ include(entity_config.templates.label_empty) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% else %}*/
/*     {{ value|join(', ')|easyadmin_truncate }}*/
/* {% endif %}*/
/* */
