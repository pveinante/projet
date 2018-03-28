<?php

/* follow_the_rhythmSymfonyBundle:Symfony:categorieEspacePrive.html.twig */
class __TwigTemplate_005dfd58987d90c5a8291342dd4a602dc99754890841168a82c381d9ae89feee extends Twig_Template
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
        $__internal_843eda0b056953c72823a1dca9d1f9d7fd87a700bb4de96c597aa160a5c7601e = $this->env->getExtension("native_profiler");
        $__internal_843eda0b056953c72823a1dca9d1f9d7fd87a700bb4de96c597aa160a5c7601e->enter($__internal_843eda0b056953c72823a1dca9d1f9d7fd87a700bb4de96c597aa160a5c7601e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "follow_the_rhythmSymfonyBundle:Symfony:categorieEspacePrive.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_843eda0b056953c72823a1dca9d1f9d7fd87a700bb4de96c597aa160a5c7601e->leave($__internal_843eda0b056953c72823a1dca9d1f9d7fd87a700bb4de96c597aa160a5c7601e_prof);

    }

    // line 3
    public function block_contenuCentral($context, array $blocks = array())
    {
        $__internal_187116c95b793e5346b2cd4f27009e2bcadd9586008827de74fcdecbdcde31a6 = $this->env->getExtension("native_profiler");
        $__internal_187116c95b793e5346b2cd4f27009e2bcadd9586008827de74fcdecbdcde31a6->enter($__internal_187116c95b793e5346b2cd4f27009e2bcadd9586008827de74fcdecbdcde31a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenuCentral"));

        // line 4
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\"><h2><b><i class=\"fa fa-commenting\" aria-hidden=\"true\"></i> Espace Privé</b><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("follow_the_rhythm_soumettreTopicEspacePrive");
        echo "\"><button style='margin-left: 32px;' type=\"button\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-plus\"></span> Nouveau topic</button></a></h2></div>
            ";
        // line 8
        if (twig_test_empty((isset($context["tabTopics"]) ? $context["tabTopics"] : $this->getContext($context, "tabTopics")))) {
            // line 9
            echo "            <div class=\"container\">
\t            <div class =\"row\">
\t\t            <div class =\"col-lg-12\">
\t\t\t            <h5>Aucun topic pour le moment.</h5>
\t\t            </div>
\t            </div>
            </div>
            ";
        } else {
            // line 17
            echo "            <div class=\"container\">
\t            <div class =\"row\">
\t\t            <div class =\"col-lg-6\">
\t\t\t            <h4>Sujet du topic</h4>
\t\t            </div>
\t\t            <div class =\"col-lg-2\">
\t\t\t            <h4 align=\"center\">Créateur</h4>
\t\t            </div>
\t\t            <div class =\"col-lg-1\">
\t\t\t            <h4 align=\"center\">Messages</h4> 
\t\t            </div>
\t\t            <div class =\"col-lg-3\">
\t\t\t            <h4 align=\"center\">Dernier message le</h4>
\t\t            </div>
\t            </div>
            </div>
            ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tabTopics"]) ? $context["tabTopics"] : $this->getContext($context, "tabTopics")));
            foreach ($context['_seq'] as $context["_key"] => $context["topicCourant"]) {
                // line 34
                echo "                <div class=\"container\">
\t            <div class =\"row\">
\t\t            <div class =\"col-lg-6\">
\t\t\t            <a href=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("follow_the_rhythm_messages", array("topicId" => $this->getAttribute($context["topicCourant"], "id", array()), "page" => 1)), "html", null, true);
                echo "\"><h5>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["topicCourant"], "titre", array()), "html", null, true);
                echo "</h5></a>
\t\t            </div>
\t\t            <div class =\"col-lg-2\">
\t\t\t            <a href=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("follow_the_rhythm_pageUtilisateur", array("id" => $this->getAttribute($this->getAttribute($context["topicCourant"], "utilisateur", array()), "id", array()))), "html", null, true);
                echo "\"><h5 align=\"center\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["topicCourant"], "utilisateur", array()), "username", array()), "html", null, true);
                echo "</h5></a>
\t\t            </div>
\t\t            <div class =\"col-lg-1\">
\t\t\t            <h5 align=\"center\">";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tabNbMessages"]) ? $context["tabNbMessages"] : $this->getContext($context, "tabNbMessages")), $this->getAttribute($context["topicCourant"], "id", array()), array(), "array"), "html", null, true);
                echo "</h5> 
\t\t            </div>
\t\t            <div class =\"col-lg-3\">
\t\t\t            <h5 align=\"center\">";
                // line 46
                if (($this->getAttribute((isset($context["tabNbMessages"]) ? $context["tabNbMessages"] : $this->getContext($context, "tabNbMessages")), $this->getAttribute($context["topicCourant"], "id", array()), array(), "array") != 0)) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["dateD"]) ? $context["dateD"] : $this->getContext($context, "dateD")), $this->getAttribute($context["topicCourant"], "id", array()), array(), "array"), "d-m-Y"), "html", null, true);
                    echo " à ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["dateD"]) ? $context["dateD"] : $this->getContext($context, "dateD")), $this->getAttribute($context["topicCourant"], "id", array()), array(), "array"), "H.i"), "html", null, true);
                }
                echo "</h5>
