<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>
<h2>Gelenler</h2>
<?php
if(!isset($_COOKIE["username"])) {
  echo "Cookie is not set!";
} else {
  echo "Cookie is set!<br>";
  echo "Value is: " . $_COOKIE["username"];
}
?> 

<?php
include "footer.php";
yaz();
?>
</body>
</html>