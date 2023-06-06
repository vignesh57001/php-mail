
<!-- 
get method --- GET
post method --- POST

put method -- PUT
delete method -- DELETE
patch method -- PATCH
...

 -->


 <?php

// $name = $_GET['name'];
// $age = $_GET['age'];

// $name = $_POST['name'];
// $age = $_POST['age'];

// echo "name ---> $name";
// echo "<br>";
// echo "age is $age";


function add(int $number_1,int $number_2){
    return $number_2+$number_1;
}

$number_one = $_POST['number_one'];
$number_two = $_POST['number_two'];

$sum = add($number_one,$number_two);

print_r("sum of $number_one + $number_two = $sum");


?>