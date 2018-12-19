<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <?php
    $conn = new mysqli("localhost", "root", "", "telefonrehberi");    
    if($conn->connect_error)
        echo $conn->connect_error;
    else{
        $sql = "INSERT INTO rehber (ad, soyad, bolum_id, silindimi) VALUES ('Deneme','MySQLi',1,0)";
        if($conn->query($sql) === true)
            echo 'Insert yapıldı';
        else 
            echo 'Insert hatası';
    }         
    $conn->close();   
    ?>
</body>
</html>
