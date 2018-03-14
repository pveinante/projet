<?php

/* follow_the_rhythmSymfonyBundle:Symfony:news.json.twig */
class __TwigTemplate_6f562d5115ac850a7b9213f5adfbd1b1a30d39bb39484897266c6c52beac2ae9 extends Twig_Template
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
        $__internal_c5c07c9afe9c5488386ffe155ee69061e4bc00591ea609a073dce1b3cf333fe5 = $this->env->getExtension("native_profiler");
        $__internal_c5c07c9afe9c5488386ffe155ee69061e4bc00591ea609a073dce1b3cf333fe5->enter($__internal_c5c07c9afe9c5488386ffe155ee69061e4bc00591ea609a073dce1b3cf333fe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "follow_the_rhythmSymfonyBundle:Symfony:news.json.twig"));

        // line 2
        $context["cpt"] = 0;
        // line 3
        echo "[";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tabActualites"]) ? $context["tabActualites"] : $this->getContext($context, "tabActualites")));
        foreach ($context['_seq'] as $context["_key"] => $context["actualiteCourante"]) {
            $context["cpt"] = ((isset($context["cpt"]) ? $context["cpt"] : $this->getContext($context, "cpt")) + 1);
            echo "{\"id\":";
            echo twig_escape_filter($this->env, $this->getAttribute($context["actualiteCourante"], "id", array()), "html", null, true);
            echo ",\"titre\":\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["actualiteCourante"], "titre", array()), "html", null, true);
            echo "\",";
            if (twig_test_empty($this->getAttribute($context["actualiteCourante"], "artiste", array()))) {
                echo "\"artiste\":null,";
            } else {
                echo "\"artiste\":{\"id\":";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["actualiteCourante"], "artiste", array()), "id", array()), "html", null, true);
                echo ",\"nomDeScene\":\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["actualiteCourante"], "artiste", array()), "nomDeScene", array()), "html", null, true);
                echo "\",\"nomComplet\",\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["actualiteCourante"], "artiste", array()), "nomComplet", array()), "html", null, true);
                echo "\"},";
            }
            if (twig_test_empty($this->getAttribute($context["actualiteCourante"], "concert", array()))) {
                echo "\"concert\":null,";
            } else {
                echo "\"concert\":{\"id\":";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["actualiteCourante"], "concert", array()), "id", array()), "html", null, true);
                echo ",\"nom\":\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["actualiteCourante"], "concert", array()), "nom", array()), "html", null, true);
                echo ",\"lieu\":\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["actualiteCourante"], "concert", array()), "lieu", array()), "html", null, true);
                echo "\"},";
            }
            echo "\"description\":\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["actualiteCourante"], "description", array()), "html", null, true);
            echo "\",\"date\":\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["actualiteCourante"], "dateActualite", array()), "d/m/Y"), "html", null, true);
            echo "\",\"nbCoupDeCoeurs\":";
            echo twig_escape_filter($this->env, $this->getAttribute($context["actualiteCourante"], "nbCoupDeCoeurs", array()), "html", null, true);
            echo "}";
            if (((isset($context["cpt"]) ? $context["cpt"] : $this->getContext($context, "cpt")) < twig_length_filter($this->env, (isset($context["tabActualites"]) ? $context["tabActualites"] : $this->getContext($context, "tabActualites"))))) {
                echo ",";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actualiteCourante'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "]";
        
        $__internal_c5c07c9afe9c5488386ffe155ee69061e4bc00591ea609a073dce1b3cf333fe5->leave($__internal_c5c07c9afe9c5488386ffe155ee69061e4bc00591ea609a073dce1b3cf333fe5_prof);

    }

    public function getTemplateName()
    {
        return "follow_the_rhythmSymfonyBundle:Symfony:news.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 3,  22 => 2,);
    }
}
/* {# API Liste des actualités+artiste(concerné ou pas)+concert(lié ou pas) #}*/
/* {% set cpt=0 %}*/
/* [{% for actualiteCourante in tabActualites %}{% set cpt=cpt+1 %}{"id":{{actualiteCourante.id}},"titre":"{{actualiteCourante.titre}}",{% if actualiteCourante.artiste is empty %}"artiste":null,{% else %}"artiste":{"id":{{actualiteCourante.artiste.id}},"nomDeScene":"{{actualiteCourante.artiste.nomDeScene}}","nomComplet","{{actualiteCourante.artiste.nomComplet}}"},{% endif %}{% if actualiteCourante.concert is empty %}"concert":null,{% else %}"concert":{"id":{{actualiteCourante.concert.id}},"nom":"{{actualiteCourante.concert.nom}},"lieu":"{{actualiteCourante.concert.lieu}}"},{% endif %}"description":"{{actualiteCourante.description}}","date":"{{actualiteCourante.dateActualite|date("d/m/Y")}}","nbCoupDeCoeurs":{{actualiteCourante.nbCoupDeCoeurs}}}{% if cpt<tabActualites|length %},{% endif %}{% endfor %}]*/
