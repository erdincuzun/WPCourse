<html>
<body>
<?php
function kare_al($sayi) 
{
return $sayi * $sayi;	
}

function yazdir ($metin, $boyut) {
	print ("<font size=\"$boyut\">$metin</font><br>");
}


echo kare_al(5);

for ($sayac = 1; $sayac <= 10 ; $sayac++ )
	yazdir("Beþiktaþ", $sayac);
?>


</body>
</html>