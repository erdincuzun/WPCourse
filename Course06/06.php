<!DOCTYPE html>
<html>
<head>
    <title>Merhaba</title>
</head>
<body>
    <?php
    $tarih = getdate();
    foreach($tarih as $k => $v)
        print($k . " : " . $v . "<br />");
    
    print($tarih["mday"] . "<br />");
    print($tarih["hours"]. "<br />");
    ?>
</body>
</html>