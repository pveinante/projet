<?php

/* EasyAdminBundle:default:field_file.html.twig */
class __TwigTemplate_cf053c8a3e5e798f5ee0779b28360141315ad9a35fde225ecfa9456dd9a21476 extends Twig_Template
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
        $__internal_8228520a32fccb3a17cbeed0855525f50d8203d7e0e1504de0a8b464435b8e2e = $this->env->getExtension("native_profiler");
        $__internal_8228520a32fccb3a17cbeed0855525f50d8203d7e0e1504de0a8b464435b8e2e->enter($__internal_8228520a32fccb3a17cbeed0855525f50d8203d7e0e1504de0a8b464435b8e2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_file.html.twig"));

        // line 1
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
        echo "\" target=\"_blank\">
    ";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('easyadmin_extension')->truncateText($this->env, (isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename"))), "html", null, true);
        echo "
</a>
";
        
        $__internal_8228520a32fccb3a17cbeed0855525f50d8203d7e0e1504de0a8b464435b8e2e->leave($__internal_8228520a32fccb3a17cbeed0855525f50d8203d7e0e1504de0a8b464435b8e2e_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_file.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 2,  22 => 1,);
    }
}
/* <a href="{{ asset(value) }}" target="_blank">*/
/*     {{ filename|easyadmin_truncate }}*/
/* </a>*/
/* */