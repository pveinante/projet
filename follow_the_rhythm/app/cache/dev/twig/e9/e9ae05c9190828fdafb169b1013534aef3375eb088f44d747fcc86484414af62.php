<?php

/* follow_the_rhythmSymfonyBundle:Symfony:contacts.html.twig */
class __TwigTemplate_ab6f91276824b2dd5ef8b3a145e21f6a1e3912514c58eb06ee43d92aa224d01a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::vueMere.html.twig", "follow_the_rhythmSymfonyBundle:Symfony:contacts.html.twig", 1);
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
        $__internal_350074b02c54ebb5571ef8e81bbcc478e3dd49354c175a612f5d9de6c0fda7f9 = $this->env->getExtension("native_profiler");
        $__internal_350074b02c54ebb5571ef8e81bbcc478e3dd49354c175a612f5d9de6c0fda7f9->enter($__internal_350074b02c54ebb5571ef8e81bbcc478e3dd49354c175a612f5d9de6c0fda7f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "follow_the_rhythmSymfonyBundle:Symfony:contacts.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_350074b02c54ebb5571ef8e81bbcc478e3dd49354c175a612f5d9de6c0fda7f9->leave($__internal_350074b02c54ebb5571ef8e81bbcc478e3dd49354c175a612f5d9de6c0fda7f9_prof);

    }

    // line 3
    public function block_contenuCentral($context, array $blocks = array())
    {
        $__internal_f35c6f7acf78ca9ddcadd86eec30cb04bceadfc52d18a604bc1965ed7fbafd6d = $this->env->getExtension("native_profiler");
        $__internal_f35c6f7acf78ca9ddcadd86eec30cb04bceadfc52d18a604bc1965ed7fbafd6d->enter($__internal_f35c6f7acf78ca9ddcadd86eec30cb04bceadfc52d18a604bc1965ed7fbafd6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenuCentral"));

        // line 4
        echo "       
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\"><h2><b><span class=\"glyphicon glyphicon-user\"></span> Contacts</b></h2> 
                </div>
                <div class=\"list-group\">
                    <div class=\"list-group-item\">
                        <div align=\"justify\"> 
                            <h3><b>Étudiants ayant participés à la réalisation de ce site : </b></h3></Br>
                            <table style=\"width:100%\">
                                <tr>
                                    <td>Photo1</td>
                                    <td>BAQUE LEO</td>
                                    <td>lbaque001@iutbayonne.univ-pau.fr</td>
                                    <td>Semestre 3</td>
                                </tr>
                                <tr>
                                    <td>Photo2</td>
                                    <td>BELDERRAIN Jeremy</td>
                                    <td>jeremy.belderrain@laposte.net</td>
                                    <td>Semestre 3 & 4</td>
                                </tr>
                                <tr>
                                    <td>Photo3</td>
                                    <td>GONCALVES Anthony</td>
                                    <td>anthogoncalves1998@gmail.com</td>
                                    <td>Semestre 4</td>
                                </tr>
                                <tr>
                                    <td>Photo4</td>
                                    <td>HAMEL Sullivan</td>
                                    <td>sullivanhamel@gmail.com</td>
                                    <td>Semestre 3 & 4</td>
                                </tr>
                                <tr>
                                    <td>Photo5</td>
                                    <td>VEINANTE Paul</td>
                                    <td>paulopaco@hotmail.fr</td>
                                    <td>Semestre 3 & 4</td>
                                </tr>
                            </table>
                              
                            <h3><b>Tuteur - Commanditaire :</b></h3></Br>
                               
                            <table style=\"width:100%\">
                                <tr>
                                    <td>Photo6</td>
                                    <td>MARQUESUZAA Christophe</td>
                                    <td>christophe.marquesuzaa@iutbayonne.univ-pau.fr</td>
                                    <td>Semestre 3 & 4</td>
                                </tr>
                            </table></br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
";
        
        $__internal_f35c6f7acf78ca9ddcadd86eec30cb04bceadfc52d18a604bc1965ed7fbafd6d->leave($__internal_f35c6f7acf78ca9ddcadd86eec30cb04bceadfc52d18a604bc1965ed7fbafd6d_prof);

    }

    public function getTemplateName()
    {
        return "follow_the_rhythmSymfonyBundle:Symfony:contacts.html.twig";
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
/* */
/* {% block contenuCentral %}*/
/*        */
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="panel panel-default">*/
/*                 <div class="panel-heading"><h2><b><span class="glyphicon glyphicon-user"></span> Contacts</b></h2> */
/*                 </div>*/
/*                 <div class="list-group">*/
/*                     <div class="list-group-item">*/
/*                         <div align="justify"> */
/*                             <h3><b>Étudiants ayant participés à la réalisation de ce site : </b></h3></Br>*/
/*                             <table style="width:100%">*/
/*                                 <tr>*/
/*                                     <td>Photo1</td>*/
/*                                     <td>BAQUE LEO</td>*/
/*                                     <td>lbaque001@iutbayonne.univ-pau.fr</td>*/
/*                                     <td>Semestre 3</td>*/
/*                                 </tr>*/
/*                                 <tr>*/
/*                                     <td>Photo2</td>*/
/*                                     <td>BELDERRAIN Jeremy</td>*/
/*                                     <td>jeremy.belderrain@laposte.net</td>*/
/*                                     <td>Semestre 3 & 4</td>*/
/*                                 </tr>*/
/*                                 <tr>*/
/*                                     <td>Photo3</td>*/
/*                                     <td>GONCALVES Anthony</td>*/
/*                                     <td>anthogoncalves1998@gmail.com</td>*/
/*                                     <td>Semestre 4</td>*/
/*                                 </tr>*/
/*                                 <tr>*/
/*                                     <td>Photo4</td>*/
/*                                     <td>HAMEL Sullivan</td>*/
/*                                     <td>sullivanhamel@gmail.com</td>*/
/*                                     <td>Semestre 3 & 4</td>*/
/*                                 </tr>*/
/*                                 <tr>*/
/*                                     <td>Photo5</td>*/
/*                                     <td>VEINANTE Paul</td>*/
/*                                     <td>paulopaco@hotmail.fr</td>*/
/*                                     <td>Semestre 3 & 4</td>*/
/*                                 </tr>*/
/*                             </table>*/
/*                               */
/*                             <h3><b>Tuteur - Commanditaire :</b></h3></Br>*/
/*                                */
/*                             <table style="width:100%">*/
/*                                 <tr>*/
/*                                     <td>Photo6</td>*/
/*                                     <td>MARQUESUZAA Christophe</td>*/
/*                                     <td>christophe.marquesuzaa@iutbayonne.univ-pau.fr</td>*/
/*                                     <td>Semestre 3 & 4</td>*/
/*                                 </tr>*/
/*                             </table></br>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     */
/* {% endblock %}*/
/* */
/* */
/* */
