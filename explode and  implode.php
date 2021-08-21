<?php
$string = "hello i love php";
echo $string;
//explode:
$array = explode(" ", $string, 0);
echo "<pre>";
print_r($array);
echo "</pre>";
//implode:
$array1 = array("java", "php");
$string1 = implode(" ", $array);
echo "<pre>";
print_r($string1);
echo "</pre>";