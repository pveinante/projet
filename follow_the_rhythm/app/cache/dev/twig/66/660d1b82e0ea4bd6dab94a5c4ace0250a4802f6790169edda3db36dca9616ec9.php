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
        $__internal_bb4b25b0113af74fe6ae03d16685ba34504f489cf050bd138d3a8ed0a4b6993b = $this->env->getExtension("native_profiler");
        $__internal_bb4b25b0113af74fe6ae03d16685ba34504f489cf050bd138d3a8ed0a4b6993b->enter($__internal_bb4b25b0113af74fe6ae03d16685ba34504f489cf050bd138d3a8ed0a4b6993b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "follow_the_rhythmSymfonyBundle:Symfony:categoriePromotion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb4b25b0113af74fe6ae03d16685ba34504f489cf050bd138d3a8ed0a4b6993b->leave($__internal_bb4b25b0113af74fe6ae03d16685ba34504f489cf050bd138d3a8ed0a4b6993b_prof);

    }

    // line 3
    public function block_contenuCentral($context, array $blocks = array())
    {
        $__internal_d484c5c9b6e292e10ca090d84923382486488d582fd9a08e3aa177e4ea7e9444 = $this->env->getExtension("native_profiler");
        $__internal_d484c5c9b6e292e10ca090d84923382486488d582fd9a08e3aa177e4ea7e9444->enter($__internal_d484c5c9b6e292e10ca090d84923382486488d582fd9a08e3aa177e4ea7e9444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenuCentral"));

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
                    <div align=\"justify\"> 
                        <h4>Prochainement, la catégorie promotions du forum de Follow the rhythm</h4></Br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
";
        
        $__internal_d484c5c9b6e292e10ca090d84923382486488d582fd9a08e3aa177e4ea7e9444->leave($__internal_d484c5c9b6e292e10ca090d84923382486488d582fd9a08e3aa177e4ea7e9444_prof);

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
        return array (  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
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
/*                     <div align="justify"> */
/*                         <h4>Prochainement, la catégorie promotions du forum de Follow the rhythm</h4></Br>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/*     */
/* {% endblock %}*/
