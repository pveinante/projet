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
        $__internal_ee06eaf9b50f3c351c7fe38b33684e441ccdd05167e3b458b23383b115fe7279 = $this->env->getExtension("native_profiler");
        $__internal_ee06eaf9b50f3c351c7fe38b33684e441ccdd05167e3b458b23383b115fe7279->enter($__internal_ee06eaf9b50f3c351c7fe38b33684e441ccdd05167e3b458b23383b115fe7279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_ee06eaf9b50f3c351c7fe38b33684e441ccdd05167e3b458b23383b115fe7279->leave($__internal_ee06eaf9b50f3c351c7fe38b33684e441ccdd05167e3b458b23383b115fe7279_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_74fea4b0898fa123483a578f5eb46539e0557c5746a5b6ead9431a8638b4de8c = $this->env->getExtension("native_profiler");
        $__internal_74fea4b0898fa123483a578f5eb46539e0557c5746a5b6ead9431a8638b4de8c->enter($__internal_74fea4b0898fa123483a578f5eb46539e0557c5746a5b6ead9431a8638b4de8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_74fea4b0898fa123483a578f5eb46539e0557c5746a5b6ead9431a8638b4de8c->leave($__internal_74fea4b0898fa123483a578f5eb46539e0557c5746a5b6ead9431a8638b4de8c_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_03d526b36d6d00c25aedadf8651e5fc3ff0310b9b856527e05fe8dee67e38c2e = $this->env->getExtension("native_profiler");
        $__internal_03d526b36d6d00c25aedadf8651e5fc3ff0310b9b856527e05fe8dee67e38c2e->enter($__internal_03d526b36d6d00c25aedadf8651e5fc3ff0310b9b856527e05fe8dee67e38c2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_03d526b36d6d00c25aedadf8651e5fc3ff0310b9b856527e05fe8dee67e38c2e->leave($__internal_03d526b36d6d00c25aedadf8651e5fc3ff0310b9b856527e05fe8dee67e38c2e_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_21edd6303583ab8ae639790624d25663ee710f080169417c2e0ddf04428a45b0 = $this->env->getExtension("native_profiler");
        $__internal_21edd6303583ab8ae639790624d25663ee710f080169417c2e0ddf04428a45b0->enter($__internal_21edd6303583ab8ae639790624d25663ee710f080169417c2e0ddf04428a45b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_21edd6303583ab8ae639790624d25663ee710f080169417c2e0ddf04428a45b0->leave($__internal_21edd6303583ab8ae639790624d25663ee710f080169417c2e0ddf04428a45b0_prof);

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
