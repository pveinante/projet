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
        $__internal_421c74683aa5e3802a4326ebd14f4e162168b3a1a9dfe03f38b268072ef85753 = $this->env->getExtension("native_profiler");
        $__internal_421c74683aa5e3802a4326ebd14f4e162168b3a1a9dfe03f38b268072ef85753->enter($__internal_421c74683aa5e3802a4326ebd14f4e162168b3a1a9dfe03f38b268072ef85753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "follow_the_rhythmSymfonyBundle:Symfony:categoriePromotion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_421c74683aa5e3802a4326ebd14f4e162168b3a1a9dfe03f38b268072ef85753->leave($__internal_421c74683aa5e3802a4326ebd14f4e162168b3a1a9dfe03f38b268072ef85753_prof);

    }

    // line 3
    public function block_contenuCentral($context, array $blocks = array())
    {
        $__internal_bb47d1f6fa534f2b19fb6b163f90a9b2130f882c13f4856c43bbc7ffd329d76a = $this->env->getExtension("native_profiler");
        $__internal_bb47d1f6fa534f2b19fb6b163f90a9b2130f882c13f4856c43bbc7ffd329d76a->enter($__internal_bb47d1f6fa534f2b19fb6b163f90a9b2130f882c13f4856c43bbc7ffd329d76a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenuCentral"));

        // line 4
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\"><h2><b><i class=\"fa fa-microphone\" aria-hidden=\"true\"></i> Promotions</b></h2></div>
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
        
        $__internal_bb47d1f6fa534f2b19fb6b163f90a9b2130f882c13f4856c43bbc7ffd329d76a->leave($__internal_bb47d1f6fa534f2b19fb6b163f90a9b2130f882c13f4856c43bbc7ffd329d76a_prof);

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
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "::vueMere.html.twig" %} {#La vue fille hérite de la vue mère#}*/
/*     */
/* {% block contenuCentral %}*/
/* <div class="container">*/
/*     <div class="row">*/
/*         <div class="panel panel-default">*/
/*             <div class="panel-heading"><h2><b><i class="fa fa-microphone" aria-hidden="true"></i> Promotions</b></h2></div>*/
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
