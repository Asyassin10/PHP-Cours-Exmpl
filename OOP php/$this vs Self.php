<?php
/*
self:
    -refer to current class.
    -access static members
    -not use [$]  because its not resposent a variable but present class const
    
$this:

    -refer to current object.
    -access non static members
    -use [$]  because its resposent a variable 
        


*/


 class phone {
     //properties
     public $ram;
     public $space;
     public $color;
          // const
          const NUM = 5;
      
     //methode
     function own(){
         if(strlen($this->color) < self::NUM){
             echo 'name not corect';
         }
         else{
             echo 'done';
         }
     }

     
 
 }
 $iphone = new phone();
 $iphone->ram="2gb";
 $iphone->space="20gb";
 $iphone->color="refsdfd";
 $iphone->own();
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
 

 
 