 <?php

session_start();
include_once("connexion_bdd.php");
$connect = connexion_bdd();

 if (isset($_POST['bt_save'])) {
	$id_user = $_SESSION['id_user'];
	$mail =  $_POST['mail'];
	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$pwd = $_POST['pwd'];
	$promo = $_POST['promo'];

	//Mise à jour des informations utilisateur
	$query = sprintf("UPDATE users SET mail='%s',nom='%s',prenom='%s', pwd='%s', promo='%s' WHERE id_user='$id_user'",  
		mysqli_real_escape_string($connect, $mail),
		mysqli_real_escape_string($connect, $nom),
		mysqli_real_escape_string($connect, $prenom),
		mysqli_real_escape_string($connect, $pwd),
		mysqli_real_escape_string($connect, $promo)
	);  
	mysqli_query($connect, $query);
	header('Location: mon_compte.php');
}

?>