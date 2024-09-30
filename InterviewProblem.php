<?php
function rotateArray(&$nums, $k) {
    $n = count($nums);
    // $k = $k % $n; // Normalize k
// echo "sajid" .$k ." " . $n ."\n";
    // Create a new array to hold the rotated values
    $rotated = [];

    // Move the last k elements to the beginning of the new array
    for ($i = 0; $i < $k; $i++) {
        $rotated[$i] = $nums[$n - $k + $i];
    }

    // Move the remaining elements to the new array
    for ($i = 0; $i < $n - $k; $i++) {
        $rotated[$k + $i] = $nums[$i];
         $rotated[$i] . " ";
      
    }

    // Copy the rotated array back into the original array
    for ($i = 0; $i < $n; $i++) {
       $nums[$i] = $rotated[$i] . " ";
    }

    
}

// Example usage
$nums = [1, 2, 3, 4, 5];
$k = 2;

 rotateArray($nums, $k);
 print_r($nums);
// echo implode(', ', $nums); // Output: 4, 5, 1, 2, 3
?>
