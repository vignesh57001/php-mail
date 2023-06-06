<?php

// if(condition){
//     #code ..
// }else if(other condition){
//     #code ..
// }else{
//     #code ..
// }

// $fruit = "Mango";

// if($fruit === 'Banana'){
//     echo "Yes, Selected fruit is banana";
// }else if($fruit === 'Apple'){
//     echo "Not Selected fruit is not banana, its apple";
// }else if($fruit === 'Mango'){
//     echo "Not Selected fruit is not banana, its mango";
// }else{
//     echo "Its an undefined fruit";
// }

$x = 40;
$y = 20;

$given_number = 50;
$sum = $x+$y;
if($sum > $given_number){
    echo $sum." is greater then ". $given_number;
}else if($sum === $given_number){
    echo $sum." is equal to ". $given_number;
}else{
    echo $sum." is smaller then ". $given_number;
}


?>