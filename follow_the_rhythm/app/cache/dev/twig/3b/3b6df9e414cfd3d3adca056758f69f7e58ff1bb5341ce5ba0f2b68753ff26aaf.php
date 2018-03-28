<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_ccfbefc0ead1af44ab5911fb484291570823df8857d6dd2bde6bf7f485c39872 extends Twig_Template
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
        $__internal_646ce6dee3beb24ef5ec0f0c80dcb0032407ae94743cbe2c0735d706c5c28ea1 = $this->env->getExtension("native_profiler");
        $__internal_646ce6dee3beb24ef5ec0f0c80dcb0032407ae94743cbe2c0735d706c5c28ea1->enter($__internal_646ce6dee3beb24ef5ec0f0c80dcb0032407ae94743cbe2c0735d706c5c28ea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 1
        echo "

<div class=\"panel panel-default\">
    <div class=\"panel-heading\"><h2><b><i class=\"fa fa-user\" aria-hidden=\"true\"></i> Votre profil</b></h2></div>
        <div class=\"list-group\">
            <div class=\"list-group-item\">
                <div class=\"fos_user_user_show\">
                    <p>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
                    <p>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_646ce6dee3beb24ef5ec0f0c80dcb0032407ae94743cbe2c0735d706c5c28ea1->leave($__internal_646ce6dee3beb24ef5ec0f0c80dcb0032407ae94743cbe2c0735d706c5c28ea1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 9,  31 => 8,  22 => 1,);
    }
}
/* */
/* */
/* <div class="panel panel-default">*/
/*     <div class="panel-heading"><h2><b><i class="fa fa-user" aria-hidden="true"></i> Votre profil</b></h2></div>*/
/*         <div class="list-group">*/
/*             <div class="list-group-item">*/
/*                 <div class="fos_user_user_show">*/
/*                     <p>{{ 'profile.show.username'|trans({}, 'FOSUserBundle') }}: {{ user.username }}</p>*/
/*                     <p>{{ 'profile.show.email'|trans({}, 'FOSUserBundle') }}: {{ user.email }}</p>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
