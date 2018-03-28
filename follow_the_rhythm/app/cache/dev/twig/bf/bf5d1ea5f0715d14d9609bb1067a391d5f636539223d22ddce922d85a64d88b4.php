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
        $__internal_d4b10c5a9b85556cd8167ca12c96aed2c8c10028191921859d51efa926421082 = $this->env->getExtension("native_profiler");
        $__internal_d4b10c5a9b85556cd8167ca12c96aed2c8c10028191921859d51efa926421082->enter($__internal_d4b10c5a9b85556cd8167ca12c96aed2c8c10028191921859d51efa926421082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_d4b10c5a9b85556cd8167ca12c96aed2c8c10028191921859d51efa926421082->leave($__internal_d4b10c5a9b85556cd8167ca12c96aed2c8c10028191921859d51efa926421082_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_0e60b773a8469a1de31471f370c58fe1b3bb75e5e9623ac43a328de0c36e45dc = $this->env->getExtension("native_profiler");
        $__internal_0e60b773a8469a1de31471f370c58fe1b3bb75e5e9623ac43a328de0c36e45dc->enter($__internal_0e60b773a8469a1de31471f370c58fe1b3bb75e5e9623ac43a328de0c36e45dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_0e60b773a8469a1de31471f370c58fe1b3bb75e5e9623ac43a328de0c36e45dc->leave($__internal_0e60b773a8469a1de31471f370c58fe1b3bb75e5e9623ac43a328de0c36e45dc_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_aa30819cc07124ebbe2dc6f82b5c6f88df096f12844712a2b9bd8dc739a2c222 = $this->env->getExtension("native_profiler");
        $__internal_aa30819cc07124ebbe2dc6f82b5c6f88df096f12844712a2b9bd8dc739a2c222->enter($__internal_aa30819cc07124ebbe2dc6f82b5c6f88df096f12844712a2b9bd8dc739a2c222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_aa30819cc07124ebbe2dc6f82b5c6f88df096f12844712a2b9bd8dc739a2c222->leave($__internal_aa30819cc07124ebbe2dc6f82b5c6f88df096f12844712a2b9bd8dc739a2c222_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_91df8886e0d69d283921bedb14ee3421b006b459ba1557f3b11ea33146245af7 = $this->env->getExtension("native_profiler");
        $__internal_91df8886e0d69d283921bedb14ee3421b006b459ba1557f3b11ea33146245af7->enter($__internal_91df8886e0d69d283921bedb14ee3421b006b459ba1557f3b11ea33146245af7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_91df8886e0d69d283921bedb14ee3421b006b459ba1557f3b11ea33146245af7->leave($__internal_91df8886e0d69d283921bedb14ee3421b006b459ba1557f3b11ea33146245af7_prof);

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
