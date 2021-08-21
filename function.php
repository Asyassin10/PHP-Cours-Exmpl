<?php
//function

function onetotherty(){
    for($i=1;$i<=30;$i++){
    echo $i."</br>";
    }
    
}
onetotherty();
// function withe argement

function calculeyeras($NAME,$year){
    echo "hello ".$NAME." welcom to this site your age is ".(2021-$year);
}
calculeyeras("yassin",2001);
function mycomboxyear($star,$end){
   echo "<select name='years'>";
    for($ans=$star;$ans<=$end;$ans++)
    {
        echo "<option value='$ans'>" .$ans. "</option>";
    }
    echo "</select>";
}
mycomboxyear("2000","2021");//oussama
mycomboxyear("1990","2030");//khalid

//function echo-return
function mltinum($num){
    $res = $num * $num;
    return $res;
}
echo mltinum("115");

function getticken($user , $ans){
    $tickt = rand(1000,50000);
    if($ans>30){
        $msg = "helle mr ".$user. " your age is ".$ans."</br>";
        $msg .= "and you can entre your tik is :[".$tickt."]";
    }
    else{
        $msg = "helle mr ".$user."your age is".$ans."</br>";
        $msg .= "and you cant entre we sorry :(";
    }
    return $msg;
}
$id = getticken("oussama",34);
echo $id;

?>


