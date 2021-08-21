<?php
/*
GET:
--called when getting a property not accesible or not found
--accept one parameter [$prop]


*/ 

class phone{
  public $name;
  public $ram;
  private $color;
  public function __get($prop)
  {
    echo'this proprty ['.$prop.'] is not found';
  }
}

$iphone = new phone();
$iphone->color;//get value