<?php
class kisi{
    public $adsoyad;

    function ad_yazdir(){
        print($this->adsoyad . "<br />");
    }
}
class ogrenci extends kisi{
    public $no;
    
    function no_yazdir(){
        print($this->no . "<br />");
    }
}

$ogr01 = new ogrenci();
$ogr01->no = 37483;
$ogr01->adsoyad = "Deneme 1";
$ogr01->ad_yazdir();
$ogr01->no_yazdir();
?>