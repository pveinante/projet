<?php

/* EasyAdminBundle:default:label_inaccessible.html.twig */
class __TwigTemplate_c4e741e8d4254bbdc709c8b053818275c9380bda2d7f12b88c54422adbb3f877 extends Twig_Template
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
        $__internal_c28ed51b8ce2ac032ec1740a100f555b1191fb4b169dbf0b127b1c6940eb8532 = $this->env->getExtension("native_profiler");
        $__internal_c28ed51b8ce2ac032ec1740a100f555b1191fb4b169dbf0b127b1c6940eb8532->enter($__internal_c28ed51b8ce2ac032ec1740a100f555b1191fb4b169dbf0b127b1c6940eb8532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_inaccessible.html.twig"));

        // line 2
        echo "
<span class=\"label label-danger\" title=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.inaccessible.explanation", array(), "EasyAdminBundle"), "html", null, true);
        echo "\">
    ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.inaccessible", array(), "EasyAdminBundle"), "html", null, true);
        echo "
</span>
";
        
        $__internal_c28ed51b8ce2ac032ec1740a100f555b1191fb4b169dbf0b127b1c6940eb8532->leave($__internal_c28ed51b8ce2ac032ec1740a100f555b1191fb4b169dbf0b127b1c6940eb8532_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:label_inaccessible.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 3,  22 => 2,);
    }
}
/* {% trans_default_domain 'EasyAdminBundle' %}*/
/* */
/* <span class="label label-danger" title="{{ 'label.inaccessible.explanation'|trans }}">*/
/*     {{ 'label.inaccessible'|trans }}*/
/* </span>*/
/* */
