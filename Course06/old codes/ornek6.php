<html>
<body>
<?php

class Daire
{
	private $yaricap; 
	
	function setYaricap($r)
	{		
		$this->yaricap = $r;	
	}
	
	function alanhesapla()
	{		
		return $this->yaricap * $this->yaricap * M_PI;
	}	
}

$nesne1 = new Daire();
$nesne1->setYaricap(15);
echo "Dairenin alan�: ".$nesne1->alanhesapla();
echo "<br/>".$nesne1->yaricap;//hatal� eri�im �ekli. default ayar: public

?>


</body>
</html>