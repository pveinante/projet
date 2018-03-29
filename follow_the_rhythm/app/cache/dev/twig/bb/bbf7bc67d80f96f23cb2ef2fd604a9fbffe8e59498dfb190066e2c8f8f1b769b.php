<?php

/* follow_the_rhythmSymfonyBundle:Symfony:pageArtiste.html.twig */
class __TwigTemplate_f677a229a04b1e16e6141af9a2f0e6353b583e9b953488127fd905d90836de71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::vueMere.html.twig", "follow_the_rhythmSymfonyBundle:Symfony:pageArtiste.html.twig", 1);
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
        $__internal_1fd096f8a5d5e296c288692e22462f76d6f5172e28add466e061ba35fa6bfefd = $this->env->getExtension("native_profiler");
        $__internal_1fd096f8a5d5e296c288692e22462f76d6f5172e28add466e061ba35fa6bfefd->enter($__internal_1fd096f8a5d5e296c288692e22462f76d6f5172e28add466e061ba35fa6bfefd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "follow_the_rhythmSymfonyBundle:Symfony:pageArtiste.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1fd096f8a5d5e296c288692e22462f76d6f5172e28add466e061ba35fa6bfefd->leave($__internal_1fd096f8a5d5e296c288692e22462f76d6f5172e28add466e061ba35fa6bfefd_prof);

    }

    // line 3
    public function block_contenuCentral($context, array $blocks = array())
    {
        $__internal_3cfae34e836e68fb8fcb5453332c78047980a308fa2838c2b915f1c657a8ace6 = $this->env->getExtension("native_profiler");
        $__internal_3cfae34e836e68fb8fcb5453332c78047980a308fa2838c2b915f1c657a8ace6->enter($__internal_3cfae34e836e68fb8fcb5453332c78047980a308fa2838c2b915f1c657a8ace6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenuCentral"));

        // line 4
        echo "<body>
  <div class=\"container\">
      <div class=\"panel panel-default\">
      <!--default panel content-->
        <div class=\"panel-heading\"><h2><b><i class=\"fa fa-user-circle\"></i> ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["artiste"]) ? $context["artiste"] : $this->getContext($context, "artiste")), "nomDeScene", array()), "html", null, true);
        echo "</b></h2></div>
         <div class=\"row\">
           <div class=\"col-lg-12\">
        <div class=\"list-group\">
            <div class=\"list-group-item\">
            <p align=\"center\"><img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("upload/images/Stickman.png"), "html", null, true);
        echo "\" /></p>
            ";
        // line 14
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 15
            echo "              ";
            if ((isset($context["dejaSuivi"]) ? $context["dejaSuivi"] : $this->getContext($context, "dejaSuivi"))) {
                // line 16
                echo "                <a title='Ne plus suivre ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["artiste"]) ? $context["artiste"] : $this->getContext($context, "artiste")), "nomDeScene", array()), "html", null, true);
                echo "' href='";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("follow_the_rhythm_nePlusSuivreArtiste", array("artiste" => $this->getAttribute((isset($context["artiste"]) ? $context["artiste"] : $this->getContext($context, "artiste")), "id", array()))), "html", null, true);
                echo "'><p><button class=\"btn btn-primary\">Ne plus suivre</button></a> ";
                if (($this->getAttribute((isset($context["artiste"]) ? $context["artiste"] : $this->getContext($context, "artiste")), "nbFollower", array()) > 1)) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["artiste"]) ? $context["artiste"] : $this->getContext($context, "artiste")), "nbFollower", array()), "html", null, true);
                    echo " followers ";
                } else {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["artiste"]) ? $context["artiste"] : $this->getContext($context, "artiste")), "nbFollower", array()), "html", null, true);
                    echo " follower ";
                }
                echo " </p>
              ";
            } else {
                // line 18
                echo "                <a title='Suivre ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["artiste"]) ? $context["artiste"] : $this->getContext($context, "artiste")), "nomDeScene", array()), "html", null, true);
                echo "' href='";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("follow_the_rhythm_suivreArtiste", array("artiste" => $this->getAttribute((isset($context["artiste"]) ? $context["artiste"] : $this->getContext($context, "artiste")), "id", array()))), "html", null, true);
                echo "'><p><button class=\"btn btn-primary\">Suivre</button></a> ";
                if (($this->getAttribute((isset($context["artiste"]) ? $context["artiste"] : $this->getContext($context, "artiste")), "nbFollower", array()) > 1)) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["artiste"]) ? $context["artiste"] : $this->getContext($context, "artiste")), "nbFollower", array()), "html", null, true);
                    echo " followers ";
                } else {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["artiste"]) ? $context["artiste"] : $this->getContext($context, "artiste")), "nbFollower", array()), "html", null, true);
                    echo " follower ";
                }
                echo " </p>
             ";
            }
            // line 20
            echo "            ";
        } else {
            // line 21
            echo "              <a title='Connectez-vous pour suivre ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["artiste"]) ? $context["artiste"] : $this->getContext($context, "artiste")), "nomDeScene", array()), "html", null, true);
            echo "' href='";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "'><p><button class=\"btn btn-primary\">Connectez-vous pour suivre ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["artiste"]) ? $context["artiste"] : $this->getContext($context, "artiste")), "nomDeScene", array()), "html", null, true);
            echo "</button></a> ";
            if (($this->getAttribute((isset($context["artiste"]) ? $context["artiste"] : $this->getContext($context, "artiste")), "nbFollower", array()) > 1)) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["artiste"]) ? $context["artiste"] : $this->getContext($context, "artiste")), "nbFollower", array()), "html", null, true);
                echo " followers ";
            } else {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["artiste"]) ? $context["artiste"] : $this->getContext($context, "artiste")), "nbFollower", array()), "html", null, true);
                echo " follower ";
            }
            echo " </p>
            ";
        }
        // line 23
        echo "               
               <p><h4>Nom complet de l'artiste: ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["artiste"]) ? $context["artiste"] : $this->getContext($context, "artiste")), "nomComplet", array()), "html", null, true);
        echo "</h4></p>
               <p><label><b><h3>Actualités concernant ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["artiste"]) ? $context["artiste"] : $this->getContext($context, "artiste")), "nomDeScene", array()), "html", null, true);
        echo "</h3></b></label></p>
        
                    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tabActualites"]) ? $context["tabActualites"] : $this->getContext($context, "tabActualites")));
        foreach ($context['_seq'] as $context["_key"] => $context["actualiteCourante"]) {
            // line 28
            echo "                      
                      <div class=\"list-group-item\"><h2><label>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["actualiteCourante"], "titre", array()), "html", null, true);
            echo "</label></h2>
                    <!-- si pas de concert concerné -->
                      ";
            // line 31
            if (twig_test_empty($this->getAttribute($context["actualiteCourante"], "concert", array()))) {
                // line 32
                echo "                          <p><label>Pas de concert lié</label></p>
                      ";
            } else {
                // line 34
                echo "                          <p><label>Concert lié : <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("follow_the_rhythm_pageConcert", array("id" => $this->getAttribute($this->getAttribute($context["actualiteCourante"], "concert", array()), "id", array()))), "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["actualiteCourante"], "concert", array()), "nom", array()), "html", null, true);
                echo "</a> </label></p>
                      ";
            }
            // line 36
            echo "                          <p><label>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["actualiteCourante"], "description", array()), "html", null, true);
            echo "</label></p>
                          <p><label>Date : ";
            // line 37
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["actualiteCourante"], "dateActualite", array()), "d/m/Y"), "html", null, true);
            echo "</label></p>
                    <!--Si coup(s) de coeur > 1-->
                      ";
            // line 39
            if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                // line 40
                echo "                        ";
                if (($this->getAttribute($context["actualiteCourante"], "nbCoupDeCoeurs", array()) > 1)) {
                    // line 41
                    echo "                            <a href='' title=\"J'adore cet article !\"><button type=\"button\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-heart\"></span> Coup de cœur</button></a> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["actualiteCourante"], "nbCoupDeCoeurs", array()), "html", null, true);
                    echo " Coups de cœurs 
                        ";
                } else {
                    // line 43
                    echo "                            <a href='' title=\"J'adore cet article !\"><button type=\"button\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-heart\"></span> Coup de cœur</button></a> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["actualiteCourante"], "nbCoupDeCoeurs", array()), "html", null, true);
                    echo " Coup de cœur
                        ";
                }
                // line 44
                echo "   
                      ";
            } else {
                // line 46
                echo "                        ";
                if (($this->getAttribute($context["actualiteCourante"], "nbCoupDeCoeurs", array()) > 1)) {
                    // line 47
                    echo "                            <a href='' title=\"J'adore cet article !\"><button type=\"button\" class=\"btn btn-primary\"  onclick=\"isNotConnected();\"><span class=\"glyphicon glyphicon-heart\"></span> Coup de cœur</button></a> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["actualiteCourante"], "nbCoupDeCoeurs", array()), "html", null, true);
                    echo " Coups de cœurs 
                        ";
                } else {
                    // line 49
                    echo "                            <a href='' title=\"J'adore cet article !\"><button type=\"button\" class=\"btn btn-primary\"  onclick=\"isNotConnected();\"><span class=\"glyphicon glyphicon-heart\"></span> Coup de cœur</button></a> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["actualiteCourante"], "nbCoupDeCoeurs", array()), "html", null, true);
                    echo " Coup de cœur
                        ";
                }
                // line 50
                echo "   
                      ";
            }
            // line 51
            echo "  
                                  
                        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actualiteCourante'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "        </div>
      </div>
    </div>
    </div>
  </div>
