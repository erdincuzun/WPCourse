<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>
<h2>Gelenler</h2>
<?php
$u_name = "user"; 
$pass = "123";
if($u_name == $_POST["username"] && $pass == $_POST["password"]){
  print("Login başarılı");
  setcookie("username", $_POST["username"], time() + (86400 * 30), "/");
}
else
  print("Login başarısız");
?> 

<?php
include "footer.php";
yaz();
?>
</body>
</html>