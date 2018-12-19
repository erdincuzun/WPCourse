<?php
include 'ayar.php';
$cn = new mysqli($host, $username, $pw, $db);
$cn->set_charset("utf8"); //Türkçe karakter desteği
if($cn->connect_error)
    die("Hata oluştu");

$ara = $_GET["aranan"];
$sql = 'select rehber_id, ad, soyad from rehber 
where rehber_id like "%'.$ara.'%" or '.
'ad like "%'.$ara.'%" or '.
'soyad like "%'.$ara.'%"'; //values bölüme gelen verilen post ile alınır


$result = $cn->query($sql);
if($result->num_rows > 0){
    print('<table class="table table-hover">');
    print('<thead><tr><th scope="col">id</th><th scope="col">Ad</th><th scope="col">Soyad</th></tr></thead>');
    print('<tbody>');
    while($row = $result->fetch_assoc()){
        print('<tr>
        <td>'.$row["rehber_id"].'</td>
        <td>'.$row["ad"].'</td>
        <td>'.$row["soyad"].'</td>
        </tr>');
    }

    print('</tbody>
    </table>');
}    
else
    print("0 Kayıt");

$cn->close();
?>