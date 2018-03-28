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
        $__internal_9e17c12a3ca740ab11dd93300e69186b101681e39a541bb25ff0274d09a0b01a = $this->env->getExtension("native_profiler");
        $__internal_9e17c12a3ca740ab11dd93300e69186b101681e39a541bb25ff0274d09a0b01a->enter($__internal_9e17c12a3ca740ab11dd93300e69186b101681e39a541bb25ff0274d09a0b01a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_object.html.twig"));

        // line 1
        echo "<span class=\"label\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.object", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_9e17c12a3ca740ab11dd93300e69186b101681e39a541bb25ff0274d09a0b01a->leave($__internal_9e17c12a3ca740ab11dd93300e69186b101681e39a541bb25ff0274d09a0b01a_prof);

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
