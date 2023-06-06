<?php

function myFunction($fruit){
    $fruits = ['apple', 'mango', 'banana', 'orange','lichi'];
    if(in_array($fruit,$fruits)){ //0,1
        return 'Yes, '.$fruit.' is fruit';
    }else{
        return "No given item is not fruit";
    }
}

print_r(myFunction('tomato'));
?>