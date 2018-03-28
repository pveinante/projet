<?php

/* follow_the_rhythmSymfonyBundle:Symfony:soumettreTopic.html.twig */
class __TwigTemplate_9839bd4bfb2a44669a04248c3ce7ba46c548fe4d0aabef7b290e60ac222834f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::vueMere.html.twig", "follow_the_rhythmSymfonyBundle:Symfony:soumettreTopic.html.twig", 1);
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
        $__internal_82e2f5d497a4560d023fd26a2acd0b737d88eef00202bd6f4ad915d1c8722c05 = $this->env->getExtension("native_profiler");
        $__internal_82e2f5d497a4560d023fd26a2acd0b737d88eef00202bd6f4ad915d1c8722c05->enter($__internal_82e2f5d497a4560d023fd26a2acd0b737d88eef00202bd6f4ad915d1c8722c05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "follow_the_rhythmSymfonyBundle:Symfony:soumettreTopic.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82e2f5d497a4560d023fd26a2acd0b737d88eef00202bd6f4ad915d1c8722c05->leave($__internal_82e2f5d497a4560d023fd26a2acd0b737d88eef00202bd6f4ad915d1c8722c05_prof);

    }

    // line 3
    public function block_contenuCentral($context, array $blocks = array())
    {
        $__internal_7b27c30f66b687349318c93d5df80ed52f68e028ed204aae5131da873307ab7e = $this->env->getExtension("native_profiler");
        $__internal_7b27c30f66b687349318c93d5df80ed52f68e028ed204aae5131da873307ab7e->enter($__internal_7b27c30f66b687349318c93d5df80ed52f68e028ed204aae5131da873307ab7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenuCentral"));

        // line 4
        echo "<body onload=\"hideV();\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"panel panel-default\">
      <!--default panel content-->
        <div class=\"panel-heading\"><h2><span class=\"glyphicon glyphicon-plus\"></span><b> Nouveau Topic - ";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["categorie_nom"]) ? $context["categorie_nom"] : $this->getContext($context, "categorie_nom")), "html", null, true);
        echo "</b></h2></div>
     
      <div class=\"list-group\">
        <div class=\"list-group-item\">
           
          <!--AFFICHAGE DU FORMULAIRE-->
          <form method=\"post\" id=soumettreTopicForm name=\"formSoumettreTopic\" ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulaireTopic"]) ? $context["formulaireTopic"] : $this->getContext($context, "formulaireTopic")), 'enctype');
        echo ">
              ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulaireTopic"]) ? $context["formulaireTopic"] : $this->getContext($context, "formulaireTopic")), 'widget');
        echo "
            <input type=submit class=\"btn btn-primary\" onsubmit=\"return false\" onclick=\"return confirm('Vous allez créer un topic dans la catégorie ";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["categorie_nom"]) ? $context["categorie_nom"] : $this->getContext($context, "categorie_nom")), "html", null, true);
        echo ". Voulez-vous continuer ?');\">
            <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("follow_the_rhythm_accueil", array("page" => 1, "sens" => 1)), "html", null, true);
        echo "\"><input type=button class=\"btn btn-primary\" value=\"Annuler\" onclick=\"return confirm('Êtes vous sûr? Les données saisies seront effacées');\"></a></br>
            </br>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</body>

";
        // line 29
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
";
        // line 31
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
        
        $__internal_7b27c30f66b687349318c93d5df80ed52f68e028ed204aae5131da873307ab7e->leave($__internal_7b27c30f66b687349318c93d5df80ed52f68e028ed204aae5131da873307ab7e_prof);

    }

    public function getTemplateName()
    {
        return "follow_the_rhythmSymfonyBundle:Symfony:soumettreTopic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 31,  81 => 29,  68 => 18,  64 => 17,  60 => 16,  56 => 15,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
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
/*         <div class="panel-heading"><h2><span class="glyphicon glyphicon-plus"></span><b> Nouveau Topic - {{categorie_nom}}</b></h2></div>*/
/*      */
/*       <div class="list-group">*/
/*         <div class="list-group-item">*/
/*            */
/*           <!--AFFICHAGE DU FORMULAIRE-->*/
/*           <form method="post" id=soumettreTopicForm name="formSoumettreTopic" {{form_enctype(formulaireTopic)}}>*/
/*               {{ form_widget(formulaireTopic)}}*/
/*             <input type=submit class="btn btn-primary" onsubmit="return false" onclick="return confirm('Vous allez créer un topic dans la catégorie {{categorie_nom}}. Voulez-vous continuer ?');">*/
/*             <a href="{{path('follow_the_rhythm_accueil',{'page': 1, 'sens': 1})}}"><input type=button class="btn btn-primary" value="Annuler" onclick="return confirm('Êtes vous sûr? Les données saisies seront effacées');"></a></br>*/
/*             </br>*/
/*           </form>*/
/*         </div>*/
/*       </div>*/
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
/* </script>*/
/* */
/* {% endblock %}*/
/* */
