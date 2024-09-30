<?php
function SearchingArray(&$nums, $f)
{
    $n = count($nums);
    $value = -1;
    for ($i = 0; $i < $n; $i++) {
        if ($f == $nums[$i]) {
            $value = $i;
            echo 'this is your find number ' . $f . "and index of " . $i;
        }  
    }
    if($value == -1){
        echo "this is number not found please enter valid number ";
    }
}
$nums = [1, 5, 8, 7, 5, 845, 56, 44, 49, 85, 51, 64];
$findNumber = 545;
SearchingArray($nums, $findNumber);
