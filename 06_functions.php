<?php

// Approach 1

function registerUser($email) {
    echo $email . ' registered';
};
registerUser('Loyd');


// Approach 2

function sum($n1, $n2) {
    return $n1 + $n2;
};
$number = sum(5, 5);
echo $number;


// Approach 3

$subtract = function($n1, $n2) {
    return $n1 - $n2;
};
echo $subtract(100, 34);


// Approach 4

$multiply = fn($n1, $n2) => $n1 * $n2;
echo $multiply(87, 45);


?>