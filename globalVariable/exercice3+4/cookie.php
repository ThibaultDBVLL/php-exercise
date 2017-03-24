<?php
setcookie('login', $_POST['login'], time()+360);
setcookie('password', $_POST['password'], time()+360);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cookie</title>
  </head>
  <body>
<?php
echo($_COOKIE['login']." ");
echo($_COOKIE['password']);
?>
</body>
</html>
