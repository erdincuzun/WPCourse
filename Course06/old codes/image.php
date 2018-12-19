<html>
<body>
<?php
echo "<table border=\"2\" width=\"400px\">";

for($i=1;$i<=4;$i++)
{
if($i%2==1)
echo "<tr>";
echo "<td align=center>";
echo "<a href='img\\0".$i.".jpg'>";
echo "<img src='img\\0".$i.".jpg' height=70px width=70px>";
echo "</a>";
echo "</td>";


if($i%2==0)
echo "</tr>";

}

echo "</table>";
?>
</body>
</html>