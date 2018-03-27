<?php

/* follow_the_rhythmSymfonyBundle:Symfony:modifierActualite.html.twig */
class __TwigTemplate_fd86f7e963bc34600237f8107cf871134b9d6de5f168f049cac98b38f3010435 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::vueMere.html.twig", "follow_the_rhythmSymfonyBundle:Symfony:modifierActualite.html.twig", 1);
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
        $__internal_0c5aec23112581d6992f41a0ca613ac06503c56c6863aed231ef6a767b3ed12d = $this->env->getExtension("native_profiler");
        $__internal_0c5aec23112581d6992f41a0ca613ac06503c56c6863aed231ef6a767b3ed12d->enter($__internal_0c5aec23112581d6992f41a0ca613ac06503c56c6863aed231ef6a767b3ed12d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "follow_the_rhythmSymfonyBundle:Symfony:modifierActualite.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c5aec23112581d6992f41a0ca613ac06503c56c6863aed231ef6a767b3ed12d->leave($__internal_0c5aec23112581d6992f41a0ca613ac06503c56c6863aed231ef6a767b3ed12d_prof);

    }

    // line 3
    public function block_contenuCentral($context, array $blocks = array())
    {
        $__internal_d0b66b850a72b66a0becfe2a936522acc5c0eaf48a7a7b366e56d5ca8239af2a = $this->env->getExtension("native_profiler");
        $__internal_d0b66b850a72b66a0becfe2a936522acc5c0eaf48a7a7b366e56d5ca8239af2a->enter($__internal_d0b66b850a72b66a0becfe2a936522acc5c0eaf48a7a7b366e56d5ca8239af2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenuCentral"));

        // line 4
        echo "<body onload=\"hideV();\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"panel panel-default\">
      <!--default panel content-->
        <div class=\"panel-heading\"><h2><b>Modifier une actualité</b></h2></div>
     
      <div class=\"list-group\">
        <div class=\"list-group-item\">
           
          <!--AFFICHAGE DU FORMULAIRE-->
          <form method=\"post\" id=soumettreActualiteForm name=\"formSoumettreActu\" ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulaireActualite"]) ? $context["formulaireActualite"] : $this->getContext($context, "formulaireActualite")), 'enctype');
        echo ">
              ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulaireActualite"]) ? $context["formulaireActualite"] : $this->getContext($context, "formulaireActualite")), 'widget');
        echo "
            <input type=submit class=\"btn btn-primary\" onsubmit=\"return false\" onclick=\"return confirm('Vous confirmez?');\">
            <input type=button class=\"btn btn-primary\" value=\"Visualiser\" onclick=\"visualiser();\">
            <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("follow_the_rhythm_accueil", array("page" => 1, "sens" => 1)), "html", null, true);
        echo "\"><input type=button class=\"btn btn-primary\" value=\"Annuler\" onclick=\"return confirm('Êtes vous sûr? Les données saisies seront effacées');\"></a></br>
            </br>
            <p></p><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("follow_the_rhythm_concert");
        echo "\"><button class=\"btn btn-primary\" type=\"button\"><span class=\"glyphicon glyphicon-plus\"></span> Ajouter un nouveau concert</button></a></p>
            <p></p><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("follow_the_rhythm_artiste");
        echo "\"><button class=\"btn btn-primary\" type=\"button\"><span class=\"glyphicon glyphicon-plus\"></span> Ajouter un nouvel artiste</button></a></p>
          </form>
          
          <!--VISUALISATION-->
          <form id=visualForm name=visualForm>
            <p><label>Visualisation :</label></p>
            <h2><label id=\"titreV\"></label></h2>
            <p><label id=\"artisteV\"></label></p>
            <p><label id=\"concertV\"></label></p>
            <p><label id=\"descriptionV\"></label></p>
            <p><label id=\"dateVs\"></label></p>
            <button type=\"button\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-heart\"></span> Coup de cœur</button> 0 Coups de cœurs 
          </form>
          
        </div>
      </div>
    </div>
  </div>
</div>
</body>

