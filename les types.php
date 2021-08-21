<?php 
$var1 = 100;
$var2 = 1.20;
$var3 = "text";
$var4 = true;
$var5 = null;
$var6 = array( "a" =>"val1","b" =>"val2","c" =>"val3","d" =>"va41",);
class book {
function book(){
    $this->genre = "adv";
}
}
$var7 = new book();
?>
<?php 
//Les type
echo"
<title>Les types data</title>";
echo "<h1>letyp</h1>";
echo gettype($var1). "</br>" ;
echo gettype($var2) . "</br>" ;
echo gettype($var3) . "</br>" ;
echo gettype($var4) . "</br>" ;
echo gettype($var5) . "</br>" ;
echo gettype($var6). "</br>"  ;
echo gettype($var7). "</br>"  ;
//Dump type
echo "<h1>type dump</h1>";
var_dump($var1) ;
echo  "</br>";
var_dump($var2) ;
echo  "</br>";
var_dump($var3) ;
echo  "</br>";
var_dump($var4) ;
echo  "</br>";
var_dump($var5) ;
echo  "</br>";
var_dump($var6) ;
echo  "</br>";
var_dump($var7) ;
echo  "</br>";

?>
