<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_10ea422cb70cf26b1ed6e4b4aad288ed30bd226c5e10de4c8d3c1ecab639c65e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_21e142e1bb5a0d81f0daa813057b69997e2f5135e3994ce49c7d775afbaa0007 = $this->env->getExtension("native_profiler");
        $__internal_21e142e1bb5a0d81f0daa813057b69997e2f5135e3994ce49c7d775afbaa0007->enter($__internal_21e142e1bb5a0d81f0daa813057b69997e2f5135e3994ce49c7d775afbaa0007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21e142e1bb5a0d81f0daa813057b69997e2f5135e3994ce49c7d775afbaa0007->leave($__internal_21e142e1bb5a0d81f0daa813057b69997e2f5135e3994ce49c7d775afbaa0007_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_371324f7cc8431923e1b3491f937b68775178b7729c51054f273a1287d9a7633 = $this->env->getExtension("native_profiler");
        $__internal_371324f7cc8431923e1b3491f937b68775178b7729c51054f273a1287d9a7633->enter($__internal_371324f7cc8431923e1b3491f937b68775178b7729c51054f273a1287d9a7633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<div class=\"panel panel-default\">
    <div class=\"panel-heading\"><h2><b><i class=\"fa fa-user\" aria-hidden=\"true\"></i> Se connecter</b></h2></div>
        <div class=\"list-group\">
            <div class=\"list-group-item\">
                ";
        // line 10
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 11
            echo "                    <div class=\"alert alert-danger\" role=\"alert\">
                        ";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "
                    </div>
                ";
        }
        // line 15
        echo "                <form action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
                
                    <div class=\"form-group\">
                        <label for=\"username\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
                    </div>
                
                    <div class=\"form-group\">
                        <label for=\"password\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                        <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
                    </div>
                
                    <div class=\"checkbox\">
                        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                        <label for=\"remember_me\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                    </div>
                
                    <input type=\"submit\"
                           class=\"btn btn-success\"
                           id=\"_submit\"
                           name=\"_submit\"
                           value=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                </form>
            </div>
        </div>
    </div>
</div>

";
        
        $__internal_371324f7cc8431923e1b3491f937b68775178b7729c51054f273a1287d9a7633->leave($__internal_371324f7cc8431923e1b3491f937b68775178b7729c51054f273a1287d9a7633_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 37,  88 => 30,  79 => 24,  72 => 20,  68 => 19,  62 => 16,  57 => 15,  51 => 12,  48 => 11,  46 => 10,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <div class="panel panel-default">*/
/*     <div class="panel-heading"><h2><b><i class="fa fa-user" aria-hidden="true"></i> Se connecter</b></h2></div>*/
/*         <div class="list-group">*/
/*             <div class="list-group-item">*/
/*                 {% if error %}*/
/*                     <div class="alert alert-danger" role="alert">*/
/*                         {{ error.messageKey|trans(error.messageData, 'security') }}*/
/*                     </div>*/
/*                 {% endif %}*/
/*                 <form action="{{ path("fos_user_security_check") }}" method="post">*/
/*                     <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/*                 */
/*                     <div class="form-group">*/
/*                         <label for="username">{{ 'security.login.username'|trans }}</label>*/
/*                         <input type="text" id="username" name="_username" value="{{ last_username }}" required="required" />*/
/*                     </div>*/
/*                 */
/*                     <div class="form-group">*/
/*                         <label for="password">{{ 'security.login.password'|trans }}</label>*/
/*                         <input type="password" id="password" name="_password" required="required" />*/
/*                     </div>*/
/*                 */
/*                     <div class="checkbox">*/
/*                         <input type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/*                         <label for="remember_me">{{ 'security.login.remember_me'|trans }}</label>*/
/*                     </div>*/
/*                 */
/*                     <input type="submit"*/
/*                            class="btn btn-success"*/
/*                            id="_submit"*/
/*                            name="_submit"*/
/*                            value="{{ 'security.login.submit'|trans }}" />*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* {% endblock fos_user_content %}*/
