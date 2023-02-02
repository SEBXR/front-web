<?php
    $id = $_GET["id"];
    $produit = $_GET['produit'];
    $description = $_GET['description'];
    session_start();
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
        <div id="cards">
            <div class="card">
                <div class="card-content">
                    <h2><?= $produit; ?></h2>
                    <p><?= $description; ?></p>
                    <?php
                        if(isset($_GET['last_offer'])){
                            print "<p>Votre dernière offre: ".$_GET['last_offer']." Ar</p>";
                        }
                    ?>
                    <form id="form-depot">
                        <input type="hidden" name="idClient" value=<?= $_SESSION["id"] ?> >
                        <input type="hidden" name="idProduit" value=<?= $id ?> >
                        <input type="number" name="offre" placeholder="Combien ?">
                        <button type="submit">Valider</button>
                    </form>
                </div>
                <a href="listeEncheres.php"><button class="btn">Retour</button></a>
            </div>
        </div>
    </body>
    <script src="../assets/js/script.js"></script>

</html>