<?php

// do {
//     //code
//     // what have to execute
// }while(condition);

// lets print sum of 25 number...

$x = 0;
$num = 0;
do {
    print_r("Current number is $x");
    print_r("\n");
    $num += $x;
    $x ++;
} while($x < 25);

print_r("Sum of 25 numbers are : $num");

?>