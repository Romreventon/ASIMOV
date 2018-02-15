<?php
  session_start();
?>

<!DOCTYPE html>
<html>
  <head>     
    <meta charset="UTF-8">
    <title>ASIMOV</title>
  </head>

  <body>

    <?php
      $news = array(1 => array('auteur' => 'christophetd', 'titre' => 'Ma première news', 'contenu' => 'Test'));
    ?>
    <?php
      $contenu_fichier_news = file_get_contents('news.txt');
    ?>
    <?php
      $liste_news = unserialize($contenu_fichier_news);
    ?>
    <?php
      echo '<pre>'.print_r($liste_news, true).'</pre>';
    ?>

    <?php

    $liste_news = unserialize(file_get_contents('news.txt'));
    if(!empty($liste_news)) {
      foreach($liste_news as $id => $news) {
        $news = array_map('htmlspecialchars', $news);
        ?>
        <h2><?php echo $news['titre'] ?></h2>
          <i>Ajout&eacute;e par <?php echo $news['auteur'] ?></i> <br />
          <p><?php echo $news['contenu'] ?></p>
          <i><a href="supprimer_news.php?id=<?php echo $id ?>" onclick="return confirm('Etes-vous s&ucirc;r de vouloir supprimer cette news ?');">Supprimer</a>
          &nbsp;
          <a href="editer_news.php?id=<?php echo $id ?>">Editer</a></i>
          <br /><br />
        <?php
      }
    }
    else {
      echo 'Il n\'y a aucune news pour le moment<br />';
    }
    echo '<a href="ajouter_news.php">Ajouter une news</a>';
    ?>


  </body>
</html> 