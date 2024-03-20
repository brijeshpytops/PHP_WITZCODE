<?php
function printFibonacci($n) {
    $first = 0;
    $second = 1;
    echo "Fibonacci Series up to $n terms:\n";
    echo "$first, $second";

    for ($i = 2; $i < $n; $i++) {
        $next = $first + $second;
        echo ", $next";
        $first = $second;
        $second = $next;
    }
}

$terms = 10;
printFibonacci($terms);
?>
