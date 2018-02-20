<?php
	session_start();
	include("header.php");
	include_once("connexion_bdd.php");

	include("menu_nav.php");

	$id_user = $_SESSION['id_user'];
	$connect = connexion_bdd();
	$result = mysqli_query($connect, "SELECT * FROM news"); ?>

	<section>
    	<h2>Actualités</h2> <?php

    if ($_SESSION['rang'] == "ADMIN") {
    	echo "<a href=\"add_news.php\" style=\"float: right; padding-right: 2%;\"><img src=\"add_btn.png\" width=\"40px\"></a>";
    }

	while ($data = mysqli_fetch_assoc($result)) {?>
      	<article>
        <h3><?php echo $data['titre'] ?></h3>
        <p><?php echo $data['date']; ?></p> <?php
        if ($data['type'] == "journal") {?>
        	<img src="<?php echo $data['img'] ?>" width="60%" style="float: left; margin-left: 2%; margin-right: 2%; margin-bottom: 2%;"> <?php
        }
        else { ?>
        	<img src="<?php echo $data['img'] ?>" width="60%" style="position: relative; left: 20%;"> <?php
        } ?>
        <p><?php echo $data['corps'] ?></p>
      </article>
      <hr />
   <?php
	} ?>
	</section>
	<?php

  include("footer.php");
  ?>