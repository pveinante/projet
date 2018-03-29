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
        $__internal_6a948c8a241c4f66455f3800e2524a8959d7a4f0c2b9ebb8e5cb591bf896307d = $this->env->getExtension("native_profiler");
        $__internal_6a948c8a241c4f66455f3800e2524a8959d7a4f0c2b9ebb8e5cb591bf896307d->enter($__internal_6a948c8a241c4f66455f3800e2524a8959d7a4f0c2b9ebb8e5cb591bf896307d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a948c8a241c4f66455f3800e2524a8959d7a4f0c2b9ebb8e5cb591bf896307d->leave($__internal_6a948c8a241c4f66455f3800e2524a8959d7a4f0c2b9ebb8e5cb591bf896307d_prof);

    }

    // line 3
    public function block_contenuCentral($context, array $blocks = array())
    {
        $__internal_4e1a6c3d5b70b099ede512ba5cf31485973713abd30b16dc9b48e55be647c621 = $this->env->getExtension("native_profiler");
        $__internal_4e1a6c3d5b70b099ede512ba5cf31485973713abd30b16dc9b48e55be647c621->enter($__internal_4e1a6c3d5b70b099ede512ba5cf31485973713abd30b16dc9b48e55be647c621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenuCentral"));

        // line 4
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"panel panel-default\">
        <div>
            ";
        // line 8
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 9
            echo "                ";
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
            echo "                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 16
        echo "        </div>
        
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 19
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 20
                echo "                 <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                    ";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "        
        <div>
            ";
        // line 27
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 29
        echo "        </div>
        <div>
            ";
        // line 31
        $this->displayBlock('fos_user_stylesheets', $context, $blocks);
        // line 33
        echo "            </div>
        </div>
    </div>
</div>
";
        
        $__internal_4e1a6c3d5b70b099ede512ba5cf31485973713abd30b16dc9b48e55be647c621->leave($__internal_4e1a6c3d5b70b099ede512ba5cf31485973713abd30b16dc9b48e55be647c621_prof);

    }

    // line 27
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_906978b0a633198d6c63f2f7dd695357aefa87aa33c29ae9a94f6844be4adf5c = $this->env->getExtension("native_profiler");
        $__internal_906978b0a633198d6c63f2f7dd695357aefa87aa33c29ae9a94f6844be4adf5c->enter($__internal_906978b0a633198d6c63f2f7dd695357aefa87aa33c29ae9a94f6844be4adf5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 28
        echo "            ";
        
        $__internal_906978b0a633198d6c63f2f7dd695357aefa87aa33c29ae9a94f6844be4adf5c->leave($__internal_906978b0a633198d6c63f2f7dd695357aefa87aa33c29ae9a94f6844be4adf5c_prof);

    }

    // line 31
    public function block_fos_user_stylesheets($context, array $blocks = array())
    {
        $__internal_eb7fdae6bcd80cad3bf62339d6669e9655162b0c6cfeb80bfa8d43bae89796cd = $this->env->getExtension("native_profiler");
        $__internal_eb7fdae6bcd80cad3bf62339d6669e9655162b0c6cfeb80bfa8d43bae89796cd->enter($__internal_eb7fdae6bcd80cad3bf62339d6669e9655162b0c6cfeb80bfa8d43bae89796cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_stylesheets"));

        // line 32
        echo "            ";
        
        $__internal_eb7fdae6bcd80cad3bf62339d6669e9655162b0c6cfeb80bfa8d43bae89796cd->leave($__internal_eb7fdae6bcd80cad3bf62339d6669e9655162b0c6cfeb80bfa8d43bae89796cd_prof);

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
        return array (  148 => 32,  142 => 31,  135 => 28,  129 => 27,  118 => 33,  116 => 31,  112 => 29,  110 => 27,  106 => 25,  100 => 24,  91 => 21,  86 => 20,  81 => 19,  77 => 18,  73 => 16,  65 => 14,  59 => 11,  55 => 10,  50 => 9,  48 => 8,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::vueMere.html.twig" %} {#La vue fille hérite de la vue mère#}*/
/* */
/* {% block contenuCentral %}*/
/* <div class="container">*/
/*     <div class="row">*/
/*         <div class="panel panel-default">*/
/*         <div>*/
/*             {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                 {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |*/
/*                 <a href="{{ path('fos_user_security_logout') }}">*/
/*                     {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}*/
/*                 </a>*/
/*             {% else %}*/
/*                 <a href="{{ path('fos_user_security_login') }}">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>*/
/*             {% endif %}*/
/*         </div>*/
/*         */
/*         {% for type, messages in app.session.flashBag.all %}*/
/*             {% for message in messages %}*/
/*                  <div class="alert alert-{{ type }}">*/
/*                     {{ message|trans({}, 'FOSUserBundle') }}*/
/*                 </div>*/
/*             {% endfor %}*/
/*         {% endfor %}*/
/*         */
/*         <div>*/
/*             {% block fos_user_content %}*/
/*             {% endblock fos_user_content %}*/
/*         </div>*/
/*         <div>*/
/*             {% block fos_user_stylesheets %}*/
/*             {% endblock fos_user_stylesheets %}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
