<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1><?php echo("Exo 3")?></h1>
    <? php
    $a = 100;
    $b = 20;

    while($a > 10){
      $a*$b;
      echo($a*$b);
      echo(' ');
      --$a;
    }
    ?>
  </body>
</html>
