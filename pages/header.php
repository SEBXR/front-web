<div class="header">
    <h1>Enchères </h1>
    <?php 
        if(isset($_SESSION["id"])){
            $names = fetchUrl(link."getNames/".$_SESSION["id"]);
            print "<h3>Bienvenue $names</h3>";
            print "<a href='listeEncheres.php'><i  class='fas fa-list'></i>Liste des enchères</a>";
            print "<a href='historique.php'><i class='fas fa-user'></i>Historique</a>";
            print "<a href='login.php?destroy'><i class='fas fa-user'></i>Se déconnecter</a>";
        }
        else{
            $action = link."recherchetous";
            print "<a href='listeEncheres.php'><i  class='fas fa-list'></i>Liste des enchères</a>";
            print "<a href='login.php'><i class='fas fa-user'></i>Se connecter</a>";
        }
    ?>
    <form id='form-recherche' >
        <?php
            if(isset($_SESSION['id']))
                print "<input type='hidden' name='id' value=".$_SESSION['id'].">";
        ?>
        <input type="text" name="nom_produit" placeholder="Faire une recherche">
        <button type="submit">Rechercher</button>
    </form>
</div>
<script src="../assets/js/script.js"></script>
