<?php
function merge(&$nums1, $m, $nums2, $n)
{
    // Pointers for nums1 and nums2
    // $i = $m - 1; // Last element of the valid part of nums1
    $j = $n; // Last element of nums2
    $k = $m + $n - 1; // Last position in nums1

    // Iterate from the end of both arrays
    for($i = 0;  $i <  $j ;  $i++) {
        
        $nums1[$k] =  $nums2[$i];
        $k --;
    }
    

   
}

// Example usage:
$nums1 = [1, 2, 3, 10, 15, 0];
$m = 5;
$nums2 = [2, 5, 6, 12];
$n = 4;

merge($nums1, $m, $nums2, $n);
print_r($nums1);
 // Output: [1, 2, 2, 3, 5, 6]
