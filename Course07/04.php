<?php
class kisi{
    public $adsoyad;

    function ad_yazdir(){
        print($this->adsoyad . "<br />");
    }
}
class ogrenci extends kisi{
    public $no;
    public $vize;
    public $final;
    
    function no_yazdir(){
        print($this->no . "<br />");
    }

    function hesapla(){
        return $this->vize*0.3 + $this->final*0.7;
    }
}

$ogr01 = new ogrenci();
$ogr01->no = 37483;
$ogr01->adsoyad = "Deneme 1";
$ogr01->ad_yazdir();
$ogr01->no_yazdir();

$ogr01->vize = 90;
$ogr01->final = -70;
print($ogr01->hesapla());
?>