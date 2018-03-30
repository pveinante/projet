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
        $__internal_965b6e1c35ada28db61e0d1a75e4c2fc283d6834b8e0a5ad79385437cf3e30b7 = $this->env->getExtension("native_profiler");
        $__internal_965b6e1c35ada28db61e0d1a75e4c2fc283d6834b8e0a5ad79385437cf3e30b7->enter($__internal_965b6e1c35ada28db61e0d1a75e4c2fc283d6834b8e0a5ad79385437cf3e30b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "follow_the_rhythmSymfonyBundle:Symfony:messages.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_965b6e1c35ada28db61e0d1a75e4c2fc283d6834b8e0a5ad79385437cf3e30b7->leave($__internal_965b6e1c35ada28db61e0d1a75e4c2fc283d6834b8e0a5ad79385437cf3e30b7_prof);

    }

    // line 3
    public function block_contenuCentral($context, array $blocks = array())
    {
        $__internal_5653fdb9e830268588f0b751730877dac64c5a2a01ebb0ae0467eeac2fa8238a = $this->env->getExtension("native_profiler");
        $__internal_5653fdb9e830268588f0b751730877dac64c5a2a01ebb0ae0467eeac2fa8238a->enter($__internal_5653fdb9e830268588f0b751730877dac64c5a2a01ebb0ae0467eeac2fa8238a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenuCentral"));

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
      <div class=\"panel panel-default\">
        <div class=\"panel-heading\"><h2><b><span class=\"fa fa-commenting\"></span> ";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["titre"]) ? $context["titre"] : $this->getContext($context, "titre")), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["cat"]) ? $context["cat"] : $this->getContext($context, "cat")), "html", null, true);
        echo ")</b></h2>
         Nombre de messages par page : <select onChange='changerNbParPage()' id='nb'>
          <option value='";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["nbParPage"]) ? $context["nbParPage"] : $this->getContext($context, "nbParPage")), "html", null, true);
        echo "' selected>Nombre courant : ";
        echo twig_escape_filter($this->env, (isset($context["nbParPage"]) ? $context["nbParPage"] : $this->getContext($context, "nbParPage")), "html", null, true);
        echo "</option><option value=5>5</option><option value=10>10</option><option value=25>25</option><option value=50>50</option>
        </select>
        </div>
            <div class=\"row\">
              <div class=\"col-lg-12\">
     
      <div class=\"list-group\">

      <!--AFFICHAGE DES MESSAGES-->
      ";
        // line 26
        if (twig_test_empty((isset($context["tabMessage"]) ? $context["tabMessage"] : $this->getContext($context, "tabMessage")))) {
            // line 27
            echo "            <div class=\"container\">
\t            <div class =\"row\">
\t\t            <div class =\"col-lg-12\">
\t\t\t            <h5>Aucun message. Soyez le premier à parler de \"";
            // line 30
            echo twig_escape_filter($this->env, (isset($context["titre"]) ? $context["titre"] : $this->getContext($context, "titre")), "html", null, true);
            echo "\" !</h5>
\t\t            </div>
\t            </div>
            </div>
            ";
        } else {
            // line 35
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tabMessage"]) ? $context["tabMessage"] : $this->getContext($context, "tabMessage")));
            foreach ($context['_seq'] as $context["_key"] => $context["messageCourant"]) {
                // line 36
                echo "        
          ";
                // line 37
                if (($this->getAttribute($this->getAttribute($context["messageCourant"], "topic", array()), "id", array()) == (isset($context["topicCourant"]) ? $context["topicCourant"] : $this->getContext($context, "topicCourant")))) {
                    // line 38
                    echo "          <div class=\"list-group-item\">
            <p></p><label>";
                    // line 39
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tabCreateur"]) ? $context["tabCreateur"] : $this->getContext($context, "tabCreateur")), $this->getAttribute($context["messageCourant"], "id", array()), array(), "array"), "html", null, true);
                    echo " le ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["messageCourant"], "date", array()), "d-m-Y"), "html", null, true);
                    echo " à ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["messageCourant"], "date", array()), "H.i"), "html", null, true);
                    if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                        echo " <span class='glyphicon glyphicon-play'></span> <a onclick='return confirm(\"Merci de votre prévention. Etes-vous sûr de voulour signaler ce message ?\")' href='";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("follow_the_rhythm_signaler", array("message" => $this->getAttribute($context["messageCourant"], "id", array()))), "html", null, true);
                        echo "' title='Signaler comme message inapproprié'>Signaler</a>";
                    }
                    echo "</label></p>
            <p align=\"justify\"><label>";
                    // line 40
                    echo twig_escape_filter($this->env, $this->getAttribute($context["messageCourant"], "contenu", array()), "html", null, true);
                    echo "</label></p>
            
          </div>
          ";
                }
                // line 44
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['messageCourant'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "      ";
        }
        // line 46
        echo "      <!--AFFICHAGE DU FORMULAIRE-->
      <div class=\"list-group\">
        <div class=\"list-group-item\">
          ";
        // line 49
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 50
            echo "            <form method=\"post\" id=soumettreMessageForm name=\"formulaireMessage\" ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulaireMessage"]) ? $context["formulaireMessage"] : $this->getContext($context, "formulaireMessage")), 'enctype');
            echo ">
                ";
            // line 51
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulaireMessage"]) ? $context["formulaireMessage"] : $this->getContext($context, "formulaireMessage")), 'widget');
            echo "
                <span id='caracteres'>100 caractères restants</span><br /><br />
                <input type=submit class=\"btn btn-primary\" onsubmit=\"return false\" onclick=\"return confirm('Vous allez soumettre un message sur le topic ";
            // line 53
            echo twig_escape_filter($this->env, (isset($context["titre"]) ? $context["titre"] : $this->getContext($context, "titre")), "html", null, true);
            echo ". Voulez-vous continuer ?');\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("follow_the_rhythm_messages", array("topicId" => (isset($context["topicCourant"]) ? $context["topicCourant"] : $this->getContext($context, "topicCourant")), "page" => 1, "nbParPage" => (isset($context["nbParPage"]) ? $context["nbParPage"] : $this->getContext($context, "nbParPage")))), "html", null, true);
            echo "\">   <input type=button class=\"btn btn-primary\" value=\"Annuler\" onclick=\"return confirm('Êtes vous sûr? Les données saisies seront effacées');\"></a>
              <a title=\"Renvoie à l'accueil du forum.\" href=\"/follow_the_rhythm/web/app_dev.php/accueilForum\"><button type=\"button\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-arrow-left\"></span> Retour au forum</button></a><a title=\"Renvoie à l'accueil de Follow the Rhythm.\" href=\"/follow_the_rhythm/web/app_dev.php/accueil/1/1/25\"><button style='margin-left: 4px;' type=\"button\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-arrow-left\"></span> Retour à l'accueil</button></a></br>
              </br>
            </form>
          ";
        } else {
            // line 58
            echo "            <a title=\"Connexion à Follow The Rhythm\" href=\"/follow_the_rhythm/web/app_dev.php/login\"><button type=\"button\" class=\"btn btn-primary\"><span class=\"fa fa-user\"></span> Connectez-vous à votre compte </button></a> pour ajouter un message.
          ";
        }
        // line 60
        echo "          </div>
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
                  document.getElementById(\"caracteres\").firstChild.nodeValue = 160 - document.getElementById(\"message_message\").value.length + \" caractères restants\";
                  else document.getElementById(\"caracteres\").firstChild.nodeValue = 160 - document.getElementById(\"message_message\").value.length + \" caractère restant\";
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
        // line 87
        echo "<div align=\"center\"><a title='Remonter en haut de la page courante' href=\"#\"><button class=\"btn btn-primary\"><i class=\"fa fa-angle-double-up\"></i> Haut de page <i class=\"fa fa-angle-double-up\"></i></button></a></div>
<div align=center>";
        // line 88
        $this->loadTemplate("::pagination_2.html.twig", "follow_the_rhythmSymfonyBundle:Symfony:messages.html.twig", 88)->display($context);
        echo "</div>
";
        
        $__internal_5653fdb9e830268588f0b751730877dac64c5a2a01ebb0ae0467eeac2fa8238a->leave($__internal_5653fdb9e830268588f0b751730877dac64c5a2a01ebb0ae0467eeac2fa8238a_prof);

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
        return array (  193 => 88,  190 => 87,  162 => 60,  158 => 58,  148 => 53,  143 => 51,  138 => 50,  136 => 49,  131 => 46,  128 => 45,  122 => 44,  115 => 40,  102 => 39,  99 => 38,  97 => 37,  94 => 36,  89 => 35,  81 => 30,  76 => 27,  74 => 26,  60 => 17,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
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
/*       <div class="panel panel-default">*/
/*         <div class="panel-heading"><h2><b><span class="fa fa-commenting"></span> {{titre}} ({{cat}})</b></h2>*/
/*          Nombre de messages par page : <select onChange='changerNbParPage()' id='nb'>*/
/*           <option value='{{nbParPage}}' selected>Nombre courant : {{nbParPage}}</option><option value=5>5</option><option value=10>10</option><option value=25>25</option><option value=50>50</option>*/
/*         </select>*/
/*         </div>*/
/*             <div class="row">*/
/*               <div class="col-lg-12">*/
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
/*             <p></p><label>{{tabCreateur[messageCourant.id]}} le {{ messageCourant.date|date('d-m-Y') }} à {{messageCourant.date|date('H.i')}}{% if is_granted("IS_AUTHENTICATED_REMEMBERED") %} <span class='glyphicon glyphicon-play'></span> <a onclick='return confirm("Merci de votre prévention. Etes-vous sûr de voulour signaler ce message ?")' href='{{path('follow_the_rhythm_signaler',{'message':messageCourant.id})}}' title='Signaler comme message inapproprié'>Signaler</a>{% endif %}</label></p>*/
/*             <p align="justify"><label>{{messageCourant.contenu}}</label></p>*/
/*             */
/*           </div>*/
/*           {% endif %}*/
/*         {% endfor %}*/
/*       {% endif %}*/
/*       <!--AFFICHAGE DU FORMULAIRE-->*/
/*       <div class="list-group">*/
/*         <div class="list-group-item">*/
/*           {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*             <form method="post" id=soumettreMessageForm name="formulaireMessage" {{form_enctype(formulaireMessage)}}>*/
/*                 {{ form_widget(formulaireMessage)}}*/
/*                 <span id='caracteres'>100 caractères restants</span><br /><br />*/
/*                 <input type=submit class="btn btn-primary" onsubmit="return false" onclick="return confirm('Vous allez soumettre un message sur le topic {{titre}}. Voulez-vous continuer ?');"><a href="{{path('follow_the_rhythm_messages',{'topicId': topicCourant, 'page': 1, 'nbParPage': nbParPage})}}">   <input type=button class="btn btn-primary" value="Annuler" onclick="return confirm('Êtes vous sûr? Les données saisies seront effacées');"></a>*/
/*               <a title="Renvoie à l'accueil du forum." href="/follow_the_rhythm/web/app_dev.php/accueilForum"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Retour au forum</button></a><a title="Renvoie à l'accueil de Follow the Rhythm." href="/follow_the_rhythm/web/app_dev.php/accueil/1/1/25"><button style='margin-left: 4px;' type="button" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Retour à l'accueil</button></a></br>*/
/*               </br>*/
/*             </form>*/
/*           {% else %}*/
/*             <a title="Connexion à Follow The Rhythm" href="/follow_the_rhythm/web/app_dev.php/login"><button type="button" class="btn btn-primary"><span class="fa fa-user"></span> Connectez-vous à votre compte </button></a> pour ajouter un message.*/
/*           {% endif %}*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>*/
/* <script>*/
/*                 function actualiserCaracteres()*/
/*                 {*/
/*                   if (document.getElementById("message_message").value.length < 159)*/
/*                   document.getElementById("caracteres").firstChild.nodeValue = 160 - document.getElementById("message_message").value.length + " caractères restants";*/
/*                   else document.getElementById("caracteres").firstChild.nodeValue = 160 - document.getElementById("message_message").value.length + " caractère restant";*/
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
