<?php

// switch & case

// break ... jump outside from current statment
// switch (n){
//     case condition_1:
//         // code to exe 
//         break;
//     case condition_2:
//         // code for condition 2
//         break;
//     case condition_3:
//         // code for condition 3
//         break;
//     default:
//         // code to exe in default mode
//         break;

// }

$variable = true;

switch (gettype($variable)) {
    case "string":
       print_r('Variable is string');
        break;
    case "integer":
        print_r('Variable is integer');
        break;
    case "double":
        print_r("variable is double");
        break;
    default:
        print_r('Type is not defined!');
        break;
}
$a=0;
while ($a <= 10) {
    # code...
    if ($a === 5) {
        # code...
        break;
    }else{
        print_r("number $a");
        print_r("\n");
    }
    $a++;
}

?>