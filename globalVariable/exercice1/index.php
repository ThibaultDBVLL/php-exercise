<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body class="body">
    <h1>Exo1</h1>

      <?php
      echo 'User Agent :'." ".$_SERVER["HTTP_USER_AGENT"].'</br>';
      echo 'ADDR :'." ".$_SERVER["REMOTE_ADDR"].'</br>';
      echo 'Serveur :'." ".$_SERVER["SERVER_NAME"].'</br>';

      ?>
  </body>
</html>
