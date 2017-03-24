<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exo2-index2</title>
  </head>
  <body>
    <h1>Exo2-page2</h1>
    <?php
    session_start();
    $_SESSION['nom'];
    $_SESSION['prenom'];
    $_SESSION['age'];
    ?>
    <p>L'inventeur de Linux est : <?php echo $_SESSION["prenom"]." ".$_SESSION["nom"] ?> qui est agé de <?php  echo $_SESSION["age"] ?> ans </p>


  </body>
</html>
