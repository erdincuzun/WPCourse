<?php
$ad = "";
if(isset($_POST["ad"]))
    $ad = $_POST["ad"];
?>
<form action="<?php Echo($_SERVER['PHP_SELF']); ?>" method="post"> 
    <input type="text" name="ad" value="<?php echo($ad); ?>">
    <input type="submit">
</form>

<br/>
<?php
echo $ad;
?>
