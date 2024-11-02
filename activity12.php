<?php
$word = readline("Input: ");

$reversed = "";

$length = strlen($word);
for ($i = $length-1; $i >= 0; $i--){
    $reversed .=$word[$i];
}

echo "Output: $reversed\n";

?>