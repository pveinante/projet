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
        $__internal_f47bf9a83814f11f0460fa33e278dff6e92741dab09c834a96f4721b29c8b371 = $this->env->getExtension("native_profiler");
        $__internal_f47bf9a83814f11f0460fa33e278dff6e92741dab09c834a96f4721b29c8b371->enter($__internal_f47bf9a83814f11f0460fa33e278dff6e92741dab09c834a96f4721b29c8b371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_f47bf9a83814f11f0460fa33e278dff6e92741dab09c834a96f4721b29c8b371->leave($__internal_f47bf9a83814f11f0460fa33e278dff6e92741dab09c834a96f4721b29c8b371_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_dadd38ac8f6625327912f425063f101a66d4483f0b3ac2dd19d0462fa79bbae2 = $this->env->getExtension("native_profiler");
        $__internal_dadd38ac8f6625327912f425063f101a66d4483f0b3ac2dd19d0462fa79bbae2->enter($__internal_dadd38ac8f6625327912f425063f101a66d4483f0b3ac2dd19d0462fa79bbae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_dadd38ac8f6625327912f425063f101a66d4483f0b3ac2dd19d0462fa79bbae2->leave($__internal_dadd38ac8f6625327912f425063f101a66d4483f0b3ac2dd19d0462fa79bbae2_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_900d93c13ef2485504482cab4990b1400c54323e1fe65f3d9645f95b543e5aa7 = $this->env->getExtension("native_profiler");
        $__internal_900d93c13ef2485504482cab4990b1400c54323e1fe65f3d9645f95b543e5aa7->enter($__internal_900d93c13ef2485504482cab4990b1400c54323e1fe65f3d9645f95b543e5aa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_900d93c13ef2485504482cab4990b1400c54323e1fe65f3d9645f95b543e5aa7->leave($__internal_900d93c13ef2485504482cab4990b1400c54323e1fe65f3d9645f95b543e5aa7_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_483a1c4bc4d4da1bf009c2e5174ff42044ec13da6721d495c9f37f0f053c3c11 = $this->env->getExtension("native_profiler");
        $__internal_483a1c4bc4d4da1bf009c2e5174ff42044ec13da6721d495c9f37f0f053c3c11->enter($__internal_483a1c4bc4d4da1bf009c2e5174ff42044ec13da6721d495c9f37f0f053c3c11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_483a1c4bc4d4da1bf009c2e5174ff42044ec13da6721d495c9f37f0f053c3c11->leave($__internal_483a1c4bc4d4da1bf009c2e5174ff42044ec13da6721d495c9f37f0f053c3c11_prof);

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
