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
        $sql = "INSERT INTO rehber (ad, soyad, bolum_id, silindimi) VALUES (?,?,1,0)";
        $temp = $conn->prepare($sql);
        $temp->bind_param("ss", $ad, $soyad);
        $temp->execute();
        $temp->close();        
        }
        else 
            echo 'POST verileri gelmedi';
        
    } 
    $conn->close();        
    ?>
</body>
</html>
