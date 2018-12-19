<?php
class ogrenci{
    public $no;
    public $adsoyad;

    function yazdir(){
        print($this->no . "<br />" . $this->adsoyad . "<br />");
    }
}

$ogr01 = new ogrenci();
$ogr01->no = 37483;
$ogr01->adsoyad = "Deneme 1";
$ogr01->yazdir();

$ogr02 = new ogrenci();
$ogr02->no = 34354;
$ogr02->adsoyad = "Deneme 2";
$ogr02->yazdir();


$ogr03 = new ogrenci();
$ogr03->no = 88952;
$ogr03->adsoyad = "Deneme 3";
$ogr03->yazdir();
?>