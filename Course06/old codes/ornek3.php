<html>
<body>
<?php
$tarih = getdate();

//echo $tarih[year];

foreach ($tarih as $key=>$val) 
{
print $key.'='.$val.'<br>';
}

echo $tarih['weekday'];
	

?>

</body>
</html>