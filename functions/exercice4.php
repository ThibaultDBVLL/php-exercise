
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Exo4</h1>
      <?php
        function compareNombres($nb1, $nb2){
          if ($nb1 > $nb2){
            return('Le premier nombre est plus grand');
          }
          else if ($nb1 < $nb2){
            return('Le premier nombre est plus petit');
          }
          else{
            return('les deux nombres sont identiques');
          }
        }
        echo compareNombres(3, 4);
      ?>
  </body>
</html>
