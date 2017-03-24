<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>exo2-page1</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <?php
    session_start();
    $_SESSION['nom']='Torvalds';
    $_SESSION['prenom']='Linus';
    $_SESSION['age']='47';
    ?>
  </head>
  <body>
    <h1>exo2-page1</h1>
    <a href="index2.php">Si tu ne sais pas qui a créé Linux, clique ici!</a>
  </body>
</html>
