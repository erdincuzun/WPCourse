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
        if(isset($_POST["ad"]) && isset($_POST["soyad"]))
        {
        $ad = $_POST["ad"];
        $soyad = $_POST["soyad"];
        $sql = "INSERT INTO rehber (ad, soyad, bolum_id, silindimi) VALUES ('".$ad."','".$soyad."',1,0)";
        if($conn->query($sql) === true)
            echo 'Insert yapıldı';
        else 
            echo 'Insert hatası';            
        }
        else 
            echo 'POST verileri gelmedi';
        
    } 
    $conn->close();        
    ?>
</body>
</html>
