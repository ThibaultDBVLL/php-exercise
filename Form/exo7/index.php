<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Exo7</h1>
    <?php
      if(!$_POST["civilit"]||!$_POST["name"]||!$_POST["firstName"]){
      echo'<form class="" action="user.php" method="post">
        <select class="" name="civilit">
          <option value="Monsieur">Monsieur</option>
          <option value="Madame">Madame</option>
        </select> <br>
        <label for="name">Nom :</label>
        <input type="text" name="name" value=""> </br>
        <label for="firstName">Prenom :</label>
        <input type="text" name="firstName" value=""> </br>
        <input type="file" name="file"> </br>
        <input type="submit" name="" value="submit">
      </form>';
    }else{
        echo $_POST['civilit'];
        echo $_POST['name'];
        echo $_POST['firstName'];
        echo $_POST['file'];
      }
      ?>
  </body>
</html>
