
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Exo6</h1>
      <?php
        function personne($nom, $prenom, $age){
          return "Bonjour ".$nom." ".$prenom." "."tu as ".$age."ans!";
        }
        echo personne("Stephen", "King", "79");
      ?>
  </body>
</html>
