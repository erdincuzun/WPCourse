<?php
    $conn = new mysqli("localhost", "root", "", "telefonrehberi");    
    if($conn->connect_error)
        echo $conn->connect_error;
    else{       
        $aranan = $_GET["q"];
        $sql = "SELECT rehber_id, ad, soyad FROM rehber Where ad like '%".$aranan."%' OR soyad like '%".$aranan."%'"; 
        $sonuc = $conn->query($sql);
        if($sonuc->num_rows > 0)
        {
            $html_temp = "<table border=1>";            
            while ($satir = $sonuc->fetch_assoc())
                $html_temp .= "<tr><td>".$satir["rehber_id"]."</td><td>".$satir["ad"]."</td><td>".$satir["soyad"]."</td></tr>";           
            $html_temp .= "</table>";
            
            echo $html_temp;
        }
        else
            echo "Kayıt yok!";         
    } 
    $conn->close();        
?>