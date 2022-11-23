<?php
    include '../back/hpageB.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/hpage.css">
</head>
<body>

    <nav id="topnav">
        <a class="nav-link" href="#">Ycollector</a>
        <a id="logo" class="usr" href="#">
            <?php 
                echo $_SESSION['name'];
            ?>
        </a>
        <hr>
    </nav>

<div id="image">

  <button id="add"> <img src="https://media.discordapp.net/attachments/950364547372425256/1034095033818828800/images.jpeg" > </button>
  <a id="ok" class="prix">prix</a>
</div>

<div id="form-item" class="hidden">
  <form method=”POST” id="form">
    <div id="name-item">
      <input type="text" name="name" id="name" required placeholder="name">
    </div>
    <div id="price-item">
      <input type="text" name="price" id="price" required placeholder="price">
    </div>
    <div id="description-item">
      <input type="text" name="description" id="description" required placeholder="description">
    </div>
    <div id="pircture-item">
      <input type="text" name="pircture" id="pircture" >
    </div>
    <input type="submit" class="" value="Ajouter">
  </form>
</div>

<?php
  for ($i=0; $i < $_SESSION['nbcard']; $i++) { 
    ?>
<div class='card-wrapper'>
    <div class='card' data-toggle-class='flipped'>
      <div class='card-front'>
        <div class='layer'>
          <h1>cards</h1>
          <div class='corner'></div>
          <div class='corner'></div>
          <div class='corner'></div>
          <div class='corner'></div>
        </div>
      </div>
      <div class='card-back'>
        <div class='layer'>
          <div class='top'>
            <h2>Chief Idea Officer</h2>
          </div>
          <div class='bottom'>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
<?php
  }
  ?>



<script src="../JS/hpage.js"></script>  

</body>
</html>