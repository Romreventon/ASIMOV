<!DOCTYPE html>
<html>
  <head>     
    <meta charset="UTF-8">
    <title>ASIMOV</title>
    <link href="monstyle.css" rel="stylesheet" media="all">
  </head>

  <body>
  	<?php include_once("connexion_bdd.php");
  	if (isset($_POST['bt_trait'])) {
      $id_user = $_GET['id'];
      $connect = connexion_bdd();
  		if ($_POST['trait'] == "refuser") {
  			mysqli_query($connect, "DELETE FROM users WHERE id_user=$id_user");
  			?>
			<script type="text/javascript">
						window.opener.location.reload();//recharge la page de l'appelant de la popup

				window.close();
			</script>	
  		<?php
  		}
  		else { 
        mysqli_query($connect, "UPDATE users SET enregistre=1 WHERE id_user=$id_user");?>
			<script type="text/javascript">
		window.opener.location.reload();//recharge la page de l'appelant de la popup

				window.close();
			</script>	
  		<?php	
  		}
  	}
  	?>
  	<h2 class="h2_white">Traitement de l'inscription</h2>
  	<div class="form_center">
  	<form action="#" method="post">
  		<input type="radio" name="trait" value="accepter" checked>Accepter
  		<input type="radio" name="trait" value="refuser">Refuser
  		<button type="submit" name="bt_trait">Valider</button>
  	</form>
  </div>
  </body>
</html>