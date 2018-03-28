<?php

/* follow_the_rhythmSymfonyBundle:Symfony:messages.html.twig */
class __TwigTemplate_30d71c44aa2e70d27efad3b75ae9a51e0383610d7d218f2b8f99281ff66413f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::vueMere.html.twig", "follow_the_rhythmSymfonyBundle:Symfony:messages.html.twig", 1);
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
        $__internal_f87b795d116042e9190afe7f1aa11362bb6788725e488e7514db51ecd5fe9013 = $this->env->getExtension("native_profiler");
        $__internal_f87b795d116042e9190afe7f1aa11362bb6788725e488e7514db51ecd5fe9013->enter($__internal_f87b795d116042e9190afe7f1aa11362bb6788725e488e7514db51ecd5fe9013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "follow_the_rhythmSymfonyBundle:Symfony:messages.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f87b795d116042e9190afe7f1aa11362bb6788725e488e7514db51ecd5fe9013->leave($__internal_f87b795d116042e9190afe7f1aa11362bb6788725e488e7514db51ecd5fe9013_prof);

    }

    // line 3
    public function block_contenuCentral($context, array $blocks = array())
    {
        $__internal_c8fe28d0d763fc72bcdd15467e8acd8a2f808c4d095d5c4c2b13fc28b71bba1e = $this->env->getExtension("native_profiler");
        $__internal_c8fe28d0d763fc72bcdd15467e8acd8a2f808c4d095d5c4c2b13fc28b71bba1e->enter($__internal_c8fe28d0d763fc72bcdd15467e8acd8a2f808c4d095d5c4c2b13fc28b71bba1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenuCentral"));

        // line 4
        echo "
  <script>
    function changerNbParPage()
    {
      \$lien = document.getElementById(\"nb\").value;
      location.href = \$lien;
    }
  </script>
  
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"panel panel-default\">
        <div class=\"panel-heading\"><h2><b><span class=\"fa fa-commenting\"></span> ";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["titre"]) ? $context["titre"] : $this->getContext($context, "titre")), "html", null, true);
        echo "</b></h2>
         Nombre de messages par page : <select onChange='changerNbParPage()' id='nb'>
          <option value='";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["nbParPage"]) ? $context["nbParPage"] : $this->getContext($context, "nbParPage")), "html", null, true);
        echo "' selected>Nombre courant : ";
        echo twig_escape_filter($this->env, (isset($context["nbParPage"]) ? $context["nbParPage"] : $this->getContext($context, "nbParPage")), "html", null, true);
        echo "</option><option value=5>5</option><option value=10>10</option><option value=25>25</option><option value=50>50</option>
        </select>
        </div>
     
      <div class=\"list-group\">

      <!--AFFICHAGE DES MESSAGES-->
      ";
        // line 25
        if (twig_test_empty((isset($context["tabMessage"]) ? $context["tabMessage"] : $this->getContext($context, "tabMessage")))) {
            // line 26
            echo "            <div class=\"container\">
\t            <div class =\"row\">
\t\t            <div class =\"col-lg-12\">
\t\t\t            <h5>Aucun message. Soyez le premier à parler de \"";
            // line 29
            echo twig_escape_filter($this->env, (isset($context["titre"]) ? $context["titre"] : $this->getContext($context, "titre")), "html", null, true);
            echo "\" !</h5>
\t\t            </div>
\t            </div>
            </div>
            ";
        } else {
            // line 34
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tabMessage"]) ? $context["tabMessage"] : $this->getContext($context, "tabMessage")));
            foreach ($context['_seq'] as $context["_key"] => $context["messageCourant"]) {
                // line 35
                echo "        
          ";
                // line 36
                if (($this->getAttribute($this->getAttribute($context["messageCourant"], "topic", array()), "id", array()) == (isset($context["topicCourant"]) ? $context["topicCourant"] : $this->getContext($context, "topicCourant")))) {
                    // line 37
                    echo "          <div class=\"list-group-item\">
            <p></p><label>";
                    // line 38
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tabCreateur"]) ? $context["tabCreateur"] : $this->getContext($context, "tabCreateur")), $this->getAttribute($context["messageCourant"], "id", array()), array(), "array"), "html", null, true);
                    echo " le ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["messageCourant"], "date", array()), "d-m-Y"), "html", null, true);
                    echo " à ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["messageCourant"], "date", array()), "H.i"), "html", null, true);
                    echo "</label></p>
            <p align=\"justify\"><label>";
                    // line 39
                    echo twig_escape_filter($this->env, $this->getAttribute($context["messageCourant"], "contenu", array()), "html", null, true);
                    echo "</label></p>
          </div>
          ";
                }
                // line 42
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['messageCourant'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "      ";
        }
        // line 44
        echo "      <!--AFFICHAGE DU FORMULAIRE-->
      <div class=\"list-group\">
        <div class=\"list-group-item\">
          <form method=\"post\" id=soumettreMessageForm name=\"formulaireMessage\" ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulaireMessage"]) ? $context["formulaireMessage"] : $this->getContext($context, "formulaireMessage")), 'enctype');
        echo ">
              ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulaireMessage"]) ? $context["formulaireMessage"] : $this->getContext($context, "formulaireMessage")), 'widget');
        echo "
              <span id='caracteres'>100 caractères restants</span><br />
              <input type=submit class=\"btn btn-primary\" onsubmit=\"return false\" onclick=\"return confirm('Vous allez soumettre un message sur le topic ";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["titre"]) ? $context["titre"] : $this->getContext($context, "titre")), "html", null, true);
        echo ". Voulez-vous continuer ?');\"><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("follow_the_rhythm_messages", array("topicId" => (isset($context["topicCourant"]) ? $context["topicCourant"] : $this->getContext($context, "topicCourant")), "page" => 1, "nbParPage" => (isset($context["nbParPage"]) ? $context["nbParPage"] : $this->getContext($context, "nbParPage")))), "html", null, true);
        echo "\"><input type=button class=\"btn btn-primary\" value=\"Annuler\" onclick=\"return confirm('Êtes vous sûr? Les données saisies seront effacées');\"></a>
            <a title=\"Renvoie à l'accueil du forum.\" href=\"/follow_the_rhythm/web/app_dev.php/accueilForum\"><button type=\"button\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-arrow-left\"></span> Retour au forum</button></a><a title=\"Renvoie à l'accueil de Follow the Rhythm.\" href=\"/follow_the_rhythm/web/app_dev.php/accueil/1/1\"><button style='margin-left: 4px;' type=\"button\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-arrow-left\"></span> Retour à l'accueil</button></a></br>
            </br>
          </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
