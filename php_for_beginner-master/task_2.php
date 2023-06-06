<?php

// Write a program for grettings.. 
// good moring <12
// 12 <= good after noon
// 5 <= good evening
// 8 <= good night 

// Time in 24 hr 

// && and ||
$time = 21; //9
if($time < 12){
    echo "Good Morning";
}else if($time >= 12 && $time < 17){
    echo "Good Afternoon";
}else if($time >= 17 && $time < 20){
    echo "Good Evening";
}else {
    echo "Good Night";
}

?>