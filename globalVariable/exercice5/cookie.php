<?php
setcookie('login', $_POST['login'], time()+360);
setcookie('motdepasse', $_POST['login'], time()+360);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cookie</title>
  </head>
  <body>
    <h1>Cookie!</h1>
<?php
echo($_COOKIE['login']);
echo($_COOKIE['modepasse']);
?>
</body>
</html>
