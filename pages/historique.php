<?php
    require('../inc/treatUrl.php');
    session_start();
    if(isset($_GET["id"]) && !isset($_SESSION["id"])){
        $_SESSION["id"]=$_GET["id"];
    }
    $history = null;
    $history = fetchUrl(link."history/".$_SESSION['id']);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../assets/css/style.css">
        <title>Historique</title>
    </head>

    <body>
        <?php 
            include ('header.php')
        ?> 
        <div id="cards">
            <?php foreach ($history as $his) { ?>
                <div class="card">
                    <img src="<?= $his->image ?>">
                    <div class="card-content">
                        <h2><?= $his->nom ?></h2>
                        <p><?= $his->description ?></p>
                        <p>Offre déposée : <?= $his->prix_min ?> Ar</p>
                        </br>
                        <h2>Statut : <?=  $his->statut==0? "Perdu": "Gagné" ?></h2>
                    </div>
                </div>
            <?php } ?>
        </div>
    </body>
</html>