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
 
    <body id="auth_wall">
      <div class="img_container">
      <img src="Logo_ASIMOV.png" alt="Logo_ASIMOV" class="logo">
    </div>

    <h2 class="h2_white">S'inscrire à ASIMOV</h2>
    
    <div class="form_center">
    <div class="auth_form">
      <form action="inscrip.php" method="post">
        <div class="container">
          <label><b>Mail</b></label>
          <input type="text" placeholder="saisir mail" name="mail" required><br/><br/>
          
          <label><b>Nom</b></label>
          <input type="text" placeholder="saisir nom" name="nom" required><br/><br/>

          <label><b>Prénom</b></label>
          <input type="text" placeholder="saisir prénom" name="prenom" required><br/><br/>

          <label><b>Mot de passe</b></label>
          <input type="password" placeholder="saisir mot de passe" name="pwd" required><br/><br/>

          <label><b>Promotion</b></label>        
          <select name="promo">
            <option value="L1" selected">L1</option>
            <option value="L2">L2</option>
            <option value="L3">L3</option>
            <option value="M1">M1</option>
            <option value="M2">M2</option>
          </select><br/><br/>

          <button type="submit" name="bt_inscrip">Inscription</button>
        </div>
      </form> 
    </div>
    </div>
  </body>
</html>
