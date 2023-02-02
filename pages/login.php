<?php
    if(isset($_GET['destroy'])){
        session_start();
        session_destroy();
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Connexion</title>
        <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@700&display=swap" rel="stylesheet">
        <link href="../assets/css_log/style_login.css" rel="stylesheet">
        <link rel="shortcut icon" type="x-icon" href="../../img/logo.png">

    </head>

    <body>
        <form class="box" id="login">
            <img src="../assets/img/login.png" width="120" height="120">
            <h1>Connexion</h1>
            <input type="text" placeholder="Email" required="" name="email" autocomplete="off">
            <input type="password" placeholder="Mot de passe" required="" name="mdp">
            <input type="submit" value="Se connecter">
        </form>
    </body>
<script src="../assets/js/script.js"></script>

</html>