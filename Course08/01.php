<?php
include 'ayar.php';
//OOP bağlantı
print($host);
$cn = new mysqli($host, $username, $pw, $db);
if($cn->connect_error)
    die("Hata oluştu");

print("Bağlantı ok!");
$cn->close();

// foınksiyon bazlı bağlantı
// $link = mysqli_connect("127.0.0.1", "root", "", "telefonrehberi");
// if (!$link){
//     print("Bir hata oluştu.");
//     exit;
// }

// print("Bağlantı ok!");
// mysqli_close($link);
?>