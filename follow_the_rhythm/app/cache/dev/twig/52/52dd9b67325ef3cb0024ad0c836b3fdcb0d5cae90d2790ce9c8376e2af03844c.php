<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_d80aa0eaa5b849d590d6a9ea9f64ef045a331d6e7f8ace58198c06a76c0c8cfb extends Twig_Template
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
        $__internal_6e85fd13bf43cafe7861d4b16c6bb4800efc1d4228fd2420969fcf7de6283266 = $this->env->getExtension("native_profiler");
        $__internal_6e85fd13bf43cafe7861d4b16c6bb4800efc1d4228fd2420969fcf7de6283266->enter($__internal_6e85fd13bf43cafe7861d4b16c6bb4800efc1d4228fd2420969fcf7de6283266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_6e85fd13bf43cafe7861d4b16c6bb4800efc1d4228fd2420969fcf7de6283266->leave($__internal_6e85fd13bf43cafe7861d4b16c6bb4800efc1d4228fd2420969fcf7de6283266_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
