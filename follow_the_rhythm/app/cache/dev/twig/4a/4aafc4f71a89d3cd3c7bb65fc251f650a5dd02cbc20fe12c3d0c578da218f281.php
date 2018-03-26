<?php

/* follow_the_rhythmSymfonyBundle:Symfony:categorieEspacePrive.html.twig */
class __TwigTemplate_b61c8b18dc1a580e9a09fade46cc7c8eaaf90eb30609e8ae14e6863ceda10725 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::vueMere.html.twig", "follow_the_rhythmSymfonyBundle:Symfony:categorieEspacePrive.html.twig", 1);
        $this->blocks = array(
            'contenuCentral' => array($this, 'block_contenuCentral'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::vueMere.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b3029b34450545055cf20a80ef0abd616e0a9e030266b38d26a3e65d5e26d72a = $this->env->getExtension("native_profiler");
        $__internal_b3029b34450545055cf20a80ef0abd616e0a9e030266b38d26a3e65d5e26d72a->enter($__internal_b3029b34450545055cf20a80ef0abd616e0a9e030266b38d26a3e65d5e26d72a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "follow_the_rhythmSymfonyBundle:Symfony:categorieEspacePrive.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3029b34450545055cf20a80ef0abd616e0a9e030266b38d26a3e65d5e26d72a->leave($__internal_b3029b34450545055cf20a80ef0abd616e0a9e030266b38d26a3e65d5e26d72a_prof);

    }

    // line 3
    public function block_contenuCentral($context, array $blocks = array())
    {
        $__internal_5a2784a2044b6194ce981f539fb688b3bd13324c7179681385fecb056c222d39 = $this->env->getExtension("native_profiler");
        $__internal_5a2784a2044b6194ce981f539fb688b3bd13324c7179681385fecb056c222d39->enter($__internal_5a2784a2044b6194ce981f539fb688b3bd13324c7179681385fecb056c222d39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenuCentral"));

        // line 4
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\"><h2><b><i class=\"fa fa-commenting\" aria-hidden=\"true\"></i> Espace Privé</b><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("follow_the_rhythm_soumettreTopicEspacePrive");
        echo "\"><button style='margin-left: 32px;' type=\"button\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-plus\"></span> Nouveau topic</button></a></h2></div>
            <div class=\"list-group\">
                <div class=\"list-group-item\">
                    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tabTopics"]) ? $context["tabTopics"] : $this->getContext($context, "tabTopics")));
        foreach ($context['_seq'] as $context["_key"] => $context["topicCourant"]) {
            // line 11
            echo "                    <div class=\"list-group-item\"><h2><label>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["topicCourant"], "titre", array()), "html", null, true);
            echo "</label></h2></div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topicCourant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "                </div>
            </div>
        </div>
    </div>
</div>
    
";
        
        $__internal_5a2784a2044b6194ce981f539fb688b3bd13324c7179681385fecb056c222d39->leave($__internal_5a2784a2044b6194ce981f539fb688b3bd13324c7179681385fecb056c222d39_prof);

    }

    public function getTemplateName()
    {
        return "follow_the_rhythmSymfonyBundle:Symfony:categorieEspacePrive.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 13,  55 => 11,  51 => 10,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "::vueMere.html.twig" %} {#La vue fille hérite de la vue mère#}*/
/*     */
/* {% block contenuCentral %}*/
/* <div class="container">*/
/*     <div class="row">*/
/*         <div class="panel panel-default">*/
/*             <div class="panel-heading"><h2><b><i class="fa fa-commenting" aria-hidden="true"></i> Espace Privé</b><a href="{{path('follow_the_rhythm_soumettreTopicEspacePrive')}}"><button style='margin-left: 32px;' type="button" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Nouveau topic</button></a></h2></div>*/
/*             <div class="list-group">*/
/*                 <div class="list-group-item">*/
/*                     {% for topicCourant in tabTopics %}*/
/*                     <div class="list-group-item"><h2><label>{{topicCourant.titre}}</label></h2></div>*/
/*                     {% endfor %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/*     */
/* {% endblock %}*/
