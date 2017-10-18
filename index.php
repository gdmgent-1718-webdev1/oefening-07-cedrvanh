<?php 

function Fibonacci($length) {
    $a = 0;
    $b = 1;

    for ($i = 0; $i < $length; $i++) {
        $temp = $a;
        $a = $b;
        $b = $temp + $b;

        // Show numbers
        echo $a . "<br>" . PHP_EOL; 
    } 
}

echo Fibonacci(100);