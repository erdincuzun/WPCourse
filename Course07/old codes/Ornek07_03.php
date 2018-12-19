<?php
class Ana
{
    public $x = "1";    
    private $y = "2";    
    protected $z = "3";    
}

class Cocuk extends Ana
{
    function bilgi() {
        echo $this->x;
        //echo $this->y;//ulaşılamaz.
        echo $this->z;
    }
}

$nesne1 = new Cocuk();
echo $nesne1->bilgi();
echo $nesne1->x;
//echo $nesne1->z;//ulaşılamaz. protected bir elemana sadece türeyen sınıf ulaşır.
?>

