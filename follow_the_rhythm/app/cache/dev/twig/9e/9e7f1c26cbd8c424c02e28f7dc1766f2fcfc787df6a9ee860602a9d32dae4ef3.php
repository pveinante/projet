<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_5d7324cd46c8ccf504b16bf16403b3f39dcf411ec892de1ed5623c6043076477 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_883e8d73bc1386baa544e7b220243e3faa14f10be2a6d8226707593636fd170c = $this->env->getExtension("native_profiler");
        $__internal_883e8d73bc1386baa544e7b220243e3faa14f10be2a6d8226707593636fd170c->enter($__internal_883e8d73bc1386baa544e7b220243e3faa14f10be2a6d8226707593636fd170c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_883e8d73bc1386baa544e7b220243e3faa14f10be2a6d8226707593636fd170c->leave($__internal_883e8d73bc1386baa544e7b220243e3faa14f10be2a6d8226707593636fd170c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1a28eb9ea260dc3d2748bf51f91ed87fea85d00ee370e2278e963d128e0a8676 = $this->env->getExtension("native_profiler");
        $__internal_1a28eb9ea260dc3d2748bf51f91ed87fea85d00ee370e2278e963d128e0a8676->enter($__internal_1a28eb9ea260dc3d2748bf51f91ed87fea85d00ee370e2278e963d128e0a8676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1a28eb9ea260dc3d2748bf51f91ed87fea85d00ee370e2278e963d128e0a8676->leave($__internal_1a28eb9ea260dc3d2748bf51f91ed87fea85d00ee370e2278e963d128e0a8676_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4d05260dd3efff625c5d1d0ddbfae1682cd9a0e42c670a458936da9963dabcbf = $this->env->getExtension("native_profiler");
        $__internal_4d05260dd3efff625c5d1d0ddbfae1682cd9a0e42c670a458936da9963dabcbf->enter($__internal_4d05260dd3efff625c5d1d0ddbfae1682cd9a0e42c670a458936da9963dabcbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4d05260dd3efff625c5d1d0ddbfae1682cd9a0e42c670a458936da9963dabcbf->leave($__internal_4d05260dd3efff625c5d1d0ddbfae1682cd9a0e42c670a458936da9963dabcbf_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c8184f948834046a49631c02681e5aab0ea4a0f2f32ab5cde6b6b97009361f9 = $this->env->getExtension("native_profiler");
        $__internal_9c8184f948834046a49631c02681e5aab0ea4a0f2f32ab5cde6b6b97009361f9->enter($__internal_9c8184f948834046a49631c02681e5aab0ea4a0f2f32ab5cde6b6b97009361f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_9c8184f948834046a49631c02681e5aab0ea4a0f2f32ab5cde6b6b97009361f9->leave($__internal_9c8184f948834046a49631c02681e5aab0ea4a0f2f32ab5cde6b6b97009361f9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
