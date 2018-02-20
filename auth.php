<?php session_start() ?>

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

		<h2 class="h2_white">Se connecter à ASIMOV</h2>
		
		<div class="form_center">
			<div class="auth_form">
	    	<form action="connexion.php" method="post">
					<div class="container">
						<?php 
						if (isset($_SESSION['login_error']) && $_SESSION['login_error'] == 1) {
							echo "<div class=\"error\">Mail ou mot de passe incorrect !</div><br/>";
							$_SESSION['login_error'] = 0;
						}
						else if (isset($_SESSION['inscrip_done']) && $_SESSION['inscrip_done'] == 1) {
							echo "<div class=\"info\">Demande d'inscription envoyée : @bientôt ! </div><br/>";
							$_SESSION['inscrip_done'] = 0;
						} ?>

				    <label><b>Mail</b></label>
				    <input type="text" placeholder="saisir mail" name="mail" required><br/><br/>
				    
				    <label><b>Mot de passe</b></label>
				    <a href="#" class="pwd">Mot de passe oublié ?</a>
				    <input type="password" placeholder="saisir mot de passe" name="pwd" required>

				    <button type="submit" name="bt_connex">Connexion</button><br/><br/>
						
						<div class="text-center">Nouveau sur ASIMOV ? <a href="inscription.php">créer un compte</a></div>			    	
					</div>
				</form> 
			</div>
		</div>
	</body>
</html>
