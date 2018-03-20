<?php

/* follow_the_rhythmSymfonyBundle:Symfony:aide.html.twig */
class __TwigTemplate_3215d57d7ecd9d570e9d077872bd42efebcddbf122573acb47afba770c43838b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::vueMere.html.twig", "follow_the_rhythmSymfonyBundle:Symfony:aide.html.twig", 1);
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
        $__internal_8fa9a212f5c544bc59868392569b4a414dac4dffbb8fe3c1f5a63e23e0d23b28 = $this->env->getExtension("native_profiler");
        $__internal_8fa9a212f5c544bc59868392569b4a414dac4dffbb8fe3c1f5a63e23e0d23b28->enter($__internal_8fa9a212f5c544bc59868392569b4a414dac4dffbb8fe3c1f5a63e23e0d23b28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "follow_the_rhythmSymfonyBundle:Symfony:aide.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8fa9a212f5c544bc59868392569b4a414dac4dffbb8fe3c1f5a63e23e0d23b28->leave($__internal_8fa9a212f5c544bc59868392569b4a414dac4dffbb8fe3c1f5a63e23e0d23b28_prof);

    }

    // line 3
    public function block_contenuCentral($context, array $blocks = array())
    {
        $__internal_77e10f75452358d1b64e21d09b9f228e7981a0f60b652a31ddc58500e33b2fcf = $this->env->getExtension("native_profiler");
        $__internal_77e10f75452358d1b64e21d09b9f228e7981a0f60b652a31ddc58500e33b2fcf->enter($__internal_77e10f75452358d1b64e21d09b9f228e7981a0f60b652a31ddc58500e33b2fcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenuCentral"));

        // line 4
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\"><h2><b><i class=\"fa fa-question-circle-o\" aria-hidden=\"true\"></i> Aide</b></h2> 
            </div>
            <div class=\"list-group\">
                <div class=\"list-group-item\">
                    <div align=\"justify\"> 
                        <h4>1 - Fonctionnalités de base</h4>
                        <h5>Se connecter :</h5>
                        <h5>Consulter actualités : </h5>

                        <h4>2 - Recherche et ajout</h5>
                        <h5>Rechercher concerts :</h5>
                        <h5>Rechercher artistes :</h5
                        <h5>Rechercher utilisateurs :</h5>
                        <h5>Ajouter artistes : </h5>
                        <h5>Ajouter utilisateurs : </h5>
                        
                        <h4>3 - Forum </h4>
                        <h5>Consulter forum : </h5>
                        <h5>Poster un topic sur le forum : </h5>
                        <h5>Poster un message sur le forum : </h5>
                        <h5>Signaler un contenu : </h5>
                        
                        <h4>4 - Fonctionnalités avancées</h4>
                        <h5>Donner actualités : </h5>
                        <h5>Gérer forum : </h5>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
";
        
        $__internal_77e10f75452358d1b64e21d09b9f228e7981a0f60b652a31ddc58500e33b2fcf->leave($__internal_77e10f75452358d1b64e21d09b9f228e7981a0f60b652a31ddc58500e33b2fcf_prof);

    }

    public function getTemplateName()
    {
        return "follow_the_rhythmSymfonyBundle:Symfony:aide.html.twig";
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
/*             <div class="panel-heading"><h2><b><i class="fa fa-question-circle-o" aria-hidden="true"></i> Aide</b></h2> */
/*             </div>*/
/*             <div class="list-group">*/
/*                 <div class="list-group-item">*/
/*                     <div align="justify"> */
/*                         <h4>1 - Fonctionnalités de base</h4>*/
/*                         <h5>Se connecter :</h5>*/
/*                         <h5>Consulter actualités : </h5>*/
/* */
/*                         <h4>2 - Recherche et ajout</h5>*/
/*                         <h5>Rechercher concerts :</h5>*/
/*                         <h5>Rechercher artistes :</h5*/
/*                         <h5>Rechercher utilisateurs :</h5>*/
/*                         <h5>Ajouter artistes : </h5>*/
/*                         <h5>Ajouter utilisateurs : </h5>*/
/*                         */
/*                         <h4>3 - Forum </h4>*/
/*                         <h5>Consulter forum : </h5>*/
/*                         <h5>Poster un topic sur le forum : </h5>*/
/*                         <h5>Poster un message sur le forum : </h5>*/
/*                         <h5>Signaler un contenu : </h5>*/
/*                         */
/*                         <h4>4 - Fonctionnalités avancées</h4>*/
/*                         <h5>Donner actualités : </h5>*/
/*                         <h5>Gérer forum : </h5>*/
/* */
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/*     */
/* {% endblock %}*/
/* */
