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
        $__internal_388a1f8ff82263da554063fab5e4077b27887a425469b8d54e630626eb3a6f62 = $this->env->getExtension("native_profiler");
        $__internal_388a1f8ff82263da554063fab5e4077b27887a425469b8d54e630626eb3a6f62->enter($__internal_388a1f8ff82263da554063fab5e4077b27887a425469b8d54e630626eb3a6f62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "follow_the_rhythmSymfonyBundle:Symfony:categorieEspacePrive.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_388a1f8ff82263da554063fab5e4077b27887a425469b8d54e630626eb3a6f62->leave($__internal_388a1f8ff82263da554063fab5e4077b27887a425469b8d54e630626eb3a6f62_prof);

    }

    // line 3
    public function block_contenuCentral($context, array $blocks = array())
    {
        $__internal_3fcdba266702ff1730c53536ebcaac87b9180cbca5dc2e7b1c8a211ab2b3c450 = $this->env->getExtension("native_profiler");
        $__internal_3fcdba266702ff1730c53536ebcaac87b9180cbca5dc2e7b1c8a211ab2b3c450->enter($__internal_3fcdba266702ff1730c53536ebcaac87b9180cbca5dc2e7b1c8a211ab2b3c450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenuCentral"));

        // line 4
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\"><h2><b><i class=\"fa fa-commenting\" aria-hidden=\"true\"></i> Espace privé</b><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("follow_the_rhythm_soumettreActualite");
        echo "\"><button style='margin-left: 32px;' type=\"button\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-plus\"></span> Nouveau topic</button></a></h2></div>
            <div class=\"list-group\">
                <div class=\"list-group-item\">
                    <div align=\"justify\"> 
                        <h4>Prochainement, la catégorie Espace privé du forum de Follow the rhythm</h4></Br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
";
        
        $__internal_3fcdba266702ff1730c53536ebcaac87b9180cbca5dc2e7b1c8a211ab2b3c450->leave($__internal_3fcdba266702ff1730c53536ebcaac87b9180cbca5dc2e7b1c8a211ab2b3c450_prof);

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
        return array (  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "::vueMere.html.twig" %} {#La vue fille hérite de la vue mère#}*/
/*     */
/* {% block contenuCentral %}*/
/* <div class="container">*/
/*     <div class="row">*/
/*         <div class="panel panel-default">*/
/*             <div class="panel-heading"><h2><b><i class="fa fa-commenting" aria-hidden="true"></i> Espace privé</b><a href="{{path('follow_the_rhythm_soumettreActualite')}}"><button style='margin-left: 32px;' type="button" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Nouveau topic</button></a></h2></div>*/
/*             <div class="list-group">*/
/*                 <div class="list-group-item">*/
/*                     <div align="justify"> */
/*                         <h4>Prochainement, la catégorie Espace privé du forum de Follow the rhythm</h4></Br>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/*     */
/* {% endblock %}*/
