<html>
<body>
<?php
$vize = 70;
$odev = 75;
$final = 50;

$basarinotu = $vize*0.3+$odev*0.2+$final*0.5;

if($final>=50 && $basarinotu>=60)
	echo "Tebrikler: ".$basarinotu;
else
	echo "Geçmiþ olsun: ".$basarinotu;
	

?>

</body>
</html>