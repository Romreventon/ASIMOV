<?php
  session_start();
?>

<!DOCTYPE html>
<html>
  <head>     
    <meta charset="UTF-8">
    <title>ASIMOV</title>
    <link href="monstyle.css" rel="stylesheet" media="all">
  </head>

  <body>
  <header>
    <?php include('includehead.php');?>
  </header>
    <?php
    if (isset($_SESSION['prenom'])) {
    ?>
      <div class="nav">
        <a href="#" class="home">Home</a>
        <a href="#">Actualités</a>
        <a href="#">Evénements</a>
        <a href="#">Code_Space()</a>
        <a href="#">Mon compte</a>
      </div>
    <?php
    } else {
    ?>
      <p>t'es pas connecté connard</p
    <?php
    }
    ?>

  </body>
</html> 
