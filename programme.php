<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Osthoffen 2020</title>
        <meta charset="UTF-8">
        <meta name="description" content="Site Internet de la liste municipale Osthoffen 2020">
        <meta name="keywords" content="Osthoffen, elections, municipal, 2020, mairie">
        <meta name="author" content="Lucas LETT">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="files/logo.png" />

        <link rel="stylesheet" href="style.css">
    </head>

    <body>

    

        <?php include "overall/menu.php";  ?>

    

        <div id="content_candidat" style="display:block;">

      <center>
        <h1 style="background-color:orange">Notre programme</h1>
    </center>
    
        <div id="module_programme">

            <div id="affichage_categorie">
            <div class="contenu_cat contenu_cat_selected" id="contenu_cat_1">
                <h2>Sécurité et circulation dans le village</h2>
                <ul>
                <li>Trouver des solutions cohérentes pour réduire la vitesse et notamment cibler les entrées de l’agglomération.</li>
                <li>Revoir le plan de circulation dans le centre du village afin de sécuriser les abords de l'école.</li>
                <li>Trouver des solutions aux problèmes de stationnement.</li>
                </ul>
                <i>La sécurité est la première des conditions pour assurer la liberté et la tranquillité publique.</i>

            </div>
            <div class="contenu_cat" id="contenu_cat_2">
                <h2>Dynamisme, animation et jeunesse</h2>
                Permettre aux habitants de s’investir dans la vie communale et de bénéficier de diverses activités :
                <ul>
                <li>En encourageant et soutenant la vie associative, véritable lien social et reflet du dynamisme des habitants.</li>
                <li>En créant une association de jeunes et un conseil municipal des jeunes.</li>
                <li>En permettant l'accessibilité aux cours de secourisme et d'informatique.</li>
                </ul>
                En créant des manifestations annuelles :
                <ul>
                <li>Les vœux du maire.</li>
                <li>Les commémorations : notamment le 8 mai, le 14 juillet et le 11 novembre.</li>
                <li>Développer le patrimoine touristique par la mise en place d'un circuit "Les châteaux" et demander à réintégrer le Marathon du Vignoble.</li>
                <li>Eventuellement rétablir le marché aux puces, une bourse d'échange d'objets, ...</li>
                </ul>


            </div>
            <div class="contenu_cat" id="contenu_cat_3">
            <h2>S'occuper de nos aînés</h2>
                Pour permettre une rencontre qui ne se fait pas aujourd’hui : 
                <ul>
                <li>Mise en place d'un "repas de Noël".</li>
                <li>Création d’une association pour les aînés:<br>cette association permettra aux personnes à la retraite ou autre de se rencontrer et d’avoir des activités telles que des jeux de société, un café Kuchen, des échanges et des discussions (entre générations), des marches hebdomadaires, ...</li>
                </ul>


            </div>
            <div class="contenu_cat" id="contenu_cat_4">
            <h2>Gestion saine du patrimoine, accessibilité et visibilité de la mairie </h2>
            <ul>
            <li>Recenser les biens, propriétés de la commune et leurs utilités.</li>
            <li>Avoir une mairie "visible et accessible pour tous" (accessibilité PMR).</li>
            <li>Travailler sur l’aménagement de l’école.</li>
            <li>Travailler sur l'aménagement de l'ancien terrain de jeux (rue du loess) actuellement à l'abandon.</li>
            <li>Mettre en place une rampe d'escalier pour sécuriser l'accès à l'église.</li>
            </ul>

            </div>
            <div class="contenu_cat" id="contenu_cat_5">

            <h2>Communiquer en misant sur l’information et en favorisant l’échange</h2>
            <ul>
            <li>S’assurer de la réception des informations par les habitants.</li>
            <li>Faire participer les habitants par un recueil d'avis et un dépôt d'idées sur les projets municipaux.</li>
            <li>Mettre en place une permanence en mairie.</li>
            <li>Accompagner les initiatives locales.</li>  

                </ul>


            </div>
            <div class="contenu_cat" id="contenu_cat_6">

            <h2>Ecologie</h2>

            Le village d’Osthoffen jouit d’un cadre privilégié, notamment avec le château, que nous devons préserver et mettre en valeur.
            <ul>
            <li>S’assurer d’un urbanisme maîtrisé, dans le respect de l'environnement et de la population.</li>
            <li>Entretenir et aménager les cours d'eau.</li>
            <li>Organiser un nettoyage de printemps, une collecte des sapins, l'installation de maisons à insectes,...</li>
            <li>Lutter contre les dépôts sauvages.</li>
            <li>Mettre tout en œuvre pour réaliser une piste cyclable.</li>


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


