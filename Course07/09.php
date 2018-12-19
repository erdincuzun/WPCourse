<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>
<h2>logout</h2>
<?php
if(isset($_COOKIE["username"])) {
  unset($_COOKIE["username"]);
  setcookie("username", null, -1, '/');
  print("Cookie is closed");
} else {
  echo "Cookie is not set!<br>";
}
?> 

<?php
include "footer.php";
yaz();
?>
</body>
</html>