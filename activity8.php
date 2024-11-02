<?php
$num = 5;
$factorial = 1;

for ($i = $num; $i > 0;$i--){
    $factorial *= $i;
}

echo "Factorial of $num is: $factorial\n";

?>