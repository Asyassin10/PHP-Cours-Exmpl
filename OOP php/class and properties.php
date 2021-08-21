 <?php
 //class & object
 // class is a blue print that u can create object from
 //object is a member in the main application 
 //class has properties
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
     public $ram;
     public $space;
     private $color;
     function setcole($color){
         $this->color= $color;
     }
 }
 $iphone = new phone();
 $iphone->setcole("pink");
 $iphone->ram="2gb";
 $iphone->space="20gb";
 //$iphone->color="red";
 echo "<pre>";
 var_dump($iphone);
 echo "</pre>";
 
 echo '</br>';
 
 echo "<pre>";
$iphone8 = new phone();
$iphone8->setcole("red");
$iphone8->ram = "8gb";
$iphone8->space = "200GB";
//$iphone8->color = "black";
var_dump($iphone8);
echo "</pre>";
 

 
 