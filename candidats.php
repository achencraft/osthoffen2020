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
        <h1>Nos candidats</h1>
    </center>
    
    <?php

                $bdd_req = $pdo->prepare("SELECT * FROM candidats ORDER BY ID");
                $bdd_req->execute();
                while ($row = $bdd_req->fetch()) {

                    if(($row['ID'] % 2) == 1 )
                    {
            ?>

            <div class="candidat">
                

                <div class="photo_candidat">
                    <img  style="border-radius: 100%; width:250px; height:250px" src="files/candidats/<?php echo $row['PHOTO'] ?>">
                </div>

                <div class="presentation_candidat">                
                    
                <h3 style="margin-bottom:0"><?php echo $row['NOM'] ?></h3>
                <?php echo $row['INFOS'] ?><br><br>
                <?php echo $row['DESCRIPTION'] ?>

                </div>


            </div>


            <?php
                    } else {
            ?>

            <div class="candidat">
                
                <div class="presentation_candidat presentation_candidat_right" style="text-align:right">                
                    
                <h3 style="margin-bottom:0"><?php echo $row['NOM'] ?></h3>
                <?php echo $row['INFOS'] ?><br><br>
                <?php echo $row['DESCRIPTION'] ?>

                </div>



                <div class="photo_candidat">
                    <img  style="border-radius: 100%;width:250px; height:250px" src="files/candidats/<?php echo $row['PHOTO'] ?>">
                </div>

                <div class="presentation_candidat presentation_candidat_left">                
                    
                <h3 style="margin-bottom:0"><?php echo $row['NOM'] ?></h3>
                <?php echo $row['INFOS'] ?><br><br>
                <?php echo $row['DESCRIPTION'] ?>

                </div>
                


            </div>

            <?php
                    }
              }
            ?>

        </div>
        

    </body>
</html>



