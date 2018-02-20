<?php

if (isset($_SESSION['id_user'])) {?>
	<div class="nav">
		<a href="index.php" class="home">Home</a>
		<a href="news.php">Actualités</a>
		<a href="#">Evénements</a>
		<a href="#">Code_Space()</a>
		<a href="mon_compte.php?id=<?php echo $_SESSION['id_user'] ?>">Mon compte</a>
		<?php
		if ($_SESSION['rang'] == "ADMIN")
			echo "<a href=\"administration.php\">Administration</a>";
		?>
		<a href="deconnexion.php">Déconnexion</a>
	</div> <?php
}
else { ?>
	<div class="nav">
      <a href="#" class="home">Home</a>
      <a href="#">Actualités</a>
      <a href="#">Evénements</a>
      <a href="#">Code_Space()</a>
      <a href="auth.php">Login</a>
    </div> <?php
}

?>