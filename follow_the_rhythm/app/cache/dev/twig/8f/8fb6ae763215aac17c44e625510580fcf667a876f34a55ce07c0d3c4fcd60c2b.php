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
            'title' => array($this, 'block_title'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'fos_user_stylesheets' => array($this, 'block_fos_user_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0bf67b0c11f81aa301c73a64f79aa3684c746e1e13f90a5f6ff7162a10984d80 = $this->env->getExtension("native_profiler");
        $__internal_0bf67b0c11f81aa301c73a64f79aa3684c746e1e13f90a5f6ff7162a10984d80->enter($__internal_0bf67b0c11f81aa301c73a64f79aa3684c746e1e13f90a5f6ff7162a10984d80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0bf67b0c11f81aa301c73a64f79aa3684c746e1e13f90a5f6ff7162a10984d80->leave($__internal_0bf67b0c11f81aa301c73a64f79aa3684c746e1e13f90a5f6ff7162a10984d80_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6ad7e3afa0f60df3b63fd2c85a6d3f72995e330f098e201df647e6a31d603f6c = $this->env->getExtension("native_profiler");
        $__internal_6ad7e3afa0f60df3b63fd2c85a6d3f72995e330f098e201df647e6a31d603f6c->enter($__internal_6ad7e3afa0f60df3b63fd2c85a6d3f72995e330f098e201df647e6a31d603f6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Please Sign In";
        
        $__internal_6ad7e3afa0f60df3b63fd2c85a6d3f72995e330f098e201df647e6a31d603f6c->leave($__internal_6ad7e3afa0f60df3b63fd2c85a6d3f72995e330f098e201df647e6a31d603f6c_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_75a3fa9cbd8e7f9ad6c6f8fa44310b08f4ba472b00fe44a547308465ac56a28b = $this->env->getExtension("native_profiler");
        $__internal_75a3fa9cbd8e7f9ad6c6f8fa44310b08f4ba472b00fe44a547308465ac56a28b->enter($__internal_75a3fa9cbd8e7f9ad6c6f8fa44310b08f4ba472b00fe44a547308465ac56a28b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 8
        echo "
";
        // line 9
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 10
            echo "    <div class=\"alert alert-danger\" role=\"alert\">
        ";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "
    </div>
";
        }
        // line 14
        echo "<div class=\"panel panel-default\">
    <div class=\"panel-heading\"><h2><b><i class=\"fa fa-user\" aria-hidden=\"true\"></i> Se connecter</b></h2></div>
    ";
        // line 17
        echo "    ";
        // line 18
        echo "            <form action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\" class=\"form-signin\">
                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
        
                ";
        // line 22
        echo "                <div class=\"list-group\">
        <div class=\"list-group-item\">            
                <label for=\"username\" class=\"sr-only\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" placeholder=\"Email address\" class=\"form-control\" required autofocus />
                <label for=\"password\" class=\"sr-only\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" placeholder=\"Password\" required />
                <div class=\"checkbox\">
                    <label>
                        <input type=\"checkbox\"
                               id=\"remember_me\"
                               name=\"_remember_me\"
                               value=\"on\" /> ";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
                    </label>
                </div>
                <input type=\"submit\"
                       class=\"btn btn-lg btn-primary btn-block\"
                       id=\"_submit\"
                       name=\"_submit\"
                       value=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                       </div>
                       </div>
            </form>
    ";
        // line 45
        echo "    ";
        // line 46
        echo "</div>
";
        
        $__internal_75a3fa9cbd8e7f9ad6c6f8fa44310b08f4ba472b00fe44a547308465ac56a28b->leave($__internal_75a3fa9cbd8e7f9ad6c6f8fa44310b08f4ba472b00fe44a547308465ac56a28b_prof);

    }

    // line 49
    public function block_fos_user_stylesheets($context, array $blocks = array())
    {
        $__internal_04989a460c750c916bb802c20f73689488f43f27c722db6c28ed0cce4837d6c4 = $this->env->getExtension("native_profiler");
        $__internal_04989a460c750c916bb802c20f73689488f43f27c722db6c28ed0cce4837d6c4->enter($__internal_04989a460c750c916bb802c20f73689488f43f27c722db6c28ed0cce4837d6c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_stylesheets"));

        // line 50
        echo "    <style>
        body {
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #eee;
        }

        .form-signin {
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
        }

        .form-signin .form-signin-heading,
        .form-signin .checkbox {
            margin-bottom: 10px;
        }

        .form-signin .checkbox {
            font-weight: normal;
        }

        .form-signin .form-control {
            position: relative;
            height: auto;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding: 10px;
            font-size: 16px;
        }

        .form-signin .form-control:focus {
            z-index: 2;
        }

        .form-signin input[type=\"email\"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .form-signin input[type=\"password\"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
    </style>
";
        
        $__internal_04989a460c750c916bb802c20f73689488f43f27c722db6c28ed0cce4837d6c4->leave($__internal_04989a460c750c916bb802c20f73689488f43f27c722db6c28ed0cce4837d6c4_prof);

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
        return array (  139 => 50,  133 => 49,  125 => 46,  123 => 45,  116 => 40,  106 => 33,  96 => 26,  92 => 25,  88 => 24,  84 => 22,  79 => 19,  74 => 18,  72 => 17,  68 => 14,  62 => 11,  59 => 10,  57 => 9,  54 => 8,  48 => 7,  36 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block title %}Please Sign In{% endblock %}*/
/* */
/* {% block fos_user_content %}*/
/* */
/* {% if error %}*/
/*     <div class="alert alert-danger" role="alert">*/
/*         {{ error.messageKey|trans(error.messageData, 'security') }}*/
/*     </div>*/
/* {% endif %}*/
/* <div class="panel panel-default">*/
/*     <div class="panel-heading"><h2><b><i class="fa fa-user" aria-hidden="true"></i> Se connecter</b></h2></div>*/
/*     {#<div class="list-group">#}*/
/*     {#    <div class="list-group-item">            #}*/
/*             <form action="{{ path("fos_user_security_check") }}" method="post" class="form-signin">*/
/*                 <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/*         */
/*                 {#<h2 class="form-signin-heading">Please sign in</h2>#}*/
/*                 <div class="list-group">*/
/*         <div class="list-group-item">            */
/*                 <label for="username" class="sr-only">{{ 'security.login.username'|trans }}</label>*/
/*                 <input type="text" id="username" name="_username" value="{{ last_username }}" placeholder="Email address" class="form-control" required autofocus />*/
/*                 <label for="password" class="sr-only">{{ 'security.login.password'|trans }}</label>*/
/*                 <input type="password" id="password" name="_password" class="form-control" placeholder="Password" required />*/
/*                 <div class="checkbox">*/
/*                     <label>*/
/*                         <input type="checkbox"*/
/*                                id="remember_me"*/
/*                                name="_remember_me"*/
/*                                value="on" /> {{ 'security.login.remember_me'|trans }}*/
/*                     </label>*/
/*                 </div>*/
/*                 <input type="submit"*/
/*                        class="btn btn-lg btn-primary btn-block"*/
/*                        id="_submit"*/
/*                        name="_submit"*/
/*                        value="{{ 'security.login.submit'|trans }}" />*/
/*                        </div>*/
/*                        </div>*/
/*             </form>*/
/*     {#    </div>#}*/
/*     {#</div>#}*/
/* </div>*/
/* {% endblock fos_user_content %}*/
/* */
/* {% block fos_user_stylesheets %}*/
/*     <style>*/
/*         body {*/
/*             padding-top: 40px;*/
/*             padding-bottom: 40px;*/
/*             background-color: #eee;*/
/*         }*/
/* */
/*         .form-signin {*/
/*             max-width: 330px;*/
/*             padding: 15px;*/
/*             margin: 0 auto;*/
/*         }*/
/* */
/*         .form-signin .form-signin-heading,*/
/*         .form-signin .checkbox {*/
/*             margin-bottom: 10px;*/
/*         }*/
/* */
/*         .form-signin .checkbox {*/
/*             font-weight: normal;*/
/*         }*/
/* */
/*         .form-signin .form-control {*/
/*             position: relative;*/
/*             height: auto;*/
/*             -webkit-box-sizing: border-box;*/
/*             -moz-box-sizing: border-box;*/
/*             box-sizing: border-box;*/
/*             padding: 10px;*/
/*             font-size: 16px;*/
/*         }*/
/* */
/*         .form-signin .form-control:focus {*/
/*             z-index: 2;*/
/*         }*/
/* */
/*         .form-signin input[type="email"] {*/
/*             margin-bottom: -1px;*/
/*             border-bottom-right-radius: 0;*/
/*             border-bottom-left-radius: 0;*/
/*         }*/
/* */
/*         .form-signin input[type="password"] {*/
/*             margin-bottom: 10px;*/
/*             border-top-left-radius: 0;*/
/*             border-top-right-radius: 0;*/
/*         }*/
/*     </style>*/
/* {% endblock %}*/
