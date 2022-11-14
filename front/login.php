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
    <link rel="stylesheet" href="../CSS/login.css">
</head>
<body>
    <div class="login-box">
        <h2>Connection</h2>
        <form method=”POST” id="form">
          <div class="user-box">
          <input type="logEmail" name="logEmail" id="logEmail" required>
            <label>E-mail</label>
          </div>
          <div class="user-box">
            <input type="logPassword" name="logPassword" id="logPassword" required>
            <label>Mot de passe</label>
            <div id="pouet"></div>
          </div>
          <input type="submit" class="oui" value="Je me connecte">
          <div id="connection">
            <a>Vous avez déjà un compte ? </a>
            <a href="./register.php" class="inscrivez">Connectez-vous !</a>
          </div>
        </form>
      </div>
    </div>
</body>
</html>