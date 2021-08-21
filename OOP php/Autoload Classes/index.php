<?php
spl_autoload_register(function ($class) {

  require "classes/" . $class . ".php";
});
$var = new test2();
print_r($var);