<script>
                function actualiserCaracteres()
                {
                  if (document.getElementById(\"message_message\").value.length < 159)
                  document.getElementById(\"caracteres\").firstChild.nodeValue = 160 - document.getElementById(\"message_message\").value.length + \" caractères restants.\";
                  else document.getElementById(\"caracteres\").firstChild.nodeValue = 160 - document.getElementById(\"message_message\").value.length + \" caractère restant.\";
                } 
              </script>
<script>
var timer = setInterval(actualiserCaracteres, 100);
  function isNotConnected(){
    alert(\"Il faut être connecté pour accéder à cette fonctionnalité\");
  }
  
  /*function afficherArtistesUniquement(){
    
  }*/
</script>
";
        // line 80
        echo "<div align=\"center\"><a title='Remonter en haut de la page courante' href=\"#\"><button class=\"btn btn-primary\"><i class=\"fa fa-angle-double-up\"></i> Haut de page <i class=\"fa fa-angle-double-up\"></i></button></a></div>
<div align=center>";
        // line 81
        $this->loadTemplate("::pagination_2.html.twig", "follow_the_rhythmSymfonyBundle:Symfony:messages.html.twig", 81)->display($context);
        echo "</div>
";
        
        $__internal_c8fe28d0d763fc72bcdd15467e8acd8a2f808c4d095d5c4c2b13fc28b71bba1e->leave($__internal_c8fe28d0d763fc72bcdd15467e8acd8a2f808c4d095d5c4c2b13fc28b71bba1e_prof);

    }

    public function getTemplateName()
    {
        return "follow_the_rhythmSymfonyBundle:Symfony:messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 81,  170 => 80,  136 => 50,  131 => 48,  127 => 47,  122 => 44,  119 => 43,  113 => 42,  107 => 39,  99 => 38,  96 => 37,  94 => 36,  91 => 35,  86 => 34,  78 => 29,  73 => 26,  71 => 25,  59 => 18,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "::vueMere.html.twig" %} {#La vue fille hérite de la vue mère#}*/
/* */
/* {% block contenuCentral %}*/
/* */
/*   <script>*/
/*     function changerNbParPage()*/
/*     {*/
/*       $lien = document.getElementById("nb").value;*/
/*       location.href = $lien;*/
/*     }*/
/*   </script>*/
/*   */
/*   <div class="container">*/
/*     <div class="row">*/
/*       <div class="panel panel-default">*/
/*         <div class="panel-heading"><h2><b><span class="fa fa-commenting"></span> {{titre}}</b></h2>*/
/*          Nombre de messages par page : <select onChange='changerNbParPage()' id='nb'>*/
/*           <option value='{{nbParPage}}' selected>Nombre courant : {{nbParPage}}</option><option value=5>5</option><option value=10>10</option><option value=25>25</option><option value=50>50</option>*/
/*         </select>*/
/*         </div>*/
/*      */
/*       <div class="list-group">*/
/* */
/*       <!--AFFICHAGE DES MESSAGES-->*/
/*       {% if tabMessage is empty %}*/
/*             <div class="container">*/
/* 	            <div class ="row">*/
/* 		            <div class ="col-lg-12">*/
/* 			            <h5>Aucun message. Soyez le premier à parler de "{{titre}}" !</h5>*/
/* 		            </div>*/
/* 	            </div>*/
/*             </div>*/
/*             {% else %}*/
/*         {% for messageCourant in tabMessage %}*/
/*         */
/*           {% if messageCourant.topic.id == topicCourant %}*/
/*           <div class="list-group-item">*/
/*             <p></p><label>{{tabCreateur[messageCourant.id]}} le {{ messageCourant.date|date('d-m-Y') }} à {{messageCourant.date|date('H.i')}}</label></p>*/
/*             <p align="justify"><label>{{messageCourant.contenu}}</label></p>*/
/*           </div>*/
/*           {% endif %}*/
/*         {% endfor %}*/
/*       {% endif %}*/
/*       <!--AFFICHAGE DU FORMULAIRE-->*/
/*       <div class="list-group">*/
/*         <div class="list-group-item">*/
/*           <form method="post" id=soumettreMessageForm name="formulaireMessage" {{form_enctype(formulaireMessage)}}>*/
/*               {{ form_widget(formulaireMessage)}}*/
/*               <span id='caracteres'>100 caractères restants</span><br />*/
/*               <input type=submit class="btn btn-primary" onsubmit="return false" onclick="return confirm('Vous allez soumettre un message sur le topic {{titre}}. Voulez-vous continuer ?');"><a href="{{path('follow_the_rhythm_messages',{'topicId': topicCourant, 'page': 1, 'nbParPage': nbParPage})}}"><input type=button class="btn btn-primary" value="Annuler" onclick="return confirm('Êtes vous sûr? Les données saisies seront effacées');"></a>*/
/*             <a title="Renvoie à l'accueil du forum." href="/follow_the_rhythm/web/app_dev.php/accueilForum"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Retour au forum</button></a><a title="Renvoie à l'accueil de Follow the Rhythm." href="/follow_the_rhythm/web/app_dev.php/accueil/1/1"><button style='margin-left: 4px;' type="button" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Retour à l'accueil</button></a></br>*/
/*             </br>*/
/*           </form>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>*/
/* <script>*/
/*                 function actualiserCaracteres()*/
/*                 {*/
/*                   if (document.getElementById("message_message").value.length < 159)*/
/*                   document.getElementById("caracteres").firstChild.nodeValue = 160 - document.getElementById("message_message").value.length + " caractères restants.";*/
/*                   else document.getElementById("caracteres").firstChild.nodeValue = 160 - document.getElementById("message_message").value.length + " caractère restant.";*/
/*                 } */
/*               </script>*/
/* <script>*/
/* var timer = setInterval(actualiserCaracteres, 100);*/
/*   function isNotConnected(){*/
/*     alert("Il faut être connecté pour accéder à cette fonctionnalité");*/
/*   }*/
/*   */
/*   /*function afficherArtistesUniquement(){*/
/*     */
/*   }*//* */
/* </script>*/
/* {#Pagination#}*/
/* <div align="center"><a title='Remonter en haut de la page courante' href="#"><button class="btn btn-primary"><i class="fa fa-angle-double-up"></i> Haut de page <i class="fa fa-angle-double-up"></i></button></a></div>*/
/* <div align=center>{% include "::pagination_2.html.twig" %}</div>*/
/* {% endblock %}*/
/* */
/* */
/* */
