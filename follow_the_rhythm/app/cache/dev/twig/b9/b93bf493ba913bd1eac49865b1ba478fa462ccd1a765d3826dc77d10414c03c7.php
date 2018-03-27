<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_d142351bbf9e24d2f8eb36b195e8784a3f3faabf18325a6de089ad13ef764914 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f29928515e24003b51d5677737b0ab1660bdb53b49d09a08d47faa0b8da173e0 = $this->env->getExtension("native_profiler");
        $__internal_f29928515e24003b51d5677737b0ab1660bdb53b49d09a08d47faa0b8da173e0->enter($__internal_f29928515e24003b51d5677737b0ab1660bdb53b49d09a08d47faa0b8da173e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_f29928515e24003b51d5677737b0ab1660bdb53b49d09a08d47faa0b8da173e0->leave($__internal_f29928515e24003b51d5677737b0ab1660bdb53b49d09a08d47faa0b8da173e0_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_d7d6ba3cf9f905c9198e9a6985f16624b4465ab918440197c2d08a981ea8c8bc = $this->env->getExtension("native_profiler");
        $__internal_d7d6ba3cf9f905c9198e9a6985f16624b4465ab918440197c2d08a981ea8c8bc->enter($__internal_d7d6ba3cf9f905c9198e9a6985f16624b4465ab918440197c2d08a981ea8c8bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d7d6ba3cf9f905c9198e9a6985f16624b4465ab918440197c2d08a981ea8c8bc->leave($__internal_d7d6ba3cf9f905c9198e9a6985f16624b4465ab918440197c2d08a981ea8c8bc_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_a514207a8853ce857a258b1da7dc7a7a53375ac51c45067a6e611987f1be14b8 = $this->env->getExtension("native_profiler");
        $__internal_a514207a8853ce857a258b1da7dc7a7a53375ac51c45067a6e611987f1be14b8->enter($__internal_a514207a8853ce857a258b1da7dc7a7a53375ac51c45067a6e611987f1be14b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a514207a8853ce857a258b1da7dc7a7a53375ac51c45067a6e611987f1be14b8->leave($__internal_a514207a8853ce857a258b1da7dc7a7a53375ac51c45067a6e611987f1be14b8_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_6c7dc6fb2aa0fb1118a1d7955bb1546344a1b06da0d41840a3d09927b897056f = $this->env->getExtension("native_profiler");
        $__internal_6c7dc6fb2aa0fb1118a1d7955bb1546344a1b06da0d41840a3d09927b897056f->enter($__internal_6c7dc6fb2aa0fb1118a1d7955bb1546344a1b06da0d41840a3d09927b897056f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_6c7dc6fb2aa0fb1118a1d7955bb1546344a1b06da0d41840a3d09927b897056f->leave($__internal_6c7dc6fb2aa0fb1118a1d7955bb1546344a1b06da0d41840a3d09927b897056f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 11,  57 => 8,  51 => 6,  42 => 3,  36 => 1,  29 => 11,  27 => 6,  25 => 1,);
    }
}
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
