<!DOCTYPE html>
<html>
<head>
    <title>Merhaba</title>
</head>
<body>
    <?php       
        function topla($x = 0, $y = 0){
            return $x + $y;
        }

        print(topla(5,43) . "<br />");

        print(topla(5) . "<br />");

        print(topla() . "<br />");
    ?>
</body>
</html>