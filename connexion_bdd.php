<?php
	$users = "users";
	$news = "news";


	function connexion_bdd() {
		$server = "localhost";
		$user = "root";
		$pwd = "";
		$db = "asimov";

		$connect = mysqli_connect($server, $user, $pwd, $db);
		return $connect;
	}
?>