\t\t            </div>
\t            </div>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topicCourant'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "            ";
        }
        // line 52
        echo "                </div>
            </div>
        </div>
    </div>
</div>
    
";
        
        $__internal_187116c95b793e5346b2cd4f27009e2bcadd9586008827de74fcdecbdcde31a6->leave($__internal_187116c95b793e5346b2cd4f27009e2bcadd9586008827de74fcdecbdcde31a6_prof);

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
        return array (  128 => 52,  125 => 51,  110 => 46,  104 => 43,  96 => 40,  88 => 37,  83 => 34,  79 => 33,  61 => 17,  51 => 9,  49 => 8,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "::vueMere.html.twig" %} {#La vue fille hérite de la vue mère#}*/
/*     */
/* {% block contenuCentral %}*/
/* <div class="container">*/
/*     <div class="row">*/
/*         <div class="panel panel-default">*/
/*             <div class="panel-heading"><h2><b><i class="fa fa-commenting" aria-hidden="true"></i> Espace Privé</b><a href="{{path('follow_the_rhythm_soumettreTopicEspacePrive')}}"><button style='margin-left: 32px;' type="button" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Nouveau topic</button></a></h2></div>*/
/*             {% if tabTopics is empty %}*/
/*             <div class="container">*/
/* 	            <div class ="row">*/
/* 		            <div class ="col-lg-12">*/
/* 			            <h5>Aucun topic pour le moment.</h5>*/
/* 		            </div>*/
/* 	            </div>*/
/*             </div>*/
/*             {% else %}*/
/*             <div class="container">*/
/* 	            <div class ="row">*/
/* 		            <div class ="col-lg-6">*/
/* 			            <h4>Sujet du topic</h4>*/
/* 		            </div>*/
/* 		            <div class ="col-lg-2">*/
/* 			            <h4 align="center">Créateur</h4>*/
/* 		            </div>*/
/* 		            <div class ="col-lg-1">*/
/* 			            <h4 align="center">Messages</h4> */
/* 		            </div>*/
/* 		            <div class ="col-lg-3">*/
/* 			            <h4 align="center">Dernier message le</h4>*/
/* 		            </div>*/
/* 	            </div>*/
/*             </div>*/
/*             {% for topicCourant in tabTopics %}*/
/*                 <div class="container">*/
/* 	            <div class ="row">*/
/* 		            <div class ="col-lg-6">*/
/* 			            <a href="{{path('follow_the_rhythm_messages',{'topicId':topicCourant.id, 'page':1})}}"><h5>{{topicCourant.titre}}</h5></a>*/
/* 		            </div>*/
/* 		            <div class ="col-lg-2">*/
/* 			            <a href="{{path('follow_the_rhythm_pageUtilisateur',{'id':topicCourant.utilisateur.id})}}"><h5 align="center">{{topicCourant.utilisateur.username}}</h5></a>*/
/* 		            </div>*/
/* 		            <div class ="col-lg-1">*/
/* 			            <h5 align="center">{{tabNbMessages[topicCourant.id]}}</h5> */
/* 		            </div>*/
/* 		            <div class ="col-lg-3">*/
/* 			            <h5 align="center">{% if tabNbMessages[topicCourant.id] != 0 %}{{dateD[topicCourant.id]|date('d-m-Y') }} à {{dateD[topicCourant.id]|date('H.i')}}{% endif %}</h5>*/
/* 		            </div>*/
/* 	            </div>*/
/*             </div>*/
/*             {% endfor %}*/
/*             {% endif %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/*     */
/* {% endblock %}*/
