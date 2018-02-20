<?php
	session_start();
	include("header.php");
	include_once("connexion_bdd.php");

	if (!isset($_SESSION['id_user']) || $_SESSION['rang'] != "ADMIN")
		echo "<br/><div style=\"text-align:center; color: red;\">Vous n'êtes pas autorisé à consulter cette page !</div>";
	else { 
		include("menu_nav.php");
		$connect = connexion_bdd();
		$query = "SELECT * FROM users";
		$result = mysqli_query($connect, $query);
		?>

		<section>
	  	<h2>Demandes d'inscription</h2>
  		<article>
				<table style="overflow-x:auto;">
		  		<tr>
		  			<th>mail</th>
		  			<th>nom</th>
		  			<th>prénom</th>
		  			<th>mot de passe</th>
		  			<th>promo</th>
		  			<th>rang</th>
		  		</tr>
			<?php
			while ($data = mysqli_fetch_assoc($result)) {
				if ($data['enregistre'] == 0) {	?>
					<tr>
						<td><?php echo $data['mail'] ?></td>
						<td><?php echo $data['nom'] ?></td>
						<td><?php echo $data['prenom'] ?></td>
						<td><?php echo $data['pwd'] ?></td>
						<td><?php echo $data['promo'] ?></td>
						<td><?php echo $data['rang'] ?></td>
						<td><a href="javascript:pop('add_user.php?id=<?php echo $data['id_user'] ?>', 'supp', 'width=600, height=300')">traiter</a></td>
					</tr> <?php
				}
			} ?>
	  		</table>
  		</article>
			<h2>Utilisateurs</h2>
			<article>
				<table style="overflow-x:auto;">
  				<tr>
  					<th>mail</th>
  					<th>nom</th>
  					<th>prénom</th>
  					<th>mot de passe</th>
  					<th>promo</th>
  					<th>rang</th>
  				</tr>

			<?php
	  	$query = "SELECT * FROM users";
	  	$result = mysqli_query($connect, $query);
			while ($data = mysqli_fetch_assoc($result)) {
				if ($data['enregistre'] == 1) { ?>

					<tr>
						<td><?php echo $data['mail'] ?></td>
						<td><?php echo $data['nom'] ?></td>
						<td><?php echo $data['prenom'] ?></td>
						<td><?php echo $data['pwd'] ?></td>
						<td><?php echo $data['promo'] ?></td>
						<td><?php echo $data['rang'] ?></td>
						<td><a href="javascript:pop('modif_user.php?id=<?php echo $data['id_user'] ?>', 'modif', 'width=500,height=650')">modifier</a></td>
						<td><a href="javascript:pop('supp_user.php?id=<?php echo $data['id_user'] ?>', 'supp', 'width=600, height=300')">supprimer</a></td>
					</tr> <?php
				}
			} ?>
	
				</table>
			</article>
			
			<h2>Nouveau</h2>
			<article>
				<form action="inser_user.php" method="post">
					<table style="overflow-x:auto;">
			  		<tr>
			  			<th>mail</th>
			  			<th>nom</th>
			  			<th>prénom</th>
			  			<th>mot de passe</th>
			  			<th>promo</th>
			  			<th>rang</th>
			  		</tr>
						<tr>
							<td><input type="text" name="new_mail" required></td>
							<td><input type="text" name="new_nom" required></td>
							<td><input type="text" name="new_prenom" required></td>
							<td><input type="password" name="new_pwd" required></td>
							<td><input type="text" name="new_promo" required></td>
							<td><input type="text" name="new_rang" required></td>
							<td><button type="submit" name="bt_ajouter" required>Ajouter</button></td>
						</tr>
					</table>
				</form>
			</article>
		</section> <?php
	}

include("footer.php")
?>

