<?php
$password = "admin";
$input = "";

do {
    $input = readline("Please enter the password: ");

    if ($input !== $password){
        echo "Incorrect password.\n";

    }
} while ($input !== $password);
echo "Access Granted.\n"
?>