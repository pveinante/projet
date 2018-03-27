<?php

/* EasyAdminBundle:default:label_null.html.twig */
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
        $__internal_051f19ee01892a4d5606ecfefb10201bf833383fcd82a6e38b60f93ca0d563a5 = $this->env->getExtension("native_profiler");
        $__internal_051f19ee01892a4d5606ecfefb10201bf833383fcd82a6e38b60f93ca0d563a5->enter($__internal_051f19ee01892a4d5606ecfefb10201bf833383fcd82a6e38b60f93ca0d563a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_null.html.twig"));

        // line 1
        echo "<span class=\"label\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.null", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_051f19ee01892a4d5606ecfefb10201bf833383fcd82a6e38b60f93ca0d563a5->leave($__internal_051f19ee01892a4d5606ecfefb10201bf833383fcd82a6e38b60f93ca0d563a5_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:label_null.html.twig";
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
