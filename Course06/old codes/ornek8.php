<html>
<body>
<?php

class deneme
{
	function __construct($baslangic)
	{
		//echo "$baslangic �al��t�.";//�al���r.
		echo $baslangic." �al��t�.<br/>";//�al���r.
	}
}

$nesne1 = new deneme("Yap�c� 1");
$nesne2 = new deneme("Yap�c� 4");
$nesne3 = new deneme("Yap�c� 2");
$nesne4 = new deneme("Yap�c� 3");

?>

</body>
</html>