<?php
    require('../inc/treatUrl.php');
    session_start();
    if(isset($_GET["id"]) && !isset($_SESSION["id"])){
        $_SESSION["id"]=$_GET["id"];
    }
    $listeEnchere = null;
    if(isset($_SESSION["id"]))
        $listeEnchere = fetchUrl(link."allEncheresClient/".$_SESSION['id']);
    if(isset($_GET["listeEnchere"]))
        $listeEnchere = json_decode($_GET["listeEnchere"]);
    else
        $listeEnchere = fetchUrl(link."allEncheres");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../assets/css/style.css">
        <title>Liste enchères</title>
    </head>

    <body>
        <?php 
            include ('header.php')
        ?> 
        <div id="cards">
            <?php foreach ($listeEnchere as $enchere) { 
                if(isset($_SESSION['id'])){ 
                    $idClient = $_SESSION['id'];
                    $encheri = fetchUrl(link."dejaEncheri?idClient=$idClient&&idProduit=$enchere->id");
                }   
            ?>
                <div class="card">
                    <img src="<?= $enchere->image ?>">
                    <div class="card-content">
                        <h2><?= $enchere->nom ?></h2>
                        <p><?= $enchere->description ?></p>
                        <h3><?= $enchere->prix_min ?> Ar</h3>
                        <h2>Par <?= $enchere->proprio ?></h2>
                        <?php if(isset($_SESSION["id"])){
                            if($encheri == 0){ ?>
                                <a href="formulaire.php?id=<?= $enchere->id ?>&&produit=<?= $enchere->nom;?>&&description=<?= $enchere->description;?>">
                                    <button class="btn">Déposer une enchère</button>
                                </a>
                            <?php
                                }else{
                            ?>
                                <a href="formulaire.php?id=<?= $enchere->id ?>&&produit=<?= $enchere->nom;?>&&description=<?= $enchere->description;?>&&last_offer=<?= $encheri?>">
                                    <button class="btn">Renchérir</button>
                                </a>
                            <?php } ?>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </body>
</html>