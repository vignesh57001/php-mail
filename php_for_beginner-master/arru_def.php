<?php

function toPrintSerice( int $to, int $from = 0){ /// default value arrguments they from right side
    $ser = []; //null array
    for ($i=$from; $i < $to+1; $i++) { 
        # code...
        array_push($ser,$i);
    }
    return $ser;
}

$seq = toPrintSerice(10,-5);

print_r($seq);

?>