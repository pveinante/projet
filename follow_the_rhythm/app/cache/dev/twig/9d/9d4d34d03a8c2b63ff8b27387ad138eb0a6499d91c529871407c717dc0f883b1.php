<?php

/* FOSUserBundle:Group:new_content.html.twig */
class __TwigTemplate_1714851eaff0ca7f025e70525c4cfb9041e8f819e6fa1a370a9f5512d9fc1097 extends Twig_Template
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
        $__internal_e03ffcd7208cfdc54d874b7ad0b1ded68e26c3d40893c0ab8105bc9ca2b22474 = $this->env->getExtension("native_profiler");
        $__internal_e03ffcd7208cfdc54d874b7ad0b1ded68e26c3d40893c0ab8105bc9ca2b22474->enter($__internal_e03ffcd7208cfdc54d874b7ad0b1ded68e26c3d40893c0ab8105bc9ca2b22474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new_content.html.twig"));

        // line 1
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_group_new");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_group_new\">
    ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.new.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_e03ffcd7208cfdc54d874b7ad0b1ded68e26c3d40893c0ab8105bc9ca2b22474->leave($__internal_e03ffcd7208cfdc54d874b7ad0b1ded68e26c3d40893c0ab8105bc9ca2b22474_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 4,  29 => 2,  22 => 1,);
    }
}
/* <form action="{{ path('fos_user_group_new') }}" {{ form_enctype(form) }} method="POST" class="fos_user_group_new">*/
/*     {{ form_widget(form) }}*/
/*     <div>*/
/*         <input type="submit" value="{{ 'group.new.submit'|trans([], 'FOSUserBundle') }}" />*/
/*     </div>*/
/* </form>*/
/* */
