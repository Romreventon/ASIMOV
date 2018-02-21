<?php
	session_start();
	include("header.php");
	include_once("connexion_bdd.php");

	include("menu_nav.php");

	$id_user = $_SESSION['id_user'];
	$connect = connexion_bdd();
	$result = mysqli_query($connect, "SELECT * FROM ". $news ." ORDER BY id_news DESC"); ?>

	<section>
    	<h2>Actualités</h2> <?php

    if ($_SESSION['rang'] == "ADMIN")
    	echo "<a href=\"add_news.php\" style=\"float: right; padding-right: 2%;\"><button>nouveau</button></a>";

	while ($data = mysqli_fetch_assoc($result)) {?>
      	<article style="overflow: auto;"> 
        <h3><?php echo $data['titre'];  ?></h3> 
        <p><?php
          echo $data['date'];
          if ($_SESSION['rang'] == "ADMIN") {?>
            <a href="javascript:pop('supp_news.php?id_news=<?php echo $data['id_news'] ?>', 'supp', 'width=600, height=300')">supprimer</a> <?php 
          } ?>
        </p> <?php
        if ($data['img'] != "") {
          if ($data['type'] == "journal") {?>
          	<img src="img_news/<?php echo $data['img'] ?>" width="60%" style="float: left; margin-left: 2%; margin-right: 2%; margin-bottom: 2%;"> <?php
          }
          else { ?>
          	 <img src="img_news/<?php echo $data['img'] ?>" width="60%" style="position: relative; left: 20%;"> <?php
          } 
        }?>
        <p><?php echo $data['corps'] ?></p>
      </article>
      <hr />
   <?php
	} ?>
	</section>
	<?php

  include("footer.php");
  ?>