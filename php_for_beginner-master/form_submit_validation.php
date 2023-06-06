<?php

$userName = $_POST['user_name'];
$password = $_POST['password'];

if($userName != ""){
    if ($password != "") {
        # code...
        print_r("Username is $userName and password is $password");
    }else{
        echo "Please fill password!!";
    }
   
}else{
    echo "Please fill username!!";
}



//form validation
// frontend and backend


?>

