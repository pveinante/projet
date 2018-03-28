<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_d18405d3cd0d450746e677bf6f416da9173f0244826fce16ea6cd7cb95b37746 extends Twig_Template
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
        $__internal_a8d7c10c9388906585eeb24224b4d516379b940073880e5936ff797bc7a75d84 = $this->env->getExtension("native_profiler");
        $__internal_a8d7c10c9388906585eeb24224b4d516379b940073880e5936ff797bc7a75d84->enter($__internal_a8d7c10c9388906585eeb24224b4d516379b940073880e5936ff797bc7a75d84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 1
        echo "<div class=\"panel panel-default\">
    <div class=\"panel-heading\"><h2><b><i class=\"fa fa-user\" aria-hidden=\"true\"></i> Se connecter</b></h2></div>
        <div class=\"list-group\">
            <div class=\"list-group-item\">
            
            <form action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_registration_register\">
                ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                <div>
                    <input type=\"submit\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                </div>
            </form>
            </div>
        </div>
    </div>
</div>

";
        
        $__internal_a8d7c10c9388906585eeb24224b4d516379b940073880e5936ff797bc7a75d84->leave($__internal_a8d7c10c9388906585eeb24224b4d516379b940073880e5936ff797bc7a75d84_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 9,  35 => 7,  29 => 6,  22 => 1,);
    }
}
/* <div class="panel panel-default">*/
/*     <div class="panel-heading"><h2><b><i class="fa fa-user" aria-hidden="true"></i> Se connecter</b></h2></div>*/
/*         <div class="list-group">*/
/*             <div class="list-group-item">*/
/*             */
/*             <form action="{{ path('fos_user_registration_register') }}" {{ form_enctype(form) }} method="POST" class="fos_user_registration_register">*/
/*                 {{ form_widget(form) }}*/
/*                 <div>*/
/*                     <input type="submit" value="{{ 'registration.submit'|trans({}, 'FOSUserBundle') }}" />*/
/*                 </div>*/
/*             </form>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* */
