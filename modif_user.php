<!DOCTYPE html>
<html>
  <head>     
    <meta charset="UTF-8">
    <title>ASIMOV</title>
    <link href="monstyle.css" rel="stylesheet" media="all">
  </head>

  <body>
  	<?php session_start();
    include_once("connexion_bdd.php");
      $connect = connexion_bdd();
      $id_user = $_GET['id'];
      $result = mysqli_query($connect, "SELECT * FROM users WHERE id_user=$id_user");
      while ($data = mysqli_fetch_assoc($result)) {
        $mail =  $data['mail'];
        $nom = $data['nom'];
        $prenom = $data['prenom'];
        $pwd = $data['pwd'];
        $promo = $data['promo'];
        $rang = $data['rang'];
        $enregistre = $data['enregistre'];
      }

  	if (isset($_POST['bt_modif'])) {
        $mail =  $_POST['mail'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $pwd = $_POST['pwd'];
        $promo = $_POST['promo'];
        $rang = $_POST['rang'];
        $enregistre = $_POST['enregistre'];
  
      //Mise à jour des informations utilisateur
      $query = sprintf("UPDATE users SET mail='%s',nom='%s',prenom='%s', pwd='%s', promo='%s', rang='%s', enregistre='%d' WHERE id_user='$id_user'",  
      mysqli_real_escape_string($connect, $mail),
      mysqli_real_escape_string($connect, $nom),
      mysqli_real_escape_string($connect, $prenom),
      mysqli_real_escape_string($connect, $pwd),
      mysqli_real_escape_string($connect, $promo),
      mysqli_real_escape_string($connect, $rang),
      mysqli_real_escape_string($connect, $enregistre));  
      mysqli_query($connect, $query);

  			?>
			<script type="text/javascript">
						window.opener.location.reload();//recharge la page de l'appelant de la popup

				window.close();
			</script>	
  		<?php
  		}
  	
  	?>
  	
    <h2 class="h2_white">Modifier les données de l'utilisateur</h2>
    <div class="form_center">
      <div class="auth_form">
        <form action="#" method="post">
          <div class="container">
            <label><b>Mail</b></label>
            <input type="text" name="mail" value="<?php echo $mail ?>">
          
            <label><b>Nom</b></label>
            <input type="text" name="nom" value="<?php echo $nom ?>">
            
            <label><b>Prénom</b></label>
            <input type="text" name="prenom" value="<?php echo $prenom ?>">
            
            <label><b>Mot de passe</b></label>
            <input type="text" name="pwd" value="<?php echo $pwd ?>"><br/><br/>


            <label><b>Promotion</b></label>        
            <select name="promo">
              <option value="L1" <?php if ($promo == "L1") echo "selected";?> >L1</option>
              <option value="L2" <?php if ($promo == "L2") echo "selected";?> >L2</option>
              <option value="L3" <?php if ($promo == "L3") echo "selected";?> >L3</option>
              <option value="M1" <?php if ($promo == "M1") echo "selected";?> >M1</option>
              <option value="M2" <?php if ($promo == "M2") echo "selected";?> >M2</option>
            </select><br/><br/>

            <label><b>Rang</b></label>
            <input type="radio" name="rang" value="ADMIN" <?php if ($rang == "ADMIN") echo "checked"?> >Administrateur
            <input type="radio" name="rang" value="USER" <?php if ($rang == "USER") echo "checked"?> >Simple<br/><br/>

            <label><b>Inscription validée</b></label>
            <input type="radio" name="enregistre" value="1" <?php if ($enregistre == 1) echo "checked"?> >oui
            <input type="radio" name="enregistre" value="0" <?php if ($enregistre == 0) echo "checked"?> >non <br/><br/>
          
            <button type="submit" name="bt_modif">Sauvegarder</button>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>