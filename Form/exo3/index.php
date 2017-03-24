<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Exo3</h1>
    
      <form class="" action="user.php" method="get">
        <label for="name">Nom :</label>
        <input type="text" name="name" value=""> </br>
        <label for="firstName">Prenom :</label>
        <input type="text" name="firstName" value=""> </br>
        <input type="submit" name="" value="submit">
      </form>

      <?php
        echo $_GET["name"];
        echo $_GET["firstName"];
      ?>
  </body>
</html>
