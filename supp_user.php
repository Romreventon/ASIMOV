<!DOCTYPE html>
<html>
  <head>     
    <meta charset="UTF-8">
    <title>ASIMOV</title>
    <link href="monstyle.css" rel="stylesheet" media="all">
  </head>

  <body>
  	<?php include_once("connexion_bdd.php");
  	if (isset($_POST['bt_supp'])) {
  		if ($_POST['supp'] == "oui") {
  			$id_user = $_GET['id'];
  			$connect = connexion_bdd();
  			mysqli_query($connect, "DELETE FROM users WHERE id_user=$id_user");
  			?>
			<script type="text/javascript">
						window.opener.location.reload();//recharge la page de l'appelant de la popup

				window.close();
			</script>	
  		<?php
  		}
  		else { ?>
			<script type="text/javascript">
		window.opener.location.reload();//recharge la page de l'appelant de la popup

				window.close();
			</script>	
  		<?php	
  		}
  	}
  	?>
  	<h2 class="h2_white">Voulez-vous vraiment supprimer cet utilisateur ?</h2><br/>
  	<div class="form_center">
  	<form action="#" method="post">
  		<input type="radio" name="supp" value="oui" checked>Oui
  		<input type="radio" name="supp" value="non">Non<br/><br/>
  		<button type="submit" name="bt_supp">Valider</button>
  	</form>
  </div>
  </body>
</html>