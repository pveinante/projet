<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_03453e25bc2553a28043b770e9a571e9e0267101aa4163eb8ab48694f51c4700 extends Twig_Template
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
        $__internal_4652f645e5db00232226857c52385964f5ecbf6862a58e0e90b863070c9647b9 = $this->env->getExtension("native_profiler");
        $__internal_4652f645e5db00232226857c52385964f5ecbf6862a58e0e90b863070c9647b9->enter($__internal_4652f645e5db00232226857c52385964f5ecbf6862a58e0e90b863070c9647b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        // line 1
        echo "<div class=\"panel panel-default\">
    <div class=\"panel-heading\"><h2><b><i class=\"fa fa-key\"></i> Réinitialiser votre mot de passe</b></h2></div>
        <div class=\"list-group\">
            <div class=\"list-group-item\">
                <form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
                    <div>
                        ";
        // line 7
        if (array_key_exists("invalid_username", $context)) {
            // line 8
            echo "                            <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.invalid_username", array("%username%" => (isset($context["invalid_username"]) ? $context["invalid_username"] : $this->getContext($context, "invalid_username"))), "FOSUserBundle"), "html", null, true);
            echo "</p>
                        ";
        }
        // line 10
        echo "                        <label for=\"username\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
                    </div>
                    <div>
                        <input type=\"submit\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_4652f645e5db00232226857c52385964f5ecbf6862a58e0e90b863070c9647b9->leave($__internal_4652f645e5db00232226857c52385964f5ecbf6862a58e0e90b863070c9647b9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 14,  41 => 10,  35 => 8,  33 => 7,  28 => 5,  22 => 1,);
    }
}
/* <div class="panel panel-default">*/
/*     <div class="panel-heading"><h2><b><i class="fa fa-key"></i> Réinitialiser votre mot de passe</b></h2></div>*/
/*         <div class="list-group">*/
/*             <div class="list-group-item">*/
/*                 <form action="{{ path('fos_user_resetting_send_email') }}" method="POST" class="fos_user_resetting_request">*/
/*                     <div>*/
/*                         {% if invalid_username is defined %}*/
/*                             <p>{{ 'resetting.request.invalid_username'|trans({'%username%': invalid_username}, 'FOSUserBundle') }}</p>*/
/*                         {% endif %}*/
/*                         <label for="username">{{ 'resetting.request.username'|trans({}, 'FOSUserBundle') }}</label>*/
/*                         <input type="text" id="username" name="username" required="required" />*/
/*                     </div>*/
/*                     <div>*/
/*                         <input type="submit" value="{{ 'resetting.request.submit'|trans({}, 'FOSUserBundle') }}" />*/
/*                     </div>*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
