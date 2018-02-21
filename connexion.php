<?php
	session_start();
	include_once "connexion_bdd.php";

	if (isset($_POST["bt_connex"])) {
		// récupère les infos de connexion de l'utilisateur
		$mail = $_POST["mail"];
		$pwd = $_POST["pwd"];

		$connect = connexion_bdd();
		
		if (!$connect) {
			echo "Connexion à la base de données impossible ! ";
			echo "<a href=\"index.php\">retour</a>";
		}
		else {
			$query = "SELECT * FROM ". $users;
			$result = mysqli_query($connect, $query);
			
			while ($data = mysqli_fetch_assoc($result)) {
				if ($mail == $data["mail"] && $pwd == $data["pwd"]) {
					if ($data["enregistre"] == 1) {
						$_SESSION['id_user'] = $data["id_user"];
						$_SESSION['rang'] = $data["rang"];
						$_SESSION['login_error'] = 0;
						break;
					}
					else {
						$_SESSION['login_error'] = 1;
						$_SESSION['inscrip_valide'] = 0;
						break;
					}
				}
				else
					$_SESSION['login_error'] = 1;
			}

			if ($_SESSION['login_error'] == 0)
				header('Location: index.php');
			else
				header('Location: auth.php');
		}
	}
?>