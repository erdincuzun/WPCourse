<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>
<h2>HTML Forms</h2>

<form method="POST" action="07.php">
  Kullanıcı ismi:<br>
  <input type="text" name="username">
  <br>
    Şifre:<br>
  <input type="password" name="password">
  <br><br>
  <input type="submit" value="Submit">
</form>  

<?php
include "footer.php";
yaz();
?>
</body>
</html>