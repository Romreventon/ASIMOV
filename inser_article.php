<?php 
session_start();
include_once("connexion_bdd.php");

if (isset($_POST['bt_inser_art'])) {
	$titre = $_POST['titre'];
	$date = date("Y-m-d H:i:s");
	$corps = $_POST['corps'];
	$img = $_FILES['userfile']['name'];
	$type = $_POST['type'];

	$connect = connexion_bdd();
	if (!empty($img)) {
		$dossier = 'img_news/';
		$fichier = basename($_FILES['userfile']['name']);
		$taille_maxi = 10000000; // 10 MB
		$taille = filesize($_FILES['userfile']['tmp_name']);
		$extensions_autorisees = array('.png', '.gif', '.jpg', '.jpeg');
		$extension = strrchr($_FILES['userfile']['name'], '.');
		if(!in_array($extension, $extensions_autorisees)) //Si l'extension n'est pas dans le tableau
	    	$_SESSION['upload_error'] = 'Vous devez uploader un fichier de type png, gif, jpg, ou jpeg';
	    if ($taille > $taille_maxi)
	    	$_SESSION['upload_error'] = "Le fichier est trop gros ! (15 MB Max)";

		if (!isset($_SESSION['upload_error']) || $_SESSION['upload_error'] == "") {
			move_uploaded_file($_FILES['userfile']['tmp_name'], $dossier . $fichier); //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
			$query = sprintf("INSERT INTO ". $news ." (titre, date, corps, img, type) VALUES ('%s', '%s', '%s', '%s', '%s');",  
			mysqli_real_escape_string($connect, $titre),
			mysqli_real_escape_string($connect, $date),
			mysqli_real_escape_string($connect, $corps),
			mysqli_real_escape_string($connect, $img),
			mysqli_real_escape_string($connect, $type));  
			mysqli_query($connect, $query);
			header('Location: news.php');
		}
		else
			header('Location: add_news.php');
	}
	else {
		$query = sprintf("INSERT INTO ". $news ." (titre, date, corps, img, type) VALUES ('%s', '%s', '%s', '%s', '%s');",  
			mysqli_real_escape_string($connect, $titre),
			mysqli_real_escape_string($connect, $date),
			mysqli_real_escape_string($connect, $corps),
			mysqli_real_escape_string($connect, ""),
			mysqli_real_escape_string($connect, $type));  
			mysqli_query($connect, $query);
			header('Location: news.php');
	}
	
}

?>