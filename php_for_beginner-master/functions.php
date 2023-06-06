<?php

// php function..

function task(){
    return "This is task to do add two numbers";
}

// $task = task();
// print_r($task);
$number = 10;
function add(int $number_1){
    return $number+$number_1;
}

// $sum = add(5,10);

// print_r(add(10));

function greet(string $name = 'Harry'){
    return "Hey, $name I am greet function";
}
// print_r(greet('Deepak'));

// built in functions
// print_r, is_array, strlen, is_null, gettype, date

// print_r()  ... data user interface pr print show krata hai


// is_array it validates the given is array or not..

// true or false

$data = "String...";
$number_list = [1,23,4234,123123,352345];
$validate = is_array($number_list);

$null = NULL;
$len = strlen($data);


$check = is_null($number_list);

$type = gettype($check);

$cutrrent_date_time = date("Y-m-d H:i:s");
print_r($cutrrent_date_time);


?>