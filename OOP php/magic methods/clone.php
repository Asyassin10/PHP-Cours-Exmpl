<?php
// CLONE : typical copy of object in php works by reference means both  (main and copie) object will be interlinked
class phone{
  public $name;
  public $ram;
  public function __construct($n,$r)
  {
    $this->name = $n;
    $this->ram = $r;
  }
}
$iphone = new phone("iphhone 6","5gb");
$copy = clone $iphone;
echo '<pre>';
print_r($iphone);
echo '</pre>';
$copy->ram = "6gb";
echo '<pre>';
print_r($copy);
echo '</pre>';
 