<script>
  //function show() {
  //  document.getElementById(\"soumettreActualiteForm\").style.display=\"block\";
  //}
  //  
  //function hide() {
  //  document.getElementById(\"soumettreActualiteForm\").style.display=\"none\";
  //}
  

  function visualiser(){
    document.getElementById(\"visualForm\").style.display=\"block\";
    var titrev = document.formSoumettreActu.elements[0].value;
    var artistev = document.formSoumettreActu.elements[1].value;
    var concertv = document.formSoumettreActu.elements[2].value;
    var descriptionv = document.formSoumettreActu.elements[3].value;
    var dateV = getDate();
    document.getElementById(\"titreV\").innerHTML=titrev;
    (artistev!=\"\")? document.getElementById(\"artisteV\").innerHTML=\"Artiste concerné : \" + artistev : document.getElementById(\"artisteV\").innerHTML=\"Pas d'artiste concerné\";
    (concertv!=\"\")? document.getElementById(\"concertV\").innerHTML=\"Concert concerné : \" + concertv : document.getElementById(\"concertV\").innerHTML=\"Pas de concert lié\";
    document.getElementById(\"descriptionV\").innerHTML=descriptionv;
    document.getElementById(\"dateVs\").innerHTML=\"Date : \" + dateV;
  }
  
  function hideV() {
    document.getElementById(\"visualForm\").style.display=\"none\";
  }
  
  function getDate(){
    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth()+1; //January is 0!
    
    var yyyy = today.getFullYear();
    if(dd<10){
        dd='0'+dd;
    } 
    if(mm<10){
        mm='0'+mm;
    } 
    var today = dd+'/'+mm+'/'+yyyy;
    return today;
  }

</script>

";
        
        $__internal_d0b66b850a72b66a0becfe2a936522acc5c0eaf48a7a7b366e56d5ca8239af2a->leave($__internal_d0b66b850a72b66a0becfe2a936522acc5c0eaf48a7a7b366e56d5ca8239af2a_prof);

    }

    public function getTemplateName()
    {
        return "follow_the_rhythmSymfonyBundle:Symfony:modifierActualite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 22,  68 => 21,  63 => 19,  57 => 16,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "::vueMere.html.twig" %} {#La vue fille hérite de la vue mère#}*/
/* */
/* {% block contenuCentral %}*/
/* <body onload="hideV();">*/
/*   <div class="container">*/
/*     <div class="row">*/
/*       <div class="panel panel-default">*/
/*       <!--default panel content-->*/
/*         <div class="panel-heading"><h2><b>Modifier une actualité</b></h2></div>*/
/*      */
/*       <div class="list-group">*/
/*         <div class="list-group-item">*/
/*            */
/*           <!--AFFICHAGE DU FORMULAIRE-->*/
/*           <form method="post" id=soumettreActualiteForm name="formSoumettreActu" {{form_enctype(formulaireActualite)}}>*/
/*               {{ form_widget(formulaireActualite)}}*/
/*             <input type=submit class="btn btn-primary" onsubmit="return false" onclick="return confirm('Vous confirmez?');">*/
/*             <input type=button class="btn btn-primary" value="Visualiser" onclick="visualiser();">*/
/*             <a href="{{path('follow_the_rhythm_accueil',{'page': 1, 'sens': 1})}}"><input type=button class="btn btn-primary" value="Annuler" onclick="return confirm('Êtes vous sûr? Les données saisies seront effacées');"></a></br>*/
/*             </br>*/
/*             <p></p><a href="{{path('follow_the_rhythm_concert')}}"><button class="btn btn-primary" type="button"><span class="glyphicon glyphicon-plus"></span> Ajouter un nouveau concert</button></a></p>*/
/*             <p></p><a href="{{path('follow_the_rhythm_artiste')}}"><button class="btn btn-primary" type="button"><span class="glyphicon glyphicon-plus"></span> Ajouter un nouvel artiste</button></a></p>*/
/*           </form>*/
/*           */
/*           <!--VISUALISATION-->*/
/*           <form id=visualForm name=visualForm>*/
/*             <p><label>Visualisation :</label></p>*/
/*             <h2><label id="titreV"></label></h2>*/
/*             <p><label id="artisteV"></label></p>*/
/*             <p><label id="concertV"></label></p>*/
/*             <p><label id="descriptionV"></label></p>*/
/*             <p><label id="dateVs"></label></p>*/
/*             <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-heart"></span> Coup de cœur</button> 0 Coups de cœurs */
/*           </form>*/
/*           */
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* </body>*/
/* */
/* <script>*/
/*   //function show() {*/
/*   //  document.getElementById("soumettreActualiteForm").style.display="block";*/
/*   //}*/
/*   //  */
/*   //function hide() {*/
/*   //  document.getElementById("soumettreActualiteForm").style.display="none";*/
/*   //}*/
/*   */
/* */
/*   function visualiser(){*/
/*     document.getElementById("visualForm").style.display="block";*/
/*     var titrev = document.formSoumettreActu.elements[0].value;*/
/*     var artistev = document.formSoumettreActu.elements[1].value;*/
/*     var concertv = document.formSoumettreActu.elements[2].value;*/
/*     var descriptionv = document.formSoumettreActu.elements[3].value;*/
/*     var dateV = getDate();*/
/*     document.getElementById("titreV").innerHTML=titrev;*/
/*     (artistev!="")? document.getElementById("artisteV").innerHTML="Artiste concerné : " + artistev : document.getElementById("artisteV").innerHTML="Pas d'artiste concerné";*/
/*     (concertv!="")? document.getElementById("concertV").innerHTML="Concert concerné : " + concertv : document.getElementById("concertV").innerHTML="Pas de concert lié";*/
/*     document.getElementById("descriptionV").innerHTML=descriptionv;*/
/*     document.getElementById("dateVs").innerHTML="Date : " + dateV;*/
/*   }*/
/*   */
/*   function hideV() {*/
/*     document.getElementById("visualForm").style.display="none";*/
/*   }*/
/*   */
/*   function getDate(){*/
/*     var today = new Date();*/
/*     var dd = today.getDate();*/
/*     var mm = today.getMonth()+1; //January is 0!*/
/*     */
/*     var yyyy = today.getFullYear();*/
/*     if(dd<10){*/
/*         dd='0'+dd;*/
/*     } */
/*     if(mm<10){*/
/*         mm='0'+mm;*/
/*     } */
/*     var today = dd+'/'+mm+'/'+yyyy;*/
/*     return today;*/
/*   }*/
/* */
/* </script>*/
/* */
/* {% endblock %}*/
/* */
