<?php

function findSecondLargest($array) {
    $n = count($array);

    if ($n < 2) {
        return "Array must have at least two elements";
    }

    // Assume the first two elements are the largest and second largest
    $largest = $array[0] > $array[1] ? $array[0] : $array[1];
    $secondLargest = $array[0] < $array[1] ? $array[0] : $array[1];
echo $largest;
echo $secondLargest;
    // Start loop from the third element
    
    for ($i = 2; $i < $n; $i++) {
        if ($array[$i] > $largest) {
            $secondLargest = $largest;
            $largest = $array[$i];
        } elseif ($array[$i] > $secondLargest && $array[$i] < $largest) {
            $secondLargest = $array[$i];
        }
    }

    return $secondLargest;
}

// Example usage:
$array = [9, 4, 2, 51, 56];
echo "The second largest number is: " . findSecondLargest($array);

?>
