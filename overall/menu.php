<?php include 'bdd.php'; ?>

<div id="entete">

    <div id="titre">Osthoffen 2020</div>    

    <div id="logo"></div>

    
       
    <nav id="menu">
        <ul>

            <?php

            $bdd_req = $pdo->prepare("SELECT * FROM menu ORDER BY ID");
            $bdd_req->execute();
            while ($row = $bdd_req->fetch()) {
            ?>
                <li style="width:<?php echo($row['WIDTH']) ?>%"><a href="<?php echo($row['URL']); ?>">
                <?php echo($row['TITRE']); ?>
                </a></li>
            <?php
              }
            ?>


        </ul>
    </nav>


</div>