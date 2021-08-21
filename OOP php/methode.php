<?php
 //class & object
 // class is a blue print that u can create object from
 //object is a member in the main application 
 //class has properties and methode
// varibel in class = [property]
// varible out clase = [varible]
//EXPL :
//blog system :
//-classe : code to add new post , article ,news , information
// object : post ,article ,news , information
// [ -> ] : object opiratre
// [class] : key word
// [new ] : new object key word
// [public , privat , protected] : visibility 



 class phone {
     //properties
     public $ram;
     public $space;
     public $color;
      
     //methode
     function namefunction(){
         echo 'my function';
     }
 
 }
 $iphone = new phone();
 $iphone->ram="2gb";
 $iphone->space="20gb";
 $iphone->color="red";
 $iphone->namefunction();
 echo "<pre>";
 var_dump($iphone);
 echo "</pre>";
 
 echo '</br>';
 
 echo "<pre>";

$iphone8 = new phone();
$iphone8->ram = "8gb";
$iphone8->space = "200GB";
$iphone8->color = "black";
$iphone8->namefunction();
echo "<pre>";
var_dump($iphone8);
echo "</pre>";
 

 
 