<?php

/* ::pagination.html.twig */
class __TwigTemplate_291c362790f61e3f00e6d4f9770f6527367e64cf6e4be15fc942e998d0be2c15 extends Twig_Template
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
        $__internal_d9926b068099e4ec0b0db1146bcb5735512266ec0f407507f31a5ec8e0c23194 = $this->env->getExtension("native_profiler");
        $__internal_d9926b068099e4ec0b0db1146bcb5735512266ec0f407507f31a5ec8e0c23194->enter($__internal_d9926b068099e4ec0b0db1146bcb5735512266ec0f407507f31a5ec8e0c23194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::pagination.html.twig"));

        // line 1
        if (($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "nbPages", array()) > 0)) {
            // line 2
            echo "    <ul class=\"pagination\">
        ";
            // line 3
            if (($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array()) > 1)) {
                // line 4
                echo "            <li>
                <a title=\"Première page\" href=\"";
                // line 5
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "nomRoute", array()), twig_array_merge($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "paramsRoute", array()), array("page" => 1, "sens" => 1, "nbParPage" => (isset($context["nbParPage"]) ? $context["nbParPage"] : $this->getContext($context, "nbParPage"))))), "html", null, true);
                echo "\">
                    <<
                </a>
            </li>
            <li>
                <a title=\"Page précédente\" href=\"";
                // line 10
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "nomRoute", array()), twig_array_merge($this->getAttribute(                // line 11
(isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "paramsRoute", array()), array("page" => ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array()) - 1), "sens" => 1, "nbParPage" => (isset($context["nbParPage"]) ? $context["nbParPage"] : $this->getContext($context, "nbParPage"))))), "html", null, true);
                echo "\">
                    <
                </a>
            </li>
        ";
            }
            // line 16
            echo "
        ";
            // line 18
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(max(($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array()) - 4), 1), min(($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array()) + 4), $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "nbPages", array()))));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 19
                echo "            <li ";
                if (($context["p"] == $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array()))) {
                    echo "class=\"active\"";
                }
                echo ">
                <a title=\"Page ";
                // line 20
                echo twig_escape_filter($this->env, $context["p"], "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "nomRoute", array()), twig_array_merge($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "paramsRoute", array()), array("page" => $context["p"], "sens" => 1, "nbParPage" => (isset($context["nbParPage"]) ? $context["nbParPage"] : $this->getContext($context, "nbParPage"))))), "html", null, true);
                echo "\">
                    ";
                // line 21
                echo twig_escape_filter($this->env, $context["p"], "html", null, true);
                echo "
                </a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "
        ";
            // line 26
            if (($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array()) < $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "nbPages", array()))) {
                // line 27
                echo "            <li>
                <a title=\"Page suivante\" href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "nomRoute", array()), twig_array_merge($this->getAttribute(                // line 29
(isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "paramsRoute", array()), array("page" => ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array()) + 1), "sens" => 1, "nbParPage" => (isset($context["nbParPage"]) ? $context["nbParPage"] : $this->getContext($context, "nbParPage"))))), "html", null, true);
                echo "\">
                    >
                </a>
            </li>
            <li>
                <a title=\"Dernière page\" href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "nomRoute", array()), twig_array_merge($this->getAttribute(                // line 35
(isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "paramsRoute", array()), array("page" => $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "nbPages", array()), "sens" => 1, "nbParPage" => (isset($context["nbParPage"]) ? $context["nbParPage"] : $this->getContext($context, "nbParPage"))))), "html", null, true);
                echo "\">
                    >>
                </a>
            </li>
        ";
            }
            // line 40
            echo "    </ul>
";
        }
        
        $__internal_d9926b068099e4ec0b0db1146bcb5735512266ec0f407507f31a5ec8e0c23194->leave($__internal_d9926b068099e4ec0b0db1146bcb5735512266ec0f407507f31a5ec8e0c23194_prof);

    }

    public function getTemplateName()
    {
        return "::pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 40,  98 => 35,  97 => 34,  89 => 29,  88 => 28,  85 => 27,  83 => 26,  80 => 25,  70 => 21,  64 => 20,  57 => 19,  52 => 18,  49 => 16,  41 => 11,  40 => 10,  32 => 5,  29 => 4,  27 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if pagination.nbPages > 0 %}*/
/*     <ul class="pagination">*/
/*         {% if pagination.page > 1 %}*/
/*             <li>*/
/*                 <a title="Première page" href="{{ path(pagination.nomRoute, pagination.paramsRoute|merge({'page': 1, 'sens': 1, 'nbParPage': nbParPage})) }}">*/
/*                     <<*/
/*                 </a>*/
/*             </li>*/
/*             <li>*/
/*                 <a title="Page précédente" href="{{ path(pagination.nomRoute,*/
/*                 pagination.paramsRoute|merge({'page': pagination.page-1, 'sens': 1, 'nbParPage': nbParPage})) }}">*/
/*                     <*/
/*                 </a>*/
/*             </li>*/
/*         {% endif %}*/
/* */
/*         {# Affichage de toutes les pages entre p-4 et p+4 sauf si < 1 ou > nbPages #}*/
/*         {% for p in range(max(pagination.page-4, 1), min(pagination.page+4, pagination.nbPages)) %}*/
/*             <li {% if p == pagination.page %}class="active"{% endif %}>*/
/*                 <a title="Page {{ p }}" href="{{ path(pagination.nomRoute, pagination.paramsRoute|merge({'page': p, 'sens': 1, 'nbParPage': nbParPage})) }}">*/
/*                     {{ p }}*/
/*                 </a>*/
/*             </li>*/
/*         {% endfor %}*/
/* */
/*         {% if pagination.page < pagination.nbPages %}*/
/*             <li>*/
/*                 <a title="Page suivante" href="{{ path(pagination.nomRoute,*/
/*                 pagination.paramsRoute|merge({'page': pagination.page+1, 'sens': 1, 'nbParPage': nbParPage})) }}">*/
/*                     >*/
/*                 </a>*/
/*             </li>*/
/*             <li>*/
/*                 <a title="Dernière page" href="{{ path(pagination.nomRoute,*/
/*                 pagination.paramsRoute|merge({'page': pagination.nbPages, 'sens': 1, 'nbParPage': nbParPage})) }}">*/
/*                     >>*/
/*                 </a>*/
/*             </li>*/
/*         {% endif %}*/
/*     </ul>*/
/* {% endif %}*/
