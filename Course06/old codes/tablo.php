<html>
<body>
<?php
class Tablo
{
	private $satir;
	private $sutun;
	function __construct($sa, $su)
	{
		$this->satir = $sa;
		$this->sutun = $su;
	}
	
	function TabloCiz()
	{
		$temp = "<table border=\"2\" width=\"100%\">";	
		for($i=0;$i<$this->satir;$i++)
		{
		$temp .= "<tr>";
		for($j=0;$j<$this->sutun;$j++)
		{
		$temp .= "<td>".$i."/".$j;
		$temp .= "</td>";
		}
		$temp .= "</tr>";
		}
		$temp .= "</table>";		
		return $temp;
	}
	
}

$nesne1 = new Tablo(15,13);
echo $nesne1->TabloCiz();
?>


</body>
</html>