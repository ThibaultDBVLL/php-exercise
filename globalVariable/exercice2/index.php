<? php
session_start();
$_SESSION['nom']='Torvalds';
$_SESSION['prenom']='Linus';
$_SESSION['age']=47;
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body class="body">
    <h1>Exo2</h1>
      <p>Bonjour <?php echo $_SESSION['prenom']." ".$_SESSION['nom'] ?> vous êtes agé de <?php $_SESSION['age'] ?> ans </p>

    <a href="index2.php">Page2</a>
  </body>
</html>
