<?php
  session_start();
?>

<!DOCTYPE html>
<html>
  <head>     
    <meta charset="UTF-8">
    <title>ASIMOV</title>
    <link href="monstyle.css" rel="stylesheet" media="all">
  </head>

  <body>
    <?php
    if (isset($_SESSION['id'])) {
    ?>
      <div class="nav">
        <a href="#" class="home">Home</a>
        <a href="#">Actualités</a>
        <a href="#">Evénements</a>
        <a href="#">Code_Space()</a>
        <a href="#">Mon compte</a>
      </div>
    <?php
    } else {
    ?>
      <div class="header"><img src="Logo_ASIMOV.png" width="5%"></div>
      <div class="nav">
        <a href="#" class="home">Home</a>
        <a href="#">Actualités</a>
        <a href="#">Evénements</a>
        <a href="#">Code_Space()</a>
        <a href="#">Mon compte</a>
        <a href="#" onclick="document.getElementById('id01').style.display='block'" style="width:auto";>Login</a>
      </div>

        <div id="id01" class="modal">
          
          <form class="modal-content animate" action="/action_page.php">
            <div class="imgcontainer">
              <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
              <img src="img_avatar2.png" alt="Avatar" class="avatar">
            </div>

            <div class="container">
              <label for="uname"><b>Username</b></label>
              <input type="text" placeholder="Enter Username" name="uname" required>

              <label for="psw"><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="psw" required>
                
              <button type="submit">Login</button>
              <label>
                <a href="inscription.html">Inscription</a>
              </label>
            </div>

            <div class="container" style="background-color:#f1f1f1">
              <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
              <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
          </form>
        </div>

        <script>
        // Get the modal
        var modal = document.getElementById('id01');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
        </script>
      

    <?php
    }
    ?>
    <section>
      <h2>
        Les actus !
      </h2>
      <article>
        <h3>
          Les petits pédestres
        </h3>
        <p>
          On se promenait tout deux et puis..... MERDE ! 
        </p>
      </article>
      <hr />
      <article>
        <h3>
          Romanichou
        </h3>
        <p>
          Romain !!!!!
        </p>
      </article>
      
    </section>

  </body>
</html> 