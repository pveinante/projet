<?php

/* follow_the_rhythmSymfonyBundle:Symfony:pageConcert.html.twig */
class __TwigTemplate_619ac1f1566f9d6971bc10ba265c8d618424a82c9a58761e62a059680d595241 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::vueMere.html.twig", "follow_the_rhythmSymfonyBundle:Symfony:pageConcert.html.twig", 1);
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
        $__internal_95a400cd52226b996f5fccdba653b3957ea05f3405ab3f0ee7102c98062c85b9 = $this->env->getExtension("native_profiler");
        $__internal_95a400cd52226b996f5fccdba653b3957ea05f3405ab3f0ee7102c98062c85b9->enter($__internal_95a400cd52226b996f5fccdba653b3957ea05f3405ab3f0ee7102c98062c85b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "follow_the_rhythmSymfonyBundle:Symfony:pageConcert.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95a400cd52226b996f5fccdba653b3957ea05f3405ab3f0ee7102c98062c85b9->leave($__internal_95a400cd52226b996f5fccdba653b3957ea05f3405ab3f0ee7102c98062c85b9_prof);

    }

    // line 3
    public function block_contenuCentral($context, array $blocks = array())
    {
        $__internal_393389355a8e63554a8a66fea9e7de118ddf837468b0e815255dd393f0d33e79 = $this->env->getExtension("native_profiler");
        $__internal_393389355a8e63554a8a66fea9e7de118ddf837468b0e815255dd393f0d33e79->enter($__internal_393389355a8e63554a8a66fea9e7de118ddf837468b0e815255dd393f0d33e79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenuCentral"));

        // line 4
        echo "<body  onload='setTimeout(TrouverAdresse, 10)'>
    <div class=\"container\">
      <div class=\"panel panel-default\">
      <!--default panel content-->
        <div class=\"panel-heading\">

            <h2><b>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["concert"]) ? $context["concert"] : $this->getContext($context, "concert")), "nom", array()), "html", null, true);
        echo "</b></h2> 
            <label>";
        // line 11
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["concert"]) ? $context["concert"] : $this->getContext($context, "concert")), "dateConcert", array()), "d/m/Y"), "html", null, true);
        echo "</label>
            ";
        // line 12
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 13
            echo "              ";
            if ((isset($context["dejaSuivi"]) ? $context["dejaSuivi"] : $this->getContext($context, "dejaSuivi"))) {
                // line 14
                echo "                <a title='Ne plus suivre ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["concert"]) ? $context["concert"] : $this->getContext($context, "concert")), "nom", array()), "html", null, true);
                echo "' href='";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("follow_the_rhythm_nePlusSuivreConcert", array("concert" => $this->getAttribute((isset($context["concert"]) ? $context["concert"] : $this->getContext($context, "concert")), "id", array()))), "html", null, true);
                echo "'><p><button class=\"btn btn-primary\">Ne plus suivre</button></a></p>
              ";
            } else {
                // line 16
                echo "                <a title='Suivre ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["concert"]) ? $context["concert"] : $this->getContext($context, "concert")), "nom", array()), "html", null, true);
                echo "' href='";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("follow_the_rhythm_suivreConcert", array("concert" => $this->getAttribute((isset($context["concert"]) ? $context["concert"] : $this->getContext($context, "concert")), "id", array()))), "html", null, true);
                echo "'><p><button class=\"btn btn-primary\">Suivre</button></a></p>
             ";
            }
            // line 18
            echo "             ";
        } else {
            // line 19
            echo "               <a title='Connectez-vous pour suivre ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["concert"]) ? $context["concert"] : $this->getContext($context, "concert")), "nom", array()), "html", null, true);
            echo "' href='";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "'><input type=\"button\" class=\"btn btn-primary\" value=\"Connectez-vous pour suivre ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["concert"]) ? $context["concert"] : $this->getContext($context, "concert")), "nom", array()), "html", null, true);
            echo ".\" onclick=\"allerConcert();\"></a>
            ";
        }
        // line 21
        echo "           </div>
          <div class=\"row\">
            <div class=\"col-lg-12\">
     
     
     
        <div class=\"list-group\">
            
            <div style='height: 370px;' class=\"list-group-item\">
                <p><label><b><h3>Lieu</h3></b></label></p>
                <p><label id='lieu'>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["concert"]) ? $context["concert"] : $this->getContext($context, "concert")), "lieu", array()), "html", null, true);
        echo "</label></p>
                <div id=\"map-canvas\" style=\"float:right;height:220px;width:100%\"></div>
            </div>
            <div class=\"list-group-item\">
                <p><label><b><h3>Description</h3></b></label></p>
                <p style='text-align: justify;'><label>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["concert"]) ? $context["concert"] : $this->getContext($context, "concert")), "description", array()), "html", null, true);
        echo "</label></p>
            </div>
            <div class=\"list-group-item\">
                ";
        // line 39
        if ((twig_length_filter($this->env, (isset($context["artiste"]) ? $context["artiste"] : $this->getContext($context, "artiste"))) > 1)) {
            // line 40
            echo "                    <p><label><b><h3>Artistes participants (";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["artiste"]) ? $context["artiste"] : $this->getContext($context, "artiste"))), "html", null, true);
            echo ")</h3></b></label></p>
                ";
        } else {
            // line 42
            echo "                    <p><label><b><h3>Artiste participant (";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["artiste"]) ? $context["artiste"] : $this->getContext($context, "artiste"))), "html", null, true);
            echo ")</h3></b></label></p>
                ";
        }
        // line 44
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["artiste"]) ? $context["artiste"] : $this->getContext($context, "artiste")));
        foreach ($context['_seq'] as $context["_key"] => $context["artisteCourant"]) {
            // line 45
            echo "                   <p> <label> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("follow_the_rhythm_pageArtiste", array("id" => $this->getAttribute($context["artisteCourant"], "id", array()))), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["artisteCourant"], "nomDeScene", array()), "html", null, true);
            echo "</a></label></p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['artisteCourant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "            </div>
        </div>
      </div>
      </div>
    </div>
  </div>
</div>
</body>
<script>
function allerConcert(){
  alert(\"Il faut être connecté pour accéder à cette fonctionnalité\");
}
</script>


<script type=\"text/javascript\" src=\"https://maps.googleapis.com/maps/api/js?sensor=false&language=fr\">
</script>
<script type=\"text/javascript\">
var geocoder;
var map;
// initialisation de la carte Google Map de départ
function initialiserCarte() {
  geocoder = new google.maps.Geocoder();
  // Ici j'ai mis la latitude et longitude du vieux Port de Marseille pour centrer la carte de départ
  var latlng = new google.maps.LatLng(43.295309,5.374457);
  var mapOptions = {
    zoom      : 13,
    center    : latlng,
    mapTypeId : google.maps.MapTypeId.ROADMAP
  }
  // map-canvas est le conteneur HTML de la carte Google Map
  map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
}
 
function TrouverAdresse() {
  // Récupération de l'adresse tapée dans le formulaire
  var adresse = document.getElementById('lieu').innerHTML;
  geocoder.geocode( { 'address': adresse}, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
      map.setCenter(results[0].geometry.location);
      // Récupération des coordonnées GPS du lieu tapé dans le formulaire
      var strposition = results[0].geometry.location+\"\";
      strposition=strposition.replace('(', '');
      strposition=strposition.replace(')', '');
      // Affichage des coordonnées dans le <span>
      document.getElementById('text_latlng').innerHTML='Coordonnées : '+strposition;
      // Création du marqueur du lieu (épingle)
      var marker = new google.maps.Marker({
          map: map,
          position: results[0].geometry.location
      });
    } else {
      document.getElementById('map-canvas').style.visibility = hidden;
    }
  });
}
// Lancement de la construction de la carte google map
google.maps.event.addDomListener(window, 'load', initialiserCarte);
</script>

