<?php
/*
GET:
--called when getting a property not accesible or not found
--accept two parameter [$prop,$value]


*/ 

class phone{
  public $name;
  public $ram;
  private $color;
  public function __set($prop, $value)   
  {
    echo'this proprty ['.$prop.'] is not found';
    echo'and you cannot assign the value ['.$value.'] to it';
  }
}

$iphone = new phone();
$iphone->color='red';