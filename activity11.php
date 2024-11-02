<?php
$num1 = 0;
$num2 = 1;

$count = 0;

while($count < 10){
    echo $num1. " ";

    $next = $num1 + $num2;

    $num1 = $num2;
    $num2 = $next;

    $count++;
}

?>