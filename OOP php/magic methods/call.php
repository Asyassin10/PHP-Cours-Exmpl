<?php
//magic method: 
// mthode with special name start with double undersocre [__]

// construct : 
//-- called where object is created
//-- can be Inherited
class  sony{
  public  $ram;
  public  $name;
  public  function __call($method, $paramter)
  
  {
      echo 'sorry this method '.$method.' not found';
  }

}

$phone = new sony("12gb","yassin");
$phone->madara();