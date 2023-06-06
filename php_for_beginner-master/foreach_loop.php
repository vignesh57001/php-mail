<?php

// $numbers = ['num_1' => 1, 'num_2' => 2, 'num_3'=> 5, 'num_4' => 6, 'num_5' => 10];

// //array and key value pair objects & json key value pair 
// // we use foreach loop

// // foreach("$variable of array" as $value){
// //     // code to be executed...
// // } 

// foreach($numbers as $key => $number){
//     print_r("Current number is $key -> $number <br>");
// }

$basket = [
    'fruit_1' => 'banana',
    'fruit_2' => 'apple',
    'fruit_3' => 'lichi',
    'number_5' => 10
];

foreach($basket as $item_key => $item){
    if($item_key === 'number_5'){
        print_r("$item_key  ===> $item  .... thats a number not fruit <br>");
    }else{
        print_r("$item_key ===> $item ... yeah thats a fruit <br>");
    }
}



?>