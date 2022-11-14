<?php
    include '../back/index.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/register.css">
</head>
<body>
    <div class="login-box">
        <h2>Inscription</h2>
        <form method=”POST” id="form">
          <div class="user-box">
            <input type="text" name="name" id="name" required>
            <label>Nom</label>
          </div>
          <div class="user-box">
          </div>
          <div class="user-box">
            <input type="email" name="email" id="email" required>
            <label>Email</label>
          </div>
          <div class="user-box">
            <input type="password" name="password" id="password" required>
            <label>Mot de passe</label>
          </div>
          <input type="submit" id="bouton" class="oui" value="Inscrivez-vous !">
          <div id="inscription">
          <a>Vous avez déjà un compte ? </a>
          <a href="./login.php" class="connectez">Connectez-vous !</a>
        </div>
        </form>
      </div>
</body>
</html>