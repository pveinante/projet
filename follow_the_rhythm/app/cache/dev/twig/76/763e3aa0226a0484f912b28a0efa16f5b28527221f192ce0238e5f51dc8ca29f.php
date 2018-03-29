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
        $__internal_2c9a0fe3d351c2ec43b9175c8d9c15d4c161a04b3e9a95e29a3e276e1b698b79 = $this->env->getExtension("native_profiler");
        $__internal_2c9a0fe3d351c2ec43b9175c8d9c15d4c161a04b3e9a95e29a3e276e1b698b79->enter($__internal_2c9a0fe3d351c2ec43b9175c8d9c15d4c161a04b3e9a95e29a3e276e1b698b79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "follow_the_rhythmSymfonyBundle:Symfony:modifierActualite.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c9a0fe3d351c2ec43b9175c8d9c15d4c161a04b3e9a95e29a3e276e1b698b79->leave($__internal_2c9a0fe3d351c2ec43b9175c8d9c15d4c161a04b3e9a95e29a3e276e1b698b79_prof);

    }

    // line 3
    public function block_contenuCentral($context, array $blocks = array())
    {
        $__internal_ea5c75acc6b98f7361d63c9d8ac0bb379210737b4e096c95597201ee71fca514 = $this->env->getExtension("native_profiler");
        $__internal_ea5c75acc6b98f7361d63c9d8ac0bb379210737b4e096c95597201ee71fca514->enter($__internal_ea5c75acc6b98f7361d63c9d8ac0bb379210737b4e096c95597201ee71fca514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenuCentral"));

        // line 4
        echo "<body onload=\"hideV();\">
  <div class=\"container\">

      <div class=\"panel panel-default\">
      <!--default panel content-->
        <div class=\"panel-heading\"><h2><b>Modifier une actualité</b></h2></div>
         <div class=\"row\">
           <div class=\"col-lg-12\">
      <div class=\"list-group\">
        <div class=\"list-group-item\">
           
          <!--AFFICHAGE DU FORMULAIRE-->
          <form method=\"post\" id=soumettreActualiteForm name=\"formSoumettreActu\" ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulaireActualite"]) ? $context["formulaireActualite"] : $this->getContext($context, "formulaireActualite")), 'enctype');
        echo ">
              ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulaireActualite"]) ? $context["formulaireActualite"] : $this->getContext($context, "formulaireActualite")), 'widget');
        echo "
            <input type=submit class=\"btn btn-primary\" onsubmit=\"return false\" onclick=\"return confirm('Vous confirmez?');\">
            <input type=button class=\"btn btn-primary\" value=\"Visualiser\" onclick=\"visualiser();\">
            <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("follow_the_rhythm_accueil", array("page" => 1, "sens" => 1, "nbParPage" => 25)), "html", null, true);
        echo "\"><input type=button class=\"btn btn-primary\" value=\"Annuler\" onclick=\"return confirm('Êtes vous sûr? Les données saisies seront effacées');\"></a></br>
            </br>
            <p></p><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("follow_the_rhythm_concert");
        echo "\"><button class=\"btn btn-primary\" type=\"button\"><span class=\"glyphicon glyphicon-plus\"></span> Ajouter un nouveau concert</button></a></p>
            <p></p><a href=\"";
        // line 23
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
</div>
</body>

