<?php

// 1 to n ..

// function functionName(...$number){
//     //code to execute...
// }

// we have write a program to add n numbers?

function add_nubmers(...$numbers){
    $sum = 0; 
    foreach($numbers as $number){
        $sum += $number;
    }
    return $sum;
}

$sum = add_nubmers(1,23,43,12,5454,464,1);

// print_r($sum);

// Write a program to return names in an array ?

function names_array(...$names){
    $appended_names = [];
    $return_string = "";
    foreach($names as $name){
        array_push($appended_names,$name);
        $return_string .= "$name, ";
    }
    return $appended_names;
}

print_r(names_array('Nitin','Shikha','Naveen','Raju'));

?>