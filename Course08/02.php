<?php
include 'ayar.php';
$cn = new mysqli($host, $username, $pw, $db);
if($cn->connect_error)
    die("Hata oluştu");

$sql = "INSERT INTO `rehber` (`ad`, `soyad`, `bolum_id`) 
VALUES ('Test 2', 'Deneme 2', '23')"; //values bölüme gelen verilen post ile alınır

if($cn->query($sql)){
    print("Ekleme başarılı ile yapıldı.");
    print("Son eklenen pk değeri: " . $cn->insert_id);
} 
else
    print("Ekleme sırasında hata oluştu");

$cn->close();
?>