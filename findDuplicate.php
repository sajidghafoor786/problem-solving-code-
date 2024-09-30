<?php
function duplicateNumber(&$nums)
{
    $NewArray = []; 
    $n = count($nums); //count length of arrays  n= 9
    for ($i = 0; $i < $n; $i++) {
        for ($j = $i + 1; $j < $n; $j++) {
            if ($nums[$i] == $nums[$j]) {
                if (!in_array($nums[$i], $NewArray)) {
                    // Add to NewArray if it's not already there
                   echo $NewArray[] = $nums[$i] . " ";
            }
        }
    }
}
}
$nums = [7, 5, 8, 7, 5, 845, 56, 44, 49, 85, 51, 64,85,44];
// $findNumber = 545;
duplicateNumber($nums);
