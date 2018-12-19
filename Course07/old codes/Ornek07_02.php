<?php

class Daire
{
    private $yaricap;

    function __construct($r) {
         $this->set_Yaricap($r);
    }
    
    function set_Yaricap($r)
    {
        if($r<=0)
            $this->yaricap = 1;
        else
            $this->yaricap = $r;            
    }
    
    function get_Yaricap()
    {
        return $this->yaricap;
    }
            
    function Alan()
    {
        return 3.14 * $this->yaricap * $this->yaricap;
    }    
}

$nesne01 = new Daire(5);
echo $nesne01->Alan();

$nesne02 = new Daire(-1);
echo "<br/>".$nesne02->get_Yaricap();
echo "<br/>".$nesne02->Alan();
$nesne02->set_Yaricap(7);
echo "<br/>".$nesne02->Alan();


?>

