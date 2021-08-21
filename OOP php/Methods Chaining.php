<?php
//return $this; : darori khasha tkon bach it3awdo les function
class phone
{
  public  $name;
  public   $ram;
  
  public function hi1()
  {
    echo 'hi number 1';
    return $this;
  }
  
  public function hi2()
  {
    echo 'hi number 2';
    return $this;
  }
  
  public function hi3()
  {
    echo 'hi number 3';
    return $this;
  }
  
}
$iphone = new phone;
$iphone->hi1()->hi2()->hi3();
echo "<pre>";
print_r($iphone);
echo "</pre>";