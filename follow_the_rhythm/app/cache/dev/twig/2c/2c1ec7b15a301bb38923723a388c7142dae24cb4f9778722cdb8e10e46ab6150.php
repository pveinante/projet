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
        );
    }

    protected function doGetParent(array $context)
    {
        return "::vueMere.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a2f4627c8bd8b14e887a1846f8826fb0f2bcaa6d65ba21873a97b9e05a973ee2 = $this->env->getExtension("native_profiler");
        $__internal_a2f4627c8bd8b14e887a1846f8826fb0f2bcaa6d65ba21873a97b9e05a973ee2->enter($__internal_a2f4627c8bd8b14e887a1846f8826fb0f2bcaa6d65ba21873a97b9e05a973ee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2f4627c8bd8b14e887a1846f8826fb0f2bcaa6d65ba21873a97b9e05a973ee2->leave($__internal_a2f4627c8bd8b14e887a1846f8826fb0f2bcaa6d65ba21873a97b9e05a973ee2_prof);

    }

    // line 3
    public function block_contenuCentral($context, array $blocks = array())
    {
        $__internal_ca1b833e5873a407cf77ae2f6c405b9d6c25478d4736abb9df223a475ceaee64 = $this->env->getExtension("native_profiler");
        $__internal_ca1b833e5873a407cf77ae2f6c405b9d6c25478d4736abb9df223a475ceaee64->enter($__internal_ca1b833e5873a407cf77ae2f6c405b9d6c25478d4736abb9df223a475ceaee64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenuCentral"));

        // line 4
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"panel panel-default\">
        <!--default panel content-->
        <div class=\"panel-heading\"><h2><b><i class=\"fa fa-user\" aria-hidden=\"true\"></i> Se connecter</b></h2></div>
            <div class=\"list-group\">
                <div class=\"list-group-item\">
                    <div>
                        ";
        // line 12
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 13
            echo "                            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                            <a href=\"";
            // line 14
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                                ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                            </a>
                        ";
        } else {
            // line 18
            echo "                            <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                        ";
        }
        // line 20
        echo "                    </div>
                    
                    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 23
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 24
                echo "                            <div class=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                                ";
                // line 25
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                    
                    <div>
                        ";
        // line 31
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 33
        echo "                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

";
        
        $__internal_ca1b833e5873a407cf77ae2f6c405b9d6c25478d4736abb9df223a475ceaee64->leave($__internal_ca1b833e5873a407cf77ae2f6c405b9d6c25478d4736abb9df223a475ceaee64_prof);

    }

    // line 31
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6905f254bf8f1dadb1a8b093b5c200dcf603454ea9b1ac198af2faf47bf6adaf = $this->env->getExtension("native_profiler");
        $__internal_6905f254bf8f1dadb1a8b093b5c200dcf603454ea9b1ac198af2faf47bf6adaf->enter($__internal_6905f254bf8f1dadb1a8b093b5c200dcf603454ea9b1ac198af2faf47bf6adaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 32
        echo "                        ";
        
        $__internal_6905f254bf8f1dadb1a8b093b5c200dcf603454ea9b1ac198af2faf47bf6adaf->leave($__internal_6905f254bf8f1dadb1a8b093b5c200dcf603454ea9b1ac198af2faf47bf6adaf_prof);

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
        return array (  135 => 32,  129 => 31,  115 => 33,  113 => 31,  109 => 29,  103 => 28,  94 => 25,  89 => 24,  84 => 23,  80 => 22,  76 => 20,  68 => 18,  62 => 15,  58 => 14,  53 => 13,  51 => 12,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::vueMere.html.twig" %} {#La vue fille hérite de la vue mère#}*/
/* */
/* {% block contenuCentral %}*/
/* <div class="container">*/
/*     <div class="row">*/
/*         <div class="panel panel-default">*/
/*         <!--default panel content-->*/
/*         <div class="panel-heading"><h2><b><i class="fa fa-user" aria-hidden="true"></i> Se connecter</b></h2></div>*/
/*             <div class="list-group">*/
/*                 <div class="list-group-item">*/
/*                     <div>*/
/*                         {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                             {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |*/
/*                             <a href="{{ path('fos_user_security_logout') }}">*/
/*                                 {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}*/
/*                             </a>*/
/*                         {% else %}*/
/*                             <a href="{{ path('fos_user_security_login') }}">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>*/
/*                         {% endif %}*/
/*                     </div>*/
/*                     */
/*                     {% for type, messages in app.session.flashBag.all %}*/
/*                         {% for message in messages %}*/
/*                             <div class="{{ type }}">*/
/*                                 {{ message|trans({}, 'FOSUserBundle') }}*/
/*                             </div>*/
/*                         {% endfor %}*/
/*                     {% endfor %}*/
/*                     */
/*                     <div>*/
/*                         {% block fos_user_content %}*/
/*                         {% endblock fos_user_content %}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* {% endblock %}*/
