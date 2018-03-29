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
        $__internal_fc58c1a3131badbfe7af0410e429dd60e8549bdf9da34082d071e2095cf4e2f2 = $this->env->getExtension("native_profiler");
        $__internal_fc58c1a3131badbfe7af0410e429dd60e8549bdf9da34082d071e2095cf4e2f2->enter($__internal_fc58c1a3131badbfe7af0410e429dd60e8549bdf9da34082d071e2095cf4e2f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_fc58c1a3131badbfe7af0410e429dd60e8549bdf9da34082d071e2095cf4e2f2->leave($__internal_fc58c1a3131badbfe7af0410e429dd60e8549bdf9da34082d071e2095cf4e2f2_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_26630464feec30ea2d79ebfdc315fc5407bc36dd2fac55de22589253289639d8 = $this->env->getExtension("native_profiler");
        $__internal_26630464feec30ea2d79ebfdc315fc5407bc36dd2fac55de22589253289639d8->enter($__internal_26630464feec30ea2d79ebfdc315fc5407bc36dd2fac55de22589253289639d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_26630464feec30ea2d79ebfdc315fc5407bc36dd2fac55de22589253289639d8->leave($__internal_26630464feec30ea2d79ebfdc315fc5407bc36dd2fac55de22589253289639d8_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_0ab8a9242cb0738b74c4e7427bea681514d74a2700b4bd2afd4ef7404aed8437 = $this->env->getExtension("native_profiler");
        $__internal_0ab8a9242cb0738b74c4e7427bea681514d74a2700b4bd2afd4ef7404aed8437->enter($__internal_0ab8a9242cb0738b74c4e7427bea681514d74a2700b4bd2afd4ef7404aed8437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_0ab8a9242cb0738b74c4e7427bea681514d74a2700b4bd2afd4ef7404aed8437->leave($__internal_0ab8a9242cb0738b74c4e7427bea681514d74a2700b4bd2afd4ef7404aed8437_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_de2739f12252d6989c258375e5e41f3eb253b7e2473eb8e2dc1b77f7cb905ec2 = $this->env->getExtension("native_profiler");
        $__internal_de2739f12252d6989c258375e5e41f3eb253b7e2473eb8e2dc1b77f7cb905ec2->enter($__internal_de2739f12252d6989c258375e5e41f3eb253b7e2473eb8e2dc1b77f7cb905ec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_de2739f12252d6989c258375e5e41f3eb253b7e2473eb8e2dc1b77f7cb905ec2->leave($__internal_de2739f12252d6989c258375e5e41f3eb253b7e2473eb8e2dc1b77f7cb905ec2_prof);

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
