<?php

class phone {
     //properties
     public $ram;
     public $space;
     public $color;
      
     function __construct($r,$c,$s)
     {
         $this->space = $s;
         $this->ram   =$r;
         $this->color = $c;
 }
}
 class sony extends phone{
     public $camera ;
     
     function sony1($r,$c,$s,$cam){
        $this->space = $s;
        $this->ram   =$r;
        $this->color = $c;
        $this->camera = $cam;
        
    }
     
 }
 $iphone = new phone('1234',"2gb","red","100gb");
 //$iphone->myphone('1234',"2gb","red","100gb");
 
 echo "<pre>";
 var_dump($iphone);
 echo "</pre>";
 
 echo '</br>';
 
 echo "<pre>";

$sony = new sony();
$sony->sony1('1234',"2gb","red","100gb","25mb");
//$iphone8->own();
echo "<pre>";
var_dump($sony);
echo "</pre>";
 

 
 