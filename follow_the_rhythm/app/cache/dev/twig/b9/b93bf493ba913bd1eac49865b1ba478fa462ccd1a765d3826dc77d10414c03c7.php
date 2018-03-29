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
        $__internal_8b758bc8c487797472247bc4f9d5669b6f439ff95fb3bf579da0b2be85c36a40 = $this->env->getExtension("native_profiler");
        $__internal_8b758bc8c487797472247bc4f9d5669b6f439ff95fb3bf579da0b2be85c36a40->enter($__internal_8b758bc8c487797472247bc4f9d5669b6f439ff95fb3bf579da0b2be85c36a40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_8b758bc8c487797472247bc4f9d5669b6f439ff95fb3bf579da0b2be85c36a40->leave($__internal_8b758bc8c487797472247bc4f9d5669b6f439ff95fb3bf579da0b2be85c36a40_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_9f115195c462f9459104fba1c1683c155ad4650e8ac0d4bd4b352a57eb2eb849 = $this->env->getExtension("native_profiler");
        $__internal_9f115195c462f9459104fba1c1683c155ad4650e8ac0d4bd4b352a57eb2eb849->enter($__internal_9f115195c462f9459104fba1c1683c155ad4650e8ac0d4bd4b352a57eb2eb849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_9f115195c462f9459104fba1c1683c155ad4650e8ac0d4bd4b352a57eb2eb849->leave($__internal_9f115195c462f9459104fba1c1683c155ad4650e8ac0d4bd4b352a57eb2eb849_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_b7c2117b90413dc8b35ad5992e2bb1fe509d1c1e11761ebe2e6bf5b704ea4a00 = $this->env->getExtension("native_profiler");
        $__internal_b7c2117b90413dc8b35ad5992e2bb1fe509d1c1e11761ebe2e6bf5b704ea4a00->enter($__internal_b7c2117b90413dc8b35ad5992e2bb1fe509d1c1e11761ebe2e6bf5b704ea4a00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_b7c2117b90413dc8b35ad5992e2bb1fe509d1c1e11761ebe2e6bf5b704ea4a00->leave($__internal_b7c2117b90413dc8b35ad5992e2bb1fe509d1c1e11761ebe2e6bf5b704ea4a00_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_cdd9a0870087e498b4630a259d971a10c198f995ea645824ef1d284f03de07e4 = $this->env->getExtension("native_profiler");
        $__internal_cdd9a0870087e498b4630a259d971a10c198f995ea645824ef1d284f03de07e4->enter($__internal_cdd9a0870087e498b4630a259d971a10c198f995ea645824ef1d284f03de07e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_cdd9a0870087e498b4630a259d971a10c198f995ea645824ef1d284f03de07e4->leave($__internal_cdd9a0870087e498b4630a259d971a10c198f995ea645824ef1d284f03de07e4_prof);

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
