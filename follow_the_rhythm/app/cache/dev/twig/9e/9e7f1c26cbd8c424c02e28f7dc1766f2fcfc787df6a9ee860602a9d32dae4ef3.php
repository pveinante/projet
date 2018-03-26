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
        $__internal_870450567758d0c49338eeed2dcba25351dddccd70aefefdaddeb189a8d1a1b7 = $this->env->getExtension("native_profiler");
        $__internal_870450567758d0c49338eeed2dcba25351dddccd70aefefdaddeb189a8d1a1b7->enter($__internal_870450567758d0c49338eeed2dcba25351dddccd70aefefdaddeb189a8d1a1b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_870450567758d0c49338eeed2dcba25351dddccd70aefefdaddeb189a8d1a1b7->leave($__internal_870450567758d0c49338eeed2dcba25351dddccd70aefefdaddeb189a8d1a1b7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9ca96087c87b29b7a90b2257e8f8c8d02511382c3d2c5c6f3784882a68352b5b = $this->env->getExtension("native_profiler");
        $__internal_9ca96087c87b29b7a90b2257e8f8c8d02511382c3d2c5c6f3784882a68352b5b->enter($__internal_9ca96087c87b29b7a90b2257e8f8c8d02511382c3d2c5c6f3784882a68352b5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9ca96087c87b29b7a90b2257e8f8c8d02511382c3d2c5c6f3784882a68352b5b->leave($__internal_9ca96087c87b29b7a90b2257e8f8c8d02511382c3d2c5c6f3784882a68352b5b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8435e7a2be9dbcdfc4b56ba5bf852f023fcc7ef0c34625fff63a712db8ddd2e9 = $this->env->getExtension("native_profiler");
        $__internal_8435e7a2be9dbcdfc4b56ba5bf852f023fcc7ef0c34625fff63a712db8ddd2e9->enter($__internal_8435e7a2be9dbcdfc4b56ba5bf852f023fcc7ef0c34625fff63a712db8ddd2e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8435e7a2be9dbcdfc4b56ba5bf852f023fcc7ef0c34625fff63a712db8ddd2e9->leave($__internal_8435e7a2be9dbcdfc4b56ba5bf852f023fcc7ef0c34625fff63a712db8ddd2e9_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_680925a09b58b23d41bcb03fb5cf7c70fba5dd9e6a08f454ee218b0e6f3d4545 = $this->env->getExtension("native_profiler");
        $__internal_680925a09b58b23d41bcb03fb5cf7c70fba5dd9e6a08f454ee218b0e6f3d4545->enter($__internal_680925a09b58b23d41bcb03fb5cf7c70fba5dd9e6a08f454ee218b0e6f3d4545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_680925a09b58b23d41bcb03fb5cf7c70fba5dd9e6a08f454ee218b0e6f3d4545->leave($__internal_680925a09b58b23d41bcb03fb5cf7c70fba5dd9e6a08f454ee218b0e6f3d4545_prof);

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
