<?php

/* FOSUserBundle:ChangePassword:changePassword_content.html.twig */
class __TwigTemplate_eb80b6cbbf69567e57fe9cc0055cb9d78b7e02d27172974908cf5b980952285f extends Twig_Template
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
        $__internal_4716d6342a9c5c82600d8ccfcf723083067718564188440bb1518040f1d18587 = $this->env->getExtension("native_profiler");
        $__internal_4716d6342a9c5c82600d8ccfcf723083067718564188440bb1518040f1d18587->enter($__internal_4716d6342a9c5c82600d8ccfcf723083067718564188440bb1518040f1d18587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword_content.html.twig"));

        // line 1
        echo "<div class=\"panel panel-default\">
    <div class=\"panel-heading\"><h2><b><i class=\"fa fa-user\" aria-hidden=\"true\"></i> Changer de mot de passe</b></h2></div>
        <div class=\"list-group\">
            <div class=\"list-group-item\">
                <form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_change_password\">
                    ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                    <div>
                        <input type=\"submit\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("change_password.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>";
        
        $__internal_4716d6342a9c5c82600d8ccfcf723083067718564188440bb1518040f1d18587->leave($__internal_4716d6342a9c5c82600d8ccfcf723083067718564188440bb1518040f1d18587_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 8,  34 => 6,  28 => 5,  22 => 1,);
    }
}
/* <div class="panel panel-default">*/
/*     <div class="panel-heading"><h2><b><i class="fa fa-user" aria-hidden="true"></i> Changer de mot de passe</b></h2></div>*/
/*         <div class="list-group">*/
/*             <div class="list-group-item">*/
/*                 <form action="{{ path('fos_user_change_password') }}" {{ form_enctype(form) }} method="POST" class="fos_user_change_password">*/
/*                     {{ form_widget(form) }}*/
/*                     <div>*/
/*                         <input type="submit" value="{{ 'change_password.submit'|trans({}, 'FOSUserBundle') }}" />*/
/*                     </div>*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
