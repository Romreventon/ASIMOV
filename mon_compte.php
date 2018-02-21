<?php
	session_start();
	include("header.php");
	include_once("connexion_bdd.php");

	if (!isset($_SESSION['id_user']))
		echo "<br/><div style=\"text-align:center; color: red;\">Vous devez être connecté pour consulter cette page !</div>";
	else {
		include("menu_nav.php");

		$id_user = $_SESSION['id_user'];
		$connect = connexion_bdd();
    $result = mysqli_query($connect, "SELECT * FROM ". $users ." WHERE id_user=$id_user");
		$data = mysqli_fetch_assoc($result);
			$mail =  $data['mail'];
			$nom = $data['nom'];
			$prenom = $data['prenom'];
			$pwd = $data['pwd'];
			$promo = $data['promo'];
			$rang = $data['rang'];
			$enregistre = $data['enregistre'];
		
		?>
		
		<section>
			<h2 class="h2_white">Mon compte</h2>
  		<div class="form_center">
    		<div class="auth_form">
  				<form action="modif_compte_user.php" method="post">
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
							<select name="new_promo">
			          <option value="L1" <?php if ($promo == "L1") echo "selected";?> >L1</option>
			          <option value="L2" <?php if ($promo == "L2") echo "selected";?> >L2</option>
			          <option value="L3" <?php if ($promo == "L3") echo "selected";?> >L3</option>
			          <option value="M1" <?php if ($promo == "M1") echo "selected";?> >M1</option>
			          <option value="M2" <?php if ($promo == "M2") echo "selected";?> >M2</option>
			        </select><br/><br/>
			    	
			    		<button type="submit" name="bt_save">Sauvegarder</button>
      			</div>
  				</form>
  			</div>
  		</div>
  	</section> <?php
	}

include("footer.php")
?>

