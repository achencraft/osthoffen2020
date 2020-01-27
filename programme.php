<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Osthoffen 2020</title>
        <meta charset="UTF-8">
        <meta name="description" content="Site Internet de la liste municipale Osthoffen 2020">
        <meta name="keywords" content="Osthoffen, elections, municipal, 2020, mairie">
        <meta name="author" content="Lucas LETT">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="style.css">
    </head>

    <body>

    

        <?php include "overall/menu.php";  ?>

    

        <div id="content_candidat" style="display:block;">

      <center>
        <h1>Notre programme</h1>
    </center>
    
        <div id="module_programme">

            <div id="affichage_categorie">
            <div class="contenu_cat contenu_cat_selected" id="contenu_cat_1">
                <h2>Sécurité et circulation dans le village</h2>
                <ul>
                <li>Trouver des solutions cohérentes pour réduire la vitesse et notamment cibler les entrées de l’agglomération. </li>
                <li>Revoir le plan de circulation dans le centre du village, mise en place d’un rond-point ou d’une petite place au niveau de la mairie et de l’école afin d’accentuer la visibilité par un aménagement urbain agréable et surtout sécurisé.</li>
                <li>Trouver des solutions aux problèmes de stationnement</li>
                </ul>
                La sécurité est la première des conditions pour assurer la liberté et la tranquillité publique. 

            </div>
            <div class="contenu_cat" id="contenu_cat_2">
                <h2>Dynamisme, animation et jeunesse</h2>
                Permettre aux habitants de s’investir dans la vie communale et de bénéficier de diverses activités :
                <ul>
                <li>En encourageant et soutenant la vie associative, véritable lien social et reflet du dynamisme des habitants. </li>
                <li>Création d’une association de jeunes et d’un conseil municipal des jeunes</li>
                <li>Mise en place d’un lieu de rencontre pour les jeunes</li>
                </ul>
                Création de manifestations annuelles :
                <ul>
                <li>Les vœux du maire </li>
                <li>Commémorations </li>
                <li>Une animation annuelle telle qu’un marché aux puces ou autre…</li>
                <li>Mise en place de cours informatique et de secourisme.</li>
                </ul>


            </div>
            <div class="contenu_cat" id="contenu_cat_3">
            <h2>S'occuper de nos aînés</h2>
                Pour permettre une rencontre qui ne se fait pas aujourd’hui : 
                <ul>
                <li>Création d’une association pour les ainées :<br> Cette association permettra aux personnes à la retraite ou autre de se rencontrer et d’avoir des activités tels que des jeux de société, un café Kuchen, des échanges et des discussions.  </li>
                <li>Mise en place d’un repas de Noël.</li>
                </ul>


            </div>
            <div class="contenu_cat" id="contenu_cat_4">
            <h2>Gestion saine du patrimoine, accessibilité et visibilité de la mairie </h2>
            <ul>
            <li>Recenser les biens propriétés de la commune et leurs utilités.</li>
            <li>Mettre en conformité la mairie, notamment pour l’accessibilité handicapés obligatoire. </li>
            <li>Travailler sur le regroupement et l’aménagement de l’école.</li>
            <li>Avoir une mairie visible par tous. </li>
                </ul>

            </div>
            <div class="contenu_cat" id="contenu_cat_5">

            <h2>Communiquer en misant sur l’information et en favorisant l’échange </h2>
            <ul>
            <li>En assurant une information de qualité. 
            <li>S’assurer de la réception des informations par les habitants.
            <li>Possibilité de dépôt d’idées en mairie et recueil des avis des habitants sur les projets municipaux.
            <li>En accompagnant les initiatives locales.  

                </ul>


            </div>
            <div class="contenu_cat" id="contenu_cat_6">

            <h2>Ecologie</h2>
            <ul>
            <li>Le village d’Osthoffen jouit d’un cadre privilégié, notamment avec le château, que nous devons préserver et mettre en valeur.
            <li>S’assurer d’un urbanisme maîtrisé. 
            <li>Expliquer un peu la charte de l’AVA (Anne M.) 
            <li>Mise en place d’un nettoyage de printemps, d’une collecte des sapins. 
            <li>Nous mettrons tout en œuvre pour réaliser une piste cyclable.


                </ul>


            </div>
            </div>

            <div id="selection_categorie">
            <div onclick="afficher_cat(1)" class="bouton_cat bouton_cat_selected" id="bouton_cat_1"><div class="bouton_text">Sécurité et circulation dans le village</div></div>
            <div onclick="afficher_cat(2)"class="bouton_cat" id="bouton_cat_2"><div class="bouton_text">Dynamisme, animation et jeunesse</div></div>
            <div onclick="afficher_cat(3)"class="bouton_cat" id="bouton_cat_3"><div class="bouton_text">S'occuper de nos aînés</div></div>
            <div onclick="afficher_cat(4)"class="bouton_cat" id="bouton_cat_4"><div class="bouton_text">Gestion saine du patrimoine, accessibilité et visibilité de la mairie</div></div>
            <div onclick="afficher_cat(5)"class="bouton_cat" id="bouton_cat_5"><div class="bouton_text">Communiquer en misant sur l'information et en favorisant l'échange</div></div>
            <div onclick="afficher_cat(6)"class="bouton_cat" id="bouton_cat_6"><div class="bouton_text">Ecologie</div></div>
            </div>

            

        </div>
    

        </div>
        

    </body>
</html>



<script>


function afficher_cat(cat_id) {
  var boutons = document.getElementsByClassName("bouton_cat");
  for(var i = 0; i < boutons.length; i++)
    {
        boutons.item(i).classList.remove("bouton_cat_selected");
    }
  
  var id_bouton = "bouton_cat_"+cat_id;
  document.getElementById(id_bouton).classList.add("bouton_cat_selected");

  var contenus = document.getElementsByClassName("contenu_cat");
  for(var i = 0; i < boutons.length; i++)
    {
        contenus.item(i).classList.remove("contenu_cat_selected");
    }

  var id_contenu = "contenu_cat_"+cat_id;
  document.getElementById(id_contenu).classList.add("contenu_cat_selected");
}


</script>


