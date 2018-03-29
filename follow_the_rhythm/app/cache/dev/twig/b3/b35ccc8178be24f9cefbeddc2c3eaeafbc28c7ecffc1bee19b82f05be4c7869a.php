<?php

/* follow_the_rhythmSymfonyBundle:Symfony:aide.html.twig */
class __TwigTemplate_9ad1ab8b470f36d37362c27fede7bc5bc3889f38608315f9d250b6924dfaf44e extends Twig_Template
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
        $__internal_8e71afef40afc90f2aeaba147910bc1a50fe2776564a846fea6907afde94325f = $this->env->getExtension("native_profiler");
        $__internal_8e71afef40afc90f2aeaba147910bc1a50fe2776564a846fea6907afde94325f->enter($__internal_8e71afef40afc90f2aeaba147910bc1a50fe2776564a846fea6907afde94325f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "follow_the_rhythmSymfonyBundle:Symfony:aide.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e71afef40afc90f2aeaba147910bc1a50fe2776564a846fea6907afde94325f->leave($__internal_8e71afef40afc90f2aeaba147910bc1a50fe2776564a846fea6907afde94325f_prof);

    }

    // line 3
    public function block_contenuCentral($context, array $blocks = array())
    {
        $__internal_707f7182bb7e496614bd60adc6c98b15c600aebca7e7c4524a66e6db2aed6bcf = $this->env->getExtension("native_profiler");
        $__internal_707f7182bb7e496614bd60adc6c98b15c600aebca7e7c4524a66e6db2aed6bcf->enter($__internal_707f7182bb7e496614bd60adc6c98b15c600aebca7e7c4524a66e6db2aed6bcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenuCentral"));

        // line 4
        echo "<div class=\"container\">

        <div class=\"panel panel-default\">
            <div class=\"panel-heading\"><h2><b><i class=\"fa fa-question-circle-o\" aria-hidden=\"true\"></i> Aide</b></h2> 
            <a href=\"https://www.youtube.com/channel/UC_dZn8-hVaizmrwpj4eDsNw\"><span class=\"glyphicons glyphicons-play\"></span> <button type=\"button\" class=\"btn btn-secondary\">Chaîne Youtube</button></a>
            </div>
               <div class=\"row\">
                   <div class=\"col-lg-12\">
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
</div>
    
";
        
        $__internal_707f7182bb7e496614bd60adc6c98b15c600aebca7e7c4524a66e6db2aed6bcf->leave($__internal_707f7182bb7e496614bd60adc6c98b15c600aebca7e7c4524a66e6db2aed6bcf_prof);

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
/* */
/*         <div class="panel panel-default">*/
/*             <div class="panel-heading"><h2><b><i class="fa fa-question-circle-o" aria-hidden="true"></i> Aide</b></h2> */
/*             <a href="https://www.youtube.com/channel/UC_dZn8-hVaizmrwpj4eDsNw"><span class="glyphicons glyphicons-play"></span> <button type="button" class="btn btn-secondary">Chaîne Youtube</button></a>*/
/*             </div>*/
/*                <div class="row">*/
/*                    <div class="col-lg-12">*/
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
/*         </div>*/
/*     </div>*/
/* </div>*/
/*     */
/* {% endblock %}*/
/* */
