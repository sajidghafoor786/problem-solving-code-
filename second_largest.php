<?php

function findSecondLargest($array) {
    if (count($array) < 2) {
        return "Array must have at least two elements";
    }

    // Initialize the largest and second-largest numbers
    $largest = PHP_INT_MIN;  //store minimum value in an array
    $secondLargest = PHP_INT_MIN;
echo $largest;
    foreach ($array as $number) {
        if ($number > $largest) {
            // Update second largest before updating largest
            $secondLargest = $largest;
            $largest = $number;
        } elseif ($number > $secondLargest && $number < $largest) {
            $secondLargest = $number;
        }
    }

    // Check if we have a valid second largest number
    if ($secondLargest === PHP_INT_MIN) {
        return "There ";
    }

    return $secondLargest;
}

// Example usage:
$array = [70,45,2,1,56];
echo "The second largest number is: " . findSecondLargest($array);






?>

