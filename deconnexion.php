<?php
	session_start();
	session_unset();
	//unset($_SESSION["mail"]);
	//unset($_SESSION["rang"]);
	session_destroy();
	header('Location: index.php');
?>