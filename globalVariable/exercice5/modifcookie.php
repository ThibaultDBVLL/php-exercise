<?php
session_start();
setcookie('login');
setcookie('password');
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Modifcookie</title>
  </head>
  <body>
    <?php
      echo"<form action='cookie.php' method='POST'>
      <label for='login'>Login :</label>
      <input type='text'name='login' value=".$_COOKIE['login'].">
      <label for='password'>Password :</label>
      <input type='text' name='password' value=".$_COOKIE['password'].">
      <button type='submit' value='Modifier'>
    </form>"

    ?>
    </form>
  </body>
</html>
