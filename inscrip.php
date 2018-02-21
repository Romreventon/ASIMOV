<?php 

session_start();
include_once("connexion_bdd.php");

if (isset($_POST['bt_inscrip'])) {
	$mail = $_POST['mail'];
	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$pwd = $_POST['pwd'];
	$promo = $_POST['promo'];
	$rang = "USER";
	$enregistre = 0;

	$connect = connexion_bdd();
	//Mise à jour des informations utilisateur
	$query = sprintf("INSERT INTO ". $users ." (nom, prenom, mail, pwd, promo, rang, enregistre) VALUES ('%s', '%s', '%s', '%s', '%s', '%s', '%d');",  
	mysqli_real_escape_string($connect, $nom),
	mysqli_real_escape_string($connect, $prenom),
	mysqli_real_escape_string($connect, $mail),
	mysqli_real_escape_string($connect, $pwd),
	mysqli_real_escape_string($connect, $promo),
	mysqli_real_escape_string($connect, $rang),
	mysqli_real_escape_string($connect, $enregistre));  
	mysqli_query($connect, $query);
	$_SESSION['inscrip_done'] = 1;
	header('Location: auth.php');
}

?>