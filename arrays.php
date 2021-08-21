<?php

$daysfood = 
array("milk","milk","milk","banana","apple","tomat","botat","tacos","pizza","humberger");


foreach($daysfood as $key=>$foods)
{
    echo "<h2> in ".$key." i will eat :</h2>";
    foreach ($foods as $item) {
        echo $item."</br>";
    }
}

//shearche in array:
//in array(smit hadik likt9lb 3liha ,smit arry , true/false dyal types)
//array_search (smit hadik likt9lb 3liha ,smit arry , true/false dyal types)
//array_key_exists(key ,smit arry )
if(in_array("milk", $daysfood)){
    echo "yes";
}
else{
    "no";
}
echo "<br>";
$lang = array_search("banana",$daysfood,true);
echo $lang."<br>";
echo $daysfood[$lang];

// array add:
//array_push(smit array,value1,value2.....)
//array_unshift(smit array,value1,value2.....)les values lizdti ki7athom homa lawlin
array_unshift($daysfood,"tomat","meat","nodls");
echo "<pre>";
echo print_r($daysfood) ;
echo "</pre>";

// array remov :
//array_pop(smit array) katmsa7 akhir value kaina f array
//array_shift(smit array) katmsa7 awal value kaina f array
array_pop($daysfood);
echo "<pre>";
echo print_r($daysfood) ;
echo "</pre>";

//Array - Sort:
//sort(smit array) kiratb lk array mn a tal z wla mn 1 tal 9;
//rsort(smit array,typ sort) kiratb lk array 3la 7sab tyb lidarti 
//asort(smit array,typ sort)ila kan key =>
//ksort(smit array,typ sort)
//arsort(smit array,typ sort)ila kan key =>
//krsort(smit array,typ sort)
 //sort arrays in ascending order
//rsort() - sort arrays in descending order
//asort() - sort associative arrays in ascending order, according to the value
//ksort() - sort associative arrays in ascending order, according to the key
//arsort() - sort associative arrays in descending order, according to the value
//krsort() - sort associative arrays in descending order, according to the key
 array_reverse($daysfood , true);
 sort($daysfood);


// array Shuffle, Reverse :
//arrat_Reverse(smit array,presrve) mn lakher l lawl l3aks presrve=treu/false
//shuffle(smit array); kikhrb9 lk arrays bchakl 3achwa2i
shuffle($daysfood);


//Array Fill:
//array_fill(index,number,value) kadir key ,kadir l3adad dyal lkalma , kadir value wla kalma ta3k
$arrayf= array_fill(1,39,"madara");
echo "<pre>";
echo print_r($arrayf) ;
echo "</pre>";


//array sum:
//array_sum(smit array) kijma3 lina les valus d array; khas ikono ar9am --string=0
$numbers = array(123,3,34,3,3);
$sum =array_sum($numbers);
echo "<pre>";
echo print_r($numbers) ;
echo "</pre>";
echo $sum;


//Array Rand:
//array_rand(smit array,number,) i3tik l2a3dad values li darti okikono 3achwa2iyin
$arrayrand= array_rand($daysfood,3);
echo "<pre>";
echo print_r($daysfood) ;
echo "</pre>";
echo $daysfood[$arrayrand[0]]."</br>";
echo $daysfood[$arrayrand[1]]."</br>";
echo $daysfood[$arrayrand[2]]."</br>";



//Array Unique
//array_unique(smit array) kimsa7 chi value m3awdaa okikhali wa7da kims7ha b key ta3ha
$uniq= array_unique($daysfood);
echo "<pre>";
echo print_r($daysfood) ;
echo "</pre>";
echo "<pre>";
echo print_r($uniq) ;
echo "</pre>";
function myfunction(){
    echo "";
}?>
<a href="index.php">click</a>



















