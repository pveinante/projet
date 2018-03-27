<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_9cc6c923619e9ee11733a1bb353de310ab16b31732cab813d0917857898c3147 extends Twig_Template
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
        $__internal_b132424192b472e832bbd2f10844bb3c9f05050bab8c4579fc8c778c0e666d9b = $this->env->getExtension("native_profiler");
        $__internal_b132424192b472e832bbd2f10844bb3c9f05050bab8c4579fc8c778c0e666d9b->enter($__internal_b132424192b472e832bbd2f10844bb3c9f05050bab8c4579fc8c778c0e666d9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_b132424192b472e832bbd2f10844bb3c9f05050bab8c4579fc8c778c0e666d9b->leave($__internal_b132424192b472e832bbd2f10844bb3c9f05050bab8c4579fc8c778c0e666d9b_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_358e82a95e665adbefc5a74b05a0ccb7ed3e951e56cca468f88eab806401f824 = $this->env->getExtension("native_profiler");
        $__internal_358e82a95e665adbefc5a74b05a0ccb7ed3e951e56cca468f88eab806401f824->enter($__internal_358e82a95e665adbefc5a74b05a0ccb7ed3e951e56cca468f88eab806401f824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_358e82a95e665adbefc5a74b05a0ccb7ed3e951e56cca468f88eab806401f824->leave($__internal_358e82a95e665adbefc5a74b05a0ccb7ed3e951e56cca468f88eab806401f824_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_b0808eedd0b4f24757e7963b58d8786fb0fa5d4ff2eba854208c13ef51f21309 = $this->env->getExtension("native_profiler");
        $__internal_b0808eedd0b4f24757e7963b58d8786fb0fa5d4ff2eba854208c13ef51f21309->enter($__internal_b0808eedd0b4f24757e7963b58d8786fb0fa5d4ff2eba854208c13ef51f21309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_b0808eedd0b4f24757e7963b58d8786fb0fa5d4ff2eba854208c13ef51f21309->leave($__internal_b0808eedd0b4f24757e7963b58d8786fb0fa5d4ff2eba854208c13ef51f21309_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_594b1179b6fd84558e501d92a557a2cbd27a678cdc403f086f2f52642d945963 = $this->env->getExtension("native_profiler");
        $__internal_594b1179b6fd84558e501d92a557a2cbd27a678cdc403f086f2f52642d945963->enter($__internal_594b1179b6fd84558e501d92a557a2cbd27a678cdc403f086f2f52642d945963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_594b1179b6fd84558e501d92a557a2cbd27a678cdc403f086f2f52642d945963->leave($__internal_594b1179b6fd84558e501d92a557a2cbd27a678cdc403f086f2f52642d945963_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 11,  57 => 8,  51 => 6,  42 => 3,  36 => 1,  29 => 11,  27 => 6,  25 => 1,);
    }
}
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
