<?php
/* $arr = ['12', '24', '59', '38'];
 $sum = 0;
 foreach($arr as $val){
     $sum += $val;
 }

 echo "The Addition : ".$sum; */

//  $array = ['red','green','blue','brown'];

// print_r(array_keys($array));

/* 
$name = ['rahim','karim'];
$age = [20,25];

$newArray = array_combine($name,$age);

echo '<pre>';
print_r($newArray);
echo '</pre>'; */

$name = ['ashanur','rahman','rakib','tamim'];
//positive value count from start 
// $newArray = array_slice($name,1,2);
//negitive value count from end 
$newArray = array_slice($name,-2,2,true);
echo "<pre>";
print_r($newArray);
echo "</pre>";

?>