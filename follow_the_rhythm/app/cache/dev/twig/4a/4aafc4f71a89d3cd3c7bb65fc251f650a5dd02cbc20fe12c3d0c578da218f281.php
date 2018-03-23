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
        $__internal_ba9a42f06bef867b4264b28459de24df5d240b7a6028149d9bd1d6ba1c20ed14 = $this->env->getExtension("native_profiler");
        $__internal_ba9a42f06bef867b4264b28459de24df5d240b7a6028149d9bd1d6ba1c20ed14->enter($__internal_ba9a42f06bef867b4264b28459de24df5d240b7a6028149d9bd1d6ba1c20ed14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "follow_the_rhythmSymfonyBundle:Symfony:categorieEspacePrive.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba9a42f06bef867b4264b28459de24df5d240b7a6028149d9bd1d6ba1c20ed14->leave($__internal_ba9a42f06bef867b4264b28459de24df5d240b7a6028149d9bd1d6ba1c20ed14_prof);

    }

    // line 3
    public function block_contenuCentral($context, array $blocks = array())
    {
        $__internal_303ab25f79b4f6b736621c2921a1f0cf5cac3c5b77f49be0af600a4da7401900 = $this->env->getExtension("native_profiler");
        $__internal_303ab25f79b4f6b736621c2921a1f0cf5cac3c5b77f49be0af600a4da7401900->enter($__internal_303ab25f79b4f6b736621c2921a1f0cf5cac3c5b77f49be0af600a4da7401900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenuCentral"));

        // line 4
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\"><h2><b><i class=\"fa fa-user-o\" aria-hidden=\"true\"></i><i class=\"fa fa-commenting\" aria-hidden=\"true\"></i> Espace privé</b></h2></div>
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
        
        $__internal_303ab25f79b4f6b736621c2921a1f0cf5cac3c5b77f49be0af600a4da7401900->leave($__internal_303ab25f79b4f6b736621c2921a1f0cf5cac3c5b77f49be0af600a4da7401900_prof);

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
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "::vueMere.html.twig" %} {#La vue fille hérite de la vue mère#}*/
/*     */
/* {% block contenuCentral %}*/
/* <div class="container">*/
/*     <div class="row">*/
/*         <div class="panel panel-default">*/
/*             <div class="panel-heading"><h2><b><i class="fa fa-user-o" aria-hidden="true"></i><i class="fa fa-commenting" aria-hidden="true"></i> Espace privé</b></h2></div>*/
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