";
        // line 46
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
";
        // line 48
        echo "<script type=\"text/javascript\">
   \$(document).ready(function() {
        // On récupère la balise <div>qui contient l'attribut « data-prototype » qui nous intéresse.
        var \$codeHtmlFormulaireArtiste = \$('div#actualite_artiste');
        // On ajoute un lien pour ajouter une nouvel auteur
        var \$lienAjoutArtiste = \$('<a href=\"#\" id=\"add_artiste\">Ajouter un artiste</a>');
        \$codeHtmlFormulaireArtiste.append(\$lienAjoutArtiste);
        // On ajoute un nouveau champ auteur à chaque clic sur le lien d'ajout.
        \$lienAjoutArtiste.click(function(e) {
            addArtiste(\$codeHtmlFormulaireArtiste);
            e.preventDefault(); // évite qu'un # apparaisse dans l'URL
            return false;
        });
        // On définit un compteur unique pour nommer les champs Auteur qu'on va ajouter dynamiquement
        var compteurArtistes = \$codeHtmlFormulaireArtiste.find(':input').length;
        // On ajoute le code html d'un premier formulaire Auteur s'il n'en existe pas déjà un (cas d'ajout d'un nouveau livre).
        if (compteurArtistes == 0) {
            addArtiste(\$codeHtmlFormulaireArtiste);
        } else {
            // Pour chaque formulaire auteur affiché, on ajoute un lien de suppression
            \$codeHtmlFormulaireArtiste.children('div').each(function() {
                ajouterLienSuppression(\$(this));
            });
        }
        // La fonction qui ajoute un formulaire Auteur
        function addArtiste(\$codeHtmlFormulaireArtiste) {
            // Dans le contenu de l'attribut « data-prototype », on remplace :
            // - le texte \"__name__label__\" qu'il contient par notre label (ici un label vide pour ne pas surcharger le formulaire)
            // - le texte \"__name__\" qu'il contient par le numéro du champ
            var \$codeHtmlNouvelArtiste = \$(\$codeHtmlFormulaireArtiste.attr('data-prototype').replace(/__name__label__/g, ' ')
                                          .replace(/__name__/g, compteurArtistes));
            // On ajoute au code html un lien pour pouvoir supprimer l'auteur
            ajouterLienSuppression(\$codeHtmlNouvelArtiste);
            // On ajoute le code html qu'on vient de modifier à la fin de la balise <div>
            \$codeHtmlFormulaireArtiste.append(\$codeHtmlNouvelArtiste);
            // On incrémente le compteur pour que le prochain ajout se fasse avec un autre numéro
            compteurArtistes++;
        }
        // La fonction qui ajoute un lien de suppression d'un auteur
        function ajouterLienSuppression(\$codeHtmlNouvelArtiste) {
            // Création du lien
            \$lienSuppression = \$('<a href=\"#\">Supprimer cet Artiste</a>');
            // Ajout du lien
            \$codeHtmlNouvelArtiste.append(\$lienSuppression);
            // Ajout du listener sur le clic du lien
            \$lienSuppression.click(function(e) {
                \$codeHtmlNouvelArtiste.remove();
                e.preventDefault(); // évite qu'un # apparaisse dans l'URL
                return false;
            });
        }
    });

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
        
        $__internal_ea5c75acc6b98f7361d63c9d8ac0bb379210737b4e096c95597201ee71fca514->leave($__internal_ea5c75acc6b98f7361d63c9d8ac0bb379210737b4e096c95597201ee71fca514_prof);

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
        return array (  103 => 48,  98 => 46,  73 => 23,  69 => 22,  64 => 20,  58 => 17,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "::vueMere.html.twig" %} {#La vue fille hérite de la vue mère#}*/
/* */
/* {% block contenuCentral %}*/
/* <body onload="hideV();">*/
/*   <div class="container">*/
/* */
/*       <div class="panel panel-default">*/
/*       <!--default panel content-->*/
/*         <div class="panel-heading"><h2><b>Modifier une actualité</b></h2></div>*/
/*          <div class="row">*/
/*            <div class="col-lg-12">*/
/*       <div class="list-group">*/
/*         <div class="list-group-item">*/
/*            */
/*           <!--AFFICHAGE DU FORMULAIRE-->*/
/*           <form method="post" id=soumettreActualiteForm name="formSoumettreActu" {{form_enctype(formulaireActualite)}}>*/
/*               {{ form_widget(formulaireActualite)}}*/
/*             <input type=submit class="btn btn-primary" onsubmit="return false" onclick="return confirm('Vous confirmez?');">*/
/*             <input type=button class="btn btn-primary" value="Visualiser" onclick="visualiser();">*/
/*             <a href="{{path('follow_the_rhythm_accueil',{'page': 1, 'sens': 1, 'nbParPage': 25})}}"><input type=button class="btn btn-primary" value="Annuler" onclick="return confirm('Êtes vous sûr? Les données saisies seront effacées');"></a></br>*/
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
/*     </div>*/
/*   </div>*/
/* </div>*/
/* </body>*/
/* */
/* {# On charge la bibliothèque jQuery #}*/
/* <script src="{{ asset('js/jquery.js')}}"></script>*/
/* {# Script permettant d'ajouter et supprimer dynamiquement des formulaires artistes #}*/
/* <script type="text/javascript">*/
/*    $(document).ready(function() {*/
/*         // On récupère la balise <div>qui contient l'attribut « data-prototype » qui nous intéresse.*/
/*         var $codeHtmlFormulaireArtiste = $('div#actualite_artiste');*/
/*         // On ajoute un lien pour ajouter une nouvel auteur*/
/*         var $lienAjoutArtiste = $('<a href="#" id="add_artiste">Ajouter un artiste</a>');*/
/*         $codeHtmlFormulaireArtiste.append($lienAjoutArtiste);*/
/*         // On ajoute un nouveau champ auteur à chaque clic sur le lien d'ajout.*/
/*         $lienAjoutArtiste.click(function(e) {*/
/*             addArtiste($codeHtmlFormulaireArtiste);*/
/*             e.preventDefault(); // évite qu'un # apparaisse dans l'URL*/
/*             return false;*/
/*         });*/
/*         // On définit un compteur unique pour nommer les champs Auteur qu'on va ajouter dynamiquement*/
/*         var compteurArtistes = $codeHtmlFormulaireArtiste.find(':input').length;*/
/*         // On ajoute le code html d'un premier formulaire Auteur s'il n'en existe pas déjà un (cas d'ajout d'un nouveau livre).*/
/*         if (compteurArtistes == 0) {*/
/*             addArtiste($codeHtmlFormulaireArtiste);*/
/*         } else {*/
/*             // Pour chaque formulaire auteur affiché, on ajoute un lien de suppression*/
/*             $codeHtmlFormulaireArtiste.children('div').each(function() {*/
/*                 ajouterLienSuppression($(this));*/
/*             });*/
/*         }*/
/*         // La fonction qui ajoute un formulaire Auteur*/
/*         function addArtiste($codeHtmlFormulaireArtiste) {*/
/*             // Dans le contenu de l'attribut « data-prototype », on remplace :*/
/*             // - le texte "__name__label__" qu'il contient par notre label (ici un label vide pour ne pas surcharger le formulaire)*/
/*             // - le texte "__name__" qu'il contient par le numéro du champ*/
/*             var $codeHtmlNouvelArtiste = $($codeHtmlFormulaireArtiste.attr('data-prototype').replace(/__name__label__/g, ' ')*/
/*                                           .replace(/__name__/g, compteurArtistes));*/
/*             // On ajoute au code html un lien pour pouvoir supprimer l'auteur*/
/*             ajouterLienSuppression($codeHtmlNouvelArtiste);*/
/*             // On ajoute le code html qu'on vient de modifier à la fin de la balise <div>*/
/*             $codeHtmlFormulaireArtiste.append($codeHtmlNouvelArtiste);*/
/*             // On incrémente le compteur pour que le prochain ajout se fasse avec un autre numéro*/
/*             compteurArtistes++;*/
/*         }*/
/*         // La fonction qui ajoute un lien de suppression d'un auteur*/
/*         function ajouterLienSuppression($codeHtmlNouvelArtiste) {*/
/*             // Création du lien*/
/*             $lienSuppression = $('<a href="#">Supprimer cet Artiste</a>');*/
/*             // Ajout du lien*/
/*             $codeHtmlNouvelArtiste.append($lienSuppression);*/
/*             // Ajout du listener sur le clic du lien*/
/*             $lienSuppression.click(function(e) {*/
/*                 $codeHtmlNouvelArtiste.remove();*/
/*                 e.preventDefault(); // évite qu'un # apparaisse dans l'URL*/
/*                 return false;*/
/*             });*/
/*         }*/
/*     });*/
/* */
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
