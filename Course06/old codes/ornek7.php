<html>
<body>
<?php

class Temel
{
	public $sayi1 = 5; 	
	private $sayi2 = 10;
	protected $sayi3 = 15;
}

class MirasYer extends Temel 
{
	function bilgi()
	{
		echo "Public degisken:".$this->sayi1."<br />";
		echo "Private degisken:".$this->sayi2."<br />";//hatal� bilgi i�ermez
		echo "Protected degisken:".$this->sayi3."<br />";
	}
}


$nesne1 = new MirasYer();
$nesne1->bilgi();

$nesne2 = new Temel();
echo "Public degisken:".$nesne2->sayi1."<br />";
echo "Protected degisken:".$nesne2->sayi3."<br />";//hatal�
echo "Private degisken:".$nesne2->sayi2."<br />";//hatal�

?>


</body>
</html>