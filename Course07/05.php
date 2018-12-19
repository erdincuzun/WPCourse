<?php
class kisi{
    public $adsoyad;

    function ad_yazdir(){
        print($this->adsoyad . "<br />");
    }
}
class ogrenci extends kisi{
    public $no;
    private $vize;
    private $final;

    function set_vize($v){
        if ($v < 0)
            $this->vize = 0;
        else
            $this->vize = $v;
    }

    function set_final($f){
        if ($f < 0)
            $this->final = 0;
        else
            $this->final = $f;
    }
    
    function get_vize(){
        return $this->vize;
    }

    function get_final(){
        return $this->final;
    }

    function no_yazdir(){
        print($this->no . "<br />");
    }

    function hesapla(){
        return $this->vize*0.3 + $this->final*0.7;
    }

    function __toString()
    {
        return "Bu bir öğrenci: " . $this->no;
    }
}

$ogr01 = new ogrenci();
$ogr01->no = 37483;
$ogr01->adsoyad = "Deneme 1";
$ogr01->ad_yazdir();
$ogr01->no_yazdir();

$ogr01->set_vize(90);
$ogr01->set_final(70);
print($ogr01->get_vize() . ", " . $ogr01->get_final() . ", " . $ogr01->hesapla());

print($ogr01);
?>