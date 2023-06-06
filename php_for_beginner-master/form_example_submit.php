<?php

$email = $_POST['email'];
$fullName = $_POST['fullName'];
$dob = $_POST['dob'];
$password = $_POST['password'];



$user_collection = [];
$user_collection['email'] = $email;
$user_collection['full_name'] = $fullName;
$user_collection['date_of_birth'] = $dob;
$user_collection['password'] = hash('md5',$password);

print_r($user_collection);

?>