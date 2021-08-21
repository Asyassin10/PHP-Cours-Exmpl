<?php



 class phone {
     //properties
     public $ram;
     public $space;
     public $color;
     private $lock;
      
     function myphone($lo){
         $this->lock = sha1($lo);
         
     }
 
 }
 $iphone = new phone();
 $iphone->ram = "8gb";
 $iphone->space = "200GB";
 $iphone->color = "black";
 $iphone->myphone("marwa");
 //$iphone->lock = "dieqdqrq";
 
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
 

 
 