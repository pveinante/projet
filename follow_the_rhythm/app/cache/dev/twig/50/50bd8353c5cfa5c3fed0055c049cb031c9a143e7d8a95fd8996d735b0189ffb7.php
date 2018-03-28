<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_a2b0329a51f58b12cb7a9962ec9d336f70280cfeba7f780dc3c004873652f203 extends Twig_Template
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
        $__internal_0b947797827d0e460cda028724e9c6417b973129f2992a48cbb8d1eedfa62d4c = $this->env->getExtension("native_profiler");
        $__internal_0b947797827d0e460cda028724e9c6417b973129f2992a48cbb8d1eedfa62d4c->enter($__internal_0b947797827d0e460cda028724e9c6417b973129f2992a48cbb8d1eedfa62d4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_group_show\">
    <p>";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_0b947797827d0e460cda028724e9c6417b973129f2992a48cbb8d1eedfa62d4c->leave($__internal_0b947797827d0e460cda028724e9c6417b973129f2992a48cbb8d1eedfa62d4c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans([], 'FOSUserBundle') }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
