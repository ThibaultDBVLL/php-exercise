<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Exo2</h1>
      <?php
      echo $_GET['prenom']." ";
      echo $_GET['nom']." ";
      if(isset($age)){
        echo $age;
      }else{
        echo "age non renseigné";
      }
      ?>
  </body>
</html>
