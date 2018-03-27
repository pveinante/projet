<?php

/* follow_the_rhythmSymfonyBundle:Symfony:accueilForum.html.twig */
class __TwigTemplate_e586d131729b9163c17ac8f2001678d1fd7da4139d6da96671acd9768be71ae1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::vueMere.html.twig", "follow_the_rhythmSymfonyBundle:Symfony:accueilForum.html.twig", 1);
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
        $__internal_b3cc65a9629ad7c68528cf5e041a6e37858334be55e24890d416637e1938ce76 = $this->env->getExtension("native_profiler");
        $__internal_b3cc65a9629ad7c68528cf5e041a6e37858334be55e24890d416637e1938ce76->enter($__internal_b3cc65a9629ad7c68528cf5e041a6e37858334be55e24890d416637e1938ce76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "follow_the_rhythmSymfonyBundle:Symfony:accueilForum.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3cc65a9629ad7c68528cf5e041a6e37858334be55e24890d416637e1938ce76->leave($__internal_b3cc65a9629ad7c68528cf5e041a6e37858334be55e24890d416637e1938ce76_prof);

    }

    // line 3
    public function block_contenuCentral($context, array $blocks = array())
    {
        $__internal_aef4cf995bb2405c50fa0e53f0bc4f9ed58a0c442968acb75f1c1f1ed430fe90 = $this->env->getExtension("native_profiler");
        $__internal_aef4cf995bb2405c50fa0e53f0bc4f9ed58a0c442968acb75f1c1f1ed430fe90->enter($__internal_aef4cf995bb2405c50fa0e53f0bc4f9ed58a0c442968acb75f1c1f1ed430fe90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenuCentral"));

        // line 4
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\"><h2><b><i class=\"fa fa-wechat\"></i> Forum</b></h2></div>
            <div class=\"container\">
\t            <div class =\"row\">
\t\t            <div class =\"col-lg-6\">
\t\t\t            <h4>Catégorie</h4>
\t\t            </div>
\t\t            <div class =\"col-lg-1\">
\t\t\t            <h4 align=\"center\">Sujets</h4>
\t\t            </div>
\t\t            <div class =\"col-lg-1\">
\t\t\t            <h4 align=\"center\">Messages</h4> 
\t\t            </div>
\t\t            <div class =\"col-lg-4\">
\t\t\t            <h4 align=\"center\">Derniers Messages</h4>
\t\t            </div>
\t            </div>
            </div>
            <div class=\"list-group\">
                <div class=\"list-group-item\">
                    <div align=\"justify\"> 
                        <a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("follow_the_rhythm_categorieNews");
        echo "\"> News</a></br><hr>
                        <a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("follow_the_rhythm_categorieEspacePrive");
        echo "\"> Espace privé</a></br><hr>
                        <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("follow_the_rhythm_categorieConcert");
        echo "\"> Concerts</a></br><hr>
                        <a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("follow_the_rhythm_categoriePromotions");
        echo "\"> Promotions</a></br><hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
";
        
        $__internal_aef4cf995bb2405c50fa0e53f0bc4f9ed58a0c442968acb75f1c1f1ed430fe90->leave($__internal_aef4cf995bb2405c50fa0e53f0bc4f9ed58a0c442968acb75f1c1f1ed430fe90_prof);

    }

    public function getTemplateName()
    {
        return "follow_the_rhythmSymfonyBundle:Symfony:accueilForum.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 30,  73 => 29,  69 => 28,  65 => 27,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "::vueMere.html.twig" %} {#La vue fille hérite de la vue mère#}*/
/*     */
/* {% block contenuCentral %}*/
/* <div class="container">*/
/*     <div class="row">*/
/*         <div class="panel panel-default">*/
/*             <div class="panel-heading"><h2><b><i class="fa fa-wechat"></i> Forum</b></h2></div>*/
/*             <div class="container">*/
/* 	            <div class ="row">*/
/* 		            <div class ="col-lg-6">*/
/* 			            <h4>Catégorie</h4>*/
/* 		            </div>*/
/* 		            <div class ="col-lg-1">*/
/* 			            <h4 align="center">Sujets</h4>*/
/* 		            </div>*/
/* 		            <div class ="col-lg-1">*/
/* 			            <h4 align="center">Messages</h4> */
/* 		            </div>*/
/* 		            <div class ="col-lg-4">*/
/* 			            <h4 align="center">Derniers Messages</h4>*/
/* 		            </div>*/
/* 	            </div>*/
/*             </div>*/
/*             <div class="list-group">*/
/*                 <div class="list-group-item">*/
/*                     <div align="justify"> */
/*                         <a href="{{path('follow_the_rhythm_categorieNews')}}"> News</a></br><hr>*/
/*                         <a href="{{path('follow_the_rhythm_categorieEspacePrive')}}"> Espace privé</a></br><hr>*/
/*                         <a href="{{path('follow_the_rhythm_categorieConcert')}}"> Concerts</a></br><hr>*/
/*                         <a href="{{path('follow_the_rhythm_categoriePromotions')}}"> Promotions</a></br><hr>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/*     */
/* {% endblock %}*/
