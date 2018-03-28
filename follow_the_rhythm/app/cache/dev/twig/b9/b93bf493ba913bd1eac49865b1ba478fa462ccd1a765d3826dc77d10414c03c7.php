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
        $__internal_d2be6e3d07fd4ba745a27633e8881fbb7dfdd7e1c1f7654367c732e4d6da78cf = $this->env->getExtension("native_profiler");
        $__internal_d2be6e3d07fd4ba745a27633e8881fbb7dfdd7e1c1f7654367c732e4d6da78cf->enter($__internal_d2be6e3d07fd4ba745a27633e8881fbb7dfdd7e1c1f7654367c732e4d6da78cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_d2be6e3d07fd4ba745a27633e8881fbb7dfdd7e1c1f7654367c732e4d6da78cf->leave($__internal_d2be6e3d07fd4ba745a27633e8881fbb7dfdd7e1c1f7654367c732e4d6da78cf_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_8a1866a57d1b70d1baa668658a73f5f1f6cad7454639b851506ee685fc549408 = $this->env->getExtension("native_profiler");
        $__internal_8a1866a57d1b70d1baa668658a73f5f1f6cad7454639b851506ee685fc549408->enter($__internal_8a1866a57d1b70d1baa668658a73f5f1f6cad7454639b851506ee685fc549408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_8a1866a57d1b70d1baa668658a73f5f1f6cad7454639b851506ee685fc549408->leave($__internal_8a1866a57d1b70d1baa668658a73f5f1f6cad7454639b851506ee685fc549408_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_205486ad88513703a2d694e2647cd36ee36b38036f375944345881e296942c4e = $this->env->getExtension("native_profiler");
        $__internal_205486ad88513703a2d694e2647cd36ee36b38036f375944345881e296942c4e->enter($__internal_205486ad88513703a2d694e2647cd36ee36b38036f375944345881e296942c4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_205486ad88513703a2d694e2647cd36ee36b38036f375944345881e296942c4e->leave($__internal_205486ad88513703a2d694e2647cd36ee36b38036f375944345881e296942c4e_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_9cf54e0a32b764dbd9628ae8954e7d6075ffea531c7a7502f64031d764dc928e = $this->env->getExtension("native_profiler");
        $__internal_9cf54e0a32b764dbd9628ae8954e7d6075ffea531c7a7502f64031d764dc928e->enter($__internal_9cf54e0a32b764dbd9628ae8954e7d6075ffea531c7a7502f64031d764dc928e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_9cf54e0a32b764dbd9628ae8954e7d6075ffea531c7a7502f64031d764dc928e->leave($__internal_9cf54e0a32b764dbd9628ae8954e7d6075ffea531c7a7502f64031d764dc928e_prof);

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
