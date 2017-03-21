
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Exo7</h1>
      <?php
      function minMaj($age, $genre){
        if ($age >= 18){
          $majorite = "majeur(e)";
        }else{
          $majorite = "mineur(e)";
        }
        if ($genre == "Homme"){
          $civilit = "Vous etes un Homme";
        }elseif($genre == "Femme"){
          $civilit = "Vous etes une Femme";
        }
        return $civilit.$majorite;
      };

      echo minMaj(18, "Femme");
      ?>
  </body>
</html>
