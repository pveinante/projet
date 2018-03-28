<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_f7aa460bd0789634aada3bccf2ddf9f4daa758ffb42bea2448e48bccaedd9469 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_544a76c3364442b315cd3270ff064127074a3f7ec865dfebb3f5a663edee59bd = $this->env->getExtension("native_profiler");
        $__internal_544a76c3364442b315cd3270ff064127074a3f7ec865dfebb3f5a663edee59bd->enter($__internal_544a76c3364442b315cd3270ff064127074a3f7ec865dfebb3f5a663edee59bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_544a76c3364442b315cd3270ff064127074a3f7ec865dfebb3f5a663edee59bd->leave($__internal_544a76c3364442b315cd3270ff064127074a3f7ec865dfebb3f5a663edee59bd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
