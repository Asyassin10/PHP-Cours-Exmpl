<?php
// $_GET: nafs lakjda  dyal post gha hiya maktbynch lk les donn f url

$admin = array("uchiha","madara","yassin");
$user= $_POST['user'];
if(in_array($user,$admin)){
    echo "welcom mr ".$user."to this page";
}
else{
 echo   "sorry your password or user its not exist";
}

