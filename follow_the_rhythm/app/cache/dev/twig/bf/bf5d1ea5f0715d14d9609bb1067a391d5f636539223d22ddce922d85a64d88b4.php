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
        $__internal_094ffe66b21c4d07eccc3d4f9fee29839b783760260a570d68ab514f21cc047b = $this->env->getExtension("native_profiler");
        $__internal_094ffe66b21c4d07eccc3d4f9fee29839b783760260a570d68ab514f21cc047b->enter($__internal_094ffe66b21c4d07eccc3d4f9fee29839b783760260a570d68ab514f21cc047b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_094ffe66b21c4d07eccc3d4f9fee29839b783760260a570d68ab514f21cc047b->leave($__internal_094ffe66b21c4d07eccc3d4f9fee29839b783760260a570d68ab514f21cc047b_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_26f777a9eaf70a13e603d24dba8ed69a7e379641c83fa79b3460eb93a0763a44 = $this->env->getExtension("native_profiler");
        $__internal_26f777a9eaf70a13e603d24dba8ed69a7e379641c83fa79b3460eb93a0763a44->enter($__internal_26f777a9eaf70a13e603d24dba8ed69a7e379641c83fa79b3460eb93a0763a44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_26f777a9eaf70a13e603d24dba8ed69a7e379641c83fa79b3460eb93a0763a44->leave($__internal_26f777a9eaf70a13e603d24dba8ed69a7e379641c83fa79b3460eb93a0763a44_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_36ae3d82de2dabc9be0aa8323d7e74872a2e368908f258895f53689173e6a570 = $this->env->getExtension("native_profiler");
        $__internal_36ae3d82de2dabc9be0aa8323d7e74872a2e368908f258895f53689173e6a570->enter($__internal_36ae3d82de2dabc9be0aa8323d7e74872a2e368908f258895f53689173e6a570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_36ae3d82de2dabc9be0aa8323d7e74872a2e368908f258895f53689173e6a570->leave($__internal_36ae3d82de2dabc9be0aa8323d7e74872a2e368908f258895f53689173e6a570_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_e92eb0292d072aa1612d21394a954ce5733cb3f9f5f4f39b42b8f86528a5b90d = $this->env->getExtension("native_profiler");
        $__internal_e92eb0292d072aa1612d21394a954ce5733cb3f9f5f4f39b42b8f86528a5b90d->enter($__internal_e92eb0292d072aa1612d21394a954ce5733cb3f9f5f4f39b42b8f86528a5b90d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_e92eb0292d072aa1612d21394a954ce5733cb3f9f5f4f39b42b8f86528a5b90d->leave($__internal_e92eb0292d072aa1612d21394a954ce5733cb3f9f5f4f39b42b8f86528a5b90d_prof);

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
