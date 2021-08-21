<?php
//magic method: 
// mthode with special name start with double undersocre [__]

// construct : 
//-- called when object is created
//-- can be Inherited

//Destruct :
// -- called when object is Destroyed
class  sony
{
  public  $ram;
  public  $name;
  public  function __construct($r, $nm)
  {
    $this->ram = $r;
    $this->name = $nm;
    echo "hello mr " . $nm . " your ram has " . $r;
  }
}

$phone = new sony("12gb", "yassin");