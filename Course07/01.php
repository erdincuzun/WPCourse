<?php
class ogrenci{
    public $no;
    public $adsoyad;
}

$ogr01 = new ogrenci();
$ogr01->no = 37483;
$ogr01->adsoyad = "Deneme 1";
print($ogr01->no . "<br />" . $ogr01->adsoyad . "<br />");

$ogr02 = new ogrenci();
$ogr02->no = 34354;
$ogr02->adsoyad = "Deneme 2";
print($ogr02->no . "<br />" . $ogr02->adsoyad. "<br />");


$ogr03 = new ogrenci();
$ogr03->no = 88952;
$ogr03->adsoyad = "Deneme 3";
print($ogr03->no . "<br />" . $ogr03->adsoyad. "<br />");
?>