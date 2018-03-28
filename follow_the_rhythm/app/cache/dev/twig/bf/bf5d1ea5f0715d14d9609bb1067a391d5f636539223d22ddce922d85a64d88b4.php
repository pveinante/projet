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
        $__internal_cfea4e77dd9d59e9815a256e79a3d23933f469f2a08254a2390f12d1b46d5dfc = $this->env->getExtension("native_profiler");
        $__internal_cfea4e77dd9d59e9815a256e79a3d23933f469f2a08254a2390f12d1b46d5dfc->enter($__internal_cfea4e77dd9d59e9815a256e79a3d23933f469f2a08254a2390f12d1b46d5dfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_cfea4e77dd9d59e9815a256e79a3d23933f469f2a08254a2390f12d1b46d5dfc->leave($__internal_cfea4e77dd9d59e9815a256e79a3d23933f469f2a08254a2390f12d1b46d5dfc_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_40d2a50c4a1692632272d121d3beadd181f8251bfb7ff92b8a3d398b5bdc2610 = $this->env->getExtension("native_profiler");
        $__internal_40d2a50c4a1692632272d121d3beadd181f8251bfb7ff92b8a3d398b5bdc2610->enter($__internal_40d2a50c4a1692632272d121d3beadd181f8251bfb7ff92b8a3d398b5bdc2610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_40d2a50c4a1692632272d121d3beadd181f8251bfb7ff92b8a3d398b5bdc2610->leave($__internal_40d2a50c4a1692632272d121d3beadd181f8251bfb7ff92b8a3d398b5bdc2610_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_2f6d1c2f6ddf6d8b9628496dd6c9ac8a409b153c36cc0ab8757d7c57a09d015c = $this->env->getExtension("native_profiler");
        $__internal_2f6d1c2f6ddf6d8b9628496dd6c9ac8a409b153c36cc0ab8757d7c57a09d015c->enter($__internal_2f6d1c2f6ddf6d8b9628496dd6c9ac8a409b153c36cc0ab8757d7c57a09d015c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_2f6d1c2f6ddf6d8b9628496dd6c9ac8a409b153c36cc0ab8757d7c57a09d015c->leave($__internal_2f6d1c2f6ddf6d8b9628496dd6c9ac8a409b153c36cc0ab8757d7c57a09d015c_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_02b827ddbf1d4596e9c14e04b801914937895308c77fe5164a0b344bce70f7b4 = $this->env->getExtension("native_profiler");
        $__internal_02b827ddbf1d4596e9c14e04b801914937895308c77fe5164a0b344bce70f7b4->enter($__internal_02b827ddbf1d4596e9c14e04b801914937895308c77fe5164a0b344bce70f7b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_02b827ddbf1d4596e9c14e04b801914937895308c77fe5164a0b344bce70f7b4->leave($__internal_02b827ddbf1d4596e9c14e04b801914937895308c77fe5164a0b344bce70f7b4_prof);

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
