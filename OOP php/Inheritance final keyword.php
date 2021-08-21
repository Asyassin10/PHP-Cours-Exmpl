<?php

// final method : ma3ndkch l7a9 tktab method f class extends
// final class : ma3ndkch l7a9  extends class

class phone
{
    //properties
    public $ram;
    public $space;
    public $color;

    final public function tele($r, $c, $s)
    {
        $this->space = $s;
        $this->ram   = $r;
        $this->color = $c;
    }
}


class sony extends phone
{
    public $camera;
}
$iphone = new phone();
$iphone->tele("2gb", "red", "100gb");

echo "<pre>";
print_r($iphone);
echo "</pre>";

echo '</br>';

echo "<pre>";

$sony = new sony();
$sony->tele("5gb", "black", "700gb", "25mb");
//$iphone8->own();
echo "<pre>";
print_r($sony);
echo "</pre>";