<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_784d8ce5d62b30ad23639446c655710e9df4282b9cfe564187fdfc7433c5c6e9 extends Twig_Template
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
        $__internal_9e939793b12dc00e3748a4e9ad3429439a01a80744cdfd66ec7a7a73221894cd = $this->env->getExtension("native_profiler");
        $__internal_9e939793b12dc00e3748a4e9ad3429439a01a80744cdfd66ec7a7a73221894cd->enter($__internal_9e939793b12dc00e3748a4e9ad3429439a01a80744cdfd66ec7a7a73221894cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e939793b12dc00e3748a4e9ad3429439a01a80744cdfd66ec7a7a73221894cd->leave($__internal_9e939793b12dc00e3748a4e9ad3429439a01a80744cdfd66ec7a7a73221894cd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0e3679b6c0b5575a2bccaacd8ffd4f4de0bc929a19b9695945810099c5c95565 = $this->env->getExtension("native_profiler");
        $__internal_0e3679b6c0b5575a2bccaacd8ffd4f4de0bc929a19b9695945810099c5c95565->enter($__internal_0e3679b6c0b5575a2bccaacd8ffd4f4de0bc929a19b9695945810099c5c95565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0e3679b6c0b5575a2bccaacd8ffd4f4de0bc929a19b9695945810099c5c95565->leave($__internal_0e3679b6c0b5575a2bccaacd8ffd4f4de0bc929a19b9695945810099c5c95565_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_eedb2ebd2bf58709a0d4cb09339c6076c5bef5a5c11b398f9faf9962a36a74d5 = $this->env->getExtension("native_profiler");
        $__internal_eedb2ebd2bf58709a0d4cb09339c6076c5bef5a5c11b398f9faf9962a36a74d5->enter($__internal_eedb2ebd2bf58709a0d4cb09339c6076c5bef5a5c11b398f9faf9962a36a74d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_eedb2ebd2bf58709a0d4cb09339c6076c5bef5a5c11b398f9faf9962a36a74d5->leave($__internal_eedb2ebd2bf58709a0d4cb09339c6076c5bef5a5c11b398f9faf9962a36a74d5_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e51946ef33cecea284ba61ef5b85deb16608b21290c04fb18834bb43a1a9500b = $this->env->getExtension("native_profiler");
        $__internal_e51946ef33cecea284ba61ef5b85deb16608b21290c04fb18834bb43a1a9500b->enter($__internal_e51946ef33cecea284ba61ef5b85deb16608b21290c04fb18834bb43a1a9500b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_e51946ef33cecea284ba61ef5b85deb16608b21290c04fb18834bb43a1a9500b->leave($__internal_e51946ef33cecea284ba61ef5b85deb16608b21290c04fb18834bb43a1a9500b_prof);

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
