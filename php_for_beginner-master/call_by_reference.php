<?php

function increment_refer(&$y){
    $y++;
    return $y;
}

function inrement($y){
    $y++;
    return $y;
}

$x = 1;

$z = increment_refer($x);
print_r("old variable --- >$x");
print_r("\n");
print_r("new variable --- >$z");  // 1


?>