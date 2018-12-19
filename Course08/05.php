<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

<?php
include 'ayar.php';
$cn = new mysqli($host, $username, $pw, $db);
$cn->set_charset("utf8"); //Türkçe karakter desteği
if($cn->connect_error)
    die("Hata oluştu");

$sql = "select rehber_id, ad, soyad from rehber"; //values bölüme gelen verilen post ile alınır

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
    
</body>
</html>

