<?php
// 0+1+2+3+4 print sum of first 5 numbers

// for_loop, while loop, do-while loop, foreach loop..

// for(counter;test case;incremet counter){
//     //code 
//     //activity
// }

$sum = 0;
for($x = 0;$x < 500;$x++){
    echo "current number is : ";
    print_r($x);
    $sum += $x;
    print_r("\n");
}


echo "sum of first 5 numbers : ";
print_r($sum);
?>