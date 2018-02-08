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
  

      <form action="#">
        <div class="imgcontainer">
          <img src="Logo_ASIMOV.png" alt="logo asimov" class="logo">
        </div>

        <div class="auth">
          <h2>Authentification</h2>
          
          <label><b>Mail</b></label>
          <input type="text" placeholder="votre Mail" name="mail" required>

          <label><b>Mot de passe</b></label>
          <input type="password" placeholder="votre mot de passe" name="pwd" required>
              
          <button type="submit" name="connexion">Connexion</button>
        </div>
      </form>

      <form action="#">
        <div class="ins" style="background-color:#f1f1f1">
          <h2>Inscription</h2>

          <label><b>Mail</b></label>
          <input type="text" placeholder="votre mail" name="ins_mail" required>

          <label><b>Mot de passe</b></label>
          <input type="password" placeholder="votre mot de passe" name="ins_pwd" required>

          <label><b>Confirmer</b></label>
          <input type="password" placeholder="votre mot de passe" name="ins_pwd_confirm" required>
          
          <label><b>Prénom</b></label>
          <input type="text" placeholder="votre prénom" name="prenom" required>
          
          <label><b>Nom</b></label>
          <input type="text" placeholder="votre nom" name="nom" required>
              
          <button type="submit" name="inscription">Inscription</button>
        </div>
      </form>

    <?php
    }
    ?>

  </body>
</html> 