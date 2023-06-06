<?php

// array 3 types

// 1. indexed array.
// 2. associative array.
// 3. multi dimenstion array.

// ---> index array [], array()
$data_types = array('number','integer','string','double','float'); //index array

// print_r($data_types[4]);

// ----> associative array 
$data_type = [
    'string' => 'Deepak',
    'integer' => 24,
    'float' => 6.1,
    "boolen" => true
];

// print_r($data_type['float']);
// foreach($data_type as $key => $value){

// }

// ----> Multi dim array    
$details = [
    'name' => 'Deepak',
    'age' => 24,
    'height' => 6.1,
    "is_good" => true,
    "address" => [
        'city' => 'delhi',
        'area' => 'cp',
        'pincode' => 110057,
        'flat_details' => [
            'xyz',
            'abc'
        ]
    ]
];
print_r($details['address']["flat_details"][1]);



?>