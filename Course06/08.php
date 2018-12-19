<!DOCTYPE html>
<html>
<head>
    <title>Merhaba</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<table class="table table-hover">
    <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Resim</th>
      <th scope="col">Markası</th>
      <th scope="col">Yaşı</th>
      <th scope="col">Modeli</th>
    </tr>
    </thead>

    <?php       
        $cars = array
        (
        array("Volvo",22,18),
        array("BMW",15,13),
        array("Saab",5,2),
        array("Land Rover",17,15)
        );
        
        $toplam = count($cars);
        $temp = "<tbody>\n";
        for($satir = 0; $satir < $toplam; $satir++){
            $temp .= "<tr>";
            $temp .= "<th scope=\"row\">".($satir + 1)."</th>\n";
            $temp .= "<th><img src=\"img/0".($satir + 1).".png\" alt=\"".$cars[$satir][0] ."\" height=\"42\" width=\"42\"></th>\n";
            $temp .= "<td>".$cars[$satir][0] . "</td>\n";
            $temp .= "<td>".$cars[$satir][1] . "</td>\n";
            $temp .= "<td>".$cars[$satir][2] . "</td>\n";
            $temp .= "</tr>";
        }
        $temp .= "</tbody>\n";
        print($temp);
    ?>
</table>
</body>
</html>