";
        
        $__internal_393389355a8e63554a8a66fea9e7de118ddf837468b0e815255dd393f0d33e79->leave($__internal_393389355a8e63554a8a66fea9e7de118ddf837468b0e815255dd393f0d33e79_prof);

    }

    public function getTemplateName()
    {
        return "follow_the_rhythmSymfonyBundle:Symfony:pageConcert.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 47,  135 => 45,  130 => 44,  124 => 42,  118 => 40,  116 => 39,  110 => 36,  102 => 31,  90 => 21,  80 => 19,  77 => 18,  69 => 16,  61 => 14,  58 => 13,  56 => 12,  52 => 11,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "::vueMere.html.twig" %} {#La vue fille hérite de la vue mère#}*/
/* */
/* {% block contenuCentral %}*/
/* <body  onload='setTimeout(TrouverAdresse, 10)'>*/
/*     <div class="container">*/
/*       <div class="panel panel-default">*/
/*       <!--default panel content-->*/
/*         <div class="panel-heading">*/
/* */
/*             <h2><b>{{concert.nom}}</b></h2> */
/*             <label>{{concert.dateConcert|date("d/m/Y")}}</label>*/
/*             {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*               {% if dejaSuivi %}*/
/*                 <a title='Ne plus suivre {{concert.nom}}' href='{{path('follow_the_rhythm_nePlusSuivreConcert',{'concert':concert.id})}}'><p><button class="btn btn-primary">Ne plus suivre</button></a></p>*/
/*               {% else %}*/
/*                 <a title='Suivre {{concert.nom}}' href='{{path('follow_the_rhythm_suivreConcert',{'concert':concert.id})}}'><p><button class="btn btn-primary">Suivre</button></a></p>*/
/*              {% endif %}*/
/*              {% else %}*/
/*                <a title='Connectez-vous pour suivre {{concert.nom}}' href='{{path('fos_user_security_login')}}'><input type="button" class="btn btn-primary" value="Connectez-vous pour suivre {{concert.nom}}." onclick="allerConcert();"></a>*/
/*             {% endif %}*/
/*            </div>*/
/*           <div class="row">*/
/*             <div class="col-lg-12">*/
/*      */
/*      */
/*      */
/*         <div class="list-group">*/
/*             */
/*             <div style='height: 370px;' class="list-group-item">*/
/*                 <p><label><b><h3>Lieu</h3></b></label></p>*/
/*                 <p><label id='lieu'>{{concert.lieu}}</label></p>*/
/*                 <div id="map-canvas" style="float:right;height:220px;width:100%"></div>*/
/*             </div>*/
/*             <div class="list-group-item">*/
/*                 <p><label><b><h3>Description</h3></b></label></p>*/
/*                 <p style='text-align: justify;'><label>{{concert.description}}</label></p>*/
/*             </div>*/
/*             <div class="list-group-item">*/
/*                 {% if artiste|length > 1 %}*/
/*                     <p><label><b><h3>Artistes participants ({{artiste|length}})</h3></b></label></p>*/
/*                 {% else %}*/
/*                     <p><label><b><h3>Artiste participant ({{artiste|length}})</h3></b></label></p>*/
/*                 {% endif %}*/
/*                 {% for artisteCourant in artiste %}*/
/*                    <p> <label> <a href="{{path('follow_the_rhythm_pageArtiste',{'id':artisteCourant.id})}}" >{{artisteCourant.nomDeScene}}</a></label></p>*/
/*                 {% endfor %}*/
/*             </div>*/
/*         </div>*/
/*       </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* </body>*/
/* <script>*/
/* function allerConcert(){*/
/*   alert("Il faut être connecté pour accéder à cette fonctionnalité");*/
/* }*/
/* </script>*/
/* */
/* */
/* <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&language=fr">*/
/* </script>*/
/* <script type="text/javascript">*/
/* var geocoder;*/
/* var map;*/
/* // initialisation de la carte Google Map de départ*/
/* function initialiserCarte() {*/
/*   geocoder = new google.maps.Geocoder();*/
/*   // Ici j'ai mis la latitude et longitude du vieux Port de Marseille pour centrer la carte de départ*/
/*   var latlng = new google.maps.LatLng(43.295309,5.374457);*/
/*   var mapOptions = {*/
/*     zoom      : 13,*/
/*     center    : latlng,*/
/*     mapTypeId : google.maps.MapTypeId.ROADMAP*/
/*   }*/
/*   // map-canvas est le conteneur HTML de la carte Google Map*/
/*   map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);*/
/* }*/
/*  */
/* function TrouverAdresse() {*/
/*   // Récupération de l'adresse tapée dans le formulaire*/
/*   var adresse = document.getElementById('lieu').innerHTML;*/
/*   geocoder.geocode( { 'address': adresse}, function(results, status) {*/
/*     if (status == google.maps.GeocoderStatus.OK) {*/
/*       map.setCenter(results[0].geometry.location);*/
/*       // Récupération des coordonnées GPS du lieu tapé dans le formulaire*/
/*       var strposition = results[0].geometry.location+"";*/
/*       strposition=strposition.replace('(', '');*/
/*       strposition=strposition.replace(')', '');*/
/*       // Affichage des coordonnées dans le <span>*/
/*       document.getElementById('text_latlng').innerHTML='Coordonnées : '+strposition;*/
/*       // Création du marqueur du lieu (épingle)*/
/*       var marker = new google.maps.Marker({*/
/*           map: map,*/
/*           position: results[0].geometry.location*/
/*       });*/
/*     } else {*/
/*       document.getElementById('map-canvas').style.visibility = hidden;*/
/*     }*/
/*   });*/
/* }*/
/* // Lancement de la construction de la carte google map*/
/* google.maps.event.addDomListener(window, 'load', initialiserCarte);*/
/* </script>*/
/* */
/* {% endblock %}*/
