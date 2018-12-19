<html>
<body>
<?php

class deneme
{
	function __construct($baslangic)
	{
		//echo "$baslangic çalýþtý.";//çalýþýr.
		echo $baslangic." çalýþtý.<br/>";//çalýþýr.
	}
}

$nesne1 = new deneme("Yapýcý 1");
$nesne2 = new deneme("Yapýcý 4");
$nesne3 = new deneme("Yapýcý 2");
$nesne4 = new deneme("Yapýcý 3");

?>

</body>
</html>