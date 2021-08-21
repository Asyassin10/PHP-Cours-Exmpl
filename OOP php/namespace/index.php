<?php

use iphone\info;
use samsung\info as SamsungInfo;

require "iphone.php";
require "samsung.php";
require "sony.php";
$phone = new sony\Info();
$phone->sayhello();
echo "<pre>";
print_r($phone);
echo "</pre>";
echo "<br>";