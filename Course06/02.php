<!DOCTYPE html>
<html>
<head>
    <title>Merhaba</title>
</head>
<body>
    <?php
    $degisken = "Merhaba \"PHP\" Değişken";
    $sayi1 = 123;
    $sayi2 = 3.4;
    $degisken2 = "degisken";

    print($degisken . "<br />");
    print(gettype($degisken) . "<br />");
    print($sayi1 . "<br />");
    print(gettype($sayi1) . "<br />");
    print($sayi2 . "<br />");
    print(gettype($sayi2) . "<br />");
    print(($sayi1 + $sayi2) . "<br />");
    print($$degisken2 . "<br />");

    $degisken = 345;    
    print($degisken . "<br />");
    print(gettype($degisken) . "<br />");
    ?>
</body>
</html>