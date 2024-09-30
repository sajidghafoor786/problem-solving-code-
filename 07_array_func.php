<?php

// Array function in php

$fruits = ['apple', 'mango', 'grapes', 'banana', 'pear', 'peach'];

// get length

// echo count($fruits);

// search array=======search specific value from array

// var_dump(in_array( 'apple', $fruits));

// Add things to array\\

$fruits[] = 'banana';
// another function to add value in array

array_push($fruits, 'cherry', 'strawberry', 'blueberry', 'water-melon');


// for addding things in the beginning
array_unshift($fruits, 'dragon-fruit', 'Melon', 'Orange', 'Lychee');


// reomove data from array

array_pop($fruits);

// remove from beginning
array_shift($fruits);
array_shift($fruits);
array_shift($fruits);
array_shift($fruits);
array_shift($fruits);

// reomve dat from specific index in array

unset($fruits[5]);

// split into chunks


// $chunk = array_chunk($fruits, 2);

// print_r($chunk);

// print_r($fruits);
 

// concatenate anad merge an array

$arr1 = ['1', '2', '3', 'mohid'];
$arr2 = ['4', '5', '6'];

$arr3= array_merge($arr1, $arr2, $fruits);

// another method for merging with spread operator(.... )

$arr4=[...$arr1, ...$arr2];

//combine array with keys and values

$a1=['chawal', 'acha', 'khach', 'chuttiya']; #keys 
$a2=['kaleem', 'Mohid', 'Usman', 'Ameer']; #values

$c3=array_combine($a1, $a2);
// print_r($c3);

// get only keys 

$keys= array_keys($c3);
// print_r($keys);

// get only values
$keys= array_values($c3);
// print_r($keys);


// convert keys into values and values into arrays

$flipped=array_flip($c3);
// print_r($flipped); 


// lets get the range of numbers in array
$number= range(1,100);
// print_r($number);



// print_r($arr3);

// Send each value of an array to a function, multiply each value by itself, and return an array with the new values
// -------syntax--------
// array_map(functionName,arr1,arr2...)

$newNUmber= array_map(function($number) {
    return "Number ${number}";
}, $number);
// print_r($newNUmber);

// get value by filter

$lessthan10= array_filter($number, fn($number) =>
$number <= 20);

print_r($lessthan10);


function myfunction($num)
{
  return($num*$num);
}

$a=array(1,2,3,4,5);
print_r(array_map("myfunction",$a));


// reduce is used to adding all values (carry return the value)

$sum= array_reduce($number, fn($carry, $number) => 
$carry + $number);

print_r($sum);

?>

