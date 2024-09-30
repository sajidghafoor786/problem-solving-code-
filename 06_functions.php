<?php
//   -------------------Functions in Php --------

// functions are block of code that we can run anywhere
// this is the function defination that tells what a function can do

function mohid(){
    $a=5;
    $b=45;

    echo $a + $b;
}

// for run this code we call the function

// mohid();

// Functions have scope for using it

// global scope ---- variable outside the function

// local scope--- variable inside the function

$x=20;
function mohid12(){
    $a=5;
    $b=45;
    
    // for using global variable
    global $x;
    echo $x;


    echo $a + $b;
}

// mohid12();

// for run this code we call the function

function User($name) {
    // variable in function defination is arguments
    echo $name . "Muzammil";
}
// value passed to arguments are parameters
// User('Mohid'); 


// Function with return statement

function sum($n1, $n2) {
    return $n1 + $n2;

}

$number= sum(50, 5);
// echo $number;

// anonymous function is that, the function dont have name we assign it into a variable

$multiply = function($n1, $n2) {
    return $n1 * $n2;
};

// echo $multiply(10, 9);

// function by using arrow function

$subtract = fn($n1, $n2) => $n1-$n2;

echo $subtract(12, 9);



?>