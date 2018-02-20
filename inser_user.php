<?php include_once("connexion_bdd.php");

if (isset($_POST['bt_ajouter'])) {
	$new_mail = $_POST['new_mail'];
	$new_nom = $_POST['new_nom'];
	$new_prenom = $_POST['new_prenom'];
	$new_pwd = $_POST['new_pwd'];
	$new_promo = $_POST['new_promo'];
	$new_rang = $_POST['new_rang'];
	$new_enregistre = 1;

	$connect = connexion_bdd();
	//Mise à jour des informations utilisateur
	$query = sprintf("INSERT INTO users (nom, prenom, mail, pwd, promo, rang, enregistre) VALUES ('%s', '%s', '%s', '%s', '%s', '%s', '%d');",  
	mysqli_real_escape_string($connect, $new_nom),
	mysqli_real_escape_string($connect, $new_prenom),
	mysqli_real_escape_string($connect, $new_mail),
	mysqli_real_escape_string($connect, $new_pwd),
	mysqli_real_escape_string($connect, $new_promo),
	mysqli_real_escape_string($connect, $new_rang),
	mysqli_real_escape_string($connect, $new_enregistre));  
	mysqli_query($connect, $query);
	header('Location: administration.php');
}

?>