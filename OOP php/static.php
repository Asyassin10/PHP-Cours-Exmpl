<?php

class phone
{
  public static $name;
  public  static $ram;
  public static function mysony()
  {
    echo 'hi';
    //this : maymkanch nktboha ila kan method static
  }
}
$iphone = new phone;
echo $iphone::mysony();