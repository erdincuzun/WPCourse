<html>
<body>
<?php
$test = "Deneme";
echo $test."<br />";
echo gettype($test)."<br />";

$test2 = 123.4;
echo $test2."<br />";
echo gettype($test2);

echo '<br /><a href="http://www.w3schools.com">Visit W3Schools</a>';
echo "<br /><a href=\"http://www.w3schools.com\">Visit W3Schools</a>";
echo "<br /><br /><br /><br /><br />";

$oturum;

if(!isset($oturum)) 
{
print("Oturum'da tamamen boþ. yani null.<br />");
}

$oturum = 5;

if(!isset($oturum)) 
{
	print("Oturum'da tamamen boþ. yani null.");
}
else
{
	print("oturum deðiþkeninde: ".$oturum);
}

unset($oturum);

if(!isset($oturum)) 
{
	print("<br />Oturum'da tamamen boþ. yani null.");
}
else
{
	print("oturum deðiþkeninde: ".$oturum);
}

?>

</body>
</html>