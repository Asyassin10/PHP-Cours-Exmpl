<?php
//mdir : create folder
//rdir: remoove folder
//is_dir : ila kan folder
//unlink(smit file):kimsa7 lfile
$name = "yain";
mkdir($name);
echo "the folder is create";
if(is_dir($name)){
    rmdir($name);
    echo "the folder ".$name."is deletd";
}
else {
    mkdir($name);
    echo "the folder ".$name." is create";
}
 




