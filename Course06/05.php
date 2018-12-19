<!DOCTYPE html>
<html>
<head>
    <title>Merhaba</title>
</head>
<body>
    <?php
    $vize = 85;
    $final = 50;

    $ort = round(0.3 * $vize + 0.7 * $final);
    if($ort >= 60 && $final >= 50)
        print("Başarılı, " . $ort);
    else
        print("Başarısız, " . $ort);
    ?>
</body>
</html>