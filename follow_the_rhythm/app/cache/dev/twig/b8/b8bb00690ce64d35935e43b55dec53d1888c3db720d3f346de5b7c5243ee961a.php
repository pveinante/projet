<?php

/* EasyAdminBundle:default:field_object.html.twig */
class __TwigTemplate_9757c9dda90c10c01a52f220adfa08c19c8f5d72efda290df1ed46d754979bb7 extends Twig_Template
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
        $__internal_b9cee4043b4703ddecaefd658e345530b51bbe39de35ad7083a577cdf47532ac = $this->env->getExtension("native_profiler");
        $__internal_b9cee4043b4703ddecaefd658e345530b51bbe39de35ad7083a577cdf47532ac->enter($__internal_b9cee4043b4703ddecaefd658e345530b51bbe39de35ad7083a577cdf47532ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_object.html.twig"));

        // line 1
        echo "<span class=\"label\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.object", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_b9cee4043b4703ddecaefd658e345530b51bbe39de35ad7083a577cdf47532ac->leave($__internal_b9cee4043b4703ddecaefd658e345530b51bbe39de35ad7083a577cdf47532ac_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_object.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <span class="label">{{ 'label.object'|trans(domain = 'EasyAdminBundle') }}</span>*/
/* */
