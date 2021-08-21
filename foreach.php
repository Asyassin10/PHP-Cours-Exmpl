<?php
$name = "yassin";
echo "<h1>".$name."</h1>";

$city = array ( 
    "casa"=> "casablanca",
    "rab"=>"rabat",
    "br"=>"berrchid",
    "ag"=>"agadir",
    "tg"=>"tanger",
    "as"=>"asfi",
    "sl"=>"sala",
    "dr"=>"darwa",
    "nd"=>"nador",
    "dk"=>"dakhla",
    "mr"=>"merrackeh",);
 
 
 foreach($city as $key=> $value){
     echo $value ." ".$key. "</br>";  
 }
?>


