<?php

/* @EasyAdmin/default/label_null.html.twig */
class __TwigTemplate_660cc956dafce41fb9ecd1402a867aea40cc1d206be4e0c00a9c2624ef168033 extends Twig_Template
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
        $__internal_d0fe29e06995f29413fe47b5831273c8fd6ff8cbdf2927304777e80d34a9f772 = $this->env->getExtension("native_profiler");
        $__internal_d0fe29e06995f29413fe47b5831273c8fd6ff8cbdf2927304777e80d34a9f772->enter($__internal_d0fe29e06995f29413fe47b5831273c8fd6ff8cbdf2927304777e80d34a9f772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/label_null.html.twig"));

        // line 1
        echo "<span class=\"label\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.null", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_d0fe29e06995f29413fe47b5831273c8fd6ff8cbdf2927304777e80d34a9f772->leave($__internal_d0fe29e06995f29413fe47b5831273c8fd6ff8cbdf2927304777e80d34a9f772_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/label_null.html.twig";
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
/* <span class="label">{{ 'label.null'|trans(domain = 'EasyAdminBundle') }}</span>*/
/* */
