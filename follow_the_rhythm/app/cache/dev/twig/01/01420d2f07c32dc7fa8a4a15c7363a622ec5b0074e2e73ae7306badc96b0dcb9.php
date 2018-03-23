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
        $__internal_efcaa2c17e9ff6db6cc8b65bf96b7367e0f561f52999acb8ae12fc4762cf215a = $this->env->getExtension("native_profiler");
        $__internal_efcaa2c17e9ff6db6cc8b65bf96b7367e0f561f52999acb8ae12fc4762cf215a->enter($__internal_efcaa2c17e9ff6db6cc8b65bf96b7367e0f561f52999acb8ae12fc4762cf215a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "follow_the_rhythmSymfonyBundle:Symfony:aide.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_efcaa2c17e9ff6db6cc8b65bf96b7367e0f561f52999acb8ae12fc4762cf215a->leave($__internal_efcaa2c17e9ff6db6cc8b65bf96b7367e0f561f52999acb8ae12fc4762cf215a_prof);

    }

    // line 3
    public function block_contenuCentral($context, array $blocks = array())
    {
        $__internal_117626e8fe6530f25fa633d92cb51c7096d765e174625300284268eaddf0177a = $this->env->getExtension("native_profiler");
        $__internal_117626e8fe6530f25fa633d92cb51c7096d765e174625300284268eaddf0177a->enter($__internal_117626e8fe6530f25fa633d92cb51c7096d765e174625300284268eaddf0177a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenuCentral"));

        // line 4
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\"><h2><b><i class=\"fa fa-question-circle-o\" aria-hidden=\"true\"></i> Aide</b></h2> 
            <a href=\"https://www.youtube.com/channel/UC_dZn8-hVaizmrwpj4eDsNw\"><span class=\"glyphicons glyphicons-play\"></span> <button type=\"button\" class=\"btn btn-secondary\">Chaîne Youtube</button></a>
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
        
        $__internal_117626e8fe6530f25fa633d92cb51c7096d765e174625300284268eaddf0177a->leave($__internal_117626e8fe6530f25fa633d92cb51c7096d765e174625300284268eaddf0177a_prof);

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
/*             <a href="https://www.youtube.com/channel/UC_dZn8-hVaizmrwpj4eDsNw"><span class="glyphicons glyphicons-play"></span> <button type="button" class="btn btn-secondary">Chaîne Youtube</button></a>*/
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
