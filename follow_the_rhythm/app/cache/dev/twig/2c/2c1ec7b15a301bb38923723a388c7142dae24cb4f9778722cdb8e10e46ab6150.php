<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_f48a71c678b224f829400a2ddb6c480fc4f657ad4af731888ac38acc76c03208 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::vueMere.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'contenuCentral' => array($this, 'block_contenuCentral'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'fos_user_stylesheets' => array($this, 'block_fos_user_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::vueMere.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1ef8ccdf548306ad5fe297005d45bee07dd1125afae6a604ffdc94f89c2a8942 = $this->env->getExtension("native_profiler");
        $__internal_1ef8ccdf548306ad5fe297005d45bee07dd1125afae6a604ffdc94f89c2a8942->enter($__internal_1ef8ccdf548306ad5fe297005d45bee07dd1125afae6a604ffdc94f89c2a8942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ef8ccdf548306ad5fe297005d45bee07dd1125afae6a604ffdc94f89c2a8942->leave($__internal_1ef8ccdf548306ad5fe297005d45bee07dd1125afae6a604ffdc94f89c2a8942_prof);

    }

    // line 3
    public function block_contenuCentral($context, array $blocks = array())
    {
        $__internal_9adbee7fc5dcd6f3bc38df2f833263795608167a7e8b70ab5a0f6c81951d2e50 = $this->env->getExtension("native_profiler");
        $__internal_9adbee7fc5dcd6f3bc38df2f833263795608167a7e8b70ab5a0f6c81951d2e50->enter($__internal_9adbee7fc5dcd6f3bc38df2f833263795608167a7e8b70ab5a0f6c81951d2e50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenuCentral"));

        // line 4
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"panel panel-default\">
           <div>
                ";
        // line 8
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 9
            echo "                    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                    <a href=\"";
            // line 10
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                        ";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                    </a>
                ";
        } else {
            // line 14
            echo "                    <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                ";
        }
        // line 16
        echo "            </div>
        
            ";
        // line 18
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 19
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 20
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 21
                    echo "                        <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                            ";
                    // line 22
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                        </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 25
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "            ";
        }
        // line 27
        echo "        
            <div>
                ";
        // line 29
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 31
        echo "            </div>
        </div>
    </div>
</div>
";
        
        $__internal_9adbee7fc5dcd6f3bc38df2f833263795608167a7e8b70ab5a0f6c81951d2e50->leave($__internal_9adbee7fc5dcd6f3bc38df2f833263795608167a7e8b70ab5a0f6c81951d2e50_prof);

    }

    // line 29
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_54cdb82448eee6f5da00a8802bb7ab0befebf8fbc38033a6563b9a3c3176b231 = $this->env->getExtension("native_profiler");
        $__internal_54cdb82448eee6f5da00a8802bb7ab0befebf8fbc38033a6563b9a3c3176b231->enter($__internal_54cdb82448eee6f5da00a8802bb7ab0befebf8fbc38033a6563b9a3c3176b231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 30
        echo "                ";
        
        $__internal_54cdb82448eee6f5da00a8802bb7ab0befebf8fbc38033a6563b9a3c3176b231->leave($__internal_54cdb82448eee6f5da00a8802bb7ab0befebf8fbc38033a6563b9a3c3176b231_prof);

    }

    // line 36
    public function block_fos_user_stylesheets($context, array $blocks = array())
    {
        $__internal_15b3c763ee06c04fab3b2eddfbd6b8f65dc2218ddeb946e89925d6d8a4ade760 = $this->env->getExtension("native_profiler");
        $__internal_15b3c763ee06c04fab3b2eddfbd6b8f65dc2218ddeb946e89925d6d8a4ade760->enter($__internal_15b3c763ee06c04fab3b2eddfbd6b8f65dc2218ddeb946e89925d6d8a4ade760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_stylesheets"));

        
        $__internal_15b3c763ee06c04fab3b2eddfbd6b8f65dc2218ddeb946e89925d6d8a4ade760->leave($__internal_15b3c763ee06c04fab3b2eddfbd6b8f65dc2218ddeb946e89925d6d8a4ade760_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 36,  135 => 30,  129 => 29,  118 => 31,  116 => 29,  112 => 27,  109 => 26,  103 => 25,  94 => 22,  89 => 21,  84 => 20,  79 => 19,  77 => 18,  73 => 16,  65 => 14,  59 => 11,  55 => 10,  50 => 9,  48 => 8,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::vueMere.html.twig" %} {#La vue fille hérite de la vue mère#}*/
/*                 */
/* {% block contenuCentral %}*/
/* <div class="container">*/
/*     <div class="row">*/
/*         <div class="panel panel-default">*/
/*            <div>*/
/*                 {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                     {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |*/
/*                     <a href="{{ path('fos_user_security_logout') }}">*/
/*                         {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}*/
/*                     </a>*/
/*                 {% else %}*/
/*                     <a href="{{ path('fos_user_security_login') }}">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>*/
/*                 {% endif %}*/
/*             </div>*/
/*         */
/*             {% if app.request.hasPreviousSession %}*/
/*                 {% for type, messages in app.session.flashbag.all() %}*/
/*                     {% for message in messages %}*/
/*                         <div class="flash-{{ type }}">*/
/*                             {{ message }}*/
/*                         </div>*/
/*                     {% endfor %}*/
/*                 {% endfor %}*/
/*             {% endif %}*/
/*         */
/*             <div>*/
/*                 {% block fos_user_content %}*/
/*                 {% endblock fos_user_content %}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
/* {% block fos_user_stylesheets %}*/
/* {% endblock %}*/
/* */