</div>
</body>
<script>
    function isNotConnected(){
    alert(\"Il faut être connecté pour accéder à cette fonctionnalité\");
  }
    
</script>

";
        
        $__internal_3cfae34e836e68fb8fcb5453332c78047980a308fa2838c2b915f1c657a8ace6->leave($__internal_3cfae34e836e68fb8fcb5453332c78047980a308fa2838c2b915f1c657a8ace6_prof);

    }

    public function getTemplateName()
    {
        return "follow_the_rhythmSymfonyBundle:Symfony:pageArtiste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 55,  207 => 51,  203 => 50,  197 => 49,  191 => 47,  188 => 46,  184 => 44,  178 => 43,  172 => 41,  169 => 40,  167 => 39,  162 => 37,  157 => 36,  149 => 34,  145 => 32,  143 => 31,  138 => 29,  135 => 28,  131 => 27,  126 => 25,  122 => 24,  119 => 23,  100 => 21,  97 => 20,  80 => 18,  63 => 16,  60 => 15,  58 => 14,  54 => 13,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "::vueMere.html.twig" %} {#La vue fille hérite de la vue mère#}*/
/* */
/* {% block contenuCentral %}*/
/* <body>*/
/*   <div class="container">*/
/*       <div class="panel panel-default">*/
/*       <!--default panel content-->*/
/*         <div class="panel-heading"><h2><b><i class="fa fa-user-circle"></i> {{artiste.nomDeScene}}</b></h2></div>*/
/*          <div class="row">*/
/*            <div class="col-lg-12">*/
/*         <div class="list-group">*/
/*             <div class="list-group-item">*/
/*             <p align="center"><img src="{{ asset('upload/images/Stickman.png') }}" /></p>*/
/*             {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*               {% if dejaSuivi %}*/
/*                 <a title='Ne plus suivre {{artiste.nomDeScene}}' href='{{path('follow_the_rhythm_nePlusSuivreArtiste',{'artiste':artiste.id})}}'><p><button class="btn btn-primary">Ne plus suivre</button></a> {% if artiste.nbFollower > 1 %}{{artiste.nbFollower}} followers {% else %} {{artiste.nbFollower}} follower {% endif %} </p>*/
/*               {% else %}*/
/*                 <a title='Suivre {{artiste.nomDeScene}}' href='{{path('follow_the_rhythm_suivreArtiste',{'artiste':artiste.id})}}'><p><button class="btn btn-primary">Suivre</button></a> {% if artiste.nbFollower > 1 %}{{artiste.nbFollower}} followers {% else %} {{artiste.nbFollower}} follower {% endif %} </p>*/
/*              {% endif %}*/
/*             {% else %}*/
/*               <a title='Connectez-vous pour suivre {{artiste.nomDeScene}}' href='{{path('fos_user_security_login')}}'><p><button class="btn btn-primary">Connectez-vous pour suivre {{artiste.nomDeScene}}</button></a> {% if artiste.nbFollower > 1 %}{{artiste.nbFollower}} followers {% else %} {{artiste.nbFollower}} follower {% endif %} </p>*/
/*             {% endif %}*/
/*                */
/*                <p><h4>Nom complet de l'artiste: {{artiste.nomComplet}}</h4></p>*/
/*                <p><label><b><h3>Actualités concernant {{artiste.nomDeScene}}</h3></b></label></p>*/
/*         */
/*                     {% for actualiteCourante in tabActualites %}*/
/*                       */
/*                       <div class="list-group-item"><h2><label>{{actualiteCourante.titre}}</label></h2>*/
/*                     <!-- si pas de concert concerné -->*/
/*                       {% if actualiteCourante.concert is empty %}*/
/*                           <p><label>Pas de concert lié</label></p>*/
/*                       {% else %}*/
/*                           <p><label>Concert lié : <a href="{{path('follow_the_rhythm_pageConcert',{'id':actualiteCourante.concert.id})}}" >{{actualiteCourante.concert.nom}}</a> </label></p>*/
/*                       {% endif %}*/
/*                           <p><label>{{actualiteCourante.description}}</label></p>*/
/*                           <p><label>Date : {{actualiteCourante.dateActualite|date("d/m/Y")}}</label></p>*/
/*                     <!--Si coup(s) de coeur > 1-->*/
/*                       {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                         {% if actualiteCourante.nbCoupDeCoeurs > 1 %}*/
/*                             <a href='' title="J'adore cet article !"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-heart"></span> Coup de cœur</button></a> {{actualiteCourante.nbCoupDeCoeurs}} Coups de cœurs */
/*                         {% else %}*/
/*                             <a href='' title="J'adore cet article !"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-heart"></span> Coup de cœur</button></a> {{actualiteCourante.nbCoupDeCoeurs}} Coup de cœur*/
/*                         {% endif %}   */
/*                       {% else %}*/
/*                         {% if actualiteCourante.nbCoupDeCoeurs > 1 %}*/
/*                             <a href='' title="J'adore cet article !"><button type="button" class="btn btn-primary"  onclick="isNotConnected();"><span class="glyphicon glyphicon-heart"></span> Coup de cœur</button></a> {{actualiteCourante.nbCoupDeCoeurs}} Coups de cœurs */
/*                         {% else %}*/
/*                             <a href='' title="J'adore cet article !"><button type="button" class="btn btn-primary"  onclick="isNotConnected();"><span class="glyphicon glyphicon-heart"></span> Coup de cœur</button></a> {{actualiteCourante.nbCoupDeCoeurs}} Coup de cœur*/
/*                         {% endif %}   */
/*                       {% endif %}  */
/*                                   */
/*                         </div>*/
/*         {% endfor %}*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* </body>*/
/* <script>*/
/*     function isNotConnected(){*/
/*     alert("Il faut être connecté pour accéder à cette fonctionnalité");*/
/*   }*/
/*     */
/* </script>*/
/* */
/* {% endblock %}*/
