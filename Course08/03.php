<?php
include 'ayar.php';
$cn = new mysqli($host, $username, $pw, $db);
if($cn->connect_error)
    die("Hata oluştu");

$sql = "select rehber_id, ad, soyad from rehber"; //values bölüme gelen verilen post ile alınır

$result = $cn->query($sql);
if($result->num_rows > 0)
    while($row = $result->fetch_assoc()){
        print($row["rehber_id"]." ".$row["ad"]." ".$row["soyad"]."<br />");
    }
else
    print("0 Kayıt");

$cn->close();
?>