<?php
	session_start();
	include("header.php");
	include_once("connexion_bdd.php");

	include("menu_nav.php");

	$id_user = $_SESSION['id_user']; ?>

	<section>
    	<h2>Nouveau Article</h2> <?php

    if ($_SESSION['rang'] == "ADMIN") { 
      echo "<a href=\"news.php\" style=\"float: right; padding-right: 2%;\"><button>annuler</button></a>"; ?>
      <article>
        <?php
          if (isset($_SESSION['upload_error']) && $_SESSION['upload_error'] != "") {
          echo "<div class=\"error\">". $_SESSION['upload_error']. "</div><br/>";
          $_SESSION['upload_error'] = "";
        }
        ?>
        <form enctype="multipart/form-data" action="inser_article.php" method="post">
          <h3>Titre</h3>
          <input type ="text" name="titre" style="width: 100%; text-align: center;" required><br/>
          <h3>Corps</h3>
          <textarea name="corps" rows="10" style="width: 100%;" required></textarea>
          <h3>Type</h3>
          <select name ="type">
            <option value="journal" selected>journal</item>
            <option value="discontinu">discontinu</item>
          </select>
          <h3>Image</h3>
          <input type="hidden" name="MAX_FILE_SIZE" value="10000000">
          Choisir une image : <input name="userfile" type="file" /><br/><br/>
          <button type="submit" name="bt_inser_art">Ecrire</button>
        </form>
      </article> <?php
    } 
    else { ?>
      <div class="error">Vous n'êtes pas autorisé à consulter cette page !</div> <?php
    } ?>
	</section>

	<?php
  include("footer.php");
  ?>