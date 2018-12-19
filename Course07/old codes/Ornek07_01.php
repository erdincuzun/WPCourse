<?php

class Kisi
{
    public $adi = "Merhaba Sinif Dunyasi";
}

$nesne01 = new Kisi();
echo $nesne01->adi;
$nesne02 = new Kisi();
$nesne02->adi="Merhaba Dunya";
echo "\n<br/>".$nesne02->adi;
?>

