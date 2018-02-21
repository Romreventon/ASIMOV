<!DOCTYPE html>
<html>
  <head>     
    <meta charset="UTF-8">
    <title>ASIMOV</title>
    <link href="monstyle.css" rel="stylesheet" media="all">
  </head>

  <body>
  	<?php include_once("connexion_bdd.php");
  	  			  			


  	if (isset($_POST['bt_supp_news'])) {
  		if ($_POST['supp'] == "oui") {
  			$id_news = $_GET['id_news'];
  			$connect = connexion_bdd();
        $result = mysqli_query($connect, "SELECT img FROM ". $news ." WHERE id_news=$id_news");
        $data = mysqli_fetch_assoc($result);
        if ($data['img'] != "") {
          $file = "img_news/". $data['img'];
          chmod($file, 0777);
          unlink($file);
        }
        mysqli_query($connect, "DELETE FROM ". $news ." WHERE id_news=$id_news");
        ?>
        <script type="text/javascript">
          window.opener.location.reload();//recharge la page de l'appelant de la popup
          window.close();
        </script> <?php
  		}
  		else { ?>
			<script type="text/javascript">
		window.opener.location.reload();//recharge la page de l'appelant de la popup

				window.close();
			</script>	
  		<?php	
  		}
  	}
  	?>
  	<h2 class="h2_white">Voulez-vous vraiment supprimer cette news ?</h2><br/>
  	<div class="form_center">
  	<form action="#" method="post">
  		<input type="radio" name="supp" value="oui" checked>Oui
  		<input type="radio" name="supp" value="non">Non<br/><br/>
  		<button type="submit" name="bt_supp_news">Valider</button>
  	</form>
  </div>
  </body>
</html>