<?php



 class phone {
     //properties
     public $ram;
     public $space;
     public $color;
      
     function myphone($r,$s,$c){
         $this->ram     =$r;
         $this->space   =$s;
         $this->color   =$c;
         
         
     }
 
 }
 $iphone = new phone();
 $iphone->myphone("2gb","100gb","pink");
 
 echo "<pre>";
 var_dump($iphone);
 echo "</pre>";
 
 echo '</br>';
 
 echo "<pre>";

$iphone8 = new phone();
$iphone8->ram = "8gb";
$iphone8->space = "200GB";
$iphone8->color = "black";
//$iphone8->own();
echo "<pre>";
var_dump($iphone8);
echo "</pre>";
 

 
 