<?php

// types of string def
// 1. single quoted
// 2. double quoted
// 3. heredoc syntax

$string = 'this is deepak ' . "\n". 'lkhdadh';

$str = "this is deepak $string \n";

// heredoc
$strr = <<<Demo
this is deepak..
i m from delhi

Demo;

print_r($strr);

//php buil in functions
// strlen, str_replace, strtoupper, strtolower, ....


?>