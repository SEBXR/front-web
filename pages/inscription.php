<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="../assets/css_log/style_inscri.css" rel="stylesheet">
</head>

<body>

  <form action="/action_page.php">
    <div class="container">
      <h1>Register</h1>
      <p>Veuillez remplir le formulaire suivant.</p>
      <hr>

      <label for="email"><b> Nom</b></label>
      <input type="text" name="email" id="email" required>

      <label for="psw"><b>Prénom</b></label>
      <input type="password" name="psw" id="psw" required>


      <label for="psw"><b>Email</b></label>
      <input type="password" name="psw" id="psw" required>

      <label for="psw"><b>Mot de passe</b></label>
      <input type="password" name="psw" id="psw" required>

      <label for="psw-repeat"><b>Répéter Mot de passe</b></label>
      <input type="password" name="psw-repeat" id="psw-repeat" required>
      <hr>
      <p>Vous acceptez donc nos <a href="#">Termes & Politique</a>.</p>

      <button type="submit" class="registerbtn">Register</button>
    </div>

    <div class="container signin">
      <p>Avez-vous un compte? <a href="login.php">Sign in</a>.</p>
    </div>
  </form>

</body>

</html>