<?php

/* follow_the_rhythmSymfonyBundle:Symfony:categoriePromotion.html.twig */
class __TwigTemplate_077259dd08abdf54703c66832bebd794d98affc269a9c352bae3760c065e1fcc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::vueMere.html.twig", "follow_the_rhythmSymfonyBundle:Symfony:categoriePromotion.html.twig", 1);
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
        $__internal_874359620164537d5967a0b1e6f5669067522bc1a7fe046b2aba68de2d326e84 = $this->env->getExtension("native_profiler");
        $__internal_874359620164537d5967a0b1e6f5669067522bc1a7fe046b2aba68de2d326e84->enter($__internal_874359620164537d5967a0b1e6f5669067522bc1a7fe046b2aba68de2d326e84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "follow_the_rhythmSymfonyBundle:Symfony:categoriePromotion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_874359620164537d5967a0b1e6f5669067522bc1a7fe046b2aba68de2d326e84->leave($__internal_874359620164537d5967a0b1e6f5669067522bc1a7fe046b2aba68de2d326e84_prof);

    }

    // line 3
    public function block_contenuCentral($context, array $blocks = array())
    {
        $__internal_50e388cda159f23b44914691253e47732b22ec18ab097c5c9be3e520cc71031e = $this->env->getExtension("native_profiler");
        $__internal_50e388cda159f23b44914691253e47732b22ec18ab097c5c9be3e520cc71031e->enter($__internal_50e388cda159f23b44914691253e47732b22ec18ab097c5c9be3e520cc71031e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenuCentral"));

        // line 4
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\"><h2><b><i class=\"fa fa-microphone\" aria-hidden=\"true\"></i> Promotions</b><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("follow_the_rhythm_soumettreTopicPromotions");
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
        
        $__internal_50e388cda159f23b44914691253e47732b22ec18ab097c5c9be3e520cc71031e->leave($__internal_50e388cda159f23b44914691253e47732b22ec18ab097c5c9be3e520cc71031e_prof);

    }

    public function getTemplateName()
    {
        return "follow_the_rhythmSymfonyBundle:Symfony:categoriePromotion.html.twig";
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
/*             <div class="panel-heading"><h2><b><i class="fa fa-microphone" aria-hidden="true"></i> Promotions</b><a href="{{path('follow_the_rhythm_soumettreTopicPromotions')}}"><button style='margin-left: 32px;' type="button" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Nouveau topic</button></a></h2></div>*/
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
