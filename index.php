<?php
  session_start();
  include("header.php");

  if (isset($_SESSION['id_user'])) {
    include("menu_nav.php"); ?>

    <section>
      <h2>
        Bienvennue !
      </h2>
      <article>
      <h3>Activités</h3>
        <ul>
          <li>Découverte et apprentissage de l'informatique et ses langages pour tous.</li>
          <li>Rencontre avec les anciens étudiants du département informatique et facilitation des recherches de stages et d'emplois pour ses membres.</li>
          <li>Organisation d'évènements liés aux jeux-vidéo et à l'informatique.</li>
        </ul>
      </article>
      <hr/>
      <article>
        <h3>Contacts</h3>
        <ul>
          <li>Président : Tristan BIARDEAU</li>
          <li>Secrétaire : Tristan BOUQUET</li>
          <li>Trésorier : Ewen CHAUDEMANCHE</li>
        </ul>
        <p>
          asimov.lemans@gmail.fr<br/>
          <a href="https://www.facebook.com/assoAsimov">https://www.facebook.com/assoAsimov</a>
        </p><br/>
      </article>
      
    </section>
    
  <?php
  }
  else
    header('Location: auth.php');

  include("footer.php");  
?>
