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
        $__internal_c7fbfb0d0fe8f900d3adfdf6798fc31c2c86871488720df9c33f22be3272911b = $this->env->getExtension("native_profiler");
        $__internal_c7fbfb0d0fe8f900d3adfdf6798fc31c2c86871488720df9c33f22be3272911b->enter($__internal_c7fbfb0d0fe8f900d3adfdf6798fc31c2c86871488720df9c33f22be3272911b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7fbfb0d0fe8f900d3adfdf6798fc31c2c86871488720df9c33f22be3272911b->leave($__internal_c7fbfb0d0fe8f900d3adfdf6798fc31c2c86871488720df9c33f22be3272911b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e21b5700b580b3c2a9fe66c41e9c764041a98a4070613c3dd9e76eb8657e5a5f = $this->env->getExtension("native_profiler");
        $__internal_e21b5700b580b3c2a9fe66c41e9c764041a98a4070613c3dd9e76eb8657e5a5f->enter($__internal_e21b5700b580b3c2a9fe66c41e9c764041a98a4070613c3dd9e76eb8657e5a5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e21b5700b580b3c2a9fe66c41e9c764041a98a4070613c3dd9e76eb8657e5a5f->leave($__internal_e21b5700b580b3c2a9fe66c41e9c764041a98a4070613c3dd9e76eb8657e5a5f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_286f11bfcaa5129196a18585e6db9fadc713c8bb415d9fed0ef5d91dc9da6e3a = $this->env->getExtension("native_profiler");
        $__internal_286f11bfcaa5129196a18585e6db9fadc713c8bb415d9fed0ef5d91dc9da6e3a->enter($__internal_286f11bfcaa5129196a18585e6db9fadc713c8bb415d9fed0ef5d91dc9da6e3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_286f11bfcaa5129196a18585e6db9fadc713c8bb415d9fed0ef5d91dc9da6e3a->leave($__internal_286f11bfcaa5129196a18585e6db9fadc713c8bb415d9fed0ef5d91dc9da6e3a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e8b5352878bdf03055724ff3a33f008e4e3d78a2c41192244cc78cadedbbb282 = $this->env->getExtension("native_profiler");
        $__internal_e8b5352878bdf03055724ff3a33f008e4e3d78a2c41192244cc78cadedbbb282->enter($__internal_e8b5352878bdf03055724ff3a33f008e4e3d78a2c41192244cc78cadedbbb282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_e8b5352878bdf03055724ff3a33f008e4e3d78a2c41192244cc78cadedbbb282->leave($__internal_e8b5352878bdf03055724ff3a33f008e4e3d78a2c41192244cc78cadedbbb282_prof);

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
